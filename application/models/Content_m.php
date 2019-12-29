<?php
/**
 * 
 */
class Content_m extends CI_Model
{
	
	// This is the content page
	// Slide manager
	public function get_slide(){
		$sql = "SELECT * FROM tbl_con_slide Order By id";
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
	public function insert_slide($cre_date,$name,$sli_text,$sli_title){
		$sql = "INSERT INTO tbl_con_slide (slide_name,sli_text,sli_title,cre_date) 
					values('".$name."','".$sli_text."','" .$sli_title."','".$cre_date."')";
		
		$query = $this->db->query($sql);
		return "Success";
	}
	public function update_slide($cre_date,$name,$sli_text,$sli_title,$tbl_id,$slide_update,$sup_flag){
		if($sup_flag == "false"){
			$sql = "UPDATE tbl_con_slide 
					SET sli_title ='".$sli_title."',sli_text ='".$sli_text."'
					where id=$tbl_id";
		}
		else{
			$sql = "UPDATE tbl_con_slide 
					SET slide_name='".$name."',sli_title ='".$sli_title."',sli_text ='".$sli_text."' ,cre_date='".$cre_date."'
					where id=$tbl_id";
		}
		$query = $this->db->query($sql);
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
			$res['cre_date'] = $row->cre_date;
			$res['title'] = $row->title;
			$res['text'] = $row->text;
			array_push($data,$res);
        }
        return $data;
	}
	public function insert_about($name,$abo_text,$abo_title,$cre_date){
		$sql = "INSERT INTO tbl_about (abo_img,text,title,cre_date) 
					values('".$name."','".$abo_text."','" .$abo_title."','".$cre_date."')";		
		$query = $this->db->query($sql);
		return "success";
	}
	public function update_about($name,$abo_text,$abo_title,$tbl_id,$about_flg,$cre_date){
		if($about_flg == 'true'){
			$sql = "UPDATE tbl_about 
						SET abo_img='".$name."',title ='".$abo_title."',text ='".$abo_text."' ,cre_date ='".$cre_date."' 
						where id=$tbl_id";
		}
		else{
			$sql = "UPDATE tbl_about 
						SET title ='".$abo_title."',text ='".$abo_text."'
						where id=$tbl_id";
		}
		$query = $this->db->query($sql);
		return "success";
	}
	public function delete_about($tbl_id){
		$sql = "DELETE FROM tbl_about where id=$tbl_id";
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
	
	public function update_team($name,$team_text,$team_title,$tbl_id,$cre_date,$team_flag){
		if($team_flag == 'true'){
			$sql = "UPDATE tbl_team 
						SET img_url='".$name."',t_name ='".$team_title."',t_text ='".$team_text."',cre_date = '".$cre_date."'
						where id=$tbl_id";
		}
		else{
			$sql = "UPDATE tbl_team 
						SET t_name ='".$team_title."',t_text ='".$team_text."'
						where id=$tbl_id";
		}
		$query = $this->db->query($sql);
		return "success";
	}
	public function insert_team($name,$team_text,$team_title,$cre_date){
		$sql = "INSERT INTO tbl_team (img_url,t_text,t_name,cre_date) 
					values('".$name."','".$team_text."','" .$team_title."','".$cre_date."')";		
		$query = $this->db->query($sql);
		return "success";
	}
	public function delete_team($tbl_id){
		$sql = "DELETE FROM tbl_team where id=$tbl_id";
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
	public function insert_service($s_title,$s_text){
		$sql = "INSERT INTO tbl_service 
					(s_title,s_text) values('".$s_title."','".$s_text."' )";
		$query = $this->db->query($sql);
		return "success";
	}
	public function update_service($s_title,$s_text,$tbl_id){
		$sql = "UPDATE tbl_service 
					SET s_title='".$s_title."',s_text ='".$s_text."' 
					where id=$tbl_id";
		$query = $this->db->query($sql);
		return "success";
	}
	public function delete_service($tbl_id){
		$sql = "DELETE FROM tbl_service where id=$tbl_id";
		$query = $this->db->query($sql);
		return "success";
	}
	// ENd of service
	// FACT
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
	public function insert_fact($f_title,$f_text){
		$sql = "INSERT INTO tbl_fact 
					(f_title,f_text) values('".$f_title."','".$f_text."' )";
		$query = $this->db->query($sql);
		return "success";
	}
	public function update_fact($f_title,$f_text,$tbl_id){
		$sql = "UPDATE tbl_fact 
					SET f_title='".$f_title."',f_text ='".$f_text."' 
					where id=$tbl_id";
		$query = $this->db->query($sql);
		return "success";
	}
	public function delete_fact($tbl_id){
		$sql = "DELETE FROM tbl_fact where id=$tbl_id";
		$query = $this->db->query($sql);
		return "success";
	}
	
	// ENd of FACT
	// Pricing
	public function get_price(){
		$sql = "SELECT * FROM tbl_price";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] = $i;
			$res['tbl_id'] = $row->id;
			$res['p_title'] = $row->p_title;
			$res['p_text1'] = $row->p_text1;
			$res['p_text2'] = $row->p_text2;
			$res['p_text3'] = $row->p_text3;
			$res['p_text4'] = $row->p_text4;
			$res['p_price'] = $row->p_price;
			array_push($data,$res);
        }
        return $data;
	}
	public function update_price($p_title,$p_text1,$p_text2,$p_text3,$p_text4,$p_price,$tbl_id){
		$sql = "UPDATE tbl_price 
					SET p_title='".$p_title."',p_text1 ='".$p_text1."',p_text2 ='".$p_text2."' ,
						p_text3 ='".$p_text3."' ,p_text4 ='".$p_text4."' ,p_price ='".$p_price."' 
					where id=$tbl_id";
		$query = $this->db->query($sql);
		return "success";
	}
	public function insert_price($p_title,$p_text1,$p_text2,$p_text3,$p_text4,$p_price){
		$sql = "INSERT INTO tbl_price (p_title,p_text1,p_text2,p_text3,p_text4,p_price)
						values('".$p_title."','".$p_text1."','".$p_text2."','".$p_text3."','".$p_text4."','".$p_price."')";
		$query = $this->db->query($sql);
		return "success";
	}
	public function delete_price($tbl_id){
		$sql = "DELETE FROM tbl_price where id=$tbl_id";
		$query = $this->db->query($sql);
		return "success";
	}
	// End of Pricing
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
	public function insert_con($c_title,$c_text){
		$sql = "INSERT INTO tbl_con 
					(c_title,c_text) values('".$c_title."','".$c_text."')";
		$query = $this->db->query($sql);
		return "success";
	}
	public function delete_con($tbl_id){
		$sql = "DELETE FROM tbl_con where id=$tbl_id";
		$query = $this->db->query($sql);
		return "success";
	}
	// port
	// Port 
	public function get_port(){
		$sql = "SELECT * FROM tbl_port";
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
			$res['p_name'] = $row->p_name;
			$res['p_text'] = $row->p_text;
			array_push($data,$res);
        }
        return $data;
	}
	public function insert_port($name,$port_text,$port_title,$cre_date){
		$sql = "INSERT INTO tbl_port (img_url,p_text,p_name,cre_date) 
					values('".$name."','".$port_text."','" .$port_title."','".$cre_date."')";		
		$query = $this->db->query($sql);
		return "success";
	}
	public function update_port($name,$abo_text,$abo_title,$tbl_id,$port_flg,$cre_date){
		if($port_flg == 'true'){
			$sql = "UPDATE tbl_port 
						SET img_url='".$name."',p_name ='".$abo_title."',p_text ='".$abo_text."' ,cre_date = '".$cre_date."' 
						where id=$tbl_id";
		}
		else{
			$sql = "UPDATE tbl_port 
						SET p_name ='".$abo_title."',p_text ='".$abo_text."'  
						where id=$tbl_id";
		}
		$query = $this->db->query($sql);
		return "success";
	}
	public function delete_port($tbl_id){
		$sql = "DELETE FROM tbl_port where id=$tbl_id";
		$query = $this->db->query($sql);
		return "success";
	}
	// End of Port
	public function get_cat(){
		$sql = "SELECT * FROM tbl_cat";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			// $res['id'] = $i;
			$res['id'] = $row->id;
			$res['parentid'] = $row->parent_id;
			$res['text'] = $row->title;
			$res['value'] = $row->title;
			array_push($data,$res);
        }
        return $data;
	}
	public function insert_main_cat($title){
		$sql = "INSERT INTO tbl_cat 
					(title,parent_id) values('".$title."','-1')";
		$query = $this->db->query($sql);
		return "success";
	}
	public function insert_sub_cat($title,$p_id){
		$sql = "INSERT INTO tbl_cat 
					(title,parent_id) values('".$title."','".$p_id."')";
		$query = $this->db->query($sql);
		return "success";
	}
	public function update_sub_cat($title,$p_id){
		$sql = "UPDATE tbl_cat 
					SET title = '".$title."' WHERE id = '".$p_id."' ";
		$query = $this->db->query($sql);
		return "success";
	}
	public function del_sub_cat($parentId,$tbl_id){
		if($parentId == 0){
			$sql = "DELETE FROM tbl_cat where id='".$tbl_id."'";
			$query = $this->db->query($sql);
			$sql = "DELETE FROM tbl_cat where parent_id='".$tbl_id."'";
			$query = $this->db->query($sql);
			return "success";
		}
		else{
			$sql = "DELETE FROM tbl_cat where id='".$tbl_id."'";
			$query = $this->db->query($sql);
		}
		
	}
	// Qeustion And Answer
	public function get_qa(){
		$sql  = "SELECT th.*,tc.title 
					FROM tbl_help as th
				    LEFT JOIN tbl_cat as tc on th.cat_id=tc.id";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] = $i;
			$res['tbl_id'] = $row->id;
			$res['cat_id'] = $row->cat_id;
			$res['cat_name'] = $row->title;
			$res['question'] = $row->question;
			$res['answer'] = $row->answer;
			array_push($data,$res);
        }
        return $data;
	}
	public function get_cat_drop(){
		$sql = "SELECT * FROM tbl_cat where parent_id !=-1";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] = $i;
			$res['tbl_id'] = $row->id;
			$res['parentid'] = $row->parent_id;
			$res['text'] = $row->title;
			array_push($data,$res);
        }
        return $data;
	}
	public function insert_qa($cat_id,$question,$answer){
		$sql = "INSERT INTO tbl_help 
					(cat_id,question,answer)
					values('".$cat_id."','".$question."','".$answer."')";
		$query = $this->db->query($sql);
		return "success";			
	}
	public function delete_qa($tbl_id){
		$sql = "DELETE FROM tbl_help where id=$tbl_id";
		$query = $this->db->query($sql);
		return "success";
	}
	public function update_qa($cat_id,$question,$answer,$tbl_id){
		$sql = "UPDATE tbl_help 
					SET cat_id = '".$cat_id."',question = '".$question."',answer = '".$answer."'
					where id='".$tbl_id."'";
		$query = $this->db->query($sql);
		return "success";			
	}
	// End of port
	// Help Center
	public function get_main_cat(){
		$sql = "SELECT * FROM tbl_cat where parent_id =-1";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] = $i;
			$res['tbl_id'] = $row->id;
			$res['parentid'] = $row->parent_id;
			$res['text'] = $row->title;
			array_push($data,$res);
        }
        return $data;
	}
	public function get_sub_cat($tbl_id){
		$sql = "SELECT * FROM tbl_cat where parent_id ='".$tbl_id."'";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] = $i;
			$res['tbl_id'] = $row->id;
			$res['parentid'] = $row->parent_id;
			$res['text'] = $row->title;
			array_push($data,$res);
        }
        return $data;
	}
	public function get_an($tbl_id){
		$sql = "SELECT * FROM tbl_help where cat_id ='".$tbl_id."'";
		$query = $this->db->query($sql);
		$data = array();
		$i = 0;
		foreach ($query->result() as $row){
			$res = [];
			$i++;
			$res['id'] = $i;
			$res['tbl_id'] = $row->id;
			$res['question'] = $row->question;
			$res['answer'] = $row->answer;
			array_push($data,$res);
        }
        return $data;
	}
}