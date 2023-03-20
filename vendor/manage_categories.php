<?php
session_start();
if ($_session['id']=='')
{
    

}
else
{
    include("connection.inc.php");
    $idd=$_session['id'];
    $abc="SELECT * FROM new_admin where id='$idd'";
    $aaa=mysqli_query($con,$abc);
}
?>






<?php

session_start();

require('top.inc.php');
$categories='';
$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from categories where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$categories=$row['categories'];
	}else{
		header('location:categories.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$categories=get_safe_value($con,$_POST['categories']);
	$res=mysqli_query($con,"select * from categories where categories='$categories'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="Categories already exist";
			}
		}else{
			$msg="Categories already exist";
		}
	}
	
	if($msg==''){
	   
		if(isset($_GET['id']) && $_GET['id']!=''){
			mysqli_query($con,"update categories set categories='$categories' where id='$id'");
		}
		else
		
		{
		    
		   $idd = $_SESSION['id'];

	

	$query="insert into categories(categories,status,created_by) values('$categories','1','$idd')"; 

	



	

	//echo $query;

	//echo "<br><br>";

	//mysql_query($query) die(mysql_error());

	if(mysqli_query($con,$query))

	{

	    

	

		$id = mysqli_insert_id($con);

	

	

	

		echo"<script type=\"text/javascript\">". "window.alert('Successfully');"."top.location = 'categories.php?id=$id';". "</script>"; 

}
}

	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Categories<?php echo $_session['id'];?>  </strong><small> Form</small></div>
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">Categories</label>
									<input type="text" name="categories" placeholder="Enter categories name" class="form-control" required value="<?php echo $categories?>">
								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
<?php
require('footer.inc.php');
?>