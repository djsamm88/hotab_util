<title>Duo Cell</title>
<style>
html,body{
	margin:0px;
	padding:5px;
}
body,table{
	    text-transform: uppercase;
		font-size:8px;
		font-family:verdana;
}

font-size:10px;
</style>

<body onload='window.print();'>
<br>
<center>
	HARAPAN BUNDA CELL 
	<br>
	SUKA MAJU, PINGGIR, RIAU
	<br>
	082135317870
	
</center>

<hr style="border-top: dotted 1px;" />

<table>


<?php 
/*
if(@$tbl_go_trx[0]->product_name=='Voucher Axis Data Mini 1 GB / 5 Hari')
{
	
	$tbl_go_trx[0]->product_name = 'Voucher Axis Data Mini 2 GB / 5 Hari';

}


if(@$tbl_go_trx[0]->product_name=='Voucher Axis Data Mini 2 GB / 5 Hari')
{
	
	$tbl_go_trx[0]->product_name = 'Voucher Axis Data Mini 3 GB / 5 Hari';

}
*/


$tbl_go_trx[0]->product_name = $tbl_go_trx[0]->product_name=='Voucher Axis Data Mini 1 GB / 3 Hari'?'Voucher Axis Data Mini 2 GB / 3 Hari_':$tbl_go_trx[0]->product_name;
$tbl_go_trx[0]->product_name = $tbl_go_trx[0]->product_name=='Voucher Axis Data Mini 1 GB / 5 Hari'?'Voucher Axis Data Mini 2 GB / 5 Hari_':$tbl_go_trx[0]->product_name;
$tbl_go_trx[0]->product_name = $tbl_go_trx[0]->product_name=='Voucher Axis Data Mini 2 GB / 5 Hari'?'Voucher Axis Data Mini 3 GB / 5 Hari_':$tbl_go_trx[0]->product_name;
$tbl_go_trx[0]->product_name = $tbl_go_trx[0]->product_name=='Voucher Axis Data Mini 3 GB / 5 Hari'?'Voucher Axis Data Mini 5 GB / 5 Hari_':$tbl_go_trx[0]->product_name;
$tbl_go_trx[0]->product_name = $tbl_go_trx[0]->product_name=='Voucher Axis Data Mini 5 GB / 5 Hari'?'Voucher Axis Data Mini 8 GB / 5 Hari_':$tbl_go_trx[0]->product_name;
	


?>


<tr>
	<td>TRX</td>
	<td>: <?php echo @$tbl_go_trx[0]->product_name?></td>	
</tr>


<?php if(@$tbl_go_trx[0]->category!='Voucher')
{
?>

<tr>
	<td>No.</td>
	<td>: <?php echo $customer_no?></td>	
</tr>

<?php
}
?>

<?php if(@$tbl_go_trx[0]->category=='PLN')
{
	
	$sn = str_replace("/","<br>/",$sn);

}
?>

<tr>
	<td valign="top">Sn</td>
	<td>: <b><?php echo $sn?></b></td>	
</tr>

<tr>
	<td>Info</td>
	<td>: Transaksi Sukses</td>	
</tr>


<tr>
	<td>Tgl</td>
	<td>: <?php echo $tgl?></td>	
</tr>


</table>
<hr style="border-top: dotted 1px;" />
<center>Terimakasih</center>

</body>

<script type="text/javascript">
	setTimeout(function(){window.close();},100);
</script>