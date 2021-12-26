<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminData extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('AdminData_model');
	}

	public function index()
	{
		$admin 		= $this->session->userdata('usernameAdmin');

		$data['content_page']	= "Admin/home_content_admin_data";
		$data['adminData'] 		= $this->AdminData_model->detail($admin);

		$valid = $this->form_validation;
		$valid->set_rules('nama', 'Nama', 'required');
		$valid->set_rules('alamat', 'Alamat', 'required');

		if ($valid->run() == FALSE) {
			$this->load->view('Admin/index', $data);
		} else {
			$post 	= $this->input;
			$data 	= [
				"nama" 		=> $post->post('nama', true),
				"alamat" 	=> $post->post('alamat', true)
			];

			$this->db->where('username', $admin);
			$this->db->update('admin_tbl', $data);

			$this->session->set_flashdata('flash', 'Data Admin Berhasil Diupdate!');
			redirect('AdminData','refresh');
		}

	}

	public function password()
	{
		$admin 					= $this->session->userdata('usernameAdmin');
		$data['content_page']	= "Admin/home_content_admin_password";
		$data['adminData'] 		= $this->AdminData_model->detail($admin);

		$valid = $this->form_validation;
		$valid->set_rules('password_lama', 'Password lama', 'required');
		$valid->set_rules('password_baru', 'Password baru', 'required|min_length[3]|matches[konfirmasi_password]');
		$valid->set_rules('konfirmasi_password', 'Konfirmasi password', 'required');

		if ($valid->run() == FALSE) {
			$this->load->view('Admin/index', $data);
		} else {
			$post 	= $this->input;
			$password_lama 			= $post->post('password_lama', true);
			$password_baru 			= $post->post('password_baru', true);
			$konfirmasi_password 	= $post->post('konfirmasi_password', true);

			$row = $this->db->get_where('admin_tbl', ['username' => $admin])->row_array();

			if (password_verify($password_lama, $row['password'])) {
				if ($password_baru == $konfirmasi_password) {
					$password = password_hash($password_baru, PASSWORD_DEFAULT);

					$db = $this->db;
					$db->set('password', $password);
					$db->where('username', $admin);
					$db->update('admin_tbl');

					$this->session->set_flashdata('flash', 'Password Admin Berhasil Diupdate!');
					redirect('AdminData/password','refresh');
				} else {
					$this->session->set_flashdata('danger', 'Password baru tidak sama dengan Konfirmasi Password!');
					redirect('AdminData/password','refresh');					
				}
			} else {
				$this->session->set_flashdata('danger', 'Password lama salah!');
				redirect('AdminData/password','refresh');
			}

		}
	}

}

/* End of file AdminData.php */
/* Location: ./application/controllers/AdminData.php */