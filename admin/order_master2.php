<?php
require('top.inc.php');

$sql="select * from users order by id desc";
$res=mysqli_query($con,$sql);
?>

<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Order Master </h4>
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
									<th class="product-stock-stauts"><span class="nobr"> Delete </span></th>
								</tr>
							</thead>
							<tbody>
								<?php
								$ress=mysqli_query($con,"SELECT users.*, o.*, ot.name as order_str_name FROM `order`  as o, users, order_status as ot WHERE o.user_id = users.id AND o.order_status = ot.id");
								
								
								
								
								
								
								while($row=mysqli_fetch_assoc($ress)){
								?>
								<tr>
									<td class="product-add-to-cart"><a href="order_master_detail.php?id=<?php echo $row['id']?>"> <?php echo $row['id']?></a><br/>
									<a href="../order_pdf.php?id=<?php echo $row['id']?>">PDF</a></td>
									<td class="product-name"><?php echo $row['added_on']?></td>
									
									
									<td class="product-name"><?php echo $row['name']?></td>
									<td class="product-name"><?php echo $row['mobile']?></td>
									
								
									<td class="product-name">
									
									<?php echo $row['address']?><br/>
									<?php echo $row['city']?><br/>
									<?php echo $row['pincode']?>
									</td>
									<td class="product-name"><?php echo $row['payment_type']?></td>
									
									
									
									<td class="product-name"><?php echo $row['payment_status'];?></td>
									
									
									
								
									
									
									
									
									<td class="product-name"><?php echo $row['order_str_name'];?></td>
									
									
									
									
									<td class="product-name"><a href="delete.php?delete=<?php echo $row["id"]; ?>"><button class="btn-btn-success" name="delete" value="delete">Delete</button></a></td>
									
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