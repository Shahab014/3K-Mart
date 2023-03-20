<?php
include("conn/connect.php");
$delete_id=$_REQUEST["delete"];

$query1="delete from order where id='$delete_id'";
if(mysqli_query($conn,$query1))
{
	echo"<script type=\"text/javascript\">". "window.alert(' deleted Successfully');"."top.location = 'order_master.php';". "</script>"; 
}
else{
	echo"<script type=\"text/javascript\">". "window.alert(' Somthing Error');"."top.location = 'order_master.php';". "</script>"; 
}
?>