<?php
require('connection.inc.php');
require('functions.inc.php');
require('add_to_cart.inc.php');

?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $meta_title?></title>
    <meta name="description" content="<?php echo $meta_desc?>">
	<meta name="keywords" content="<?php echo $meta_keyword?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/core.css">
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
	
	
	<style>
.dropbtn {
 
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  width:120px;
  z-index:999;
  margin-top:-30px;
  position:absolute;
  display:none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
 
  z-index: 999;
  margin-top:30px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}


</style>
	
	
	
	
	
	<style>
	.htc__shopping__cart a span.htc__wishlist {
		background: #c43b68;
		border-radius: 100%;
		color: #fff;
		font-size: 9px;
		height: 17px;
		line-height: 19px;
		position: absolute;
		right: 18px;
		text-align: center;
		top: -4px;
		width: 17px;
		margin-right:15px;
	}
	
	.slider__fixed--height
	{
	background-image:url(images/00.jpg);
	background-repeat:no-repeat;
	width:100%;
	height:700px;
	
	}
	
	.logo5
	{
	width:120px;
	height:70px;
	}
	
	.div2 {
    background-color:#c43b68;
    color: #fff;
    
    
	margin:0 auto;
	width:100%;
	height:35px;
	
}

.abc55
{
font-size:18px;
line-height:35px;

}

#zoom1 {
 
  
  transition: transform 0.5s;
 
  margin: 0 auto;
  width:300px;
  height:300px;
}

#zoom1:hover {
  -ms-transform: scale(1.2); /* IE 9 */
  -webkit-transform: scale(1.2); /* Safari 3-8 */
  transform: scale(1.2); 
}



#zoom2 {
 
  
  transition: transform 0.5s;
 
  margin: 0 auto;
  width:150px; height:100px;
}

#zoom2:hover {
  -ms-transform: scale(1.2); /* IE 9 */
  -webkit-transform: scale(1.2); /* Safari 3-8 */
  transform: scale(2.2); 
 
}







#zoom {
 
  
  transition: transform 0.5s;
 
  margin: 0 auto;
}

#zoom:hover {
  -ms-transform: scale(1.2); /* IE 9 */
  -webkit-transform: scale(1.2); /* Safari 3-8 */
  transform: scale(1.2); 
}


.bg__cat--4
{
background-color:#FFFFFF;
}
.col-xs-2
{
width:280px;
}

.hi5
{
    display:none;
    width:110px;
    
}

#toop
{
    margin-top:0px;
}

.fr__product__inner
{
    height:134px;
}
@media only screen and (max-width: 768px) {
    
    
    
    #zoom2 {
 
  
  transition: transform 0.5s;
 
  margin: 0 auto;
  width:100%; height:100%;
}

#zoom2:hover {
  -ms-transform: scale(1.2); /* IE 9 */
  -webkit-transform: scale(1.2); /* Safari 3-8 */
  transform: scale(2.2); 
 
}
    
    
    
    
    
    .dropbtn {
 
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  width:110px;
  z-index:999;
  margin-top:10px;
  position:absolute;
  display:block;
  height:0px;
  margin-left:40px;
  line-height:2px;
  background-color:transparent;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
 
  z-index: 999;
  margin-top:42px;
  margin-left:20px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}


    
    
    
    
    #toop
{
    margin-top:15px;
}
    
    
    .hi5
{
    display:block;
}

.col-xs-2
{
width:237px;
}

.abc55
{
font-size:14px;
line-height:25px;

}

.div2 {
    background-color:#c43b68;
    color: #fff;
    
   
	margin:0 auto;
	width:100%;
	height:60px;
	
}

	.logo5
	{
	width:80px;
	height:50px;
	margin-left:-10px;
	}


}
	</style>
	
</head>
<body>

    <!-- Body main wrapper start -->
    <div class="wrapper">
	
	<div class="div2">
      
	  <div class="container">
			<div class="row">
			
			
		
			
			<div class="col-md-3 col-sm-2 col-xs-2"> <span class="abc55"><i class="fa fa-envelope-square"></i> info@abc.com</span>
           </div>
                <div class="col-md-3 col-sm-2 col-xs-2">
                  
                  
                   <span class="abc55"><i class="fa fa-phone-square"></i> +91-7294160294 </span>
				   </div>
				   
				   <div class="col-md-6">
				   <span class="abc55"><i class="fa fa-facebook-square"></i>
				   <i class="fa fa-twitter-square"></i>
				   <i class="fa fa-instagram"></i>
				   <i class="fa fa-linkedin-square"></i> 
				  
				  
				   </span>
				   
                  
                        <!-- <span>&nbsp;&nbsp;&nbsp;&nbsp; <a href="exchange.php" style="color:#FFFFFF;">|Exchange Item|</a></span>-->        
                                 
                </div>
				
				</div>
           
            </div>
			</div>
			
			
			
			
			
			<header id="htc__header" class="htc__header__area header--one">
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
					
					
				       <div class="menumenu__container clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5"> 
                                <div class="logo">
                                     <a href="index.php"><img src="images/logo/4.png" class="logo5" alt="logo images"></a>
                                     
                                     <div class="dropdown">
  <button class="dropbtn"> 
  
 <?php 
  If(isset($_SESSION['USER_NAME']))
  
  echo "Hi.." .$_SESSION['USER_NAME']
  
  ?>
  
  </button>
  <div class="dropdown-content">
    <a href="my_order.php">Order</a>
    <a href="profile.php">Profile</a>
    <a href="logout.php">Logout</a>
  </div>
</div>
                                     

                                </div>
                            </div>
                            
                            
                            
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            
        </header>
			
			
			
			
			
			
			
			
			
	
        
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
                                  <span class="breadcrumb-item active" style="color:white;">Profile</span>
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
					<div class="col-md-3"></div>
				
				<div class="row">
					<div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
								<div class="contact-title">
									<h2 class="title__line--6">View Profile/Change Profile</h2>
								</div>
							</div>
							
				<?php 

	 session_start();

include("conn/connect.php");

  $idd=$_SESSION['USER_ID'];

  

  $query="select * from users where id='$idd'";

  $result=mysqli_query($conn, $query);

  $row=mysqli_fetch_assoc($result);

  

 

?>
	
							
							<div class="col-xs-12">
								<form method="post" id="frmPassword">
									<div class="single-contact-form">
										<label class="password_label">Name :- </label>
										<label class="password_label">
											<?php echo $row['name']; ?>
										</label>
									
									</div>
									<div class="single-contact-form">
										<label class="password_label">Mobile :- </label>
										<label class="password_label">
											<?php echo $row['mobile']; ?>
										</label>
									
									</div>
									<div class="single-contact-form">
										<label class="password_label">Email :- </label>
										<label class="password_label">
											<?php echo $row['email']; ?>
										</label>
									
									</div>
									
									
									<div class="single-contact-form">
										<label class="password_label">Password :- </label>
										<label class="password_label">
											<!--<?php echo $row['password']; ?>-->
											***
										</label>
									
									</div>
									
									
									
									
									<div class="contact-btn">
										<a href="edit-profile.php?edit=<?php echo $row["id"]; ?>"><input type="button" name="edit" value="Update"></a>
									
									</div>
									
									
									
									
									
									
									
								</form>
								
								
								
							</div>
						</div> 
                
				</div>
				

					
            </div>
        </section>
        </body>
        </html>
		
  