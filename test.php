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
          
          
          
          @media only screen and (max-width: 768px) {
              
                .size99
          {
              height:30px;
              font-size:10px;
          }
              
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
</style>      
                

        <!-- Start Slider Area -->

        <div class="slider__container slider--one bg__cat--3">

            <div class="slide__container slider__activation__wrap owl-carousel">

                <!-- Start Single Slide -->

                <div class="single__slide animation__style01 slider__fixed--height">

                    <div class="container">

                        <div class="row align-items__center">

                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">

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

                            

                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">

                                <div class="slide__thumb">

                                    <img src="<?php echo "admin/slider-1/".$row['sub_slider']; ?>" alt="slider images">

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

                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">

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

                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">

                                <div class="slide__thumb">

                                    <img src="<?php echo "admin/slider-1/".$row['sub_slider1']; ?>" alt="slider images">

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

		<br />

		<div class="container">

		<div class="row">

		    

		    <div class="col-md-12">

		        

		        <marquee direction="left">

		            

		            <p><h3 class="cart2">Grab the order,First order 20% Discount..</h3></p>

		            <br>

		            

		            

		        </marquee>

		        

		        

		    </div>

		

		<div class="col-md-2 col-sm-2 col-xs-6">

		<p align="center"><img src="images/slider-3/1.jpg" alt="" style="border-radius:50%;" class="img-thumbnail" id="zoom"/></p>

		<p><h4 align="center">Grocery</h4></p>

		</p>

		</div>

		

		<div class="col-sm-2">

		<p align="center"><img src="images/slider-3/8.jpg" style="border-radius:50%;" class="img-thumbnail" alt="" id="zoom" /></p>

		<p><h4 align="center">Mobile</h4></p>

		</p>

		</div>

		

		<div class="col-md-2 col-sm-2 col-xs-6">

		<p align="center"><img src="images/slider-3/3.jpg" style="border-radius:50%;" class="img-thumbnail" alt="" id="zoom" /></p>

		<p><h4 align="center">Beauty,Toys</h4></p>

		</p>

		</div>

		

		<div class="col-md-2">

		<p align="center"><img src="images/slider-3/4.jpg" style="border-radius:50%;" class="img-thumbnail" alt="" id="zoom" /></p>

		<p><h4 align="center">Fashion</h4></p>

		</p>

		</div>

		

		

		<div class="col-md-2 col-sm-2 col-xs-6">

		<p align="center"><img src="images/slider-3/5.jpg" style="border-radius:50%;" class="img-thumbnail" alt="" id="zoom" /></p>

		<p><h4 align="center">Appliances</h4></p>

		</p>

		</div>

		

		<div class="col-sm-2">

		<p align="center"><img src="images/slider-3/6.jpg" style="border-radius:50%;" class="img-thumbnail" alt="" id="zoom" /></p>

		<p><h4 align="center">Electronics</h4></p>

		</p>

		</div>

		

		

		

		

		</div>

		</div>

		

		

		

        <section class="htc__category__area ptb--100">
		
		<div class="container">

                <div class="row">
		
		<?php

							$get_product=get_product($con,20);

							foreach($get_product as $list){

							?>

                            <!-- Start Single Category -->

                            <div class="col-md-3 col-sm-6 col-xs-6">
		
		
		<div class="card">
  <a href="product.php?id=<?php echo $list['id']?>">

                                            <img src="media/product/<?php echo $list['image']?>"  alt="product images" id="zoom1" class="img-thumbnail">

                                        </a>
										
										
										<a href="product.php?id=<?php echo $list['id']?>">

									    

                                        <h3 class="size99"><?php echo $list['name']?></h3></a>
										<p class="price"><a href="product.php?id=<?php echo $list['id']?>" class="cart6">MRP.<?php echo $list['mrp']?></a></p>
										<p><a href="product.php?id=<?php echo $list['id']?>" class="cart5">Rs. <?php echo $list['price']?></a></p>
										
  
  
                                           <p><a href="product.php?id=<?php echo $list['id']?>"><button>Add to Cart</button></a></p>
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

                        <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">

                            <div class="category">

                                <div class="ht__cat__thumb">

                                    <a href="">

                                        <img src="images/product/1.jpg" alt="product images" class="img-thumbnail">

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

                                    <h4><a href="">Fashion</a></h4>

                                    <!--<ul class="fr__pro__prize">

                                        <li class="old__prize">$30.3</li>

                                        <li>$25.9</li>

                                    </ul>-->

                                </div>

                            </div>

                        </div>

						

						

                        <!-- End Single Category -->

                        <!-- Start Single Category -->

                        <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">

                            <div class="category">

                                <div class="ht__cat__thumb">

                                    <a href="">

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

                                    <h4><a href="product-details.html">Grocery</a></h4>

                                   

                                </div>

                            </div>

                        </div>

                        <!-- End Single Category -->

                        <!-- Start Single Category -->

                        <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">

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

                        <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">

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

                                <li><a href="#"><img src="images/brand/1.png" alt="brand images"></a></li>

                                <li><a href="#"><img src="images/brand/2.png" alt="brand images"></a></li>

                                <li><a href="#"><img src="images/brand/3.png" alt="brand images"></a></li>

                                <li><a href="#"><img src="images/brand/4.png" alt="brand images"></a></li>

                                <li><a href="#"><img src="images/brand/5.png" alt="brand images"></a></li>

                                <li><a href="#"><img src="images/brand/5.png" alt="brand images"></a></li>

                                <li><a href="#"><img src="images/brand/1.png" alt="brand images"></a></li>

                                <li><a href="#"><img src="images/brand/2.png" alt="brand images"></a></li>

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

                <li><a href="product-details.html"><img src="images/banner/bn-3/1.jpg" alt="banner images"></a></li>

                <li><a href="product-details.html"><img src="images/banner/bn-3/2.jpg" alt="banner images"></a></li>

                <li><a href="product-details.html"><img src="images/banner/bn-3/3.jpg" alt="banner images"></a></li>

                <li><a href="product-details.html"><img src="images/banner/bn-3/4.jpg" alt="banner images"></a></li>

                <li><a href="product-details.html"><img src="images/banner/bn-3/5.jpg" alt="banner images"></a></li>

                <li><a href="product-details.html"><img src="images/banner/bn-3/6.jpg" alt="banner images"></a></li>

                <li><a href="product-details.html"><img src="images/banner/bn-3/1.jpg" alt="banner images"></a></li>

                <li><a href="product-details.html"><img src="images/banner/bn-3/2.jpg" alt="banner images"></a></li>

            </ul>

        </div>

		

	<div class="container">

			<div class="row">

			<div class="col-sm-12">

			<h3>Term Conditions Page</h3><br />

			<p align="justify">Please read these terms and conditions ("Terms") carefully before accessing or using the Platform (defined hereinafter). These Terms along with the Privacy Policy published on the Platform ("Privacy Policy") and other policies (as may be notified/displayed/published on the Platform) constitutes the contract between the Users of this Platform and Company (collectively "Agreement"). By use of the Platform, Users agree to be bound by these Agreement as posted on the Platform from time to time.</p>

			

            <p align="justify">   3k Mart is an application which provides an online marketplace ("Application") where registered suppliers ("Suppliers") can offer to sell their products to registered users of Application including to resellers ("Resellers") and other Users. </p>

            

            

            

            <p align="justify">   The Application and the website at www. 3kmart.com ("Website") (collectively, "Platform") are operated by information technology company ("Company").</p>

            

            

            <p align="justify">   The Company�s role is limited to the managing Application and associated marketing, facilitating payment collections, fulfilment, order management, enquiry management and other incidental services to enable the transactions between the Suppliers and the Reseller ("Services").</p>

            

            

             <p align="justify">   Services are not made available on the Website and to avail the same, Users are required to install the Application.</p>

             

              <p align="justify"> The Agreement is applicable to any person when they install, download or even merely visit or access any part of the Platform or utilise the Services, such persons are referred to as users, which include without limitation users who are browsers, Suppliers, Resellers, merchants, other purchaser or contributors of content (collectively, "User").</p>

              

              

              <p align="justify"> The Agreement between User and Company is effective on the date on which the Application is downloaded/Website is accessed and/or the date on which terms of Agreement are updated, creating a legally binding arrangement between the User and the Company.</p>

              

              

               <p align="justify"> Users can review the most current version of the Agreement at any time on the Website. Company reserves the right to unilaterally update, change or replace any part of the Agreement by publishing updates or changes on the Platform and such amended provisions of the Agreement shall be effective immediately upon being posted on the Platform.</p>

            

            

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