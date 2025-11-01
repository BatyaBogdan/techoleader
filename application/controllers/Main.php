<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		$this->load->view('temp/head.php');
		if($this->session->userdata('id_role') == 1){
			$this->load->view('temp/navbar_student.php');
		}
		else if($this->session->userdata('id_role') == 2){
			$this->load->view('temp/navbar_teacher.php');
		}
		else if($this->session->userdata('id_role') == NULL and $this->session->userdata('id_user')){
			$this->load->view('temp/navbar_inactive.php');
		}
		else {
			$this->load->view('temp/navbar.php');
		}
		$this->load->view('index.php');
		$this->load->view('temp/footer.php');
	}
	public function about_us()
	{
		$this->load->view('temp/head.php');
		if($this->session->userdata('id_role') == 1){
			$this->load->view('temp/navbar_student.php');
		}
		else if($this->session->userdata('id_role') == 2){
			$this->load->view('temp/navbar_teacher.php');
		}
		else if($this->session->userdata('id_role') == NULL and $this->session->userdata('id_user')){
			$this->load->view('temp/navbar_inactive.php');
		}
		else {
			$this->load->view('temp/navbar.php');
		}
		$this->load->view('about_us.php');
		$this->load->view('temp/footer.php');
	}
	public function login()
	{
		$this->load->view('temp/head.php');
		if($this->session->userdata('id_role') == 1){
			$this->load->view('temp/navbar_student.php');
			redirect('main/index');
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
		}
		$this->load->view('login.php');
		$this->load->view('temp/footer.php');
	}
	public function auth(){
		if(!empty($_POST)){
			$login = $_POST['login'];
			$password = $_POST['password'];
			$this->load->model('model_users');
			$user = $this->model_users->select_user($login, $password);
			if($user){
				$user = array(
					'id_user' => $user['id_user'],
					'login' => $user['login'],
					'id_role' => $user['id_role']
				);
				$this->session->set_userdata($user);
				if($this->session->userdata('id_role') == 1){
					redirect('main/index');
				}
				else if($this->session->userdata('id_role') == 2){
					redirect('main/index');
				}
				else if($this->session->userdata('id_role') == NULL){
					redirect('main/index');
				}
				else {
					redirect('main/index');
				}
			}
			else {
				$this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Неверный логин или пароль!</div>');
				redirect('main/login');
			}
		}
	}
	public function reg()
	{
		$this->load->view('temp/head.php');
		if($this->session->userdata('id_role') == 1){
			$this->load->view('temp/navbar_student.php');
			redirect('main/index');
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
		}
		$this->load->model('model_groups');
		$this->load->view('reg.php');
		$this->load->view('temp/footer.php');
	}
	public function new_account(){
		if(!empty($_POST)){
			$login = $_POST['login'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			$this->load->model('model_users');
			$check = $this->model_users->check_login($login);
			if($check->num_rows() > 0){
				$this->session->set_flashdata('warning', 'Такой логин существует!');
				redirect('main/reg');
			}
			else {
				$this->model_users->create_user($login, $password, $email);
				redirect('main/login');
			}
		}
	}
	public function logout(){
		session_destroy();
		redirect('main/index');
	}
}
?>
