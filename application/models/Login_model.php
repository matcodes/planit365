<?php  
class Login_model extends CI_Model{
public function isvalidate($user_id,$password){
    $q=$this->db->where(['user_id'=>$user_id,'password'=>$password])
            ->get('user');
            // echo"<pre>";
            // print_r($q);
            if($q->num_rows()){
                
                // return $q->row()->id;
                return True;
            }
            else{
                return false;
            }

}
}

?>