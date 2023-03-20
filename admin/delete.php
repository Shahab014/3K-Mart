<?php
include("conn/connect.php");
$delete_id=$_GET["delete"];

$query5="DELETE FROM `order` WHERE `id` = '{$delete_id}'";
if(mysqli_query($conn,$query5))
{
	echo"<script type=\"text/javascript\">". "window.alert(' deleted Successfully');"."top.location = 'order_master.php';". "</script>"; 
}
else{
	echo"<script type=\"text/javascript\">". "window.alert(' Somthing Error');"."top.location = 'order_master.php';". "</script>"; 
}
?>