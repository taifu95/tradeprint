<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('content_m');
	}
	public function index()
	{
		if($this->session->has_userdata('user_name')==1){
			$this->load->view('dash/home_v');
		}
		else{
			$data['about'] = $this->content_m->get_port();
            $this->load->view('dashboard',$data);
		}		
	}
	public function get_slide(){
		$data = $this->content_m->get_slide();
		$data = json_encode($data);
		echo $data;
	}
	public function delete_slide(){
		$tbl_id = $this->input->POST("tbl_id",true);
		$data = $this->content_m->delete_slide($tbl_id);
		$data = json_encode($data);
		echo $data;
	}
	public function update_slide(){
		$cre_date = date("j, n, Y, h,i,s");
		$sli_text = $this->input->post('sli_text',true);
		$sli_title = $this->input->post('sli_title',true);
		$slide_update = $this->input->post('slide_update',true);
		$sup_flag = $this->input->post('sup_flag',true);
		// $slide_name = $this->input->post('slide_name',true);
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
						$data = $this->content_m->update_slide($cre_date,$name,$sli_text,$sli_title,$tbl_id,$slide_update,$sup_flag); 
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
            $slide_name = "";
			$data = $this->content_m->update_slide($cre_date,$slide_name,$sli_text,$sli_title,$tbl_id,$slide_update,$sup_flag); 
			echo $data;
		}
    }
    public function insert_slide(){
        $cre_date = date("j, n, Y, h,i,s");
		$sli_text = $this->input->post('sli_text',true);
		$sli_title = $this->input->post('sli_title',true);
		
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
                    $data = $this->content_m->insert_slide($cre_date,$name,$sli_text,$sli_title); 
                    // $data = json_encode($data);
                    echo $data;
                }
            }
        }
        else{
            echo "file size too big!";
        }
    }
	// This is about
	public function get_about(){
		$data = $this->content_m->get_about();
		$data = json_encode($data);
		echo $data;
	}
	public function update_about(){
		$cre_date = date("j, n, Y, h,i,s");
		$abo_text = $this->input->post('abo_text',true);
		$abo_title = $this->input->post('abo_title',true);
        $tbl_id = $this->input->post('tbl_id',true);
        $about_flg = $this->input->post('about_flg',true);
        if($about_flg == 'true'){
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
                        move_uploaded_file($temp, "assets/img/about/" .$cre_date.$name);
                        $data = $this->content_m->update_about($name,$abo_text,$abo_title,$tbl_id,$about_flg,$cre_date); 
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
            $name = "";
            $data = $this->content_m->update_about($name,$abo_text,$abo_title,$tbl_id,$about_flg,$cre_date);
            echo $data;
        }
    }
    public function insert_about(){
        $cre_date = date("j, n, Y, h,i,s");
		$abo_text = $this->input->post('abo_text',true);
		$abo_title = $this->input->post('abo_title',true);
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
                    move_uploaded_file($temp, "assets/img/about/" .$cre_date.$name);
                    $data = $this->content_m->insert_about($name,$abo_text,$abo_title,$cre_date); 
                    // $data = json_encode($data);
                    echo $data;
                }
            }
        }
        else{
            echo "file size too big!";
        }
    }
    public function delete_about(){
        $tbl_id = $this->input->POST("tbl_id",true);
		$data = $this->content_m->delete_about($tbl_id);
		$data = json_encode($data);
		echo $data;
    }
	// End of about
	// Service
	public function get_serive(){
		$data = $this->content_m->get_serive();
		$data = json_encode($data);
		echo $data;
    }
    public function insert_service(){
		$s_title = $this->input->post('s_title',true);
		$s_text = $this->input->post('s_text',true);
		$data = $this->content_m->insert_service($s_title,$s_text);
		$data = json_encode($data);
		echo $data;
    }
	public function update_service(){
		$s_title = $this->input->post('s_title',true);
		$s_text = $this->input->post('s_text',true);
		$tbl_id = $this->input->post('tbl_id',true);
		$data = $this->content_m->update_service($s_title,$s_text,$tbl_id);
		$data = json_encode($data);
		echo $data;
    }
    public function delete_service(){
        $tbl_id = $this->input->POST("tbl_id",true);
		$data = $this->content_m->delete_service($tbl_id);
		$data = json_encode($data);
		echo $data;
    }
	// End of service
	// Team
	public function get_team(){
		$data = $this->content_m->get_team();
		$data = json_encode($data);
		echo $data;
	}
	public function update_team(){
		$cre_date = date("j, n, Y, h,i,s");
		$team_text = $this->input->post('team_text',true);
		$team_title = $this->input->post('team_title',true);
		$tbl_id = $this->input->post('tbl_id',true);
        $team_flag = $this->input->post('team_flag',true);
        if($team_flag =='true'){
            $name= $_FILES["userfile4"]["name"];
            $type= $_FILES["userfile4"]["type"];
            $size= $_FILES["userfile4"]["size"];
            $temp= $_FILES["userfile4"]["tmp_name"];
            $error= $_FILES["userfile4"]["error"];
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
                        move_uploaded_file($temp, "assets/img/team/" .$cre_date.$name);
                        $data = $this->content_m->update_team($name,$team_text,$team_title,$tbl_id,$cre_date,$team_flag); 
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
            $name = "";
            $data = $this->content_m->update_team($name,$team_text,$team_title,$tbl_id,$cre_date,$team_flag); 
            echo $data;
        }
    }
    public function insert_team(){
		$cre_date = date("j, n, Y, h,i,s");
		$team_text = $this->input->post('team_text',true);
		$team_title = $this->input->post('team_title',true);
        
        $name= $_FILES["userfile4"]["name"];
        $type= $_FILES["userfile4"]["type"];
        $size= $_FILES["userfile4"]["size"];
        $temp= $_FILES["userfile4"]["tmp_name"];
        $error= $_FILES["userfile4"]["error"];
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
                    move_uploaded_file($temp, "assets/img/team/" .$cre_date.$name);
                    $data = $this->content_m->insert_team($name,$team_text,$team_title,$cre_date); 
                    // $data = json_encode($data);
                    echo $data;
                }
            }
        }
        else{
            echo "file size too big!";
        }
    }
    public function delete_team(){
        $tbl_id = $this->input->POST("tbl_id",true);
		$data = $this->content_m->delete_team($tbl_id);
		$data = json_encode($data);
		echo $data;
    }
	// End of team
	// Fact
	public function get_fact(){
		$data = $this->content_m->get_fact();
		$data = json_encode($data);
		echo $data;
    }
    
    public function insert_fact(){
		$f_title = $this->input->post('f_title',true);
		$f_text = $this->input->post('f_text',true);
		$data = $this->content_m->insert_fact($f_title,$f_text);
		$data = json_encode($data);
		echo $data;
    }
	public function update_fact(){
		$f_title = $this->input->post('f_title',true);
		$f_text = $this->input->post('f_text',true);
		$tbl_id = $this->input->post('tbl_id',true);
		$data = $this->content_m->update_fact($f_title,$f_text,$tbl_id);
		$data = json_encode($data);
		echo $data;
    }
    public function delete_fact(){
        $tbl_id = $this->input->POST("tbl_id",true);
		$data = $this->content_m->delete_fact($tbl_id);
		$data = json_encode($data);
		echo $data;
    }
    // End of Fact
    // Fact
	public function get_price(){
		$data = $this->content_m->get_price();
		$data = json_encode($data);
		echo $data;
	}
	public function update_price(){
		$p_title = $this->input->post('sp_title',true);
		$p_text1 = $this->input->post('sp_text1',true);
		$p_text2 = $this->input->post('sp_text2',true);
		$p_text3 = $this->input->post('sp_text3',true);
		$p_text4 = $this->input->post('sp_text4',true);
		$p_price = $this->input->post('sp_price',true);
		$tbl_id = $this->input->post('tbl_id',true);
		$data = $this->content_m->update_price($p_title,$p_text1,$p_text2,$p_text3,$p_text4,$p_price,$tbl_id);
		$data = json_encode($data);
		echo $data;
    }
    public function insert_price(){
		$p_title = $this->input->post('sp_title',true);
		$p_text1 = $this->input->post('sp_text1',true);
		$p_text2 = $this->input->post('sp_text2',true);
		$p_text3 = $this->input->post('sp_text3',true);
		$p_text4 = $this->input->post('sp_text4',true);
		$p_price = $this->input->post('sp_price',true);
		$data = $this->content_m->insert_price($p_title,$p_text1,$p_text2,$p_text3,$p_text4,$p_price);
		$data = json_encode($data);
		echo $data;
    }
    public function delete_price(){
        $tbl_id = $this->input->post('tbl_id',true);
        $data = $this->content_m->delete_price($tbl_id);
		$data = json_encode($data);
		echo $data;
    }
	// End of Fact
	// Contact US
	public function get_con(){
		$data = $this->content_m->get_con();
		$data = json_encode($data);
		echo $data;
	}
	public function update_con(){
		$c_title = $this->input->post('c_title',true);
		$c_text = $this->input->post('c_text',true);
		$tbl_id = $this->input->post('tbl_id',true);
		$data = $this->content_m->update_con($c_title,$c_text,$tbl_id);
		$data = json_encode($data);
		echo $data;
    }
    public function insert_con(){
		$c_title = $this->input->post('c_title',true);
		$c_text = $this->input->post('c_text',true);
		$data = $this->content_m->insert_con($c_title,$c_text);
		$data = json_encode($data);
		echo $data;
    }
    public function delete_con(){
		$tbl_id = $this->input->post('tbl_id',true);
		$data = $this->content_m->delete_con($tbl_id);
		$data = json_encode($data);
		echo $data;
	}
    // End of Contact US
    // Port
	public function get_port(){
		$data = $this->content_m->get_port();
		$data = json_encode($data);
		echo $data;
	}
	public function update_port(){
        $cre_date = date("j, n, Y, h,i,s");

		$port_flg = $this->input->post('port_flg',true);
		$port_text = $this->input->post('port_text',true);
		$port_title = $this->input->post('port_title',true);
        $tbl_id = $this->input->post('tbl_id',true);
        
        if($port_flg == 'true'){
            $name= $_FILES["userfile3"]["name"];
            $type= $_FILES["userfile3"]["type"];
            $size= $_FILES["userfile3"]["size"];
            $temp= $_FILES["userfile3"]["tmp_name"];
            $error= $_FILES["userfile3"]["error"];
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
                        move_uploaded_file($temp, "assets/img/portfolio/" .$cre_date.$name);
                        $data = $this->content_m->update_port($name,$port_text,$port_title,$tbl_id,$port_flg,$cre_date); 
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
            $name = "";
            $data = $this->content_m->update_port($name,$port_text,$port_title,$tbl_id,$port_flg,$cre_date); 
            echo $data;
        }
    }
    public function insert_port(){
        $cre_date = date("j, n, Y, h,i,s");

		$port_text = $this->input->post('port_text',true);
		$port_title = $this->input->post('port_title',true);
        $name= $_FILES["userfile3"]["name"];
        $type= $_FILES["userfile3"]["type"];
        $size= $_FILES["userfile3"]["size"];
        $temp= $_FILES["userfile3"]["tmp_name"];
        $error= $_FILES["userfile3"]["error"];
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
                    move_uploaded_file($temp, "assets/img/portfolio/" .$cre_date.$name);
                    $data = $this->content_m->insert_port($name,$port_text,$port_title,$cre_date); 
                    // $data = json_encode($data);
                    echo $data;
                }
            }
        }
        else{
            echo "file size too big!";
        }
    }
    public function delete_port(){
        $tbl_id = $this->input->POST("tbl_id",true);
		$data = $this->content_m->delete_port($tbl_id);
		$data = json_encode($data);
		echo $data;
    }
	// End of Port
    //get category
    public function get_cat(){
        $data = $this->content_m->get_cat();
        $data = json_encode($data);
        echo $data;
    }
    public function insert_main_cat(){
        $title = $this->input->POST('title',true);
        $data = $this->content_m->insert_main_cat($title);
        $data = json_encode($data);
        echo $data;
    }
    public function insert_sub_cat(){
        $title = $this->input->POST('title',true);
        $p_id = $this->input->POST('p_id',true);
        $data = $this->content_m->insert_sub_cat($title,$p_id);
        $data = json_encode($data);
        echo $data;
    }
    public function update_sub_cat(){
        $title = $this->input->POST('title',true);
        $p_id = $this->input->POST('p_id',true);
        $data = $this->content_m->update_sub_cat($title,$p_id);
        $data = json_encode($data);
        echo $data;
    }
    public function del_sub_cat(){
        $parentId = $this->input->POST('parentId',true);
        $tbl_id = $this->input->POST('tbl_id',true);
        $data = $this->content_m->del_sub_cat($parentId,$tbl_id);
        $data = json_encode($data);
        echo $data;
    }
    // Q and Answer 
    public function get_qa(){
        $data = $this->content_m->get_qa();
        $data = json_encode($data);
        echo $data;
    }
    public function get_cat_drop(){
        $data = $this->content_m->get_cat_drop();
        $data = json_encode($data);
        echo $data;
    }
    public function insert_qa(){
        $cat_id = $this->input->post('cat_id',true);
        $question = $this->input->post('question',true);
        $answer = $this->input->post('answer',true);
        $data = $this->content_m->insert_qa($cat_id,$question,$answer);
        $data = json_encode($data);
        echo $data;
    }
    public function delete_qa(){
        $tbl_id = $this->input->post('tbl_id',true);
        $data = $this->content_m->delete_qa($tbl_id);
        $data = json_encode($data);
        echo $data;
    }
    public function update_qa(){
        $tbl_id = $this->input->post('tbl_id',true);
        $cat_id = $this->input->post('cat_id',true);
        $question = $this->input->post('question',true);
        $answer = $this->input->post('answer',true);
        $data = $this->content_m->update_qa($cat_id,$question,$answer,$tbl_id);
        $data = json_encode($data);
        echo $data;
    }
}