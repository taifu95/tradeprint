<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('login_m');
		$this->load->model('content_m');
	}
	public function index()
	{
		$this->session->sess_destroy();
		$data['about'] = $this->content_m->get_port();
		$this->load->view('dashboard',$data);
	}
	public function log(){
		$name = $this->input->post('name',true);
		$pwd = $this->input->post('pwd',true);
		$data = $this->login_m->log_in($name,$pwd);
		$data = json_encode($data);
		echo $data;
	}
	public function update_pwd(){
		$ver_pwd = $this->input->post('ver_pwd',true);
		$email = $this->input->post('email',true);
		$data = $this->login_m->update_pwd($ver_pwd,$email);
		$data = json_encode($data);
		echo $data;
	}
}
