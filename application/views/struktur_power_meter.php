<style type="text/css">
  .font_kecil{
    font-size:10px !important;
    color: #000000;
  }
   .font_kecil div *{
    color: #000000;
    font-size:10px !important;
   }

   .small-box-footer{
    background: #caf8fa;
    padding: 5px;
    border: 1px solid #aaa;
   }
</style>














<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 id="judul">
        
        
      </h1>      
    </section>

    <!-- Main content -->
    <section class="content container-fluid" id="t4_isi">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->    
    

    <!-- Default box -->
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo date('Y-m-d')?></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>


        

        <div class="box-body font_kecil" style="overflow-x: auto;             overflow-y: hidden;     white-space: nowrap; background-color: #faf7f0;">


<center>
    <ul id="tree-data" style="display:none">
      <li style="background-color:#fcdd86 !important; height: 180px !important; ">
            
            
            <?php            
                $q_in_pln = $this->m_admin->by_Device_ID('IN_PLN');            
              ?>                
                <b>INCOMING PLN</b>                
                <p>Voltage  : <?php echo @$q_in_pln[0]->Voltage_A_B?></p>
                <p>Cosphi : <?php echo @$q_in_pln[0]->Power_Factor_Total?></p>
                <p>Energy : <?php echo @$q_in_pln[0]->Energy?></p>
                <p>Power Total : <?php echo @$q_in_pln[0]->Reactive_Power_Total?></p>

                <a href="#" onclick="load_real_data_detail('<?php echo @$q_in_pln[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
              
        <ul>
          <li style="background-color:#f1d5f5 !important; height: 50px !important; ">
            <b>PDU1</b>
            <ul>
              <li style="background-color:#f1d5f5 !important; height: 180px !important; ">
                
                <?php            
                  $PDU01A = $this->m_admin->by_Device_ID('PDU01A');            
                 ?>              
                <b><?php echo @$PDU01A[0]->Device_ID?></b>                
                <p>Voltage : <?php echo @$PDU01A[0]->Voltage_A_B?></p>
                <p>Cosphi : <?php echo @$PDU01A[0]->Power_Factor_Total?></p>
                <p>Power Total : <?php echo @$PDU01A[0]->Reactive_Power_Total?></p>
                <p>Energy : <?php echo @$PDU01A[0]->Energy?></p>
  
                <a href="#" onclick="load_real_data_detail('<?php echo @$PDU01A[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                
                  <ul>
                    <li style="background-color:#f5d5d5 !important; height: 180px !important; ">
                         <?php            
                          $KCP_A = $this->m_admin->by_Device_ID('KCP_A');            
                         ?>                                        
                              <b><?php echo @$KCP_A[0]->Device_ID?></b>                
                              <p>Voltage : <?php echo @$KCP_A[0]->Voltage_A_B?></p>
                              <p>Cosphi : <?php echo @$KCP_A[0]->Power_Factor_Total?></p>
                              <p>Power Total : <?php echo @$KCP_A[0]->Reactive_Power_Total?></p>
                              <p>Energy : <?php echo @$KCP_A[0]->Energy?></p>

                              <a href="#" onclick="load_real_data_detail('<?php echo @$KCP_A[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                    </li>
                  </ul>

              </li>


              <li style="background-color:#f1d5f5 !important; height: 180px !important; ">
                
                <?php            
                  $PDU01B = $this->m_admin->by_Device_ID('PDU01B');            
                 ?>              
                <b><?php echo @$PDU01B[0]->Device_ID?></b>                
                <p>Voltage : <?php echo @$PDU01B[0]->Voltage_A_B?></p>
                <p>Cosphi : <?php echo @$PDU01B[0]->Power_Factor_Total?></p>
                <p>Power Total : <?php echo @$PDU01B[0]->Reactive_Power_Total?></p>
                <p>Energy : <?php echo @$PDU01B[0]->Energy?></p>
  
                <a href="#" onclick="load_real_data_detail('<?php echo @$PDU01B[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                  
                  <ul>
                      <li style="background-color:#f5d5d5 !important; height: 180px !important; ">
                           <?php            
                            $KCP_B = $this->m_admin->by_Device_ID('KCP_B');            
                           ?>                                        
                                <b><?php echo @$KCP_B[0]->Device_ID?></b>                
                                <p>Voltage : <?php echo @$KCP_B[0]->Voltage_A_B?></p>
                                <p>Cosphi : <?php echo @$KCP_B[0]->Power_Factor_Total?></p>
                                <p>Power Total : <?php echo @$KCP_B[0]->Reactive_Power_Total?></p>
                                <p>Energy : <?php echo @$KCP_B[0]->Energy?></p>

                                <a href="#" onclick="load_real_data_detail('<?php echo @$KCP_B[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                      </li>
                    </ul>
              </li>

            </ul>
          </li>         
          <li style="background-color:#f1d5f5 !important; height: 50px !important; ">
            <b>PDU2</b>
            <ul>
              <li style="background-color:#f1d5f5 !important; height: 180px !important; ">
                <?php            
                  $PDU02A = $this->m_admin->by_Device_ID('PDU02A');            
                 ?>              
                    
                      <b><?php echo @$PDU02A[0]->Device_ID?></b>                
                      <p>Voltage : <?php echo @$PDU02A[0]->Voltage_A_B?></p>
                      <p>Cosphi : <?php echo @$PDU02A[0]->Power_Factor_Total?></p>
                      <p>Power Total : <?php echo @$PDU02A[0]->Reactive_Power_Total?></p>
                      <p>Energy : <?php echo @$PDU02A[0]->Energy?></p>

                      
                      <a href="#" onclick="load_real_data_detail('<?php echo @$PDU02A[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                      

                <ul>
                  <li style="background-color:#f5d5d5 !important; height: 180px !important; ">
                    

                      <?php            
                        $KCP_C = $this->m_admin->by_Device_ID('KCP_C');            
                       ?>              
                          
                            <b><?php echo @$KCP_C[0]->Device_ID?></b>                
                            <p>Voltage : <?php echo @$KCP_C[0]->Voltage_A_B?></p>
                            <p>Cosphi : <?php echo @$KCP_C[0]->Power_Factor_Total?></p>
                            <p>Power Total : <?php echo @$KCP_C[0]->Reactive_Power_Total?></p>
                            <p>Energy : <?php echo @$KCP_C[0]->Energy?></p>


                            <a href="#" onclick="load_real_data_detail('<?php echo @$KCP_C[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                          
                                
                  </li>                 
                  
                </ul>
              </li>
              <li style="background-color:#f1d5f5 !important; height: 180px !important; ">
                 <?php            
                    $PDU02B = $this->m_admin->by_Device_ID('PDU02B');            
                   ?>              
                     
                        <b><?php echo @$PDU02B[0]->Device_ID?></b>                
                        <p>Voltage : <?php echo @$PDU02B[0]->Voltage_A_B?></p>
                        <p>Cosphi : <?php echo @$PDU02B[0]->Power_Factor_Total?></p>
                        <p>Power Total : <?php echo @$PDU02B[0]->Reactive_Power_Total?></p>
                        <p>Energy : <?php echo @$PDU02B[0]->Energy?></p>


                        
                        <a href="#" onclick="load_real_data_detail('<?php echo @$PDU02B[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                <ul>
                   <li style="background-color:#f5d5d5 !important; height: 180px !important; ">
                    

                      <?php            
                        $KCP_D = $this->m_admin->by_Device_ID('KCP_D');            
                       ?>              
                          
                            <b><?php echo @$KCP_D[0]->Device_ID?></b>                
                            <p>Voltage : <?php echo @$KCP_D[0]->Voltage_A_B?></p>
                            <p>Cosphi : <?php echo @$KCP_D[0]->Power_Factor_Total?></p>
                            <p>Power Total : <?php echo @$KCP_D[0]->Reactive_Power_Total?></p>
                            <p>Energy : <?php echo @$KCP_D[0]->Energy?></p>


                            <a href="#" onclick="load_real_data_detail('<?php echo @$KCP_D[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                          
                                
                  </li>                 
                  
                </ul>
              </li>
            </ul>
          </li>         
          <li style="background-color:#f1d5f5 !important; height: 50px !important; ">
            <b>PDU3</b>  
             <ul>
              <li style="background-color:#f1d5f5 !important; height: 180px !important; ">
                
                <?php            
                  $PDU03A = $this->m_admin->by_Device_ID('PDU03A');            
                 ?>              
                <b><?php echo @$PDU03A[0]->Device_ID?></b>                
                <p>Voltage : <?php echo @$PDU03A[0]->Voltage_A_B?></p>
                <p>Cosphi : <?php echo @$PDU03A[0]->Power_Factor_Total?></p>
                <p>Power Total : <?php echo @$PDU03A[0]->Reactive_Power_Total?></p>
                <p>Energy : <?php echo @$PDU03A[0]->Energy?></p>
  
                <a href="#" onclick="load_real_data_detail('<?php echo @$PDU03A[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                
                  <ul>
                    <li style="background-color:#f5d5d5 !important; height: 180px !important; ">
                         <?php            
                          $LPB_A = $this->m_admin->by_Device_ID('LPB_A');            
                         ?>                                        
                              <b>LPB A (boiler)</b>                
                              <p>Voltage : <?php echo @$LPB_A[0]->Voltage_A_B?></p>
                              <p>Cosphi : <?php echo @$LPB_A[0]->Power_Factor_Total?></p>
                              <p>Power Total : <?php echo @$LPB_A[0]->Reactive_Power_Total?></p>
                              <p>Energy : <?php echo @$LPB_A[0]->Energy?></p>

                              <a href="#" onclick="load_real_data_detail('<?php echo @$LPB_A[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                    </li>
                    <li style="background-color:#f5d5d5 !important; height: 180px !important; ">
                         <?php            
                          $LPB_B = $this->m_admin->by_Device_ID('LPB_B');            
                         ?>                                        
                              <b>LPB A (boiler)</b>                
                              <p>Voltage : <?php echo @$LPB_B[0]->Voltage_A_B?></p>
                              <p>Cosphi : <?php echo @$LPB_B[0]->Power_Factor_Total?></p>
                              <p>Power Total : <?php echo @$LPB_B[0]->Reactive_Power_Total?></p>
                              <p>Energy : <?php echo @$LPB_B[0]->Energy?></p>

                              <a href="#" onclick="load_real_data_detail('<?php echo @$LPB_B[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                    </li>
                  </ul>

              </li>


              <li style="background-color:#f1d5f5 !important; height: 180px !important; ">
                
                <?php            
                  $PDU03B = $this->m_admin->by_Device_ID('PDU03B');            
                 ?>              
                <b><?php echo @$PDU03B[0]->Device_ID?></b>                
                <p>Voltage : <?php echo @$PDU03B[0]->Voltage_A_B?></p>
                <p>Cosphi : <?php echo @$PDU03B[0]->Power_Factor_Total?></p>
                <p>Power Total : <?php echo @$PDU03B[0]->Reactive_Power_Total?></p>
                <p>Energy : <?php echo @$PDU03B[0]->Energy?></p>
  
                <a href="#" onclick="load_real_data_detail('<?php echo @$PDU03B[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                  
                  <ul>
                      <li style="background-color:#f5d5d5 !important; height: 180px !important; ">
                           <?php            
                            $WTP = $this->m_admin->by_Device_ID('WTP');            
                           ?>                                        
                                <b><?php echo @$WTP[0]->Device_ID?></b>                
                                <p>Voltage : <?php echo @$WTP[0]->Voltage_A_B?></p>
                                <p>Cosphi : <?php echo @$WTP[0]->Power_Factor_Total?></p>
                                <p>Power Total : <?php echo @$WTP[0]->Reactive_Power_Total?></p>
                                <p>Energy : <?php echo @$WTP[0]->Energy?></p>

                                <a href="#" onclick="load_real_data_detail('<?php echo @$WTP[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                      </li>
                    </ul>
              </li>

            </ul>          
          </li>         
          <li style="background-color:#f1d5f5 !important; height: 50px !important; ">
            <b>PDU4</b>  
             <ul>
              <li style="background-color:#f1d5f5 !important; height: 180px !important; ">
                
                <?php            
                  $PDU4A = $this->m_admin->by_Device_ID('PDU4A');            
                 ?>              
                <b><?php echo @$PDU4A[0]->Device_ID?></b>                
                <p>Voltage : <?php echo @$PDU4A[0]->Voltage_A_B?></p>
                <p>Cosphi : <?php echo @$PDU4A[0]->Power_Factor_Total?></p>
                <p>Power Total : <?php echo @$PDU4A[0]->Reactive_Power_Total?></p>
                <p>Energy : <?php echo @$PDU4A[0]->Energy?></p>
  
                <a href="#" onclick="load_real_data_detail('<?php echo @$PDU4A[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                
                  <ul>
                    <li style="background-color:#f5d5d5 !important; height: 180px !important; ">
                         <?php            
                          $REFI_A = $this->m_admin->by_Device_ID('REFI_A');            
                         ?>                                        
                              <b>REFINERY A</b>                
                              <p>Voltage : <?php echo @$REFI_A[0]->Voltage_A_B?></p>
                              <p>Cosphi : <?php echo @$REFI_A[0]->Power_Factor_Total?></p>
                              <p>Power Total : <?php echo @$REFI_A[0]->Reactive_Power_Total?></p>
                              <p>Energy : <?php echo @$REFI_A[0]->Energy?></p>

                              <a href="#" onclick="load_real_data_detail('<?php echo @$REFI_A[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                    </li>
                    <li style="background-color:#f5d5d5 !important; height: 180px !important; ">
                         <?php            
                          $REFI_B = $this->m_admin->by_Device_ID('REFI_B');            
                         ?>                                        
                              <b>REFINERY B</b>                
                              <p>Voltage : <?php echo @$REFI_B[0]->Voltage_A_B?></p>
                              <p>Cosphi : <?php echo @$REFI_B[0]->Power_Factor_Total?></p>
                              <p>Power Total : <?php echo @$REFI_B[0]->Reactive_Power_Total?></p>
                              <p>Energy : <?php echo @$REFI_B[0]->Energy?></p>

                              <a href="#" onclick="load_real_data_detail('<?php echo @$REFI_B[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                    </li>

                    <li style="background-color:#f5d5d5 !important; height: 180px !important; ">
                         <?php            
                          $ICE_C = $this->m_admin->by_Device_ID('ICE_C');            
                         ?>                                        
                              <b>ICE CONDENCING</b>                
                              <p>Voltage : <?php echo @$ICE_C[0]->Voltage_A_B?></p>
                              <p>Cosphi : <?php echo @$ICE_C[0]->Power_Factor_Total?></p>
                              <p>Power Total : <?php echo @$ICE_C[0]->Reactive_Power_Total?></p>
                              <p>Energy : <?php echo @$ICE_C[0]->Energy?></p>

                              <a href="#" onclick="load_real_data_detail('<?php echo @$ICE_C[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                    </li>

                    <li style="background-color:#f5d5d5 !important; height: 180px !important; ">
                         <?php            
                          $CPO_WASHING = $this->m_admin->by_Device_ID('CPO_WASHING');            
                         ?>                                        
                              <b><?php echo @$CPO_WASHING[0]->Device_ID?></b>                
                              <p>Voltage : <?php echo @$CPO_WASHING[0]->Voltage_A_B?></p>
                              <p>Cosphi : <?php echo @$CPO_WASHING[0]->Power_Factor_Total?></p>
                              <p>Power Total : <?php echo @$CPO_WASHING[0]->Reactive_Power_Total?></p>
                              <p>Energy : <?php echo @$CPO_WASHING[0]->Energy?></p>

                              <a href="#" onclick="load_real_data_detail('<?php echo @$CPO_WASHING[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                    </li>
                  </ul>

              </li>


              <li style="background-color:#f1d5f5 !important; height: 180px !important; ">
                
                <?php            
                  $PDU4B = $this->m_admin->by_Device_ID('PDU4B');            
                 ?>              
                <b><?php echo @$PDU4B[0]->Device_ID?></b>                
                <p>Voltage : <?php echo @$PDU4B[0]->Voltage_A_B?></p>
                <p>Cosphi : <?php echo @$PDU4B[0]->Power_Factor_Total?></p>
                <p>Power Total : <?php echo @$PDU4B[0]->Reactive_Power_Total?></p>
                <p>Energy : <?php echo @$PDU4B[0]->Energy?></p>
  
                <a href="#" onclick="load_real_data_detail('<?php echo @$PDU4B[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                  
                  <ul>
                      <li style="background-color:#f5d5d5 !important; height: 180px !important; ">
                           <?php            
                            $FR_A = $this->m_admin->by_Device_ID('FR_A');            
                           ?>                                        
                                <b>FRACTIONATION A</b>                
                                <p>Voltage : <?php echo @$FR_A[0]->Voltage_A_B?></p>
                                <p>Cosphi : <?php echo @$FR_A[0]->Power_Factor_Total?></p>
                                <p>Power Total : <?php echo @$FR_A[0]->Reactive_Power_Total?></p>
                                <p>Energy : <?php echo @$FR_A[0]->Energy?></p>

                                <a href="#" onclick="load_real_data_detail('<?php echo @$FR_A[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                      </li>

                      <li style="background-color:#f5d5d5 !important; height: 180px !important; ">
                           <?php            
                            $FR_B = $this->m_admin->by_Device_ID('FR_B');            
                           ?>                                        
                                <b>FRACTIONATION B</b>                
                                <p>Voltage : <?php echo @$FR_B[0]->Voltage_A_B?></p>
                                <p>Cosphi : <?php echo @$FR_B[0]->Power_Factor_Total?></p>
                                <p>Power Total : <?php echo @$FR_B[0]->Reactive_Power_Total?></p>
                                <p>Energy : <?php echo @$FR_B[0]->Energy?></p>

                                <a href="#" onclick="load_real_data_detail('<?php echo @$FR_B[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                      </li>

                       <li style="background-color:#f5d5d5 !important; height: 180px !important; ">
                           <?php            
                            $C_AMO_R1 = $this->m_admin->by_Device_ID('C_AMO_R1');            
                           ?>                                        
                                <b>COMP. AMONIA R1</b>                
                                <p>Voltage : <?php echo @$C_AMO_R1[0]->Voltage_A_B?></p>
                                <p>Cosphi : <?php echo @$C_AMO_R1[0]->Power_Factor_Total?></p>
                                <p>Power Total : <?php echo @$C_AMO_R1[0]->Reactive_Power_Total?></p>
                                <p>Energy : <?php echo @$C_AMO_R1[0]->Energy?></p>

                                <a href="#" onclick="load_real_data_detail('<?php echo @$C_AMO_R1[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                      </li>
                    </ul>
              </li>

            </ul>            
          </li>         
          <li style="background-color:#f1d5f5 !important; height: 50px !important; ">
            <b>PDU5</b>  
            <ul>
              <li style="background-color:#f1d5f5 !important; height: 180px !important; ">
                
                <?php            
                  $PDU5A = $this->m_admin->by_Device_ID('PDU5A');            
                 ?>              
                <b><?php echo @$PDU5A[0]->Device_ID?></b>                
                <p>Voltage : <?php echo @$PDU5A[0]->Voltage_A_B?></p>
                <p>Cosphi : <?php echo @$PDU5A[0]->Power_Factor_Total?></p>
                <p>Power Total : <?php echo @$PDU5A[0]->Reactive_Power_Total?></p>
                <p>Energy : <?php echo @$PDU5A[0]->Energy?></p>
  
                <a href="#" onclick="load_real_data_detail('<?php echo @$PDU5A[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                
                 
              </li>


              <li style="background-color:#f1d5f5 !important; height: 180px !important; ">
                
                <?php            
                  $PDU5B = $this->m_admin->by_Device_ID('PDU5B');            
                 ?>              
                <b><?php echo @$PDU5B[0]->Device_ID?></b>                
                <p>Voltage : <?php echo @$PDU5B[0]->Voltage_A_B?></p>
                <p>Cosphi : <?php echo @$PDU5B[0]->Power_Factor_Total?></p>
                <p>Power Total : <?php echo @$PDU5B[0]->Reactive_Power_Total?></p>
                <p>Energy : <?php echo @$PDU5B[0]->Energy?></p>
  
                <a href="#" onclick="load_real_data_detail('<?php echo @$PDU5B[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                  
              </li>

            </ul>          
          </li>         
          <li style="background-color:#f1d5f5 !important; height: 50px !important; ">
            <b>PDU6</b>            
            <ul>

              <li style="background-color:#f1d5f5 !important; height: 180px !important; ">
                
                <?php            
                  $PDU6 = $this->m_admin->by_Device_ID('PDU6');            
                 ?>              
                <b><?php echo @$PDU6[0]->Device_ID?></b>                
                <p>Voltage : <?php echo @$PDU6[0]->Voltage_A_B?></p>
                <p>Cosphi : <?php echo @$PDU6[0]->Power_Factor_Total?></p>
                <p>Power Total : <?php echo @$PDU6[0]->Reactive_Power_Total?></p>
                <p>Energy : <?php echo @$PDU6[0]->Energy?></p>
  
                <a href="#" onclick="load_real_data_detail('<?php echo @$PDU6[0]->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                
                 
              </li>

              
              
            </ul>
          </li>
        </ul>
      </li>
      
    </ul>
    
    <div id="tree-view"></div>  

</center>


</div>
</div>
</section>








    <!-- Default box -->
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Detail </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>


        

        <div class="box-body" id="t4_real_data_detail">

        </div>


      </div>

              

</section>
    <!-- /.content -->

<script>
    $(document).ready(function () {
      // create a tree
      $("#tree-data").jOrgChart({
        chartElement: $("#tree-view"), 
        nodeClicked: nodeClicked
      });
      
      // lighting a node in the selection
      function nodeClicked(node, type) {
        node = node || $(this);
        $('.jOrgChart .selected').removeClass('selected');
        node.addClass('selected');
      }
    });


    </script>




<script type="text/javascript">

$("#content_pdu1a,#content_pdu1b,#content_pdu2a,#content_pdu2b,#content_pdu3a,#content_pdu3b,#content_pdu4a,#content_pdu4b,#content_pdu5a,#content_pdu5b,#content_pdu6,#content_Chiller_A,#content_Chiller_B").hide();

$("#show_all").on("click",function(){
  $("#content_pdu1a,#content_pdu1b,#content_pdu2a,#content_pdu2b,#content_pdu3a,#content_pdu3b,#content_pdu4a,#content_pdu4b,#content_pdu5a,#content_pdu5b,#content_pdu6,#content_Chiller_A,#content_Chiller_B").toggle(1500);
  
})

function btn_hilang(contennya)
{
  $(contennya).toggle(1500);
}  

 function load_json_realtime()
  {
    $.get("<?php echo base_url()?>index.php/welcome/real_data",function(e){
        $("#t4_real_data").html("");
        $("#t4_real_data").html(e);
    }) 
  }



  setInterval(function(){
   //load_json_realtime();
  }, 5000);

 function load_real_data_detail(Device_ID)
  {
    $.get("<?php echo base_url()?>index.php/welcome/real_data_detail/"+Device_ID,function(e){
      $("#t4_real_data_detail").html("");
      $("#t4_real_data_detail").html(e);
      $("html, body").animate({ scrollTop: $(document).height()-$(window).height() });


    })
    return false;
  }
</script>
