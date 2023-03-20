<?php
include("conn/connect.php");
$delete_id=$_GET["delete"];

$query1="DELETE FROM `exchange` WHERE `id` = '{$delete_id}'";
if(mysqli_query($conn,$query1))
{
	echo"<script type=\"text/javascript\">". "window.alert(' deleted Successfully');"."top.location = 'exchange.php';". "</script>"; 
}
else{
	echo"<script type=\"text/javascript\">". "window.alert(' Somthing Error');"."top.location = 'exchange.php';". "</script>"; 
}
?>