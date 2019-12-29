<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('login_m');
		$this->load->model('content_m');
	}
	public function index()
	{
		
		// ****** This is Login/
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://www.rew.ca/properties/autocomplete?term=a",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "Accept: */*",
		    "Accept-Encoding: gzip, deflate",
		    "Cache-Control: no-cache",
		    "Connection: keep-alive",
		    "Cookie: __cfduid=d8a9efe42bdb11391160dde076e6159bc1573149331; areaOfInterestCity=Fremont; areaOfInterestCountry=US; __cfruid=0ae0da2107f7073e4ff9b0e51299f354ce8989da-1573149331; session=BAhJIiVmM2Y5OWJiZTExMzFjZDYzZTI0MzRiNTU2NTJlNGViMgY6BkVU--cd393ee2e0f47855fd1ab36abc5369683f3a033f; _rew_ca_session=OEIweTBqbmZCUEU3R3c4RCtFcUtXOTZOcUZHc1FBNTVSRDBYczdWeFVjNzNDMnBFSHErQW1tcW05cDQ2MWlyVHd1RXVVd0h2N1pLUnFhTG1HbnlMckVQaU1sbkdHK2NJd2wyb3F3U0x6QlZjRXdvMlA2RlIzZXcvNTM3MEU4d3lLdGU4ZklVTjlod3JncWhDcm9Felk5dnJDTVI4OTMyb0FnajZrZ20xWmtPRjhHdDMwdlpIczVPZzB1R054MUxGLS1NNnlXc2RHcFhRQUxjWDRtQStlVWl3PT0%3D--ae41cb5450e4d0f5a86d50a9e2b325721f1053e2",
		    "Host: www.rew.ca",
		    "Postman-Token: eddc6513-a27c-4470-81b6-a89832cb3dcc,33696743-f340-4f4d-9c4b-0c47ecc8c063",
		    "User-Agent: PostmanRuntime/7.19.0",
		    "cache-control: no-cache"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  echo $response;
		}

		$post = [
		    'username' => "taifu",
		    'password' => "zui19950522",
		    'networkId' => 0,
		    'rememberMe' => false
		];

		$post = json_encode($post, true); 

		$ch = curl_init('http://avacms10.scala.com/ContentManager/api/rest/auth/login');
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
		curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
		curl_setopt( $ch, CURLOPT_POSTFIELDS, $post );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, array(
		                    'Content-Type: application/json',
		                    'Content-Length: ' . strlen( $post )
		                )
		);
		$res        = curl_exec( $ch );
		$httpStatus = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
		curl_close( $ch );


		// print_r($res);
		$ping = curl_init('http://avacms10.scala.com/ContentManager/api/rest/auth/ping');
		curl_setopt( $ping, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ping, CURLOPT_FOLLOWLOCATION, true );
		curl_setopt( $ping, CURLOPT_CUSTOMREQUEST, 'POST' );
		// curl_setopt( $ch, CURLOPT_POSTFIELDS, $post );
		curl_setopt( $ping, CURLOPT_HTTPHEADER, array(
		                    'Content-Type: application/json',
		                    // 'Content-Length: ' . strlen( $post )
		                )
		);
		$res        = curl_exec( $ping );
		$httpStatus = curl_getinfo( $ping, CURLINFO_HTTP_CODE );
		curl_close( $ping );
		
		print_r($ping);
		// This is Uplaod 
		//  /api/rest/fileupload/init
		 $post = [
		    'filename' => 'img/1.png',
		    'filepath' => "0000-RL",
		    'uploadType' => "media_item"
		];

		$post = json_encode($post, true); 

		$ch = curl_init('http://avacms10.scala.com/ContentManager/api/rest/fileupload/init');
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
		curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
		curl_setopt( $ch, CURLOPT_POSTFIELDS, $post );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, array(
		                    'Content-Type: application/json',
		                    'Content-Length: ' . strlen( $post )
		                )
		);
		print_r($ch);
		$res        = curl_exec( $ch );
		$httpStatus = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
		curl_close( $ch );


		print_r($res);


		

	}
}