<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminMain extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index()
	{
		$data['content_page']	    = "Admin/home_content_admin";
		$data['produk'] 			= $this->Admin_model->produk();
		$this->load->view('Admin/index', $data);
	}

	public function hapus($id=null)
	{
		if (!$this->session->userdata('usernameAdmin')) {redirect('AdminLogin','refresh');}
		if ($id==NULL){$this->session->set_flashdata('danger', 'Data Belum Dipilih!');redirect('AdminMain/tampil_datajual','refresh'); exit;}

		$data['content_page'] 	 = 'Admin/home_content_admin';
		if ($id=null) {redirect('AdminMain','refresh');}

		$data['produk']          = $this->Admin_model->delete($id);
		$this->load->view('Admin/index', $data);
	}

	public function addproduk()
	{
		$data['cetakbrand']    = $this->Admin_model->ambilbrand();
		$data['content_page']  = "Admin/Tambah_produk";
		$this->load->view('Admin/index', $data);
	}

	public function simpan_produk()
	{
		$config['upload_path']      = './assets/images';
		$config['allowed_types']    = 'gif|jpg|png';
		$config['max_size']         = '40000';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload("tshirt_image");
		$data 	= $this->upload->data();

		$gambar = $data['file_name'];

		$i 		= $this->input;
		$data 	= [
			'tshirt_name' 		    => $i->post('tshirt_name', true),
			'sluga'					=> url_title($i->post('sluga', true), 'dash', true) ,
			'tshirt_price' 		    => $i->post('tshirt_price', true),
			'harga_coret' 			=> $i->post('harga_coret', true),
			'product_description' 	=> $i->post('produk_description', true),
			'create_date'			=> date('Y-m-d H:i:s'),
			'tshirt_image'			=> $gambar,
			'brand_id'				=> $i->post('brand_id')
		];

		$this->Admin_model->simpan_data_produk($data);

		$this->session->set_flashdata('flash', 'Data Berhasil Di Tambahkan');
		redirect('AdminMain','refresh');
	}

	public function editproduk($id=null)
	{
		if (!$this->session->userdata('usernameAdmin')) {redirect('AdminLogin','refresh');}
		if ($id==NULL){$this->session->set_flashdata('danger', 'Data Belum Dipilih!');redirect('AdminMain/tampil_datajual','refresh'); exit;}

		$data['cetakbrand']       = $this->Admin_model->ambilbrand();
		$data['data_produk']      = $this->Admin_model->edit_produk($id);
		$data['content_page']     = "Admin/ubah_dataproduk";
		$this->load->view('Admin/index', $data);
	}

	public function simpaneditproduk()
	{
		$i 						= $this->input;
		$id 					= $i->post('id', true);
		$tshirt_name 			= $i->post('tshirt_name', true);
		$sluga 					= url_title($i->post('sluga', true), 'dash', true);
		$tshirt_price			= $i->post('tshirt_price', true);
		$harga_coret			= $i->post('harga_coret', true);
		$brand_id 				= $i->post('brand_id', true);
		$produk_description 	= $i->post('produk_description', true);
		// validasi
		$valid = $this->form_validation;
		$valid->set_rules('tshirt_name', 'Nama Produk', 'required');
		$valid->set_rules('sluga', 'Slug', 'required');
		$valid->set_rules('tshirt_price', 'Harga Produk', 'required|numeric');
		$valid->set_rules('harga_coret', 'Harga Coret', 'required|numeric');
		$valid->set_rules('brand_id', 'Nama Brand', 'required');
		$valid->set_rules('produk_description', 'Deskripsi Produk', 'required');

		if ($valid->run() == FALSE) {
			$data['content_page']   = "Admin/ubah_dataproduk";
			$data['data_produk']    = $this->Admin_model->edit_produk($id);
			$data['cetakbrand']     = $this->Admin_model->ambilbrand();

			$this->session->set_flashdata('danger', 'Data Gagal Di Tambahkan');
			$this->load->view('Admin/index', $data);
		} else {
			$config['upload_path']      = './assets/images';
			$config['allowed_types']    = 'gif|jpg|png';
			$config['max_size']         = '40000';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload("tshirt_image");
			$data 	= $this->upload->data();

			$gambar = $data['file_name'];

			$data 	= [
				'id'					=> $id,
				'tshirt_name' 		    => $tshirt_name,
				'sluga'					=> $sluga,
				'tshirt_price' 		    => $tshirt_price,
				'harga_coret' 			=> $harga_coret,
				'product_description' 	=> $produk_description,
				'tshirt_image'			=> $gambar,
				'brand_id'				=> $brand_id
			];

			$this->Admin_model->ubahDataProduk($data);
			
			$data['content_page'] 	= 'Admin/home_content_admin';
			$data['produk'] 		= $this->Admin_model->produk();

			$this->session->set_flashdata('flash', 'Data Berhasil Di Tambahkan');
			redirect('AdminMain','refresh');
		}
	}

	public function tampil_datajual()
	{
		$data['content_page']	= "Admin/data_penjualan";
		$data['datajual']		= $this->Admin_model->data_jual();
		$this->load->view('Admin/index', $data);
	}

	public function edit_datajual($order_id=null)
	{
		if (!$this->session->userdata('usernameAdmin')) {redirect('AdminLogin','refresh');}
		if ($order_id==NULL){$this->session->set_flashdata('danger', 'Data Belum Dipilih!');redirect('AdminMain/tampil_datajual','refresh'); exit;}

		$data['data_pembeli']     = $this->Admin_model->data_jualById($order_id);
		$data['content_page']     = "Admin/ubah_datajual";

		$this->form_validation->set_rules('status', 'Status Pembayaran', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Admin/index', $data);
		} else {
			$data = [
				"order_id" 	=> $this->input->post('id', true),
				"status" 	=> $this->input->post('status', true)
			];

			$this->db->where('order_id', $data['order_id']);
			$this->db->update('tr_order', $data);

			$this->session->set_flashdata('flash', 'Data Penjualan Berhasil Diupdate');
			redirect('AdminMain/tampil_datajual','refresh');
		}
	}

	public function hapus_datajual($id=null)
	{
		if (!$this->session->userdata('usernameAdmin')) {redirect('AdminLogin','refresh');}
		if ($id==NULL){$this->session->set_flashdata('danger', 'Data Belum Dipilih!');redirect('AdminMain/tampil_datajual','refresh'); exit;}

		$this->Admin_model->datajual_hapus($id);
		$this->session->set_flashdata('flash', 'Data Penjualan Berhasil Dihapus');
		redirect('AdminMain/tampil_datajual','refresh');
	}

	public function tampil_databayar()
	{
		$data['content_page'] 	= "Admin/data_pembayaran";
		$data['databayar'] 		= $this->Admin_model->data_bayar();
		$this->load->view("Admin/index", $data);	
	}

	public function edit_databayar($id=null)
	{
		if (!$this->session->userdata('usernameAdmin')) {redirect('AdminLogin','refresh');}
		if ($id==NULL){$this->session->set_flashdata('danger', 'Data Belum Dipilih!');redirect('AdminMain/edit_databayar','refresh'); exit;}

		$data['data_bayar']     = $this->Admin_model->data_bayarById($id);
		$data['content_page']   = "Admin/ubah_datapembayaran";

		$valid = $this->form_validation;
		$valid->set_rules('nama_pemesan', 'Nama Pemesan', 'trim|required');
		$valid->set_rules('no_invoice', 'Status Pembayaran', 'trim|required|numeric');
		$valid->set_rules('jmlh_transper', 'Jumlah Transfer', 'trim|required|numeric');

		if ($valid->run() == FALSE) {
			$this->load->view('Admin/index', $data);
		} else {
			$post 	= $this->input;
			$data 	= [
				"customer_username" => $post->post('nama_pemesan', true),
				"no_invoice" 		=> $post->post('no_invoice', true),
				"jmlh_transper"		=> $post->post('jmlh_transper', true)
			];

			$this->db->where('id_pembayaran', $id);
			$this->db->update('pembayaran', $data);

			$this->session->set_flashdata('flash', 'Data Pembayaran Berhasil Diupdate');
			redirect('AdminMain/tampil_databayar','refresh');
		}
	}

	public function hapus_databayar($id=null)
	{
		if (!$this->session->userdata('usernameAdmin')) {redirect('AdminLogin','refresh');}
		if ($id==NULL){$this->session->set_flashdata('danger', 'Data Belum Dipilih!');redirect('AdminMain/tampil_databayar','refresh'); exit;}

		$this->Admin_model->databayar_hapus($id);
		$this->session->set_flashdata('flash', 'Data Pembayaran Berhasil Dihapus');
		redirect('AdminMain/tampil_databayar','refresh');
	}

	public function cetak()
	{
		$data['datajual'] = $this->Admin_model->data_jual();
		$this->load->view('Admin/laporan_excel', $data);
	}

	public function cetakPembayaran()
	{
		$data['databayar'] = $this->Admin_model->data_bayar();
		$this->load->view("Admin/laporanpembayaran_excel", $data);
	}

}

/* End of file AdminMain.php */
/* Location: ./application/controllers/AdminMain.php */