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
    public function auth(){
        $username = Request::get('username');
        $password = Request::get('password');
        $user = DB::table("resellers")->where('username',$username)->first();
        if(isset($user->id)){
            $salt = $user->salt;
            $hash = sha1($password.$salt);
            if($user->password == $hash){
                $this->createSession($user);
                return redirect('/');
            }else{
                return view('reseller.login_error');
            }
        }else{
            return view('reseller.login_error');
        }
    }
    private function createSession($user){
        session(['reseller_session'=>['id'=>$user->id,'login_dt'=>date("Y-m-d H:i:s")]]);
       
    }
    public function partner_login(){
      return view('reseller.merchant_login');
    }
    public function forgot_password(){
      return view('reseller.forgot_password');
    }

    public function dashboard(){
    	$sess = session('reseller_session');
    	$reseller = DB::table("resellers")->where("id",$sess['id'])->first();
        $summary = $this->summary($reseller->id);
    	return view('reseller.dashboard',[
                                            'subscriptions'=>$this->subscriptions($reseller->id),
                                            'referral_code'=>$reseller->referral_code,
    										'summary'=>$summary,
    										]);
    }
    private function summary($reseller_id){
    	$total_customers = intval(DB::table("reseller_customers")->where("reseller_id",$reseller_id)->count());
    	$total_revenue = intval(DB::table("reseller_daily_revenue")
                ->where("reseller_id",$reseller_id)->groupBy('reseller_id')->sum('amount'));
        
    	return array('total_customers'=>$total_customers,
    					'total_revenue'=>$total_revenue
    						);
    }
    private function subscriptions($reseller_id){
        $subscribers = DB::table('users')
            ->join('reseller_customers', 'users.id', '=', 'reseller_customers.user_id')
            ->where('reseller_customers.reseller_id',$reseller_id)
            ->select('users.name', 'reseller_customers.trx_type', 'users.phone_number','users.email','reseller_customers.subscribe_date')
            ->get();
        return $subscribers;
    }
    private function batch_files($vendor_id){
    	$files = DB::table("voucher_batch")->where("vendor_id",$vendor_id)->take(100)->get();
    	return $files;
    }


}