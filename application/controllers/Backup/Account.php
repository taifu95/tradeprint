<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('login_m');
		$this->load->model('content_m');
	}
	public function index()
	{
		if($this->session->has_userdata('user_name')==1){
			$this->load->view('dash/account_v');
		}
		else{
			$data['about'] = $this->content_m->get_port();
			$this->load->view('dashboard',$data);
		}
	}
	public function get_account(){
		$user_id = $this->session->userdata('user_id');
		$data = $this->login_m->get_account($user_id);
		$data = json_encode($data);
		echo $data;
	}
	public function update_account(){
		$tbl_id = $this->input->post('tbl_id',true);
		$first_name = $this->input->post('first_name',true);
		$last_name = $this->input->post('last_name',true);
		$pwd = $this->input->post('new_pwd',true);
		$email = $this->input->post('email',true);
		$phone = $this->input->post('phone',true);
		$service = $this->input->post('service',true);
		$data = $this->login_m->update_account($tbl_id,$first_name,$last_name,$pwd,$email,$phone,$service);
		$data = json_encode($data);
		echo $data;
	}
	public function api(){

		// curl_setopt_array($curl, [
		//     CURLOPT_RETURNTRANSFER => 1,
		//     CURLOPT_URL => 'http://avacms10.scala.com/ContentManager/api/rest/auth/login/',
		//     CURLOPT_USERAGENT => 'Codular Sample cURL Request',
		//     CURLOPT_POST => 1,
		//     CURLOPT_POSTFIELDS => [
		//         'username' => 'taifu',
		//         'networkId' => 0,
		//         'rememberMe' => false,
		//         'password' => 'zui19950522'
		//     ]
		// ]);
		// $resp = curl_exec($curl);
		// curl_close($curl);$curl = curl_init();
		// $params=['username'=>'taifu', 'password'=>'zui19950522', 'networkId'=>0 ,'rememberMe' => false];
		// $defaults = array(
		// 	CURLOPT_URL => 'http://avacms10.scala.com/ContentManager/api/rest/auth/login/',
		// 	CURLOPT_POST => true,
		// 	CURLOPT_POSTFIELDS => $params,
		// );
		// $ch = curl_init();
		// curl_setopt_array($ch, ($defaults));


		// // $params = array('url' => 'http://avacms10.scala.com/ContentManager/api/rest/auth/login/',
  // //           'host' => '',
  // //           'header' => '',
  // //           'method' => 'GET', // 'POST','HEAD'
  // //           'referer' => '',
  // //           'cookie' => '',
  // //        	'post_fields' => '',
  // //                	['username' => 'taifu'],
  // //                  	['password' => 'zui19950522']  ,   
  // //                  	['networkId' => 0]     ,
  // //                  	['rememberMe' => false]   ,  
  // //           'timeout' => 20
  // //       );
		// $ch = curl_init();
  //       curl_setopt($ch, CURLOPT_URL, "http://avacms10.scala.com/ContentManager/api/rest/auth/login/");
		// curl_setopt($ch, CURLOPT_HEADER, 0);
		// curl_setopt($ch, CURLOPT_POSTFIELDS, [
	 //        'username' => 'taifu',
	 //        'networkId' => 0,
	 //        'rememberMe' => false,
	 //        'password' => 'zui19950522'
	 //    ]);

  //       $result = curl_exec($ch);
  //       return $result;
  //       if ($result['curl_error'])    throw new Exception($result['curl_error']);
  //       if ($result['http_code']!='200')    throw new Exception("HTTP Code = ".$result['http_code']);
  //       if (!$result['body'])        throw new Exception("Body of file is empty");



        // 
		$data = array(
			'username' => 'taifu',
	        'networkId' => 0,
	        'rememberMe' => false,
	        'password' => 'zui19950522'
		);
		$data_string = json_encode($data);
		echo $data_string;
		$ch = curl_init('http://avacms10.scala.com/ContentManager/api/rest/auth/login/');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		    'Content-Type: application/json',
		    'Content-Length: ' . strlen($data_string))
		);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

		//execute post
		$result = curl_exec($ch);

		//close connection
		curl_close($ch);

		echo $result;
	}
}
