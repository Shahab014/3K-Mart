<?php
require('top.inc.php');


?>













<?php
include("conn/connect.php");
if(isset($_POST["submit"]))
{
$search=$_POST["search"];

$query="select * from order where added_on='$search'";

$run2=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($run2))
{
   
	
	$added_on=$row["added_on"];
	$address=$row["address"];
	$city=$row["city"];
	$pincode=$row["pincode"];
	$payment_type=$row["payment_type"];
	$payment_status=$row["payment_status"];
	$order_status=$row["order_status"];
	
	}
	
?>

<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Order Master </h4>
				   <form method="post" class="example" action="search-order-php.php">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit" name="submit"><i class="fa fa-search"></i></button>

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
	 

  
  $uid=$_SESSION['USER_ID'];
  $query="select * from users where id='$uid'";
  $result=mysqli_query($con, $query);
  $roww=mysqli_fetch_assoc($result);
  
 
?>
								
								
								<tr>
									<td class="product-add-to-cart"><a href="order_master_detail.php?id=<?php echo $id;?>"> <?php echo $id;?></a><br/>
									<a href="../order_pdf.php?id=<?php echo $id;?>">PDF</a></td>
									<td class="product-name"><?php echo $added_on;?></td>
									
									<td class="product-name"><?php echo $roww['name']?></td>
												
												<td class="product-name"><?php echo $roww['mobile']?></td>
									
									
									<td class="product-name">
									<?php echo $address;?><br/>
									<?php echo $city;?><br/>
									<?php echo $pincode;?>
									</td>
									<td class="product-name"><?php echo $payment_type;?></td>
									<td class="product-name"><?php echo $payment_status;?></td>
									<td class="product-name"><?php echo $payment_status;?></td>
									
								</tr>
								
							</tbody>
							
						</table>
						<?php 
						} 
						?>
						</form>
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