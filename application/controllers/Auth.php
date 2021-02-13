<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_auth','auth');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('form');
		
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false ) {
			$data['title'] = "Login Page";
			$this->load->view('auth/login', $data, FALSE);
		} else {
			$this->login();
		}
	}

	public function regis()
	{
		$this->form_validation->set_rules('first_name', 'Nama Awalan', 'trim|required|max_length[20]');
		$this->form_validation->set_rules('last_name', 'Nama Akhiran', 'trim|required|max_length[20]');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('confirm_password', 'Password Confirm', 'trim|required|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		if ($this->form_validation->run() == TRUE ) {
			$f_name = $this->input->post('first_name');
			$l_name = $this->input->post('last_name');
			$fullname = $f_name.' '.$l_name;

			$data = [
				'nama' => $fullname,
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('confirm_password')),
				'email' => $this->input->post('email'),
				'active' => 1
			];
			$this->session->set_flashdata('success', 'success');
			$this->auth->sign_up($data);
			redirect('auth/regis');		
		} else {
			$data['title'] = "Register Page";
			$this->load->view('auth/register',$data);
		}
	}

	private function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->db->get_where('tbl_user',['username' => $username])->row();
		if ($user) {
			#1
			if (substr(md5($password),0,15) == $user->password ) {
				#2
				$data = [
					'user' => $user->nama,
					'last_login' => date('d-m-Y h:i')
				];
				$this->session->set_userdata($data);
				$this->session->set_flashdata('login_success', 'Login success');
				redirect('admin','refresh');
			} else {
				$this->session->set_flashdata('login_failure', 'Login failed');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('usernotfound', 'not found');
			redirect('auth','refresh');
		}
	}

	public function logout($value='')
	{
		
	}



}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */