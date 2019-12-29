<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sugg extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('login_m');
		$this->load->model('content_m');
	}
	public function index()
	{
		if($this->session->has_userdata('user_name')==1){
			$data = array();
			$user_id = $this->session->userdata('user_id');
			$data['sugg'] = $this->login_m->get_sugg($user_id);
			$this->load->view('dash/suggestion',$data);
		}
		else{
			$data['about'] = $this->content_m->get_port();
			$this->load->view('dashboard',$data);
		}
	}
	public function get_sugg(){
		$user_id = $this->session->userdata('user_id');
		$data = $this->login_m->get_sugg($user_id);
		$data = json_encode($data);
		echo $data;
	}
	public function update_account(){
		$tbl_id = $this->input->post('tbl_id',true);
		$first_name = $this->input->post('first_name',true);
		$last_name = $this->input->post('last_name',true);
		$pwd = $this->input->post('new_pwd',true);
		$email = $this->input->post('email',true);
		$data = $this->login_m->update_account($tbl_id,$first_name,$last_name,$pwd,$email);
		$data = json_encode($data);
		echo $data;
	}
	public function delete_sugg(){
		$tbl_id = $this->input->post('tbl_id',true);
		$data = $this->login_m->delete_sugg($tbl_id);
		$data = json_encode($data);
		echo $data;
	}
	public function active(){
		$tbl_id = $this->input->post('tbl_id',true);
		$mark = $this->input->post('mark',true);
		$data = $this->login_m->active($tbl_id,$mark);
		$data = json_encode($data);
		echo $data;
	}
}
