<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	function __construct(){
		parent::__construct();
        // $this->load->helper('form'); 
        $this->load->model('trade_m');
        // $this->load->library('session');
    }
    public function index(){
        $data = array();
        $data["category"] = $this->trade_m->get_category();
        $data["menu"] = $this->trade_m->get_cat_menu();
        $data["color"] = $this->trade_m->get_color();
        $this->load->view("include/header",$data);
        $this->load->view("checkout",$data);
    }
}