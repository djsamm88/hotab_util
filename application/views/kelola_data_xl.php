

          <h3 class="box-title">Pelaporan IKK <?php echo $tahun?></h3>

<table id="tbl_newsnya" class="table  table-striped table-bordered" border="1"  cellspacing="0" width="100%">
      <thead>
        <tr>
              
              <th>No</th>
              <th>Ikk Output</th>           
              <th>Ikk Outcome</th>           
              <th>Rumus A-B</th>                                   
              <th>Capaian</th>                                    
              <th>Ket</th>                                    
              <th>Update</th>                                    
              <th>File</th>                                    
              <th>OPD</th>           
              <th>Action</th>
              
        </tr>
      </thead>
      <tbody>
        <?php         
        $no = 0;
        foreach($ikk as $x)
        {
          $btn = "<button class='btn btn-warning btn-xs' onclick='edit_admin($x->id);return false;'>kelola data</button>
                 ";
          $no++;
          $capaian = @($x->val_rumus_a/$x->val_rumus_b)*100;

          $capaian = number_format((float)$capaian, 2, '.', '');

            
            echo (" 
              
              <tr>
                <td>$no</td>
                <td>$x->ikk_output</td>
                <td>$x->ikk_outcome</td>
                <td>$x->rumus_a :<br><b>$x->val_rumus_a</b><hr> $x->rumus_b :<br><b>$x->val_rumus_b</b></td>
                
                
                <td><b>$capaian</b></td>
                <td>$x->ket</td>
                <td>$x->trx_update</td>
                <td><a href='".base_url()."uploads/$x->file_bukti' target='blank'>$x->file_bukti</a></td>
                <td>$x->OPD</td>
                
                <td>
                  $btn
                </td>
              </tr>
          ");
          
        }
        
        
        ?>
      </tbody>
  </table>
