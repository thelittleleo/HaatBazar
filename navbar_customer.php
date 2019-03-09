-<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="customer_home.php" class="act">Home</a></li>	
									<li class="active"><a href="index_customer.php" class="act">Profile</a></li>	
									<!-- Mega Menu -->
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">My Shops<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>My Shop list</h6>
														<?php 
															$user_id = $_SESSION['id'];
															$shops = $user->getShopsByCustomerId($user_id);
															foreach ($shops as $row) {
																
														?>

														<li><a href="shop.php?id=<?php echo $row['shop_id']; ?>"><?php echo $row['shop_name']; ?></a></li>
														<?php } ?>
														
													</ul>
												</div>	
												
											</div>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Add Product<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>Add to Shop</h6>
														<?php 
															
															foreach ($shops as $row) {
																
														?>

														<li><a href="add_product.php?id=<?php echo $row['shop_id']; ?>"><?php echo $row['shop_name']; ?></a></li>
														<?php } ?>
													</ul>
												</div>
												
												
											</div>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Offers<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>Manage offer</h6>
														<?php 
															
															foreach ($shops as $row) {
																
														?>

														<li><a href="all_offer.php?id=<?php echo $row['shop_id']; ?>"><?php echo $row['shop_name']; ?></a></li>
														<?php } ?>
													</ul>
												</div>
												
											</div>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Poduct List<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All Products</h6>
														<?php 
															
															foreach ($shops as $row) {
																
														?>

														<li><a href="all_product.php?id=<?php echo $row['shop_id']; ?>"><?php echo $row['shop_name']; ?></a></li>
														<?php } ?>
													</ul>
												</div>
												
											
											</div>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Subscription<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>Subscriptions</h6>
														<?php 
															
															foreach ($shops as $row) {
																
														?>

														<li><a href="subscription.php?id=<?php echo $row['shop_id']; ?>"><?php echo $row['shop_name']; ?></a></li>
														<?php } ?>
													</ul>
												</div>
												
											
											</div>
										</ul>
									</li>

									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Adds<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>Your Adds</h6>
														<li><a href="request_add.php">Request Add</a></li>
														<li><a href="current_adds.php">Current Adds</a></li>
														<li><a href="current_requests.php">Current Requests</a></li>
														<li><a href="add_packages.php">Add Packages</a></li>
														
													</ul>
												</div>
							
											</div>
										</ul>
									</li>
									
									<li><a href="logout.php">Logout</a></li>
									
								</ul>
							</div>
							</nav>
			</div>
		</div>
		

