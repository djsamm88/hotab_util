
        <li>
          <a href="<?php echo base_url()?>index.php/welcome">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>



        <?php 
        if($this->session->userdata('level')=='1')
        {
        ?>

        <li>
          <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/admin/data_admin','Master Admin');return false;">
            <i class="fa fa-lock"></i> <span>Admin Data</span>
          </a>
        </li>






        <?php 
          }

          ?>




        <li class="treeview">
          
          <a href="#"><i class="fa fa-institution"></i> <span>Structure <span class="label label-warning pull-right badge_gudang"></span></span></span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>

          <ul class="treeview-menu">
             <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/welcome/struktur_power_meter',' Power Meter Structure');return false;">
                <i class="fa fa-link"></i> <span>Power Meter </span>
              </a>
            </li>
            
            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/welcome/struktur_steam',' Steam Structure');return false;">
                <i class="fa fa-link"></i> <span>Steam FlowMeter  <span class="label label-warning pull-right badge_gudang"></span></span></span>
              </a>
            </li>


            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/welcome/struktur_water/','Water Structure');return false;">
                <i class="fa fa-link"></i> <span>Water FlowMeter </span>
              </a>
            </li>

            
            
          </ul>
        </li>

            
        

      <li>
          <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/welcome/real_data','Real Data');return false;">
            <i class="fa fa-lock"></i> <span>Real Data</span>
          </a>
        </li>



      <?php 
        if($this->session->userdata('level')=='1' || $this->session->userdata('level')=='2')
        {
        ?>
      <li>
          <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/welcome/input_data','Input Data');return false;">
            <i class="fa fa-lock"></i> <span>Input Data</span>
          </a>
        </li>

      <?php } ?>
    

    

        <li class="treeview">
          
          <a href="#"><i class="fa fa-institution"></i> <span>Report <span class="label label-warning pull-right badge_gudang"></span></span></span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>

          <ul class="treeview-menu">
             <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/welcome/laporan_power_meter?go=0','Laporan Power Meter');return false;">
                <i class="fa fa-link"></i> <span>Power Meter Log</span>
              </a>
            </li>

            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/welcome/laporan_kwh?go=0','Laporan Power Meter');return false;">
                <i class="fa fa-link"></i> <span>KWH Report</span>
              </a>
            </li>
            
            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/welcome/laporan_flowmeter_steam?go=0','FlowMeter Steam');return false;">
                <i class="fa fa-link"></i> <span>Steam FlowMeter  <span class="label label-warning pull-right badge_gudang"></span></span></span>
              </a>
            </li>

            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/welcome/laporan_flowmeter_water?go=0','FlowMeter Water');return false;">
                <i class="fa fa-link"></i> <span>Water FlowMeter  <span class="label label-warning pull-right badge_gudang"></span></span></span>
              </a>
            </li>

            
            
          </ul>
        </li>

            

        
        <li>
          <a href="#">
             &nbsp;
          </a>
        </li>


            
           