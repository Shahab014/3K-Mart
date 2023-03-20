<?php
include("conn/connect.php");
$delete_id=$_REQUEST["delete"];

$query1="delete from slider where id='$delete_id'";
if(mysqli_query($conn,$query1))
{
	echo"<script type=\"text/javascript\">". "window.alert(' deleted Successfully');"."top.location = 'view-slider.php';". "</script>"; 
}
?>