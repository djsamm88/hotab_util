Laporan Power Meter <?php echo $Device_ID?> <?php echo $mulai?> s/d <?php echo $selesai?>  


<table id="tbl_datanya_barang" class="table  table-striped table-bordered"  cellspacing="0" width="100%" border="1">
      <thead>
        <tr style="background-color:yellow;">
              
              <th>No</th>                    
              <th>Date_Time</th>
              <th>Device_ID</th>
              <th>Current R</th>
              <th>Current S</th>
              <th>Current T</th>
              <th>Current_N</th>
              <th>Current_G</th>
              <th>Current_Avg</th>
              <th>Voltage R</th>
              <th>Voltage S</th>
              <th>Voltage T</th>
              <th>Voltage_L_L_Avg</th>
              <th>Voltage R N</th>
              <th>Voltage S N</th>
              <th>Voltage T N</th>
              <th>Voltage_L_N_Avg</th>
              <th>Active_Power R</th>
              <th>Active_Power S</th>
              <th>Active_Power T</th>
              <th>Active_Power_Total</th>
              <th>Reactive_Power R</th>
              <th>Reactive_Power S</th>
              <th>Reactive_Power T</th>
              <th>Reactive_Power_Total</th>
              <th>Apparent_Power R</th>
              <th>Apparent_Power S</th>
              <th>Apparent_Power T</th>
              <th>Apparent_Power_Total</th>
              <th>Power_Factor R</th>
              <th>Power_Factor S</th>
              <th>Power_Factor T</th>
              <th>Power_Factor_Total</th>
              <th>Displacement_Power_Factor R</th>
              <th>Displacement_Power_Factor S</th>
              <th>Displacement_Power_Factor T</th>
              <th>Displacement_Power_Factor_Total</th>
              <th>Frequency</th>
              <th>Energy</th>                   
              
              
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
                <td>".tglindo($x->Date_Time)."</td>
                <td>$x->Device_ID</td>
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
                <td>$x->Energy</td>                           
              </tr>
          ");
          
        }
        
        
        ?>
      </tbody>
      
  </table>