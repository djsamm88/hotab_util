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
-
        
      </h1>      
    </section>

    <!-- Main content -->
    <section class="content container-fluid" id="t4_isi">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->    
      
    
   
    <!-- Default box -->
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">  </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>


        

        <div class="box-body text-center font_kecil">
         
<center>
    <ul id="tree-data_water" style="display:none">
      <li style="background-color:#fcdd86 !important; height: 50px !important; ">
            
            
           
              
           <b>STEAM LPB</b>

                
        <ul>
          <li style="background-color:#f1d5f5 !important; height: 100px !important; ">
            

            <?php            
              $STEAM01 = $this->m_steam->by_Device_ID('STEAM01');            
             ?>
             <b>Steam LPB 01</b>
             <p> <?php echo @$STEAM01[0]->Date_Time?></p>
                <p>Nilai : <?php echo @$STEAM01[0]->Nilai?></p>

            </li>

            <li style="background-color:#f1d5f5 !important; height: 100px !important; ">
            <?php            
              $STEAM02 = $this->m_steam->by_Device_ID('STEAM02');            
             ?>
             <b>Steam LPB 02</b>
             <p> <?php echo @$STEAM02[0]->Date_Time?></p>
                <p>Nilai : <?php echo @$STEAM02[0]->Nilai?></p>
            </li>

          </ul>
        </li>
      </ul>




<div id="tree-view"></div>  

<div style="clear:both" ></div> 


        

        <div class="box-body" id="t4_real_data_detail">

        </div>


      </div>

              

</section>
    <!-- /.content -->

<script>
    $(document).ready(function () {
      // create a tree
      $("#tree-data_water").jOrgChart({
        chartElement: $("#tree-view"), 
        nodeClicked: nodeClicked
      });

      $("#tree-data_wtp").jOrgChart({
        chartElement: $("#tree-view_wtp"), 
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
    $.get("<?php echo base_url()?>index.php/welcome/flowmeter_detail/"+Device_ID,function(e){
      $("#t4_real_data_detail").html("");
      $("#t4_real_data_detail").html(e);
      $("html, body").animate({ scrollTop: $(document).height()-$(window).height() });


    })
    return false;
  }
</script>
