<?php 
require('../top.php');
$search2=mysqli_real_escape_string($con,$_GET['search2']);
if($search2!=''){
	$get_product=get_product($con,'','','',$search2);
}else{
	?>
	<script>
	window.location.href='order_master.php';
	</script>
	<?php
}										
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Order Master </h4>
				   <form method="post" class="example" action="search.php">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit" name="submit"><i class="fa fa-search"></i></button>
</form>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table">
							<thead>
								<tr>
									<th class="product-thumbnail">Order ID</th>
									
									<th class="product-name"><span class="nobr">Order Date</span></th>
									<th class="product-name"><span class="nobr">Name</span></th>
									<th class="product-name"><span class="nobr">Mobile</span></th>
									<th class="product-price"><span class="nobr"> Address </span></th>
									<th class="product-stock-stauts"><span class="nobr"> Payment Type </span></th>
									<th class="product-stock-stauts"><span class="nobr"> Payment Status </span></th>
									<th class="product-stock-stauts"><span class="nobr"> Order Status </span></th>
								</tr>
							</thead>
							<tbody>
								<?php
								$res=mysqli_query($con,"select `order`.*,order_status.name as order_status_str from `order`,order_status where order_status.id=`order`.order_status");
								while($list=mysqli_fetch_assoc($res)){
								?>
								
								
								<?php 
	 

  
  $uid=$_SESSION['USER_ID'];
  $query="select * from users where id='$uid'";
  $result=mysqli_query($con, $query);
  $roww=mysqli_fetch_assoc($result);
  
 
?>
								
								
								<tr>
									<td class="product-add-to-cart"><a href="order_master_detail.php?id=<?php echo $list['id']?>"> <?php echo $list['id']?></a><br/>
									<a href="../order_pdf.php?id=<?php echo $list['id']?>">PDF</a></td>
									<td class="product-name"><?php echo $list['added_on']?></td>
									
									<td class="product-name"><?php echo $roww['name']?></td>
												
												<td class="product-name"><?php echo $roww['mobile']?></td>
									
									
									<td class="product-name">
									<?php echo $list['address']?><br/>
									<?php echo $list['city']?><br/>
									<?php echo $list['pincode']?>
									</td>
									<td class="product-name"><?php echo $list['payment_type']?></td>
									<td class="product-name"><?php echo $list['payment_status']?></td>
									<td class="product-name"><?php echo $list['order_status_str']?></td>
									
								</tr>
								<?php } ?>
							</tbody>
							
						</table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>