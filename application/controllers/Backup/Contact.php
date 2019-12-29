<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('login_m');
		$this->load->model('content_m');
	}
	public function index()
	{
		if($this->session->has_userdata('user_name')==1){
			$this->load->view('dash/contact_us');
		}
		else{
			$data['about'] = $this->content_m->get_port();
			$this->load->view('dashboard',$data);
		}
		
	}
	public function send_mail() {
		$user_name = $this->input->post('user_name',true);
		$email = $this->input->post('email',true);
		$subject = $this->input->post('subject',true);
		$message = $this->input->post('message',true);
		// $config = Array(
		//    'protocol' => 'smtp',
		//    'smtp_host' => 'kungfu@dipsonpolymers.in',
		//    'smtp_port' => 465,
		//    'smtp_user' => 'kungfuzui@gmail.com',
		//    'smtp_pass' => 'ZUI19950522',
		//    'mailtype' => 'text'        
		// );
	 
		// $this->load->library('email', $config);
		// $this->email->set_newline("\r\n");
		$config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'mail.inex.net',
            'smtp_port' => 465,
            'smtp_user' => 'support@inex.net',
            'smtp_pass' => '4&mbhR[FGMqi',

            'mailtype' => 'text'        
         );
         $this->load->library('email', $config);
         
         $config['protocol'] = 'smtp';
         $config['smtp_host'] = 'mail.inex.net';
         $config['smtp_port'] = 465;
         $config['smtp_user'] = 'support@inex.net';
         $config['smtp_pass'] = '4&mbhR[FGMqi';
         $config['mailtype'] = 'text';
         $config['smtp_crypto'] = 'ssl';
         $config['crlf'] = '\r\n';
         $config['newline'] = '\r\n';
         $config['wordwrap'] = FALSE;

         $this->email->initialize($config);
        // $data = $this->login_m->update_pwd($ver_pwd,$ver_mail);
		
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        for($i= 0; $i< 2;$i++){
			// THis is true
			$this->email->from("support@inex.net","CodeRiddles Support");
			if($i == 0){
	        	$this->email->to("latenser@inex.net");
	        }
			if($i == 1){
				$this->email->to($email);
			}


			$this->email->subject("".$subject."");
			$this->email->message("
			Name : ".$user_name."

			From: CodeRiddles Support <inex.net>

			Sent: ".date("F j, Y, g:i a")."

			To: ".$email.
			

			
			"
			Content:" .$message.

			"Thank yot for contact us. We will get back to you shortly.");
			// $this->email->message("<b>Change your password</b>dfghfddgfdg ");
			
			
			$result = $this->email->send();
		}
		$data = $this->login_m->send_contact($user_name,$email,$subject,$message);
		
		// die(print_r($result));
		// $this->email->print_debugger();
		
		$data = json_encode($data);
		echo $data;
	}	
}