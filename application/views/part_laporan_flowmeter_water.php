Laporan <?php echo $Device_ID?> <?php echo $mulai?> s/d <?php echo $selesai?>  


<table id="tbl_datanya_barang" class="table  table-striped table-bordered"  cellspacing="0" width="100%" border="1">
      <thead>
        <tr>
              
              <th>No</th>                    
              <th>Date_Time</th>
              <th>Device_ID</th>
              <th>Nilai</th>

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
                <td>$x->Date_Time</td>
                <td>$x->Device_ID</td>
                <td>$x->Nilai</td>                  
              </tr>
          ");
          
        }
        
        
        ?>
      </tbody>
      
  </table>