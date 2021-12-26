<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		$this->load->view('body/navbar');
		$this->load->view('produk/produk');
		$this->load->view('body/footer');
	}

	public function registrasi()
	{
		$data['ambilprov'] = $this->User_model->ambilprovinsi();

		$valid = $this->form_validation;
		$valid->set_rules('nama', 'Nama', 'trim|required|min_length[4]|max_length[32]');
		$valid->set_rules('email', 'Email', 'required|valid_email|is_unique[ms_customer.customer_email]');
		$valid->set_rules('telepon', 'Telepon', 'trim|required|numeric|min_length[10]|max_length[12]');
		$valid->set_rules('alamat', 'Alamat', 'required|min_length[10]');
		$valid->set_rules('provinsi', 'Provinsi', 'required');
		$valid->set_rules('username', 'Username', 'required|min_length[3]|is_unique[ms_customer.customer_username]');
		$valid->set_rules('password', 'Password', 'required|min_length[3]');

		$valid->set_message('required', '{field} Mohon isi data dengan benar');
		$valid->set_message('valid_email', 'format {field} tidak benar');
		$valid->set_message('numeric', '{field} harus angka');
		$valid->set_message('is_unique', '{field} telah dipakai gunakan {field} lain.');

		if ($valid->run() == FALSE) {
			$load = $this->load;
			$load->view('body/navbar', $data);
			$load->view('registrasi_user/registrasi', $data);
			$load->view('body/footer');
		} else {
			$this->User_model->simpandatauser();
			$this->session->set_flashdata('flash', 'Pendaftaran berhasil. HAPPY SHOPPING!!');
			redirect('home','refresh');
		}

	}

	public function logout()
	{
		$session = $this->session;
		$session->unset_userdata('idAdmin');
		$session->unset_userdata('usernameAdmin');
		$session->unset_userdata('nameAdmin');
		$session->unset_userdata('emailAdmin');
		$session->unset_userdata('phoneAdmin');

		$session->set_flashdata('flash', 'Berhasil Logout');
		redirect('home','refresh');
	}

	public function profil()
	{
		if (!$this->session->userdata('uasername')) {
			$this->session->set_flashdata('flash', 'Login terlebih dahulu!');
			redirect('home','refresh');
		}
		$data['get_session'] = $this->User_model->get_session_login($this->session->userdata('id'));
		$data['ambilprov'] = $this->User_model->ambilprovinsi();

		$this->load->view('body/navbar', $data);
		$this->load->view('registrasi_user/profil_user', $data);
		$this->load->view('body/footer');
	}

	public function ubahProfil()
	{
		$session = $this->session;
		$id_customer 		= $session->userdata('customer_id');
		$username_session 	= $session->userdata('username');
		$email_session 		= $session->userdata('email');

		$input = $this->input;
		$nama 		= $input->post('nama', true);
		$telepon 	= $input->post('telepon', true);
		$alamat 	= $input->post('alamat', true);
		$provinsi 	= $input->post('provinsi', true);
		// $username = $this->input->post('username', true);

		$password1 = $input->post('password1', true);
		$password2 = $input->post('password2', true);

		// if($username !== $username_session) 
	 //    {
	 //      $is_username  = '|is_unique[ms_customer.customer_username]';
	 //    }
	 //    else
	 //    {
	 //      $is_username  = '';
	    // }

		$valid = $this->form_validation;
		$valid->set_rules('nama', 'Nama', 'trim|required|min_length[4]|max_length[32]');
		$valid->set_rules('telepon', 'Telepon', 'trim|required|numeric|min_length[10]|max_length[12]');
		$valid->set_rules('alamat', 'Alamat', 'required|min_length[10]');
		$valid->set_rules('provinsi', 'Provinsi', 'required');
		// $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]'.$is_username);

		if (!empty($password1) && !empty($password2)) {
			$valid->set_rules('password1', 'Password baru', 'matches[password2]|min_length[3]');
			$valid->set_rules('password2', 'Konfirmasi Password', 'min_length[3]');
		}

		if ($valid->run() == FALSE) {
			$data['get_session'] = $this->User_model->get_session_login($this->session->userdata('id'));
			$data['ambilprov'] = $this->User_model->ambilprovinsi();

			$this->load->view('body/navbar', $data);
			$this->load->view('registrasi_user/profil_user', $data);
			$this->load->view('body/footer');
		} else {
			$q = $this->db;
			if (!empty($password1)) {
				$q->set('customer_password', password_hash($password1, PASSWORD_DEFAULT));			
			}
			$q->set('customer_name', $nama);
			$q->set('customer_phone', $telepon);
			$q->set('provinsi', $provinsi,);
			$q->set('customer_address', $alamat);

			$this->db->update('ms_customer');
			$this->session->set_flashdata('flash', 'Data User Berhasil diUbah!');
			redirect('auth/profil','refresh');
		}
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */