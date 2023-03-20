<?php
require('top.inc.php');

?>


<?php 
session_start();
include("conn/connect.php");

  $idd=$_SESSION['id'];

  

  $query="select * from new_admin where id='$idd'";

  $result=mysqli_query($conn, $query);

  $row=mysqli_fetch_assoc($result);

 ?>

<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Profile Master  </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table">
							<thead>
								<tr>
									<th class="product-thumbnail">ID</th>
									<th class="product-name"><span class="nobr">User Name</span></th>
									
									
									<th class="product-name"><span class="nobr">Email</span></th>
									
									<th class="product-name"><span class="nobr">Password</span></th>
									
									
									<th class="product-price"><span class="nobr"> Mobile </span></th>
									<th class="product-stock-stauts"><span class="nobr"> Age </span></th>
									<th class="product-stock-stauts"><span class="nobr"> Address </span></th>
									<th class="product-stock-stauts"><span class="nobr"> Business Name </span></th>
									<th class="product-stock-stauts"><span class="nobr"> Business ESTD Year </span></th>
									<th class="product-stock-stauts"><span class="nobr"> Type of Business </span></th>
									<th class="product-stock-stauts"><span class="nobr"> GST IN </span></th>
									<th class="product-stock-stauts"><span class="nobr"> ID Card </span></th>
									<th class="product-stock-stauts"><span class="nobr"> Mode of Payment </span></th>
									<th class="product-stock-stauts"><span class="nobr"> Bank Name </span></th>
									<th class="product-stock-stauts"><span class="nobr"> Account No. </span></th>
									<th class="product-stock-stauts"><span class="nobr"> IFSC Code </span></th>
									<th class="product-stock-stauts"><span class="nobr"> Account Holder Name </span></th>
									
									
									<!--<th class="product-stock-stauts"><span class="nobr"> Delete </span></th>-->
								</tr>
							</thead>
							<tbody>
							
								
								
								
								
						
								<tr>
									
									
									
									<td class="product-name"><?php echo $row['id']?></td>
									<td class="product-name"><?php echo $row['username']?></td>
									
								
									<td class="product-name"><?php echo $row['Email']?></td>
									
									
									<td class="product-name"><?php echo $row['Password'];?></td>
									
									<td class="product-name"><?php echo $row['mobile'];?></td>
									<td class="product-name"><?php echo $row['age'];?></td>
									<td class="product-name"><?php echo $row['address'];?></td>
									<td class="product-name"><?php echo $row['bname'];?></td>
									<td class="product-name"><?php echo $row['year'];?></td>
									<td class="product-name"><?php echo $row['type2'];?></td>
									<td class="product-name"><?php echo $row['gst'];?></td>
									<td class="product-name"><a class="btn btn-sucess" href="proof-1/<?php echo $row['proof']; ?>" download>Download</a></td>
									<td class="product-name"><?php echo $row['payment'];?></td>
									<td class="product-name"><?php echo $row['bank'];?></td>
									<td class="product-name"><?php echo $row['account'];?></td>
									<td class="product-name"><?php echo $row['ifsc'];?></td>
									<td class="product-name"><?php echo $row['holder'];?></td>
									
									
									
								
									
									
									
									
									
									
									
									
									
									<!--<td class="product-name"><a href="delete.php?delete=<?php echo $row["id"]; ?>"><button class="btn-btn-success" name="delete" value="delete">Delete</button></a></td>-->
									
								</tr>
								
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