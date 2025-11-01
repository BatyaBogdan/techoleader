<?php
class Model_grades extends CI_Model{
    public function add_grade($evaluation_value, $date_issue, $type_work, $id_student, $id_course, $id_teacher){
        $sql = "INSERT INTO grades (evaluation_value, date_issue, type_work, id_student, id_course, id_teacher) VALUES (?, ?, ?, ?, ?, ?)";
        $return = $this->db->query($sql, array($evaluation_value, $date_issue, $type_work, $id_student, $id_course, $id_teacher));
        return $return;
    }
    public function select_grades(){
        $sql = "SELECT grades.id_grade, grades.evaluation_value, grades.date_issue, grades.type_work, courses.name_discipline, users.login from users, grades, students, courses where users.id_user = students.id_user and courses.id_course = grades.id_course";
        $return = $this->db->query($sql);
        return $return->result_array();
    }
    public function select_student_grades($id_user){
        $sql = "SELECT grades.id_grade, grades.evaluation_value, grades.date_issue, grades.type_work, courses.name_discipline, users.login from users, grades, students, courses where users.id_user = students.id_user and courses.id_course = grades.id_course and users.id_user = ?";
        $return = $this->db->query($sql, array($id_user));
        return $return->result_array();
    }
    public function update_grade($evaluation_value, $date_issue, $type_work, $id_grade){
        $sql = "UPDATE grades SET evaluation_value = ?, date_issue = ?, type_work = ? where id_grade = ?";
        $return = $this->db->query($sql, array($evaluation_value, $date_issue, $type_work, $id_grade));
        return $return;
    }
}
?>