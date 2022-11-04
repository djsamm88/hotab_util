

Laporan KWH  <?php echo $mulai?> s/d <?php echo $selesai?>  


<table id="tbl_datanya_barang" class="table  table-striped table-bordered"  cellspacing="0" width="100%" border="1">
      <thead>
        <tr>
          <th colspan="10"></th>
          <th colspan="4" style="background-color:yellow"><center>PDU 1</center></th>
          <th colspan="4" style="background-color:green"><center>PDU 2</center></th>
          <th colspan="12" style="background-color:yellow"><center>PDU 3</center></th>
          <th colspan="10" style="background-color:green"><center>PDU 4</center></th>
          <th colspan="26" style="background-color:yellow"><center>PDU 5</center></th>
          <th colspan="2" style="background-color:green"><center>PDU 6</center></th>
        </tr>
        <tr>
              
              <th>No</th>                    
              <th>Date_Time</th>
              <th>LWBP</th>
              <th>Usage</th>

              <th>LWBP2</th>
              <th>Usage</th>

              <th>WBP</th>
              <th>Usage</th>

              <th>Kvarh</th>
              <th>Usage</th>

                 
                 
              <th>KCP_A</th>
              <th>Usage</th>
              <th>KCP_B</th>
              <th>Usage</th
              >
              <th>KCP_C</th>
              <th>Usage</th>
              <th>KCP_D</th>
              <th>Usage</th>

              <th>LPB_A</th>
              <th>Usage</th>
              <th>LPB_B</th>
              <th>Usage</th>
              <th>WTP</th>
              <th>Usage</th>
              <th>WWTP</th>
              <th>Usage</th>
              
              <th>Hydrant</th>
              <th>Usage</th>

              <th>PH1</th>
              <th>Usage</th>

              
              
              <th>FR_A</th>
              <th>Usage</th>
              <th>FR_B</th>
              <th>Usage</th>

              <th>REFI_B</th>
              <th>Usage</th>

              <th>REFI_A</th>
              <th>Usage</th>

              <th>ICE_C</th>
              <th>Usage</th>




              <th>Chiller</th>
              <th>Usage</th>
              <th>Air_Compressor</th>
              <th>Usage</th>
              <th>Shipment_Pump</th>
              <th>Usage</th>
              <th>Pump_House</th>
              <th>Usage</th>
              <th>Agitator_Tank</th>
              <th>Usage</th>
              <th>Loading_Unloading</th>
              <th>Usage</th>
              <th>HPB</th>
              <th>Usage</th>
              <th>Lab_Pump_Area</th>
              <th>Usage</th>
              <th>Main_Office_Pump_Area</th>
              <th>Usage</th>
              <th>Warehouse</th>
              <th>Usage</th>
              <th>PBS</th>
              <th>Usage</th>
              <th>WB_Double</th>
              <th>Usage</th>
              <th>RDM</th>
              <th>Usage</th>

              <th>Polishing</th>
              <th>Usage</th>
              

              

              

              

              
              
        </tr>
      </thead>
      <tbody>
        <?php
        
        $begin = new DateTime($mulai);
        $end = new DateTime($selesai);

        $interval = DateInterval::createFromDateString('1 day');
        $period = new DatePeriod($begin, $interval, $end);

        $no=0;
        foreach ($period as $dt) {
          $no++;
          $besok = date('Y-m-d',strtotime($dt->format('Y-m-d') . "+1 days"));

$LWBP = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'LWBP');
$usage_LWBP = 0;
$besok_LWBP = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'LWBP');
$usage_LWBP = @$besok_LWBP[0]->Energy-@$LWBP[0]->Energy;
$usage_LWBP = $usage_LWBP<0?0:$usage_LWBP;



$LWBP2 = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'LWBP2');
$usage_LWBP2 = 0;
$besok_LWBP2 = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'LWBP2');
$usage_LWBP2 = @$besok_LWBP2[0]->Energy-@$LWBP2[0]->Energy;
$usage_LWBP2 = $usage_LWBP2<0?0:$usage_LWBP2;


$WBP = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'WBP');
$usage_WBP = 0;
$besok_WBP = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'WBP');
$usage_WBP = @$besok_WBP[0]->Energy-@$WBP[0]->Energy;
$usage_WBP = $usage_WBP<0?0:$usage_WBP;


$Kvarh = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'Kvarh');
$usage_Kvarh = 0;
$besok_Kvarh = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'Kvarh');
$usage_Kvarh = @$besok_Kvarh[0]->Energy-@$Kvarh[0]->Energy;
$usage_Kvarh = $usage_Kvarh<0?0:$usage_Kvarh;



$KCP_A = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'KCP_A');
$usage_KCP_A = 0;
$besok_KCP_A = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'KCP_A');
$usage_KCP_A = @$besok_KCP_A[0]->Energy-@$KCP_A[0]->Energy;
$usage_KCP_A = $usage_KCP_A<0?0:$usage_KCP_A;


$KCP_B = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'KCP_B');
$usage_KCP_B = 0;
$besok_KCP_B = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'KCP_B');
$usage_KCP_B = @$besok_KCP_B[0]->Energy-@$KCP_B[0]->Energy;
$usage_KCP_B = $usage_KCP_B<0?0:$usage_KCP_B;   


$KCP_C = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'KCP_C');
$usage_KCP_C = 0;
$besok_KCP_D = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'KCP_D');
$usage_KCP_D = @$besok_KCP_D[0]->Energy-@$KCP_D[0]->Energy;
$usage_KCP_D = $usage_KCP_D<0?0:$usage_KCP_D; 


$KCP_D = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'KCP_D');
$usage_KCP_D = 0;
$besok_KCP_C = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'KCP_C');
$usage_KCP_C = @$besok_KCP_C[0]->Energy-@$KCP_C[0]->Energy;
$usage_KCP_C = $usage_KCP_C<0?0:$usage_KCP_C;


$LPB_A = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'LPB_A');
$usage_LPB_A = 0;
$besok_LPB_A = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'LPB_A');
$usage_LPB_A = @$besok_KCP_D[0]->Energy-@$LPB_A[0]->Energy;
$usage_LPB_A = $usage_LPB_A<0?0:$usage_LPB_A;


$LPB_B = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'LPB_B');
$usage_LPB_B = 0;
$besok_LPB_B = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'LPB_B');
$usage_LPB_B = @$besok_LPB_B[0]->Energy-@$LPB_B[0]->Energy;
$usage_LPB_B = $usage_LPB_B<0?0:$usage_LPB_B; 


$WTP = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'WTP');
$usage_WTP = 0;
$besok_WTP = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'WTP');
$usage_WTP = @$besok_WTP[0]->Energy-@$WTP[0]->Energy;
$usage_WTP = $usage_WTP<0?0:$usage_WTP;

$WWTP = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'WWTP');
$usage_WWTP = 0;
$besok_WWTP = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'WWTP');
$usage_WWTP = @$besok_WWTP[0]->Energy-@$WWTP[0]->Energy;
$usage_WWTP = $usage_WWTP<0?0:$usage_WWTP;

$Hydrant = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'Hydrant');
$usage_Hydrant = 0;
$besok_Hydrant = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'Hydrant');
$usage_Hydrant = @$besok_Hydrant[0]->Energy-@$Hydrant[0]->Energy;
$usage_Hydrant = $usage_Hydrant<0?0:$usage_Hydrant;

$PH1 = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'PH1');
$usage_PH1 = 0;
$besok_PH1 = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'PH1');
$usage_PH1 = @$besok_PH1[0]->Energy-@$PH1[0]->Energy;
$usage_PH1 = $usage_PH1<0?0:$usage_PH1;




$FR_A = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'FR_A');
$usage_FR_A = 0;
$besok_FR_A = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'FR_A');
$usage_FR_A = @$besok_FR_A[0]->Energy-@$FR_A[0]->Energy;
$usage_FR_A = $usage_FR_A<0?0:$usage_FR_A;


$FR_B = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'FR_B');
$usage_FR_B = 0;
$besok_FR_B = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'FR_B');
$usage_FR_B = @$besok_FR_B[0]->Energy-@$FR_B[0]->Energy;
$usage_FR_B = $usage_FR_B<0?0:$usage_FR_B;

$REFI_A = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'REFI_A');
$usage_REFI_A = 0;
$besok_REFI_A = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'REFI_A');
$usage_REFI_A = @$besok_REFI_A[0]->Energy-@$REFI_A[0]->Energy;
$usage_REFI_A = $usage_REFI_A<0?0:$usage_REFI_A;

$REFI_B = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'REFI_B');
$usage_REFI_B = 0;
$besok_REFI_B = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'REFI_B');
$usage_REFI_B = @$besok_REFI_B[0]->Energy-@$REFI_B[0]->Energy;
$usage_REFI_B = $usage_REFI_B<0?0:$usage_REFI_B;



$ICE_C = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'ICE_C');
$usage_ICE_C = 0;
$besok_ICE_C = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'ICE_C');
$usage_ICE_C = @$besok_ICE_C[0]->Energy-@$ICE_C[0]->Energy;
$usage_ICE_C = $usage_ICE_C<0?0:$usage_ICE_C;


$Chiller = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'Chiller');
$usage_Chiller = 0;
$besok_Chiller = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'Chiller');
$usage_Chiller = @$besok_Chiller[0]->Energy-@$Chiller[0]->Energy;
$usage_Chiller = $usage_Chiller<0?0:$usage_Chiller;


$Air_Compressor = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'Air_Compressor');
$usage_Air_Compressor = 0;
$besok_Air_Compressor = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'Air_Compressor');
$usage_Air_Compressor = @$besok_Air_Compressor[0]->Energy-@$Air_Compressor[0]->Energy;
$usage_Air_Compressor = $usage_Air_Compressor<0?0:$usage_Air_Compressor;


$Shipment_Pump = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'Shipment_Pump');
$usage_Shipment_Pump = 0;
$besok_Shipment_Pump = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'Shipment_Pump');
$usage_Shipment_Pump = @$besok_Shipment_Pump[0]->Energy-@$Shipment_Pump[0]->Energy;
$usage_Shipment_Pump = $usage_Shipment_Pump<0?0:$usage_Shipment_Pump;


$Pump_House = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'Pump_House');
$usage_Pump_House = 0;
$besok_Pump_House = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'Pump_House');
$usage_Pump_House = @$besok_Pump_House[0]->Energy-@$Pump_House[0]->Energy;
$usage_Pump_House = $usage_Pump_House<0?0:$usage_Pump_House;


$Agitator_Tank = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'Agitator_Tank');
$usage_Agitator_Tank = 0;
$besok_Agitator_Tank = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'Agitator_Tank');
$usage_Agitator_Tank = @$besok_Agitator_Tank[0]->Energy-@$Agitator_Tank[0]->Energy;
$usage_Agitator_Tank = $usage_Agitator_Tank<0?0:$usage_Agitator_Tank;



$Loading_Unloading = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'Loading_Unloading');
$usage_Loading_Unloading = 0;
$besok_Loading_Unloading = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'Loading_Unloading');
$usage_Loading_Unloading = @$besok_Loading_Unloading[0]->Energy-@$Loading_Unloading[0]->Energy;
$usage_Loading_Unloading = $usage_Loading_Unloading<0?0:$usage_Loading_Unloading;


$HPB = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'HPB');
$usage_HPB = 0;
$besok_HPB = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'HPB');
$usage_HPB = @$besok_HPB[0]->Energy-@$HPB[0]->Energy;
$usage_HPB = $usage_HPB<0?0:$usage_HPB;


$Lab_Pump_Area = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'Lab_Pump_Area');
$usage_Lab_Pump_Area = 0;
$besok_Lab_Pump_Area = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'Lab_Pump_Area');
$usage_Lab_Pump_Area = @$besok_Lab_Pump_Area[0]->Energy-@$Lab_Pump_Area[0]->Energy;
$usage_Lab_Pump_Area = $usage_Lab_Pump_Area<0?0:$usage_Lab_Pump_Area;


$Main_Office_Pump_Area = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'Main_Office_Pump_Area');
$usage_Main_Office_Pump_Area = 0;
$besok_Main_Office_Pump_Area = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'Main_Office_Pump_Area');
$usage_Main_Office_Pump_Area = @$besok_Main_Office_Pump_Area[0]->Energy-@$Main_Office_Pump_Area[0]->Energy;
$usage_Main_Office_Pump_Area = $usage_Main_Office_Pump_Area<0?0:$usage_Main_Office_Pump_Area;


$Warehouse = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'Warehouse');
$usage_Warehouse = 0;
$besok_Warehouse = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'Warehouse');
$usage_Warehouse = @$besok_Warehouse[0]->Energy-@$Warehouse[0]->Energy;
$usage_Warehouse = $usage_Warehouse<0?0:$usage_Warehouse;


$PBS = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'PBS');
$usage_PBS = 0;
$besok_PBS = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'PBS');
$usage_PBS = @$besok_PBS[0]->Energy-@$PBS[0]->Energy;
$usage_PBS = $usage_PBS<0?0:$usage_PBS;

$WB_Double = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'WB_Double');
$usage_WB_Double = 0;
$besok_WB_Double = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'WB_Double');
$usage_WB_Double = @$besok_WB_Double[0]->Energy-@$WB_Double[0]->Energy;
$usage_WB_Double = $usage_WB_Double<0?0:$usage_WB_Double;

$RDM = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'RDM');
$usage_RDM = 0;
$besok_RDM = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'RDM');
$usage_RDM = @$besok_RDM[0]->Energy-@$RDM[0]->Energy;
$usage_RDM = $usage_RDM<0?0:$usage_RDM;

$Polishing = $this->m_admin->m_laporan_per_meter_per_tanggal($dt->format("Y-m-d"),'Polishing');
$usage_Polishing = 0;
$besok_Polishing = $this->m_admin->m_laporan_per_meter_per_tanggal($besok,'Polishing');
$usage_Polishing = @$besok_Polishing[0]->Energy-@$Polishing[0]->Energy;
$usage_Polishing = $usage_Polishing<0?0:$usage_Polishing;






            echo "
                  <tr>
                    <td>$no</td>
                    <td>".$dt->format("Y-m-d")."</td>
                    <td>".@$LWBP[0]->Energy."</td>
                    <td>".$usage_LWBP."</td>

                    <td>".@$LWBP2[0]->Energy."</td>
                    <td>".$usage_LWBP2."</td>



                    <td>".@$WBP[0]->Energy."</td>
                    <td>".$usage_WBP."</td>


                    <td>".@$Kvarh[0]->Energy."</td>
                    <td>".$usage_Kvarh."</td>

                    <td>".@$KCP_A[0]->Energy."</td>
                    <td>".$usage_KCP_A."</td>
                    <td>".@$KCP_B[0]->Energy."</td>
                    <td>".$usage_KCP_B."</td>
                    <td>".@$KCP_C[0]->Energy."</td>
                    <td>".$usage_KCP_C."</td>
                    <td>".@$KCP_D[0]->Energy."</td>
                    <td>".$usage_KCP_D."</td>
                    <td>".@$LPB_A[0]->Energy."</td>
                    <td>".$usage_LPB_A."</td>
                    <td>".@$LPB_B[0]->Energy."</td>
                    <td>".$usage_LPB_B."</td>
                    <td>".@$WTP[0]->Energy."</td>
                    <td>".$usage_WTP."</td>


                    <td>".@$WWTP[0]->Energy."</td>
                    <td>".$usage_WWTP."</td>                    

                    <td>".@$Hydrant[0]->Energy."</td>
                    <td>".$usage_Hydrant."</td>

                    <td>".@$PH1[0]->Energy."</td>
                    <td>".$usage_PH1."</td>

                    <td>".@$FR_A[0]->Energy."</td>
                    <td>".$usage_FR_A."</td>
                    <td>".@$FR_B[0]->Energy."</td>
                    <td>".$usage_FR_B."</td>   


                    <td>".@$REFI_A[0]->Energy."</td>
                    <td>".$usage_REFI_A."</td>
                    <td>".@$REFI_B[0]->Energy."</td>
                    <td>".$usage_REFI_B."</td>

                    <td>".@$ICE_C[0]->Energy."</td>
                    <td>".$usage_ICE_C."</td>   


                    <td>".@$Chiller[0]->Energy."</td>
                    <td>".$usage_Chiller."</td>        
                    <td>".@$Air_Compressor[0]->Energy."</td>
                    <td>".$usage_Air_Compressor."</td>
                    <td>".@$Shipment_Pump[0]->Energy."</td>
                    <td>".$usage_Shipment_Pump."</td>                    
                    <td>".@$Pump_House[0]->Energy."</td>
                    <td>".$usage_Pump_House."</td>
                    <td>".@$Agitator_Tank[0]->Energy."</td>
                    <td>".$usage_Agitator_Tank."</td>


                    <td>".@$Loading_Unloading[0]->Energy."</td>
                    <td>".$usage_Loading_Unloading."</td>

                    <td>".@$HPB[0]->Energy."</td>
                    <td>".$usage_HPB."</td>
                                   
                    <td>".@$Lab_Pump_Area[0]->Energy."</td>
                    <td>".$usage_Lab_Pump_Area."</td>


                    <td>".@$Main_Office_Pump_Area[0]->Energy."</td>
                    <td>".$usage_Main_Office_Pump_Area."</td>

                    <td>".@$Warehouse[0]->Energy."</td>
                    <td>".$usage_Warehouse."</td>

                    <td>".@$PBS[0]->Energy."</td>
                    <td>".$usage_PBS."</td>

                    <td>".@$WB_Double[0]->Energy."</td>
                    <td>".$usage_WB_Double."</td>


                    <td>".@$RDM[0]->Energy."</td>
                    <td>".$usage_RDM."</td>


                    <td>".@$Polishing[0]->Energy."</td>
                    <td>".$usage_Polishing."</td>





       
                                        

            ";
        }
        
        ?>
      </tbody>
      
  </table>