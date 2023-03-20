<?php 
require('top.php');
if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']=='yes'){
	?>
	<script>
	window.location.href='my_order.php';
	</script>
	<?php
}
?>
<!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/back.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php" style="color:white;">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right" style="color:white;"></i></span>
                                  <span class="breadcrumb-item active" style="color:white;">Forgot Password</span>
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
					<div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
								<div class="contact-title">
									<h2 class="title__line--6">Forgot Password</h2>
								</div>
							</div>
							
							
							<?php
include("conn/connect.php");
if (isset($_REQUEST['submit']) == "Submit") {
    $query = "SELECT * FROM users WHERE email = '$_REQUEST[email]'";
    $result = mysqli_query($conn,$query)
        or die("simple search select query fail" . mysqli_error());
    $row = mysqli_fetch_array($result);
    $value.="Name:  " . "$row[name]" . " " . "\r\n";
    $value.="Email:  " . "$row[email]" . "\r\n";
    $value.="password:  " . "$row[password]" . "\r\n";
// The message
    $message = "Forgot Password";
// In case any of our lines are larger than 70 characters, we should use wordwrap()
    $message = wordwrap($message, 70, "\r\n");
// Send
    @mail($row['email'], $message, $value);
}
?>
							
							
							
							
							
							
							<div class="col-xs-12">
								<form method="post" id="login-form">
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="email" id="email" placeholder="Your Email*" style="width:100%">
										</div>
										<span class="field_error" id="email_error"></span>
									</div>
									
									<div class="contact-btn">
										<button type="submit" name="submit" class="fv-btn" onclick="forgot_password()" id="btn_submit">Submit</button>
										
									</div>
								</form>
								<div class="form-output login_msg">
									<p class="form-messege field_error"></p>
								</div>
							</div>
						</div> 
                
				</div>
				

					
            </div>
        </section>
		
<?php require('footer.php')?>        