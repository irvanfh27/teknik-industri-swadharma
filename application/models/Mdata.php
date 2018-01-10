<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdata extends CI_Model {

	function get_gallery(){
	  $query = $this->db->query('SELECT * FROM gambar');
    return $query;
	}

}

/* End of file Mdata.php */
/* Location: ./application/models/Mdata.php */