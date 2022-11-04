
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 id="judul">
        Welcome to Utility Meter System
        
      </h1>      
    </section>

    <!-- Main content -->
    <section class="content container-fluid" id="t4_isi">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->    
      <div class="row">
      <div class="col-sm-3">
        <img src="<?php echo base_url()?>assets/img/oneheart.png" class="img img-rounded" width="100%" style="border:3px solid #f39c12; padding: 25px;">
        </div>
    

    <div class="col-sm-9">
    <!-- Default box -->
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Informasi Login: </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>


        

        <div class="box-body">
              

            
            <pre>
              <?php 
                foreach($this->m_admin->m_data_admin_by_id($this->session->userdata('id_admin')) as $ses)
                {
                  echo "<br>";
                  echo "$ses->nama_admin <br>";
                  echo "$ses->OPD <br>";
                  
                  echo level($session['level']);
                }
              ?>
            </pre>
            
            </div>
          </div>




    
    <!-- Default box -->
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>


        
<style type="text/css">
  .btn-huge{
    padding-top:20px;
    padding-bottom:20px;
}
</style>
        <div class="box-body text-center">
           <center>
                

                    <div class="col-sm-4">
                          <button class="btn btn-primary btn-block btn-huge" onclick="eksekusi_controller('<?php echo base_url()?>index.php/welcome/struktur_power_meter','Power Meter Structure');return false;">POWER METER</button>
                    </div>  

                    <div class="col-sm-4">
                          <button class="btn btn-primary btn-block btn-huge" onclick="eksekusi_controller('<?php echo base_url()?>index.php/welcome/struktur_steam',' Steam Structure');return false;">FLOWMETER STEAM</button>
                    </div>  

                    <div class="col-sm-4">
                          <button class="btn btn-primary btn-block btn-huge" onclick="eksekusi_controller('<?php echo base_url()?>index.php/welcome/struktur_water/','Water Structure');return false;">FLOWMETER WATER</button>
                    </div>  


            </center>
            
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
