<?php
require('top.inc.php');
?>



<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Delivery</strong><small> Date</small></div>
                        <form method="post">
							
							<table border="0" width="60%">
							
							 <tr>

							  <td>Client</td>

							  <td>
							      
							    <select name="mobile" id="" required class="form-control" style="width:100%;">
								        <option value="">Select Client Mobile No</option>
								        
								        <?php
								        
$queryy =mysqli_query($conn,"SELECT * FROM users");

while($rows=mysqli_fetch_array($queryy))
{ ?>
<option <?php if($_GET["applyfor"] == $rows["mobile"]) { ?> selected <?php } ?> value="<?php echo $rows['mobile'];?>"><?php echo $rows['mobile'];?></option>
<?php
}
?>
</select>
</td>

</tr>
<tr>
<td></td>
</tr>

<tr>
<td>Delivery Date</td>
<td><input type="text" name="d_date" style="width:100%;"></td>

</tr>

<tr>
<td></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" name="submit"></td>
</tr>
</table>

							
							
							
							
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
<?php
require('footer.inc.php');
?>