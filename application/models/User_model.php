<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function ambilprovinsi()
	{
		return $this->db->get('propinsi')->result_array();;
	}

	public function simpandatauser()
	{
		$data = [
			'customer_name' 		=> $this->input->post('nama', true),
			'customer_email' 		=> $this->input->post('email', true),
			'customer_phone' 		=> $this->input->post('telepon', true),
			'customer_address' 		=> $this->input->post('alamat', true),
			'provinsi'		 		=> $this->input->post('provinsi', true),
			'customer_username' 	=> $this->input->post('username', true),
			'customer_password' 	=> password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
			'create_date' 			=> date('Y-m-d H:i:s')
		];

		$this->db->insert('ms_customer', $data);
	}

	public function get_session_login($id_customer)
	{
		return $this->db->get_where('ms_customer', ['customer_id' => $id_customer])->row_array();
	}

	public function simpan_data_pesanan($data)
	{
		$this->db->insert('tr_order', $data);
		$id_data = $this->db->insert_id();
		return (isset($id_data)) ? $id_data : FALSE;
	}

	public function simpan_detail_pesanan($data)
	{
		$this->db->insert('tbl_detail_order', $data);
	}

	public function selesaikanbelanja()
	{
		$session = $this->session->userdata('username');
		$this->db->select('*');
		$this->db->from('tr_order');
		$this->db->join('tbl_detail_order', 'tbl_detail_order.pesanan_id = tr_order.order_id');
		$this->db->join('ms_tshirt', 'tbl_detail_order.id = ms_tshirt.id');
		$this->db->where('customer_username', $session);
		$this->db->where('status', 'belum');
		return $this->db->get()->result_array();
	}

	public function validation_pembayaran($simpan)
	{
		if ($simpan == "save") 
			$this->form_validation->set_rules('input_pengirim', 'Nama Pemilik', 'required');
			$this->form_validation->set_rules('input_invoice', 'Nama Pemilik', 'required|numeric');
			$this->form_validation->set_rules('input_pengirim', 'Nama Pemilik', 'required');

		if ($this->form_validation->run()) 
			return true;
		else 
			return false;
	}

	public function save_pembayaran($gambar)
	{
		$data = [
			"customer_username" 		=> $this->input->post("input_pengirim"),
			"no_invoice" 						=> $this->input->post("input_invoice"),
			"jmlh_transper" 				  => $this->input->post("input_jumlah"),
			"gambar_transper"			  => $gambar,
			"tanggal_transper" 			=> date('Y-m-d H:i:s')
		];

		$this->db->insert('pembayaran', $data);
		$this->session->set_flashdata('flash', 'Berhasil mengirim bukti pembayaran!');
		redirect('home/data_belanja');
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */