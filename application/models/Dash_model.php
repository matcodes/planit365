<?php 

class dash_model extends CI_Model
{
	public function add($table,$values)
	{
		$user_id=$values['user_id'];

		$q=$this->db->where(['user_id'=>$user_id])
		->get($table);
		// echo $user_id;
		// 	exit;
		if($q->num_rows()){
			// echo $user_id;
			// exit;
			$this->db->where('user_id',$user_id);
        	$this->db->update($table,$values);
			
		}
		else{
			// echo"Hiii";
			// exit;
			
			$this->db->insert($table,$values);
		
		}
	}
	public function add1($table,$values)
	{
		$user_id=$values['user_id'];

		$q=$this->db->where(['user_id'=>$user_id])
		->get($table);
		// echo $user_id;
		// 	exit;
		if($q->num_rows()){
			// echo $user_id;
			// exit;
			$this->db->where('user_id',$user_id);
        	$this->db->update($table,$values);
			
		}
		else{
			// echo"Hiii";
			// exit;
			$user_name=$values['name'];
			$this->db->insert($table,$values);
		
			$status=0;
			$data = [
				'user_id'	=>$user_id,
				'user_name'		=>$user_name,
				'password'=>$user_id,
				'status'=>$status,
			];
			$this->db->insert('user',$data);
		}
	}

	public function get_personal($id){
       
        $q=$this->db->where(['user_id'=>$id])
			->get('personal_info');
			
            // echo"<pre>";
            // print_r($q);
            // exit;
            if($q->num_rows()){
                $data = $q->row_array();
            //     echo"<pre>";
            // print_r($data[0]);
            // exit;
                return $data;
               
            }
            else{
                return false;
            }
	}


	public function get_skills($id){
		
        $q=$this->db->where(['user_id'=>$id])
            ->get('technical_skills');
			
			$data = $q->row_array();
				
			if ($data['user_id']){
				
					// echo"<pre>";
					// print_r($data);
					// exit;
					return ($data);
				}
			else
			{
				
                return false;
            }
	}

	public function get_acedemic($id){
		
        $q=$this->db->where(['user_id'=>$id])
            ->get('academic_qualification');
			
			$data = $q->row_array();
				
			if ($data['user_id']){
				
					// echo"<pre>";
					// print_r($data);
					// exit;
					return ($data);
				
				}
			
			else
			{
				
                return false;
            }
	}

	public function get_acedemic2($id){
		
        $q=$this->db->where(['user_id'=>$id])
            ->get('others_graduation');
			
			$data = $q->row_array();
				
			if ($data['user_id']){
				
					// echo"<pre>";
					// print_r($data);
					// exit;
					return ($data);
				
				}
			
			else
			{
				
                return false;
            }
	}

	public function get_training_certification($id){
		
        $q=$this->db->where(['user_id'=>$id])
            ->get('technical_certification_info');
			
			$data = $q->row_array();
				
			if ($data['user_id']){
				
					// echo"<pre>";
					// print_r($data);
					// exit;
					return ($data);
				
				}
			
			else
			{
				
                return false;
            }
	}


	public function get_interpersonal($id){
		
        $q=$this->db->where(['user_id'=>$id])
            ->get('achievements');
			
			$data = $q->row_array();
				
			if ($data['user_id']){
				
					// echo"<pre>";
					// print_r($data);
					// exit;
					return ($data);
				
				}
			
			else
			{
				
                return false;
            }
	}

	public function get_co_curricular($id){
		
        $q=$this->db->where(['user_id'=>$id])
            ->get('co_curricular');
			
			$data = $q->row_array();
				
			if ($data['user_id']){
				
					// echo"<pre>";
					// print_r($data);
					// exit;
					return ($data);
				
				}
			
			else
			{
				
                return false;
            }
	}

	public function get_reference($id){
		
        $q=$this->db->where(['user_id'=>$id])
            ->get('refrence');
			
			$data = $q->row_array();
				
			if ($data['user_id']){
				
					// echo"<pre>";
					// print_r($data);
					// exit;
					return ($data);
				
				}
			
			else
			{
				
                return false;
            }
	}
}
?>
