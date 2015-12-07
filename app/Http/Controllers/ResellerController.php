<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Config;
use DB;
use Response;
use Request;
class ResellerController extends Controller
{
    public function register(){
      return view('reseller.register');
    }
    public function login(){
      return view('reseller.login');
    }
    public function forgot_password(){
      return view('reseller.forgot_password');
    }

    public function dashboard(){
    	
    	$vendor_id = 1;

    	//the lsist of available vouchers
    	$vouchers = DB::table("vouchers")
    				->where("vendor_id",$vendor_id)
    				
    				->orderBy('id','desc')
    				->take(100)
    				->get();
    	
    	//summary stats
    	$summary = $this->summary($vendor_id);

    	for($i=0;$i<sizeof($vouchers);$i++){
    		$sold = DB::table("voucher_sold")
    				->select('voucher_no')
    				->where("vendor_id",$vouchers[$i]->vendor_id)
    				->where("voucher_no",$vouchers[$i]->voucher_no)->first();
    		if(isset($sold->voucher_no) && $sold->voucher_no == $vouchers[$i]->voucher_no){
    			$vouchers[$i]->is_sold = 1;
    		}else{
    			$vouchers[$i]->is_sold = 0;
    		}

    	}

    	$batches = $this->batch_files($vendor_id);
    	return view('reseller.dashboard',['vouchers'=>$vouchers,
    										'summary'=>$summary,
    										'batches'=>$batches]);
    }
    private function summary($vendor_id){
    	$available = intval(DB::table("vouchers")->where("vendor_id",$vendor_id)->where("n_status",0)->count());
    	$redeemed = intval(DB::table("vouchers")->where("vendor_id",$vendor_id)->where("n_status",1)->count());
    	$sold = intval(DB::table("voucher_sold")->where("vendor_id",$vendor_id)->count());
    	return array('available'=>$available,
    					'redeemed'=>$redeemed,
    						'sold'=>$sold);
    }
    private function batch_files($vendor_id){
    	$files = DB::table("voucher_batch")->where("vendor_id",$vendor_id)->take(100)->get();
    	return $files;
    }
}