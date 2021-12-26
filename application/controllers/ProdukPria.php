<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukPria extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Produk_model');
		$this->load->library('pagination');
	}

	public function index()
	{
		$config['base_url'] 		= base_url() . 'Produkpria';
		$config['per_page'] 		= 6;
		$config['uri_segment'] 		= 2;
		$config['total_rows'] 		= $this->Produk_model->getTotalProducts();

		$config['first_link'] 		= 'First';
		$config['first_tag_open'] 	= '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] 	= '</li></span>';

		$config['last_link'] 		= 'Last';
		$config['last_tag_open'] 	= '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] 	= '</span></li>';

		$config['next_link'] 		= '&raquo';
		$config['next_tag_open'] 	= '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] 	= '</li>';

		$config['prev_link'] 		= '&laquo';
		$config['prev_tag_open'] 	= '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] 	= '</li>';

		$config['full_tag_open'] 	= '<div class="pagging text-center"><nav><ul class="pagination" justify-content-center>';
		$config['full_tag_close'] 	= '</ul></nav></div>';

		$config['cur_tag_open'] 	= '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] 	= '<span class="sr-only">(current)</span></span></li>';

		$config['num_tag_open'] 	= '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] 	= '</span></li>';

		$this->pagination->initialize($config);
		$start = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
		$data['produk_data'] = $this->Produk_model->getAllTotalProducts($start, $config['per_page']);

		$this->load->view('body/navbar', $data);
		$this->load->view('produk/produk_pria', $data);
		$this->load->view('body/footer');
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */