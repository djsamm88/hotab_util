
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 id="judul">
        Price List
      </h1>      
    </section>

    <!-- Main content -->
    <section class="content container-fluid" >

<div class="row">

<section class="col-sm-4">
      <!--------------------------
        | Your Page Content Here |
        -------------------------->    
<!-- Default box -->
      <div class="box ">
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


        </div>
        
      </div>
      <!-- /.box -->
</section>

<section class="col-sm-4">

      <!-- Default box -->
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">topup</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form id="form_topup">
            <select class="form-control" id="Bank" name="Bank">
              <option value="">-- Bank --</option>
              <option value="BRI">BRI</option>
              <option value="MANDIRI">MANDIRI</option>
              <option value="BCA">BCA</option>
            </select>
            
            <br>

            owner_name
            <input type="text" name="owner_name" class="form-control">
            <br>

            amount
            <input type="text" name="amount" class="form-control nomor">

            <br>            
            <button class="btn btn-primary " type="submit" id="form_topup_btn">Topup</button>
            <br>
            BRI : 2135 01 000291 30 7 - DIGIFLAZZ INTERKONEK
            <div id="form_topup_info">
              <?php 
                error_reporting(0);
                foreach($respon as $dep)
                {
                  echo "History $tgl <br>";
                  echo "amount : <b>". rupiah(@$dep->amount). "</b><br>";
                  echo "notes : " . @$dep->notes  ." (masukkan di berita transfer)<br>";
                }
              ?>
            </div>
          </form>

        </div>
        
      </div>
      <!-- /.box -->

</section>
</div>



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

hanya_nomor(".nomor");

$(document).ready(function(){

  $('#tbl_newsnya').dataTable();

});

function topup(buyer_sku_code,product_name,price,seller_name,category)
{
  $("#t4_info_inquiry").html("");

  if(category=="Pulsa" || category=="E-Money")
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


$("#form_topup").on("submit",function(){


      $("#form_topup_info").html('Loading...');
      $("#form_topup_btn").hide();
      

      var ser = $(this).serialize();

      $.post("<?php echo base_url()?>index.php/welcome/deposit",ser,function(x){
        //var y = JSON.parse(x);
        
        console.log(x);
        //console.log(y.data.message);
        $("#form_topup_info").html('');
         
        var text = "<tr><td>amount</td><td>:" +x.data.amount+" </td></tr>"
                    +"<tr><td>notes</td><td>:" +x.data.notes+" (masukkan di berita transfer)</td></tr>"
                    +"<tr><td>rc</td><td>:" +x.data.rc+" </td></tr>";

          $("#form_topup_info").html("<table class='table table-bordered'>"+text+"</table>");
          
          /*
          setTimeout(function(){
            $("#myModal").modal('hide');
          },3000);
          */
        
      })  
  

  return false;
})


$("#myModal").on("hidden.bs.modal", function () {
  //eksekusi_controller('<?php echo base_url()?>index.php/welcome/price_list','Pricelist Master');
});
</script>
