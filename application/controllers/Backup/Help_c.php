<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('login_m');
		$this->load->model('content_m');
	}
	public function index()
	{
		if($this->session->has_userdata('user_name')==1){
			$this->load->view('dash/help_v');
		}
		else{
			$data['about'] = $this->content_m->get_port();
			$this->load->view('dashboard',$data);
		}
	}
	public function get_main_cat(){
		$data = $this->content_m->get_main_cat();
		$data = json_encode($data);
		echo $data;
	}
	public function get_sub_cat(){
		$tbl_id = $this->input->post('tbl_id',true);
		$data = $this->content_m->get_sub_cat($tbl_id);
		$data = json_encode($data);
		echo $data;
	}
	public function get_an(){
		$tbl_id = $this->input->post('tbl_id',true);
		$data = $this->content_m->get_an($tbl_id);
		$data = json_encode($data);
		echo $data;
	}
}
