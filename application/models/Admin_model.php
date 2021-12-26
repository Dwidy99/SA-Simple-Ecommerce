<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	// belum dipake
	public function checklogin($username, $password)
	{
		return $this->db->get_where('admin_tbl', ['username' => $username, 'password' => md5($password)])->num_rows();
	}

	public function produk()
	{
		return $this->db->select('*')
						->from('ms_tshirt')
						->join('ms_brand', 'ms_brand.brand_id = ms_tshirt.brand_id', "LEFT")
						->order_by('ms_tshirt.id', 'DESC')
						->get()
						->result_array();
	}

	public function delete($id=null)
	{
		if ($id=null) {redirect('AdminMain','refresh');}
		
		$row = $this->db->get_where('ms_tshirt', ['id' => $id])->row_array();
		if ($row['tshirt_image'] != null) {
			if (file_exists(FCPATH."assets/images/".$row['tshirt_image'])) {
				unlink("assets/images/".$row['tshirt_image']);
			}
		}
		$this->db->where('id', $id)
				 ->delete('ms_tshirt');
	}

	public function ambilbrand()
	{
		return $this->db->select('*')->from('ms_brand')->order_by("brand_name", "ASC")->get()->result_array();
	}

	public function simpan_data_produk($data)
	{
		$this->db->insert('ms_tshirt', $data);
	}

	public function edit_produk($id=null)
	{
		return $this->db->select('*')
						 ->from('ms_tshirt')
						 ->join('ms_brand', 'ms_brand.brand_id = ms_tshirt.brand_id', "LEFT")
						 ->where('ms_tshirt.id', $id)
						 ->get()->row_array();
	}

	public function ubahDataProduk($data)
	{
		$row = $this->db->get_where('ms_tshirt', ['id' => $data['id']])->row_array();
		if ($row['tshirt_image'] != null) {
			if (file_exists(FCPATH."assets/images/".$row['tshirt_image'])) {
				unlink("assets/images/".$row['tshirt_image']);
			}
		}
		$this->db->where('id', $data['id'])->update('ms_tshirt', $data);
	}

	public function data_jual()
	{
		return $this->db->select('tr_order.*,
											ms_tshirt.tshirt_image, ms_tshirt.tshirt_name')
					  	->from('tr_order')
						->join('tbl_detail_order', 'tbl_detail_order.pesanan_id = tr_order.order_id', 'LEFT')
						->join('ms_tshirt', 'ms_tshirt.id = tbl_detail_order.id', 'LEFT')
						->order_by('tr_order.order_id', 'DESC')
						->get()->result_array();
	}

	public function data_jualById($order_id)
	{
		return $this->db->select('tr_order.*,
											ms_tshirt.tshirt_image, ms_tshirt.tshirt_name')
					  	->from('tr_order')
						->join('tbl_detail_order', 'tbl_detail_order.pesanan_id = tr_order.order_id', 'LEFT')
						->join('ms_tshirt', 'ms_tshirt.id = tbl_detail_order.id', 'LEFT')
						->where('tr_order.order_id', $order_id)
						->get()->row_array();
	}

	public function datajual_hapus($id)
	{
		$this->db->where('order_id', $id)->delete('tr_order');
		$this->db->where('pesanan_id', $id)->delete('tbl_detail_order');
	}

	public function data_bayar()
	{
		return $this->db->get('pembayaran')->result_array();
	}

	public function data_bayarById($id)
	{
		return $this->db->select('*')
					  	->from('pembayaran')
						->where('pembayaran.id_pembayaran', $id)
						->get()->row_array();
	}

	public function databayar_hapus($id)
	{
		$row = $this->db->get_where('pembayaran', ['id_pembayaran' => $id])->row_array();
		if ($row['gambar_transper'] != null) {
			if (file_exists(FCPATH."assets/images/".$row['gambar_transper'])) {
				unlink("assets/images/".$row['gambar_transper']);
			}
		}

		$this->db->where('id_pembayaran', $id)->delete('pembayaran');
	}

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */