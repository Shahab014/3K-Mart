<style>             #back-head    {        background: rgba(0, 0, 0, 0) url(images/back.jpg) no-repeat scroll center center / cover ;    }             @media only screen and (max-width: 768px) {                .order-details        {            margin-top:-92px;        }                        .ht__bradcaump__wrap        {            padding:35px 0;        }                                 #back-head    {        background: rgba(0, 0, 0, 0) url(images/back.jpg);        background-repeat:no-repeat;        background-size:contain;    }     }        </style><?php require('top.php');if(!isset($_SESSION['cart']) || count($_SESSION['cart'])==0){	?>	<script>		window.location.href='index.php';	</script>	<?php}$cart_total=0;if(isset($_POST['submit'])){	$address=get_safe_value($con,$_POST['address']);			$delivery_date=get_safe_value($con,$_POST['delivery_date']);			$uname=get_safe_value($con,$_POST['uname']);	$mob=get_safe_value($con,$_POST['mob']);			$city=get_safe_value($con,$_POST['city']);	$pincode=get_safe_value($con,$_POST['pincode']);	$payment_type=get_safe_value($con,$_POST['payment_type']);	$user_id=$_SESSION['USER_ID'];	foreach($_SESSION['cart'] as $key=>$val){		$productArr=get_product($con,'','',$key);		$price=$productArr[0]['price'];		$qty=$val['qty'];		$cart_total=$cart_total+($price*$qty);			}	$total_price=$cart_total;	$payment_status='pending';	if($payment_type=='cod'){		$payment_status='success';	}	$order_status='1';	$added_on=date('Y-m-d h:i:s');		$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);				mysqli_query($con,"insert into `order`(user_id,address,city,pincode,payment_type,payment_status,order_status,added_on,total_price,txnid,status,delivery_date,uname,mob) values('$user_id','$address','$city','$pincode','$payment_type','$payment_status','$order_status','$added_on','$total_price','$txnid','1','$delivery_date','$uname','$mob')");		$order_id=mysqli_insert_id($con);		foreach($_SESSION['cart'] as $key=>$val){		$productArr=get_product($con,'','',$key);		$price=$productArr[0]['price'];		$qty=$val['qty'];				mysqli_query($con,"insert into `order_detail`(order_id,product_id,qty,price) values('$order_id','$key','$qty','$price')");	}		unset($_SESSION['cart']);		if($payment_type=='payu'){		$MERCHANT_KEY = ""; 		$SALT = "";		$hash_string = '';		//$PAYU_BASE_URL = "https://secure.payu.in";		$PAYU_BASE_URL = "";		$action = '';		$posted = array();		if(!empty($_POST)) {		  foreach($_POST as $key => $value) {    			$posted[$key] = $value; 		  }		}				$userArr=mysqli_fetch_assoc(mysqli_query($con,"select * from users where id='$user_id'"));				$formError = 0;		$posted['txnid']=$txnid;		$posted['amount']=$total_price;		$posted['firstname']=$userArr['name'];		$posted['email']=$userArr['email'];		$posted['phone']=$userArr['mobile'];		$posted['productinfo']="productinfo";		$posted['key']=$MERCHANT_KEY ;		$hash = '';		$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";		if(empty($posted['hash']) && sizeof($posted) > 0) {		  if(				  empty($posted['key'])				  || empty($posted['txnid'])				  || empty($posted['amount'])				  || empty($posted['firstname'])				  || empty($posted['email'])				  || empty($posted['phone'])				  || empty($posted['productinfo'])				 		  ) {			$formError = 1;		  } else {    			$hashVarsSeq = explode('|', $hashSequence);			foreach($hashVarsSeq as $hash_var) {			  $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';			  $hash_string .= '|';			}			$hash_string .= $SALT;			$hash = strtolower(hash('sha512', $hash_string));			$action = $PAYU_BASE_URL . '/_payment';		  }		} elseif(!empty($posted['hash'])) {		  $hash = $posted['hash'];		  $action = $PAYU_BASE_URL . '/_payment';		}		$formHtml ='<form method="post" name="payuForm" id="payuForm" action="'.$action.'"><input type="hidden" name="key" value="'.$MERCHANT_KEY.'" /><input type="hidden" name="hash" value="'.$hash.'"/><input type="hidden" name="txnid" value="'.$posted['txnid'].'" /><input name="amount" type="hidden" value="'.$posted['amount'].'" /><input type="hidden" name="firstname" id="firstname" value="'.$posted['firstname'].'" /><input type="hidden" name="email" id="email" value="'.$posted['email'].'" /><input type="hidden" name="phone" value="'.$posted['phone'].'" /><textarea name="productinfo" style="display:none;">'.$posted['productinfo'].'</textarea><input type="hidden" name="surl" value="'.SITE_PATH.'payment_complete.php" /><input type="hidden" name="furl" value="'.SITE_PATH.'payment_fail.php"/><input type="submit" style="display:none;"/></form>';		echo $formHtml;		echo '<script>document.getElementById("payuForm").submit();</script>';	}else{			?>		<script>			window.location.href='my_order_details.php?id=<?php echo $order_id; ?>';							</script>		<?php	}		}?> <!-----------------------------------open popup------------------------>             <!-- Button trigger modal --><!-- Modal --><div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">  <div class="modal-dialog" role="document">    <div class="modal-content">      <div class="modal-header">        <h5 class="modal-title" id="exampleModalLabel">Please Check Pin Code your Area</h5>        <button type="button" class="close" data-dismiss="modal" aria-label="Close">          <span aria-hidden="true">&times;</span>        </button>      </div>      <div class="modal-body">                           <form method="post" action="checkpin.php">                    <div class="form-group">                        <input type="text" name="pin" class="form-control" placeholder="Enter Pin">                    </div>                                       <button type="submit" name="login" class="btn btn-primary">Check Pin</button>                </form>                                      </div>      <div class="modal-footer">        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>             </div>    </div>  </div></div>                 <!--<div id="myModal" class="modal fade">    <div class="modal-dialog">        <div class="modal-content">            <div class="modal-header">                <h5 class="modal-title">Check Pin For Delivery In Your</h5>                <font color="#ffffff"><?php  echo $error;?></font>                <button type="button" class="close" data-dismiss="modal">&times;</button>            </div>            <div class="modal-body">			                <form method="post" action="checkpin.php">                    <div class="form-group">                        <input type="text" name="pin" class="form-control" placeholder="Enter Pin">                    </div>                    <div class="form-group">                        <input type="email" class="form-control" placeholder="Email Address">                    </div>                    <button type="submit" name="login" class="btn btn-primary">Check Pin</button>                </form>            </div>        </div>    </div></div>-->           <!-----------------------------------close popup------------------------>                                     <div class="ht__bradcaump__area" id="back-head">            <div class="ht__bradcaump__wrap">                <div class="container">                    <div class="row">                        <div class="col-xs-12">                            <div class="bradcaump__inner">                                <nav class="bradcaump-inner">                                  <a class="breadcrumb-item" href="index.php" style="color:white;">Home</a>                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right" style="color:white;"></i></span>                                  <span class="breadcrumb-item active" style="color:white;">checkout</span>                                </nav>                            </div>                        </div>                    </div>                </div>            </div>        </div>        <!-- End Bradcaump area -->        <!-- cart-main-area start -->        <div class="checkout-wrap ptb--100">            <div class="container">                <div class="row">                    <div class="col-md-8">                        <div class="checkout__inner">                            <div class="accordion-list">                                <div class="accordion">                                    									<?php 									$accordion_class='accordion__title';									if(!isset($_SESSION['USER_LOGIN'])){									$accordion_class='accordion__hide';									?>									<div class="accordion__title" style="color:white;">                                        Checkout Method                                    </div>                                    <div class="accordion__body">                                        <div class="accordion__body__form">                                            <div class="row">                                                <div class="col-md-6">                                                    <div class="checkout-method__login">                                                        <form id="login-form" method="post">                                                            <h5 class="checkout-method__title">Login</h5>                                                            <div class="single-input">                                                                <input type="text" name="login_email" id="login_email" placeholder="Your Email*" style="width:100%">																<span class="field_error" id="login_email_error"></span>                                                            </div>															                                                            <div class="single-input">                                                                <input type="password" name="login_password" id="login_password" placeholder="Your Password*" style="width:100%">																<span class="field_error" id="login_password_error"></span>                                                            </div>															                                                            <p class="require">* Required fields</p>                                                            <div class="dark-btn">                                                                <button type="button" class="fv-btn" onclick="user_login()">Login</button>                                                            </div>															<div class="form-output login_msg">																<p class="form-messege field_error"></p>															</div>                                                        </form>                                                    </div>                                                </div>                                                <div class="col-md-6">                                                    <div class="checkout-method__login">                                                        <form action="#">                                                            <h5 class="checkout-method__title">Register</h5>                                                            <div class="single-input">                                                                <input type="text" name="name" id="name" placeholder="Your Name*" style="width:100%">																<span class="field_error" id="name_error"></span>                                                            </div>															<div class="single-input">                                                                <input type="text" name="email" id="email" placeholder="Your Email*" style="width:100%">																<span class="field_error" id="email_error"></span>                                                            </div>															                                                            <div class="single-input">                                                                <input type="text" name="mobile" id="mobile" placeholder="Your Mobile*" style="width:100%">																<span class="field_error" id="mobile_error"></span>                                                            </div>															<div class="single-input">                                                                <input type="password" name="password" id="password" placeholder="Your Password*" style="width:100%">																<span class="field_error" id="password_error"></span>                                                            </div>                                                            <div class="dark-btn">                                                                <button type="button" class="fv-btn" onclick="user_register()">Register</button>                                                            </div>                                                        </form>                                                    </div>                                                </div>                                            </div>                                        </div>                                    </div>									<?php } ?>                                    <div class="<?php echo $accordion_class?>" style="color:white; background-color:#C43B68;">                                        Address Information                                    </div>									<form method="post">										<div class="accordion__body">											<div class="bilinfo">																									<div class="row">													    													    													    	<div class="col-md-12">															<div class="single-input">																<input type="hidden" name="delivery_date" value="15 Jan 2021" placeholder="">															</div>														</div>																																																				<div class="col-md-6">															<div class="single-input">																<input type="text" name="uname" placeholder="Name" required>															</div>														</div>																																												<div class="col-md-6">															<div class="single-input">																<input type="text" name="mob" placeholder="Mobile" required>															</div>														</div>													    													    													    													    														<div class="col-md-12">															<div class="single-input">																<input type="text" name="address" placeholder="Street Address" required>															</div>														</div>														<div class="col-md-6">															<div class="single-input">																<input type="text" name="city" placeholder="City/State" required>															</div>														</div>														<div class="col-md-6">															<div class="single-input">																<input type="text" name="pincode" placeholder="Post code/ zip" required>															</div>														</div>																											</div>																							</div>										</div>										<div class="<?php echo $accordion_class?>" style="color:white; background-color:#C43B68;">											payment information										</div>										<div class="accordion__body">											<div class="paymentinfo">												<div class="single-method">													COD(CASH ON DELIVERY) <input type="radio" name="payment_type" value="COD" required/>													&nbsp;&nbsp;<!--PayU <input type="radio" name="payment_type" value="payu" required/>-->												</div>												<div class="single-method">												  												</div>											</div>										</div>										 <input type="submit" name="submit" style="color:white; background-color:#C43B68; border-color:#C43B68; border-radius:5px; width:70px; height:36px;"/>										 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">  Check Pin</button>									</form>                                </div>                            </div>                        </div>                    </div>                    <div class="col-md-4">                        <div class="order-details">                            <h5 class="order-details__title" style="color:white;">Your Order</h5>                            <div class="order-details__item">                                <?php								$cart_total=0;								foreach($_SESSION['cart'] as $key=>$val){								$productArr=get_product($con,'','',$key);								$pname=$productArr[0]['name'];								$mrp=$productArr[0]['mrp'];								$price=$productArr[0]['price'];								$image=$productArr[0]['image'];								$qty=$val['qty'];								$cart_total=$cart_total+($price*$qty);								?>								<div class="single-item">                                    <div class="single-item__thumb">                                        <img src="media/product/<?php echo $image;?>"  />                                    </div>                                    <div class="single-item__content">                                        <a href="#" style="color:white;"><?php echo $pname?></a>                                        <span class="price" style="color:white;">Rs.<?php echo $price*$qty?></span>                                    </div>                                    <div class="single-item__remove">                                        <a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','remove')"><i class="icon-trash icons" style="color:white;"></i></a>                                    </div>                                </div>								<?php } ?>                            </div>                            <div class="ordre-details__total">                                <h5 style="color:white;">Order total</h5>                                <span class="price" style="color:white;">Rs.<?php echo $cart_total?></span>                            </div>                        </div>                    </div>                </div>            </div>        </div>        						<?php require('footer.php')?>        