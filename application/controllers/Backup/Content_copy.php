<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('login_m');
	}
	public function index()
	{
		if($this->session->has_userdata('user_name')==1){
			$this->load->view('dash/content_v');
		}
		else{
			$this->load->view('dashboard');
		}		
	}
	public function get_slide(){
		$data = $this->login_m->get_slide();
		$data = json_encode($data);
		echo $data;
	}
	public function delete_slide(){
		$tbl_id = $this->input->POST("tbl_id",true);
		$data = $this->login_m->delete_slide($tbl_id);
		$data = json_encode($data);
		echo $data;
	}
	public function update_slide(){
		$cre_date = date("j, n, Y");
		$sli_text = $this->input->post('sli_text',true);
		$sli_title = $this->input->post('sli_title',true);
		$slide_update = $this->input->post('slide_update',true);
		$sup_flag = $this->input->post('sup_flag',true);
		$slide_name = $this->input->post('slide_name',true);
		$tbl_id = $this->input->post('tbl_id',true);
		if($sup_flag == "true"){
			$name= $_FILES["userfile"]["name"];
			$type= $_FILES["userfile"]["type"];
			$size= $_FILES["userfile"]["size"];
			$temp= $_FILES["userfile"]["tmp_name"];
			$error= $_FILES["userfile"]["error"];
			// echo "Error uploading file! code $error.";
			if ($error > 0){
				echo "Error uploading file!";
			}
			else if($error == 0){
				if($type=="image/png/png" || $size > 11000000 )//condition for the file
			    {
					echo "Format not allowed or file size too big!";
				}
			    else
			    {
					if($size == 0){
						echo "SELECT the Image";
					}
					else{
						move_uploaded_file($temp, "assets/img/slide/" .$cre_date.$name);
						$data = $this->login_m->update_slide($cre_date,$name,$sli_text,$sli_title,$tbl_id,$slide_update,$sup_flag); 
						// $data = json_encode($data);
						echo $data;
					}
		     	}
			}
			else{
				echo "file size too big!";
			}
		}
		else{
			$data = $this->login_m->update_slide($cre_date,$slide_name,$sli_text,$sli_title,$tbl_id,$slide_update,$sup_flag); 
			// $data = json_encode($data);
			echo $data;
		}
	}
	// This is about
	public function get_about(){
		$data = $this->login_m->get_about();
		$data = json_encode($data);
		echo $data;
	}
	public function update_about(){
		$cre_date = date("j, n, Y");
		$abo_text = $this->input->post('abo_text',true);
		$abo_title = $this->input->post('abo_title',true);
		$tbl_id = $this->input->post('tbl_id',true);
		$name= $_FILES["userfile1"]["name"];
		$type= $_FILES["userfile1"]["type"];
		$size= $_FILES["userfile1"]["size"];
		$temp= $_FILES["userfile1"]["tmp_name"];
		$error= $_FILES["userfile1"]["error"];
		// echo "Error uploading file! code $error.";
		if ($error > 0){
			echo "Error uploading file!";
		}
		else if($error == 0){
			if($type=="image/png/png" || $size > 11000000 )//condition for the file
		    {
				echo "Format not allowed or file size too big!";
			}
		    else
		    {
				if($size == 0){
					echo "SELECT the Image";
				}
				else{
					move_uploaded_file($temp, "assets/img/about/" .$name);
					$data = $this->login_m->update_about($name,$abo_text,$abo_title,$tbl_id); 
					// $data = json_encode($data);
					echo $data;
				}
	     	}
		}
		else{
			echo "file size too big!";
		}
	}
	// End of about
	// Service
	public function get_serive(){
		$data = $this->login_m->get_serive();
		$data = json_encode($data);
		echo $data;
	}
	public function update_service(){
		$s_title = $this->input->post('s_title',true);
		$s_text = $this->input->post('s_text',true);
		$tbl_id = $this->input->post('tbl_id',true);
		$data = $this->login_m->update_service($s_title,$s_text,$tbl_id);
		$data = json_encode($data);
		echo $data;
	}
	// End of service
	// Team
	public function get_team(){
		$data = $this->login_m->get_team();
		$data = json_encode($data);
		echo $data;
	}
	public function update_team(){
		$cre_date = date("j, n, Y");
		$team_text = $this->input->post('team_text',true);
		$team_title = $this->input->post('team_title',true);
		$tbl_id = $this->input->post('tbl_id',true);
		$name= $_FILES["userfile2"]["name"];
		$type= $_FILES["userfile2"]["type"];
		$size= $_FILES["userfile2"]["size"];
		$temp= $_FILES["userfile2"]["tmp_name"];
		$error= $_FILES["userfile2"]["error"];
		// echo "Error uploading file! code $error.";
		if ($error > 0){
			echo "Error uploading file!";
		}
		else if($error == 0){
			if($type=="image/png/png" || $size > 11000000 )//condition for the file
		    {
				echo "Format not allowed or file size too big!";
			}
		    else
		    {
				if($size == 0){
					echo "SELECT the Image";
				}
				else{
					move_uploaded_file($temp, "assets/img/team/" .$name);
					$data = $this->login_m->update_team($name,$team_text,$team_title,$tbl_id); 
					// $data = json_encode($data);
					echo $data;
				}
	     	}
		}
		else{
			echo "file size too big!";
		}
	}
	// End of team
	// Fact
	public function get_fact(){
		$data = $this->login_m->get_fact();
		$data = json_encode($data);
		echo $data;
	}
	public function update_fact(){
		$f_title = $this->input->post('f_title',true);
		$f_text = $this->input->post('f_text',true);
		$tbl_id = $this->input->post('tbl_id',true);
		$data = $this->login_m->update_fact($f_title,$f_text,$tbl_id);
		$data = json_encode($data);
		echo $data;
	}
	// End of Fact
	// Contact US
	public function get_con(){
		$data = $this->login_m->get_con();
		$data = json_encode($data);
		echo $data;
	}
	public function update_con(){
		$c_title = $this->input->post('c_title',true);
		$c_text = $this->input->post('c_text',true);
		$tbl_id = $this->input->post('tbl_id',true);
		$data = $this->login_m->update_con($c_title,$c_text,$tbl_id);
		$data = json_encode($data);
		echo $data;
	}
	// End of Contact US
}