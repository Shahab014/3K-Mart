<?php
include("conn/connect.php");
$delete_id=$_GET["delete"];

$query1="DELETE FROM `new_admin` WHERE `id` = '{$delete_id}'";
if(mysqli_query($conn,$query1))
{
	echo"<script type=\"text/javascript\">". "window.alert(' deleted Successfully');"."top.location = 'profile_master.php';". "</script>"; 
}
else{
	echo"<script type=\"text/javascript\">". "window.alert(' Somthing Error');"."top.location = 'profile_master.php';". "</script>"; 
}
?>