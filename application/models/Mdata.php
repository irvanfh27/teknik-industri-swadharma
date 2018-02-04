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

	public function get_program_kerja($id = FALSE)
	{

		if ($id === FALSE) {
			$query = $this->db->get('program_kerja');
			return $query->result_array();
		}

		$query = $this->db->get_where('program_kerja', array('slug' => $id));

		return $query->row_array();
	}

	// public function get_detail_program_kerja($id)
	// {
	// 	$this->db->where('id',$id);
	// 	$query=$this->db->get('program_kerja');
	// 	return $query->result();
	// }

}

/* End of file Mdata.php */
/* Location: ./application/models/Mdata.php */