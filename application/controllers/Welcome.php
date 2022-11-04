<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');				
		$this->load->helper('custom_func');
		if ($this->session->userdata('id_admin')=="") {
			redirect(base_url().'index.php/login');
		}
		$this->load->helper('text');
		date_default_timezone_set("Asia/jakarta");
		//$this->load->library('datatables');
		$this->load->model('m_steam');
		$this->load->model('m_water');
		$this->load->model('m_admin');
		$this->load->model('m_ikk');
		
		
	}
	
	

	public function index()
	{

		$data['session'] = $this->session->userdata();
		$data['all_meter'] = $this->m_admin->m_real_data();
		$this->load->view('welcome_message',$data);
	}

/*************************** Steam ****************************/


	public function struktur_steam()
	{

		
		$data['all_meter'] = $this->m_admin->m_real_data();
		$this->load->view('struktur_steam',$data);
	}


	public function laporan_flowmeter_steam()
	{

		$data['session'] = $this->session->userdata();
		$data['all_deviceId'] = $this->m_steam->uniq_meter();

		$data['go'] = $this->input->get('go');
		$data['Device_ID'] ="";
		$data['mulai'] = date( 'Y-m-d', strtotime(' -1 day' ));
		$data['selesai'] = date('Y-m-d');

		if($data['go']==1)
		{
			$data['Device_ID'] = $this->input->get('Device_ID');
			$data['mulai'] = $this->input->get('mulai');
			$data['selesai'] = $this->input->get('selesai');

			$data['all'] = $this->m_steam->m_laporan_power_by_id($data['mulai'],$data['selesai'],$data['Device_ID']);

		}

		$this->load->view('laporan_flowmeter_steam',$data);
	}


	public function laporan_flowmeter_steam_xl()
	{

		
			$data['Device_ID'] = $this->input->get('Device_ID');
			$data['mulai'] = $this->input->get('mulai');
			$data['selesai'] = $this->input->get('selesai');

		$file = "laporan_flowmeter_steam_".$data['Device_ID']."_-".$data['mulai']."-".$data['selesai'].".xls";
		header("Content-type: application/octet-stream");
		header("Content-Disposition: attachment; filename=$file");
		header("Pragma: no-cache");
		header("Expires: 0");	

			$data['all'] = $this->m_steam->m_laporan_power_by_id($data['mulai'],$data['selesai'],$data['Device_ID']);

		

		$this->load->view('part_laporan_flowmeter_steam',$data);
	}


	

/*************************** Steam ****************************/



/*************************** water *****************************/

	public function struktur_water()
	{

		
		$data['all_meter'] = $this->m_admin->m_real_data();
		$this->load->view('struktur_water',$data);
	}


	public function laporan_flowmeter_water()
	{

		$data['session'] = $this->session->userdata();
		$data['all_deviceId'] = $this->m_water->uniq_meter();

		$data['go'] = $this->input->get('go');
		$data['Device_ID'] ="";
		$data['mulai'] = date( 'Y-m-d', strtotime(' -1 day' ));
		$data['selesai'] = date('Y-m-d');

		if($data['go']==1)
		{
			$data['Device_ID'] = $this->input->get('Device_ID');
			$data['mulai'] = $this->input->get('mulai');
			$data['selesai'] = $this->input->get('selesai');

			$data['all'] = $this->m_water->m_laporan_power_by_id($data['mulai'],$data['selesai'],$data['Device_ID']);

		}

		$this->load->view('laporan_flowmeter_water',$data);
	}


	public function laporan_flowmeter_water_xl()
	{

		
			$data['Device_ID'] = $this->input->get('Device_ID');
			$data['mulai'] = $this->input->get('mulai');
			$data['selesai'] = $this->input->get('selesai');

		$file = "laporan_flowmeter_water_".$data['Device_ID']."_-".$data['mulai']."-".$data['selesai'].".xls";
		header("Content-type: application/octet-stream");
		header("Content-Disposition: attachment; filename=$file");
		header("Pragma: no-cache");
		header("Expires: 0");	

			$data['all'] = $this->m_water->m_laporan_power_by_id($data['mulai'],$data['selesai'],$data['Device_ID']);

		

		$this->load->view('part_laporan_flowmeter_water',$data);
	}


	
/*************************** water *****************************/



	public function struktur_power_meter()
	{

		$data['session'] = $this->session->userdata();
		$data['all_meter'] = $this->m_admin->m_real_data();
		$this->load->view('struktur_power_meter',$data);
	}

	public function laporan_power_meter()
	{

		$data['session'] = $this->session->userdata();
		$data['all_deviceId'] = $this->m_admin->uniq_meter();

		$data['go'] = $this->input->get('go');
		$data['Device_ID'] ="";
		$data['mulai'] = date( 'Y-m-d', strtotime(' -1 day' ));
		$data['selesai'] = date('Y-m-d');

		if($data['go']==1)
		{
			$data['Device_ID'] = $this->input->get('Device_ID');
			$data['mulai'] = $this->input->get('mulai');
			$data['selesai'] = $this->input->get('selesai');

			$data['all'] = $this->m_admin->m_laporan_power_by_id($data['mulai'],$data['selesai'],$data['Device_ID']);

		}

		$this->load->view('laporan_power_meter',$data);
	}


	public function laporan_power_meter_xl()
	{

		
			$data['Device_ID'] = $this->input->get('Device_ID');
			$data['mulai'] = $this->input->get('mulai');
			$data['selesai'] = $this->input->get('selesai');

		$file = "laporan_power_meter_".$data['Device_ID']."_-".$data['mulai']."-".$data['selesai'].".xls";
		header("Content-type: application/octet-stream");
		header("Content-Disposition: attachment; filename=$file");
		header("Pragma: no-cache");
		header("Expires: 0");	

			$data['all'] = $this->m_admin->m_laporan_power_by_id($data['mulai'],$data['selesai'],$data['Device_ID']);

		

		$this->load->view('part_laporan_power_meter',$data);
	}


	
	public function laporan_kwh()
	{

		$data['session'] = $this->session->userdata();
		$data['all_deviceId'] = $this->m_admin->uniq_meter();

		$data['go'] = $this->input->get('go');
		$data['Device_ID'] ="";
		$data['mulai'] = date( 'Y-m-d', strtotime(' -1 day' ));
		$data['selesai'] = date('Y-m-d');

		if($data['go']==1)
		{
			$data['Device_ID'] = $this->input->get('Device_ID');
			$data['mulai'] = $this->input->get('mulai');
			$data['selesai'] = $this->input->get('selesai');

		$data['all'] = $this->m_admin->laporan_kwh_sesuai_xl($data['mulai'],$data['selesai'])->result();
		$data['allx'] = $this->m_admin->laporan_kwh_sesuai_xl($data['mulai'],$data['selesai'])->result('array');


		}

		$this->load->view('laporan_kwh',$data);
	}


	public function laporan_kwh_xl()
	{

		
			$data['Device_ID'] = $this->input->get('Device_ID');
			$data['mulai'] = $this->input->get('mulai');
			$data['selesai'] = $this->input->get('selesai');

			$data['all'] = $this->m_admin->laporan_kwh_sesuai_xl($data['mulai'],$data['selesai'])->result();
			$data['allx'] = $this->m_admin->laporan_kwh_sesuai_xl($data['mulai'],$data['selesai'])->result('array');


		$file = "laporan_KWH_".$data['Device_ID']."_-".$data['mulai']."-".$data['selesai'].".xls";
		header("Content-type: application/octet-stream");
		header("Content-Disposition: attachment; filename=$file");
		header("Pragma: no-cache");
		header("Expires: 0");	

			
		

		$this->load->view('part_laporan_kwh2',$data);
	}


	



	private function curl_json_request($fullurl,$fields)
	{
			
			$jsonnya = json_encode($fields);
			
			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
			curl_setopt($ch, CURLOPT_VERBOSE, 1);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_FAILONERROR, 0);
			
			curl_setopt($ch, CURLOPT_URL, $fullurl);
			curl_setopt($ch, CURLOPT_POSTFIELDS,$jsonnya);
			
			$returned =  curl_exec($ch);
		
			return(json_decode($returned));
	}



	private function curl_proxy_request($fullurl,$fields)
	{
			
			$jsonnya = json_encode($fields);
			
			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
			curl_setopt($ch, CURLOPT_VERBOSE, 1);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_URL, $fullurl);
			curl_setopt($ch, CURLOPT_POSTFIELDS,$jsonnya);
			
			$returned =  curl_exec($ch);
		
			return(json_decode($returned));
	}





	public function real_data()
	{
		$data['all_meter'] = $this->m_admin->m_real_data();
		

		$this->load->view('real_data',$data);	



	}

	public function real_data_detail($Device_ID)
	{
		$data['all_meter'] = $this->m_admin->m_real_data_by_id($Device_ID);
		

		$this->load->view('real_data_detail',$data);	



	}



	public function input_data()
	{
		
		$data['history_input'] = $this->m_admin->history_input();
		$this->load->view('input_data',$data);	



	}



	public function simpan_input_data()
	{
		
		
		$serialize = $this->input->post();
		$serialize['Energy'] = hanya_nomor($serialize['Energy']);
		$serialize['Date_Time'] = $serialize['Date_Time']." 07:00:00";

		$this->m_admin->input_data($serialize);
		$this->m_admin->rec_raw($serialize);

		



	}



	

}
