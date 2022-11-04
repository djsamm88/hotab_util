Laporan Power Meter <?php echo $Device_ID?> <?php echo $mulai?> s/d <?php echo $selesai?>  


<table id="tbl_datanya_barang" class="table  table-striped table-bordered"  cellspacing="0" width="100%" border="1">
      <thead>
        <tr style="background-color:yellow;">
              
              <th>No</th>                    
              <th>Date Time</th>
              <th>Device ID</th>
              <th>Energy</th>           
              <th>Current R</th>
              <th>Current S</th>
              <th>Current T</th>
              <th>Current N</th>
              <th>Current G</th>
              <th>Current Avg</th>
              <th>Voltage R</th>
              <th>Voltage S</th>
              <th>Voltage T</th>
              <th>Voltage L L Avg</th>
              <th>Voltage R N</th>
              <th>Voltage S N</th>
              <th>Voltage T N</th>
              <th>Voltage L N Avg</th>
              <th>Active Power R</th>
              <th>Active Power S</th>
              <th>Active Power T</th>
              <th>Active Power Total</th>
              <th>Reactive Power R</th>
              <th>Reactive Power S</th>
              <th>Reactive Power T</th>
              <th>Reactive Power Total</th>
              <th>Apparent Power R</th>
              <th>Apparent Power S</th>
              <th>Apparent Power T</th>
              <th>Apparent Power Total</th>
              <th>Power Factor R</th>
              <th>Power Factor S</th>
              <th>Power Factor T</th>
              <th>Power Factor Total</th>
              <th>Displacement Power Factor R</th>
              <th>Displacement Power Factor S</th>
              <th>Displacement Power Factor T</th>
              <th>Displacement Power Factor Total</th>
              <th>Frequency</th>
                      
              
              
        </tr>
      </thead>
      <tbody>
        <?php
        $total_all=0;         
        $no = 0;
        foreach($all as $x)
        {
          
          $no++;
            
            echo (" 
              
              <tr>
                <td>$no</td>
                <td>".tglindo($x->Date_Time)." &nbsp;</td>
                <td>$x->Device_ID</td>
                <td>$x->Energy</td>     
                <td>$x->Current_A</td>
                <td>$x->Current_B</td>
                <td>$x->Current_C</td>
                <td>$x->Current_N</td>
                <td>$x->Current_G</td>
                <td>$x->Current_Avg</td>
                <td>$x->Voltage_A_B</td>
                <td>$x->Voltage_B_C</td>
                <td>$x->Voltage_C_A</td>
                <td>$x->Voltage_L_L_Avg</td>
                <td>$x->Voltage_A_N</td>
                <td>$x->Voltage_B_N</td>
                <td>$x->Voltage_C_N</td>
                <td>$x->Voltage_L_N_Avg</td>
                <td>$x->Active_Power_A</td>
                <td>$x->Active_Power_B</td>
                <td>$x->Active_Power_C</td>
                <td>$x->Active_Power_Total</td>
                <td>$x->Reactive_Power_A</td>
                <td>$x->Reactive_Power_B</td>
                <td>$x->Reactive_Power_C</td>
                <td>$x->Reactive_Power_Total</td>
                <td>$x->Apparent_Power_A</td>
                <td>$x->Apparent_Power_B</td>
                <td>$x->Apparent_Power_C</td>
                <td>$x->Apparent_Power_Total</td>
                <td>$x->Power_Factor_A</td>
                <td>$x->Power_Factor_B</td>
                <td>$x->Power_Factor_C</td>
                <td>$x->Power_Factor_Total</td>
                <td>$x->Displacement_Power_Factor_A</td>
                <td>$x->Displacement_Power_Factor_B</td>
                <td>$x->Displacement_Power_Factor_C</td>
                <td>$x->Displacement_Power_Factor_Total</td>
                <td>$x->Frequency</td>
                                      
              </tr>
          ");
          
        }
        
        
        ?>
      </tbody>
      
  </table>