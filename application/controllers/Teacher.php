<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {
	public function students()
	{
		$this->load->view('temp/head.php');
		if($this->session->userdata('id_role') == 1){
			$this->load->view('temp/navbar_student.php');
			redirect('main/index');
		}
		else if($this->session->userdata('id_role') == 2){
			$this->load->view('temp/navbar_teacher.php');
		}
		else if($this->session->userdata('id_role') == NULL and $this->session->userdata('id_user')){
			$this->load->view('temp/navbar_inactive.php');
			redirect('main/index');
		}
		else {
			$this->load->view('temp/navbar.php');
			redirect('main/index');
		}
		$this->load->model('model_students');
		$data['students'] = $this->model_students->select_students();
		$this->load->view('students.php', $data);
		$this->load->view('temp/footer.php');
	}
	public function groups()
	{
		$this->load->view('temp/head.php');
		if($this->session->userdata('id_role') == 1){
			$this->load->view('temp/navbar_student.php');
			redirect('main/index');
		}
		else if($this->session->userdata('id_role') == 2){
			$this->load->view('temp/navbar_teacher.php');
		}
		else if($this->session->userdata('id_role') == NULL and $this->session->userdata('id_user')){
			$this->load->view('temp/navbar_inactive.php');
			redirect('main/index');
		}
		else {
			$this->load->view('temp/navbar.php');
			redirect('main/index');
		}
		$this->load->model('model_groups');
		$data['groups'] = $this->model_groups->select_groups();
		$this->load->view('groups.php', $data);
		$this->load->view('temp/footer.php');
	}
	public function schedule()
	{
		$this->load->view('temp/head.php');
		if($this->session->userdata('id_role') == 1){
			$this->load->view('temp/navbar_student.php');
			redirect('main/index');
		}
		else if($this->session->userdata('id_role') == 2){
			$this->load->view('temp/navbar_teacher.php');
		}
		else if($this->session->userdata('id_role') == NULL and $this->session->userdata('id_user')){
			$this->load->view('temp/navbar_inactive.php');
			redirect('main/index');
		}
		else {
			$this->load->view('temp/navbar.php');
			redirect('main/index');
		}
		$this->load->model('model_lessons');
		$this->load->model('model_courses');
		$this->load->model('model_groups');
		$data['schedule'] = $this->model_lessons->select_lessons();
		$data['courses'] = $this->model_courses->select_courses();
		$data['groups'] = $this->model_groups->select_groups();
		$this->load->view('schedule.php', $data);
		$this->load->view('temp/footer.php');
	}
	public function new_lesson(){
		if(!empty($_POST)){
			$date = $_POST['date'];
			$time = $_POST['time'];
			$auditorium = $_POST['auditorium'];
			$type_occupation = $_POST['type_occupation'];
			$id_course = $_POST['id_course'];
			$id_user = $this->session->userdata('id_user');
			$this->load->model('model_teachers');
			$id_teacher = $this->model_teachers->select_teacher($id_user);
			$id_group = $_POST['id_group'];
			$this->load->model('model_lessons');
			$this->model_lessons->create_lesson($date, $time, $auditorium, $type_occupation, $id_course, $id_teacher, $id_group);
			redirect('teacher/schedule');
		}
	}
	public function new_course(){
		if(!empty($_POST)){
			$name_discipline = $_POST['name_discipline'];
			$description = $_POST['description'];
			$hours = $_POST['hours'];
			$semester = $_POST['semester'];
			$this->load->model('model_courses');
			$this->model_courses->create_course($name_discipline, $description, $hours, $semester);
			redirect('teacher/schedule');
		}
	}
	public function fix_lesson()
	{
		$this->load->view('temp/head.php');
		if($this->session->userdata('id_role') == 1){
			$this->load->view('temp/navbar_student.php');
			redirect('main/index');
		}
		else if($this->session->userdata('id_role') == 2){
			$this->load->view('temp/navbar_teacher.php');
		}
		else if($this->session->userdata('id_role') == NULL and $this->session->userdata('id_user')){
			$this->load->view('temp/navbar_inactive.php');
			redirect('main/index');
		}
		else {
			$this->load->view('temp/navbar.php');
			redirect('main/index');
		}
		$this->load->model('model_groups');
		if(!empty($_GET)){
			$id_lesson = $_GET['id_lesson'];
		}
		$data = [
			'groups' => $this->model_groups->select_groups(),
			'id_lesson' => $id_lesson
		];
		$this->load->view('fix_lesson.php', $data);
		$this->load->view('temp/footer.php');
	}
	public function edit_lesson(){
		if(!empty($_POST)){
			$date = $_POST['date'];
			$time = $_POST['time'];
			$auditorium = $_POST['auditorium'];
			$id_lesson = $_POST['id_lesson'];
			$this->load->model('model_lessons');
			$this->model_lessons->update_lesson($date, $time, $auditorium, $id_lesson);
			redirect('teacher/schedule');
		}
	}
	public function enter_grades()
	{
		$this->load->view('temp/head.php');
		if($this->session->userdata('id_role') == 1){
			$this->load->view('temp/navbar_student.php');
			redirect('main/index');
		}
		else if($this->session->userdata('id_role') == 2){
			$this->load->view('temp/navbar_teacher.php');
		}
		else if($this->session->userdata('id_role') == NULL and $this->session->userdata('id_user')){
			$this->load->view('temp/navbar_inactive.php');
			redirect('main/index');
		}
		else {
			$this->load->view('temp/navbar.php');
			redirect('main/index');
		}
		$this->load->model('model_students');
		$this->load->model('model_courses');
		$this->load->model('model_grades');
		$data = [
			'students' => $this->model_students->select_student(),
			'courses' => $this->model_courses->select_courses(),
			'grades' => $this->model_grades->select_grades()
		];
		$this->load->view('enter_grades.php', $data);
		$this->load->view('temp/footer.php');
	}
	public function add_grade(){
		if(!empty($_POST)){
			$evaluation_value = $_POST['evaluation_value'];
			$date_issue = $_POST['date_issue'];
			$type_work = $_POST['type_work'];
			$id_student = $_POST['id_student'];
			$id_course = $_POST['id_course'];
			$id_user = $this->session->userdata('id_user');
			$this->load->model('model_teachers');
			$id_teacher = $this->model_teachers->select_teacher($id_user);
			$this->load->model('model_grades');
			$this->model_grades->add_grade($evaluation_value, $date_issue, $type_work, $id_student, $id_course, $id_teacher);
			redirect('teacher/enter_grades');
		}
	}
	public function fix_grade()
	{
		$this->load->view('temp/head.php');
		if($this->session->userdata('id_role') == 1){
			$this->load->view('temp/navbar_student.php');
			redirect('main/index');
		}
		else if($this->session->userdata('id_role') == 2){
			$this->load->view('temp/navbar_teacher.php');
		}
		else if($this->session->userdata('id_role') == NULL and $this->session->userdata('id_user')){
			$this->load->view('temp/navbar_inactive.php');
			redirect('main/index');
		}
		else {
			$this->load->view('temp/navbar.php');
			redirect('main/index');
		}
		if(!empty($_GET)){
			$id_grade = $_GET['id_grade'];
		}
		$data = [
			'id_grade' => $id_grade
		];
		$this->load->view('fix_grade.php', $data);
		$this->load->view('temp/footer.php');
	}
	public function edit_grade(){
		if(!empty($_POST)){
			$id_grade = $_POST['id_grade'];
			$evaluation_value = $_POST['evaluation_value'];
			$date_issue = $_POST['date_issue'];
			$type_work = $_POST['type_work'];
			$this->load->model('model_grades');
			$this->model_grades->update_grade($evaluation_value, $date_issue, $type_work, $id_grade);
			redirect('teacher/enter_grades');
		}
	}
	public function lessons()
	{
		$this->load->view('temp/head.php');
		if($this->session->userdata('id_role') == 1){
			$this->load->view('temp/navbar_student.php');
			redirect('main/index');
		}
		else if($this->session->userdata('id_role') == 2){
			$this->load->view('temp/navbar_teacher.php');
		}
		else if($this->session->userdata('id_role') == NULL and $this->session->userdata('id_user')){
			$this->load->view('temp/navbar_inactive.php');
			redirect('main/index');
		}
		else {
			$this->load->view('temp/navbar.php');
			redirect('main/index');
		}
		$this->load->view('lessons.php');
		$this->load->view('temp/footer.php');
	}
}
?>