<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	public function schedule()
	{
		$this->load->view('temp/head.php');
		if($this->session->userdata('id_role') == 1){
			$this->load->view('temp/navbar_student.php');
		}
		else if($this->session->userdata('id_role') == 2){
			$this->load->view('temp/navbar_teacher.php');
			redirect('main/index');
		}
		else if($this->session->userdata('id_role') == NULL and $this->session->userdata('id_user')){
			$this->load->view('temp/navbar_inactive.php');
			redirect('main/index');
		}
		else {
			$this->load->view('temp/navbar.php');
			redirect('main/index');
		}
		$id_user = $this->session->userdata('id_user');
		$this->load->model('model_groups');
		$id_group = $this->model_groups->select_group($id_user);
		$this->load->model('model_lessons');;
		$data['schedule'] = $this->model_lessons->select_student_lessons($id_group);
		$this->load->view('schedule_student.php', $data);
		$this->load->view('temp/footer.php');
	}
	public function grades()
	{
		$this->load->view('temp/head.php');
		if($this->session->userdata('id_role') == 1){
			$this->load->view('temp/navbar_student.php');
		}
		else if($this->session->userdata('id_role') == 2){
			$this->load->view('temp/navbar_teacher.php');
			redirect('main/index');
		}
		else if($this->session->userdata('id_role') == NULL and $this->session->userdata('id_user')){
			$this->load->view('temp/navbar_inactive.php');
			redirect('main/index');
		}
		else {
			$this->load->view('temp/navbar.php');
			redirect('main/index');
		}
		$id_user = $this->session->userdata('id_user');
		$this->load->model('model_grades');
		$data['grades'] = $this->model_grades->select_student_grades($id_user);
		$this->load->view('grades_student.php', $data);
		$this->load->view('temp/footer.php');
	}
	public function teachers()
	{
		$this->load->view('temp/head.php');
		if($this->session->userdata('id_role') == 1){
			$this->load->view('temp/navbar_student.php');
		}
		else if($this->session->userdata('id_role') == 2){
			$this->load->view('temp/navbar_teacher.php');
			redirect('main/index');
		}
		else if($this->session->userdata('id_role') == NULL and $this->session->userdata('id_user')){
			$this->load->view('temp/navbar_inactive.php');
			redirect('main/index');
		}
		else {
			$this->load->view('temp/navbar.php');
			redirect('main/index');
		}
		$this->load->model('model_teachers');
		$data['teachers'] = $this->model_teachers->select_teachers();
		$this->load->view('teachers.php', $data);
		$this->load->view('temp/footer.php');
	}
}
?>