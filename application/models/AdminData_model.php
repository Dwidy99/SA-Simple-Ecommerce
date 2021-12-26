<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminData_model extends CI_Model {

	public function detail($admin)
	{
		return $this->db->get_where('admin_tbl', ['username' => $admin])->row_array();
	}

}

/* End of file AdminData_model.php */
/* Location: ./application/models/AdminData_model.php */