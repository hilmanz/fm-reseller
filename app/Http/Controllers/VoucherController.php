<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Config;
use DB;
use Response;
use Request;
class VoucherController extends Controller
{
    public function voucher_list(){
        return view('voucher.list');
    }
    public function generate_voucher(){
        return view('voucher.generate');
    }
    public function report(){
        return view('voucher.report');
    }   
    public function batch_files(){
        return view('voucher.files');
    }
    public function download_batch(){

    }
    public function buy_voucher(){
        return view('voucher.buy');
    }
    public function payment(){
        
    }
   
}