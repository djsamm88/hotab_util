<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

	class M_ikk extends CI_Model {
		
		function __construct() {
			parent::__construct();
		
			$this->load->helper('custom_func');
		}




	public function tambah_ikk($serialize)
	{
		$this->db->set($serialize);
		$this->db->insert('tbl_ikk');
	}



	public function update_ikk($serialize,$id)
	{
		$this->db->set($serialize);
		$this->db->where('id',$id);
		$this->db->update('tbl_ikk');
	}




	public function tambah_trx($serialize)
	{
		$this->db->set($serialize);
		$this->db->insert('ikk_trx');
	}



	public function update_trx($serialize,$id)
	{
		$this->db->set($serialize);
		$this->db->where('id_ikk',$id);
		$this->db->update('ikk_trx');
	}

}