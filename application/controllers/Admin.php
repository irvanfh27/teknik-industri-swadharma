<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		
	}

	public function dashboard()
	{
		$this->load->view('admin/view_admin_dashboard');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */