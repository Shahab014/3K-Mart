<?php 
require('top.php');

?>
<!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Login/Register</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        
		<!-- Start Contact Area -->
        <section class="htc__contact__area ptb--100 bg__white">
            <div class="container">
                <div class="row">
					<div class="col-md-3">
						 
                
				</div>
				
				
				
				
				<?php 

		include("conn/connect.php");
	//	print_r($_POST);

if(isset($_POST["submit"]))
{
	//echo "aaaaaaaaaaaaaaaaaaaaaaaaa";
    $name=$_POST["name"];
    

    $email=$_POST["email"];
	$mobile=$_POST["mobile"];
	$password=$_POST["password"];
	
	
			
			

	
		
	
	
  
	

	
	
	$query="insert into users(name,email,mobile,password,added_on) 
	
	values('$name','$email','$mobile','$password',curdate())";
	
	//echo $query;
	//echo "<br><br>";
	//mysql_query($query) die(mysql_error());
	if(mysqli_query($conn,$query))
	{
	    
	
	
	
	
	
		echo"<script type=\"text/javascript\">". "window.alert('Successfully');"."top.location = 'send_message.php?id=$id';". "</script>"; 
 
  
}
   else
   {
   echo"<h2>Account is not created!</h2>";
   }


}
?>

				
				

					<div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
								<div class="contact-title">
									<h2 class="title__line--6">Register</h2>
								</div>
							</div>
							<div class="col-xs-12">
								<form method="post" id="register-form">
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="name"  placeholder="Your Name*" style="width:100%">
										</div>
										<span class="field_error" id="name_error"></span>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="email"  placeholder="Your Email*" style="width:100%">
											
											
										
											
										</div>
										
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="mobile"  placeholder="Your Mobile*" style="width:100%">
											
										
											
											
										</div>
										
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="password"  placeholder="Your Password*" style="width:100%">
										</div>
										
									</div>
									
									<div class="contact-btn">
										<button type="submit" class="fv-btn" name="submit">Register</button>
									</div>
								</form>
								
							</div>
						</div> 
                
				</div>
					
            </div>
        </section>
		
		
<?php require('footer.php')?>        