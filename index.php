<?php include_once("includes/header.php"); ?>
     <!-- banner -->
<div class="banner" id="home">
	<div class="layer">
		<div class="container">
			<div class="banner-text-agile">
				<div class="row">
					<div class="col-lg-6 p-0">
						<!-- banner slider-->
					<div class="csslider infinity" id="slider1">
						<input type="radio" name="slides" checked="checked" id="slides_1">
						<input type="radio" name="slides" id="slides_2">
						<input type="radio" name="slides" id="slides_3">
						<ul class="banner_slide_bg">
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4"><span>Order Delivery & </span> Take-Out.</h3>
										<p class="w3ls_pvt-title my-3">Find restaurants, specials, and coupons for free</p>
										<a href="restaurants.php" class="btn btn-banner my-sm-3 mb-3">View Menu</a>
										<a href="contact.php" class="btn btn-banner1 my-sm-3 mb-3">contact us</a>
									</div>
								</div>
							</li>
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4"><span>Delicious &amp; crispy</span> Recipes.</h3>
										<p class="w3ls_pvt-title my-3">My Food & Family offers a huge variety of recipes for every occasion. Find a selection ...
										
										No matter how you choose to cook or for whom, you'll be able to find just the right recipes for every palate. .</p>
										<a href="restaurants.php" class="btn btn-banner my-sm-3 mb-3">View Menu</a>
										<a href="contact.php" class="btn btn-banner1 my-sm-3 mb-3">contact us</a>
									</div>
								</div>
							</li>
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4"><span>Tasty and healthy Food </span></h3>
										<p class="w3ls_pvt-title my-3">Our chefs cook up fantastic flavorful meals, then we blast-freeze them and store them in icy-cold ... 
										All employees enjoy a delicious, healthy breakfast, lunch or dinner every day and your office has the ... We offer a meal for every time of the day.</p>
										<a href="restaurants.php" class="btn btn-banner my-sm-3 mb-3">View Menu</a>
										<a href="contact.php" class="btn btn-banner1 my-sm-3 mb-3">contact us</a>
									</div>
								</div>
							</li>
						</ul>
						<div class="navigation">
							<div>
								<label for="slides_1"></label>
								<label for="slides_2"></label>
								<label for="slides_3"></label>
							</div>
						</div>
					</div>
					<!-- //banner slider-->

					</div>
					<div class="col-lg-6 col-md-8 mt-lg-0 mt-5">
						<img src="images/burger/1.jpg" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->
<!---728x90--->
  
      
	  
	
        <!-- Popular block starts -->
        <section class="popular">
            <div class="container">
                <div class="title text-xs-center m-b-30">
                   <h2 class="heading text-center mb-sm-5 mb-4">Hot today </h2><br>
				   <p class="lead">The easiest way to your favourite food</p>
		<br><br>
                    
                </div>
                <div class="row">
				
				
				
						<?php 
						// fetch records from database to display popular first 3 dishes from table
						$query_res= mysqli_query($db,"select * from dishes LIMIT 3"); 
									      while($r=mysqli_fetch_array($query_res))
										  {
													
						                       echo '  <div class="col-xs-12 col-sm-6 col-md-4 food-item">
														<div class="food-item-wrap">
															<div class="figure-wrap bg-image" data-image-src="admin/Res_img/dishes/'.$r['img'].'">
																<div class="distance"><i class="fa fa-pin"></i>1240m</div>
																<div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
																<div class="review pull-right"><a href="#">198 reviews</a> </div>
															</div>
															<div class="content">
																<h5><a href="dishes.php?res_id='.$r['rs_id'].'">'.$r['title'].'</a></h5>
																<div class="product-name">'.$r['slogan'].'</div>
																<div class="price-btn-block"> <span class="price">$'.$r['price'].'</span> <a href="dishes.php?res_id='.$r['rs_id'].'" class="btn theme-btn-dash pull-right">Order Now</a> </div>
															</div>
															
														</div>
												</div>';
													
										  }
						
						
						?>
				
				
				
				
                  
					
					
					
					
					
					
                 
                </div>
            </div>
        </section>
        <!-- Popular block ends -->
		
		<br>
        <!-- How it works block starts -->
        <div class="wthree-order">  
		<img src="images/i2.jpg" class="w3order-img" alt=""><br>
		<div class="container">
			<h3 class="heading text-center mb-sm-5 mb-4">how to order online</h3>
			<p class="w3lsorder-text">Get your favourite food in 4 simple steps.</p>
			<div class="order-agileinfo">  
				<div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
					<div class="order-w3text"> 
						<i class="fa fa-map" aria-hidden="true"></i> 
						<h5>Choose restaurant</h5>
						<span>1</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
					<div class="order-w3text"> 
						<i class="fa fa-cutlery" aria-hidden="true"></i> 
						<h5>Choose Food</h5>
						<span>2</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
					<div class="order-w3text"> 
						<i class="fa fa-credit-card" aria-hidden="true"></i>
						<h5>Pay Money</h5>
						<span>3</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
					<div class="order-w3text"> 
						<i class="fa fa-truck" aria-hidden="true"></i>
						<h5>Enjoy Food</h5>
						<span>4</span>
					</div>
				</div>
				<div class="clearfix"> </div> 
			</div>
		</div>
	</div>
        <!-- How it works block ends -->
		<br><br><br><br>
		<!--deals-->
			<div class="w3agile-deals">
		<div class="container">
			<h3 class="w3ls-title">Special Services</h3>
			<div class="dealsrow">
				<div class="col-md-6 col-sm-6 deals-grids">
					<div class="deals-left">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div> 
					<div class="deals-right">
						<h4>FREE DELIVERY</h4>
						<p>Our meals are prepared daily by our team of chefs in the kitchen and are free from any preservatives. ... 
						We deliver your freshly prepared meals to your door. </p>
					</div> 
					<div class="clearfix"> </div>
				</div> 
				<div class="col-md-6 col-sm-6 deals-grids">
					<div class="deals-left">
						<i class="fa fa-birthday-cake" aria-hidden="true"></i>
					</div> 
					<div class="deals-right">
						<h4>Party Orders</h4>
						<p>anapes & Cocktails, Dinner Parties, Party Food, Meeting Food & Sharing Platters. ... Prepared party food delivered to your door .... transformed the way I order food for my parties – 
						it always proposes a personalised, delicious menu, ordering . </p>
					</div> 
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 col-sm-6 deals-grids">
					<div class="deals-left">
						<i class="fa fa-lemon-o" aria-hidden="true"></i>
					</div> 
					<div class="deals-right">
						<h4>low prices</h4>
						<p> we offer customers all their favorite fast foods, 
						only healthier. Burgers made with the finest, f . </p>
					</div>
					<div class="clearfix"> </div>
				</div> 
				<div class="col-md-6 col-sm-6 deals-grids">
					<div class="deals-left">
						<i class="fa fa-glass" aria-hidden="true"></i>
					</div> 
					<div class="deals-right">
						<h4>Always Fresh</h4>
						<p>Our professional chefs cook delicious meals and we deliver them fresh to you. ... home every week. Our meals are always freshly prepared and never frozen.</p>
					</div>
					<div class="clearfix"> </div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
			<!--deals-->
			
			<br><br><br>
        <!-- Featured restaurants starts -->
        <section class="featured-restaurants">
            <div class="container">
			<h2 class="heading text-center mb-sm-5 mb-4">Featured Restaurants </h2><br><br>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="title-block pull-left">
                            <h4>Featured restaurants</h4> </div>
                    </div>
                    <div class="col-sm-8">
                        <!-- restaurants filter nav starts -->
                        <div class="restaurants-filter pull-right">
                            <nav class="primary pull-left">
                                <ul>
                                    <li><a href="#" class="selected" data-filter="*">all</a> </li>
									<?php 
									// display categories here
									$res= mysqli_query($db,"select * from res_category");
									      while($row=mysqli_fetch_array($res))
										  {
											echo '<li><a href="#" data-filter=".'.$row['c_name'].'"> '.$row['c_name'].'</a> </li>';
										  }
									?>
                                   
                                </ul>
                            </nav>
                        </div>
                        <!-- restaurants filter nav ends -->
                    </div>
                </div>
                <!-- restaurants listing starts -->
                <div class="row">
                    <div class="restaurant-listing">
                        
						
						<?php  //fetching records from table and filter using html data-filter tag
						$ress= mysqli_query($db,"select * from restaurant");  
									      while($rows=mysqli_fetch_array($ress))
										  {
													// fetch records from res_category table according to catgory ID
													$query= mysqli_query($db,"select * from res_category where c_id='".$rows['c_id']."' ");
													 $rowss=mysqli_fetch_array($query);
						
													 echo ' <div class="col-xs-12 col-sm-12 col-md-6 single-restaurant all '.$rowss['c_name'].'">
														<div class="restaurant-wrap">
															<div class="row">
																<div class="col-xs-12 col-sm-3 col-md-12 col-lg-3 text-xs-center">
																	<a class="restaurant-logo" href="dishes.php?res_id='.$rows['rs_id'].'" > <img src="admin/Res_img/'.$rows['image'].'" alt="Restaurant logo"> </a>
																</div>
																<!--end:col -->
																<div class="col-xs-12 col-sm-9 col-md-12 col-lg-9">
																	<h5><a href="dishes.php?res_id='.$rows['rs_id'].'" >'.$rows['title'].'</a></h5> <span>'.$rows['address'].'</span>
																	<div class="bottom-part">
																		<div class="cost"><i class="fa fa-check"></i> Min  100</div>
																		<div class="mins"><i class="fa fa-motorcycle"></i> 30 min</div>
																		<div class="ratings"> <span>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star-o"></i>
																			</span> (122) </div>
																	</div>
																</div>
																<!-- end:col -->
															</div>
															<!-- end:row -->
														</div>
														<!--end:Restaurant wrap -->
													</div>';
										  }
						
						
						?>
						
							
						
					
                    </div>
                </div>
                <!-- restaurants listing ends -->
               
            </div>
			
			<!-- testimonials -->
<section class="feedback" id="testimonials">
	<div class="feedback-layer py-5">
		<div class="container py-lg-5">
		<h3 class="heading text-center mb-sm-5 mb-4">Testimonials</h3>
		<br>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="feedback-info">
						<div class="feedback-top p-4">
							<span class="fa fa-quote-right"></span> 
							<p> "Online sales is increasing while orders via phone are decreasing. OFOS gives the customers the convenience to order, thus they order more frequently."</p>
							<div class="clearfix"></div>
						</div>
						<div class="feedback-grids">
							<div class="feedback-img">
								<img src="images/zak.jpg" class="img-fluid" alt="">
							</div>
							<div class="feedback-img-info">
								<h5>zakaria carabta</h5>
								<p class="font-italic">- March 3, 2019.</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mt-md-0 mt-5">
					<div class="feedback-info">
						<div class="feedback-top p-4">
							<span class="fa fa-quote-right"></span> 
							<p> gives us customers an app thats easy to use. The service has been superb and great customer service.Thanks OFOS.</p>
							<div class="clearfix"></div>
						</div>
						<div class="feedback-grids">
							<div class="feedback-img">
								<img src="images/ser2.jpg" class="img-fluid" alt="">
							</div>
							<div class="feedback-img-info">
								<h5>Mary Jane</h5>
								<p class="font-italic">- March 3, 2019.</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
					<div class="feedback-info">
						<div class="feedback-top p-4">
							<span class="fa fa-quote-right"></span> 
							<p> Your online ordering system is simply the best. 
							It has already made our customer’s ordering experience much more pleasurable. Simply the BEST!!</p>
							<div class="clearfix"></div>
						</div>
						<div class="feedback-grids">
							<div class="feedback-img">
								<img src="images/ser3.jpg" class="img-fluid" alt="">
							</div>
							<div class="feedback-img-info">
								<h5>Dean winchester</h5>
								<p class="font-italic">- March 3, 2019.</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //testimonials -->
			<br><br>
			<br><br>
			
			<!-- join -->
<section class="join py-5">
	<div class="container py-lg-5 py-sm-3">
		<div class="row join_grids">
			<div class="col-lg-6">
				<img src="images/bgi.jpg" class="img-fluid" alt="">
			</div>
			<div class="col-lg-6">
				<h4 class="mt-4">Book Your Table Today</h4>
				<p class="py-sm-4 py-3">Find all the best restaurants in Mogadishu and book your table online for free. 
				It has never been easier to make a reservation ✓menu ✓description ✓Location..</p>
				<p class="pb-3">Book your dining experience at the best Restaurants today in mogadishu. Stunning historic & listed buildings providing unique and charismatic dining experiences..</p>
				
						<span class="fa fa-phone"></span>
						<p class="d-inline">Call Us : +252 617 070 580</p>
					
			</div>
		</div>
	</div>
</section>
<!-- //join -->
			
        <!-- appointment -->
<section class="appointment text-center py-5">
	<div class="container py-sm-3">
		<h4>Eat Healthy and delicious Food from our Service</h4>
		<p class="mt-3">Call us to book your Table today or to order your Food</p>
		<h3>+252 617 070 580 </h3>
	</div>
</section>
<!-- //appointment -->

   <?php include_once("includes/footer.php"); ?>

   
   
    </div>
    <!--/end:Site wrapper -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>