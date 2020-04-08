<?php  
class Admin_model extends CI_Model{
public function count_rows($status) {
    $this->db->where(['status' => $status]);
    return $this->db->get('user')->num_rows();
}
public function search($user_id){
    $this->db->where(['user_id' => $user_id]);
    return $this->db->get('user')->num_rows();
}


}

?>