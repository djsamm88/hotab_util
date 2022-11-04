<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

	class M_water extends CI_Model {
		
		function __construct() {
			parent::__construct();
		
			$this->load->helper('custom_func');
		}

	


	public function uniq_meter()
	{
		$q = "SELECT Device_ID FROM flowmeter_water GROUP BY Device_ID";
		return $this->db->query($q)->result();
	}

	public function m_real_data()
	{
		$q = "SELECT * FROM ( SELECT * FROM `flowmeter_water` ORDER BY id_auto DESC LIMIT 200 ) a GROUP BY Device_ID";
		return $this->db->query($q)->result();
	}


	public function m_laporan_power_by_id($mulai,$selesai,$Device_ID)
	{
		$q = "SELECT * FROM flowmeter_water WHERE Device_ID='$Device_ID' AND (DATE(Date_Time) BETWEEN '$mulai' AND '$selesai')";
		return $this->db->query($q)->result();
	}


	public function m_Device_ID_array($array_Device_ID)
	{
		$in_comma = implode($array_Device_ID);
		$q = "SELECT * FROM `flowmeter_water` WHERE Device_ID IN ($in_comma) ORDER BY id_auto DESC ";

		return $this->db->query($q)->result();	
	}

	public function by_Device_ID($Device_ID)
	{		
		$q = "SELECT * FROM `flowmeter_water` WHERE Device_ID='$Device_ID' ORDER BY id_auto DESC LIMIT 1";

		return $this->db->query($q)->result();	
	}


	public function m_real_data_by_id($Device_ID)
	{
		$q = "SELECT * FROM flowmeter_water WHERE Device_ID='$Device_ID' order by id_auto DESC LIMIT 1";
		return $this->db->query($q)->result();
	}
	
}