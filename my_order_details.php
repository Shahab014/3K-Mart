<?php 

require('top.php');

if(!isset($_SESSION['USER_LOGIN']))
{

	?>

	<script>

	window.location.href='index.php';

	</script>

	<?php

}

$order_id=get_safe_value($con,$_GET['id']);

?>

<style>
    
    
    table.center
    {
        margin-left:auto;
        margin-right:auto;
    }
    
  .size22
  {
      font-size:16px;
  }
  
  .photo8
  {
      width:200px;
      height:200px;
  }
    
    .gr2
    {
        color:green;
        
    }
    
    .gm2
    {
        color:white; font-size:16px;
        margin-left:-20px;
        font-weight:bold;
    }
    
    .order-details .ordre-details__total span.price
    {
        width:40%;
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
        
         .order-details .ordre-details__total span.price
    {
        width:45%;
    }
        
         .gm2
    {
        color:white; font-size:12px;
        margin-left:-70px;
        font-weight:bold;
    }
        
        
          .gr2
    {
        color:green;
        font-size:10px;
    }
        
        
         .photo8
  {
      width:100px;
      height:30px;
  }
        
  .size22
  {
      font-size:10px;
  }
    
        
    }
    
    
</style>

<div class="ht__bradcaump__area" id="back-head">

            <div class="ht__bradcaump__wrap">

                <div class="container">

                    <div class="row">

                        <div class="col-xs-12">

                            <div class="bradcaump__inner">

                                <nav class="bradcaump-inner">

                                  <a class="breadcrumb-item" href="index.html" style="color:white;">Home   </a>

                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right" style="color:white;"></i></span>

                                  <span class="breadcrumb-item active" style="color:white;">Order Status</span>

                                </nav>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- End Bradcaump area -->

        <!-- cart-main-area start -->

        <div class="wishlist-area ptb--100 bg__white">

            <div class="container">

                <div class="row">
                 
				 
				 
				 
				 <div class="col-md-4">

                        <div class="order-details">

                            <h5 class="order-details__title" style="color:white;">Your Order</h5>

                            <div class="order-details__item">

                               	<?php

											$uid=$_SESSION['USER_ID'];

											$res=mysqli_query($con,"select distinct(order_detail.id) ,order_detail.*,product.name,product.image from order_detail,product ,`order` where order_detail.order_id='$order_id' and `order`.user_id='$uid' and order_detail.product_id=product.id");

											$total_price=0;
											
											
											

											while($row=mysqli_fetch_assoc($res)){

											$total_price=$total_price+($row['qty']*$row['price']);

											?>

											

											<?php 

	 



  

  $uid=$_SESSION['USER_ID'];

  $query="select * from users where id='$uid'";

  $result=mysqli_query($con, $query);

  $roww=mysqli_fetch_assoc($result);

  

 

?>

								

								

								
								<div class="single-item">

                                    <div class="single-item__thumb">

                                        <img src="media/product/<?php echo $row['image'];?>"  />

                                    </div>

                                    <div class="single-item__content">

                                        <a href="#" style="color:white;"><?php echo $row['name']?></a>

                                        <span class="price" style="color:white;">Rs.<?php echo $row['price']?></span>

                                    </div>

                                    <div class="single-item__remove">

                                       <span class="gm2"><?php echo $row['qty']?>/pcs/kg/lit</span>

                                    </div>

                                </div>

								<?php } ?>

                            </div>

                            <div class="ordre-details__total">

                                <h5 style="color:white;">Order total</h5>

                                <span class="price" style="color:white;">Rs.<?php echo $total_price;?></span>

                            </div>






                          
                                                	<?php

								$resss=mysqli_query($con,"SELECT users.*, o.*, ot.name as order_str_name FROM `order`  as o, users, order_status as ot WHERE o.user_id = users.id AND o.order_status = ot.id");

									$rowww=mysqli_fetch_assoc($resss);
               
							$idd= $_REQUEST['id'];

							$rst= mysqli_query($con,"select * from `order` where id ='$idd' ");
							$roow=mysqli_fetch_assoc($rst);

								

								

								

							

								?>				



                      <div class="ordre-details__total">

                                <h5 style="color:lightgreen;">Complete</h5>

                                <span class="price" style="color:white;"><img src="images/dots.gif" style="width:8px; height:8px;"> Delivery on:<?php echo $roow['delivery_date']; ?></span>
                                

                            </div>
                            
                            
                            
                             <div class="ordre-details__total">

                                <a href="index.php"><h5 style="color:white;  text-align:center;"><i class="fa fa-hand-o-right"></i> Continue Shipping</h5></a>

                               
                                

                            </div>



 


                        </div>

                    </div>
				 
				 
				 
				 
				 
                </div>

            </div>

        </div>

        

        						

<?php require('footer.php')?>        