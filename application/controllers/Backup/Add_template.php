<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_template extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('login_m');
		$this->load->model('content_m');
	}
	public function index()
	{
		if($this->session->has_userdata('user_name')==1){
			$this->load->view('dash/template');
		}
		else{
			$data['about'] = $this->content_m->get_port();
			$this->load->view('dashboard',$data);
		}
	}
	public function get_temp1(){
		$sel_ind = $this->input->post('sel_ind',true);
		$busi_name = $this->input->get('busi_name');
		$data  = $this->login_m->get_temp1($sel_ind,$busi_name);
		$data = json_encode($data);
		echo $data;
	}
	public function get_temp(){
		$sel_ind = $this->input->post('sel_ind',true);
		$data  = $this->login_m->get_temp($sel_ind);
		$data = json_encode($data);
		echo $data;
	}
	public function get_temp_name(){
		$busi_sel = $this->input->get('busi_sel',true);
		$data  = $this->login_m->get_temp_name($busi_sel);
		$data = json_encode($data);
		echo $data;
	}
	public function save_temp(){
		$overlay_cha = $this->input->post('overlay_cha',true);
		$up_ty = $this->input->post('up_ty',true);
		$bg_url = $this->input->post('bg_url',true);
		$bus_name = $this->input->post('bus_name',true);
		$temp_name = $this->input->post('temp_name',true);
		$up_ind = $this->input->post('up_ind',true);
		$tmp_wi = $this->input->post('tmp_wi',true);
		$tmp_he  = $this->input->post('tmp_he',true);
		$tmp_le = $this->input->post('tmp_le',true);
		$tmp_to  = $this->input->post('tmp_to',true);
		$fo_co = $this->input->post('fo_co',true);
		$fo_le  = $this->input->post('fo_le',true);
		$fo_ri  = $this->input->post('fo_ri',true);
		$fo_al  = $this->input->post('fo_al',true);
		$fo_si = $this->input->post('fo_si',true);
		$fo_to  = $this->input->post('fo_to',true);
		$fo_we  = $this->input->post('fo_we',true);
		$cre_date = date("j, n, Y");
		$ad_con = $this->input->post('ad_con',true);
		$em_sel = $this->input->post('em_sel',true);
		// XML INFORMATION
		$player_id  = $this->input->post('player_id',true);
		$advertise_id  = $this->input->post('advertise_id',true);
		$contract_id  = $this->input->post('contract_id',true);
		// End of XML
		$name= $_FILES["userfile"]["name"];
		$type= $_FILES["userfile"]["type"];
		$size= $_FILES["userfile"]["size"];
		$temp= $_FILES["userfile"]["tmp_name"];
		$error= $_FILES["userfile"]["error"];

		// $fd_bg  = $this->input->post('fd_bg',true);

		// echo "Error uploading file! code $error.";
		// if ($error > 0){
		// 	echo "Error uploading file!";
		// }
		// else if($error == 0){
		// 	if($type=="image/png/png" || $size > 300000 )//condition for the file
		//     {
		// 		echo "Format not allowed or file size too big!";
		// 	}
		//     else
		//     {
		// 		if($size == 0){
		// 			echo "SELECT the Image";
		// 		}
		// 		else{
		// 			move_uploaded_file($temp, "assets/upload/" .$cre_date.$name);
					// $bg_url = $bg_url;
					$data = $this->login_m->save_temp($up_ty,$bg_url,$bus_name,$temp_name,$up_ind,$tmp_wi,$tmp_he,$tmp_le,$tmp_to,$fo_co ,$fo_le ,$fo_si ,$fo_to ,$fo_we,$fo_ri,$fo_al,$player_id,$advertise_id,$contract_id,$em_sel );
					// This is the part to add 
					// if($up_ty == 'true'){
					// 	$temp_id = $data[0]['last_id'];
					// }
					// $data1 = $this->login_m->add_ad($cre_date,$name,$ad_con,$temp_id); 
					$data = json_encode($data);
					// End of 
					echo $data;
		// 		}
	 //     	}
		// }
		// else{
		// 	echo "file size too big!";
		// }
	}
	public function bg_upload(){

		$background_cha  = $this->input->post('background_cha',true);
		$bg_url  = $this->input->post('bg_url',true);
		$today = $today = date('h-i-s j-m-y');
		if($background_cha == 'false'){
			// $data = $this->login_m->add_bg($bg_url); 
			// $data = json_encode($data);
			// echo $data;
		}
		else{
			$name= $_FILES["userfile1"]["name"];
			$type= $_FILES["userfile1"]["type"];
			$size= $_FILES["userfile1"]["size"];
			$temp= $_FILES["userfile1"]["tmp_name"];
			$error= $_FILES["userfile1"]["error"];

			// $fd_bg  = $this->input->post('fd_bg',true);

			// echo "Error uploading file! code $error.";
			if ($error > 0){
				echo "Error uploading file!";
			}
			else if($error == 0){
				if($type=="image/png/png" || $size > 9330000 )//condition for the file
			    {
					echo "Format not allowed or file size too big!";
				}
			    else
			    {
					if($size == 0){
						echo "SELECT the Image";
					}
					else{
						// die(print_r('dddd'));
						$name1 = $today.$name;
						move_uploaded_file($temp, "assets/img/bg/" .$name1);
						$target_file = "assets/img/bg/".$name1;
						$data = $this->login_m->add_bg($target_file); 
						// $data = json_encode($data);
						echo $target_file;
					}
		     	}
			}
			else{
				echo "file size too big!";
			}
		}
		

	}
	public function delete_temp(){
		$tbl_id = $this->input->post('tbl_id',true);
		$bg_url = $this->input->post('bg_url',true);
		$data = $this->login_m->delete_temp($tbl_id,$bg_url);
		$data = json_encode($data);
		echo $data;
	}
	public function get_bg(){
		$data  = $this->login_m->get_bg();
		$data = json_encode($data);
		echo $data;
	}
	public function get_business_all(){
		$data  = $this->login_m->get_business_all();
		$data = json_encode($data);
		echo $data;
	}
	public function get_business(){
		$data  = $this->login_m->get_business();
		$data = json_encode($data);
		echo $data;
	}
	public function update_tem_em(){
		$tbl_id = $this->input->post('tbl_id',true);
		$mark = $this->input->post('mark',true);
		$data = $this->login_m->update_tem_em($tbl_id,$mark);
		$data = json_encode($data);
		echo $data;
	}
}