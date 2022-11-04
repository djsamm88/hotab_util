
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 id="judul">
        Price List
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
          <h3 class="box-title">Aplikasi</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
<div class="table-responsive">
<table id="tbl_newsnya" class="table  table-striped table-bordered"  cellspacing="0" width="100%">
      <thead>
        <tr>
              
              <th>No</th>
              <th>id</th>
              <th>Prnt</th>
              <th>tgl</th>           
              
              <th>customer_no</th>           
              <th>sn</th>           
                         
              <th>message</th>           
              <th>status</th>           
              <th>buyer_sku_code</th>
              
              <th>ref_id</th>                   
              <th>trx_id</th>                   
                        
              <th>price</th>        
              <th>buyer_last_saldo</th> 
              
                 <th>rc</th>   
              <th>tele - wa</th>           
                     
              
              
        </tr>
      </thead>
      <tbody>
        <?php    
        //var_dump($json);  
        $no = 0;   
        foreach($json as $xx)
        {
          $no++;

         // echo $xx->tgl;


          $xxxxx = @$xx->json->data;

		if(@$xxxxx->ref_id!="" || @$xxxxx->trx_id!="")
		{
			
		
          if($xxxxx->status=='Sukses')
          {
            $print="<a href='".base_url()."index.php/welcome/struk/?customer_no=".urlencode($xxxxx->customer_no)."&sn=".urlencode($xxxxx->sn)."&tgl=".urlencode($xx->tgl)."&ref_id=".urlencode($xxxxx->ref_id)."' target='blank' class='btn btn-success btn-xs' >Print</a>";
          }else{
            $print="";
          }
		  
		  //var_dump($xxxxx);


           echo (" 
              
              <tr>
                <td>$no</td>                
                <td>$xx->id</td>
                <td>$print</td>
                <td>$xx->tgl</td>
                
                <td>$xxxxx->customer_no</td>
                <td>$xxxxx->sn</td>                
                <td>$xxxxx->message</td>
                <td>$xxxxx->status</td>
                <td>$xxxxx->buyer_sku_code</td>
                
                <td>$xxxxx->ref_id</td>
                <td>$xxxxx->trx_id</td>
                <td>".rupiah($xxxxx->price)."</td>
                <td>".rupiah($xxxxx->buyer_last_saldo)."</td>
                <td>$xxxxx->rc</td>
                
                
                
                <td>".@$xxxxx->tele." - ".@$xxxxx->wa."</td>
                
                
              </tr>
          ");
		  
		 }
        }
      
        
        ?>
      </tbody>
  </table>
</div>

        </div>
        
      </div>
      <!-- /.box -->

</section>
    <!-- /.content -->

<script type="text/javascript">
  


$(document).ready(function(){

  $('#tbl_newsnya').dataTable();

});
</script>
