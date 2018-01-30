<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mdata');
		$this->load->helper(array('form', 'url','text'));
		$this->load->library(array('form_validation','session'));
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
		$data = array(
			'title' => "Sejarah Teknik Industri",
			'sejarah' => $this->Mdata->get_sejarah_ti()
		);

		$this->load->view('view_sejarah_ti', $data);
	}
	public function tentang_ti()
	{
		$data = array(
			'title' => "Tentang Teknik Industri",
			'sejarah' => $this->Mdata->get_sejarah_ti()
		);


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
		$data = array(
			'gallery' => $this->Mdata->get_gallery_kampus()->result(),
			'title' => "Gallery" );
	
		$this->load->view('view_gallery', $data);
	}
	public function alumni()
	{
		$data = array(
			'gallery' => $this->Mdata->get_alumni()->result(),
			'title' => "Alumni TI Swadharma",
			'kategori' => $this->Mdata->get_tahun()->result() );
	
		$this->load->view('view_alumni', $data);
	}

	function sendmessage(){
		$this->load->library('session');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$subject = $this->input->post('subject');
		$pesan = $this->input->post('pesan');

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'subject' => $subject,
			'pesan' => $pesan
		);

		$this->Mdata->input_data($data,'contactus');

		$this->session->set_flashdata('item','Your message has been sent. Thank you!'); 
		redirect('home/#contact');
	}

	public function programkerja()
	{
		$data = array('programkerja' => $this->Mdata->get_program_kerja(),
		'title' => 'Program Kerja' );

		$this->load->view('view_program_kerja', $data);
	}


	public function programkerja_detail($id = NULL)
	{

		$data['post'] = $this->Mdata->get_program_kerja($id);

		if (empty($data['post'])) {
			show_404();
		}
		$data['judul'] = $data['post']['judul'];
		$data['title'] = 'Program Kerja';
		
		$this->load->view('view_detail_program_kerja', $data);
	}



}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */