<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('login_m');
	}
	public function index()
	{
		// if($this->session->has_userdata('user_name')==1){
			// $this->session->sess_destroy();

			$this->load->view('dashboard');
		// }
		// else{
		// 	$this->load->view('login');
		// }
	}
	public function get_data(){
		$data = $this->login_m->get_data();
		$data = json_encode($data);
		echo $data;
	}
	public function add_user(){
		$name = $this->input->post('name',true);
		$level = $this->input->post('level',true);
		$business_name = $this->input->post('business_name',true);
		$data = $this->login_m->add_user($name,$level,$business_name);
		$data = json_encode($data);
		if(json_decode($data,true) == "success"){
			 $config = Array(
	            'protocol' => 'smtp',
	            'smtp_host' => 'mail.inex.net',
	            'smtp_port' => 465,
	            'smtp_user' => 'support@inex.net',
	            'smtp_pass' => '4&mbhR[FGMqi',

	            'mailtype' => 'html'        
	         );
		  
			 $this->load->library('email', $config);
			 $config['protocol'] = 'smtp';
	         $config['smtp_host'] = 'mail.inex.net';
	         $config['smtp_port'] = 465;
	         $config['smtp_user'] = 'support@inex.net';
	         $config['smtp_pass'] = '4&mbhR[FGMqi';
	         $config['mailtype'] = 'html';
	         $config['smtp_crypto'] = 'ssl';
	         $config['crlf'] = '\r\n';
	         $config['newline'] = '\r\n';
	         $config['wordwrap'] = FALSE;

	         $this->email->initialize($config);
			 $this->email->set_newline("\r\n");
	
			 // THis is true
			 $this->email->from("inex.net","CodeRiddles Support");
	
			 $this->email->to($name);
	
	
			 $this->email->subject(" Welcome to our site");
			 $this->email->message("
			 You are registeried inex.net
			 User Name : ".$name."
	
	
			 From: CodeRiddles Support <inex.net>
			 Sent: ".date("F j, Y, g:i a")."
			 To: ".$name.
			
			 "
			 Thank you,
			 Rusty Latenser
			 INEX
			 405.414.7120 "	);
			 $result = $this->email->send();
		}
		echo $data;
	}
	public function update_user(){
		$tbl_id = $this->input->post('tbl_id',true);
		$name = $this->input->post('name',true);
		$business_name = $this->input->post('business_name',true);
		// $pwd = $this->input->post('pwd',true);
		// $email = $this->input->post('email',true);
		$level = $this->input->post('level',true);
		$data = $this->login_m->update_user($tbl_id,$name,$business_name,$level);
		$data = json_encode($data);
		echo $data;
	}
	public function update_lock(){
		$tbl_id = $this->input->post('tbl_id',TRUE);
		$mark = $this->input->post('mark',TRUE);
		$data = $this->login_m->update_lock($tbl_id,$mark);
		$data = json_encode($data);
		echo $data;
	}
	public function update_em_status(){
		$business_name = $this->input->post('business_name',TRUE);
		$mark = $this->input->post('mark',TRUE);
		$data = $this->login_m->update_em_status($business_name,$mark);
		$data = json_encode($data);
		echo $data;
	}
	public function update_bus_active(){
		$business_name = $this->input->post('business_name',TRUE);
		$mark = $this->input->post('mark',TRUE);
		$data = $this->login_m->update_bus_active($business_name,$mark);
		$data = json_encode($data);
		echo $data;
	}
	public function delete_user(){
		$tbl_id = $this->input->post('tbl_id',true);
		$level = $this->input->post('level',true);
		$business_name = $this->input->post('business_name',true);
		$data = $this->login_m->delete_user($tbl_id,$level,$business_name);
		$data = json_encode($data);
		echo $data;
	}
}
