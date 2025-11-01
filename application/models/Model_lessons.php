<?php
class Model_lessons extends CI_Model{
    public function select_lessons(){
        $sql = "SELECT lessons.id_lesson, lessons.date, lessons.time, lessons.auditorium, lessons.type_occupation, users.login, studentgroups.name_group from lessons, users, studentgroups, teachers WHERE users.id_user = teachers.id_user and lessons.id_group = studentgroups.id_group";
        $return = $this->db->query($sql);
        return $return->result_array();
    }
        public function select_student_lessons($id_group){
        $sql = "SELECT lessons.id_lesson, lessons.date, lessons.time, lessons.auditorium, lessons.type_occupation, users.login, studentgroups.name_group from lessons, users, studentgroups, teachers WHERE users.id_user = teachers.id_user and lessons.id_group = studentgroups.id_group and lessons.id_group = ?";
        $return = $this->db->query($sql, array($id_group));
        return $return->result_array();
    }
    public function create_lesson($date, $time, $auditorium, $type_occupation, $id_course, $id_teacher, $id_group){
        $sql = "INSERT INTO lessons (date, time, auditorium, type_occupation, id_course, id_teacher, id_group) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $return = $this->db->query($sql, array($date, $time, $auditorium, $type_occupation, $id_course, $id_teacher, $id_group));
        return $return;
    }
    public function update_lesson($date, $time, $auditorium, $id_lesson){
        $sql = "UPDATE lessons SET date = ?, time = ?, auditorium = ? where id_lesson = ?";
        $return = $this->db->query($sql, array($date, $time, $auditorium, $id_lesson));
        return $return;
    }
}
?>