<?php 
		include("conn/connect.php");

$edit=$_GET["edit"];
$query1="select * from order where id='$edit'";

$run=mysqli_query($conn,$query1);
while($roww=mysqli_fetch_array($run))
{
	
    
	$id=$roww["id"];
	
	$payment_status=$roww["payment_status"];
	
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Edit-Order</title>
   
   
   <link rel="stylesheet" href="dist/css/jquery.wysiwygEditor.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,800" rel="stylesheet" type="text/css">

 <link rel="stylesheet" href="dist/css/jquery.wysiwygEditor.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,800" rel="stylesheet" type="text/css">
   
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		
		<script src="editor.js"></script>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="editor.css" type="text/css" rel="stylesheet"/>
  
  
  
       	<style>
		    
		    #cke_editor2
		    {
		        margin-top:500px;
		        display:none;
		    }
		    
		</style>
		
	
		
		
	
		
		
		<script>
			$(document).ready(function() {
				$("#txtEditor1").Editor();
				$(".Editor-editor").html($("#txtEditor1").html());
			});
		</script>
		
		<script>
		$(document).ready(function(){
        $("#postform").on("submit",function(){
        $("#hiddenArea").val($(".Editor-editor").html());
});
    });
		</script>
  
   
   
   
   
	</head>
<body style=" background-image: url(http://kreativo.se/backlogin.jpg);">
<br><br><br><br>
<form method="post" id="postform" enctype="multipart/form-data">

<center><table border="1" bgcolor="#FFCCFF" width="50%" height="100%">







<tr>
<td>ORDER STATUS</td>
<td><select name="payment_status" value="<?php echo $payment_status;?>">
									        
									        <option>Select Status</option>
									        <option <?php if($payment_status == 'Order') { ?> selected <?php } ?> value="Order">Order</option>
									        <option <?php if($payment_status == 'Shipped') { ?> selected <?php } ?> value="Shipped">Shipped</option>
									        <option <?php if($payment_status == 'Today Delivery') { ?> selected <?php } ?> value="Today Delivery">Today Delivery</option>
									        <option <?php if($payment_status == 'Cancel') { ?> selected <?php } ?> value="Cancel">Cancel</option>
									        <option <?php if($payment_status == 'Exchange') { ?> selected <?php } ?> value="Exchange">Exchange</option>
									        
									        
									        
									    </select>
										</td>



<tr>
<td colspan="2"align="center"><input type="submit"name="Editsubmit"value="Update Now"></td>
</tr>
</table><center><a href="index.php"><h3>BACK</h3></a></center>
</center>
</form>

                           
				
				
				
				
				
			


</body>
</html>
<?php 
		include("conn/connect.php");
if(isset($_POST["Editsubmit"]))
{
    
    print_r($_POST);
$edit=$_GET["edit"];

    $id=$_POST["id"];
	 $payment_status=$_POST["payment_status"];
   

    
	
	
	
	
	
	$query="update order set payment_status='$payment_status' where id='$edit'";
//mysql_query($query) or die(mysql_error());



	
if(mysqli_query($conn,$query))
{
echo"<script type=\"text/javascript\">". "window.alert('Successfully Submitted');"."top.location = 'order_master.php';". "</script>";
} 
}
?>