<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function checkoutfunction()
	{
		if (!$this->session->userdata('username')) {
			$this->session->set_flashdata('flash', 'Login terlebih dahulu!');
			redirect('home','refresh');
		}
		if (count($this->cart->contents()) == null) {
			$this->session->set_flashdata('flash', 'Keranjang Belanja Masih kosong!!');
			redirect('home/data_belanja','refresh');
		}
		
		$data['get_data_konsumen'] = $this->User_model->get_session_login($this->session->userdata('username'));
		
		$this->load->view('body/navbar', $data);
		$this->load->view('data_keranjang/checkout_view', $data);
		$this->load->view('body/footer');
	}

	public function get_provinsi()
	{
		$provinces = $this->rajaongkir->province();
		$this->output->set_content_type('aplication/json')->set_output($provinces);
	}

	public function get_kota($id_provinsi)
	{
		$kota = $this->rajaongkir->city($id_provinsi);
		$this->output->set_content_type('aplication/json')->set_output($kota);
	}

	public function get_ongkir($asal, $tujuan, $berat, $kurir)
	{
		$ongkir = $this->rajaongkir->cost($asal, $tujuan, $berat, $kurir);
		$this->output->set_content_type('aplication/json')->set_output($ongkir);
	}

	public function simpan_pesanan()
	{
		$session 		= $this->session->userdata('username');
		$kota 			= $this->input->get('kota', true);
		$kurir 			= $this->input->get('kurir', true);
		$service 		= $this->input->get('service', true);
		$total 			= $this->input->get('total', true);
		$kodepos 		= $this->input->get('kodepos', true);
		$alamat 		= $this->input->get('alamat', true);
		$tgl_pesanan	= date("Y-m-d");
		$bts			= date("Y-m-d", mktime(0,0,0, date("m"), date("d") + 2, date("Y")));
		
		$data_order 	= [
			'customer_username' => $session,
			'total'				=> $total,
			'kota'				=> $kota,
			'kurir'				=> $kurir,
			'service'			=> $service,
			'kodepos'			=> $kodepos,
			'alamat'			=> $alamat,
			'tgl_pesan'			=> $tgl_pesanan,
			'bts_bayar'			=> $bts,
			'status'			=> 'belum',
		];
		$id_order = $this->User_model->simpan_data_pesanan($data_order);

		if ($cart = $this->cart->contents()) {
			foreach ($cart as $item ) {
				$data_detail = ['pesanan_id' => $id_order, 'id' => $item['id'], 'qty' => $item['qty'], 'total_harga' => $item['price']];
				$simpan = $this->User_model->simpan_detail_pesanan($data_detail);
			}
		}

		$this->cart->destroy();
		$this->load->view('body/navbar');
		$this->load->view('data_keranjang/checkout_view');
		$this->load->view('body/footer');
		$this->cart->destroy();
		$this->session->set_flashdata('flash', 'Keranjang kosong');
		redirect('home/data_belanja','refresh');
	}

	public function selesaikan_pembayaran()
	{
		if (!$this->session->userdata('username')) {
			$this->session->set_flashdata('flash', 'Login terlebih dahulu!');
			redirect('home','refresh');
		}
		
		$data['data_pembayaran'] = $this->User_model->selesaikanbelanja($this->session->userdata('username'));
		$this->load->view('body/navbar', $data);
		$this->load->view('data_keranjang/data_orderberhasil', $data);
		$this->load->view('body/footer');
		$this->cart->destroy();
		$this->session->set_flashdata('flash', 'Selesaikan Pesanannya');
	}

	public function cetak_invoice()
	{
		$data['data_pembayaran'] = $this->User_model->selesaikanbelanja($this->session->userdata('username'));
		$this->load->view('data_keranjang/cetak_invoice', $data);
	}

	public function upload_bukti_pembayaran()
	{
		if (!$this->session->userdata('username')) {
			$this->session->set_flashdata('flash', 'Login terlebih dahulu!');
			redirect('home','refresh');
		}
		$data['get_data_konsumen'] = $this->User_model->get_session_login($this->session->userdata('username'));
		$this->load->view('body/navbar', $data);
		$this->load->view('data_keranjang/upload_bukti_bayar', $data);
		$this->load->view('body/footer');
	}

	public function Simpanbayar()
	{
		$config['upload_path'] 		= './assets/images';
		$config['allowed_types'] 	= 'gif|jpg|png';
		$config['max_size']  		= '40000';
		
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload("input_gambar");
		$data = $this->upload->data();

		$gambar = $data['file_name'];
		
		if ( $simpan = $this->input->post("submit")){
			if ($this->User_model->validation_pembayaran("save_pembayaran")) {
				$this->User_model->save_pembayaran($gambar);
				redirect('home','refresh');
			}
		}
	}

}

/* End of file Checkout.php */
/* Location: ./application/controllers/Checkout.php */