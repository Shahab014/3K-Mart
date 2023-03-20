
<?php 

include("conn/connect.php");



if(isset($_POST["submit"]))

{

	
	$username=$_POST["username"];

	$Email=$_POST["Email"];

	$Password=$_POST["Password"];
	$mobile=$_POST["mobile"];
	$age=$_POST["age"];
	$address=$_POST["address"];
	$bname=$_POST["bname"];
	$year=$_POST["year"];
	$type2=$_POST["type2"];
	$gst=$_POST["gst"];

	$payment=$_POST["payment"];
	$bank=$_POST["bank"];
	$account=$_POST["account"];
	$ifsc=$_POST["ifsc"];
	$holder=$_POST["holder"];

	


//image names
	$upload_dir = "proof-1/";
			    $pre = time();
	$proof=$_FILES['proof']['name'];
	//image temp names
	$temp_name=$_FILES['proof']['tmp_name'];
	
	
      // uploading images to its folder
	move_uploaded_file($temp_name,"proof-1/$proof");





	

    $sql_u="SELECT * FROM new_admin WHERE Email='$Email'";

	$sql_e="SELECT * FROM new_admin WHERE Password='$Password'";

	

	$res_u=mysqli_query($conn,$sql_u);

	$res_e=mysqli_query($conn,$sql_e);

	

	if(mysqli_num_rows($res_u) > 0)

	{

	echo"<script type=\"text/javascript\">". "window.alert('Sorry..Your Email is already exit');"."top.location = 'admin-form.php?id=$id';". "</script>";

	}

	elseif(mysqli_num_rows($res_e) > 0)

	{

	echo"<script type=\"text/javascript\">". "window.alert('Sorry..Your Password is already exit');"."top.location = 'admin-form.php?id=$id';". "</script>";

	}

	else

	{

	
	
	$idd = $_SESSION['id'];
	
	
   $query="insert into new_admin(username,Email,Password,mobile,age,address,bname,year,type2,gst,proof,payment,bank,account,ifsc,holder,created_by) 

	

	values('$username','$Email','$Password','$mobile','$age','$address','$bname','$year','$type2','$gst','$proof','$payment','$bank','$account','$ifsc','$holder','$idd')";

	

	//echo $query;

	//echo "<br><br>";

	//mysql_query($query) die(mysql_error());

	if(mysqli_query($conn,$query))

	{

	 $id = mysqli_insert_id($conn);

	

	echo"<script type=\"text/javascript\">". "window.alert('Successfully');"."top.location = 'view-vendor.php?id=$id';". "</script>"; 

 }

   else

   {

   echo"<h2>Account is not created!</h2>";

   }

}

}

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
    	
    	
    	.logo5
    	{
    	    width:120px;
    	    height:70px;
    	    margin-left:auto;
    	    margin-right:auto;
    	}
    	
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







     <div class="container">

        <div class="row">

            <div class="col-xl-8 offset-xl-2 py-5">

              

                <form method="post" action="" id="contact-form"  role="form" enctype="multipart/form-data">

                    <div class="messages"></div>

                    <div class="controls">

                        <div class="row">
                            
                            <div class="col-md-12">
                               <img src="../images/logo/4.png" class="logo5" alt="logo4">
                                </div>
                            
                            
                            <div class="col-md-12">
                                <h4>Personal Details <?php echo $id;?></h4>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Firstname *</label>
                                    <input id="form_name" type="text" name="username" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_lastname">Email *</label>
                                    <input id="form_lastname" type="email" name="Email" class="form-control" placeholder="Please enter your Email *" required="required" data-error="Email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Password *</label>
                                    <input id="form_email" type="text" name="Password" class="form-control" placeholder="Please enter your Password *" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                            
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Mobile *</label>
                                    <input id="form_email" type="text" name="mobile" class="form-control" placeholder="Please enter your Mobile *" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_email">Age *</label>
                                    <input id="form_email" type="text" name="age" class="form-control" placeholder="Please enter your Age *" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                            
                            
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Address *</label>
                                    <textarea id="form_message" name="address" class="form-control" placeholder="Address *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                            
                            
                             <div class="col-md-12">
                                <h4>Business Details</h4>
                                </div>
                                
                                
                                 <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Business Name *</label>
                                    <input id="form_email" type="text" name="bname" class="form-control" placeholder="Please enter your Business Name *"  data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                            
                            
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Business ESTD Year *</label>
                                    <input id="form_email" type="text" name="year" class="form-control" placeholder="Please enter your Business ESTD Year *"  data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Type of Business*</label>
                                    <input id="form_email" type="text" name="type2" class="form-control" placeholder="Please enter your Type of Business *"  data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                            
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">GST IN*</label>
                                    <input id="form_email" type="text" name="gst" class="form-control" placeholder="Please enter your Business GST IN*" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Attached ID Proof*</label>
                                    <input id="form_email" type="file" name="proof" class="form-control" placeholder="Please enter your ID Proof*" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Mode of Payment*</label>
                                    <input id="form_email" type="text" name="payment" class="form-control" placeholder="Please enter Mode of Payment *" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                            
                             <div class="col-md-12">
                                <h4>Account Details</h4>
                                </div>
                                
                                
                                 <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Bank Name*</label>
                                    <input id="form_email" type="text" name="bank" class="form-control" placeholder="Please enter your Business Bank Name*" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                            
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Account No*</label>
                                    <input id="form_email" type="text" name="account" class="form-control" placeholder="Please enter your Account No *"  data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                            
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">IFSC Code*</label>
                                    <input id="form_email" type="text" name="ifsc" class="form-control" placeholder="Please enter your IFSC Code*"  data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Account Holder Name*</label>
                                    <input id="form_email" type="text" name="holder" class="form-control" placeholder="Please enter your A/c Holder Name*"  data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                            
                            
                            <div class="col-md-12">
                                <input type="submit" name="submit" class="btn btn-success btn-send" value="Save">
                            </div>
                        </div>
                        
                    </div>

                </form>

            </div>
            <!-- /.8 -->

        </div>
        <!-- /.row-->

    </div>
    <!-- /.container-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
    
   
        </form>

   



       <center><a href="index.php"><h3>BACK</h3></a></center>





	</body>

</html>