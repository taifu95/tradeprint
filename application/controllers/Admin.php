<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct(); 
        $this->load->model('trade_m');
    }
    public function index(){
        $this->load->view("admin/login");
    }
    public function login(){
        $this->load->view("admin/login");
    }
    public function login_user(){
        $name = $this->input->post("name",true);
        $password = $this->input->post("password",true);
        $data = $this->trade_m->log_in($name,$password);
        echo $data;
    }
    public function sign_up(){
        $name = $this->input->post("name",true);
        $email = $this->input->post("email",true);
        $password = $this->input->post("password",true);
        $data = $this->trade_m->sign_up($name,$email,$password);
        echo $data;
    }
    public function dash(){
        if($this->session->has_userdata('user_name')==1){
            $data = array();
            $data["menu"] = $this->trade_m->get_menu();
            $this->load->view("admin/dash",$data);
        }
        else{
            $this->load->view("admin/login");
        }
    }
    public function user(){
        if($this->session->has_userdata('user_name')==1){
            $data = array();
            $data["menu"] = $this->trade_m->get_menu();
            $data["user"] = $this->trade_m->get_user();
            $this->load->view("admin/user",$data);
        }
        else{
            $this->load->view("admin/login");
        }
    }
    // Profile Mangement
    public function profile(){
        if($this->session->has_userdata('user_name')==1){
            $data = array();
            $data["menu"] = $this->trade_m->get_menu();
            $this->load->view("admin/user_profile",$data);
        }
        else{
            $this->load->view("admin/login");
        }
    }
    public function get_profile(){
        $data = $this->trade_m->get_profile();
        echo $data;
    }
    public function update_profile(){
        $user_name = $this->input->post("user_name");
        $email = $this->input->post("email");
        $password = $this->input->post("password");
        $data = $this->trade_m->update_profile($user_name,$email,$password);
        echo $data;
    }
    // End of Mangement
    // User Management
    public function get_user(){
        $data = $this->trade_m->get_user();
        echo $data;
    }
    // End of user management
    // Prodcut
    public function list_product(){
        if($this->session->has_userdata('user_name')==1){
            $data = array();
            $data["menu"] = $this->trade_m->get_menu();
            $data["category"] = $this->trade_m->get_category();
            $this->load->view("admin/list-products",$data);
        }
        else{
            $this->load->view("admin/login");
        }
    }
    public function get_cate_info(){
        $id = $this->input->post("id");
        $data = $this->trade_m->get_cate_info($id);
        echo json_encode($data);
    }
    // Vat
    public function save_vat(){
        $val = $this->input->post('vat_val');
        $pro_id = $this->input->post('pro_id');
        $data = $this->trade_m->save_vat($pro_id,$val);
        echo $data;
    }
    // Product gallery
    public function gallery(){
        if($this->session->has_userdata('user_name')==1){
            $index = base64_decode($this->input->get("ind"));
            
            $this->session->set_userdata('cat_id',$index);

            $data = array();
            $data["menu"] = $this->trade_m->get_menu();
            $data["info"] = $this->trade_m->get_cate_info($index);
            $data["index"] = $index;
            $this->load->view("admin/cate_gallery",$data);
        }
        else{
            $this->load->view("admin/login");
        }
    }
    public function upload_cate(){
        $cre_date = date("j, n, Y, h,i,s");
        $name= $_FILES["file"]["name"];
        $type= $_FILES["file"]["type"];
        $size= $_FILES["file"]["size"];
        $temp= $_FILES["file"]["tmp_name"];
        $error= $_FILES["file"]["error"];
        // echo "Error uploading file! code $error.";
        if ($error > 0){
            echo "Error uploading file!";
        }
        else if($error == 0){
            if($type=="image/png/png" && $size > 11000000 )//condition for the file
            {
                echo "Format not allowed or file size too big!";
            }
            else
            {
                if($size == 0){
                    echo "SELECT the Image";
                }
                else{
                    if($type == "image/png"){
                        $file_name = base64_encode($cre_date.$name);
                        $file_name = $file_name.".png";
                    }
                    else{
                        $file_name = base64_encode($cre_date.$name);
                        $file_name = $file_name.".jpg";
                    }
                    move_uploaded_file($temp, "assets/product/" .$file_name);
                    $data = $this->trade_m->upload_cate($file_name);
                    echo $data;
                }
            }
        }
        else{
            echo "file size too big!";
        }
    }
    public function upload_cate_ai(){
        $cre_date = date("j, n, Y, h,i,s");
        $name= $_FILES["file"]["name"];
        $type= $_FILES["file"]["type"];
        $size= $_FILES["file"]["size"];
        $temp= $_FILES["file"]["tmp_name"];
        $error= $_FILES["file"]["error"];
        $type = "ai";
        // echo "Error uploading file! code $error.";
        if ($error > 0){
            echo "Error uploading file!";
        }
        else if($error == 0){
            if($type=="application/zip" && $size > 110000000 )//condition for the file
            {
                echo "Format not allowed or file size too big!";
            }
            else
            {
                if($size == 0){
                    echo "SELECT the Image";
                }
                else{
                    $file_name = base64_encode($cre_date.$name);
                    $file_name = $file_name.".zip";
                    move_uploaded_file($temp, "assets/art/" .$file_name);
                    $data = $this->trade_m->upload_art($file_name,$type);
                    // echo $data;
                    echo $data;
                }
            }
        }
        else{
            echo "file size too big!";
        }
    }
    public function upload_cate_id(){
        $cre_date = date("j, n, Y, h,i,s");
        $name= $_FILES["file"]["name"];
        $type= $_FILES["file"]["type"];
        $size= $_FILES["file"]["size"];
        $temp= $_FILES["file"]["tmp_name"];
        $error= $_FILES["file"]["error"];
        $type = "id";
        // echo "Error uploading file! code $error.";
        if ($error > 0){
            echo "Error uploading file!";
        }
        else if($error == 0){
            if($type=="application/zip" && $size > 110000000 )//condition for the file
            {
                echo "Format not allowed or file size too big!";
            }
            else
            {
                if($size == 0){
                    echo "SELECT the Image";
                }
                else{
                    $file_name = base64_encode($cre_date.$name);
                    $file_name = $file_name.".zip";
                    move_uploaded_file($temp, "assets/art/" .$file_name);
                    $data = $this->trade_m->upload_art($file_name,$type);
                    // echo $data;
                    echo $data;
                }
            }
        }
        else{
            echo "file size too big!";
        }
    }
    public function upload_cate_pdf(){
        $cre_date = date("j, n, Y, h,i,s");
        $name= $_FILES["file"]["name"];
        $type= $_FILES["file"]["type"];
        $size= $_FILES["file"]["size"];
        $temp= $_FILES["file"]["tmp_name"];
        $error= $_FILES["file"]["error"];
        $type = "pdf";
        // echo "Error uploading file! code $error.";
        if ($error > 0){
            echo "Error uploading file!";
        }
        else if($error == 0){
            if($type=="application/zip" && $size > 110000000 )//condition for the file
            {
                echo "Format not allowed or file size too big!";
            }
            else
            {
                if($size == 0){
                    echo "SELECT the Image";
                }
                else{
                    $file_name = base64_encode($cre_date.$name);
                    $file_name = $file_name.".zip";
                    move_uploaded_file($temp, "assets/art/" .$file_name);
                    $data = $this->trade_m->upload_art($file_name,$type);
                    // echo $data;
                    echo $data;
                }
            }
        }
        else{
            echo "file size too big!";
        }
    }
    public function upload_cate_pho(){
        $cre_date = date("j, n, Y, h,i,s");
        $name= $_FILES["file"]["name"];
        $type= $_FILES["file"]["type"];
        $size= $_FILES["file"]["size"];
        $temp= $_FILES["file"]["tmp_name"];
        $error= $_FILES["file"]["error"];
        $type = "pho";
        // echo "Error uploading file! code $error.";
        if ($error > 0){
            echo "Error uploading file!";
        }
        else if($error == 0){
            if($type=="application/zip" && $size > 110000000 )//condition for the file
            {
                echo "Format not allowed or file size too big!";
            }
            else
            {
                if($size == 0){
                    echo "SELECT the Image";
                }
                else{
                    $file_name = base64_encode($cre_date.$name);
                    $file_name = $file_name.".zip";
                    move_uploaded_file($temp, "assets/art/" .$file_name);
                    $data = $this->trade_m->upload_art($file_name,$type);
                    // echo $data;
                    echo $data;
                }
            }
        }
        else{
            echo "file size too big!";
        }
    }
    public function get_cate_gallery(){
        $data = $this->trade_m->get_cate_gallery();
        echo $data;
    }
    public function del_cate_gallery(){
        $id = $this->input->post("id");
        $data = $this->trade_m->del_cate_gallery($id);
        echo $data;
    }
    public function save_desc(){
        $id = $this->input->post('id');
        $desc = $this->input->post('desc');
        $artic = $this->input->post('artic');
        $data = $this->trade_m->save_desc($id, $desc, $artic);
        echo $data;
    }
    // Save Detail
    public function save_detail(){
        $val = $this->input->post("content");
        $id = $this->input->post("id");
        $type = $this->input->post("type");
        $data = $this->trade_m->save_detail($val,$id,$type);
        echo $data;
    }
    public function save_art(){
        $art1 = $this->input->post("art1");
        $art2 = $this->input->post("art2");
        $art3 = $this->input->post("art3");
        $pro_id = $this->input->post("pro_id");
        $data = $this->trade_m->save_art($art1,$art2,$art3,$pro_id);
        echo $data;
    }
    public function get_price(){
        $key = $this->input->post("data");
        $c_name = $this->input->post("c_name");
        $data = $this->trade_m->get_price($key,$c_name);
        echo $data;
    }
    public function pro_price(){
        if($this->session->has_userdata('user_name')==1){
            $data = array();
            $data["menu"] = $this->trade_m->get_menu();
            $data["category"] = $this->trade_m->get_category();
            $this->load->view("admin/pro_price",$data);
            // $this->load->view("admin/jsgrid-table.html");
        }
        else{
            $this->load->view("admin/login");
        }
    }
    public function get_all_pro(){
        $data = $this->trade_m->get_all_pro();
        $data = json_encode($data);
        echo $data;
    }
    // Product
    // Menu
    public function menu(){
        if($this->session->has_userdata('user_name')==1){
            $data = array();
            $data["menu"] = $this->trade_m->get_menu();
            $data["category"] = $this->trade_m->get_category();
            $this->load->view("admin/menu_v",$data);
            // $this->load->view("admin/jsgrid-table.html");
        }
        else{
            $this->load->view("admin/login");
        }
    }
    public function get_category(){
        $data = $this->trade_m->get_category();
        echo $data;
    }
    public function save_menu(){
        $menu = $this->input->post("menu");
        die(print_r($menu));
    }
    // End of MEnu
    // Ticket
    public function ticket(){
        if($this->session->has_userdata('user_name')==1){
            $data["menu"] = $this->trade_m->get_menu();
            $data["total_info"] = $this->trade_m->get_total_info();
            $data["ticket"] = $this->trade_m->get_ticket();
            $this->load->view("admin/support-ticket",$data);
        }
        else{
            $this->load->view("admin/login");
        }
    }
    public function send_ticket(){
        $content = $this->input->post("content");
        $subject = $this->input->post("subject");

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
        $user = $this->trade_m->get_total_user();
        $send_user = json_decode($user,true);
        $send_num = count($send_user);
        for($i = 0; $i < count($send_user) ; $i++){
            $this->email->from("info@dialaprint.co.uk","DialaPrint Support");
            $this->email->to($send_user[$i]['email']);

            $this->email->subject($subject);
            $this->email->message($content);
            //  }
            $result = $this->email->send();
        }
        $data = $this->trade_m->send_ticket($content,$subject,$send_num);
        echo $data;
    }
    // End of ticket
    // Payment
    public function payment(){
        if($this->session->has_userdata('user_name')==1){
            $data["menu"] = $this->trade_m->get_menu();
            $this->load->view("admin/payment",$data);
        }
        else{
            $this->load->view("admin/login");
        }
    }
    // End of Payment
    // Back UP
    public function back_up(){
        if($this->session->has_userdata('user_name')==1){
            $data["menu"] = $this->trade_m->get_menu();
            $data["product"] = $this->trade_m->get_product();
            $this->load->view("admin/back_up",$data);
        }
        else{
            $this->load->view("admin/login");
        }
    }
    public function visi_cat(){
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        $data = $this->trade_m->visi_cat($id,$status);
        echo $data;
    }
    // End of Back Up
    // Settings
    public function setting(){
        if($this->session->has_userdata('user_name')==1){
            $data["menu"] = $this->trade_m->get_menu();
            $this->load->view("admin/setting",$data);
        }
        else{
            $this->load->view("admin/login");
        }
    }
    public function save_front(){
        $cre_date = date("Y-m-d H-i-s");
        $title = $this->input->post("title");
        $content = $this->input->post("content");
        $s_type = $this->input->post("s_type");
        $name= $_FILES["myfile"]["name"];
		$type= $_FILES["myfile"]["type"];
		$size= $_FILES["myfile"]["size"];
		$temp= $_FILES["myfile"]["tmp_name"];
        $error= $_FILES["myfile"]["error"];
        if ($error > 0){
			echo "Error uploading file!";
		}
		else if($error == 0){
			if($type=="image/jpg/png" || $size > 30000000 )//condition for the file
		    {
				echo "Format not allowed or file size too big!";
			}
		    else
		    {
				if($size == 0){
					echo "SELECT the Image";
				}
				else{
                    $file_name = $cre_date.$name;
					move_uploaded_file($temp, "assets/upload/".$file_name);
					$data = $this->trade_m->save_front($title,$content,$s_type,$file_name,$cre_date); 
					// $data = json_encode($data);
					echo $data;
				}
	     	}
		}
		else{
			echo "file size too big!";
		}
    }
    public function get_front(){
        $data = $this->trade_m->get_front();
		
		header("Content-Type:application/json");
		$data = json_encode($data);

		echo $data;
    }
    public function del_front(){
        parse_str(file_get_contents("php://input"),$_DELETE);
        $id = $_DELETE['id'];
        $data = $this->trade_m->del_front($id);
		
		header("Content-Type:application/json");
		$data = json_encode($data);

		echo $data;
    }
    // Update Front Color
    public function update_color(){
        $h_color = $this->input->post("h_color");
        $m_color = $this->input->post("m_color");
        $data = $this->trade_m->update_color($h_color,$m_color);
        echo $data;
    }
    public function get_color(){
        $data = $this->trade_m->get_color();
        echo $data;
    }
    // End of color
}