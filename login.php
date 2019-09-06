<?php include_once("includes/header.php"); ?>
<?php
include("connection/connect.php"); //INCLUDE CONNECTION
error_reporting(0); // hide undefine index errors
session_start(); // temp sessions
if(isset($_POST['submit']))   // if button is submit
{
	$username = $_POST['username'];  //fetch records from login form
	$password = $_POST['password'];
	
	if(!empty($_POST["submit"]))   // if records were not empty
     {
	$loginquery ="SELECT * FROM users WHERE username='$username' && password='".md5($password)."'"; //selecting matching records
	$result=mysqli_query($db, $loginquery); //executing
	$row=mysqli_fetch_array($result);
	
	                        if(is_array($row))  // if matching records in the array & if everything is right
								{
                                    	$_SESSION["user_id"] = $row['u_id']; // put user id into temp session
										 header("refresh:1;url=index.php"); // redirect to index.php page
	                            } 
							else
							    {
                                      	$message = "Invalid Username or Password!"; // throw error
                                }
	 }
	
	
}
?>
  
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
			<h2 class="heading text-center mb-sm-5 mb-4">log in to your account </h2> 
			<span style="color:red;"><?php echo $message; ?></span> 
             <span style="color:green;"><?php echo $success; ?></span>
			<div class="login-agileinfo"> 
				<form action="#" method="post"> 
					<input class="agile-ltext" type="text" name="username" placeholder="Username" required="">
					<input class="agile-ltext" type="password" name="password" placeholder="Password" required="">
					<div class="wthreelogin-text"> 
						<ul> 
							<li>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i> 
									<span> Remember me ?</span> 
								</label> 
							</li>
							<li><a href="#">Forgot password?</a> </li>
						</ul>
						<div class="clearfix"> </div>
					</div>   
					
					<input type="submit" id="buttn" name="submit" value="login" />
				</form>
				<p>Don't have an Account? <a href="registration.php"> Sign Up Now!</a></p> 
			</div>	 
		</div>
	</div>
