<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLogin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index()
	{
		$this->load->view('Admin/login');
	}

	public function loginSubmit()
	{
		$valid = $this->form_validation;
		$valid->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
		$valid->set_rules('password', 'Password', 'trim|required|min_length[3]');

		if ($valid->run() == FALSE) {
			$this->load->view('Admin/Login');
		} else {
			$i 			= $this->input;
			$username 	= $i->post('username', true);
			$password 	= $i->post('password', true);

			$row = $this->db->get_where('admin_tbl', ['username' => $username])->row_array();

			if (password_verify($password, $row['password'])) {
				$session = $this->session;
				$session->set_userdata('usernameAdmin', $username);
				$session->set_flashdata('flash', 'Anda Berhasil Login!');
				redirect('AdminMain','refresh');
			} else {
				$this->session->set_flashdata('danger', 'Password atau Username Salah!');
				redirect('AdminLogin','refresh');
			}

		}
	}

	public function logout()
	{
		$session = $this->session;
		$session->sess_destroy();
		$session->set_flashdata('flash', 'Anda Berhasil Logout!');
		redirect('AdminLogin','refresh');
	}

}

/* End of file AdminLogin.php */
/* Location: ./application/controllers/AdminLogin.php */