<?php
session_start();
include_once("includes/header.php"); //INCLUDE HEADER
include("connection/connect.php"); //INCLUDE CONNECTION

if(isset($_POST['submit']))
{
 $oldpass=md5($_POST['opwd']);
 $useremail=$_SESSION['login'];
 $newpassword=md5($_POST['npwd']);
$sql=mysqli_query($db,"SELECT password FROM users where password='$oldpass' && email='$useremail'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $db=mysqli_query($db,"update users set password='$newpassword' where email='$useremail'");
$_SESSION['msg1']="Password Changed Successfully !!";
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
?>


<script type="text/javascript">
function valid()
{
if(document.chngpwd.opwd.value=="")
{
alert("Old Password Filed is Empty !!");
document.chngpwd.opwd.focus();
return false;
}
else if(document.chngpwd.npwd.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.npwd.focus();
return false;
}
else if(document.chngpwd.cpwd.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.cpwd.focus();
return false;
}
else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cpwd.focus();
return false;
}
return true;
}
</script>
  
<br>
<div class="innerpage-banner" id="home">
	<div class="inner-page-layer">
	</div>
</div>
<!---728x90--->
<br><br>
<div class="login-page about">
		<img class="login-w3img" src="images/loginimg3.jpg" alt="">
		<div class="container"> 
			<h2 class="heading text-center mb-sm-5 mb-4">Change Password </h2> 
			 <p style="color:red;"><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?></p>
			 
			<div class="login-agileinfo"> 
				<form name="chngpwd" action="" method="post" onSubmit="return valid();">
				    <input class="agile-ltext" type="password" name="opwd" id="opwd" placeholder="Old Password" required="">
					<input class="agile-ltext" type="password" name="npwd" id="npwd" placeholder="New Password" required="">
					<input class="agile-ltext" type="password" name="cpwd" id="cpwd" placeholder="Confirm Password" required="">
					 
					
					<input type="submit" id="buttn" name="submit" value="Change Password" />
				</form>
				
			</div>	 
		</div>
	</div>
