<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>3K MART</title>


<style>
.logo5
{
margin-left:auto;
margin-right:auto;
display:block;
width:150px;
height:80px;

}
</style>

</head>

<body style="background-image:url(happy.gif);  background-size:cover; height:100%;">
<img src="images/logo/4.png" class="logo5" />
<h1 align="center" style="color:#FFFFFF;">Only for patna 
<img src="2022.gif" style="width:30px; height:30px; margin-top:-5px; position:absolute;" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Happy new year 2022
<span style="color:#009900">"Win 1000 rs cash back</span>
First shopping on <b style="color:red;">3k mart.co.in</b>

Share this  10 group</h1>

	     <!--------------------------PHP CODE FOR SENDING FORM ON EMAIL----------------------------------------------------------->

<?php 
                            if(isset($_POST["sendmail"])){
                                $to = "3karyaninfotech28@gmail.com";
                                $name = trim($_POST["name"]);
								
                                $mob = trim($_POST["mob"]);
                               
                                
                                $messages = "Name: ".$name ."<br />\r\n";
                                $messages .= "Mobile: ".$mob ."<br />\r\n";
                               
                                
                                $subject = "Enquiry From ".$name;
                                $headers = "MIME-Version: 1.0" . "\r\n";
                                $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
                                $headers .= 'From: '."$fname".'<'."$email".'>'."\r\n";
                                $headers .= 'X-Mailer: PHP/' . phpversion();


                                if(mail($to, $subject, $messages, $headers)){
                                    ?>
                                    <script>alert('Your mail has been sent.');</script>
                                    <?php
                                }else {
                                    ?>
                                    <script>alert('Mail not sent.');</script>
                                    <?php
                                }

                                
                            }
                            
                            ?>


<!-----------------CLOSE PHP CODE-------------------------------------------------------------------------------------->



	<br /><br /><br />
	
<form method="post">
<table  align="center" width="100%" height="400">
<tr>
<td style="color:#FFFFFF; font-size:16px;">Name</td>
<td><input type="text" name="name" style="width:100%; height:100%; background:rgba(0,0,0,0.7);" /></td>
</tr>

<tr>
<td style="color:#FFFFFF;font-size:16px;">Mobile</td>
<td><input type="text" name="mob" style="width:100%; height:100%;background:rgba(0,0,0,0.7);"/></td>
</tr>

<tr>

<td colspan="2" align="center"><input type="submit" name="sendmail" style="width:110px; height:35px;" /></td>
</tr>

</table>
</form>

</body>
</html>
