	<?php 

include("conn/connect.php");
	//	print_r($_POST);

    
   $iid = $_GET['id'];
  
  
  $resss="SELECT * FROM `order` WHERE id = $iid";
  
  $resultt=mysqli_query($conn, $resss);
  
  $roww=mysqli_fetch_array($resultt);
  // echo $resss; die;

     $addresss=$roww['address'];
    
     $name1=$roww['name'];
     
     $city=$roww['city'];
    
     
	
			
	$query2="insert into seller_order(seller_id,address,name,city) 
	
	values('$iid','$addresss','$name1','$city')";
	
	//echo $query2;
	//echo "<br><br>";
	//mysql_query($query) die(mysql_error());
	if(mysqli_query($conn,$query2))
	{
	    
	
	
	
	
	
		echo"<script type=\"text/javascript\">". "window.alert('Successfully');"."top.location = 'order_master.php';". "</script>"; 
 
  
}
   else
   {
   echo"<h2>Account is not created!</h2>";
   }



?>



