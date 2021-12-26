<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('array');
		$this->load->helper('url');
	}

	public function produk_pria() 
	{
		$status = 'pria';

		$this->db->select('*');
		$this->db->from('ms_tshirt');
		$this->db->join('ms_brand', 'ms_brand.brand_id = ms_tshirt.brand_id', 'left');
		$this->db->where('brand_name', $status);
		return $this->db->limit(8)->get()->result_array();
	}

	public function get_detail_produk($slug)
	{
		$this->db->select('*');
		$this->db->from('ms_tshirt');
		$this->db->join('ms_brand', 'ms_brand.brand_id = ms_tshirt.brand_id', 'left');
		$this->db->where('sluga', $slug);
		return $this->db->get();
	}

	public function cari_data_produk($keyword)
	{
		$this->db->select('*');
		$this->db->from('ms_tshirt');
		$this->db->like('tshirt_name', $keyword);
		$this->db->or_like('tshirt_price', $keyword);
		return $this->db->get()->result_array();
	}

	public function kategori()
	{
		$this->db->select('*');
		$this->db->from('ms_brand');
		$this->db->order_by('brand_name', 'asc');
		return $this->db->get()->result_array();
	}

	public function tampilKategori($brand_name)
	{
		$this->db->select('*');
		$this->db->from('ms_tshirt');
		$this->db->join('ms_brand', 'ms_brand.brand_id = ms_tshirt.brand_id', 'left');
		$this->db->where('brand_name', $brand_name);
		return $this->db->get()->result_array();
	}

	public function getTotalProducts()
	{
		return $this->db->get('ms_tshirt')->num_rows();
	}

	public function getAllTotalProducts($start=0, $limit=0)
	{
		if ($limit > 0) {
			// $this->db->select('ms_tshirt.*, ms_brand.brand_name');
			// $this->db->from('ms_tshirt');
			// $this->db->join('ms_brand', 'ms_brand.brand_id = ms_tshirt.brand_id', 'left');
			// $this->db->order_by('ms_tshirt.id', 'ASC');
			// $this->db->limit($start, $limit);
			// $query = $this->db->get();
			// return $query->result();

			$sql = "SELECT ms_tshirt.*, ms_brand.brand_name 
			FROM ms_tshirt 
			INNER JOIN ms_brand 
			ON ms_tshirt.brand_id = ms_brand.brand_id
			LIMIT " . $start . "," . $limit;
			$query = $this->db->query($sql);
			return $query->result_array();
		} else {
			return null;
		}
	}

	// blom dipake wkwk
	public function checklogin($username, $password)
	{
		return $this->db->get_where('ms_customer', ['customer_username' => $username, 'customer_password' => $password])->num_rows();
	}
}

/* End of file Produk_model.php */
/* Location: ./application/models/Produk_model.php */