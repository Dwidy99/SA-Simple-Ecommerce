<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BrandProdukTampil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Produk_model');
	}

	public function index()
	{
		$keyword = $this->input->post('search');
		$data['data_kategori'] 	= $this->Produk_model->kategori();
		$data['cari_produk'] 	= $this->Produk_model->cari_data_produk($keyword);

		$this->load->view('body/navbar', $data);
		$this->load->view('produk/pencarian_produk', $data);
		$this->load->view('body/footer');
	}

	public function tampilkanKategori($brand_name='')
	{
		$data['data_kategori'] = $this->Produk_model->kategori();
		$data['kategoribrand'] = $this->Produk_model->tampilKategori($brand_name);

		$this->load->view('body/navbar', $data);
		$this->load->view('produk/kategori_view', $data);
		$this->load->view('body/footer');
	}

}

/* End of file BrandProduk_tampil.php */
/* Location: ./application/controllers/BrandProduk_tampil.php */