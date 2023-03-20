<?php 
require('top.php');
?>

 <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/back.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right" style="color:white;"></i></span>
                                  <span class="breadcrumb-item active" style="color:white;">shopping cart</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail" style="color:#fff; background-color:#c43b68;">products</th>
                                            <th class="product-name" style="color:#fff; background-color:#c43b68;">name of products</th>
                                            <th class="product-price" style="color:#fff; background-color:#c43b68;">Price</th>
                                            <th class="product-quantity" style="color:#fff; background-color:#c43b68;">Quantity</th>
                                            <th class="product-subtotal" style="color:#fff; background-color:#c43b68;">Total</th>
                                            <th class="product-remove" style="color:#fff; background-color:#c43b68;">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
										if(isset($_SESSION['cart'])){
											foreach($_SESSION['cart'] as $key=>$val){
											$productArr=get_product($con,'','',$key);
											$pname=$productArr[0]['name'];
											
											$kg=$productArr[0]['kg_lit'];
											
											
											$mrp=$productArr[0]['mrp'];
											$price=$productArr[0]['price'];
											$image=$productArr[0]['image'];
											$qty=$val['qty'];
											?>
											<tr>
												<td class="product-thumbnail"><a href="#"><img src="media/product/<?php echo $image;?>"  /></a></td>
												<td class="product-name"><a href="#"><?php echo $pname?></a>
													<ul  class="pro__prize">
														<li class="old__prize"><?php echo $mrp?></li>
														<li><?php echo $price?></li>
														
														
														
														
														  <?php 

	 



  //$uid=$_REQUEST['id'];
  //$query="select * from product where id='$uid'";
  //$result=mysqli_query($con, $query);
  //$rowww=mysqli_fetch_assoc($result);
 

?>
														
														
														
														
														
									
													</ul>
													
													
														<ul  class="pro__prize">
														<li class="old__prize"><?php echo $kg?></li>
														
													
													
												</td>
												<td class="product-price"><span class="amount"><?php echo $price?></span></td>
												<td class="product-quantity"><input type="text" id="<?php echo $key?>qty" value="<?php echo $qty?>" />
												<!--<br/><a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','update')">update</a>-->
												</td>
												<td class="product-subtotal"><?php echo $qty*$price?></td>
												<td class="product-remove"><a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','remove')"><i class="icon-trash icons"></i></a></td>
											</tr>
											<?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="buttons-cart--inner">
                                        <div class="buttons-cart">
                                            <!--<a href="<?php echo SITE_PATH?>">Continue Shopping</a>-->
                                        </div>
                                        <div class="buttons-cart checkout--btn">
                                            <a href="<?php echo SITE_PATH?>checkout.php">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        
										
<?php require('footer.php')?>        