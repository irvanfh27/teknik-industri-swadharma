<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mdata');
	}

	public function index()
	{
		$data = array(
			'title' => 'Teknik Industri',
			'home' => $this->Mdata->get_home_setting(),
			'struktur' => $this->Mdata->get_struktur_organisasi()
		);

		$this->load->view('view_home', $data);
	}
	public function sejarah_ti()
	{
		$data['title'] = "Sejarah Teknik Industri";
		$data['sejarah'] = $this->Mdata->get_sejarah_ti();

		$this->load->view('view_sejarah_ti', $data);
	}
	public function tentang_ti()
	{
		$data['title'] = "Tentang Teknik Industri";
		$data['sejarah'] = $this->Mdata->get_sejarah_ti();

		$this->load->view('view_tentang_ti', $data);
	}
	public function gallery_kegiatan()
	{
		$data['title'] = "Kegiatan Organisasi";
		$data['gallery'] = $this->Mdata->get_gallery_kegiatan();

		$this->load->view('view_kegiatan', $data);
	}
	public function gallery_kampus()
	{
		$this->load->model('Mdata');
		$data['gallery'] = $this->Mdata->get_gallery_kampus();
		$data['title'] = "Gallery";

		$this->load->view('view_gallery', $data);
	}


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */