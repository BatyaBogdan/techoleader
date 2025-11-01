<?php
class Model_teachers extends CI_Model{
    public function select_teachers(){
        $sql = "SELECT * from teachers";
        $return = $this->db->query($sql);
        return $return->result_array();
    }
    public function select_teacher($id_user){
        $sql = "SELECT teachers.id_teacher FROM teachers, users where teachers.id_user = users.id_user and teachers.id_user = ?";
        $return = $this->db->query($sql, array($id_user));
        return $return->row_array();
    }
}