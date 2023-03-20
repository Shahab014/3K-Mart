<?php 

require('top.php');

if(!isset($_SESSION['USER_LOGIN'])){

	?>

	<script>

	window.location.href='index.php';

	</script>

	<?php

}

?>







<style>
    
    
    .wishlist-table table th, .wishlist-table table td
    {
        text-align:inherit;
        padding:11px 152px;
    }
    
     #back-head
    {
        background: rgba(0, 0, 0, 0) url(images/back.jpg) no-repeat scroll center center / cover ;
    }
    
    .size99
    {
        font-size:24px;
    }
     @media only screen and (max-width: 768px) {
         
         
          .size99
    {
        font-size:16px;
    }
        
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
        
    
</style>



















<div class="ht__bradcaump__area" id="back-head">

            <div class="ht__bradcaump__wrap">

                <div class="container">

                    <div class="row">

                        <div class="col-xs-12">

                            <div class="bradcaump__inner">

                                <nav class="bradcaump-inner">

                                  <a class="breadcrumb-item" href="index.php" style="color:white;">Home</a>

                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right" style="color:white;"></i></span>

                                  <span class="breadcrumb-item active" style="color:white;">Thank You</span>

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
                    
                    <div class="col-md-2"></div>

                    <div class="col-md-10 col-sm-12 col-xs-12">

                        <div class="wishlist-content">

                            <form action="#">

                                <div class="wishlist-table table-responsive">

                                   

											<?php

											$uid=$_SESSION['USER_ID'];

											$res=mysqli_query($con,"select `order`.*,order_status.name as order_status_str  from `order`,order_status where `order`.user_id='$uid' and order_status.id=`order`.order_status");

											

											

											while($row=mysqli_fetch_assoc($res)){

											

											

											

											

											?>

											

											

											<?php 

	 



  

 	                       $idd= $_REQUEST['id'];

							$rst= mysqli_query($con,"select * from product where id ='$idd' ");
							$roow=mysqli_fetch_assoc($rst);
  

 

?>

											

											

										

								<?php

								$ress=mysqli_query($con,"SELECT users.*, o.*, ot.name as order_str_name FROM `order`  as o, users, order_status as ot WHERE o.user_id = users.id AND o.order_status = ot.id");

								

								 $i=1;

								

								

								

								

								$rowww=mysqli_fetch_assoc($ress)

								?>				

												

												

	

		
<span class="size99"><a href="my_order_details.php?id=<?php echo $row['id']?>"><u><?php echo $roow['name']?> Check Order</u></a></span><br>
		

	

	

										
                                            <?php } ?>

                                     
                     नोट : आपके सामान की डिलीवरी 1 सप्ताह के अंदर कर दी जाएगी। 
                                </div>  

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        

        						

<?php require('footer.php')?>        