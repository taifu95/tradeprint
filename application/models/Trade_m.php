<?php
/**
 * 
 */
class Trade_m extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function log_in($name,$pwd){
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        $sql = "SELECT * FROM tbl_user where user_name ='".$name."' and password ='".$pwd."'";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row)
		{
	        $res = [];
			$i++;
			$res['id'] = $i;
			$res['user_id'] = $row->id;
			$res['name'] = $row->user_name;
			$res['password'] = $row->password;
			$res['email'] = $row->email;
			$res['visit_num'] = $row->visit_num;
			array_push($data,$res);
        }
		if(count($data) >= 1){
            $visit_num = $data[0]['visit_num']+1;
            $sql = "UPDATE tbl_user SET ip_address = '".$ip."' ,visit_num ='".$visit_num."' WHERE id='".$data[0]['user_id']."'";
            $query = $this->db->query($sql);
            $newdata = array(
                'user_id'  => $data[0]['user_id'],
                'user_name'  => $data[0]['name'],
                'email'     => $data[0]['email'],
                'password'     => $data[0]['password'],
                'logged_in' => TRUE
            );

            $this->session->set_userdata($newdata);
            $this->session->set_userdata('temp','false');
            return "success";
		}
		else{
			return "fail";
		}
    }
    public function sign_up($name,$email,$pwd){
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $sql = "SELECT * FROM tbl_user where email ='".$email."' or user_name='".$name."'";
		$query = $this->db->query($sql);
		$data = array();
        $i = 0;
		foreach ($query->result() as $row)
		{
	        $res = [];
			$i++;
			$res['id'] = $i;
			array_push($data,$res);
        }
		if(count($data) == 0){
            $visit_num = 1;
            $sql = "SELECT max(id) as user_id FROM tbl_user";
            $query = $this->db->query($sql);
            $user_id = array();
            foreach ($query->result() as $row)
            {
                $res = [];
                $res['id'] = $row->user_id;
                array_push($user_id,$res);
            }
            $uid = $user_id[0]['id'];
            $query = $this->db->query($sql);
            $sql = "INSERT INTO tbl_user 
                            (user_name, password,email, visit_num, ip_address) 
                            values('".$name."','".$pwd."','".$email."','".$visit_num."','".$ip."')";
            $query = $this->db->query($sql);
            $newdata = array(
                'user_id'  => $uid,
                'user_name'  => $name,
                'email'     => $email,
                'password'     => $pwd,
                'logged_in' => TRUE
            );

            $this->session->set_userdata($newdata);
            $this->session->set_userdata('temp','false');
            return "success";
		}
		else{
			return "fail";
		}
    }
    // Get Menu
    public function get_menu(){
        $sql = "SELECT * FROM tbl_menu";
        $query = $this->db->query($sql);
        $data = json_encode($query->result());
        return $data;
    }
    // Profile
    public function get_profile(){
        $user_id = $this->session->userdata('user_id');
        $sql = "SELECT * FROM tbl_user WHERE id='".$user_id."'";
        $query = $this->db->query($sql);
        $data = json_encode($query->result());
        return $data;
    }
    public function update_profile($user_name,$email,$password){
        $user_id = $this->session->userdata('user_id');
        $sql = "UPDATE tbl_user 
                    SET user_name='".$user_name."',email = '".$email."',password = '".$password."'
                    WHERE id='".$user_id."'";
        $query = $this->db->query($sql);
        return "success";
    }
    // End of Profle
    // Menu
    public function get_cat_menu(){
        $sql_top = "SELECT top_cate FROM tbl_category GROUP BY top_cate";
        $query_top = $this->db->query($sql_top);
        $sql = "SELECT * FROM tbl_category ORDER BY top_cate";
        $query = $this->db->query($sql);
		$data1 = array();
		$data2 = array();
        $i = 0;
        foreach ($query_top->result() as $row){
			$res = [];
			$res['top_cate'] = $row->top_cate;
			array_push($data2,$res);
        }
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] = $row->id;
			$res['top_cate'] = $row->top_cate;
			$res['visible'] = $row->visible;
			$res['c_name'] = $row->c_name;
			array_push($data1,$res);
        }
        $data['top'] = $data2;
        $data['menu'] = $data1;
        return $data;
    }
    // ENd of MEnu
    // User Management
    public function get_user(){
        $sql = "SELECT * FROM tbl_user";
        $query = $this->db->query($sql);
        $data = json_encode($query->result());
        return $data;
    }
    // End of Management
    // Category
    public function get_category(){
        $sql = "SELECT tc.*,t_item.total_item 
                    FROM tbl_category as tc
                    LEFT JOIN (SELECT product_name,count(id) as total_item 
                                FROM tbl_product_temp 
                                GROUP BY product_name , product_id) as t_item on tc.c_name = t_item.product_name
                    ORDER BY tc.c_name";
        $query = $this->db->query($sql);
        $data = json_encode($query->result());
        return $data;
    }
    public function get_cate_info($id){
        $sql = "SELECT * FROM tbl_category WHERE id='".$id."'";
        $query = $this->db->query($sql);
        
        $sql_quantity = "SELECT a.quantity,ifnull(tc.vat,0) as vat FROM tbl_category as tc
                            LEFT JOIN (SELECT product_name, quantity FROM tbl_product_temp GROUP BY quantity) as a on tc.c_name = a.product_name
                            WHERE tc.id='".$id."'
                            ORDER BY a.quantity";
        $query_quantity = $this->db->query($sql_quantity);
        $sql_service = "SELECT tc.id,a.price_print,a.price_check, a.price_check_pr, a.price_ass,a.product_name FROM tbl_category as tc
                            LEFT JOIN (
                                SELECT product_name, price_print, price_check, price_check_pr, price_ass 
                                    FROM tbl_product_temp  ) as a on tc.c_name = a.product_name
                                    WHERE tc.id='".$id."'
                                    GROUP BY tc.id";
        $query_service = $this->db->query($sql_service);
        // $sql_desc = "SELECT tc.id,a.price_print,a.price_check, a.price_check_pr, a.price_ass,a.product_name FROM tbl_category as tc
        //                     LEFT JOIN (
        //                         SELECT product_name, price_print, price_check, price_check_pr, price_ass 
        //                             FROM tbl_product_temp  ) as a on tc.c_name = a.product_name
        //                             WHERE tc.id='".$id."'
        //                             GROUP BY tc.id";
        // $query_desc = $this->db->query($sql_desc);
        $data["service"] = json_encode($query_service->result());
        $data["quantity"] = json_encode($query_quantity->result());
        $data["detail"] = json_encode($query->result());
        // $data["desc"] = json_encode($ququery_descery->result());
        // $data = json_encode($query->result());
        return $data;
    }
    public function get_c_img($c_id){
        $sql = "SELECT c_img,c_name FROM tbl_category WHERE id='".$c_id."'";
        $query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['c_img'] = $row->c_img;
			$res['c_name'] = $row->c_name;
			array_push($data,$res);
        }
        return $data;
    }
    public function upload_cate($file_name){
        $tbl_id = $_SESSION["cat_id"];
        $sql = "SELECT c_img FROM tbl_category WHERE id='".$tbl_id."'";
        $query = $this->db->query($sql);
        $sql1 = "UPDATE tbl_category SET c_img = '' WHERE id='".$tbl_id."'";
        $query1 = $this->db->query($sql1);
        foreach($query->result() as $row){
            $c_img = $row->c_img;
        }
        if($c_img == "" || $c_img == null){
            $c_img .= $file_name;
        }
        else{
            $c_img .= ",".$file_name;
        }
        $sql = "UPDATE tbl_category SET c_img = '".$c_img."' WHERE id='".$tbl_id."'";
        $query = $this->db->query($sql);
        return $c_img;
    }
    public function get_cate_gallery(){
        $tbl_id = $_SESSION["cat_id"];
        $sql = "SELECT c_img FROM tbl_category WHERE id='".$tbl_id."'";
        $query = $this->db->query($sql);
        $data = json_encode($query->result());
        return $data;
    }
    public function del_cate_gallery($id){
        $tbl_id = $_SESSION["cat_id"];
        $sql = "SELECT c_img FROM tbl_category WHERE id='".$tbl_id."'";
        $query = $this->db->query($sql);
        foreach($query->result() as $row){
            $c_img = $row->c_img;
        }
        $c_img = explode(",",$c_img);
        unset($c_img[$id]);
        $new_img = "";
        $i = 0;

        foreach($c_img as $str){
            if($i == count($c_img) - 1){
                $new_img .= $str;
            }
            else{
                $new_img .= $str.",";
            }
            $i++;
        }
        $sql = "UPDATE tbl_category SET c_img = '".$new_img."' WHERE id='".$tbl_id."'";
        $query = $this->db->query($sql);
        return $new_img;
    }
    public function save_vat($pro_id,$val){
        $sql = "UPDATE tbl_category SET vat = '".$val."' WHERE id='".$pro_id."'";
        $query = $this->db->query($sql);
        return "success";
    }
    public function save_art($art1,$art2,$art3,$pro_id){
        $sql = "UPDATE tbl_category 
                    SET art1 ='".$art1."',art2 ='".$art2."',art3 ='".$art3."'
                    WHERE id='".$pro_id."'";
        $query = $this->db->query($sql);
        return "success";
    }
    public function save_desc($id, $desc, $artic){
        $sql = "UPDATE tbl_category 
                    SET descrip='".$desc."', artic='".$artic."'
                    WHERE id='".$id."'";
        $query = $this->db->query($sql);
        return "success";
    }
    // Save Detail
    public function save_detail($val,$id,$type){
        // $val = htmlentities(htmlspecialchars($val));
        $val =htmlentities($val,ENT_QUOTES, "UTF-8");
        
        if($type == "detail"){
            $sql = "UPDATE tbl_category SET detail = '".$val."' 
                        WHERE id='".$id."'";
        }
        else{
            $sql = "UPDATE tbl_category SET specs = '".$val."' 
                        WHERE id='".$id."'";
        }
        $query = $this->db->query($sql);
        return "success";
    }
    // Update Art Attachments
    public function upload_art($file_name,$type){
        $tbl_id = $_SESSION["cat_id"];
        if($type == 'ai'){
            $sql = "UPDATE tbl_category SET art_ai='".$file_name."' WHERE id='".$tbl_id."'";
        }
        if($type == 'id'){
            $sql = "UPDATE tbl_category SET art_id='".$file_name."' WHERE id='".$tbl_id."'";
        }
        if($type == 'pdf'){
            $sql = "UPDATE tbl_category SET art_pdf='".$file_name."' WHERE id='".$tbl_id."'";
        }
        if($type == 'pho'){
            $sql = "UPDATE tbl_category SET art_pho='".$file_name."' WHERE id='".$tbl_id."'";
        }
        // die(print_r($sql));
        $query = $this->db->query($sql);
        $data = array();
        $data['status'] = 'success';
        $data['file_name'] = $file_name;
        $data_res = json_encode($data);
        return $data_res;
    }
    // End of Art Attachments
    public function get_price($key,$c_name){
        $key = json_decode($key,true);
        $sql_where = "";
        $i = 0;
        foreach(array_keys($key) as $sql_key){
            $sql_r_key ="";
            if($sql_key == "Sides Printed"){
                $sql_r_key = "sides_print";
            }
            if($sql_key == "Paper Type"){
                $sql_r_key = "paper_type";
            }
            if($sql_key == "Round Corners"){
                $sql_r_key = "round_corner";
            }
            if($sql_key == "Sets"){
                $sql_r_key = "sets";
            }
            if($sql_key == "Size"){
                $sql_r_key = "size";
            }
            if($sql_key == "Quantity"){
                $sql_r_key = "quantity";
            }
            if($sql_key == "Shape"){
                $sql_r_key = "shape";
            }
            if($sql_key == "Base"){
                $sql_r_key = "base";
            }
            if($sql_key == "Lamination"){
                $sql_r_key = "lami";
            }
            if($sql_key == "Folding"){
                $sql_r_key = "folding";
            }
            if($sql_key == "Eyelets"){
                $sql_r_key = 'eyelets';
            }
            if($sql_key == "Hemming"){
                $sql_r_key = 'hemming';
            }
            if($sql_key == "Material"){
                $sql_r_key = 'material';
            }
            if($sql_key == "Cartridge"){
                $sql_r_key = 'cartridge';
            }
            if($sql_key == "Spot Uv"){
                $sql_r_key = "spot";
            }
            if($sql_key == "Pages Per Pad"){
                $sql_r_key = "pages_per_pad";
            }
            if($i == count($key) - 1){
                $sql_where .= $sql_r_key ."='".$key[$sql_key]."' ";
            }
            if($i < count($key) - 1){
                $sql_where .= $sql_r_key ."='".$key[$sql_key]."' AND ";
            }
            $i++;
        }
        $sql = "SELECT * FROM tbl_product_temp WHERE $sql_where AND product_name='".$c_name."'
                    ORDER BY quantity";
        $query = $this->db->query($sql);
        // die(print_r($sql));
        $data = json_encode($query->result());
        return $data;
    }
    // End of Category
    // Product
    public function get_all_pro(){
        $sql = "SELECT * FROM tbl_product_temp";
        $query = $this->db->query($sql);
        $data = json_encode($query->result());
        return $data;
    }
    // End of Product
    // Setting
    public function save_front($title,$content,$s_type,$file_name,$cre_date){
        $sql = "INSERT INTO tbl_frontend (title,content,img_url,s_type,c_date)
                    values('".$title."','".$content."','".$file_name."','".$s_type."','".$cre_date."')";
        $query = $this->db->query($sql);
        // $data = json_encode($query->result());
        return "success";
    }
    public function get_front(){
        $sql = "SELECT * FROM tbl_frontend";
        $query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			// $res['id'] = $i;
			$res['id'] = $row->id;
			$res['Title'] = $row->title;
			$res['Image'] = $row->img_url;
			$res['Content'] = $row->content;
			$res['Type'] = $row->s_type;
			array_push($data,$res);
        }
        return $data;
    }
    // Header Color
    public function update_color($h_color,$m_color){
        $sql = "UPDATE tbl_color SET header='".$h_color."', menu ='".$m_color."'";
        $query = $this->db->query($sql);
        return "success";
    }
    public function get_color(){
        $sql = "SELECT * FROM tbl_color";
        $query = $this->db->query($sql);
        $data = json_encode($query->result());
        return $data;
    }
    // End of color
    public function del_front($id){
        $sql = "DELETE FROM tbl_frontend WHERE id='".$id."'";
        $query = $this->db->query($sql);
        return "success";
    }
    public function get_search($input){
        $sql = "SELECT * FROM tbl_category WHERE c_name like '%".$input."%'";
        $query = $this->db->query($sql);
        $data = json_encode($query->result());
        return $data;
    }
    // Save Contact
    public function save_contact($name,$email,$contact_message,$subject){
        $cre_date = date("F j, Y, g:i a");
        $sql = "INSERT INTO tbl_contact_front (s_name,email,subject_name,contact_message,cre_date)
                    values('".$name."','".$email."','".$subject."','".$contact_message."','".$cre_date."')";
        // die(print_r($sql));
        $query = $this->db->query($sql);
        return "success";           
    }
    // Back Up
    public function get_product(){
        $sql = "SELECT *,tc.c_type,tc.vat,tc.visible,tc.id as c_id
                FROM tbl_product_temp as tp
                   LEFT JOIN tbl_category as tc on tc.c_name = tp.product_name
                    GROUP BY product_name";
        $query = $this->db->query($sql);
        $data = json_encode($query->result());
        return $data;
    }
    public function visi_cat($id,$status){
        if($status == 0){
            $status_f =1;
        }
        if($status == 1){
            $status_f =0;
        }
        $sql = "UPDATE tbl_category SET visible ='".$status_f."' WHERE id='".$id."'";
        $query = $this->db->query($sql);
        return "success";
    }
    // End of Product
    // Save Ticket
    public function get_total_user(){
        $sql = "SELECT email FROM tbl_user WHERE type != 'admin'";
        $query = $this->db->query($sql);
        $data = json_encode($query->result());
        return $data;
    }
    public function send_ticket($content,$subject,$send_num){
        $cre_date = date("F j, Y, g:i a");
        $val =htmlentities($content,ENT_QUOTES, "UTF-8");
        $sql_sent = "SELECT total_sent as current_sent FROM tbl_ticket ORDER BY id desc Limit 1";
        $query_sent = $this->db->query($sql_sent);
        
        $data = array();
        $temp = 0;
        $total_sent = 0;
        if($query_sent->result()!= array()){
            foreach ($query_sent->result() as $row){
                $temp = $row->current_sent;
                $total_sent = intval($send_num) + intval($temp);
            }
        }
        else{
            $send_num = $send_num;
        }
        $sql = "INSERT INTO tbl_ticket (subject,content,cre_date,total_sent)
                    values('".$subject."','".$val."','".$cre_date."','$total_sent')";
        // die(print_r($sql));
        $query = $this->db->query($sql);
        return "success";  
    }
    public function get_ticket(){
        $sql = "SELECT * FROM tbl_ticket";
        $query = $this->db->query($sql);
        $data = json_encode($query->result());
        return $data;
    }
    public function get_total_info(){
        $sql_ticket = "SELECT count(id) as total_ticket, sum(total_sent) as total_sent FROM tbl_ticket ";
        $query_ticket = $this->db->query($sql_ticket);
        $data['ticket'] = $query_ticket->result();
        $sql_user = "SELECT count(id) as total_user FROM tbl_user WHERE type != 'admin'";
        $query_user = $this->db->query($sql_user);
        $data['user'] = $query_user->result();
        $sql_contact = "SELECT count(id) as total_contact FROM tbl_contact_front";
        $query_contact = $this->db->query($sql_contact);
        $data['contact'] = $query_contact->result();
        $data = json_encode($data);
        return $data;
    }
}
