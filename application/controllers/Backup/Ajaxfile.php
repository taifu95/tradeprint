<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxFile extends CI_Controller {

	function index(){

		$image = $_POST['image'];

		$location = "capture/";

		$image_parts = explode(";base64,", $image);

		$image_base64 = base64_decode($image_parts[1]);

		$filename = "screenshot_".uniqid().'.png';

		$file = $location . $filename;

		file_put_contents($file, $image_base64);
		echo $filename;
	}
	
}