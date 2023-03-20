<?php
include("conn/connect.php");
$fran_id = $_GET["id"];
$sql = "UPDATE `order` SET admin_verify = 1 WHERE id = '{$fran_id}' ";
$rel = mysqli_query($conn, $sql) or die(mysqli_error($conn));
echo '<script>alert("Data Send")</script>';
echo '<script>window.location.href="order_master.php"</script>';
?>