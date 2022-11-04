<style type="text/css">
  .font_kecil{
    font-size:10px !important;
    color: #000000;
  }
   .font_kecil div *{
    color: #000000;
    font-size:10px !important;
   }
</style>



<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 id="judul">
        Selamat datang di Sistem HOTAB Utility
        
      </h1>      
    </section>

    <!-- Main content -->
    <section class="content container-fluid" id="t4_isi">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->    
      
    



<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title"> Power Meter Realtime Data Info </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>

<div class="box-body font_kecil">

            <div class="row">  
            <?php
            foreach($all_meter as $m)
            {

              $update_terakhir = strtotime($m->Date_Time);
              $sekarang        = strtotime(date('Y-m-d H:i:s'));

              $terlambat = round(abs($sekarang - $update_terakhir) / 60,2); // menit;
              //echo "$terlambat";
              $bg = $terlambat>30?" bg-danger":" bg-info";
              ?>
              
              <div class="col-lg-3 col-6">
                <div class="small-box <?php echo $bg?>">
                <div class="inner">
             
                <b><?php echo @$m->Device_ID?></b>                
                <p>Voltage : <?php echo @$m->Voltage_A_B?></p>
                <p>Power_Factor_Total : <?php echo @$m->Power_Factor_Total?></p>
                <p>Reactive_Power_Total : <?php echo @$m->Reactive_Power_Total?></p>
                <p>Energy : <?php echo @$m->Energy?></p>


                
                </div>
                
                <a href="#" onclick="load_real_data_detail('<?php echo $m->Device_ID?>');return false;" class="small-box-footer">More info...</a>
                </div>
              </div>

              <?php
            }
            ?>



            </div>



            </div>
          </div>


        </div>
      </center>
    </div>
  </div>



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







<script type="text/javascript">

 

 function load_json_realtime()
  {
    $.get("<?php echo base_url()?>index.php/welcome/real_data",function(e){
        $("#t4_real_data").html("");
        $("#t4_real_data").html(e);
    }) 
  }



  setInterval(function(){
   load_json_realtime();
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
