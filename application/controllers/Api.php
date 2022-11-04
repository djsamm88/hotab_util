<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');				
		$this->load->helper('custom_func');
		
		$this->load->helper('text');
		date_default_timezone_set("Asia/jakarta");
		//$this->load->library('datatables');
		$this->load->model('m_admin');

		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: *");
		header('Content-Type: application/json');

		
	}

	public function load_json_realtime()
	{
		$data['all_meter'] = $this->m_admin->m_real_data();
		echo json_encode($data);
	}



	private function json_request($fullurl,$fields)
	{
			
			$jsonnya = json_encode($fields);
			
			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
			curl_setopt($ch, CURLOPT_VERBOSE, 1);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_FAILONERROR, 0);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
			curl_setopt($ch, CURLOPT_URL, $fullurl);
			curl_setopt($ch, CURLOPT_POSTFIELDS,$jsonnya);
			$returned =  curl_exec($ch);
		
			return(json_decode($returned));
	}



	public function tampung_ethernet()
	{
		$data = $this->input->post();
		$id = $data['id'];
		$data_clean = str_replace("[","",$data['dt']);
		$data_clean = str_replace("]","",$data_clean);

		$a = explode(",",$data_clean);
		$Current_A=$a[0];
		$Current_B=$a[1];
		$Current_C=$a[2];
		$Current_N=$a[3];
		$Current_G=$a[4];
		$Current_Avg=$a[5];
		$Voltage_A_B=$a[6];
		$Voltage_B_C=$a[7];
		$Voltage_C_A=$a[8];
		$Voltage_L_L_Avg=$a[9];
		$Voltage_A_N=$a[10];
		$Voltage_B_N=$a[11];
		$Voltage_C_N=$a[12];
		$Voltage_L_N_Avg=$a[13];
		$Active_Power_A=$a[14];
		$Active_Power_B=$a[15];
		$Active_Power_C=$a[16];
		$Active_Power_Total=$a[17];
		$Reactive_Power_A=$a[18];
		$Reactive_Power_B=$a[19];
		$Reactive_Power_C=$a[20];
		$Reactive_Power_Total=$a[21];
		$Apparent_Power_A=$a[22];
		$Apparent_Power_B=$a[23];
		$Apparent_Power_C=$a[24];
		$Apparent_Power_Total=$a[25];
		$Power_Factor_A=$a[26];
		$Power_Factor_B=$a[27];
		$Power_Factor_C=$a[28];
		$Power_Factor_Total=$a[29];
		$Displacement_Power_Factor_A=$a[30];
		$Displacement_Power_Factor_B=$a[31];
		$Displacement_Power_Factor_C=$a[32];
		$Displacement_Power_Factor_Total=$a[33];
		$Frequency=$a[34];
		$Energy=$a[35];
		//var_dump($a);
		$q = "INSERT INTO rec_raw SET
				Device_ID = '$id',
				
				Current_A = '$Current_A',
				Current_B = '$Current_B',
				Current_C = '$Current_C',
				Current_N = '$Current_N',
				Current_G = '$Current_G',
				Current_Avg = '$Current_Avg',
				Voltage_A_B = '$Voltage_A_B',
				Voltage_B_C = '$Voltage_B_C',
				Voltage_C_A = '$Voltage_C_A',
				Voltage_L_L_Avg = '$Voltage_L_L_Avg',
				Voltage_A_N = '$Voltage_A_N',
				Voltage_B_N = '$Voltage_B_N',
				Voltage_C_N = '$Voltage_C_N',
				Voltage_L_N_Avg = '$Voltage_L_N_Avg',
				Active_Power_A = '$Active_Power_A',
				Active_Power_B = '$Active_Power_B',
				Active_Power_C = '$Active_Power_C',
				Active_Power_Total = '$Active_Power_Total',
				Reactive_Power_A = '$Reactive_Power_A',
				Reactive_Power_B = '$Reactive_Power_B',
				Reactive_Power_C = '$Reactive_Power_C',
				Reactive_Power_Total = '$Reactive_Power_Total',
				Apparent_Power_A = '$Apparent_Power_A',
				Apparent_Power_B = '$Apparent_Power_B',
				Apparent_Power_C = '$Apparent_Power_C',
				Apparent_Power_Total = '$Apparent_Power_Total',
				Power_Factor_A = '$Power_Factor_A',
				Power_Factor_B = '$Power_Factor_B',
				Power_Factor_C = '$Power_Factor_C',
				Power_Factor_Total = '$Power_Factor_Total',
				Displacement_Power_Factor_A = '$Displacement_Power_Factor_A',
				Displacement_Power_Factor_B = '$Displacement_Power_Factor_B',
				Displacement_Power_Factor_C = '$Displacement_Power_Factor_C',
				Displacement_Power_Factor_Total = '$Displacement_Power_Factor_Total',
				Frequency = '$Frequency',
				Energy = '$Energy'
		";

		/*
		if($Voltage_A_B!='0.00')
		{
			$this->db->query($q);
		}
		*/
		
		$this->db->query($q);
		
		//echo $q;


	}


	public function tampung_ethernet_steam()
	{
		$data = $this->input->post();
		$STEAM1 = $data['STEAM1'];
		$STEAM2 = $data['STEAM2'];

		$q = "INSERT INTO flowmeter_steam SET Device_ID='STEAM1',Nilai='$STEAM1' ";
		$q2 = "INSERT INTO flowmeter_steam SET Device_ID='STEAM2',Nilai='$STEAM2' ";

		$this->db->query($q1);
		$this->db->query($q2);

	}




}
