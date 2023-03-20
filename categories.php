<?php 

require('top.php');



if(!isset($_GET['id']) && $_GET['id']!=''){

	?>

	<script>

	window.location.href='index.php';

	</script>

	<?php

}



$cat_id=mysqli_real_escape_string($con,$_GET['id']);



$sub_categories='';

if(isset($_GET['sub_categories'])){

	$sub_categories=mysqli_real_escape_string($con,$_GET['sub_categories']);

}

$price_high_selected="";

$price_low_selected="";

$new_selected="";

$old_selected="";

$sort_order="";

if(isset($_GET['sort'])){

	$sort=mysqli_real_escape_string($con,$_GET['sort']);

	if($sort=="price_high"){

		$sort_order=" order by product.price desc ";

		$price_high_selected="selected";	

	}if($sort=="price_low"){

		$sort_order=" order by product.price asc ";

		$price_low_selected="selected";

	}if($sort=="new"){

		$sort_order=" order by product.id desc ";

		$new_selected="selected";

	}if($sort=="old"){

		$sort_order=" order by product.id asc ";

		$old_selected="selected";

	}



}



if($cat_id>0 && ($sub_categories!='' && $sub_categories>0)){

	$get_product=get_product($con,'',$cat_id,'','',$sort_order,'',$sub_categories);

}else{

	?>

	<script>

	window.location.href='index.php';

	</script>

	<?php

}										

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


.fr__product__inner
{
    height:160px;
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
                



<div class="body__overlay"></div>

        

        <!-- Start Bradcaump area -->

        <div class="ht__bradcaump__area" id="back-head">

            <div class="ht__bradcaump__wrap">

                <div class="container">

                    <div class="row">

                        <div class="col-xs-12">

                            <div class="bradcaump__inner">

                                <nav class="bradcaump-inner">

                                  <a class="breadcrumb-item" href="index.php" style="color:white;">Home</a>

                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right" style="color:white;"></i></span>

                                  <span class="breadcrumb-item active" style="color:white;">Products</span>

                                </nav>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- End Bradcaump area -->

        <!-- Start Product Grid -->

        <section class="htc__product__grid bg__white ptb--100">

            <div class="container">

                <div class="row">

					<?php if(count($get_product)>0){?>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="htc__product__rightidebar">

                            <div class="htc__grid__top">

                                <div class="htc__select__option">

                                    <select class="ht__select" onchange="sort_product_drop('<?php echo $cat_id?>','<?php echo SITE_PATH?>')" id="sort_product_id">

                                        <option value="">Default softing</option>

                                        <option value="price_low" <?php echo $price_low_selected?>>Sort by price low to hight</option>

                                        <option value="price_high" <?php echo $price_high_selected?>>Sort by price high to low</option>

                                        <option value="new" <?php echo $new_selected?>>Sort by new first</option>

										<option value="old" <?php echo $old_selected?>>Sort by old first</option>

                                    </select>

                                </div>

                               

                            </div>

                            <!-- Start Product View -->

                            <div class="row">

                                <div class="shop__grid__view__wrap">

                                    <div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">

                                        <?php

										foreach($get_product as $list){

										?>

										<!-- Start Single Category -->

										<div class="col-md-3 col-sm-6 col-xs-6" id="abbc">
                                            
										<div class="card">
											
											<div class="category">

												<div class="ht__cat__thumb">

													<a href="product.php?id=<?php echo $list['id']?>">

														<img src="media/product/<?php echo $list['image']?>" class="img-thumbnail">

													</a>

												</div>

												<div class="fr__hover__info">

													<ul class="product__action">

														<li><a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id']?>','add')"><i class="icon-heart icons"></i></a></li>

														<li><a href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id']?>','add')"><i class="icon-handbag icons"></i></a></li>

													</ul>

												</div>

												<div class="fr__product__inner">

													<h3 class="size99"><a href="product-details.html"><?php echo $list['name']?></a></h3>

													<ul class="fr__pro__prize">

														<li style="text-align:center;" class="old__prize" ><span style="color:#FF0000; text-decoration: line-through;margin-left:100px;">MRP.<?php echo $list['mrp']?></span>
														<span style="margin-left:100px;"><br>
														
														Rs.<?php echo $list['price']?></span>
														
														
														</li>

														

													</ul>

													

													<div class="cr__btn">

                                            <a href="product.php?id=<?php echo $list['id']?>">Buy Now</a>

                                        </div>

												</div>

											</div>

										</div>	</div>

										<?php } ?>

                                    </div>

							   </div>

                            </div>

                        </div>

                    </div>
					
				

					<?php } else { 

						echo "Data not found";

					} ?>

                

				</div>

            </div>

        </section>

        <!-- End Product Grid -->

        <!-- End Banner Area -->

		<input type="hidden" id="qty" value="1"/>

<?php require('footer.php')?>        