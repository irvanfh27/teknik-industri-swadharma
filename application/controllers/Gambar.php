<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gambar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		/* Standard Libraries */
		$this->load->database();
		/* ------------------ */
		
		$this->load->helper('url'); //Just for the examples, this is not required thought for the library
		
		$this->load->library('image_CRUD');
	}
	
	function _example_output($output = null)
	{
		$data['role'] = $this->session->userdata('role');
		$this->load->view('halaman/login/admin/page/gallery/top', $output);                   
        $this->load->view('halaman/login/admin/item/menu', $data);
        $this->load->view('halaman/login/admin/item/panel' );
        $this->load->view('halaman/login/admin/page/gallery/index', $output);
        $this->load->view('halaman/login/admin/page/gallery/footer');
	}
	
	function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}	
	
	

	function list()
	{
		$image_crud = new image_CRUD();
	
		$image_crud->set_primary_key_field('id');
		$image_crud->set_url_field('url');
		$image_crud->set_title_field('title');
		$image_crud->set_deskripsi_field('deskripsi');
		$image_crud->set_table('gambar')
		->set_ordering_field('priority')
		->set_image_path('assets/uploads');
			
		$output = $image_crud->render();
	
		$this->_example_output($output);
	}
	

}