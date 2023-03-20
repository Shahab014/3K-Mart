<?php

include('../vendor/autoload.php');

require('../connection.inc.php');

require('../functions.inc.php');



if(!$_SESSION['ADMIN_LOGIN']){

	if(!isset($_SESSION['USER_ID'])){

		die();

	}

}



$order_id=get_safe_value($con,$_GET['id']);
$get_name=get_safe_value($con,$_GET['name']);
$get_mobile=get_safe_value($con,$_GET['mobile']);



$css=file_get_contents('../css/bootstrap.min.css');

$css.=file_get_contents('../style.css');



$html='<div class="wishlist-table table-responsive">
<img src="../images/logo/4.png" style="width:100px; height:100px;">
   <table>

      <thead>

         <tr>

		<th class="product-thumbnail">Name</th>

		    <th class="product-thumbnail">Phone</th>

            <th class="product-thumbnail">Product Name</th>

            <!--<th class="product-thumbnail">Product Image</th>-->

            <th class="product-name">Qty</th>

            <th class="product-price">Price</th>

            <th class="product-price">Total Price</th>

         </tr>

      </thead>

      <tbody>';

	  

		

		if(isset($_SESSION['ADMIN_LOGIN'])){

			$res=mysqli_query($con,"select distinct(order_detail.id) ,order_detail.*,product.name,product.image from order_detail,product ,`order` where order_detail.order_id='$order_id' and order_detail.product_id=product.id");

		}else{

			$uid=$_SESSION['USER_ID'];
$sql = "SELECT users.*, o.*, ot.name as order_str_name FROM `order`  as o, users, order_status as ot WHERE o.user_id = users.id AND o.order_status = ot.id";
			$ress=mysqli_query($con,$sql);

			

			//$res=mysqli_query($con,"select distinct(order_detail.id) ,order_detail.*,product.name,product.image from order_detail,product ,`order` where order_detail.order_id='$order_id' and `order`.user_id='$uid' and order_detail.product_id=product.id");

		}

		

		$total_price=0;

		if(mysqli_num_rows($res)==0){

			die();

		}

		

		while($row=mysqli_fetch_assoc($res)){

		

	

 // $uid=$_REQUEST['id'];

  //$query="select * from `order` where id='$uid'";

  //$result=mysqli_query($con, $query);

  //$roww=mysqli_fetch_assoc($result);

		

		

		

		$total_price=$total_price+($row['qty']*$row['price']);

		 $pp=$row['qty']*$row['price'];

         $html.='<tr>

		 

		 

		 

		  

		<td class="product-name">'.$get_name.'</td>

		 <td class="product-name">'.$get_mobile.'</td>

            <td class="product-name">'.$row['name'].'</td>

            <!--<td class="product-name"> <img src="'.PRODUCT_IMAGE_SITE_PATH.$row['image'].'"></td>-->

            <td class="product-name">'.$row['qty'].'</td>

            <td class="product-name">'.$row['price'].'</td>

            <td class="product-name">'.$pp.'</td>

         </tr>';

		 }

		 

		

		 $html.='<tr>

				<td colspan="3"></td>

				<td class="product-name">Total Price</td>

				<td class="product-name" colspan="3">'.$total_price.'</td>

				

			</tr>';

		 

      $html.='</tbody>

   </table>

  *Terms & Conditions Apply

</div>';

//$html1 = '<table><thead><tr><th>Name</th></tr></thead></table>';

$mpdf=new \Mpdf\Mpdf();

$mpdf->WriteHTML($css,1);

$mpdf->WriteHTML($html,2);



$mpdf->Output();

?>



