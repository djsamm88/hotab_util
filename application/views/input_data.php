
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 id="judul">
        Selamat datang di Sistem Informasi 
        
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
          <h3 class="box-title">Form Input Energy</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
              <button class="btn btn-primary" onclick="tambah_admin()"> Tambah Data</button>
<table id="tbl_newsnya" class="table  table-striped table-bordered"  cellspacing="0" width="100%">
      <thead>
        <tr>
              
              <th>No</th>
              <th>Date_Time</th>           
              <th>Device_Id</th>           
              <th>Energy</th>                                   
                   
              <th>User</th>
              
        </tr>
      </thead>
      <tbody>
        <?php         
        $no = 0;
        foreach($history_input as $x)
        {
          $no++;
          
            
            echo (" 
              
              <tr>
                <td>$no</td>
                <td>$x->Date_Time</td>
                <td>$x->Device_Id</td>
                <td>$x->Energy</td>
                <td>$x->nama_admin</td>


              </tr>
          ");
          
        }
        
        
        ?>
      </tbody>
  </table>

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
        <h4 class="modal-title">Tambah Data</h4>
      </div>
      <div class="modal-body">
          <form id="form_tambah_admin">
            <input type="hidden" name="id_admin" id="id_admin" class="form-control" value="<?php echo $this->session->userdata('id_admin')?>">
            



            <div class="col-sm-4">Device_Id</div>
            <div class="col-sm-8">
                <select class="form-control" name="Device_Id" required>
                    <option value=""> -- Pilih Device</option>
                    <option value="LWBP">LWBP</option>
                    <option value="LWBP2">LWBP2</option>
                    <option value="WBP">WBP</option>
                    <option value="Kvarh">Kvarh</option>

                    <option value="WWTP">WWTP</option>
                    <option value="Hydrant">Hydrant</option>
                    <option value="PH1">Power house 1</option>
                    <option value="Chiller">Chiller</option>
                    <option value="Air_Compressor">Air Compressor</option>
                    <option value="Shipment_Pump">Shipment_Pump</option>
                    <option value="Pump_House">Pump House</option>
                    <option value="Agitator_Tank">Agitator_Tank</option>
                    <option value="Loading_Unloading">Loading/Unloading</option>
                    <option value="HPB">HPB</option>
                    <option value="Lab_Pump_Area">Lab Pump Area</option>
                    <option value="Main_Office_Pump_Area">Main_Office_Pump_Area</option>
                    <option value="Warehouse">Warehouse</option>
                    <option value="PBS">PBS </option>
                    <option value="WB_Double">WB_Double  </option>
                    <option value="RDM">RDM  </option>
                    <option value="Polishing">Polishing  </option>
                    

                </select>
            </div>
            <div style="clear: both;"></div><br>


            <div class="col-sm-4">Energy</div>
            <div class="col-sm-8">
              <input type="text" name="Energy" id="Energy" required="required" class="form-control nomor" placeholder="Energy" autocomplete="off"></div>
            <div style="clear: both;"></div><br>

            <div class="col-sm-4">Date_Time</div>
            <div class="col-sm-8"><input type="text" name="Date_Time" id="Date_Time" required="required" class="form-control datepicker" placeholder="Date_Time" value="<?php echo date('Y-m-d')?>" autocomplete="off"></div>
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

hanya_nomor(".nomor");


$(document).ready(function(){

  $('#tbl_newsnya').dataTable();

});


function tambah_admin()
{
  $("#id").val('');
 

  
  $("#myModal").modal('show');
}




$("#form_tambah_admin").on("submit",function(){
  $("#t4_info_form").html('Loading...');
  

  var ser = $(this).serialize();

      $.ajax({
            url: "<?php echo base_url()?>index.php/welcome/simpan_input_data",
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
  eksekusi_controller('<?php echo base_url()?>index.php/welcome/input_data','Data History');
});
</script>
