
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
              <th>Action</th>
              <th>product_name</th>           
              <th>category</th>           
              <th>brand</th>           
              <th>type</th>           
              <th>seller_name</th>           
              <th>price</th>           
              <th>buyer_sku_code</th>           
              <th>buyer_product_status</th>           
              <th>seller_product_status</th>           
              <th>unlimited_stock</th>           
              <th>stock</th>           
              <th>multi</th>           
              <th>start_cut_off</th>           
              <th>end_cut_off</th>           
              <th>desc</th>           
              
              
              
        </tr>
      </thead>
      <tbody>
        <?php         
        
        $no = 0;
        foreach($json->data as $x)
        {
          $btn = "<button class='btn btn-warning btn-xs' onclick='topup(\"$x->buyer_sku_code\",\"$x->product_name\",\"$x->price\",\"$x->seller_name\",\"$x->category\",\"$x->brand\");return false;'>Top Up</button>";
          $no++;

          $x->seller_product_status = $x->seller_product_status=='1'?'<font color=green>Aktif</font>':'<font color=red>Non Aktif</font>';
          

          $x->buyer_product_status = $x->buyer_product_status=='1'?'<font color=green>Aktif</font>':'<font color=red>Non Aktif</font>';
          		  
            echo (" 
              
              <tr>
                <td>$no</td>
                <td>
                  $btn
                </td>
                <td>$x->product_name <br> <small><b>".rupiah($x->price)."</b></small></td>
                <td>$x->category</td>
                <td>$x->brand</td>
                <td>$x->type</td>
                <td>$x->seller_name</td>
                <td><b>".rupiah($x->price)."</b></td>
                <td>$x->buyer_sku_code</td>
                <td>$x->buyer_product_status</td>
                <td>$x->seller_product_status</td>
                <td>$x->unlimited_stock</td>
                <td>$x->stock</td>
                <td>$x->multi</td>
                <td>$x->start_cut_off</td>
                <td>$x->end_cut_off</td>
                <td>$x->desc</td>
                
                
              </tr>
          ");
          
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




<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog ">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Transaksi</h4>
      </div>
      <div class="modal-body">
          <form id="form_tambah_admin">
            <input type="text" name="buyer_sku_code" id="buyer_sku_code" class="form-control" >
            <input type="text" name="product_name" id="product_name" class="form-control" readonly="readonly">
            <input type="text" name="price" id="price" class="form-control" readonly="readonly">
            <input type="text" name="seller_name" id="seller_name" class="form-control" readonly="readonly">
            <input type="text" name="category" id="category" class="form-control" readonly="readonly">
<br>

            <div class="col-sm-4">customer_no</div>
            <div class="col-sm-8">
              <input type="text" name="customer_no" id="customer_no" required="required" class="form-control" placeholder="customer_no" rows="3" style="height:100%;" autocomplete="off"></textarea>
              </div>
            <div style="clear: both;"></div><br>



            <div id="t4_info_inquiry"></div>
            <div id="t4_info_formnya"></div>

            <button type="submit" class="btn btn-primary" id="btn_go"> Transaksi </button>
            <button type="button" class="btn btn-success" id="btn_inquiry"> Inquiry </button>

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

function topup(buyer_sku_code,product_name,price,seller_name,category,brand)
{
  $("#t4_info_inquiry").html("");

  /*
  if(category=="Pulsa" || category=="E-Money"  || category=="Voucher")
  {
	  
	  
    $("#t4_info_formnya").html('');
    $("#btn_go").show();
    $("#btn_inquiry").hide();

    $("#customer_no").val('');

    $("#buyer_sku_code").val(buyer_sku_code);
    $("#product_name").val(product_name);
    $("#price").val(price);
    $("#seller_name").val(seller_name);
    $("#myModal").modal('show');  
  }
  */
  
    
    $("#t4_info_formnya").html('');
    $("#btn_go").show();
    $("#btn_inquiry").hide();

    $("#customer_no").val('');
    $("#category").val(category);

    $("#buyer_sku_code").val(buyer_sku_code);
    $("#product_name").val(product_name);
    $("#price").val(price);
    $("#seller_name").val(seller_name);
    $("#myModal").modal('show');  
  
  

  if(category=="PLN")
  {
    $("#t4_info_formnya").html('');
    $("#btn_go").hide();
    $("#btn_inquiry").show();
    $("#customer_no").val('');

    $("#buyer_sku_code").val(buyer_sku_code);
    $("#product_name").val(product_name);
    $("#price").val(price);
    $("#seller_name").val(seller_name);
    $("#myModal").modal('show');  
  }
  
  
  if(brand=="TELKOMSEL" && category=="Voucher")
  {
	  $("#customer_no").val('082277109994');
  }
  
   if(brand=="AXIS" && category=="Voucher")
  {
	  $("#customer_no").val('083177109994');
  }
  
  
}



$('#form_tambah_admin').on('keyup keypress', function(e) {
  var keyCode = e.keyCode || e.which;
  if (keyCode === 13) { 
    e.preventDefault();
    return false;
  }
});


$("#btn_inquiry").on("click",function(){
  $("#t4_info_formnya").html('Loading...');
  var customer_no = $("#customer_no").val();
  var xx = {customer_no:customer_no};
  
  $.post("<?php echo base_url()?>index.php/welcome/inquiry_pln",xx,function(s){
    console.log(s);
    var text = "<tr><td>customer_no</td><td>:" +s.data.customer_no+" </td></tr>"
                    +"<tr><td>meter_no</td><td>:" +s.data.meter_no+" </td></tr>"
                    +"<tr><td>name</td><td>:" +s.data.name+" </td></tr>"
                    +"<tr><td>segment_power</td><td>:" +s.data.segment_power+" </td></tr>"
                    +"<tr><td>subscriber_id</td><td>:" +s.data.subscriber_id+" </td></tr>";

          $("#t4_info_inquiry").html("<table class='table table-bordered'>"+text+"</table>");

          $("#btn_inquiry").hide();
          $("#btn_go").show();

  });
  
  console.log(xx);
  return false;
})


$("#form_tambah_admin").on("submit",function(){


  if(confirm("Anda yakin melakukan Trx?"))
  {
      $("#t4_info_formnya").html('Loading...');
      $("#btn_go").hide();
      

      var ser = $(this).serialize();

      $.post("<?php echo base_url()?>index.php/welcome/go_trx",ser,function(x){
        //var y = JSON.parse(x);
        
        console.log(x.data);
        //console.log(y.data.message);
        $("#t4_info_formnya").html('');
        
        var text = "<tr><td>buyer_last_saldo</td><td>:" +x.data.buyer_last_saldo+" </td></tr>"
                    +"<tr><td>buyer_sku_code</td><td>:" +x.data.buyer_sku_code+" </td></tr>"
                    +"<tr><td>customer_no</td><td>:" +x.data.customer_no+" </td></tr>"
                    +"<tr><td>message</td><td>:" +x.data.message+" </td></tr>"
                    +"<tr><td>price</td><td>:" +x.data.price+" </td></tr>"
                    +"<tr><td>rc</td><td>:" +x.data.rc+" </td></tr>"
                    +"<tr><td>ref_id</td><td>:" +x.data.ref_id+" </td></tr>"
                    +"<tr><td>sn</td><td>:" +x.data.sn+" </td></tr>"
                    +"<tr><td>status</td><td>:" +x.data.status+" </td></tr>"
                    +"<tr><td>tele</td><td>:" +x.data.tele+" </td></tr>"
                    +"<tr><td>wa </td><td>:" +x.data.wa +" </td></tr>";

					
					
		 var btn_print="";
		 
		    if(x.data.status=='Sukses')
          {
			 var tgl = '<?php echo date('Y-m-d H:i:s')?>';
             btn_print="<a href='<?php echo base_url()?>index.php/welcome/struk/?customer_no="+encodeURI(x.data.customer_no)+"&sn="+encodeURI(x.data.sn)+"&tgl="+encodeURI(tgl)+"&ref_id="+encodeURI(x.data.ref_id)+"' target='blank' class='btn btn-success btn-xs' >Print</a>";
          }else{
			  
			 $.get("<?php echo base_url()?>index.php/welcome/ambil_sign/"+x.data.ref_id,function(s){
				 console.log(s);
				 
				 //gantung
			 }) 
			 
             btn_print="<button type='button' onclick='go_ke_hit_ulang(\""+x.data.ref_id+"\")' data-dismiss='modal' class='btn btn-xs btn-danger'>Go Hit Ulang</button>";
			 
			 
          }
		  
					
					
          $("#t4_info_formnya").html("<table class='table table-bordered'>"+text+"</table>"+btn_print);
          
          /*
          setTimeout(function(){
            $("#myModal").modal('hide');
          },3000);
          */
        
      })  
  }

  

  return false;
})


$("#myModal").on("hidden.bs.modal", function () {
  //eksekusi_controller('<?php echo base_url()?>index.php/welcome/price_list','Pricelist Master');
});

function go_ke_hit_ulang(ref_id)
{
	console.log(ref_id);
		 
	$("#myModal").on("hidden.bs.modal", function () {
	   eksekusi_controller('<?php echo base_url()?>index.php/welcome/hit_ulang/?ref_id='+ref_id,'Hit Ulang ');
		 return false;
	});
		 
		
	 
}

</script>
