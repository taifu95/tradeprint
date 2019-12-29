<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_ad extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('login_m');
		$this->load->helper(array('form', 'url'));
		$this->load->model('content_m');
	}
	public function index()
	{
		if($this->session->has_userdata('user_name')==1){
			$data = array();
			$sel_ind = 0;
			$data['temp'] = $this->login_m->get_temp($sel_ind);
			$this->load->view('dash/update',$data);
		}
		else{
			$data['about'] = $this->content_m->get_port();
			$this->load->view('dashboard',$data);
		}
	}
	public function get_add(){
		$mark_dis = $this->input->get('mark_sta',true);
		$busi_name = $this->input->get('busi_name',true);
		// die(print_r($mark_dis));
		$data = $this->login_m->get_add($mark_dis,$busi_name);
		$data = json_encode($data);
		echo $data;
	}
	public function do_upload(){
		$cre_date = date("Y,m,d h,i,sa");
		$user_id = $this->session->userdata('user_id');
		$ad_con = $this->input->post('ad_con',true);
		$temp_name = $this->input->post('temp',true);
		$temp_label = $this->input->post('temp_label',true);
		$end_date_sta = $this->input->post('end_date_sta',true);

		// Scheudle
		$imme = $this->input->post('imme',true);
		$s_date = $this->input->post('s_date',true);
		$e_date = $this->input->post('e_date',true);
		$s_time = $this->input->post('s_time',true);
		$e_time = $this->input->post('e_time',true);
		$days = $this->input->post('days',true);

		// End of scheudle
		$name= $_FILES["userfile"]["name"];
		$type= $_FILES["userfile"]["type"];
		$size= $_FILES["userfile"]["size"];
		$temp= $_FILES["userfile"]["tmp_name"];
		$error= $_FILES["userfile"]["error"];
		// MERGE IMAGE
		$bg_url = $this->input->post('bg_url',true);
		$tmp_wi = $this->input->post('tmp_wi',true);
		$tmp_he = $this->input->post('tmp_he',true);
		$tmp_le = $this->input->post('tmp_le',true);
		$tmp_to = $this->input->post('tmp_to',true);
		// Text
		$fo_co = $this->input->post('fo_co',true);
		$fo_le = $this->input->post('fo_le',true);
		$fo_to = $this->input->post('fo_to',true);
		$fo_descr = $this->input->post('fo_descr',true);
		$fo_si = $this->input->post('fo_si',true);
		$fo_we = $this->input->post('fo_we',true);
		// Capture
		// $cap_name = $this->input->post('cap_name',true);
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
					move_uploaded_file($temp, "assets/upload/" .$cre_date.$name);
					$over_url = "assets/upload/" .$cre_date.$name;
					// Merge Image
					$image1 = $bg_url;//bg_image
					// $image1 = "capture/".$cap_name;//capture_name
					$image2 = $over_url;
					// Resize Image 
					$source_properties = getimagesize($image2);
					$image_type = $source_properties['mime']; 
					$target_width =$source_properties[0];
					$target_height =$source_properties[1];
					if($image_type == "image/png"){
						$image_resource_id = imagecreatefrompng($image2);
					}
					if($image_type== 'image/jpeg'){
						$image_resource_id = imagecreatefromjpeg($image2);
					}
					$target_layer=imagecreatetruecolor($target_width,$target_height);
					imagecopyresampled($target_layer,$image_resource_id,0,0,0,0,$tmp_wi,$tmp_he, $source_properties[0],$source_properties[1]);
					imagepng($target_layer,$image2);
					$source_properties = getimagesize($image2);
					$image_type = $source_properties['mime']; 
					if($image_type == "image/png"){
						$im = imagecreatefrompng($image2);
					}
					if($image_type== 'image/jpeg'){
						$im = imagecreatefromjpeg($image2);
					}
					// Crop Image

					$size = min(imagesx($im), imagesy($im));
					$im2 = imagecrop($im, ['x' => 0, 'y' => 0, 'width' => $tmp_wi, 'height' =>$tmp_he]);
					if ($im2 !== FALSE) {
					    imagepng($im2, $image2);
					    imagedestroy($im2);
					}
					imagedestroy($im);
					// End of Resize
					// merge Image
					$source_properties = getimagesize($image2);
					$image_type = $source_properties['mime']; 
					list($width,$height) = getimagesize($image2);
					$image1 = imagecreatefromstring(file_get_contents($image1));
					if($image_type == "image/png"){
						$image2 = imagecreatefrompng($image2);
					}
					if($image_type== 'image/jpeg'){
						$image2 = imagecreatefromjpeg($image2);
					}
					// $image2 = imagecreatefromstring(file_get_contents($image2));
					// imagecopymerge($image1, $image2, $tmp_le, $tmp_to, 0, 0, $width, $height, 100);
					imagecopymerge($image1, $image2, $tmp_le, $tmp_to, 0, 0, $tmp_wi, $tmp_he, 100);

					header('Content-Type: image/png');
					imagepng($image1,'assets/result_img/'.$user_id.$cre_date.$name);
					// Merge Text
					$im = imagecreatefrompng('assets/result_img/'.$user_id.$cre_date.$name);	    

					// White background and blue text
					$bg = imagecolorallocate($im, 255, 255, 255);
					$co_f = hexdec(substr($fo_co,1,2));
					$co_s = hexdec(substr($fo_co,3,2));
					$co_t = hexdec(substr($fo_co,5,2));
					$textcolor = imagecolorallocate($im, $co_f,$co_s,$co_t);
					// $textcolor = imagecolorallocate($im, 0xff,0xff,0xff);
					if($fo_we >= 500){
						$font = 'assets/font/OpenSans-Bold.ttf';
					}
					if($fo_we < 500){
						$font = 'assets/font/OpenSans-Light.ttf';
					}
					// die(print_r($font));
					// Write the string at the top left
					// imagettftext($im, $fo_si, 0, $fo_le, $fo_to, $textcolor,$font , $fo_descr);
					$fo_descr = str_replace("<br>", "\n", $fo_descr);
					imagettftext($im, $fo_si-intval($fo_si/4), 0, $fo_le, $fo_to+$fo_si-intval($fo_si/4), $textcolor,$font , $fo_descr);

					// Output the image
					header('Content-type: image/png');

					imagepng($im,'assets/result_img/'.$user_id.$cre_date.$name);
					imagedestroy($im);
					$result_img = 'assets/result_img/'.$user_id.$cre_date.$name;
					// // End of merge image
					$data = $this->login_m->add_ad($cre_date,$name,$ad_con,$temp_name,$imme,$s_date,$e_date,$s_time,$e_time,$days,$over_url,$end_date_sta,$result_img,$temp_label); 
					$data = json_encode($data);
					echo $data;
				}
	     	}
		}
		else{
			echo "file size too big!";
		}
	}

	// public function bg_upload(){
	// 	$target_dir = "assets/img/bg/";
	// 	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	// 	$uploadOk = 1;
	// 	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// 	// Check if image file is a actual image or fake image
	// 	if(isset($_POST["submit"])) {
	// 		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	// 		if($check !== false) {
	// 			echo "File is an image - " . $check["mime"] . ".";
	// 			$uploadOk = 1;
	// 		} else {
	// 			echo "File is not an image.";
	// 			$uploadOk = 0;
	// 		}
	// 	}
	// 	// Check if file already exists
	// 	if (file_exists($target_file)) {
	// 		echo "Sorry, file already exists.";
	// 		$uploadOk = 0;
	// 	}
	// 	// Check file size
	// 	if ($_FILES["fileToUpload"]["size"] > 300000) {
	// 		echo "Sorry, your file is too large.";
	// 		$uploadOk = 0;
	// 	}
	// 	// Allow certain file formats
	// 	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
	// 		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	// 		$uploadOk = 0;
	// 	}
	// 	// Check if $uploadOk is set to 0 by an error
	// 	if ($uploadOk == 0) {
	// 		echo "Sorry, your file was not uploaded.";
	// 	// if everything is ok, try to upload file
	// 	} else {
	// 		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	// 			$data = $this->login_m->add_bg($target_file); 
	// 			$data = json_encode($data);
	// 			echo $data;

	// 		} else {
	// 			echo "Sorry, there was an error uploading your file.";
	// 		}
	// 	}
	// }
	public function insert_sug(){
		$user_id = $this->session->userdata('user_id');
		$sugg_cont = $this->input->post('sugg_cont',TRUE);
		$data = $this->login_m->insert_sug($user_id,$sugg_cont);
		$data = json_encode($data);
		echo $data;
	}
	public function update_mark(){
		$tbl_id = $this->input->post('tbl_id',TRUE);
		$mark = $this->input->post('mark',TRUE);
		$data = $this->login_m->update_mark($tbl_id,$mark);
		$data = json_encode($data);
		echo $data;
	}
	public function delete_mark(){
		$tbl_id = $this->input->post('tbl_id',TRUE);
		$data = $this->login_m->delete_mark($tbl_id);
		$data = json_encode($data);
		echo $data;
	}
	public function get_temp_up(){
		$business_name = $this->input->GET('business_name',TRUE);
		$data = $this->login_m->get_temp_up($business_name);
		$data = json_encode($data);
		echo $data;
	}
	// Get Preview Data
	public function get_preview(){
		$data = $this->login_m->get_preview();
		$data = json_encode($data);
		echo $data;
	}
	// Create XML
	public function create_xml(){
		$data = $this->login_m->create_xml();
		$data = json_encode($data);
		echo $data;
	}
	// Update schedule
	public function update_sch(){
		$tbl_id = $this->input->post('tbl_id',TRUE);
		$up_manual = $this->input->post('up_manual',TRUE);
		$s_date = $this->input->post('s_date',TRUE);
		$e_date = $this->input->post('e_date',TRUE);
		$s_time = $this->input->post('s_time',TRUE);
		$e_time = $this->input->post('e_time',TRUE);
		$days = $this->input->post('days',TRUE);
		$end_date_sta1 = $this->input->post('end_date_sta1',TRUE);

		$data = $this->login_m->update_sch($tbl_id,$up_manual,$s_date,$e_date,$s_time,$e_time,$days,$end_date_sta1);
		$data = json_encode($data);
		echo $data;
	}
	// Preview
	public function prev_ad(){
		$user_id = $this->session->userdata('user_id');
		$cre_date = date("Y,m,d h,i,sa");

		$temp_name = $this->input->post('temp',true);
		$bg_url = $this->input->post('bg_url',true);
		$tmp_wi = $this->input->post('tmp_wi',true);
		$tmp_he = $this->input->post('tmp_he',true);
		$tmp_le = $this->input->post('tmp_le',true);
		$tmp_to = $this->input->post('tmp_to',true);
		// Text
		$fo_co = $this->input->post('fo_co',true);
		$fo_le = $this->input->post('fo_le',true);
		$fo_to = $this->input->post('fo_to',true);
		$fo_descr = $this->input->post('fo_descr',true);
		$fo_si = $this->input->post('fo_si',true);
		$fo_we = $this->input->post('fo_we',true);
		$fo_al = $this->input->post('fo_al',true);		

		// $cap_name = $this->input->post('cap_name',true);
		// Image Upload
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
			if($type=="image/png/png" || $size > 9000000 )//condition for the file
		    {
				echo "Format not allowed or file size too big!";
			}
		    else
		    {
				if($size == 0){
					echo "SELECT the Image";
				}
				else{
					move_uploaded_file($temp, "assets/upload/" .$cre_date.$name);
					$over_url = "assets/upload/" .$cre_date.$name;
					// merge Image
					// $over_url = 'assets/upload/'.$row->cr_date.$row->ad_name;
					$image1 = $bg_url;//bg_image
					// $image1 = "capture/".$cap_name;//capture_name
					$image2 = $over_url;
					// Resize Image 
					$source_properties = getimagesize($image2);
					$image_type = $source_properties['mime']; 
					$target_width =$source_properties[0];
					$target_height =$source_properties[1];
					if($image_type == "image/png"){
						$image_resource_id = imagecreatefrompng($image2);
					}
					if($image_type== 'image/jpeg'){
						$image_resource_id = imagecreatefromjpeg($image2);

					}
					$target_layer=imagecreatetruecolor($target_width,$target_height);
					imagecopyresampled($target_layer,$image_resource_id,0,0,0,0,$tmp_wi,$tmp_he, $source_properties[0],$source_properties[1]);
					imagepng($target_layer,$image2);
					$source_properties = getimagesize($image2);
					$image_type = $source_properties['mime']; 
					if($image_type == "image/png"){
						$im = imagecreatefrompng($image2);
					}
					if($image_type== 'image/jpeg'){
						$im = imagecreatefromjpeg($image2);
					}
					// Crop Image

					$size = min(imagesx($im), imagesy($im));
					$im2 = imagecrop($im, ['x' => 0, 'y' => 0, 'width' => $tmp_wi, 'height' =>$tmp_he]);
					if ($im2 !== FALSE) {
					    imagepng($im2, $image2);
					    imagedestroy($im2);
					}
					imagedestroy($im);
					// End of Resize
					// merge Image
					$source_properties = getimagesize($image2);
					$image_type = $source_properties['mime']; 
					list($width,$height) = getimagesize($image2);
					$image1 = imagecreatefromstring(file_get_contents($image1));
					if($image_type == "image/png"){
						$image2 = imagecreatefrompng($image2);
					}
					if($image_type== 'image/jpeg'){
						$image2 = imagecreatefromjpeg($image2);
					}
					// $image2 = imagecreatefromstring(file_get_contents($image2));
					// imagecopymerge($image1, $image2, $tmp_le, $tmp_to, 0, 0, $width, $height, 100);
					imagecopymerge($image1, $image2, $tmp_le, $tmp_to, 0, 0, $tmp_wi, $tmp_he, 100);

					header('Content-Type: image/png');
					imagepng($image1,'assets/result_img/'.$user_id.$cre_date.$name);
					// Merge Text
					$im = imagecreatefrompng('assets/result_img/'.$user_id.$cre_date.$name);
		    

					// White background and blue text
					$bg = imagecolorallocate($im, 255, 255, 255);
					$co_f = hexdec(substr($fo_co,1,2));
					$co_s = hexdec(substr($fo_co,3,2));
					$co_t = hexdec(substr($fo_co,5,2));
					$textcolor = imagecolorallocate($im, $co_f,$co_s,$co_t);
					// $textcolor = imagecolorallocate($im, 0xff,0xff,0xff);
					if($fo_we >= 500){
						$font = 'assets/font/OpenSans-Bold.ttf';
					}
					if($fo_we < 500){
						$font = 'assets/font/OpenSans-Light.ttf';
					}
					$fo_descr = str_replace("<br>", "\n", $fo_descr);
					
					imagettftext($im, $fo_si-intval($fo_si/4), 0, $fo_le, $fo_to+$fo_si-intval($fo_si/4), $textcolor,$font , $fo_descr);

					// Output the image
					header('Content-type: image/png');

					imagepng($im,'assets/result_img/'.$user_id.$cre_date.$name);
					imagedestroy($im);
			        // End of Merge Text
					// $data = json_encode($user_id.$cre_date.$name);
					// print_r($data);
					echo 'assets/result_img/'.$user_id.$cre_date.$name;
				}
	     	}
		}
		else{
			echo "file size too big!";
		}
		// End of Image Upload
		
	}
}