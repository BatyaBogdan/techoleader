<?php
class Model_groups extends CI_Model{
    public function select_groups(){
        $sql = "SELECT * from studentgroups";
        $return = $this->db->query($sql);
        return $return->result_array();
    }
    public function select_group($id_user){
        $sql = "SELECT students.id_group FROM students, users where students.id_user = users.id_user and students.id_user = ?";
        $return = $this->db->query($sql, array($id_user));
        return $return->row_array();
    }
}
?>