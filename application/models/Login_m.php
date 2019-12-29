<?php
/**
 * 
 */
class Login_m extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function log_in($name,$pwd){
		$sql = "SELECT * FROM tbl_user where name ='".$name."' and password ='".$pwd."'";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row)
		{
	        $res = [];
			$i++;
			$res['id'] = $i;
			$res['user_id'] = $row->id;
			$res['name'] = $row->name;
			$res['password'] = $row->password;
			$res['business_name'] = $row->business_name;
			$res['email'] = $row->email;
			$res['level'] = $row->level;
			$res['user_lock'] = $row->user_lock;
			$res['em_status'] = $row->em_status;
			array_push($data,$res);
		}
		if(count($data) >= 1){
			if($data[0]['user_lock'] == 1){
				return "user_locked";
			}
			if($data[0]['user_lock'] == 0){
				$newdata = array(
					'user_id'  => $data[0]['user_id'],
					'user_name'  => $data[0]['name'],
					'email'     => $data[0]['email'],
					'level'     => $data[0]['level'],
					'em_status'     => $data[0]['em_status'],
					'business_name'     => $data[0]['business_name'],
					'logged_in' => TRUE
				);

				$this->session->set_userdata($newdata);
				$this->session->set_userdata('temp','false');
				return "success";
			}
		}
		else{
			return "fail";
		}
	}
	public function get_data(){
		if($this->session->userdata('level') == "Admin"){
			$sql = "SELECT tu.*,ifnull(a.num,0) as num FROM tbl_user as tu
					LEFT join(SELECT tu.business_name,count(ta.id) as num FROM `tbl_adver` as ta
						left JOIN tbl_user as tu on ta.user_id = tu.id
						GROUP BY business_name) as a on tu.business_name = a.business_name

					ORDER BY business_name,level,name";
		}
		if($this->session->userdata('level') == "Primary TA"){
			$business_name = $this->session->userdata('business_name');
			$sql = "SELECT * FROM tbl_user where business_name = '".$business_name."'  ORDER BY business_name,level,name";
		}
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] = $i;
			$res['tbl_id'] = $row->id;
			$res['business_name'] = $row->business_name;
			$res['name'] = $row->name;
			$res['real_name'] = $row->first_name ." ". $row->last_name;
			$res['phone'] = $row->phone;
			$res['lock'] = $row->user_lock;
			$res['em_status'] = $row->em_status;
			$res['level'] = $row->level;
			$res['bus_active'] = $row->bus_active;
			if($this->session->userdata('level') == "Admin"){
				$res['num'] = $row->num;
			}
			else{
				$res['num'] = 0;
			}
			// $res['email'] = $row->email;
			array_push($data,$res);
        }
        return $data;
	}
	public function add_user($name,$level,$business_name){
		$sql = "SELECT * FROM tbl_user where name='".$name."'";
		$query = $this->db->query($sql);
		if($query->result() != array()){
			return "User already exits";
		}
		if($business_name == ""){
			$business_name = $this->session->userdata('business_name');
		}
		$query = $this->db->query("INSERT INTO tbl_user 
							(name,level,business_name) 
					values('".$name."','".$level."','".$business_name."')");
		return "success";
		// $row = $query->row_array();
	}
	public function update_user($tbl_id,$name,$business_name,$level){
		$sql = "UPDATE tbl_user 
					SET name='".$name."', business_name='".$business_name."' ,level = '".$level."'
					WHERE id=$tbl_id";
		$query = $this->db->query($sql);
		return "success";
	}
	public function delete_user($tbl_id,$level,$business_name){
		if($level=="Primary TA"){
			$sql1 = "SELECT * FROM tbl_user where business_name = '".$business_name."' and level='Secondary TA'";
			$query1 = $this->db->query($sql1);
			if(count($query1->result()) > 0){
				return "fail";
			}
		}
		$sql = "DELETE FROM tbl_user  WHERE id=$tbl_id";
		$query = $this->db->query($sql);
		return "success";
	}
	public function update_pwd($ver_pwd,$email){
		$sql = "SELECT id FROM tbl_user where name ='".$email."'";
		$query = $this->db->query($sql);
		if($query->result() == array()){
			return "fail";
		}
		else{
			foreach ($query->result() as $row){				
				$sql = "UPDATE tbl_user SET password='".$ver_pwd."' where id=$row->id";
				$query = $this->db->query($sql);
				// Give the session
				$sql = "SELECT * FROM tbl_user where id=$row->id";
				$query = $this->db->query($sql);
				$data = array();
				$i = 0;
				foreach ($query->result() as $row1){
					$res = [];
					$i++;
					$res['id'] = $i;
					$res['user_id'] = $row1->id;
					$res['name'] = $row1->name;
					$res['password'] = $row1->password;
					$res['business_name'] = $row1->business_name;
					// $res['email'] = $row1->email;
					$res['level'] = $row1->level;
					array_push($data,$res);
				}
				$newdata = array(
					'user_id'  => $data[0]['user_id'],
					'user_name'  => $data[0]['name'],
					// 'email'     => $data[0]['email'],
					'level'     => $data[0]['level'],
					'business_name'     => $data[0]['business_name'],
					'logged_in' => TRUE
				);
	
				$this->session->set_userdata($newdata);
				return "success";
			}
		}
	}
	public function update_lock($tbl_id,$mark){
		$sql = "UPDATE tbl_user SET user_lock = '".$mark."' WHERE id='".$tbl_id."'";
		$query = $this->db->query($sql);
		return "success";
	}
	public function update_em_status($business_name,$mark){
		$sql = "UPDATE tbl_user SET em_status = '".$mark."' WHERE business_name='".$business_name."'";
		$query = $this->db->query($sql);
		return "success";
	}
	public function update_bus_active($business_name,$mark){
		$sql = "UPDATE tbl_user SET bus_active = '".$mark."' WHERE business_name='".$business_name."'";
		$query = $this->db->query($sql);
		return "success";
	}
	// Account
	public function get_account($user_id){
		$sql = "SELECT * FROM tbl_user where id='".$user_id."'";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] = $i;
			$res['tbl_id'] = $row->id;
			$res['business_name'] = $row->business_name;
			// $res['name'] = $row->name;
			$res['name'] = $row->name;
			$res['password'] = $row->password;
			$res['email'] = $row->email;
			$res['phone'] = $row->phone;
			$res['service'] = $row->service;
			$res['first_name'] = $row->name;
			$res['last_name'] = $row->last_name;
			array_push($data,$res);
        }
        return $data;
	}
	public function update_account($tbl_id,$first_name,$last_name,$pwd,$email,$phone,$service){
		if($pwd == "" || $pwd == null){
			$sql = "UPDATE tbl_user 
					SET name='".$first_name."', last_name='".$last_name."', email='".$email."' ,
						phone = '".$phone."',service = '".$service."'
					WHERE id=$tbl_id";
		}
		else{
			$sql = "UPDATE tbl_user 
						SET name='".$first_name."', last_name='".$last_name."', email='".$email."' ,
							password = '".$pwd."',phone = '".$phone."',service = '".$service."'
						WHERE id=$tbl_id";
		}
		$query = $this->db->query($sql);
		$user_id = $this->session->userdata('user_id');
		$sql = "SELECT * FROM tbl_user where id='".$user_id."'";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] = $i;
			$res['tbl_id'] = $row->id;
			$res['business_name'] = $row->business_name;
			$res['name'] = $row->name;
			$res['password'] = $row->password;
			$res['email'] = $row->email;
			$res['phone'] = $row->phone;
			$res['service'] = $row->service;
			$res['first_name'] = $row->name;
			$res['last_name'] = $row->last_name;
			array_push($data,$res);
        }
        return $data;
	}
	// Update Ad page
	public function insert_sug($user_id,$sugg_cont){
		$today = date("F j, Y, g:i a");
		$sugg_cont = str_replace("'","`",$sugg_cont);
		$query = $this->db->query("INSERT INTO tbl_suggest (user_id,suggest,sug_date) values('".$user_id."','".$sugg_cont."','".$today."')");
		return "success";
	}
	public function save_temp($up_ty,$bg_url,$bus_name,$temp_name,$up_ind,$tmp_wi,$tmp_he,$tmp_le,$tmp_to,$fo_co ,$fo_le ,$fo_si ,$fo_to ,$fo_we,$fo_ri,$fo_al,$player_id,$advertise_id,$contract_id,$em_sel ){
		if($em_sel == 'true'){
			$em_status = 1;
		}
		if($em_sel == 'false'){
			$em_status = 0;
		}
		$today = date("F j, Y, g:i a");
		if($up_ty == "true"){
			$sql = "INSERT INTO tbl_temp (tmp_wi,bg_url,bus_name,temp_name,tmp_he,tmp_le,tmp_to,fo_co ,fo_le ,fo_si ,fo_to ,fo_we,fo_ri,fo_al,cr_date,player_id,advertise_id,contract_id,em_status)
						values('".$tmp_wi."','".$bg_url."','".$bus_name."','".$temp_name."','".$tmp_he."','".$tmp_le."','".$tmp_to."','".$fo_co."' ,'".$fo_le."' ,'".$fo_si."' ,'".$fo_to."' ,'".$fo_we."','".$fo_ri."','".$fo_al."','".$today."','".$player_id."','".$advertise_id."','".$contract_id."' ,'".$em_status."')";
			$query = $this->db->query($sql);
			$sql = "SELECT max(id) as last_id FROM tbl_temp";
			$query = $this->db->query($sql);
			$data = array();
			foreach ($query->result() as $row){
				$res = [];
				$res['last_id'] = $row->last_id;
				array_push($data,$res);
			}
			return $data;
		}
		else{
			$sql = "UPDATE tbl_temp 
							SET tmp_wi='".$tmp_wi."',bg_url='".$bg_url."',bus_name='".$bus_name."',
							temp_name='".$temp_name."', tmp_he='".$tmp_he."', tmp_le='".$tmp_le."' ,tmp_to='".$tmp_to."' ,
							fo_co = '".$fo_co."',fo_le = '".$fo_le."',fo_ri = '".$fo_ri."',
							fo_si = '".$fo_si."',fo_to = '".$fo_to."',fo_we = '".$fo_we."',fo_al = '".$fo_al."',cr_date = '".$today."',
							player_id = '".$player_id."',advertise_id = '".$advertise_id."',contract_id = '".$contract_id."',em_status = '".$em_status."'
						WHERE id=$up_ind";
			$query = $this->db->query($sql);
		}
		return "success";
	}
	public function delete_sugg($tbl_id){
		$sql = "DELETE FROM tbl_suggest where id=$tbl_id";
		$query = $this->db->query($sql);
		return "success";
	}
	public function get_temp1($sel_ind,$busi_name){
		// if($busi_name == ""){
		// 	if($sel_ind == 0){
		// 		$sql = "SELECT *
		// 			FROM tbl_temp";
		// 	}
		// 	if($sel_ind != 0){
		// 		$sql = "SELECT *
		// 			FROM tbl_temp where id=$sel_ind";
		// 	}
		// }
		if($busi_name != ""){
			if($sel_ind == 0){
				$sql = "SELECT *
					FROM tbl_temp WHERE bus_name='".$busi_name."'";
			}
			if($sel_ind != 0){
				$sql = "SELECT *
					FROM tbl_temp where id=$sel_ind and bus_name='".$busi_name."'";
			}
		}
		$business_name = $this->session->userdata("business_name");
		$query = $this->db->query($sql);
		$data = array();
		$i = 0; 
		foreach ($query->result() as $row){
			$res = [];
			if($this->session->userdata('level') == "Admin"){
				$i++;
				$res['id'] = $i;
				$res['tbl_id'] = $row->id;
				$res['tmp_wi'] = $row->tmp_wi;
				$res['bg_url'] = $row->bg_url;
				$res['bus_name'] = $row->bus_name;
				$res['temp_name'] = $row->temp_name;
				$res['tmp_he'] = $row->tmp_he;
				$res['tmp_le'] = $row->tmp_le;
				$res['tmp_to'] = $row->tmp_to;
				$res['fo_co'] = $row->fo_co;
				$res['fo_le'] = $row->fo_le;
				$res['fo_ri'] = $row->fo_ri;
				$res['fo_al'] = $row->fo_al;
				$res['fo_si'] = $row->fo_si;
				$res['fo_to'] = $row->fo_to;
				$res['fo_we'] = $row->fo_we;
				$res['cr_date'] = $row->cr_date;
				$res['em_status'] = $row->em_status;
				// 
				$res['player_id'] = $row->player_id;
				$res['advertise_id'] = $row->advertise_id;
				$res['contract_id'] = $row->contract_id;

				array_push($data,$res);
			}
			else{
				$flg = "false";
				$bus_arr = explode(",",$row->bus_name);
				for($j = 0; $j<count($bus_arr);$j++){
					if($business_name == $bus_arr[$j]){
						$flg = "true";
					}
				}
				if($flg == "true"){
					$i++;
					$res['id'] = $i;
					$res['tbl_id'] = $row->id;
					$res['tmp_wi'] = $row->tmp_wi;
					$res['bg_url'] = $row->bg_url;
					$res['bus_name'] = $row->bus_name;
					$res['tmp_he'] = $row->tmp_he;
					$res['tmp_le'] = $row->tmp_le;
					$res['tmp_to'] = $row->tmp_to;
					$res['fo_co'] = $row->fo_co;
					$res['fo_le'] = $row->fo_le;
					$res['fo_ri'] = $row->fo_ri;
					$res['fo_al'] = $row->fo_al;
					$res['fo_si'] = $row->fo_si;
					$res['fo_to'] = $row->fo_to;
					$res['fo_we'] = $row->fo_we;
					$res['cr_date'] = $row->cr_date;
					array_push($data,$res);
				}
			}
		}
        return $data;
	}
	public function get_temp($sel_ind){
		if($sel_ind == 0){
			$sql = "SELECT *
				FROM tbl_temp";
		}
		if($sel_ind != 0){
			$sql = "SELECT *
				FROM tbl_temp where id=$sel_ind";
		}
		$business_name = $this->session->userdata("business_name");
		$query = $this->db->query($sql);
		$data = array();
		$i = 0; 
		foreach ($query->result() as $row){
			$res = [];
			if($this->session->userdata('level') == "Admin"){
				$i++;
				$res['id'] = $i;
				$res['tbl_id'] = $row->id;
				$res['tmp_wi'] = $row->tmp_wi;
				$res['bg_url'] = $row->bg_url;
				$res['bus_name'] = $row->bus_name;
				$res['temp_name'] = $row->temp_name;
				$res['tmp_he'] = $row->tmp_he;
				$res['tmp_le'] = $row->tmp_le;
				$res['tmp_to'] = $row->tmp_to;
				$res['fo_co'] = $row->fo_co;
				$res['fo_le'] = $row->fo_le;
				$res['fo_ri'] = $row->fo_ri;
				$res['fo_al'] = $row->fo_al;
				$res['fo_si'] = $row->fo_si;
				$res['fo_to'] = $row->fo_to;
				$res['fo_we'] = $row->fo_we;
				$res['cr_date'] = $row->cr_date;
				$res['em_status'] = $row->em_status;
				// 
				$res['player_id'] = $row->player_id;
				$res['advertise_id'] = $row->advertise_id;
				$res['contract_id'] = $row->contract_id;

				array_push($data,$res);
			}
			else{
				$flg = "false";
				$bus_arr = explode(",",$row->bus_name);
				for($j = 0; $j<count($bus_arr);$j++){
					if($business_name == $bus_arr[$j]){
						$flg = "true";
					}
				}
				if($flg == "true"){
					$i++;
					$res['id'] = $i;
					$res['tbl_id'] = $row->id;
					$res['tmp_wi'] = $row->tmp_wi;
					$res['bg_url'] = $row->bg_url;
					$res['bus_name'] = $row->bus_name;
					$res['tmp_he'] = $row->tmp_he;
					$res['tmp_le'] = $row->tmp_le;
					$res['tmp_to'] = $row->tmp_to;
					$res['fo_co'] = $row->fo_co;
					$res['fo_le'] = $row->fo_le;
					$res['fo_ri'] = $row->fo_ri;
					$res['fo_al'] = $row->fo_al;
					$res['fo_si'] = $row->fo_si;
					$res['fo_to'] = $row->fo_to;
					$res['fo_we'] = $row->fo_we;
					$res['cr_date'] = $row->cr_date;
					array_push($data,$res);
				}
			}
		}
        return $data;
	}
	public function update_tem_em($tbl_id,$mark){
		$sql = "UPDATE tbl_temp SET em_status = '".$mark."' where id='".$tbl_id."'";
		$query = $this->db->query($sql);
		return 'success';
	}
	public function get_temp_name($busi_sel){
		if($busi_sel == ""){
			$sql = "SELECT tp.* FROM 
				(SELECT * FROM tbl_user WHERE em_status='true'
							group BY business_name) as a 
                            left JOIN tbl_temp as tp on tp.bus_name = a.business_name";
		}
		else{
			$sql = "SELECT *
				FROM tbl_temp where bus_name='".$busi_sel."'";
		}
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] =$i;
			$res['tbl_id'] = $row->id;
			$res['temp_name'] = $row->temp_name;
			array_push($data,$res);
        }
        return $data;
	}
	public function delete_temp($tbl_id,$bg_url){
		// $sql = "SELECT "
		$sql = "DELETE FROM tbl_temp where id='".$tbl_id."'";
		$query = $this->db->query($sql);
		$sql = "DELETE FROM tbl_bg where bg_name = '".$bg_url."'";
		$query = $this->db->query($sql);
		return "success";
	}
	public function get_temp_up($business_name){
		$user_level = $this->session->userdata('level');
		$user_bus_name = $this->session->userdata('business_name');
		if($user_level == "Admin"){
			$sql = "SELECT * FROM tbl_temp WHERE em_status=0";
			if($business_name != "" ||$business_name != NULL){
				// $sql_where = " Where bus_name = '".$business_name."'";
				$sql_where = " And bus_name = '".$business_name."'";
				$sql = $sql.$sql_where;
			}
		}
		if($user_level == "Secondary TA" || $user_level == "Primary TA"){
			$sql = "SELECT * FROM tbl_temp where bus_name = '".$user_bus_name."' and temp_name!='Primary Ad' and em_status = 0";
		}
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] =$i;
			$res['tbl_id'] = $row->id;
			$res['temp_name'] = $row->temp_name;
			$res['player_id'] = $row->player_id;
			array_push($data,$res);
        }
        return $data;
	}
	// Emergency
	public function get_temp_up_e($business_name){
		$user_level = $this->session->userdata('level');
		$user_bus_name = $this->session->userdata('business_name');
		if($user_level == "Admin"){
			$sql = "SELECT * FROM tbl_temp Where bus_name = 'I N E X' and em_status=1";
			// if($business_name != "" ||$business_name != NULL){
			// 	$sql_where = " Where bus_name = '".$business_name."' and em_status=1";
			// 	$sql = $sql.$sql_where;
			// }
			// else{
			// 	$sql_where = " WHERE em_status=1";
			// 	$sql = $sql.$sql_where;
			// }
		}
		if($user_level == "Secondary TA" || $user_level == "Primary TA"){
			$sql = "SELECT * FROM tbl_temp where bus_name = 'I N E X' and em_status=1";
		}
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] =$i;
			$res['tbl_id'] = $row->id;
			$res['temp_name'] = $row->temp_name;
			$res['player_id'] = $row->player_id;
			array_push($data,$res);
        }
        return $data;
	}
	public function add_bg($target_file){
		$sql = "INSERT INTO tbl_bg (bg_name) values('".$target_file."')";
		$query = $this->db->query($sql);
		// return "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";	
		return $target_file;			
	}
	public function get_bg(){
		$sql = "SELECT * FROM tbl_bg";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] =$i;
			$res['tbl_id'] = $row->id;
			$res['bg_name'] = $row->bg_name;
			array_push($data,$res);
        }
        return $data;
	}
	public function get_business_all(){
		$sql = "SELECT tu.business_name,ifnull(tn.temp_num,0)as temp_num
		FROM `tbl_user` as tu
			LEFT JOIN (
				select count(id) as temp_num,bus_name 
				FROM tbl_temp 
				GROUP BY bus_name) 
			as tn on tu.business_name = tn.bus_name
			where tu.bus_active = 1
		GROUP BY tu.business_name";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] =$i;
			$res['temp_num'] = $row->temp_num;
			$res['business_name'] = $row->business_name;
			array_push($data,$res);
        }
        return $data;
	}
	public function get_business(){
		$sql = "SELECT tu.business_name,ifnull(tn.temp_num,0)as temp_num
		FROM `tbl_user` as tu
			LEFT JOIN (
				select count(id) as temp_num,bus_name 
				FROM tbl_temp 
				where em_status = 0
				GROUP BY bus_name) 
			as tn on tu.business_name = tn.bus_name
			where tu.bus_active = 1
		GROUP BY tu.business_name";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] =$i;
			$res['temp_num'] = $row->temp_num;
			$res['business_name'] = $row->business_name;
			array_push($data,$res);
        }
        return $data;
	}
	// Emergency
	public function get_business_e(){
		$sql = "SELECT tu.business_name,ifnull(tn.temp_num,0)as temp_num
		FROM `tbl_user` as tu
			LEFT JOIN (
				select count(id) as temp_num,bus_name 
				FROM tbl_temp 
				where em_status = 1
				GROUP BY bus_name) 
			as tn on tu.business_name = tn.bus_name
			where tu.em_status = 1
		GROUP BY tu.business_name";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] =$i;
			$res['temp_num'] = $row->temp_num;
			$res['business_name'] = $row->business_name;
			array_push($data,$res);
        }
        return $data;
	}
	// End of temp
	public function add_ad($cre_date,$name,$ad_con,$temp_name,$imme,$s_date,$e_date,$s_time,$e_time,$days,$over_url,$end_date_sta,$result_img,$temp_label){
		$user_id = $this->session->userdata('user_id');
		$dis_date = $today = date("F j, Y, g:i a");
		if($imme == "true"){
			if($temp_label == "Primary Ad"){
				$sql = "INSERT INTO tbl_adver (user_id,ad_name,descr,cr_date,temp_id,dis_date,dis_type,s_date,e_date,s_time,e_time,weeks,result_img,mark) 
							values('".$user_id."','".$name."','".$ad_con."','".$cre_date."','".$temp_name."','".$dis_date."','imme','','','','','','".$result_img."',1)";
			}
			else{
				$sql = "INSERT INTO tbl_adver (user_id,ad_name,descr,cr_date,temp_id,dis_date,dis_type,s_date,e_date,s_time,e_time,weeks,result_img) 
							values('".$user_id."','".$name."','".$ad_con."','".$cre_date."','".$temp_name."','".$dis_date."','imme','','','','','','".$result_img."')";
			}
		}
		else{
			if($end_date_sta == "true"){
				if($temp_label == "Primary Ad"){
					$sql = "INSERT INTO tbl_adver (user_id,ad_name,descr,cr_date,temp_id,dis_date,dis_type,s_date,e_date,s_time,e_time,weeks,result_img,mark) 
								values('".$user_id."','".$name."','".$ad_con."','".$cre_date."','".$temp_name."','".$dis_date."','sch','".$s_date."','".$e_date."','".$s_time."','".$e_time."','".$days."','".$result_img."',1)";
				}
				else{
					$sql = "INSERT INTO tbl_adver (user_id,ad_name,descr,cr_date,temp_id,dis_date,dis_type,s_date,e_date,s_time,e_time,weeks,result_img) 
								values('".$user_id."','".$name."','".$ad_con."','".$cre_date."','".$temp_name."','".$dis_date."','sch','".$s_date."','".$e_date."','".$s_time."','".$e_time."','".$days."','".$result_img."')";
				}
			}
			else{
				if($temp_label == "Primary Ad"){
					$sql = "INSERT INTO tbl_adver (user_id,ad_name,descr,cr_date,temp_id,dis_date,dis_type,s_date,e_date,s_time,e_time,weeks,result_img,mark) 
								values('".$user_id."','".$name."','".$ad_con."','".$cre_date."','".$temp_name."','".$dis_date."','sch','".$s_date."','','".$s_time."','','".$days."','".$result_img."',1)";
				}
				else{
					$sql = "INSERT INTO tbl_adver (user_id,ad_name,descr,cr_date,temp_id,dis_date,dis_type,s_date,e_date,s_time,e_time,weeks,result_img) 
								values('".$user_id."','".$name."','".$ad_con."','".$cre_date."','".$temp_name."','".$dis_date."','sch','".$s_date."','','".$s_time."','','".$days."','".$result_img."')";
				}
			}
		}
		$query = $this->db->query($sql);
		$data = array();
		$res = [];
		$res['cre_date'] = $cre_date;
		$res['name']  = $name;
		$res['ad_con'] = $ad_con;
		array_push($data,$res);
		     	// echo "Upload complete!" .$cre_date.$name; 
		return $data; 
	}
	// Emergency
	public function add_ad_em($cre_date,$name,$ad_con,$temp_name,$imme,$s_date,$e_date,$s_time,$e_time,$days,$over_url,$end_date_sta,$result_img,$locat){
		$user_id = $this->session->userdata('user_id');
		$dis_date = date("F j, Y, g:i a");
		if($imme == "true"){
			$end_ime = date('Y-m-d H:i',strtotime('+4 hour',strtotime($dis_date)));
			$end_date_ime = date_parse($end_ime)['month'].'/'.date_parse($end_ime)['day'].'/'.date_parse($end_ime)['year'];
			$end_hour = date_parse($end_ime)['hour'];
			$date_ime = date("m/j/Y");
			$start_ime = date("H");
			if($start_ime <= 12){
				$start_ime = $start_ime." AM";
			}
			if($start_ime >12){
				$start_ime = $start_ime - 12;
				$start_ime = $start_ime." PM";
			}
			if($end_hour <= 12){
				$end_ime = $end_hour." AM";
			}
			if($end_hour >12){
				$end_hour = $end_hour - 12;
				$end_ime = $end_hour." PM";
			}
			$sql = "INSERT INTO tbl_adver (user_id,ad_name,descr,cr_date,temp_id,dis_date,dis_type,s_date,e_date,s_time,e_time,weeks,result_img,em_status,em_location) 
						values('".$user_id."','".$name."','".$ad_con."','".$cre_date."','".$temp_name."','".$dis_date."','imme','".$date_ime."','".$end_date_ime."','".$start_ime."','".$end_ime."','','".$result_img."',1,'".$locat."')";
		}
		else{
			$cs_time ="";
			if(strchr($s_time,'AM') == "AM"){
				if(strcmp($s_time,'1 AM')==0){
					$cs_time = "01";
				}
				if(strcmp($s_time,'2 AM')==0){
					$cs_time = "02";
				}
				if(strcmp($s_time,'3 AM')==0){
					$cs_time = "03";
				}
				if(strcmp($s_time,'4 AM')==0){
					$cs_time = "04";
				}
				if(strcmp($s_time,'5 AM')==0){
					$cs_time = "05";
				}
				if(strcmp($s_time,'6 AM')==0){
					$cs_time = "06";
				}
				if(strcmp($s_time,'7 AM')==0){
					$cs_time = "07";
				}
				if(strcmp($s_time,'8 AM')==0){
					$cs_time = "08";
				}
				if(strcmp($s_time,'9 AM')==0){
					$cs_time = "09";
				}
				if(strcmp($s_time,'10 AM')==0){
					$cs_time = "1O";
				}
				if(strcmp($s_time,'11 AM')==0){
					$cs_time = "11";
				}
				if(strcmp($s_time,'12 AM')==0){
					$cs_time = "00";
				}
			}
			if(strchr($s_time,'AM') == ""){
				if(strcmp($s_time,'1 PM')==0){
					$cs_time = "13";
				}
				if(strcmp($s_time,'2 PM')==0){
					$cs_time = "14";
				}
				if(strcmp($s_time,'3 PM')==0){
					$cs_time = "15";
				}
				if(strcmp($s_time,'4 PM')==0){
					$cs_time = "16";
				}
				if(strcmp($s_time,'5 PM')==0){
					$cs_time = "17";
				}
				if(strcmp($s_time,'6 PM')==0){
					$cs_time = "18";
				}
				if(strcmp($s_time,'7 PM')==0){
					$cs_time = "19";
				}
				if(strcmp($s_time,'8 PM')==0){
					$cs_time = "20";
				}
				if(strcmp($s_time,'9 PM')==0){
					$cs_time = "21";
				}
				if(strcmp($s_time,'10 PM')==0){
					$cs_time = "22";
				}
				if(strcmp($s_time,'11 PM')==0){
					$cs_time = "23";
				}
				if(strcmp($s_time,'12 PM')==0){
					$cs_time = "12";
				}
			}
			$s_ime = date_time_set(date_create($s_date),$cs_time,00);
			// echo date_format($s_ime,"Y-m-d H:i:s") . "<br>";
			$s_ime = date_format($s_ime,"Y-m-d H:i");
			$end_ime = date('Y-m-d H:i',strtotime($e_date.'days +4 hour',strtotime($s_ime)));
			$end_date_ime = date_parse($end_ime)['month'].'/'.date_parse($end_ime)['day'].'/'.date_parse($end_ime)['year'];
			$end_hour = date_parse($end_ime)['hour'];
			if($end_hour <= 12){
				$end_ime = $end_hour." AM";
			}
			if($end_hour >12){
				$end_hour = $end_hour - 12;
				$end_ime = $end_hour." PM";
			}
			if($end_date_sta == "true"){
				$sql = "INSERT INTO tbl_adver (user_id,ad_name,descr,cr_date,temp_id,dis_date,dis_type,s_date,e_date,s_time,e_time,weeks,result_img,em_status,em_location) 
							values('".$user_id."','".$name."','".$ad_con."','".$cre_date."','".$temp_name."','".$dis_date."','sch','".$s_date."','".$end_date_ime."','".$s_time."','".$end_ime."','".$days."','".$result_img."',1,'".$locat."')";
			}
			else{
				$sql = "INSERT INTO tbl_adver (user_id,ad_name,descr,cr_date,temp_id,dis_date,dis_type,s_date,e_date,s_time,e_time,weeks,result_img,em_status,em_location) 
							values('".$user_id."','".$name."','".$ad_con."','".$cre_date."','".$temp_name."','".$dis_date."','sch','".$s_date."','','".$s_time."','','".$days."','".$result_img."',1,'".$locat."')";
			}
		}
		$query = $this->db->query($sql);
		$data = array();
		$res = [];
		$res['cre_date'] = $cre_date;
		$res['name']  = $name;
		$res['ad_con'] = $ad_con;
		array_push($data,$res);
		     	// echo "Upload complete!" .$cre_date.$name; 
		return $data; 
	}
	public function get_add($mark_dis,$busi_name){
		$user_id = $this->session->userdata('user_id');
		$business_name = $this->session->userdata('business_name');
		if($this->session->userdata('level') == "Admin"){
			if($mark_dis == "false" || $mark_dis == null){
				// if($busi_name == ""){
				// 	$sql = "
				// 		SELECT ta.*,tu.name,tt.player_id,ta.weeks,
				// 		tt.temp_name,tt.tmp_wi,tt.tmp_he,tt.tmp_le,tt.tmp_to,
				// 		tt.fo_si,tt.fo_we,tt.fo_co,tt.fo_le,tt.fo_to,tt.bus_name,
				// 		tt.fo_ri,tt.fo_al,tt.bg_url,a.num
				// 	FROM
				// 		tbl_adver AS ta
				// 		LEFT JOIN tbl_user AS tu ON ta.user_id = tu.id
				// 		LEFT JOIN tbl_temp as tt on tt.id = ta.temp_id
				// 		JOIN (SELECT count(id) as num FROM tbl_adver WHERE e_date = '' and mark=1 ) as a
				// 		where ta.em_status =0
				// 	ORDER BY
				// 		ta.id DESC";
				// }
				if($busi_name != ""){
					$sql = "
						SELECT ta.*,tu.name,tt.player_id,ta.weeks,
						tt.temp_name,tt.tmp_wi,tt.tmp_he,tt.tmp_le,tt.tmp_to,
						tt.fo_si,tt.fo_we,tt.fo_co,tt.fo_le,tt.fo_to,tt.bus_name,
						tt.fo_ri,tt.fo_al,tt.bg_url,a.num
					FROM
						tbl_adver AS ta
						LEFT JOIN tbl_user AS tu ON ta.user_id = tu.id
						LEFT JOIN tbl_temp as tt on tt.id = ta.temp_id
						JOIN (SELECT count(id) as num FROM tbl_adver WHERE e_date ='' and mark=1 ) as a
					WHERE tt.bus_name = '".$busi_name."' AND ta.em_status =0
					ORDER BY
						ta.id DESC";
				}
			}
			else{
				// if($busi_name == ""){
				// 	$sql = "
				// 		SELECT ta.*,tu.name,tt.player_id,ta.weeks,
				// 		tt.temp_name,tt.tmp_wi,tt.tmp_he,tt.tmp_le,tt.tmp_to,tt.bus_name,
				// 		tt.fo_si,tt.fo_we,tt.fo_co,tt.fo_le,tt.fo_to,
				// 		tt.fo_ri,tt.fo_al,tt.bg_url,a.num
				// 	FROM
				// 		tbl_adver AS ta
				// 		LEFT JOIN tbl_user AS tu ON ta.user_id = tu.id
				// 		LEFT JOIN tbl_temp as tt on tt.id = ta.temp_id
				// 		JOIN (SELECT count(id) as num FROM tbl_adver WHERE e_date = '' and mark=1 ) as a
				// 	where mark = 1  AND ta.em_status =0
				// 	ORDER BY
				// 		ta.id DESC";
				// }
				if($busi_name != ""){
					$sql = "
						SELECT ta.*,tu.name,tt.player_id,ta.weeks,
						tt.temp_name,tt.tmp_wi,tt.tmp_he,tt.tmp_le,tt.tmp_to,tt.bus_name,
						tt.fo_si,tt.fo_we,tt.fo_co,tt.fo_le,tt.fo_to,
						tt.fo_ri,tt.fo_al,tt.bg_url,a.num
					FROM
						tbl_adver AS ta
						LEFT JOIN tbl_user AS tu ON ta.user_id = tu.id
						LEFT JOIN tbl_temp as tt on tt.id = ta.temp_id
						JOIN (SELECT count(id) as num FROM tbl_adver WHERE e_date = '' and mark=1 ) as a
					where mark = 1 AND tt.bus_name = '".$busi_name."' AND ta.em_status =0
					ORDER BY
						ta.id DESC";
				}
			}
		}
		else{
			if($mark_dis == "false" || $mark_dis == null){
				$sql = "
						SELECT ta.*,tu.business_name,tu.name,tt.player_id,ta.weeks,
						tt.temp_name,tt.tmp_wi,tt.tmp_he,tt.tmp_le,tt.tmp_to,
						tt.fo_si,tt.fo_we,tt.fo_co,tt.fo_le,tt.fo_to,
						tt.fo_ri,tt.fo_al,tt.bg_url,a.num
					FROM
						tbl_adver AS ta
						LEFT JOIN tbl_user AS tu ON ta.user_id = tu.id
						LEFT JOIN tbl_temp as tt on tt.id = ta.temp_id 
						JOIN (SELECT count(id) as num FROM tbl_adver WHERE e_date = '' and mark=1 ) as a
					WHERE
						business_name = '".$business_name."'  AND ta.em_status =0
					ORDER BY ta.id DESC";
			}
			else{
				$sql = "
						SELECT ta.*,tu.business_name,tu.name,tt.player_id,ta.weeks,
						tt.temp_name,tt.tmp_wi,tt.tmp_he,tt.tmp_le,tt.tmp_to,
						tt.fo_si,tt.fo_we,tt.fo_co,tt.fo_le,tt.fo_to,
						tt.fo_ri,tt.fo_al,tt.bg_url,a.num
					FROM
						tbl_adver AS ta
						LEFT JOIN tbl_user AS tu ON ta.user_id = tu.id
						LEFT JOIN tbl_temp as tt on tt.id = ta.temp_id 
						JOIN (SELECT count(id) as num FROM tbl_adver WHERE e_date = '' and mark=1 ) as a
					WHERE
						business_name = '".$business_name."' and mark = 1 AND ta.em_status =0
					ORDER BY ta.id DESC";
			}
		}
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] =$i;
			$res['tbl_id'] = $row->id;
			$res['ad_name'] = $row->ad_name;
			$res['name'] = $row->name;
			$res['descr'] = $row->descr;
			$res['dis_date'] = $row->dis_date;
			$res['mark'] = $row->mark;
			$res['cr_date'] = $row->cr_date;

			// get_temp_pro
			$res['tmp_wi'] = $row->tmp_wi;
			$res['tmp_he'] = $row->tmp_he;
			$res['tmp_le'] = $row->tmp_le;
			$res['tmp_to'] = $row->tmp_to;
			$res['fo_co'] = $row->fo_co;
			$res['fo_le'] = $row->fo_le;
			$res['fo_ri'] = $row->fo_ri;
			$res['fo_al'] = $row->fo_al;
			$res['fo_si'] = $row->fo_si;
			$res['fo_to'] = $row->fo_to;
			$res['fo_we'] = $row->fo_we;
			$res['bg_url'] = $row->bg_url;
			$res['temp_name'] = $row->temp_name;
			// Scheudle
			$res['s_date'] = $row->s_date;
			$res['e_date'] = $row->e_date;
			$res['s_time'] = $row->s_time;
			$res['e_time'] = $row->e_time;
			$res['player_id'] = $row->player_id;
			$res['result_img'] = $row->result_img;
			$res['weeks'] = $row->weeks;
			$res['num'] = $row->num;
			$today = date('Y,m,d');
			if($row->s_date == ""){
				$c_sdate=date_create($row->dis_date);
				$c_sdate = date_format($c_sdate,"Y,m,d");
				$res['c_sdate'] = $c_sdate;
				// $s_diff = date_diff(date_create($today), date_create($c_sdate));
				// $res['s_diff'] = $s_diff->format("%R%a");
			}
			if($row->s_date != ""){
				$c_sdate=date_create($row->s_date);
				$c_sdate = date_format($c_sdate,"Y,m,d");
				$res['c_sdate'] = $c_sdate;
				// $s_diff = date_diff(date_create($today), date_create($c_sdate));
				// $res['s_diff'] = $s_diff->format("%R%a");
			}
			if($row->e_date == ""){
				$c_edate=date_create($row->dis_date);
				$c_edate = date_format($c_edate,"Y,m,d");
				$res['c_edate'] = $c_edate;
				// $e_diff = date_diff(date_create($today), date_create($c_edate));
				// $res['e_diff'] = $e_diff->format("%R%a");
			}
			if($row->e_date != ""){
				$c_edate=date_create($row->e_date);
				$c_edate = date_format($c_edate,"Y,m,d");
				$res['c_edate'] = $c_edate;
				// $e_diff = date_diff(date_create($today), date_create($c_edate));
				// $res['e_diff'] = $e_diff->format("%R%a");
			}
			$ce_time = '';
			$cs_time = '';
			if(strchr($row->s_time,'AM') == "AM"){
				// $cs_time = str_replace("AM","00",$row->s_time);
				if(strcmp($row->s_time,'1 AM')==0){
					$cs_time = "01";
				}
				if(strcmp($row->s_time,'2 AM')==0){
					$cs_time = "02";
				}
				if(strcmp($row->s_time,'3 AM')==0){
					$cs_time = "03";
				}
				if(strcmp($row->s_time,'4 AM')==0){
					$cs_time = "04";
				}
				if(strcmp($row->s_time,'5 AM')==0){
					$cs_time = "05";
				}
				if(strcmp($row->s_time,'6 AM')==0){
					$cs_time = "06";
				}
				if(strcmp($row->s_time,'7 AM')==0){
					$cs_time = "07";
				}
				if(strcmp($row->s_time,'8 AM')==0){
					$cs_time = "08";
				}
				if(strcmp($row->s_time,'9 AM')==0){
					$cs_time = "09";
				}
				if(strcmp($row->s_time,'10 AM')==0){
					$cs_time = "1O";
				}
				if(strcmp($row->s_time,'11 AM')==0){
					$cs_time = "11";
				}
				if(strcmp($row->s_time,'12 AM')==0){
					$cs_time = "00";
				}
				$res['cs_time'] = $cs_time;
			}
			if(strchr($row->s_time,'AM') == ""){
				if(strcmp($row->s_time,'1 PM')==0){
					$cs_time = "13";
				}
				if(strcmp($row->s_time,'2 PM')==0){
					$cs_time = "14";
				}
				if(strcmp($row->s_time,'3 PM')==0){
					$cs_time = "15";
				}
				if(strcmp($row->s_time,'4 PM')==0){
					$cs_time = "16";
				}
				if(strcmp($row->s_time,'5 PM')==0){
					$cs_time = "17";
				}
				if(strcmp($row->s_time,'6 PM')==0){
					$cs_time = "18";
				}
				if(strcmp($row->s_time,'7 PM')==0){
					$cs_time = "19";
				}
				if(strcmp($row->s_time,'8 PM')==0){
					$cs_time = "20";
				}
				if(strcmp($row->s_time,'9 PM')==0){
					$cs_time = "21";
				}
				if(strcmp($row->s_time,'10 PM')==0){
					$cs_time = "22";
				}
				if(strcmp($row->s_time,'11 PM')==0){
					$cs_time = "23";
				}
				if(strcmp($row->s_time,'12 PM')==0){
					$cs_time = "12";
				}
				$res['cs_time'] = $cs_time;
			}
			if(strchr($row->e_time,'AM') == "AM"){
				if(strcmp($row->e_time,'1 AM')==0){
					$ce_time = "01";
				}
				if(strcmp($row->e_time,'2 AM')==0){
					$ce_time = "02";
				}
				if(strcmp($row->e_time,'3 AM')==0){
					$ce_time = "03";
				}
				if(strcmp($row->e_time,'4 AM')==0){
					$ce_time = "04";
				}
				if(strcmp($row->e_time,'5 AM')==0){
					$ce_time = "05";
				}
				if(strcmp($row->e_time,'6 AM')==0){
					$ce_time = "06";
				}
				if(strcmp($row->e_time,'7 AM')==0){
					$ce_time = "07";
				}
				if(strcmp($row->e_time,'8 AM')==0){
					$ce_time = "08";
				}
				if(strcmp($row->e_time,'9 AM')==0){
					$ce_time = "09";
				}
				if(strcmp($row->e_time,'10 AM')==0){
					$ce_time = "10";
				}
				if(strcmp($row->e_time,'11 AM')==0){
					$ce_time = "11";
				}
				if(strcmp($row->e_time,'12 AM')==0){
					$ce_time = "00";
				}
				$res['ce_time'] = $ce_time;
				// print_r($ce_time);
				// print_r($row->e_time);
			}
			if(strchr($row->e_time,'AM') == ""){
				if(strcmp($row->e_time,'1 PM')==0){
					$ce_time = "13";
				}
				if(strcmp($row->e_time,'2 PM')==0){
					$ce_time = "14";
				}
				if(strcmp($row->e_time,'3 PM')==0){
					$ce_time = "15";
				}
				if(strcmp($row->e_time,'4 PM')==0){
					$ce_time = "16";
				}
				if(strcmp($row->e_time,'5 PM')==0){
					$ce_time = "17";
				}
				if(strcmp($row->e_time,'6 PM')==0){
					$ce_time = "18";
				}
				if(strcmp($row->e_time,'7 PM')==0){
					$ce_time = "19";
				}
				if(strcmp($row->e_time,'8 PM')==0){
					$ce_time = "20";
				}
				if(strcmp($row->e_time,'9 PM')==0){
					$ce_time = "21";
				}
				if(strcmp($row->e_time,'10 PM')==0){
					$ce_time = "22";
				}
				if(strcmp($row->e_time,'11 PM')==0){
					$ce_time = "23";
				}
				if(strcmp($row->e_time,'12 PM')==0){
					$ce_time = "24";
				}
				$res['ce_time'] = $ce_time;
			}
			array_push($data,$res);
        }

        return $data;
	}
	// Emergency
	public function get_add_em($mark_dis,$busi_name){
		$user_id = $this->session->userdata('user_id');
		$business_name = $this->session->userdata('business_name');
		if($this->session->userdata('level') == "Admin"){
			if($mark_dis == "false" || $mark_dis == null){
				if($busi_name == ""){
					$sql = "
						SELECT ta.*,tu.name,tt.player_id,ta.weeks,
						tt.temp_name,tt.tmp_wi,tt.tmp_he,tt.tmp_le,tt.tmp_to,
						tt.fo_si,tt.fo_we,tt.fo_co,tt.fo_le,tt.fo_to,tt.bus_name,
						tt.fo_ri,tt.fo_al,tt.bg_url,a.num
					FROM
						tbl_adver AS ta
						LEFT JOIN tbl_user AS tu ON ta.user_id = tu.id
						LEFT JOIN tbl_temp as tt on tt.id = ta.temp_id
						JOIN (SELECT count(id) as num FROM tbl_adver WHERE e_date = '' and mark=1 ) as a
					WHERE ta.em_status = 1
					ORDER BY
						ta.id DESC";
				}
				else{
					$sql = "
						SELECT ta.*,tu.name,tt.player_id,ta.weeks,
						tt.temp_name,tt.tmp_wi,tt.tmp_he,tt.tmp_le,tt.tmp_to,
						tt.fo_si,tt.fo_we,tt.fo_co,tt.fo_le,tt.fo_to,tt.bus_name,
						tt.fo_ri,tt.fo_al,tt.bg_url,a.num
					FROM
						tbl_adver AS ta
						LEFT JOIN tbl_user AS tu ON ta.user_id = tu.id
						LEFT JOIN tbl_temp as tt on tt.id = ta.temp_id
						JOIN (SELECT count(id) as num FROM tbl_adver WHERE e_date ='' and mark=1 ) as a
					WHERE tt.bus_name = '".$busi_name."' and ta.em_status = 1
					ORDER BY
						ta.id DESC";
				}
			}
			else{
				if($busi_name == ""){
					$sql = "
						SELECT ta.*,tu.name,tt.player_id,ta.weeks,
						tt.temp_name,tt.tmp_wi,tt.tmp_he,tt.tmp_le,tt.tmp_to,tt.bus_name,
						tt.fo_si,tt.fo_we,tt.fo_co,tt.fo_le,tt.fo_to,
						tt.fo_ri,tt.fo_al,tt.bg_url,a.num
					FROM
						tbl_adver AS ta
						LEFT JOIN tbl_user AS tu ON ta.user_id = tu.id
						LEFT JOIN tbl_temp as tt on tt.id = ta.temp_id
						JOIN (SELECT count(id) as num FROM tbl_adver WHERE e_date = '' and mark=1 ) as a
					where mark = 1 And ta.em_status = 1
					ORDER BY
						ta.id DESC";
				}
				else{
					$sql = "
						SELECT ta.*,tu.name,tt.player_id,ta.weeks,
						tt.temp_name,tt.tmp_wi,tt.tmp_he,tt.tmp_le,tt.tmp_to,tt.bus_name,
						tt.fo_si,tt.fo_we,tt.fo_co,tt.fo_le,tt.fo_to,
						tt.fo_ri,tt.fo_al,tt.bg_url,a.num
					FROM
						tbl_adver AS ta
						LEFT JOIN tbl_user AS tu ON ta.user_id = tu.id
						LEFT JOIN tbl_temp as tt on tt.id = ta.temp_id
						JOIN (SELECT count(id) as num FROM tbl_adver WHERE e_date = '' and mark=1 ) as a
					where mark = 1 AND tt.bus_name = '".$busi_name."' And ta.em_status = 1
					ORDER BY
						ta.id DESC";
				}
			}
		}
		else{
			if($mark_dis == "false" || $mark_dis == null){
				$sql = "
						SELECT ta.*,tu.business_name,tu.name,tt.player_id,ta.weeks,
						tt.temp_name,tt.tmp_wi,tt.tmp_he,tt.tmp_le,tt.tmp_to,
						tt.fo_si,tt.fo_we,tt.fo_co,tt.fo_le,tt.fo_to,
						tt.fo_ri,tt.fo_al,tt.bg_url,a.num
					FROM
						tbl_adver AS ta
						LEFT JOIN tbl_user AS tu ON ta.user_id = tu.id
						LEFT JOIN tbl_temp as tt on tt.id = ta.temp_id 
						JOIN (SELECT count(id) as num FROM tbl_adver WHERE e_date = '' and mark=1 ) as a
					WHERE
						ta.em_status = 1
					ORDER BY ta.id DESC";
					// WHERE
					// 	business_name = '".$business_name."'  And ta.em_status = 1
			}
			else{
				$sql = "
						SELECT ta.*,tu.business_name,tu.name,tt.player_id,ta.weeks,
						tt.temp_name,tt.tmp_wi,tt.tmp_he,tt.tmp_le,tt.tmp_to,
						tt.fo_si,tt.fo_we,tt.fo_co,tt.fo_le,tt.fo_to,
						tt.fo_ri,tt.fo_al,tt.bg_url,a.num
					FROM
						tbl_adver AS ta
						LEFT JOIN tbl_user AS tu ON ta.user_id = tu.id
						LEFT JOIN tbl_temp as tt on tt.id = ta.temp_id 
						JOIN (SELECT count(id) as num FROM tbl_adver WHERE e_date = '' and mark=1 ) as a
					WHERE
						 mark = 1 And ta.em_status = 1
					ORDER BY ta.id DESC";
					// business_name = '".$business_name."' and mark = 1 And ta.em_status = 1
			}
		}
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] =$i;
			$res['tbl_id'] = $row->id;
			$res['ad_name'] = $row->ad_name;
			$res['name'] = $row->name;
			$res['descr'] = $row->descr;
			$res['dis_date'] = $row->dis_date;
			$res['mark'] = $row->mark;
			$res['cr_date'] = $row->cr_date;

			// get_temp_pro
			$res['tmp_wi'] = $row->tmp_wi;
			$res['tmp_he'] = $row->tmp_he;
			$res['tmp_le'] = $row->tmp_le;
			$res['tmp_to'] = $row->tmp_to;
			$res['fo_co'] = $row->fo_co;
			$res['fo_le'] = $row->fo_le;
			$res['fo_ri'] = $row->fo_ri;
			$res['fo_al'] = $row->fo_al;
			$res['fo_si'] = $row->fo_si;
			$res['fo_to'] = $row->fo_to;
			$res['fo_we'] = $row->fo_we;
			$res['bg_url'] = $row->bg_url;
			$res['temp_name'] = $row->temp_name;
			// Scheudle
			$res['s_date'] = $row->s_date;
			$res['e_date'] = $row->e_date;
			$res['s_time'] = $row->s_time;
			$res['e_time'] = $row->e_time;
			$res['player_id'] = $row->player_id;
			$res['result_img'] = $row->result_img;
			$res['weeks'] = $row->weeks;
			$res['dis_type'] = $row->dis_type;
			$res['num'] = $row->num;
			$res['em_location'] = $row->em_location;
			$today = date('Y,m,d');
			if($row->s_date == ""){
				$c_sdate=date_create($row->dis_date);
				$c_sdate = date_format($c_sdate,"Y,m,d");
				$res['c_sdate'] = $c_sdate;
				// $s_diff = date_diff(date_create($today), date_create($c_sdate));
				// $res['s_diff'] = $s_diff->format("%R%a");
			}
			if($row->s_date != ""){
				$c_sdate=date_create($row->s_date);
				$c_sdate = date_format($c_sdate,"Y,m,d");
				$res['c_sdate'] = $c_sdate;
				// $s_diff = date_diff(date_create($today), date_create($c_sdate));
				// $res['s_diff'] = $s_diff->format("%R%a");
			}
			if($row->e_date == ""){
				$c_edate=date_create($row->dis_date);
				$c_edate = date_format($c_edate,"Y,m,d");
				$res['c_edate'] = $c_edate;
				// $e_diff = date_diff(date_create($today), date_create($c_edate));
				// $res['e_diff'] = $e_diff->format("%R%a");
			}
			if($row->e_date != ""){
				$c_edate=date_create($row->e_date);
				$c_edate = date_format($c_edate,"Y,m,d");
				$res['c_edate'] = $c_edate;
				// $e_diff = date_diff(date_create($today), date_create($c_edate));
				// $res['e_diff'] = $e_diff->format("%R%a");
			}
			$ce_time = '';
			$cs_time = '';
			if(strchr($row->s_time,'AM') == "AM"){
				// $cs_time = str_replace("AM","00",$row->s_time);
				if(strcmp($row->s_time,'1 AM')==0){
					$cs_time = "01";
				}
				if(strcmp($row->s_time,'2 AM')==0){
					$cs_time = "02";
				}
				if(strcmp($row->s_time,'3 AM')==0){
					$cs_time = "03";
				}
				if(strcmp($row->s_time,'4 AM')==0){
					$cs_time = "04";
				}
				if(strcmp($row->s_time,'5 AM')==0){
					$cs_time = "05";
				}
				if(strcmp($row->s_time,'6 AM')==0){
					$cs_time = "06";
				}
				if(strcmp($row->s_time,'7 AM')==0){
					$cs_time = "07";
				}
				if(strcmp($row->s_time,'8 AM')==0){
					$cs_time = "08";
				}
				if(strcmp($row->s_time,'9 AM')==0){
					$cs_time = "09";
				}
				if(strcmp($row->s_time,'10 AM')==0){
					$cs_time = "1O";
				}
				if(strcmp($row->s_time,'11 AM')==0){
					$cs_time = "11";
				}
				if(strcmp($row->s_time,'12 AM')==0){
					$cs_time = "00";
				}
				$res['cs_time'] = $cs_time;
			}
			if(strchr($row->s_time,'AM') == ""){
				if(strcmp($row->s_time,'1 PM')==0){
					$cs_time = "13";
				}
				if(strcmp($row->s_time,'2 PM')==0){
					$cs_time = "14";
				}
				if(strcmp($row->s_time,'3 PM')==0){
					$cs_time = "15";
				}
				if(strcmp($row->s_time,'4 PM')==0){
					$cs_time = "16";
				}
				if(strcmp($row->s_time,'5 PM')==0){
					$cs_time = "17";
				}
				if(strcmp($row->s_time,'6 PM')==0){
					$cs_time = "18";
				}
				if(strcmp($row->s_time,'7 PM')==0){
					$cs_time = "19";
				}
				if(strcmp($row->s_time,'8 PM')==0){
					$cs_time = "20";
				}
				if(strcmp($row->s_time,'9 PM')==0){
					$cs_time = "21";
				}
				if(strcmp($row->s_time,'10 PM')==0){
					$cs_time = "22";
				}
				if(strcmp($row->s_time,'11 PM')==0){
					$cs_time = "23";
				}
				if(strcmp($row->s_time,'12 PM')==0){
					$cs_time = "12";
				}
				$res['cs_time'] = $cs_time;
			}
			if(strchr($row->e_time,'AM') == "AM"){
				if(strcmp($row->e_time,'1 AM')==0){
					$ce_time = "01";
				}
				if(strcmp($row->e_time,'2 AM')==0){
					$ce_time = "02";
				}
				if(strcmp($row->e_time,'3 AM')==0){
					$ce_time = "03";
				}
				if(strcmp($row->e_time,'4 AM')==0){
					$ce_time = "04";
				}
				if(strcmp($row->e_time,'5 AM')==0){
					$ce_time = "05";
				}
				if(strcmp($row->e_time,'6 AM')==0){
					$ce_time = "06";
				}
				if(strcmp($row->e_time,'7 AM')==0){
					$ce_time = "07";
				}
				if(strcmp($row->e_time,'8 AM')==0){
					$ce_time = "08";
				}
				if(strcmp($row->e_time,'9 AM')==0){
					$ce_time = "09";
				}
				if(strcmp($row->e_time,'10 AM')==0){
					$ce_time = "10";
				}
				if(strcmp($row->e_time,'11 AM')==0){
					$ce_time = "11";
				}
				if(strcmp($row->e_time,'12 AM')==0){
					$ce_time = "00";
				}
				$res['ce_time'] = $ce_time;
				// print_r($ce_time);
				// print_r($row->e_time);
			}
			if(strchr($row->e_time,'AM') == ""){
				if(strcmp($row->e_time,'1 PM')==0){
					$ce_time = "13";
				}
				if(strcmp($row->e_time,'2 PM')==0){
					$ce_time = "14";
				}
				if(strcmp($row->e_time,'3 PM')==0){
					$ce_time = "15";
				}
				if(strcmp($row->e_time,'4 PM')==0){
					$ce_time = "16";
				}
				if(strcmp($row->e_time,'5 PM')==0){
					$ce_time = "17";
				}
				if(strcmp($row->e_time,'6 PM')==0){
					$ce_time = "18";
				}
				if(strcmp($row->e_time,'7 PM')==0){
					$ce_time = "19";
				}
				if(strcmp($row->e_time,'8 PM')==0){
					$ce_time = "20";
				}
				if(strcmp($row->e_time,'9 PM')==0){
					$ce_time = "21";
				}
				if(strcmp($row->e_time,'10 PM')==0){
					$ce_time = "22";
				}
				if(strcmp($row->e_time,'11 PM')==0){
					$ce_time = "23";
				}
				if(strcmp($row->e_time,'12 PM')==0){
					$ce_time = "24";
				}
				$res['ce_time'] = $ce_time;
			}
			array_push($data,$res);
        }

        return $data;
	}
	public function update_mark($tbl_id,$mark){
		$sql = "UPDATE tbl_adver SET mark = '".$mark."' WHERE id='".$tbl_id."'";
		$query = $this->db->query($sql);
		return "success";
	}
	public function delete_mark($tbl_id){
		$sql = "DELETE FROM tbl_adver where id=$tbl_id";
		$query = $this->db->query($sql);
		return "success";
	}
	// End of Update ad page
	// Suggestion
	public function get_sugg($user_id){
		$sql = "SELECT tg.* ,tu.business_name
		FROM
			`tbl_suggest` AS tg
			LEFT JOIN tbl_user AS tu on tg.user_id = tu.id
			ORDER BY business_name,sug_date";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] = $i;
			$res['tbl_id'] = $row->id;
			$res['suggest'] = $row->suggest;
			$res['sug_date'] = $row->sug_date;
			$res['business_name'] = $row->business_name;
			$res['check_sta'] = $row->check_sta;
			array_push($data,$res);
        }
        return $data;
	}
	// End of Suggestion
	// Contact 
	public function send_contact($user_name,$email,$subject,$message){
		$today = date("F j, Y, g:i a");
		$sql = "INSERT INTO tbl_contact (user_name,email,subject,message,cr_date) values('".$user_name."','".$email."','".$subject."','".$message."','".$today."')";
		$query = $this->db->query($sql);
		return "success";
	}
	// End of contact
	// This is the content page
	// Slide manager
	public function get_slide(){
		$sql = "SELECT * FROM tbl_con_slide";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] = $i;
			$res['tbl_id'] = $row->id;
			$res['slide_name'] = $row->slide_name;
			$res['sli_title'] = $row->sli_title;
			$res['cre_date'] = $row->cre_date;
			$res['sli_text'] = $row->sli_text;
			array_push($data,$res);
        }
        return $data;

	}
	public function update_slide($cre_date,$name,$sli_text,$sli_title,$tbl_id,$slide_update,$sup_flag){
		if($slide_update == "true"){
			if($sup_flag == "false"){
				$sql = "UPDATE tbl_con_slide 
						SET sli_title ='".$sli_title."',sli_text ='".$sli_text."'
						where id=$tbl_id";
			}
			else{
				$sql = "UPDATE tbl_con_slide 
						SET slide_name='".$name."',sli_title ='".$sli_title."',sli_text ='".$sli_text."'  
						where id=$tbl_id";
			}
			$query = $this->db->query($sql);
		}
		else{
			$sql = "INSERT INTO tbl_con_slide (slide_name,sli_text,sli_title,cre_date) 
						values('".$name."','".$sli_text."','" .$sli_title."','".$cre_date."')";
			
			$query = $this->db->query($sql);
		}
		return "Success";
	}
	public function delete_slide($tbl_id){
		$sql = "DELETE FROM tbl_con_slide where id=$tbl_id";
		$query = $this->db->query($sql);
		return "success";
	}
	// end of slide manager
	// About page
	public function get_about(){
		$sql = "SELECT * FROM tbl_about";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] = $i;
			$res['tbl_id'] = $row->id;
			$res['abo_img'] = $row->abo_img;
			$res['title'] = $row->title;
			$res['text'] = $row->text;
			array_push($data,$res);
        }
        return $data;
	}
	public function update_about($name,$abo_text,$abo_title,$tbl_id){
		$sql = "UPDATE tbl_about 
					SET abo_img='".$name."',title ='".$abo_title."',text ='".$abo_text."'  
					where id=$tbl_id";
		$query = $this->db->query($sql);
		return "success";
	}
	// End of about
	// Team 
	public function get_team(){
		$sql = "SELECT * FROM tbl_team";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] = $i;
			$res['tbl_id'] = $row->id;
			$res['img_url'] = $row->img_url;
			$res['cre_date'] = $row->cre_date;
			$res['t_name'] = $row->t_name;
			$res['t_text'] = $row->t_text;
			array_push($data,$res);
        }
        return $data;
	}
	public function update_team($name,$abo_text,$abo_title,$tbl_id){
		$sql = "UPDATE tbl_team 
					SET img_url='".$name."',t_name ='".$abo_title."',t_text ='".$abo_text."'  
					where id=$tbl_id";
		$query = $this->db->query($sql);
		return "success";
	}
	// End of team
	// Service
	public function get_serive(){
		$sql = "SELECT * FROM tbl_service";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] = $i;
			$res['tbl_id'] = $row->id;
			$res['s_title'] = $row->s_title;
			$res['s_text'] = $row->s_text;
			array_push($data,$res);
        }
        return $data;
	}
	public function update_service($s_title,$s_text,$tbl_id){
		$sql = "UPDATE tbl_service 
					SET s_title='".$s_title."',s_text ='".$s_text."' 
					where id=$tbl_id";
		$query = $this->db->query($sql);
		return "success";
	}
	// ENd of service
	// Service
	public function get_fact(){
		$sql = "SELECT * FROM tbl_fact";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] = $i;
			$res['tbl_id'] = $row->id;
			$res['f_title'] = $row->f_title;
			$res['f_text'] = $row->f_text;
			array_push($data,$res);
        }
        return $data;
	}
	public function update_fact($f_title,$f_text,$tbl_id){
		$sql = "UPDATE tbl_fact 
					SET f_title='".$f_title."',f_text ='".$f_text."' 
					where id=$tbl_id";
		$query = $this->db->query($sql);
		return "success";
	}
	// ENd of service
	// Conact US
	public function get_con(){
		$sql = "SELECT * FROM tbl_con";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] = $i;
			$res['tbl_id'] = $row->id;
			$res['c_title'] = $row->c_title;
			$res['c_text'] = $row->c_text;
			array_push($data,$res);
        }
        return $data;
	}
	public function update_con($c_title,$c_text,$tbl_id){
		$sql = "UPDATE tbl_con 
					SET c_title='".$c_title."',c_text ='".$c_text."' 
					where id=$tbl_id";
		$query = $this->db->query($sql);
		return "success";
	}
	public function create_xml(){
		$user_id = $this->session->userdata('user_id');
		$sql = "SELECT ta.*,tt.player_id,tt.advertise_id,tt.contract_id,tt.bg_url,tt.tmp_wi,tt.tmp_he,tt.tmp_to,tt.tmp_le,tt.fo_to,tt.fo_le,tt.fo_co
				FROM tbl_adver as ta
					Left JOIN tbl_temp as tt on ta.temp_id = tt.id
				Where ta.user_id='".$user_id."' AND ta.mark = 1";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		// XML

		$doc = new DOMDocument(); 
		$doc->formatOutput = true;
		$doc->encoding = "utf-8";

		$r = $doc->createElement( "ien" ); 
		$doc->appendChild( $r );
		// End of XML
		foreach ($query->result() as $row){
			// $co_f = hexdec(substr($row->fo_co,1,2));
			// $co_s = hexdec(substr($row->fo_co,3,2));
			// $co_t = hexdec(substr($row->fo_co,5,2));
			// die(print_r($co_f.$co_s.$co_t));
			$res = [];
			$i++;
			$res['id'] = $i;
			$res['tbl_id'] = $row->id;
			$res['player_id'] = $row->player_id;
			$res['advertise_id'] = $row->advertise_id;
			$res['contract_id'] = $row->contract_id;
			$res['s_date'] = $row->s_date;
			$res['s_time'] = $row->s_time;
			$res['e_date'] = $row->e_date;
			$res['e_time'] = $row->e_time;
			$s_time = "";
			$e_time = "";
			if(strchr($row->s_time,'AM') == "AM"){
				// $s_time = str_replace("AM","00",$row->s_time);
				if(strcmp($row->s_time,'1 AM')==0){
					$s_time = "01OO";
				}
				if(strcmp($row->s_time,'2 AM')==0){
					$s_time = "02OO";
				}
				if(strcmp($row->s_time,'3 AM')==0){
					$s_time = "03OO";
				}
				if(strcmp($row->s_time,'4 AM')==0){
					$s_time = "04OO";
				}
				if(strcmp($row->s_time,'5 AM')==0){
					$s_time = "05OO";
				}
				if(strcmp($row->s_time,'6 AM')==0){
					$s_time = "06OO";
				}
				if(strcmp($row->s_time,'7 AM')==0){
					$s_time = "07OO";
				}
				if(strcmp($row->s_time,'8 AM')==0){
					$s_time = "08OO";
				}
				if(strcmp($row->s_time,'9 AM')==0){
					$s_time = "09OO";
				}
				if(strcmp($row->s_time,'10 AM')==0){
					$s_time = "10OO";
				}
				if(strcmp($row->s_time,'11 AM')==0){
					$s_time = "11OO";
				}
				if(strcmp($row->s_time,'12 AM')==0){
					$s_time = "0000";
				}
			}
			if(strchr($row->s_time,'AM') == ""){
				if(strcmp($row->s_time,'1 PM')==0){
					$s_time = "13OO";
				}
				if(strcmp($row->s_time,'2 PM')==0){
					$s_time = "14OO";
				}
				if(strcmp($row->s_time,'3 PM')==0){
					$s_time = "15OO";
				}
				if(strcmp($row->s_time,'4 PM')==0){
					$s_time = "16OO";
				}
				if(strcmp($row->s_time,'5 PM')==0){
					$s_time = "17OO";
				}
				if(strcmp($row->s_time,'6 PM')==0){
					$s_time = "18OO";
				}
				if(strcmp($row->s_time,'7 PM')==0){
					$s_time = "19OO";
				}
				if(strcmp($row->s_time,'8 PM')==0){
					$s_time = "20OO";
				}
				if(strcmp($row->s_time,'9 PM')==0){
					$s_time = "21OO";
				}
				if(strcmp($row->s_time,'10 PM')==0){
					$s_time = "22OO";
				}
				if(strcmp($row->s_time,'11 PM')==0){
					$s_time = "23OO";
				}
				if(strcmp($row->s_time,'12 PM')==0){
					$s_time = "1200";
				}
			}
			if(strchr($row->e_time,'AM') == "AM"){
				// $e_time = str_replace("AM","00",$row->e_time);
				if(strcmp($row->e_time,'1 AM')==0){
					$e_time = "01OO";
				}
				if(strcmp($row->e_time,'2 AM')==0){
					$e_time = "02OO";
				}
				if(strcmp($row->e_time,'3 AM')==0){
					$e_time = "03OO";
				}
				if(strcmp($row->e_time,'4 AM')==0){
					$e_time = "04OO";
				}
				if(strcmp($row->e_time,'5 AM')==0){
					$e_time = "05OO";
				}
				if(strcmp($row->e_time,'6 AM')==0){
					$e_time = "06OO";
				}
				if(strcmp($row->e_time,'7 AM')==0){
					$e_time = "07OO";
				}
				if(strcmp($row->e_time,'8 AM')==0){
					$e_time = "08OO";
				}
				if(strcmp($row->e_time,'9 AM')==0){
					$e_time = "09OO";
				}
				if(strcmp($row->e_time,'10 AM')==0){
					$e_time = "10OO";
				}
				if(strcmp($row->e_time,'11 AM')==0){
					$e_time = "11OO";
				}
				if(strcmp($row->e_time,'12 AM')==0){
					$e_time = "0000";
				}
			}
			if(strchr($row->e_time,'AM') == ""){
				if(strcmp($row->e_time,'1 PM')==0){
					$e_time = "13OO";
				}
				if(strcmp($row->e_time,'2 PM')==0){
					$e_time = "14OO";
				}
				if(strcmp($row->e_time,'3 PM')==0){
					$e_time = "15OO";
				}
				if(strcmp($row->e_time,'4 PM')==0){
					$e_time = "16OO";
				}
				if(strcmp($row->e_time,'5 PM')==0){
					$e_time = "17OO";
				}
				if(strcmp($row->e_time,'6 PM')==0){
					$e_time = "18OO";
				}
				if(strcmp($row->e_time,'7 PM')==0){
					$e_time = "19OO";
				}
				if(strcmp($row->e_time,'8 PM')==0){
					$e_time = "20OO";
				}
				if(strcmp($row->e_time,'9 PM')==0){
					$e_time = "21OO";
				}
				if(strcmp($row->e_time,'10 PM')==0){
					$e_time = "22OO";
				}
				if(strcmp($row->e_time,'11 PM')==0){
					$e_time = "23OO";
				}
				if(strcmp($row->e_time,'12 PM')==0){
					$e_time = "1200";
				}
			}
			// // merge Image
			// $over_url = 'assets/upload/'.$row->cr_date.$row->ad_name;
			// $image1 = $row->bg_url;//bg_image
			// $image2 = $over_url;
			// // Resize Image 
			// $source_properties = getimagesize($image2);
			// $image_type = $source_properties['mime']; 
			// $target_width =$source_properties[0];
			// $target_height =$source_properties[1];
			// if($image_type == "image/png"){
			// 	$image_resource_id = imagecreatefrompng($image2);
			// }
			// if($image_type== 'image/jpeg'){
			// 	$image_resource_id = imagecreatefromjpeg($image2);

			// }

			// $target_layer=imagecreatetruecolor($target_width,$target_height);
			// imagecopyresampled($target_layer,$image_resource_id,0,0,0,0,$row->tmp_wi,$row->tmp_he, $source_properties[0],$source_properties[1]);
			// imagepng($target_layer,$image2);
			// $source_properties = getimagesize($image2);
			// $image_type = $source_properties['mime']; 
			// if($image_type == "image/png"){
			// 	$im = imagecreatefrompng($image2);
			// }
			// if($image_type== 'image/jpeg'){
			// 	$im = imagecreatefromjpeg($image2);
			// }
			// // Crop Image

			// $size = min(imagesx($im), imagesy($im));
			// $im2 = imagecrop($im, ['x' => 0, 'y' => 0, 'width' => $row->tmp_wi, 'height' =>$row->tmp_he]);
			// if ($im2 !== FALSE) {
			//     imagepng($im2, $image2);
			//     imagedestroy($im2);
			// }
			// imagedestroy($im);
			// // End of Resize
			// // merge Image
			// $source_properties = getimagesize($image2);
			// $image_type = $source_properties['mime']; 
			// list($width,$height) = getimagesize($image2);
			// $image1 = imagecreatefromstring(file_get_contents($image1));
			// if($image_type == "image/png"){
			// 	$image2 = imagecreatefrompng($image2);
			// }
			// if($image_type== 'image/jpeg'){
			// 	$image2 = imagecreatefromjpeg($image2);
			// }
			// // $image2 = imagecreatefromstring(file_get_contents($image2));
			// // imagecopymerge($image1, $image2, $row->tmp_le, $row->tmp_to, 0, 0, $width, $height, 100);
			// imagecopymerge($image1, $image2, $row->tmp_le, $row->tmp_to, 0, 0, $row->tmp_wi, $row->tmp_he, 100);

			// header('Content-Type: image/png');
			// imagepng($image1,'assets/result_img/'.$row->id.$row->cr_date.$row->ad_name);
			// // End of merge image
			// // Merge Text
			// $im = imagecreatefrompng('assets/result_img/'.$row->id.$row->cr_date.$row->ad_name);
    

			// // White background and blue text
			// $bg = imagecolorallocate($im, 255, 255, 255);
			// $co_f = hexdec(substr($row->fo_co,1,2));
			// $co_s = hexdec(substr($row->fo_co,3,2));
			// $co_t = hexdec(substr($row->fo_co,5,2));
			// $textcolor = imagecolorallocate($im, $co_f,$co_s,$co_t);
			// // $textcolor = imagecolorallocate($im, 0xff,0xff,0xff);

			// // Write the string at the top left
			// imagestring($im, 3, $row->fo_le, $row->fo_to, $row->descr, $textcolor);

			// // Output the image
			// header('Content-type: image/png');

			// imagepng($im,'assets/result_img/'.$row->id.$row->cr_date.$row->ad_name);
			// imagedestroy($im);
	  //       // End of Merge Text
			// create XML File
			$b = $doc->createElement( "item" );
		        $player = $doc->createElement( "player" ); 
		        $player->appendChild( $doc->createTextNode( $row->player_id ) ); 
		    $b->appendChild( $player ); 


		    $advertiser = $doc->createElement( "business" ); 
		    $advertiser->appendChild( 
		    $doc->createTextNode( $row->advertise_id ) ); 
		    $b->appendChild( $advertiser );

		    $effect_from = $doc->createElement( "effect_from" ); 
		    $effect_from->appendChild( 
		    $doc->createTextNode( $row->s_date ) ); 
		    $b->appendChild( $effect_from );

		    $effect_to = $doc->createElement( "effect_to" ); 
		    $effect_to->appendChild( 
		    $doc->createTextNode( $row->e_date ) ); 
		    $b->appendChild( $effect_to );

		    $media_file = $doc->createElement( "media_file" ); 
		    $media_file->appendChild( 
		    // $doc->createTextNode( 'inex.net/assets/result_img/'.$row->cr_date.$row->ad_name ) ); 
		    $doc->createTextNode( 'inex.net/'.$row->result_img ) ); 
		    $b->appendChild( $media_file );

		    $start_time = $doc->createElement( "start_time" ); 
		    $start_time->appendChild( 
		    $doc->createTextNode( $s_time ) ); 
		    $b->appendChild( $start_time );

		    $end_time = $doc->createElement( "end_time" ); 
		    $end_time->appendChild( 
		    $doc->createTextNode( $e_time ) ); 
		    $b->appendChild( $end_time );

		    $contract_id = $doc->createElement( "campaign-contract_id" ); 
		    $contract_id->appendChild( 
		    $doc->createTextNode( $row->contract_id ) ); 
		    $b->appendChild( $contract_id );

		    $dow = $doc->createElement( "DOW" ); 
		    $dow->appendChild( 
		    $doc->createTextNode( $row->weeks ) ); 
		    $b->appendChild( $dow );

		    $r->appendChild( $b );
			// End of create XML File
			array_push($data,$res);
			// $result_path = 'assets/result_img/'.$row->id.$row->cr_date.$row->ad_name;
			// $sql = "UPDATE tbl_adver SET result_img='".$result_path."' WHERE id='".$row->id."'";
			// $query = $this->db->query($sql);
        }
        $business_name = $this->session->userdata('business_name');
        // echo $doc->saveXML();
		$doc->save("assets/result_xml/".$business_name.".xml");
        return 'success';
	}
	// Emergency
	public function create_xml_em(){
		$user_id = $this->session->userdata('user_id');
		$sql = "SELECT ta.*,tt.player_id,tt.advertise_id,tt.contract_id,tt.bg_url,tt.tmp_wi,tt.tmp_he,tt.tmp_to,tt.tmp_le,tt.fo_to,tt.fo_le,tt.fo_co
				FROM tbl_adver as ta
					Left JOIN tbl_temp as tt on ta.temp_id = tt.id
				Where ta.user_id='".$user_id."' AND ta.mark = 1 AND ta.em_status = 1";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		// XML

		$doc = new DOMDocument(); 
		$doc->formatOutput = true;
		$doc->encoding = "utf-8";

		$r = $doc->createElement( "ien" ); 
		$doc->appendChild( $r );
		// End of XML
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] = $i;
			$res['tbl_id'] = $row->id;
			$res['player_id'] = $row->player_id;
			$res['advertise_id'] = $row->advertise_id;
			$res['contract_id'] = $row->contract_id;
			$res['s_date'] = $row->s_date;
			$res['s_time'] = $row->s_time;
			$res['e_date'] = $row->e_date;
			$res['e_time'] = $row->e_time;
			$s_time = "";
			$e_time = "";
			if(strchr($row->s_time,'AM') == "AM"){
				// $s_time = str_replace("AM","00",$row->s_time);
				if(strcmp($row->s_time,'1 AM')==0){
					$s_time = "01OO";
				}
				if(strcmp($row->s_time,'2 AM')==0){
					$s_time = "02OO";
				}
				if(strcmp($row->s_time,'3 AM')==0){
					$s_time = "03OO";
				}
				if(strcmp($row->s_time,'4 AM')==0){
					$s_time = "04OO";
				}
				if(strcmp($row->s_time,'5 AM')==0){
					$s_time = "05OO";
				}
				if(strcmp($row->s_time,'6 AM')==0){
					$s_time = "06OO";
				}
				if(strcmp($row->s_time,'7 AM')==0){
					$s_time = "07OO";
				}
				if(strcmp($row->s_time,'8 AM')==0){
					$s_time = "08OO";
				}
				if(strcmp($row->s_time,'9 AM')==0){
					$s_time = "09OO";
				}
				if(strcmp($row->s_time,'10 AM')==0){
					$s_time = "10OO";
				}
				if(strcmp($row->s_time,'11 AM')==0){
					$s_time = "11OO";
				}
				if(strcmp($row->s_time,'12 AM')==0){
					$s_time = "0000";
				}
			}
			if(strchr($row->s_time,'AM') == ""){
				if(strcmp($row->s_time,'1 PM')==0){
					$s_time = "13OO";
				}
				if(strcmp($row->s_time,'2 PM')==0){
					$s_time = "14OO";
				}
				if(strcmp($row->s_time,'3 PM')==0){
					$s_time = "15OO";
				}
				if(strcmp($row->s_time,'4 PM')==0){
					$s_time = "16OO";
				}
				if(strcmp($row->s_time,'5 PM')==0){
					$s_time = "17OO";
				}
				if(strcmp($row->s_time,'6 PM')==0){
					$s_time = "18OO";
				}
				if(strcmp($row->s_time,'7 PM')==0){
					$s_time = "19OO";
				}
				if(strcmp($row->s_time,'8 PM')==0){
					$s_time = "20OO";
				}
				if(strcmp($row->s_time,'9 PM')==0){
					$s_time = "21OO";
				}
				if(strcmp($row->s_time,'10 PM')==0){
					$s_time = "22OO";
				}
				if(strcmp($row->s_time,'11 PM')==0){
					$s_time = "23OO";
				}
				if(strcmp($row->s_time,'12 PM')==0){
					$s_time = "1200";
				}
			}
			if(strchr($row->e_time,'AM') == "AM"){
				// $e_time = str_replace("AM","00",$row->e_time);
				if(strcmp($row->e_time,'1 AM')==0){
					$e_time = "01OO";
				}
				if(strcmp($row->e_time,'2 AM')==0){
					$e_time = "02OO";
				}
				if(strcmp($row->e_time,'3 AM')==0){
					$e_time = "03OO";
				}
				if(strcmp($row->e_time,'4 AM')==0){
					$e_time = "04OO";
				}
				if(strcmp($row->e_time,'5 AM')==0){
					$e_time = "05OO";
				}
				if(strcmp($row->e_time,'6 AM')==0){
					$e_time = "06OO";
				}
				if(strcmp($row->e_time,'7 AM')==0){
					$e_time = "07OO";
				}
				if(strcmp($row->e_time,'8 AM')==0){
					$e_time = "08OO";
				}
				if(strcmp($row->e_time,'9 AM')==0){
					$e_time = "09OO";
				}
				if(strcmp($row->e_time,'10 AM')==0){
					$e_time = "10OO";
				}
				if(strcmp($row->e_time,'11 AM')==0){
					$e_time = "11OO";
				}
				if(strcmp($row->e_time,'12 AM')==0){
					$e_time = "0000";
				}
			}
			if(strchr($row->e_time,'AM') == ""){
				if(strcmp($row->e_time,'1 PM')==0){
					$e_time = "13OO";
				}
				if(strcmp($row->e_time,'2 PM')==0){
					$e_time = "14OO";
				}
				if(strcmp($row->e_time,'3 PM')==0){
					$e_time = "15OO";
				}
				if(strcmp($row->e_time,'4 PM')==0){
					$e_time = "16OO";
				}
				if(strcmp($row->e_time,'5 PM')==0){
					$e_time = "17OO";
				}
				if(strcmp($row->e_time,'6 PM')==0){
					$e_time = "18OO";
				}
				if(strcmp($row->e_time,'7 PM')==0){
					$e_time = "19OO";
				}
				if(strcmp($row->e_time,'8 PM')==0){
					$e_time = "20OO";
				}
				if(strcmp($row->e_time,'9 PM')==0){
					$e_time = "21OO";
				}
				if(strcmp($row->e_time,'10 PM')==0){
					$e_time = "22OO";
				}
				if(strcmp($row->e_time,'11 PM')==0){
					$e_time = "23OO";
				}
				if(strcmp($row->e_time,'12 PM')==0){
					$e_time = "1200";
				}
			}
			// create XML File
			$b = $doc->createElement( "item" );
		        $player = $doc->createElement( "player" ); 
		        $player->appendChild( $doc->createTextNode( $row->em_location ) ); 
		    $b->appendChild( $player ); 


		    $advertiser = $doc->createElement( "business" ); 
		    $advertiser->appendChild( 
		    $doc->createTextNode( $row->advertise_id ) ); 
		    $b->appendChild( $advertiser );

		    $effect_from = $doc->createElement( "effect_from" ); 
		    $effect_from->appendChild( 
		    $doc->createTextNode( $row->s_date ) ); 
		    $b->appendChild( $effect_from );

		    $effect_to = $doc->createElement( "effect_to" ); 
		    $effect_to->appendChild( 
		    $doc->createTextNode( $row->e_date ) ); 
		    $b->appendChild( $effect_to );

		    $media_file = $doc->createElement( "media_file" ); 
		    $media_file->appendChild( 
		    // $doc->createTextNode( 'inex.net/assets/result_img/'.$row->cr_date.$row->ad_name ) ); 
		    $doc->createTextNode( 'inex.net/'.$row->result_img ) ); 
		    $b->appendChild( $media_file );

		    $start_time = $doc->createElement( "start_time" ); 
		    $start_time->appendChild( 
		    $doc->createTextNode( $s_time ) ); 
		    $b->appendChild( $start_time );

		    $end_time = $doc->createElement( "end_time" ); 
		    $end_time->appendChild( 
		    $doc->createTextNode( $e_time ) ); 
		    $b->appendChild( $end_time );

		    $contract_id = $doc->createElement( "campaign-contract_id" ); 
		    $contract_id->appendChild( 
		    $doc->createTextNode( $row->contract_id ) ); 
		    $b->appendChild( $contract_id );

		    $dow = $doc->createElement( "DOW" ); 
		    $dow->appendChild( 
		    $doc->createTextNode( $row->weeks ) ); 
		    $b->appendChild( $dow );

		    $r->appendChild( $b );
			// End of create XML File
			array_push($data,$res);
			// $result_path = 'assets/result_img/'.$row->id.$row->cr_date.$row->ad_name;
			// $sql = "UPDATE tbl_adver SET result_img='".$result_path."' WHERE id='".$row->id."'";
			// $query = $this->db->query($sql);
        }
        $business_name = $this->session->userdata('business_name');
        // echo $doc->saveXML();
		$doc->save("assets/result_xml/".$business_name."-EM.xml");
        return 'success';
	}
	public function get_preview(){
		$user_id = $this->session->userdata('user_id');
		$sql = "SELECT ta.*,tt.player_id,tt.advertise_id,tt.contract_id,tt.bg_url,tt.tmp_wi,tt.tmp_he,tt.tmp_to,tt.tmp_le,tt.fo_le,tt.fo_ri,tt.fo_to,tt.fo_co,tt.fo_al,tt.fo_we
				FROM tbl_adver as ta
					Left JOIN tbl_temp as tt on ta.temp_id = tt.id
				Where ta.user_id='".$user_id."' AND ta.mark = 1";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] = $i;
			$res['tbl_id'] = $row->id;
			$res['fo_le'] = $row->fo_le;
			$res['fo_ri'] = $row->fo_ri;
			$res['fo_to'] = $row->fo_to;
			$res['fo_co'] = $row->fo_co;
			$res['fo_al'] = $row->fo_al;
			$res['fo_we'] = $row->fo_we;
			$res['descr'] = $row->descr;
			$res['result_img'] = $row->result_img;
			array_push($data,$res);
		}
		return $data;
	}
	// ENd of Conact US
	// ENd of Content page
	public function active($tbl_id,$mark){
		$sql = "UPDATE tbl_suggest SET check_sta='".$mark."' WHERE id='".$tbl_id."'";
		$query = $this->db->query($sql);
		return 'success';
	}
	// update Schedule
	public function update_sch($tbl_id,$up_manual,$s_date,$e_date,$s_time,$e_time,$days,$end_date_sta1){
		if($up_manual == 'true'){
			if($end_date_sta1 == "false"){
				$sql = "UPDATE tbl_adver SET s_date = '".$s_date."',e_date = '',s_time = '".$s_time."',e_time = '',weeks = '".$days."'
							WHERE id='".$tbl_id."'";
			}
			else{
				$sql = "UPDATE tbl_adver SET s_date = '".$s_date."',e_date = '".$e_date."',s_time = '".$s_time."',e_time = '".$e_time."',weeks = '".$days."'
							WHERE id='".$tbl_id."'";
			}
		}
		else{
			$sql = "UPDATE tbl_adver SET s_date = '', e_date = '',s_time ='',e_time = '',weeks = ''
						WHERE id='".$tbl_id."'";
		}
		$query = $this->db->query($sql);
		return 'success';
	}
	// update Schedule
	public function update_sch_em($tbl_id,$up_manual,$s_date,$e_date,$s_time,$e_time,$days,$end_date_sta1){
		$dis_date = date("F j, Y, g:i a");
		if($up_manual == 'true'){			
			$cs_time ="";
			if(strchr($s_time,'AM') == "AM"){
				if(strcmp($s_time,'1 AM')==0){
					$cs_time = "01";
				}
				if(strcmp($s_time,'2 AM')==0){
					$cs_time = "02";
				}
				if(strcmp($s_time,'3 AM')==0){
					$cs_time = "03";
				}
				if(strcmp($s_time,'4 AM')==0){
					$cs_time = "04";
				}
				if(strcmp($s_time,'5 AM')==0){
					$cs_time = "05";
				}
				if(strcmp($s_time,'6 AM')==0){
					$cs_time = "06";
				}
				if(strcmp($s_time,'7 AM')==0){
					$cs_time = "07";
				}
				if(strcmp($s_time,'8 AM')==0){
					$cs_time = "08";
				}
				if(strcmp($s_time,'9 AM')==0){
					$cs_time = "09";
				}
				if(strcmp($s_time,'10 AM')==0){
					$cs_time = "1O";
				}
				if(strcmp($s_time,'11 AM')==0){
					$cs_time = "11";
				}
				if(strcmp($s_time,'12 AM')==0){
					$cs_time = "00";
				}
			}
			if(strchr($s_time,'AM') == ""){
				if(strcmp($s_time,'1 PM')==0){
					$cs_time = "13";
				}
				if(strcmp($s_time,'2 PM')==0){
					$cs_time = "14";
				}
				if(strcmp($s_time,'3 PM')==0){
					$cs_time = "15";
				}
				if(strcmp($s_time,'4 PM')==0){
					$cs_time = "16";
				}
				if(strcmp($s_time,'5 PM')==0){
					$cs_time = "17";
				}
				if(strcmp($s_time,'6 PM')==0){
					$cs_time = "18";
				}
				if(strcmp($s_time,'7 PM')==0){
					$cs_time = "19";
				}
				if(strcmp($s_time,'8 PM')==0){
					$cs_time = "20";
				}
				if(strcmp($s_time,'9 PM')==0){
					$cs_time = "21";
				}
				if(strcmp($s_time,'10 PM')==0){
					$cs_time = "22";
				}
				if(strcmp($s_time,'11 PM')==0){
					$cs_time = "23";
				}
				if(strcmp($s_time,'12 PM')==0){
					$cs_time = "12";
				}
			}
			$s_ime = date_time_set(date_create($s_date),$cs_time,00);
			// echo date_format($s_ime,"Y-m-d H:i:s") . "<br>";
			$s_ime = date_format($s_ime,"Y-m-d H:i");
			$end_ime = date('Y-m-d H:i',strtotime($e_date.'days +4 hour',strtotime($s_ime)));
			$end_date_ime = date_parse($end_ime)['month'].'/'.date_parse($end_ime)['day'].'/'.date_parse($end_ime)['year'];
			$end_hour = date_parse($end_ime)['hour'];
			if($end_hour <= 12){
				$end_ime = $end_hour." AM";
			}
			if($end_hour >12){
				$end_hour = $end_hour - 12;
				$end_ime = $end_hour." PM";
			}
			$sql = "UPDATE tbl_adver SET s_date = '".$s_date."',e_date = '".$end_date_ime."',s_time = '".$s_time."',e_time = '".$end_ime."',weeks = '".$days."',dis_type='sch'
						WHERE id='".$tbl_id."'";
			
		}
		else{
			$end_ime = date('Y-m-d H:i',strtotime('+4 hour',strtotime($dis_date)));
			$end_date_ime = date_parse($end_ime)['month'].'/'.date_parse($end_ime)['day'].'/'.date_parse($end_ime)['year'];
			$end_hour = date_parse($end_ime)['hour'];
			$date_ime = date("m/j/Y");
			$start_ime = date("H");
			if($start_ime <= 12){
				$start_ime = $start_ime." AM";
			}
			if($start_ime >12){
				$start_ime = $start_ime - 12;
				$start_ime = $start_ime." PM";
			}
			if($end_hour <= 12){
				$end_ime = $end_hour." AM";
			}
			if($end_hour >12){
				$end_hour = $end_hour - 12;
				$end_ime = $end_hour." PM";
			}
			$sql = "UPDATE tbl_adver SET s_date = '".$date_ime."', e_date = '".$end_date_ime."',s_time ='".$start_ime."',e_time = '".$end_ime."',weeks = '',dis_type='imme'
						WHERE id='".$tbl_id."'";
		}
		$query = $this->db->query($sql);
		return 'success';
	}
}
