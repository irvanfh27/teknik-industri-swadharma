<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = "Teknik Industri";
		$this->load->view('view_home', $data);
	}
	public function sejarah_ti()
	{
		$data['title'] = "Sejarah Teknik Industri";
		$this->load->view('view_sejarah_ti', $data);
	}
	public function tentang_ti()
	{
		$data['title'] = "Tentang Teknik Industri";
		$this->load->view('view_tentang_ti', $data);
	}
	public function kegiatan()
	{
		$data['title'] = "Kegiatan Organisasi";
		$this->load->view('view_kegiatan', $data);
	}
	public function gallery()
	{
		$this->load->model('Mdata');
		$data['gallery'] = $this->Mdata->get_gallery();
		$data['title'] = "Gallery";

		$this->load->view('view_gallery', $data);
	}


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */