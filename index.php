<?php require('top.php')?>

<div class="body__overlay"></div>

        
                	<?php
include("conn/connect.php");
 

  

  $query="select * from slider";

  $result=mysqli_query($conn, $query);

  $row=mysqli_fetch_assoc($result);

  

 

?>
                
          <style>
          
          
          .size99
          {
              height:40px;
          }
          
                
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
 
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #c43b68;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
  
}

.card button:hover {
  opacity: 0.7;
}
       
       
     .dk
     {
         width:500px !important;
         height:240px !important;
         border:1px solid white;
     }
     
     
       #mart5
     {
         width:80px;
         margin-left:auto;
         margin-right:auto;
         display:block;
     }
     
     #top334
     {
         margin-top:-180px;
     }
     
     #mart6
     {
         margin-top:-20px;
     }
     
     #mart7
     {
         margin-top:0px;
     }
   
   
   #tab-img
   {
       width:110px;
       height:110px;
       
   }
   
   .cent5
   {
       text-align:center;
   }
   
   #cat-top
   {
      padding:0px 0px;
   }
 
          @media only screen and (max-width: 768px) {
              
              
              
               #cat-top
   {
      padding:0px 0px;
   }
              
              
              
              
              
               #tab-img
   {
       /*width:145px;*/
       height:100px;
      
   }
              
           
              
              
               #mart7
     {
         margin-top:-56px;
     }
              
              
    
              
               #mart6
     {
         margin-top:-50px;
     }
              
      
              
                .dk
     {
         width:100% !important;
         height:100px !important;
         margin-top:50px !important;
         border:1px solid white;
     }
              
      
      .card button {
  border: none;
  outline: 0;
  padding: 8px;
  color: white;
  background-color: #c43b68;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 12px;
  
}
          
              
              
              #abbc
              
              {
                  padding-left:0px;
                  padding-right:0px;
                  /*margin-top:-80px;*/
              }
              
              
              
              
                .size99
          {
              height:30px;
              font-size:10px;
          }
              
          }
          
          
          

</style>      
                

        <!-- Start Slider Area -->

        <div class="slider__container slider--one bg__cat--3">

            <div class="slide__container slider__activation__wrap owl-carousel" style="background-color: aquamarine;">

                <!-- Start Single Slide -->

                <div class="single__slide animation__style01 slider__fixed--height">

                    <div class="container">

                        <div class="row align-items__center">

                            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6">

                                <div class="slide">

                                    <div class="slider__inner">

                                        <h2 style="color:#FFFFFF;">New Collection</h2>

                                        <h1 style="color:#FFFFFF;">Exclusive Range</h1>

                                        <!--<div class="cr__btn">

                                            <a href="">Shop Now</a>

                                        </div>-->

                                    </div>

                                </div>

                            </div>

                            

                           

                            

                            

                        </div>

                    </div>

                </div>
                
                
                
                
                
                
                

                <!-- End Single Slide -->

                <!-- Start Single Slide -->

                <div class="single__slide animation__style01 slider__fixed--height">

                    <div class="container">

                        <div class="row align-items__center">

                            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6">

                                <div class="slide">

                                    <div class="slider__inner">

                                       <h2 style="color:#FFFFFF;">Best Price</h2>

                                        <h1 style="color:#FFFFFF;">Get your Daily Needs</h1>

                                        <!--<div class="cr__btn">

                                            <a href="">Shop Now</a>

                                        </div>-->

                                    </div>

                                </div>

                            </div>

                            

                        </div>

                    </div>

                </div>

                <!-- End Single Slide -->

            </div>

        </div>

        <!-- Start Slider Area -->

        <!-- Start Category Area -->

	
<!-------------------------------------------------------------------------category--------------------------------------->

<section class="ftr__product__area ptb--100" id="top33">

            <div class="container">

              

                <div class="row">

				
<div class="col-md-12">

		        
<br>
		        <marquee direction="left">

		            

		            <p><h3 class="cart2">Grab the order,First order 20% Discount..</h3></p>

		            <br>

		            

		            

		        </marquee>

		        
 <div class="htc__brand__area bg__cat--4">

            <div class="container">

                <div class="row">

                    <div class="col-md-12" style="padding-left:0px; padding-right:0px;">

                        <div class="ht__brand__inner" id="cat-top">

                           <ul class="brand__list owl-carousel clearfix">
                                
                                <li><a href="grocery.php?id=16"><img src="images/grocery.jpg" alt="" id="tab-img" class="img-thumbnail" style="margin-top:0px;"/>

                                    </a>
                                    
                                    
                                    
                                    </li>
                                   
                                    
                                <li><a href="grocery.php?id=12">

                                        <img src="images/fashion.jpg" alt="" id="tab-img" class="img-thumbnail" style="margin-top:0px;"/>
                                   

                                    
                                    </a></li>
                                <li><a href="grocery.php?id=15">

                                        <img src="images/mobile.jpg" id="tab-img" class="img-thumbnail" alt="" style="margin-top:0px;"/>
                                         

                                    
                                    </a></li>
                                <li><a href="grocery.php?id=13">

                                        <img src="images/kit.png" id="tab-img" class="img-thumbnail" alt="" style="margin-top:0px;"/>
                                           

                                    
                                    </a></li>
                                
                                <li><a href="grocery.php?id=14">

                                        <img src="images/kids.png" id="tab-img" class="img-thumbnail" alt="" style="margin-top:0px;"/>
                                       

                                   
                                    </a></li>
                                    
                                    
                                     <li><a href="grocery.php?id=17">

                                        <img src="images/station.png" id="tab-img" class="img-thumbnail" alt="" style="margin-top:0px;"/>
                                        
                                    </a></li>
                                    
                                    
                            </ul>
                        </div>

                    </div>

                </div>

            </div>

        </div>
                        
                        
		        

		    </div>
		    
		    
		    
		    
		  
		    
		    
		    
		    
		    
				

                    <!--<div class="product__wrap clearfix">

                        

                        <div class="col-md-2 col-sm-6 col-xs-6" id="abbc">

                            <div class="category" id="mart7">

                                <div class="ht__cat__thumb" id="mart5">

                                   

                                        <a href="grocery.php?id=16"><img src="images/slider-3/1.jpg" alt="" style="border-radius:50%;" class="img-thumbnail"/>

                                    </a>

                                </div>

                                

                                <div class="fr__product__inner">

                                    <h4 style="text-align:center;"><a href="grocery.php?id=16">Grocery</a></h4>

                                   

                                </div>

                            </div>

                        </div>

						

						

                      
                        
                       
                        
                        
                        
                        
                        
                        
                        

                        <div class="col-md-2 col-sm-6 col-xs-6" id="abbc">

                            <div class="category" id="mart7">

                                <div class="ht__cat__thumb" id="mart5">

                                    <a href="grocery.php?id=12">

                                        <img src="images/slider-3/4.jpg" alt="" style="border-radius:50%;" class="img-thumbnail"/>

                                    </a>

                                </div>

                                

                                <div class="fr__product__inner">

                                    <h4 style="text-align:center;"><a href="grocery.php?id=12">Fashion</a></h4>

                                   

                                </div>

                            </div>

                        </div>

                       

                        <div class="col-md-2 col-sm-6 col-xs-6" id="abbc">

                            <div class="category" id="mart7">

                                <div class="ht__cat__thumb" id="mart5">

                                    <a href="grocery.php?id=15">

                                        <img src="images/slider-3/8.jpg" style="border-radius:50%;" class="img-thumbnail" alt="" />

                                    </a>

                                </div>

                               

                                <div class="fr__product__inner">

                                    <h4 style="text-align:center;"><a href="grocery.php?id=15">Mobile</a></h4>

                                   

                                </div>

                            </div>

                        </div>

                       
                        <div class="col-md-2 col-sm-6 col-xs-6" id="abbc">

                            <div class="category" id="mart7">

                                <div class="ht__cat__thumb" id="mart5">

                                    <a href="grocery.php?id=13">

                                        <img src="images/kit.png" style="border-radius:50%;" class="img-thumbnail" alt="" />

                                    </a>

                                </div>

                               

                                <div class="fr__product__inner">

                                    <h4 style="text-align:center;"><a href="grocery.php?id=13">Home/Kitchen </a></h4>

                                   

                                </div>

                            </div>

                        </div>
						
						
						<div class="col-md-2 col-sm-6 col-xs-6" id="abbc">

                            <div class="category" id="mart7">

                                <div class="ht__cat__thumb" id="mart5">

                                    <a href="grocery.php?id=14">

                                        <img src="images/kids.png" style="border-radius:50%;" class="img-thumbnail" alt=""/>

                                    </a>

                                </div>

                               

                                <div class="fr__product__inner">

                                    <h4 style="text-align:center;"><a href="grocery.php?id=14">Kids </a></h4>

                                   

                                </div>

                            </div>

                        </div>
						
						
						
						<div class="col-md-2 col-sm-6 col-xs-6" id="abbc">

                            <div class="category" id="mart7">

                                <div class="ht__cat__thumb" id="mart5">

                                    <a href="grocery.php?id=17">

                                        <img src="images/station.png" style="border-radius:50%;" class="img-thumbnail" alt="" />

                                    </a>

                                </div>

                              

                                <div class="fr__product__inner">

                                    <h4 style="text-align:center;"><a href="grocery.php?id=17">Stationary </a></h4>

                                   

                                </div>

                            </div>

                        </div>

                        

						

						

						

						

						

                    </div>-->

					

					

                </div>

            </div>

			

			

        </section>

<!----------------------------------------------------------------------------------close category------------------------------------------------------>

		

		

		

        <section class="htc__category__area ptb--100" id="top334">
		
		<div class="container">

                <div class="row">
		
		<?php

							$get_product=get_product($con,20);

							foreach($get_product as $list){

							?>

                            <!-- Start Single Category -->

                            <div class="col-md-3 col-sm-6 col-xs-6" id="abbc">
		
		
		<div class="card">
  <a href="product.php?id=<?php echo $list['id']?>">

                                            <img src="media/product/<?php echo $list['image']?>"  alt="product images" id="zoom1" class="img-thumbnail">

                                        </a>
										
										
										<a href="product.php?id=<?php echo $list['id']?>">

									    

                                        <h3 class="size99"><?php echo $list['name']?></h3></a>
                                        
                                        <p><?php echo $list['brand']?></p>
                                        
                                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        
										<p class="price"><a href="product.php?id=<?php echo $list['id']?>" class="cart6">MRP.<?php echo $list['mrp']?></a></p>
										<p><a href="product.php?id=<?php echo $list['id']?>" class="cart5">Rs. <?php echo $list['price']?></a></p>
										
  
  
                                           <p><a href="product.php?id=<?php echo $list['id']?>"><button>Buy Now</button></a></p>
                                         </div>
                                         
                                         
		</div>
		<?php } ?>
		
		</div>
		</div>
		
		
		
		
		

            <!--<div class="container">

                <div class="row">

                    <div class="col-xs-12">

                        <div class="section__title--2 text-center">

                            

                           

                        </div>

                    </div>

                </div>

                <div class="htc__product__container">

                    <div class="row">

                        <div class="product__list clearfix mt--30">

							<?php

							$get_product=get_product($con,20);

							foreach($get_product as $list){

							?>

                           

                            <div class="col-md-2 col-sm-2 col-xs-6">

                                <div class="category">

                                    <div class="ht__cat__thumb">

                                        <a href="product.php?id=<?php echo $list['id']?>">

                                            <img src="media/product/<?php echo $list['image']?>"  alt="product images" id="zoom1" class="img-thumbnail">

                                        </a>

                                        <h3 class="ship2">Free Shipping!</h3>

                                    </div>

                                    

                                    <div class="fr__product__inner">

									<a href="product.php?id=<?php echo $list['id']?>">

									    

                                        <h3 class="ship3"><?php echo $list['name']?></h3></a>

                                        

                                        <ul class="fr__pro__prize">

                                            <li class="old__prize"><a href="product.php?id=<?php echo $list['id']?>" class="cart6">MRP.<?php echo $list['mrp']?></a></li>

                                            <li><a href="product.php?id=<?php echo $list['id']?>" class="cart5">Rs. <?php echo $list['price']?></a></li>

                                        </ul>

                                        <div class="cr__btn">

                                            <a href="product.php?id=<?php echo $list['id']?>">Buy Now</a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                           

							<?php } ?>

                        </div>

                    </div>

                </div>

            </div>-->

        </section>

        <!-- End Category Area -->

        <!-- Start Product Area -->

        <section class="ftr__product__area ptb--100" id="top33">

            <div class="container">

                <div class="row">

                    <div class="col-xs-12">

                        <div class="section__title--2 text-center">

                            <h2 class="title__line">Related Product</h2>

                           

                        </div>

                    </div>

                </div>

                <div class="row">

				

				

                    <div class="product__wrap clearfix">

                        <!-- Start Single Category -->

                        <div class="col-md-3 col-sm-6 col-xs-6" id="abbc">

                            <div class="category">

                                <div class="ht__cat__thumb">

                                   

                                        <a href="grocery.php?id=12"><img src="images/product/1.jpg" alt="product images" class="img-thumbnail">

                                    </a>

                                </div>

                                <div class="fr__hover__info">

                                    <ul class="product__action">

                                        <li><a href=""><i class="icon-heart icons"></i></a></li>



                                        <li><a href=""><i class="icon-handbag icons"></i></a></li>



                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>

                                    </ul>

                                </div>

                                <div class="fr__product__inner">

                                    <h4><a href="grocery.php?id=12">Fashion</a></h4>

                                    <!--<ul class="fr__pro__prize">

                                        <li class="old__prize">$30.3</li>

                                        <li>$25.9</li>

                                    </ul>-->

                                </div>

                            </div>

                        </div>

						

						

                        <!-- End Single Category -->

                        <!-- Start Single Category -->

                        <div class="col-md-3 col-sm-6 col-xs-6" id="abbc">

                            <div class="category">

                                <div class="ht__cat__thumb">

                                    <a href="grocery.php?id=16">

                                        <img src="images/product/2.png" alt="product images" class="img-thumbnail">

                                    </a>

                                </div>

                                <div class="fr__hover__info">

                                    <ul class="product__action">

                                        <li><a href=""><i class="icon-heart icons"></i></a></li>



                                        <li><a href=""><i class="icon-handbag icons"></i></a></li>



                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>

                                    </ul>

                                </div>

                                <div class="fr__product__inner">

                                    <h4><a href="grocery.php?id=16">Grocery</a></h4>

                                   

                                </div>

                            </div>

                        </div>

                        <!-- End Single Category -->

                        <!-- Start Single Category -->

                        <div class="col-md-3 col-sm-6 col-xs-6" id="abbc">

                            <div class="category">

                                <div class="ht__cat__thumb">

                                    <a href="">

                                        <img src="images/product/3.jpg" alt="product images" class="img-thumbnail">

                                    </a>

                                </div>

                                <div class="fr__hover__info">

                                    <ul class="product__action">

                                        <li><a href=""><i class="icon-heart icons"></i></a></li>



                                        <li><a href=""><i class="icon-handbag icons"></i></a></li>



                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>

                                    </ul>

                                </div>

                                <div class="fr__product__inner">

                                    <h4><a href="">Beauty/Makeup</a></h4>

                                   

                                </div>

                            </div>

                        </div>

                        <!-- End Single Category -->

                        <!-- Start Single Category -->

                        <div class="col-md-3 col-sm-6 col-xs-6" id="abbc">

                            <div class="category">

                                <div class="ht__cat__thumb">

                                    <a href="">

                                        <img src="images/product/4.png" alt="product images" class="img-thumbnail">

                                    </a>

                                </div>

                                <div class="fr__hover__info">

                                    <ul class="product__action">

                                        <li><a href=""><i class="icon-heart icons"></i></a></li>



                                        <li><a href=""><i class="icon-handbag icons"></i></a></li>



                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>

                                    </ul>

                                </div>

                                <div class="fr__product__inner">

                                    <h4><a href="">Mobile </a></h4>

                                   

                                </div>

                            </div>

                        </div>

                        <!-- End Single Category -->

						

						

						

						

						

                    </div>

					

					

                </div>

            </div>

			

				<p align="center"><img src="images/adver.jpg"></p>

        </section>

		

		

	

		

		<div class="htc__brand__area bg__cat--4" id="top33">

            <div class="container">

                <div class="row">

                    <div class="col-md-12">

                        <div class="ht__brand__inner">

                           <ul class="brand__list owl-carousel clearfix">
                                
                                <li><a href="#"><img src="images/brand/b2.png" class="dk" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/b3.png" class="dk" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/b4.png" class="dk" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/b5.jpeg" class="dk" alt="brand images"></a></li>
                                
                                <li><a href="#"><img src="images/brand/b6.png" class="dk" alt="brand images"></a></li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- End Brand Area -->

        <!-- Start Banner Area -->

        <div class="htc__banner__area">

            <ul class="banner__list owl-carousel owl-theme clearfix">

                <li><a href=""><img src="images/banner/bn-3/1.jpg" alt="banner images"></a></li>

                <li><a href=""><img src="images/banner/bn-3/2.jpg" alt="banner images"></a></li>

                <li><a href=""><img src="images/banner/bn-3/3.jpg" alt="banner images"></a></li>

                <li><a href=""><img src="images/banner/bn-3/4.jpg" alt="banner images"></a></li>

                <li><a href=""><img src="images/banner/bn-3/5.jpg" alt="banner images"></a></li>

                <li><a href=""><img src="images/banner/bn-3/6.jpg" alt="banner images"></a></li>

                <li><a href=""><img src="images/banner/bn-3/1.jpg" alt="banner images"></a></li>

                <li><a href=""><img src="images/banner/bn-3/2.jpg" alt="banner images"></a></li>

            </ul>

        </div>

		

	<div class="container">

			<div class="row">

			<div class="col-sm-12">
				<div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading2_1">
                      <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion2_1" href="#collapse2_1" aria-expanded="true" aria-controls="collapse1">
                          TERMS & CONDITIONS<i class="fa fa-caret-down pull-right"></i>
                        </a>
                      </h4>


                    </div>
                    <div id="collapse2_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2_1">
                      <div class="panel-body">
                        	<p align="justify">Please read these terms and conditions ("Terms") carefully before accessing or using the Platform (defined hereinafter). These Terms along with the Privacy Policy published on the Platform ("Privacy Policy") and other policies (as may be notified/displayed/published on the Platform) constitutes the contract between the Users of this Platform and Company (collectively "Agreement"). By use of the Platform, Users agree to be bound by these Agreement as posted on the Platform from time to time.</p>

			

            <p align="justify">   3k Mart is an application which provides an online marketplace ("Application") where registered suppliers ("Suppliers") can offer to sell their products to registered users of Application including to resellers ("Resellers") and other Users. </p>

            

            

            

            <p align="justify">   The Application and the website at www. 3kmart.com ("Website") (collectively, "Platform") are operated by information technology company ("Company").</p>

            

            

            <p align="justify">   The Company’s role is limited to the managing Application and associated marketing, facilitating payment collections, fulfilment, order management, enquiry management and other incidental services to enable the transactions between the Suppliers and the Reseller ("Services").</p>

            

            

             <p align="justify">   Services are not made available on the Website and to avail the same, Users are required to install the Application.</p>

             

              <p align="justify"> The Agreement is applicable to any person when they install, download or even merely visit or access any part of the Platform or utilise the Services, such persons are referred to as users, which include without limitation users who are browsers, Suppliers, Resellers, merchants, other purchaser or contributors of content (collectively, "User").</p>

              

              

              <p align="justify"> The Agreement between User and Company is effective on the date on which the Application is downloaded/Website is accessed and/or the date on which terms of Agreement are updated, creating a legally binding arrangement between the User and the Company.</p>

              

              

               <p align="justify"> Users can review the most current version of the Agreement at any time on the Website. Company reserves the right to unilaterally update, change or replace any part of the Agreement by publishing updates or changes on the Platform and such amended provisions of the Agreement shall be effective immediately upon being posted on the Platform.</p>
     
		
	  </div>
    </div>
	</div>
		

            

            

			</div>

			</div>

			</div>

		
                

		

		<div class="back" style="background-color:#c43b68; width:100%; height:70px;">

		<marquee direction="left">

		

			<img src="images/slider-3/1.jpg"   />&nbsp;&nbsp;&nbsp;

		

			<img src="images/slider-3/2.jpg" />&nbsp;&nbsp;&nbsp;

		

			<img src="images/slider-3/3.jpg"  />&nbsp;&nbsp;&nbsp;

		

			<img src="images/slider-3/4.jpg"  />&nbsp;&nbsp;&nbsp;

		

			<img src="images/slider-3/5.jpg"  />&nbsp;&nbsp;&nbsp;

		

			<img src="images/slider-3/6.jpg"  />

		

			</marquee>

			</div>

			

			

			

			

			

        <!-- End Product Area -->

<?php require('footer.php')?>        