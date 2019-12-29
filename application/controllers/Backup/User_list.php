<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_list extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('login_m');
		$this->load->model('content_m');
	}
	public function index()
	{

		if($this->session->has_userdata('user_name')==1){
			$this->load->view('dash/user_listv');
		}
		else{
			$data['about'] = $this->content_m->get_port();
			$this->load->view('dashboard',$data);
		}
	}
}