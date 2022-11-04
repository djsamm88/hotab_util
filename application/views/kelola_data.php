
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 id="judul">
        Selamat datang di Sistem Informasi 
        <small>Kab.Humbang Hasundutan</small>
      </h1>      
    </section>

    <!-- Main content -->
    <section class="content container-fluid" >

      <!--------------------------
        | Your Page Content Here |
        -------------------------->    
<!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Pelaporan IKK <?php echo $tahun?></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
              
<table id="tbl_newsnya" class="table  table-striped table-bordered"  cellspacing="0" width="100%">
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
<a href="<?php echo base_url()?>index.php/welcome/kelola_data_xl?tahun=<?php echo date('Y')-1?>" target="blank" class="btn btn-primary">Excel</a>

        </div>
        
      </div>
      <!-- /.box -->

</section>
    <!-- /.content -->




<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Kelola Data</h4>
      </div>
      <div class="modal-body">
          <form id="form_tambah_admin">
            <input type="hidden" name="id_ikk" id="id_ikk" class="form-control" readonly="readonly">
            <input type="hidden" name="id_trx" id="id_trx" class="form-control" readonly="readonly">
            


            <div class="col-sm-4">Tahun</div>
            <div class="col-sm-8"><input type="text" name="tahun" id="tahun" required="required" class="form-control" placeholder="tahun" value="<?php echo $tahun?>" readonly="readonly"></div>
            <div style="clear: both;"></div><br>


            <div class="col-sm-4">Rumus A</div>
            <div class="col-sm-8"><input type="text" name="val_rumus_a" id="val_rumus_a" required="required" class="form-control" placeholder="val_rumus_a"></div>
            <div style="clear: both;"></div><br>

            <div class="col-sm-4">Rumus B</div>
            <div class="col-sm-8"><input type="text" name="val_rumus_b" id="val_rumus_b" required="required" class="form-control" placeholder="val_rumus_b"></div>
            <div style="clear: both;"></div><br>


          <div class="col-sm-4">file bukti</div>
            <div class="col-sm-8">
              <input class="form-control" name="file_bukti" id="file_bukti" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps">
            </div>
            <div style="clear: both;"></div><br>


            <div id="t4_info_form"></div>
            <button type="submit" class="btn btn-primary"> Simpan </button>
          </form>

          <div style="clear: both;"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<script>
$('.datepicker').datepicker({
  autoclose: true,
  format: 'yyyy-mm-dd' 
})


$(document).ready(function(){

  $('#tbl_newsnya').dataTable();

});

function edit_admin(id_ikk)
{
  $.get("<?php echo base_url()?>index.php/welcome/ikk_trx_by_id/?id_ikk="+id_ikk+"&tahun=<?php echo $tahun?>",function(e){
    console.log(e);
    $("#id_ikk").val(e[0].id);
    $("#id_trx").val(e[0].id_trx);
    

    $("#id_opd").val(e[0].id_opd);
    $("#val_rumus_a").val(e[0].val_rumus_a);
    $("#val_rumus_b").val(e[0].val_rumus_b);


  })
  $("#myModal").modal('show');
}



function tambah_admin()
{
  $("#id").val('');
 

  
  $("#myModal").modal('show');
}

function hapus_admin(id)
{
  if(confirm("Anda yakin menghapus?"))
  {
    $.get("<?php echo base_url()?>index.php/welcome/hapus_by_id/"+id,function(e){
      eksekusi_controller('<?php echo base_url()?>index.php/welcome/master_data/?tahun=<?php echo $tahun?>');
    })  
  }
  
}



$("#form_tambah_admin").on("submit",function(){
  $("#t4_info_form").html('Loading...');
  

  var ser = $(this).serialize();

      $.ajax({
            url: "<?php echo base_url()?>index.php/welcome/simpan_trx_ikk",
            type: "POST",
            contentType: false,
            processData:false,
            data:  new FormData(this),
            beforeSend: function(){
                //alert("sedang uploading...");
            },
            success: function(e){
                console.log(e);
                $("#t4_info_form").html("<div class='alert alert-success'>Berhasil.</div>").fadeIn().delay(3000).fadeOut();
                  setTimeout(function(){
                    $("#myModal").modal('hide');
                  },3000);

                
            },
            error: function(er){
                $("#t4_info_form").html("<div class='alert alert-warning'>Ada masalah! "+er+"</div>");
            }           
       });
  return false;
})



$("#myModal").on("hidden.bs.modal", function () {
  eksekusi_controller('<?php echo base_url()?>index.php/welcome/kelola_data?tahun=<?php echo $tahun?>','Data Master');
});
</script>
