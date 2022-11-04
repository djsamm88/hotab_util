
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 id="judul">
        Selamat datang di POS
        <small></small>
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
          <h3 class="box-title" id="judul2"></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse" >
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="alert alert-info">
          <form id="go_trx_jurnal">
              <div class="col-sm-3">
                  <input type="text" class="form-control datepicker" name="mulai" id="mulai"  value="<?php echo date( 'Y-m-d', strtotime(' -1 day' ))?>" autocomplete="off">
              </div>
              <div class="col-sm-3">
                <input type="text" class="form-control datepicker" name="selesai" id="selesai"  value="<?php echo date( 'Y-m-d', strtotime(' +1 day' ))?>" autocomplete="off">
              </div>
              
              <div class="col-sm-3">
                <select class="form-control" name="Device_ID" id="Device_ID" required>
                  <option value=""> -- Pilih Meter -- </option>
                  <?php 

                    foreach($all_deviceId as $Id)
                    {
                      if($Id==$Device_ID)
                      {
                        $sel = " selected='selected' ";
                      }else{
                        $sel="";
                      }
                      echo "<option $sel value='$Id->Device_ID'>$Id->Device_ID</option>";
                    }
                  ?>
                </select>
              </div>


              <div class="col-sm-2">
                <input type="submit" class="btn btn-primary btn-block" value="Go">
              </div>
          </form>          
          <div style="clear: both"></div>
          </div>

<div class="table-responsive">          


<?php 
if($go!=0)
{
  include "part_laporan_flowmeter_water.php";

}
?>
</div>


        </div>

 <?php
    if ($this->session->userdata('level') == '1') {

    ?>
        <input type="button" class="btn btn-primary" value="Download" id="download_pdf">
        <?php } ?>
      </div>
      <!-- /.box -->

</section>
    <!-- /.content -->




<script>
console.log("<?php echo $this->router->fetch_class();?>");
var classnya = "<?php echo $this->router->fetch_class();?>";

$('.datepicker').datepicker({
  autoclose: true,
  format: 'yyyy-mm-dd' 
})


$("#Device_ID").val("<?php echo $Device_ID?>");
$("#mulai").val("<?php echo $mulai?>");
$("#selesai").val("<?php echo $selesai?>");

$("#go_trx_jurnal").on("submit",function(){
    var mulai   = $("#mulai").val();
    var selesai  = $("#selesai").val();
    var Device_ID  = $("#Device_ID").val();
    if( (new Date(mulai).getTime() > new Date(selesai).getTime()))
    {
      alert("Perhatikan pengisian tanggal. Ada yang salah.");
      return false;
    }

    eksekusi_controller('<?php echo base_url()?>index.php/welcome/laporan_flowmeter_water/?go=1&mulai='+mulai+'&selesai='+selesai+'&Device_ID='+Device_ID,'Laporan Power Meter');
  return false;
})



$("#download_pdf").on("click",function(){
  var ser = $("#go_trx_jurnal").serialize();
  var url="<?php echo base_url()?>index.php/welcome/laporan_flowmeter_water_xl/?"+ser;
  window.open(url);

  return false;
})

$(document).ready(function(){

  $('#tbl_datanya_barang').dataTable();

});
$("#judul2").html("DataTable "+document.title);
</script>
