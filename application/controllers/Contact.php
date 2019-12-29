<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
        $this->load->view("contact",$data);
    }
    public function send_email(){
        // die(print_r("sdf"));
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $contact_message = $this->input->post('contact_message');
        $subject = $this->input->post('subject');
        // $data = $this->trade_m->send_email($name,$email,$contact_message,$subject);
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'mail.dialaprint.co.uk',
            'smtp_port' => 465,
            'smtp_user' => 'support@dialaprint.co.uk',
            'smtp_pass' => '!F=p!2R{v37P',

            'mailtype' => 'html'        
         );
         $this->load->library('email', $config);
         
         $config['protocol'] = 'smtp';
         $config['smtp_host'] = 'mail.dialaprint.co.uk';
         $config['smtp_port'] = 465;
         $config['smtp_user'] = 'support@dialaprint.co.uk';
         $config['smtp_pass'] = '!F=p!2R{v37P';
         $config['mailtype'] = 'html';
         $config['smtp_crypto'] = 'ssl';
         $config['crlf'] = '\r\n';
         $config['newline'] = '\r\n';
         $config['wordwrap'] = FALSE;

         $this->email->initialize($config);
        //  $data = $this->login_m->update_pwd($ver_pwd,$ver_mail);
			
         $this->load->library('email', $config);
         $this->email->set_newline("\r\n");

         // THis is true
         $this->email->from($email,"DialaPrint Support");

         for($i = 0; $i < 3 ; $i++){
             if($i == 0){
                $this->email->to('info@dialaprint.co.uk'); 
             }
             if($i == 1){
                $this->email->to('info@dialaprint.co.uk'); 
             }
             else{
                $this->email->to($email);
             }
   
            $this->email->subject($subject);
            $this->email->message($contact_message);
         }
         $result = $this->email->send();
         $data = $this->trade_m->save_contact($name,$email,$contact_message,$subject);
        echo $data;
    }
}