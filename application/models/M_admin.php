<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

	class M_admin extends CI_Model {
		
		function __construct() {
			parent::__construct();
		
			$this->load->helper('custom_func');
		}

	
	public function input_data($serialize)
	{
		$this->db->set($serialize);
		$this->db->insert('history_input');
	}

	public function rec_raw($serialize)
	{
		$this->db->set($serialize);
		$this->db->insert('rec_raw');	
	}


	public function uniq_meter()
	{
		$q = "SELECT Device_ID FROM rec_raw GROUP BY Device_ID";
		return $this->db->query($q)->result();
	}

	public function history_input()
	{
		$q = "SELECT a.*,b.nama_admin FROM history_input a LEFT JOIN tbl_admin b ON a.id_admin=b.id_admin ORDER BY id DESC";
		return $this->db->query($q)->result();
	}

	

	public function m_real_data()
	{
		$q = "SELECT * FROM ( SELECT * FROM `rec_raw` ORDER BY id_auto DESC LIMIT 200 ) a GROUP BY Device_ID";
		return $this->db->query($q)->result();
	}


	public function m_laporan_power_by_id($mulai,$selesai,$Device_ID)
	{
		$q = "SELECT * FROM rec_raw WHERE Device_ID='$Device_ID' 
			AND 
			(
				DATE_FORMAT(Date_Time, '%H:%i') LIKE '%10:20%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%01:00%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%01:10%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%01:20%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%01:30%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%01:40%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%01:50%' 


				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%02:00%'
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%02:10%'
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%02:20%'
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%02:30%'
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%02:40%'
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%02:50%'


				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%03:00%'
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%03:10%'
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%03:20%'
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%03:30%'
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%03:40%'
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%03:50%'


				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%04:00%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%04:10%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%04:20%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%04:30%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%04:40%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%04:50%' 



				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%05:00%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%05:10%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%05:20%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%05:30%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%05:40%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%05:50%' 



				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%06:00%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%06:10%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%06:20%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%06:30%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%06:40%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%06:50%' 



				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%07:00%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%07:10%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%07:20%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%07:30%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%07:40%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%07:50%' 



				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%08:00%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%08:10%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%08:20%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%08:30%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%08:40%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%08:50%' 



				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%09:00%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%09:10%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%09:20%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%09:30%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%09:40%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%09:50%' 



				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%10:00%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%10:10%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%10:20%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%10:30%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%10:40%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%10:50%' 


				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%11:00%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%11:10%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%11:20%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%11:30%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%11:40%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%11:50%' 



				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%12:00%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%12:10%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%12:20%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%12:30%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%12:40%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%12:50%' 



				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%13:00%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%13:10%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%13:20%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%13:30%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%13:40%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%13:50%' 


				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%14:00%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%14:10%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%14:20%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%14:30%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%14:40%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%14:50%' 



				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%15:00%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%15:10%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%15:20%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%15:30%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%15:40%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%15:50%' 



				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%16:00%'
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%16:10%'
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%16:20%'
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%16:30%'
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%16:40%'
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%16:50%'

				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%17:00%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%17:10%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%17:20%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%17:30%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%17:40%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%17:50%' 



				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%18:00%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%18:10%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%18:20%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%18:30%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%18:40%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%18:50%' 



				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%19:00%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%19:10%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%19:20%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%19:30%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%19:40%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%19:50%' 


				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%20:00%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%20:10%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%20:20%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%20:30%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%20:40%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%20:50%' 



				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%21:00%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%21:10%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%21:20%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%21:30%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%21:40%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%21:50%' 


				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%22:00%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%22:10%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%22:20%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%22:30%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%22:40%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%22:50%' 



				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%23:00%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%23:10%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%23:20%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%23:30%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%23:40%' 
				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%23:50%' 

				OR DATE_FORMAT(Date_Time, '%H:%i') LIKE '%24:00%' 

				
			) 

			AND (DATE(Date_Time) BETWEEN '$mulai' AND '$selesai')
			ORDER BY Date_Time ASC
			";
		return $this->db->query($q)->result();
	}


	public function m_laporan_per_meter_per_tanggal($tanggal,$Device_ID)
	{


		$q = "SELECT Device_ID,Date_Time,Energy FROM `rec_raw` 
				WHERE Device_ID='$Device_ID' AND DATE(Date_Time)= '$tanggal'
					GROUP BY Device_ID,(DATE(Date_Time)) 
					ORDER BY Energy DESC LIMIT 1
				";
		$x = $this->db->query($q)->result();
		return $x;
	}

	public function m_laporan_fix($mulai,$selesai)
	{
		$q = "SELECT a.tgl,
					MAX(Chiller_A) AS Chiller_A,
					MAX(Chiller_B) AS Chiller_B,
					MAX(CPO_WASHING) AS CPO_WASHING,
					MAX(C_AMO_R1) AS C_AMO_R1,
					MAX(FR_A) AS FR_A,
					MAX(FR_B) AS FR_B,
					MAX(ICE_C) AS ICE_C,
					MAX(IN_PLN) AS IN_PLN,
					MAX(KCP_A) AS KCP_A,
					MAX(KCP_B) AS KCP_B,
					MAX(KCP_C) AS KCP_C,
					MAX(KCP_D) AS KCP_D,
					MAX(LPB_A) AS LPB_A,
					MAX(LPB_B) AS LPB_B,
					MAX(PDU01A) AS PDU01A,
					MAX(PDU01B) AS PDU01B,
					MAX(PDU02A) AS PDU02A,
					MAX(PDU02B) AS PDU02B,
					MAX(PDU03A) AS PDU03A,
					MAX(PDU03B) AS PDU03B,
					MAX(PDU4A) AS PDU4A,
					MAX(PDU4B) AS PDU4B,
					MAX(PDU5A) AS PDU5A,
					MAX(PDU5B) AS PDU5B,
					MAX(PDU6) AS PDU6,
					MAX(REFI_A) AS REFI_A,
					MAX(REFI_B) AS REFI_B,
					MAX(WTP) AS WTP
					FROM (
					SELECT CAST(`Date_Time` AS DATE) AS tgl,
					        Date_Time, 
						   CASE WHEN Device_Id='Chiller_A' THEN Energy END AS Chiller_A,
					        CASE WHEN Device_Id='Chiller_B' THEN Energy END AS Chiller_B,
					        CASE WHEN Device_Id='CPO_WASHING' THEN Energy END AS CPO_WASHING,
					        CASE WHEN Device_Id='C_AMO_R1' THEN Energy END AS C_AMO_R1,
					        CASE WHEN Device_Id='FR_A' THEN Energy END AS FR_A,
					        CASE WHEN Device_Id='FR_B' THEN Energy END AS FR_B,
					        CASE WHEN Device_Id='ICE_C' THEN Energy END AS ICE_C,
					        CASE WHEN Device_Id='IN_PLN' THEN Energy END AS IN_PLN,
					        CASE WHEN Device_Id='KCP_A' THEN Energy END AS KCP_A,
					        CASE WHEN Device_Id='KCP_B' THEN Energy END AS KCP_B,
					        CASE WHEN Device_Id='KCP_C' THEN Energy END AS KCP_C,
					        CASE WHEN Device_Id='KCP_D' THEN Energy END AS KCP_D,
					        CASE WHEN Device_Id='LPB_A' THEN Energy END AS LPB_A,
					        CASE WHEN Device_Id='LPB_B' THEN Energy END AS LPB_B,
					        CASE WHEN Device_Id='PDU01A' THEN Energy END AS PDU01A,
					        CASE WHEN Device_Id='PDU01B' THEN Energy END AS PDU01B,
					        CASE WHEN Device_Id='PDU02A' THEN Energy END AS PDU02A,
					        CASE WHEN Device_Id='PDU02B' THEN Energy END AS PDU02B,
					        CASE WHEN Device_Id='PDU03A' THEN Energy END AS PDU03A,
					        CASE WHEN Device_Id='PDU03B' THEN Energy END AS PDU03B,
					        CASE WHEN Device_Id='PDU4A' THEN Energy END AS PDU4A,
					        CASE WHEN Device_Id='PDU4B' THEN Energy END AS PDU4B,
					        CASE WHEN Device_Id='PDU5A' THEN Energy END AS PDU5A,
					        CASE WHEN Device_Id='PDU5B' THEN Energy END AS PDU5B,
					        CASE WHEN Device_Id='PDU6' THEN Energy END AS PDU6,
					        CASE WHEN Device_Id='REFI_A' THEN Energy END AS REFI_A,
					        CASE WHEN Device_Id='REFI_B' THEN Energy END AS REFI_B,
					        CASE WHEN Device_Id='WTP' THEN Energy END AS WTP

						FROM (

						    SELECT a.Device_Id,a.Date_Time,a.Energy FROM `rec_raw` a 
						    INNER JOIN 
						    ( SELECT MAX(`Date_Time`) AS Time FROM rec_raw GROUP BY Device_ID,CAST(`Date_Time` AS DATE) ) b 
						    ON a.Date_Time=b.Time

						)a

					)a 
					WHERE tgl BETWEEN '$mulai' AND '$selesai'
					GROUP BY tgl";

	}

	public function laporan_kwh_sesuai_xl($mulai,$selesai)
	{
		$q = "SELECT a.tgl,
					MAX(LWBP) AS LWBP,
					MAX(LWBP2) AS LWBP2,
					MAX(WBP) AS WBP,
					MAX(Kvarh) AS Kvarh,
					MAX(KCP_A) AS KCP_A,
					MAX(KCP_B) AS KCP_B,
					MAX(KCP_C) AS KCP_C,
					MAX(KCP_D) AS KCP_D,
					MAX(LPB_A) AS LPB_A,
					MAX(LPB_B) AS LPB_B,

					MAX(IN_PLN) AS IN_PLN,
					
					MAX(C_AMO_R1) AS C_AMO_R1,
					
					MAX(PDU01A) AS PDU01A,
					MAX(PDU01B) AS PDU01B,
					MAX(PDU02A) AS PDU02A,
					MAX(PDU02B) AS PDU02B,
					MAX(PDU03A) AS PDU03A,
					MAX(PDU03B) AS PDU03B,
					MAX(PDU4A) AS PDU4A,
					MAX(PDU4B) AS PDU4B,
					MAX(PDU5A) AS PDU5A,
					MAX(PDU5B) AS PDU5B,
					MAX(PDU6) AS PDU6,
					
					MAX(WTP) AS WTP,
					MAX(WWTP) AS WWTP,
					MAX(Hydrant) AS Hydrant,
					MAX(PH1) AS PH1,
					MAX(FR_A) AS FR_A,
					MAX(FR_B) AS FR_B,
					MAX(REFI_B) AS REFI_B,
					MAX(REFI_A) AS REFI_A,
					MAX(ICE_C) AS ICE_C,
					MAX(Chiller_A) AS Chiller_A,
					MAX(Chiller_B) AS Chiller_B,
					
					MAX(CPO_WASHING) AS CPO_WASHING,
					MAX(Air_Compressor) AS Air_Compressor,
					MAX(Shipment_Pump) AS Shipment_Pump,
					MAX(Pump_House) AS Pump_House,
					MAX(Agitator_Tank) AS Agitator_Tank,
					MAX(Loading_Unloading) AS Loading_Unloading,
					MAX(HPB) AS HPB,
					MAX(Lab_Pump_Area) AS Lab_Pump_Area,
					MAX(Main_Office_Pump_Area) AS Main_Office_Pump_Area,
					MAX(Warehouse) AS Warehouse,
					MAX(PBS) AS PBS,
					MAX(WB_Double) AS WB_Double,
					MAX(RDM) AS RDM,
					MAX(Polishing) AS Polishing
					FROM (
					SELECT CAST(`Date_Time` AS DATE) AS tgl,
					        Date_Time, 
						   CASE WHEN Device_Id='LWBP' THEN Energy END AS LWBP,
							CASE WHEN Device_Id='LWBP2' THEN Energy END AS LWBP2,
							CASE WHEN Device_Id='WBP' THEN Energy END AS WBP,
							CASE WHEN Device_Id='Kvarh' THEN Energy END AS Kvarh,
							CASE WHEN Device_Id='KCP_A' THEN Energy END AS KCP_A,
							CASE WHEN Device_Id='KCP_B' THEN Energy END AS KCP_B,
							CASE WHEN Device_Id='KCP_C' THEN Energy END AS KCP_C,
							CASE WHEN Device_Id='KCP_D' THEN Energy END AS KCP_D,
							CASE WHEN Device_Id='LPB_A' THEN Energy END AS LPB_A,
							CASE WHEN Device_Id='LPB_B' THEN Energy END AS LPB_B,
							CASE WHEN Device_Id='WTP' THEN Energy END AS WTP,
							CASE WHEN Device_Id='WWTP' THEN Energy END AS WWTP,
							CASE WHEN Device_Id='Hydrant' THEN Energy END AS Hydrant,
							CASE WHEN Device_Id='PH1' THEN Energy END AS PH1,
							CASE WHEN Device_Id='FR_A' THEN Energy END AS FR_A,
							CASE WHEN Device_Id='FR_B' THEN Energy END AS FR_B,
							CASE WHEN Device_Id='REFI_B' THEN Energy END AS REFI_B,
							CASE WHEN Device_Id='REFI_A' THEN Energy END AS REFI_A,
							CASE WHEN Device_Id='ICE_C' THEN Energy END AS ICE_C,
							CASE WHEN Device_Id='Chiller_A' THEN Energy END AS Chiller_A,						
							CASE WHEN Device_Id='Chiller_B' THEN Energy END AS Chiller_B,						

							CASE WHEN Device_Id='IN_PLN' THEN Energy END AS IN_PLN,
							
					        CASE WHEN Device_Id='C_AMO_R1' THEN Energy END AS C_AMO_R1,

					        CASE WHEN Device_Id='PDU01A' THEN Energy END AS PDU01A,
					        CASE WHEN Device_Id='PDU01B' THEN Energy END AS PDU01B,
					        CASE WHEN Device_Id='PDU02A' THEN Energy END AS PDU02A,
					        CASE WHEN Device_Id='PDU02B' THEN Energy END AS PDU02B,
					        CASE WHEN Device_Id='PDU03A' THEN Energy END AS PDU03A,
					        CASE WHEN Device_Id='PDU03B' THEN Energy END AS PDU03B,
					        CASE WHEN Device_Id='PDU4A' THEN Energy END AS PDU4A,
					        CASE WHEN Device_Id='PDU4B' THEN Energy END AS PDU4B,
					        CASE WHEN Device_Id='PDU5A' THEN Energy END AS PDU5A,
					        CASE WHEN Device_Id='PDU5B' THEN Energy END AS PDU5B,
					        CASE WHEN Device_Id='PDU6' THEN Energy END AS PDU6,
					        

							CASE WHEN Device_Id='CPO_WASHING' THEN Energy END AS CPO_WASHING,
							CASE WHEN Device_Id='Air_Compressor' THEN Energy END AS Air_Compressor,
							CASE WHEN Device_Id='Shipment_Pump' THEN Energy END AS Shipment_Pump,
							CASE WHEN Device_Id='Pump_House' THEN Energy END AS Pump_House,
							CASE WHEN Device_Id='Agitator_Tank' THEN Energy END AS Agitator_Tank,
							CASE WHEN Device_Id='Loading_Unloading' THEN Energy END AS Loading_Unloading,
							CASE WHEN Device_Id='HPB' THEN Energy END AS HPB,
							CASE WHEN Device_Id='Lab_Pump_Area' THEN Energy END AS Lab_Pump_Area,
							CASE WHEN Device_Id='Main_Office_Pump_Area' THEN Energy END AS Main_Office_Pump_Area,
							CASE WHEN Device_Id='Warehouse' THEN Energy END AS Warehouse,
							CASE WHEN Device_Id='PBS' THEN Energy END AS PBS,
							CASE WHEN Device_Id='WB_Double' THEN Energy END AS WB_Double,
							CASE WHEN Device_Id='RDM' THEN Energy END AS RDM,
							CASE WHEN Device_Id='Polishing' THEN Energy END AS Polishing

						FROM (

						    SELECT a.Device_Id,a.Date_Time,a.Energy FROM `rec_raw` a 
						    INNER JOIN 
						    ( SELECT MAX(`Date_Time`) AS Time FROM rec_raw GROUP BY Device_ID,CAST(`Date_Time` AS DATE) ) b 
						    ON a.Date_Time=b.Time

						)a

					)a 
					WHERE tgl BETWEEN '$mulai' AND '$selesai'
					GROUP BY tgl";

			return $this->db->query($q);
	}



	public function laporan_kwh_sesuai_xl_x($mulai,$selesai)
	{
		$q = "SELECT a.tgl,
					MAX(LWBP) AS LWBP,
					MAX(LWBP2) AS LWBP2,
					MAX(WBP) AS WBP,
					MAX(Kvarh) AS Kvarh,
					MAX(KCP_A) AS KCP_A,
					MAX(KCP_B) AS KCP_B,
					MAX(KCP_C) AS KCP_C,
					MAX(KCP_D) AS KCP_D,
					MAX(LPB_A) AS LPB_A,
					MAX(LPB_B) AS LPB_B,
					MAX(WTP) AS WTP,
					MAX(WWTP) AS WWTP,
					MAX(Hydrant) AS Hydrant,
					MAX(PH1) AS PH1,
					MAX(FR_A) AS FR_A,
					MAX(FR_B) AS FR_B,
					MAX(REFI_B) AS REFI_B,
					MAX(REFI_A) AS REFI_A,
					MAX(ICE_C) AS ICE_C,
					MAX(Chiller_A) AS Chiller_A,
					MAX(Chiller_B) AS Chiller_B,
					
					MAX(CPO_WASHING) AS CPO_WASHING,
					MAX(Air_Compressor) AS Air_Compressor,
					MAX(Shipment_Pump) AS Shipment_Pump,
					MAX(Pump_House) AS Pump_House,
					MAX(Agitator_Tank) AS Agitator_Tank,
					MAX(Loading_Unloading) AS Loading_Unloading,
					MAX(HPB) AS HPB,
					MAX(Lab_Pump_Area) AS Lab_Pump_Area,
					MAX(Main_Office_Pump_Area) AS Main_Office_Pump_Area,
					MAX(Warehouse) AS Warehouse,
					MAX(PBS) AS PBS,
					MAX(WB_Double) AS WB_Double,
					MAX(RDM) AS RDM,
					MAX(Polishing) AS Polishing
					FROM (
					SELECT CAST(`Date_Time` AS DATE) AS tgl,
					        Date_Time, 
						   CASE WHEN Device_Id='LWBP' THEN Energy END AS LWBP,
							CASE WHEN Device_Id='LWBP2' THEN Energy END AS LWBP2,
							CASE WHEN Device_Id='WBP' THEN Energy END AS WBP,
							CASE WHEN Device_Id='Kvarh' THEN Energy END AS Kvarh,
							CASE WHEN Device_Id='KCP_A' THEN Energy END AS KCP_A,
							CASE WHEN Device_Id='KCP_B' THEN Energy END AS KCP_B,
							CASE WHEN Device_Id='KCP_C' THEN Energy END AS KCP_C,
							CASE WHEN Device_Id='KCP_D' THEN Energy END AS KCP_D,
							CASE WHEN Device_Id='LPB_A' THEN Energy END AS LPB_A,
							CASE WHEN Device_Id='LPB_B' THEN Energy END AS LPB_B,
							CASE WHEN Device_Id='WTP' THEN Energy END AS WTP,
							CASE WHEN Device_Id='WWTP' THEN Energy END AS WWTP,
							CASE WHEN Device_Id='Hydrant' THEN Energy END AS Hydrant,
							CASE WHEN Device_Id='PH1' THEN Energy END AS PH1,
							CASE WHEN Device_Id='FR_A' THEN Energy END AS FR_A,
							CASE WHEN Device_Id='FR_B' THEN Energy END AS FR_B,
							CASE WHEN Device_Id='REFI_B' THEN Energy END AS REFI_B,
							CASE WHEN Device_Id='REFI_A' THEN Energy END AS REFI_A,
							CASE WHEN Device_Id='ICE_C' THEN Energy END AS ICE_C,
							CASE WHEN Device_Id='Chiller_A' THEN Energy END AS Chiller_A,						
							CASE WHEN Device_Id='Chiller_B' THEN Energy END AS Chiller_B,							
							CASE WHEN Device_Id='CPO_WASHING' THEN Energy END AS CPO_WASHING,
							CASE WHEN Device_Id='Air_Compressor' THEN Energy END AS Air_Compressor,
							CASE WHEN Device_Id='Shipment_Pump' THEN Energy END AS Shipment_Pump,
							CASE WHEN Device_Id='Pump_House' THEN Energy END AS Pump_House,
							CASE WHEN Device_Id='Agitator_Tank' THEN Energy END AS Agitator_Tank,
							CASE WHEN Device_Id='Loading_Unloading' THEN Energy END AS Loading_Unloading,
							CASE WHEN Device_Id='HPB' THEN Energy END AS HPB,
							CASE WHEN Device_Id='Lab_Pump_Area' THEN Energy END AS Lab_Pump_Area,
							CASE WHEN Device_Id='Main_Office_Pump_Area' THEN Energy END AS Main_Office_Pump_Area,
							CASE WHEN Device_Id='Warehouse' THEN Energy END AS Warehouse,
							CASE WHEN Device_Id='PBS' THEN Energy END AS PBS,
							CASE WHEN Device_Id='WB_Double' THEN Energy END AS WB_Double,
							CASE WHEN Device_Id='RDM' THEN Energy END AS RDM,
							CASE WHEN Device_Id='Polishing' THEN Energy END AS Polishing

						FROM (

						    SELECT a.Device_Id,a.Date_Time,a.Energy FROM `rec_raw` a 
						    INNER JOIN 
						    ( SELECT MAX(`Date_Time`) AS Time FROM rec_raw GROUP BY Device_ID,CAST(`Date_Time` AS DATE) ) b 
						    ON a.Date_Time=b.Time

						)a

					)a 
					WHERE tgl BETWEEN '$mulai' AND '$selesai'
					GROUP BY tgl";

			return $this->db->query($q);
	}



	public function laporan_kwh_sesuai_xl_ambil_besok($tgl,$Device_ID)
	{
			$q = "SELECT a.Device_Id,a.Date_Time,a.Energy FROM `rec_raw` a INNER JOIN ( SELECT MAX(`Date_Time`) AS Time FROM rec_raw GROUP BY Device_ID,CAST(`Date_Time` AS DATE) ) b ON a.Date_Time=b.Time WHERE CAST(`Date_Time` AS DATE)=DATE('$tgl') AND Device_ID='$Device_ID'
			";

			return $this->db->query($q)->result();
	}

	public function m_Device_ID_array($array_Device_ID)
	{
		$in_comma = implode($array_Device_ID);
		$q = "SELECT * FROM `rec_raw` WHERE Device_ID IN ($in_comma) ORDER BY id_auto DESC ";

		return $this->db->query($q)->result();	
	}

	public function by_Device_ID($Device_ID)
	{		
		$q = "SELECT a.*

		FROM `rec_raw` a 
		
		 WHERE a.Device_ID='$Device_ID' 
		 ORDER BY a.id_auto DESC LIMIT 1";

		return $this->db->query($q)->result();	
	}


	public function m_real_data_by_id($Device_ID)
	{
		$q = "SELECT * FROM rec_raw WHERE Device_ID='$Device_ID' order by id_auto DESC LIMIT 1";
		return $this->db->query($q)->result();
	}
	

	public function m_data_admin()
	{
		$q = $this->db->query("SELECT a.*,b.OPD FROM tbl_admin a LEFT JOIN tbl_opd b ON a.id_opd=b.ID_OPD ");
		return $q->result();
	}

	public function m_opd()
	{
		$q = $this->db->query("SELECT * FROM tbl_opd ");
		return $q->result();
	}


	public function m_data_admin_by_id($id_admin)
	{
		$q = $this->db->query("SELECT a.*,b.OPD FROM tbl_admin a LEFT JOIN tbl_opd b ON a.id_opd=b.ID_OPD
									WHERE a.id_admin='$id_admin'
							  ");
		return $q->result();
	}


	public function cek_email_user($user,$email)
	{
		$query = $this->db->query("SELECT * FROM tbl_admin WHERE user_admin='$user' OR email_admin='$email'");
		return $query->num_rows();
	}


	public function tambah_admin($serialize)
	{
		$this->db->set($serialize);
		$this->db->insert('tbl_admin');
	}

	public function cek_pass($id_admin)
	{
		$query = $this->db->query("SELECT pass_admin FROM tbl_admin WHERE id_admin='$id_admin'");
		$x = $query->result();
		return $x[0]->pass_admin;
	}
	


	public function update_admin($serialize,$id_admin)
	{
		$this->db->set($serialize);
		$this->db->where('id_admin',$id_admin);
		$this->db->update('tbl_admin');
	}

	public function m_data_desa()
	{
		$q = $this->db->query("SELECT a.*,b.id AS id_kecamatan,b.kecamatan FROM tbl_desa a LEFT JOIN tbl_kecamatan b ON a.id_kecamatan=b.id");
		return $q->result();
	}
}