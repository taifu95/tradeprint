<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
        // $this->load->helper('form'); 
        $this->load->model('trade_m');
        // $this->load->library('session');
    }
    public function index(){
        $data = array();
        $data["category"] = $this->trade_m->get_category();
        $data["slider"] = $this->trade_m->get_front();
        $data["color"] = $this->trade_m->get_color();
        $data["menu"] = $this->trade_m->get_cat_menu();
        $this->load->view("include/header",$data);
        $this->load->view("index",$data);
    }
    public function f_cate_view(){
        $c_id = $this->input->get("id");
        $data = array();
        $data["category"] = $this->trade_m->get_category();
        $data["menu"] = $this->trade_m->get_cat_menu();
        $data["img"] = $this->trade_m->get_c_img($c_id);
        $data["color"] = $this->trade_m->get_color();
        $data["info"] = $this->trade_m->get_cate_info($c_id);
        $this->load->view("include/header",$data);
        $this->load->view("f_cate_view",$data);
    }
    public function get_search(){
        $input = $this->input->post("input");
        $data = $this->trade_m->get_search($input);
        echo $data;
    }
    // !F=p!2R{v37P
    // support
    public function send_support(){
        
    }
}