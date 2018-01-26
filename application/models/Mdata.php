<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdata extends CI_Model {

	function get_gallery_kegiatan(){
		$query = $this->db->query('SELECT * FROM gallery_kegiatan');
		return $query;
	}

	
	function get_gallery_kampus(){
		// $query = $this->db->query('SELECT * FROM gallery_kampus');
		return $this->db->get('gallery_kampus');
	}

	function get_alumni(){
		// $query = $this->db->query('SELECT * FROM gallery_kampus');
		return $this->db->get('alumni');
	}

	public function get_tahun()		
	{

		$this->db->distinct();

		$this->db->select('tahun');

		$query = $this->db->get('alumni');

		return $query;
	}


	function get_home_setting(){
		$this->db->select('*');
		$this->db->from('home_setting');
		$query=$this->db->get();
		return $query->result();
	}

	function get_sejarah_ti(){
		$this->db->select('*');
		$this->db->from('teknik_industri');
		$query=$this->db->get();
		return $query->result();
	}

	function get_struktur_organisasi(){
		$this->db->select('*');
		$this->db->from('struktur_organisasi');
		$query=$this->db->get();
		return $query->result();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

}

/* End of file Mdata.php */
/* Location: ./application/models/Mdata.php */