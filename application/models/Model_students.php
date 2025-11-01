<?php
class Model_students extends CI_Model{
    public function create_student($id_group, $year_accept, $form_education){
        $sql = "INSERT INTO students (id_group, year_accept, form_education) VALUES (?, ?, ?)";
        $return = $this->db->query($sql, array($id_group, $year_accept, $form_education));
        return $return;
    }
    public function select_students(){
        $sql = "SELECT students.id_student, students.number_card, users.login, studentgroups.name_group, students.year_accept, students.form_education from users, students, studentgroups where users.id_user = students.id_user and studentgroups.id_group = students.id_group";
        $return = $this->db->query($sql);
        return $return->result_array();
    }
    public function select_student(){
        $sql = "SELECT users.login, students.id_student from users, students where students.id_user = users.id_user";
        $return = $this->db->query($sql);
        return $return->result_array();
    }
}