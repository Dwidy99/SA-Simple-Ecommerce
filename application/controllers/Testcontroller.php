<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testcontroller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('testview');
	}

}

/* End of file Testcontroller.php */
/* Location: ./application/controllers/Testcontroller.php */