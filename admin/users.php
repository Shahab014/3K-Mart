<?phprequire('top.inc.php');if(isset($_GET['type']) && $_GET['type']!=''){	$type=get_safe_value($con,$_GET['type']);	if($type=='delete'){		$id=get_safe_value($con,$_GET['id']);		$delete_sql="delete from users where id='$id'";		mysqli_query($con,$delete_sql);	}}$sql="select * from users order by id desc";$res=mysqli_query($con,$sql);?><div class="content pb-0">	<div class="orders">	   <div class="row">		  <div class="col-xl-12">			 <div class="card">				<div class="card-body">				   <h4 class="box-title">Users  <input type="submit" name='submit' class="btn btn-primary " value="Export Excel File" onclick="exportTableToCSV('person.csv')" style="background-color:gray;border-color:gray;color:white;"></a></h4>				</div>				<div class="card-body--">				   <div class="table-stats order-table ov-h">					  <table class="table ">						 <thead>							<tr>							   <th class="serial">#</th>							   <th>ID</th>							   <th>Name</th>							   <th>Mobile</th>							   <th>Email</th>							   <th>Date</th>							   <th></th>							</tr>						 </thead>						 <tbody>							<?php 							$i=1;							while($row=mysqli_fetch_assoc($res)){?>							<tr>							   <td class="serial"><?php echo $i?></td>							   <td><?php echo $row['id']?></td>							   <td><?php echo $row['name']?></td>							   <td><?php echo $row['email']?></td>							   <td><?php echo $row['mobile']?></td>							   <td><?php echo $row['added_on']?></td>							   <td>								<?php								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";								?>							   </td>							</tr>							<?php } ?>						 </tbody>					  </table>				   </div>				</div>			 </div>		  </div>	   </div>	</div></div><script>//user-defined function to download CSV filefunction downloadCSV(csv, filename) {    var csvFile;    var downloadLink;       //define the file type to text/csv    csvFile = new Blob([csv], {type: 'text/csv'});    downloadLink = document.createElement("a");    downloadLink.download = filename;    downloadLink.href = window.URL.createObjectURL(csvFile);    downloadLink.style.display = "none";    document.body.appendChild(downloadLink);    downloadLink.click();}//user-defined function to export the data to CSV file formatfunction exportTableToCSV(filename) {   //declare a JavaScript variable of array type   var csv = [];   var rows = document.querySelectorAll("table tr");    //merge the whole data in tabular form    for(var i=0; i<rows.length; i++) {	var row = [], cols = rows[i].querySelectorAll("td, th");	for( var j=0; j<cols.length; j++)	   row.push(cols[j].innerText);	csv.push(row.join(","));   }    //call the function to download the CSV file   downloadCSV(csv.join("\n"), filename);}</script><?phprequire('footer.inc.php');?>