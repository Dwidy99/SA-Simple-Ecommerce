<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari_produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Produk_model');
	}

	public function search()
	{
		$keyword = $this->input->post('search');
		$data['data_kategori'] 	= $this->Produk_model->kategori();
		$data['cari_produk'] 	= $this->Produk_model->cari_data_produk($keyword);

		$this->load->view('body/navbar', $data);
		$this->load->view('produk/pencarian_produk', $data);
		$this->load->view('body/footer');
	}



}

/* End of file Cari_produk.php */
/* Location: ./application/controllers/Cari_produk.php */