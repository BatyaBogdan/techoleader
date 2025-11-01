<?php
class Model_courses extends CI_Model{
    public function select_courses(){
        $sql = "SELECT * FROM courses";
        $return = $this->db->query($sql);
        return $return->result_array();
    }
    public function create_course($name_discipline, $description, $hours, $semester){
        $sql = "INSERT INTO courses (name_discipline, description, hours, semester) VALUES (?, ?, ?, ?)";
        $return = $this->db->query($sql, array($name_discipline, $description, $hours, $semester));
        return $return;
    }
    public function update_course($evaluation_value, $date_issue, $type_work, $id_grade){
        $sql = "UPDATE grades SET evaluation_value = ?, date_issue = ?, type_work = ? where id_grade = ?";
        $return = $this->db->query($sql, array($evaluation_value, $date_issue, $type_work, $id_grade));
        return $return;
    }
}