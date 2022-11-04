
 KWH Report  <?php echo $mulai?> s/d <?php echo $selesai?>  


<table id="tbl_datanya_barang" class="table  table-striped table-bordered"  cellspacing="0" width="100%" border="1">
      <thead>
        <tr bgcolor="yellow">
              
              <th>No</th>                    
              <th>Date Time</th>
              <th>LWBP</th>              
              <th>LWBP2</th>              
              <th>WBP</th>              
              <th>Kvarh</th>   
              
              <th>PDU01A</th>   
              <th>PDU01A Usage</th>   
              <th>PDU01B</th>                 
              <th>PDU01B Usage</th>                 
                         
              <th>KCP A</th>              
              <th>KCP A Usage</th>              
              <th>KCP B</th>        
              <th>KCP B Usage</th>        
              
              <th>PDU02A</th>   
              <th>PDU02A Usage</th>   
              <th>PDU02B</th>   
              <th>PDU02B Usage</th>   
              <th>KCP C</th>              
              <th>KCP C Usage</th>              
              <th>KCP D</th>  
              <th>KCP D Usage</th>  


              <th>PDU03A</th>                            
              <th>PDU03A Usage</th>                            
              <th>LPB A</th>              
              <th>LPB A Usage</th>              
              <th>LPB B</th>              
              <th>LPB B Usage</th>              
              <th>PDU03B</th>              
              <th>PDU03B Usage</th>              
              <th>WTP</th>              
              <th>WTP Usage</th>              
              <th>WWTP</th>              
              <th>WWTP Usage</th>              
              <th>Hydrant</th>              
              <th>Hydrant Usage</th>              
              <th>PH1</th>  
              <th>PH1 Usage</th>  

              <th>PDU4A</th>              
              <th>PDU4A Usage</th>              
              
              <th>REFI A</th>         
              <th>REFI A Usage</th>         


              <th>REFI B</th>              
              <th>REFI B Usage</th>              
              

              <th>ICE CONDENCING</th>              
              <th>ICE CONDENCING Usage</th>              
              <th>Chiller A</th>              
              <th>Chiller A Usage</th>              
              <th>Chiller B</th>              
              <th>Chiller B Usage</th>              

              <th>PDU4B</th>               
              <th>PDU4B Usage</th>               
              <th>FRACTIONATION A</th>              
              <th>FRACTIONATION A Usage</th>              
              <th>FRACTIONATION B</th>  
              <th>FRACTIONATION B Usage</th>  
              <th>COMP. AMONIA R1</th>  
              <th>COMP. AMONIA R1 Usage</th>  
              <th>CPO WASHING</th>
              <th>CPO WASHING Usage</th>

              <th>PDU5A</th>      
              <th>PDU5A Usage</th>      
              <th>PDU5B</th>      
              <th>PDU5B Usage</th>      
              <th>PDU6</th>      
              <th>PDU6 Usage</th>      
              
              <th>Air Compressor</th>              
              <th>Shipment Pump</th>              
              <th>Pump House</th>              
              <th>Agitator Tank</th>              
              <th>Loading Unloading</th>              
              <th>HPB</th>              
              <th>Lab Pump Area</th>              
              <th>Main Office Pump Area</th>              
              <th>Warehouse</th>              
              <th>PBS</th>              
              <th>WB Double</th>              
              <th>RDM</th>              
              <th>Polishing</th>              
              

              

              

              

              
              
        </tr>
      </thead>
      <tbody>
       
          <?php 
            $no=0;

function search($array, $key, $value)
{
    $results = array();

    if (is_array($array)) {
        if (isset($array[$key]) && $array[$key] == $value) {
            $results[] = $array;
        }

        foreach ($array as $subarray) {
            $results = array_merge($results, search($subarray, $key, $value));
        }
    }

    return $results;
}





            foreach($all as $x)
            {
              $dt = new DateTime($x->tgl);
              $dt->modify('+1 day');
              $besok = $dt->format('Y-m-d');



                $bes = @search($allx, 'tgl', $besok)[0];


                

                $PDU01A_Usage =  round($bes['PDU01A'] - $x->PDU01A);
                $PDU01A_Usage = $PDU01A_Usage<0?0:$PDU01A_Usage;

                $PDU01B_Usage =  round($bes['PDU01B'] - $x->PDU01B);
                $PDU01B_Usage = $PDU01B_Usage<0?0:$PDU01B_Usage;

                $PDU02A_Usage =  round($bes['PDU02A'] - $x->PDU02A);
                $PDU02A_Usage = $PDU02A_Usage<0?0:$PDU02A_Usage;

                $KCP_A_Usage =  round($bes['KCP_A'] - $x->KCP_A);
                $KCP_A_Usage = $KCP_A_Usage<0?0:$KCP_A_Usage;

                $KCP_B_Usage =  round($bes['KCP_B'] - $x->KCP_B);
                $KCP_B_Usage = $KCP_B_Usage<0?0:$KCP_B_Usage;


                $PDU02B_Usage =  round($bes['PDU02B'] - $x->PDU02B);
                $PDU02B_Usage = $PDU02B_Usage<0?0:$PDU02B_Usage;

                $KCP_C_Usage =  round($bes['KCP_C'] - $x->KCP_C);
                $KCP_C_Usage = $KCP_C_Usage<0?0:$KCP_C_Usage;

                $KCP_D_Usage =  round($bes['KCP_D'] - $x->KCP_D);
                $KCP_D_Usage = $KCP_D_Usage<0?0:$KCP_D_Usage;


                $PDU03A_Usage =  round($bes['PDU03A'] - $x->PDU03A);
                $PDU03A_Usage = $PDU03A_Usage<0?0:$PDU03A_Usage;

                $LPB_A_Usage =  round($bes['LPB_A'] - $x->LPB_A);
                $LPB_A_Usage = $LPB_A_Usage<0?0:$LPB_A_Usage;

                $LPB_B_Usage =  round($bes['LPB_B'] - $x->LPB_B);
                $LPB_B_Usage = $LPB_B_Usage<0?0:$LPB_B_Usage;

                $PDU03B_Usage =  round($bes['PDU03B'] - $x->PDU03B);
                $PDU03B_Usage = $PDU03B_Usage<0?0:$PDU03B_Usage;

                $WTP_Usage =  round($bes['WTP'] - $x->WTP);
                $WTP_Usage = $WTP_Usage<0?0:$WTP_Usage;

                $WWTP_Usage =  round($bes['WWTP'] - $x->WWTP);
                $WWTP_Usage = $WWTP_Usage<0?0:$WWTP_Usage;

                $Hydrant_Usage =  round($bes['Hydrant'] - $x->Hydrant);
                $Hydrant_Usage = $Hydrant_Usage<0?0:$Hydrant_Usage;

                $PH1_Usage =  round($bes['PH1'] - $x->PH1);
                $PH1_Usage = $PH1_Usage<0?0:$PH1_Usage;

                $PDU4A_Usage =  round($bes['PDU4A'] - $x->PDU4A);
                $PDU4A_Usage = $PDU4A_Usage<0?0:$PDU4A_Usage;

                $REFI_A_Usage =  round($bes['REFI_A'] - $x->REFI_A);
                $REFI_A_Usage = $REFI_A_Usage<0?0:$REFI_A_Usage;

                $REFI_B_Usage =  round($bes['REFI_B'] - $x->REFI_B);
                $REFI_B_Usage = $REFI_B_Usage<0?0:$REFI_B_Usage;

                $ICE_C_Usage =  round($bes['ICE_C'] - $x->ICE_C);
                $ICE_C_Usage = $ICE_C_Usage<0?0:$ICE_C_Usage;

                $Chiller_A_Usage =  round($bes['Chiller_A'] - $x->Chiller_A);
                $Chiller_A_Usage = $Chiller_A_Usage<0?0:$Chiller_A_Usage;

                $Chiller_B_Usage =  round($bes['Chiller_B'] - $x->Chiller_B);
                $Chiller_B_Usage = $Chiller_B_Usage<0?0:$Chiller_B_Usage;

                $PDU4B_Usage =  round($bes['PDU4B'] - $x->PDU4B);
                $PDU4B_Usage = $PDU4B_Usage<0?0:$PDU4B_Usage;

                $FR_A_Usage =  round($bes['FR_A'] - $x->FR_A);
                $FR_A_Usage = $FR_A_Usage<0?0:$FR_A_Usage;

                $FR_B_Usage =  round($bes['FR_B'] - $x->FR_B);
                $FR_B_Usage = $FR_B_Usage<0?0:$FR_B_Usage;

                $C_AMO_R1_Usage =  round($bes['C_AMO_R1'] - $x->C_AMO_R1);
                $C_AMO_R1_Usage = $C_AMO_R1_Usage<0?0:$C_AMO_R1_Usage;

                $CPO_WASHING_Usage =  round($bes['CPO_WASHING'] - $x->CPO_WASHING);
                $CPO_WASHING_Usage = $CPO_WASHING_Usage<0?0:$CPO_WASHING_Usage;

                $PDU5A_Usage =  round($bes['PDU5A'] - $x->PDU5A);
                $PDU5A_Usage = $PDU5A_Usage<0?0:$PDU5A_Usage;

                $PDU5B_Usage =  round($bes['PDU5B'] - $x->PDU5B);
                $PDU5B_Usage = $PDU5B_Usage<0?0:$PDU5B_Usage;

                $PDU6_Usage =  round($bes['PDU6'] - $x->PDU6);
                $PDU6_Usage = $PDU6_Usage<0?0:$PDU6_Usage;

                


                


              $no++;
              echo "<tr>
                      <td>$no</td>
                      <td>".tglindo($x->tgl)."</td>
                      <td>$x->LWBP</td>                      
                      <td>$x->LWBP2</td>                      
                      <td>$x->WBP</td>                      
                      <td>$x->Kvarh</td>                      
                      <td>$x->PDU01A</td>                      
                      <td>$PDU01A_Usage</td> 

                      <td>$x->PDU01B</td>                      
                      <td>$PDU01B_Usage</td>                      

                      <td>$x->PDU02A</td>                      
                      <td>$PDU02A_Usage</td>                      

                      <td>$x->KCP_A</td>       
                      <td>$KCP_A_Usage</td>  

                      <td>$x->KCP_B</td>       
                      <td>$KCP_B_Usage</td>  

                      <td>$x->PDU02B</td>                      
                      <td>$PDU02B_Usage</td>                      
               
                      <td>$x->KCP_C</td>  
                      <td>$KCP_C_Usage</td>

                      <td>$x->KCP_D</td>  
                      <td>$KCP_D_Usage</td>

                      <td>$x->PDU03A</td>  
                      <td>$PDU03A_Usage</td>

                      <td>$x->LPB_A</td>  
                      <td>$LPB_A_Usage</td>

                      <td>$x->LPB_B</td>  
                      <td>$LPB_B_Usage</td>

                      <td>$x->PDU03B</td>  
                      <td>$PDU03B_Usage</td>

                      <td>$x->WTP</td>  
                      <td>$WTP_Usage</td>

                      <td>$x->WWTP</td>  
                      <td>$WWTP_Usage</td>

                      <td>$x->Hydrant</td>  
                      <td>$Hydrant_Usage</td>

                      <td>$x->PH1</td>  
                      <td>$PH1_Usage</td>

                      <td>$x->PDU4A</td>  
                      <td>$PDU4A_Usage</td>

                      <td>$x->REFI_A</td>  
                      <td>$REFI_A_Usage</td>

                      <td>$x->REFI_B</td>  
                      <td>$REFI_B_Usage</td>

                      <td>$x->ICE_C</td>  
                      <td>$ICE_C_Usage</td>

                      <td>$x->Chiller_A</td>  
                      <td>$Chiller_A_Usage</td>

                      <td>$x->Chiller_B</td>  
                      <td>$Chiller_B_Usage</td>

                      <td>$x->PDU4B</td>  
                      <td>$PDU4B_Usage</td>

                      <td>$x->FR_A</td>  
                      <td>$FR_A_Usage</td>

                      <td>$x->FR_B</td>  
                      <td>$FR_B_Usage</td>

                      <td>$x->C_AMO_R1</td>  
                      <td>$C_AMO_R1_Usage</td>

                      <td>$x->CPO_WASHING</td>  
                      <td>$CPO_WASHING_Usage</td>

                      <td>$x->PDU5A</td>  
                      <td>$PDU5A_Usage</td>

                      <td>$x->PDU5B</td>  
                      <td>$PDU5B_Usage</td>

                      <td>$x->PDU6</td>  
                      <td>$PDU6_Usage</td>



                                        
                      <td>$x->Air_Compressor</td>                      
                      <td>$x->Shipment_Pump</td>                      
                      <td>$x->Pump_House</td>                      
                      <td>$x->Agitator_Tank</td>                      
                      <td>$x->Loading_Unloading</td>                      
                      <td>$x->HPB</td>                      
                      <td>$x->Lab_Pump_Area</td>                      
                      <td>$x->Main_Office_Pump_Area</td>                      
                      <td>$x->Warehouse</td>                      
                      <td>$x->PBS</td>                      
                      <td>$x->WB_Double</td>                      
                      <td>$x->RDM</td>                      
                      <td>$x->Polishing</td>                      

                  </tr>
              ";
            }
          ?>
        
      </tbody>
      
  </table>