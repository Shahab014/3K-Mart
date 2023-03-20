

<?php 

require('top.php');

if(isset($_GET['id'])){

	$product_id=mysqli_real_escape_string($con,$_GET['id']);

	if($product_id>0){

		$get_product=get_product($con,'','',$product_id);

	}else{

		?>

		<script>

		window.location.href='index.php';

		</script>

		<?php

	}

}else{

	?>

	<script>

	window.location.href='index.php';

	</script>

	<?php

}

?>



 <!-- Start Bradcaump area -->

        <div class="ht__bradcaump__area" id="back-head">

            <div class="ht__bradcaump__wrap">

                <div class="container">

                    <div class="row">

                        <div class="col-xs-12">

                            <div class="bradcaump__inner">

                                <nav class="bradcaump-inner">

                                  <a class="breadcrumb-item" href="index.php" style="color:white;">Home  </a>

                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right" style="color:white;"></i></span>

                                  <a class="breadcrumb-item" href="categories.php?id=<?php echo $get_product['0']['categories_id']?>" style="color:white;"><?php echo $get_product['0']['categories']?></a>

                                  <span class="brd-separetor" style="color:white;"><i class="zmdi zmdi-chevron-right" style="color:white;"></i></span>

                                  <span class="breadcrumb-item active" style="color:white;"><?php echo $get_product['0']['name']?></span>

                                  

                                  

                                  

                                  

                                  

                                </nav>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- End Bradcaump area -->

        <!-- Start Product Details Area -->

        <section class="htc__product__details bg__white ptb--100">

            <!-- Start Product Details Top -->



<style>


* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
  padding:10px 10px 10px 10px;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

#akk
{
width:100%;height:60px;
}

#akkk
{
width:100%; height:400px;
}

 #back-head
    {
        background: rgba(0, 0, 0, 0) url(images/back.jpg) no-repeat scroll center center / cover ;
    }

@media only screen and (max-width: 768px) {
    
    
      .order-details
        {
            margin-top:-92px;
        }
        
        
        .ht__bradcaump__wrap
        {
            padding:35px 0;
        }
        
        
        
         #back-head
    {
        background: rgba(0, 0, 0, 0) url(images/back.jpg);
        background-repeat:no-repeat;
        background-size:contain;
    }

#akkk
{
width:100%; height:300px;
}

}
</style>














            <div class="htc__product__details__top">

                <div class="container">

                    <div class="row">

                        <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
						
						
						
						
						
						
 

  <div class="mySlides">
    <div class="numbertext"></div>
	
	<img src="media/product/<?php echo $get_product['0']['image']?>" id="akkk" class="img-thumbnail">
	
    <!--<img src="images/slider-3/1.jpg" style="width:100%; height:200px;">-->
	</div>
	
	
	
	 <div class="mySlides">
    <div class="numbertext"></div>
    <img src="media/product/<?php echo $get_product['0']['photo1']?>" id="akkk"  class="img-thumbnail">
  </div>
    
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="media/product/<?php echo $get_product['0']['photo2']?>" id="akkk" class="img-thumbnail">
  </div>
  
  
   <div class="mySlides">
    <div class="numbertext"></div>
    <img src="media/product/<?php echo $get_product['0']['photo3']?>" id="akkk" class="img-thumbnail">
  </div>
	
	

 
    
  <a class="prev" onclick="plusSlides(-1)"><i class="fa fa-angle-left"></i></a>
  <a class="next" onclick="plusSlides(1)"><i class="fa fa-angle-right"></i></a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
  
  
   <div class="column">
	 <img src="media/product/<?php echo $get_product['0']['image']?>" id="akk"   class="demo cursor" onclick="currentSlide(1)">
	 
     
    </div>
  
  
  
    <div class="column">
	 <img src="media/product/<?php echo $get_product['0']['photo1']?>" id="akk"  onclick="currentSlide(2)"  class="demo cursor" >
	 
      <!--<img class="demo cursor" src="images/slider-3/1.jpg" style="width:100%; height:60px;" onclick="currentSlide(1)" >-->
    </div>
    <div class="column">
	
	<img src="media/product/<?php echo $get_product['0']['photo2']?>" id="akk"  onclick="currentSlide(3)"   class="demo cursor">
	
    <!--<img class="demo cursor" src="images/slider-3/2.jpg" style="width:100%; height:60px;" onclick="currentSlide(2)" alt="Cinque Terre">-->
    </div>
    <div class="column">
	
	<img src="media/product/<?php echo $get_product['0']['photo3']?>" id="akk" onclick="currentSlide(4)"  class="demo cursor">
	
      <!--<img class="demo cursor" src="images/slider-3/3.jpg" style="width:100%; height:60px;" onclick="currentSlide(3)" alt="Mountains and fjords">-->
    </div>
    
   </div>



						
						
						
						

                      

                        </div>

                        

                        <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">

                            <div class="ht__product__dtl">

                                <h2><?php echo $get_product['0']['name']?></h2>

                                <ul  class="pro__prize">

                                    <li class="old__prize" style="color:#FF0000; text-decoration: line-through;">MRP.<?php echo $get_product['0']['mrp']?></li>

                                    <li>Rs.<?php echo $get_product['0']['price']?></li>

                                </ul>

                                <p class="pro__info"><?php echo $get_product['0']['short_desc']?></p>

                                <div class="ht__pro__desc">

                                    <div class="sin__desc">

										<?php

										$productSoldQtyByProductId=productSoldQtyByProductId($con,$get_product['0']['id']);

										

										$pending_qty=$get_product['0']['qty']-$productSoldQtyByProductId;

										

										$cart_show='yes';

										if($get_product['0']['qty']>$productSoldQtyByProductId){

											$stock='In Stock';			

										}else{

											$stock='Not in Stock';

											$cart_show='';

										}

										?>

                                        <p><span>Availability:</span> <?php echo $stock?></p>

                                    </div>

                                    

                                    

                                    

                                    <?php 



	 







  //$uid=$_REQUEST['id'];

  //$query="select * from product where id='$uid'";

  //$result=mysqli_query($con, $query);

  //$rowww=mysqli_fetch_assoc($result);

 



?>



                                    

                                    

                                    

                                   <?php echo $get_product['0']['kg_lit']?>

                                    

                                    

                                    

									<div class="sin__desc">

										<?php

										if($cart_show!=''){

										?>

                                        <p><span>Qty:</span> 

										<select id="qty">

											<?php

											for($i=1;$i<=$pending_qty;$i++){

												echo "<option>$i</option>";

											}

											?>

										</select>

										</p>

										<?php } ?>

                                    </div>

                                    <div class="sin__desc align--left">

                                        <p><span>Categories:</span></p>

                                        <ul class="pro__cat__list">

                                            <li><a href="#"><?php echo $get_product['0']['categories']?></a></li>

                                        </ul>

                                    </div>

                                    

                                    </div>

									

                                </div>

								<?php

								if($cart_show!=''){

								?>

								<a class="fr__btn" href="javascript:void(0)" onClick="manage_cart('<?php echo $get_product['0']['id']?>','add')">Add to cart</a>

								<?php } ?>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- End Product Details Top -->

        </section>

        <!-- End Product Details Area 

		<!-- Start Product Description -->

        <section class="htc__produc__decription bg__white">

            <div class="container">

                <div class="row">

                    <div class="col-xs-12">

                        <!-- Start List And Grid View -->

                        <!--<ul class="pro__details__tab" role="tablist">

                            <li role="presentation" class="description active"><a href="#description" role="tab" data-toggle="tab">description</a></li>

                        </ul>-->

                        <!-- End List And Grid View -->

                    </div>

                </div>

                <div class="row">

                    <div class="col-xs-12">

                        <div class="ht__pro__details__content">

                            <!-- Start Single Content -->

                            <div role="tabpanel" id="description" class="pro__single__content tab-pane fade in active">

                                <div class="pro__tab__content__inner">
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading2_1">
                      <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion2_1" href="#collapse2_1" aria-expanded="true" aria-controls="collapse1">
                          DESCRIPTION<i class="fa fa-caret-down pull-right"></i>
                        </a>
                      </h4>


                    </div>
                    <div id="collapse2_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2_1">
                      <div class="panel-body">
                        	<p align="justify"> <?php echo $get_product['0']['description']?></p>

			

           
     
		
	  </div>
    </div>
	</div>
                                    
                                    
                                    
                                    

                                    <!--<?php echo $get_product['0']['description']?>-->

                                </div>

                            </div>

                            <!-- End Single Content -->

                            

                        </div>

                    </div>
                    
                    
                    
                    
                      <div class="col-xs-12">

                        <div class="section__title--2 text-center">

                            <h2 class="title__line">Related Product</h2><br>

                           

                        </div>

                    </div>
                    
                    
                    
                    
                    
                    <?php
           
          
                        $a=$get_product['0']['categories_id'];
                        $b=$get_product['0']['sub_categories_id'];
							$rst= mysqli_query($con,"select * from product where categories_id ='$a' AND sub_categories_id='$b' ");
							while($roow=mysqli_fetch_assoc($rst))
							{
							    
							    
							    
							   //echo $roow['name'];
							    //echo $roow['mrp'];
							    
							    
							  //echo '<img src="media/product/'.$roow['image'].'">'; 
							    
							    
							    $name=$roow["name"];
	                            $mrp=$roow["mrp"];
							   $image=$roow["image"];
	                           $brand=$roow["brand"];
	                           $price=$roow["price"];
	                          
							
							
							
						
					
  
            
    
    ?>















     
     <div class="col-md-3 col-sm-6 col-xs-6" id="abbc">
     
     	<div class="card">
  <a href="product.php?id=<?php echo $list['id']?>">

                                            <img src="media/product/<?php echo $roow['image']?>"  alt="product images" id="zoom1" class="img-thumbnail">

                                        </a>
										
										
										<a href="product.php?id=<?php echo $roow['id']?>">

									    

                                        <h3 class="size99"><?php echo $roow['name']?></h3></a>
                                        
                                        <p><?php echo $roow['brand']?></p>
                                        
                                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        
										<p class="price"><a href="product.php?id=<?php echo $roow['id']?>" class="cart6">MRP.<?php echo $roow['mrp']?></a></p>
										<p><a href="product.php?id=<?php echo $roow['id']?>" class="cart5">Rs. <?php echo $roow['price']?></a></p>
										
  
  
                                           <p><a href="product.php?id=<?php echo $roow['id']?>"><button>Buy Now</button></a></p>
                                         </div>
                                         
                                         
		</div>
     
     
     	<?php } ?>
                    
                    
                    

                </div>

            </div>

        </section>

        <!-- End Product Description -->









     
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
     }
          @media only screen and (max-width: 768px) {
              
              
                .dk
     {
         width:100% !important;
         height:100% !important;
         margin-top:50px !important;
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
              }
              
              
              
              
                .size99
          {
              height:30px;
              font-size:10px;
          }
              
          }
          
          
          

</style>      
     
     
     
   

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
						
						
						
										

<?php require('footer.php')?>        