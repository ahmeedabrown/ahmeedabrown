<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
include_once 'product-action.php';
error_reporting(0);
session_start();
if(empty($_SESSION["user_id"]))
{
	header('location:login.php');
}
else{

										  
												foreach ($_SESSION["cart_item"] as $item)
												{
											
												$item_total += ($item["price"]*$item["quantity"]);
												
													if($_POST['submit'])
													{
						
													$SQL="insert into users_orders(u_id,title,quantity,price) values('".$_SESSION["user_id"]."','".$item["title"]."','".$item["quantity"]."','".$item["price"]."')";
						
														mysqli_query($db,$SQL);
														
														$success = "Thankyou! Your Order Placed successfully!";

														
														
													}
												}
?>


<?php include_once("includes/header.php"); ?>
<br>

        <div class="page-wrapper">
            <div class="top-links">
                <div class="container">
                    <ul class="row links">
                      
                        <li class="col-xs-12 col-sm-4 link-item"><span>1</span><a href="restaurants.php">Choose Restaurant</a></li>
                        <li class="col-xs-12 col-sm-4 link-item "><span>2</span><a href="#">Pick Your favorite food</a></li>
                        <li class="col-xs-12 col-sm-4 link-item active" ><span>3</span><a href="checkout.php">Order and Pay online</a></li>
                    </ul>
                </div>
            </div>
			
                <div class="container">
                 
					   <span style="color:green;">
								<?php echo $success; ?>
										</span>
					
                </div>
            
			
			
				  
            <div class="container m-t-30">
			<form action="" method="post">
                <div class="widget clearfix">
                    
                    <div class="widget-body">
                        <form method="post" action="#">
                            <div class="row">
                                
                                <div class="col-sm-12">
                                    <div class="cart-totals margin-b-20">
                                        <div class="cart-totals-title">
                                            <h4>Cart Summary</h4> </div>
                                        <div class="cart-totals-fields">
										
                                            <table class="table">
											<tbody>
                                          
												 
											   
                                                    <tr>
                                                        <td>Cart Subtotal</td>
                                                        <td> <?php echo "$".$item_total; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shipping &amp; Handling</td>
                                                        <td>free shipping</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-color"><strong>Total</strong></td>
                                                        <td class="text-color"><strong> <?php echo "$".$item_total; ?></strong></td>
                                                    </tr>
                                                </tbody>
												
												
												
												
                                            </table>
                                        </div>
                                    </div>
                                    <!--cart summary-->
                                    <div class="payment-option">
                                        <ul class=" list-unstyled">
                                            <li>
                                                <label class="custom-control custom-radio  m-b-20">
                                                    <input name="mod" id="radioStacked1" checked value="COD" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Payment on delivery</span>
                                                    <br> <span>Please send your cheque to Store Name, Store Street, Store Town, Store State / County</span> </label>
                                            </li>
	                                
                                        </ul>
                                        <p class="text-xs-center"> <input type="submit" onclick="return confirm('Are you sure?');" name="submit"  class="btn btn-outline-success btn-block" value="Order now"> </p>
                                    </div>
									<br>
									
									<div class="payment-option">
                                        <ul class=" list-unstyled">
                                            <li>
                                                <label class="custom-control custom-radio  m-b-20">
                                                    <input name="mod" id="radioStacked1" checked value="COD" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">EVC PLUS payment</span>
                                                    <br> <span>Si aad u dalbato dalabaad badan fadlan soo wac namberka shashada kaga soo muuqan doono</span> </label>
                                            </li>
	                                
                                        </ul>
                                        <p class="text-xs-center"> <input type="button" onclick="alert(' Fadlan nagala so xariir CALL: +252-617-070-580')" 
										name="submit"  class="btn btn-outline-success btn-block" value="EVC Plus!"> <br>
			                                  
                                    </div>
									
									
									<!-- Button trigger modal -->
	
	                                <div class="container">
									<div class="row">
									 <div class="col-md-12">
									    <div class="modal-box">
										  <button type="button" class="btn btn-primary btn-lg show-modal"
										  data-toggle="modal"data-target="#mymodal">
										  Evc PLus
										  </button>
										  <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="mymodallabel">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">
											   <button type="button" class="close" data-dismiss="modal" aria-label="close">
											   <span>X</span>
											   </button>
											   
											   <div class="modal-body">
											   <div class="icon">!</div>
											   <h3 class="title">Evc Plus</h3>
											   <p class="discription">
											   CALL:            +252-617-070-580 <br>
			                                   or send via evc: *712*61xxxxxx*2#
											   </p>
											   
											   <button class="modal-cancel">Ok</button>
											   
											   </div>
											   
											</div>
										  
										  </div>
										  </div>
										</div>
										 </div>
										   </div>
								    </div>
	
	                                <!-- Button trigger modal -->
									</form>
                                </div>
                            </div>
                       
                    </div>
                </div>
				 </form>
            </div>
            <!-- appointment -->
<section class="appointment text-center py-5">
	<div class="container py-sm-3">
		<h4>Eat Healthy and delicious Food from our Service</h4>
		<p class="mt-3">Call us to book your Table today or to order your Food</p>
		<h3>+252 617 070 580 </h3>
	</div>
</section>
<!-- //appointment -->

   
</body>
<?php include_once("includes/footer.php"); ?>
</html>

<?php
}
?>