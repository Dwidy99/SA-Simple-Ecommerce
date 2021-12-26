<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Produk_model');
	}

	public function index()
	{
		$data['men'] = $this->Produk_model->produk_pria();

		$this->load->view('body/navbar', $data);
		$this->load->view('produk/produk', $data);
		$this->load->view('body/footer');
	}

	public function detail_barang($slug)
	{
		$apaaja = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['detail'] = $this->Produk_model->get_detail_produk($slug)->row_array();

		$this->load->view('body/navbar', $data);
		$this->load->view('produk/detail_produk', $data);
		$this->load->view('body/footer');
	}

	public function beli()
	{
		if (!$this->session->userdata('username')) {
			$this->session->set_flashdata('flash', 'Registrasi Akun dahulu!');
			redirect('auth/registrasi','refresh');
		}
		$data = [
			'id' 		=> $this->input->post('id', true),
			'qty'		=> $this->input->post('qty', true),
			'price'		=> $this->input->post('tshirt_price', true),
			'name'		=> $this->input->post('tshirt_name', true),
			'img'		=> $this->input->post('tshirt_image', true)
		];
		[
			'id' 		=> $this->input->post('id', true),
			'qty'		=> $this->input->post('qty', true),
			'price'		=> $this->input->post('tshirt_price', true),
			'name'		=> $this->input->post('tshirt_name', true),
			'img'		=> $this->input->post('tshirt_image', true)
		];
		$this->cart->insert($data);
		$this->session->set_flashdata('flash', 'Berhasil ditambahkan ke keranjang');
		redirect('home','refresh');
	}

	public function data_belanja()
	{
		$this->load->view('body/navbar');
		$this->load->view('data_keranjang/tampil_cart');
		$this->load->view('body/footer');
	}

	public function hapusdatabelanja($id)
	{
		if ($id = "semua") {
			$this->cart->destroy();
		}
		$data = [
			'rowid' => $id,
			'qty' => 0
		];

		$this->cart->update($data);
		$this->session->set_flashdata('flash', 'Berhasil dihapus ke keranjang');
		redirect('home/data_belanja','refresh');
	}

	public function ubah_belanja()
	{
		$cartbelanja 	= $this->input->post('cart');
		foreach ($cartbelanja as $id => $cart) {
			$rowid 		= $cart['rowid'];
			$price 		= $cart['price'];
			$gambar 	= $cart['tshirt_image'];
			$jumlah 	= $price * $cart['qty'];
			$qty 		= $cart['qty'];
			
			$data = ['rowid' => $rowid, 'price' => $price, 'gambar' => $gambar, 'amount' => $jumlah, 'qty' => $qty];
			$this->session->set_flashdata('flash', 'Berhasil diubah');
			$this->cart->update($data);
		}
		redirect('home/data_belanja','refresh');
	}

	public function loginSubmit()
	{
		$data['pria'] = $this->Produk_model->produk_pria();
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('body/navbar', $data);
			$this->load->view('produk/produk', $data);
			$this->load->view('body/footer');
		} else {
			$username 	= $this->input->post('username');
			$password 	= $this->input->post('password');

			$user_data 	= $this->db->get_where('ms_customer', ['customer_username' => $username])->row_array();

			if ($user_data) {

				if (password_verify($password, $user_data['customer_password'])) {
					$session = $this->session;
					$session->set_userdata('id', $user_data['customer_id']);
					$session->set_userdata('username', $user_data['customer_username']);
					$session->set_userdata('name', $user_data['customer_name']);
					$session->set_userdata('email', $user_data['customer_email']);
					$session->set_userdata('phone', $user_data['customer_phone']);
					$session->set_userdata('address', $user_data['customer_address']);
					$session->set_userdata('provinsi', $user_data['provinsi']);

					$session->set_flashdata('flash', 'Login Berhasil, HAPPY SHOPPING!!');
					redirect('home','refresh');
				} else {
					$this->session->set_flashdata('flash', 'Password salah!');
					redirect('home','refresh');
				}
			} else {
				$this->session->set_flashdata('flash', 'Username salah!');
				redirect('home','refresh');
			}

		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */