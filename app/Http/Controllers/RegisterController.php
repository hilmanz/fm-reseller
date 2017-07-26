<?php
/*
* Controller for handling New Reseller Registration
*/
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Config;
use DB;
use Response;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
	var $errors = array();
    public function form(){
      return view('register.form');
    }
    public function submit(Request $request){
    	$status = 0;
    	if(!$this->isAccountExists(
    								$request->get('username'),
    								$request->get('email'))
    	){
    			$referral_code = $this->generateReferralCode();
    	
	    	 	$this->validate($request, [
	        		'username' => 'required|unique:resellers|max:255',
	        		'email' => 'required|email',
	        		'password'=>'required|min:8',
	        		'name'=>'required',
	        		'address'=>'required',
	        		'ktp'=>'required'
	    		]);
    			$salt = md5(time().'-'.rand(0,9999));
			    $data = [
				'salt'=> $salt,
				'username'=>$request->get('username'),
				'password'=>sha1($request->get('password').$salt),
				'name'=>$request->get('name'),
				'email'=> $request->get('email'),
				'birthday'=>$request->get('birthday'),
				'address'=>$request->get('address'),
				'phone'=>$request->get('phone'),
				'mobile'=> $request->get('mobile'),
				'ktp'=>$request->get('ktp'),
				'npwp'=>$request->get('npwp'),
				'referral_code'=>$referral_code,
				'register_date'=>date("Y-m-d H:i:s"),
				'n_status'=>0
				];
		    	$rs = DB::table("resellers")->insert($data);
		    	if(intval($rs)>0){
		    		$status = 1;
		    		$msg = "Selamat ! Anda telah terdaftar ke dalam program reseller kami. Silahkan cek email anda untuk petunjuk aktivasi akun anda !";
		    	}else{
		    		$msg = "Mohon maaf, terjadi kesalahan dalam memproses data anda. Silahkan coba lagi nanti !";
		    	}
    		

	    	
	    }else{
	    	$msg = "Mohon maaf, sepertinya username dan email yang anda masukkan sudah pernah terdaftar di sistem kami. 
	    			Silahkan masukkan username atau email yang lain.";
	    	
	    }
	    return view('register.result',['status'=>$status,'msg'=>$msg]);
    }
    private function generateReferralCode(){
    	while(1){
    		$code = "";
			$arr = ['B','C','G','H','5','J','K','A','D','9','X','Y','Z','L',
					'M','N','P','Q','R','S','T','U','V','W','X','Y','Z','2','3','4','5','6','7','8','9'];
			for($i=0;$i<8;$i++){
				$code.=$arr[rand(0,sizeof($arr)-1)];
			}		
			$check = DB::table("resellers")->where("referral_code",$code)->first();
			if(!isset($check->id)){
				return $code;
			}
    	}
	

    	
    }
    private function isAccountExists($username,$email){
    	$rs = DB::table("resellers")->where('username',$username)
    				->orWhere('email',$email)->first();
    	
    	if(isset($rs->id)){
    		return true;
    	}
    }

}