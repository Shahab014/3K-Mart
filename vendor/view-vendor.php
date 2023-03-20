
<?php 

include("conn/connect.php");

  $id=$_REQUEST['id'];

  

  $query="select * from new_admin where id='$id'";

  $result=mysqli_query($conn, $query);

  $row=mysqli_fetch_assoc($result);

 ?>


<!DOCTYPE html>

<html lang="en">



  <head>

  

  <title>Vendor</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='custom.css' rel='stylesheet' type='text/css'>
    	</head>
    	
    	
    	
    	
    	
    	<style>
body {
    font-family: 'Lato', sans-serif;
    background-color:#F9E4BF;
}

h1 {
    margin-bottom: 40px;
}

label {
    color: #333;
}

.btn-send {
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    margin-bottom: 20px;
}

.help-block.with-errors {
    color: #ff5050;
    margin-top: 5px;
}
 
</style>

<body>


<form method="post" action="" id="contact-form"  role="form" enctype="multipart/form-data">
<table class="table">
							<thead>
								<tr>
									<th class="product-thumbnail">ID</th>
									<td class="product-name"><?php echo $row['id']?></td>
									</tr>
									
									<tr>
									<th class="product-name"><span class="nobr">User Name</span></th>
									<td class="product-name"><?php echo $row['username']?></td>
									</tr>
									
									<tr>
									
									<th class="product-name"><span class="nobr">Email</span></th>
									<td class="product-name" style="color:#FF0000;"><?php echo $row['Email']?></td>
									</tr>
									
									<tr>
									
									<th class="product-name"><span class="nobr">Password</span></th>
									<td class="product-name" style="color:#009900;"><?php echo $row['Password'];?></td>
									</tr>
									
									<tr>
									
									
									<th class="product-price"><span class="nobr"> Mobile </span></th>
									<td class="product-name"><?php echo $row['mobile'];?></td>
									</tr>
									
									<tr>
									<th class="product-stock-stauts"><span class="nobr"> Age </span></th>
									<td class="product-name"><?php echo $row['age'];?></td>
									</tr>
									
									<tr>
									<th class="product-stock-stauts"><span class="nobr"> Address </span></th>
									<td class="product-name"><?php echo $row['address'];?></td>
									</tr>
									
									<tr>
									<th class="product-stock-stauts"><span class="nobr"> Business Name </span></th>
									<td class="product-name"><?php echo $row['bname'];?></td>
									</tr>
									
									<tr>
									<th class="product-stock-stauts"><span class="nobr"> Business ESTD Year </span></th>
									<td class="product-name"><?php echo $row['year'];?></td>
									</tr>
									
									<tr>
									<th class="product-stock-stauts"><span class="nobr"> Type of Business </span></th>
									<td class="product-name"><?php echo $row['type2'];?></td>
									</tr>
									
									<tr>
									<th class="product-stock-stauts"><span class="nobr"> GST IN </span></th>
									<td class="product-name"><?php echo $row['gst'];?></td>
									</tr>
									
									<tr>
									<th class="product-stock-stauts"><span class="nobr"> ID Card </span></th>
									<td class="product-name"><?php echo $row['proof'];?></td>
									</tr>
									
									<tr>
									<th class="product-stock-stauts"><span class="nobr"> Mode of Payment </span></th>
									<td class="product-name"><?php echo $row['payment'];?></td>
									</tr>
									
									<tr>
									<th class="product-stock-stauts"><span class="nobr"> Bank Name </span></th>
									<td class="product-name"><?php echo $row['bank'];?></td>
									</tr>
									
									<tr>
									<th class="product-stock-stauts"><span class="nobr"> Account No. </span></th>
									<td class="product-name"><?php echo $row['account'];?></td>
									</tr>
									
									<tr>
									<th class="product-stock-stauts"><span class="nobr"> IFSC Code </span></th>
									<td class="product-name"><?php echo $row['ifsc'];?></td>
									</tr>
									
									<tr>
									<th class="product-stock-stauts"><span class="nobr"> Account Holder Name </span></th>
									<td class="product-name"><?php echo $row['holder'];?></td>
									
									<!--<th class="product-stock-stauts"><span class="nobr"> Delete </span></th>-->
								</tr>
							</thead>
							<tbody>
							
								
								<tr>
									
									
									
								<!--<td class="product-name"><a href="delete.php?delete=<?php echo $row["id"]; ?>"><button class="btn-btn-success" name="delete" value="delete">Delete</button></a></td>-->
									
								</tr>
								
							</tbody>
							
						</table>

</form>

     
    <!-- /.container-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
    
   
        </form>

   



       <center><a href="index.php"><h3>BACK</h3></a></center>





	</body>

</html>