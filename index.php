
							<?php
              include("header.php");
						?>

                        </ul>

                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- banner part starts -->
        <section class="hero bg-image" data-image-src="images/img/main.jpeg">
            <div class="hero-inner">
                <div class="container text-center hero-text font-white">
                    <h1>Your feet, Our Priority </h1>
                    <h5 class="font-white space-xs">We improve your Talent</h5>
                    <div class="banner-form">
                        <form class="form-inline" action="#" method="post">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputAmount">I would like to ....</label>
                              <div class="form-group">
                                    <input type="text" name="search" class="form-control form-control-lg" id="exampleInputAmount" placeholder="I would like...."> </div>
                            </div>
                            <button onclick="location.href='search.php'" type="submit" class="btn theme-btn btn-lg">Search mouzah</button>
                        </form>
                    </div>

                </div>
            </div>
            <!--end:Hero inner -->
        </section>
        <!-- banner part ends -->




        <!-- Popular block starts -->
        <section class="popular">
            <div class="container">
                <div class="title text-xs-center m-b-30">
                    <h2>Latest from Mouzah Design</h2>
                    <p class="lead">Get latest from us</p>
                </div>
                <div class="row">



						<?php
						// fetch records from database to display popular first 3 beers from table
						$query_res= mysqli_query($db,"select * from beers LIMIT 3");
									      while($r=mysqli_fetch_array($query_res))
										  {

						                       echo '  <div class="col-xs-12 col-sm-6 col-md-4 mouzah-item">
														<div class="mouzah-item-wrap">
															<div class="figure-wrap bg-image" data-image-src="admin/Res_img/beers/'.$r['img'].'">
																<div class="distance"><i class="fa fa-pin"></i>1240m</div>
																<div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
																<div class="review pull-right"><a href="#">198 reviews</a> </div>
															</div>
															<div class="content">
																<h5><a href="#?res_id='.$r['rs_id'].'">'.$r['title'].'</a></h5>
																<div class="product-name">'.$r['slogan'].'</div>
																<div class="price-btn-block"> <span class="price">RWf '.$r['price'].'</span> <a href="#" class="btn theme-btn-dash pull-right">See More</a> </div>
															</div>

														</div>
												</div>';

										  }


						?>












                </div>
            </div>
        </section>
        <!-- Popular block ends -->
        <!-- How it works block starts -->
        <section class="how-it-works">
            <div class="container">
                <div class="text-xs-center">
                    <h2>Your are one way to Go!</h2>
                    <!-- 3 block sections starts -->
                    <div class="row how-it-works-solution">
                        <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col1">
                            <div class="how-it-works-wrap">
                                <div class="step step-1">
                                    <div class="icon" data-step="1">
                                        <i class="fa fa-user" style="color: #fff; font-size:34px;"></i>
                                    </div>
                                    <h3>Sign up</h3>
                                    <p>we will need your identification.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col2">
                            <div class="step step-2">
                                <div class="icon" data-step="2">
                                      <i class="fa fa-graduation-cap" style="color: #fff; font-size:34px;"></i>
                                </div>
                                <h3>Get certificate</h3>
                                <p>After being trained you will get certificate </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col3">
                            <div class="step step-3">
                                <div class="icon" data-step="3">
																	  <i class="fa fa-money" style="color: #fff; font-size:34px;"></i>
                                </div>
                                <h3>Get Hired</h3>
                                <p>Start making money, and make your dreams comes true!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- How it works block ends -->
        <!-- Featured workshops starts -->
        <section class="featured-workshops">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="title-block pull-left">
                            <h4>Featured Workshops</h4> </div>
                    </div>
                    <div class="col-sm-8">
                        <!-- workshops filter nav starts -->
                        <div class="workshops-filter pull-right">
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
                        <!-- workshops filter nav ends -->
                    </div>
                </div>
                <!-- workshops listing starts -->
                <div class="row">
                    <div class="workshop-listing">


						<?php  //fetching records from table and filter using html data-filter tag
						$ress= mysqli_query($db,"select * from workshop");
									      while($rows=mysqli_fetch_array($ress))
										  {
													// fetch records from res_category table according to catgory ID
													$query= mysqli_query($db,"select * from res_category where c_id='".$rows['c_id']."' ");
													 $rowss=mysqli_fetch_array($query);

													 echo ' <div class="col-xs-12 col-sm-12 col-md-6 single-workshop all '.$rowss['c_name'].'">
														<div class="workshop-wrap">
															<div class="row">
																<div class="col-xs-12 col-sm-3 col-md-12 col-lg-3 text-xs-center">
																	<a class="workshop-logo" href="beers.php?res_id='.$rows['rs_id'].'" > <img src="admin/Res_img/'.$rows['image'].'" alt="workshop logo"> </a>
																</div>
																<!--end:col -->
																<div class="col-xs-12 col-sm-9 col-md-12 col-lg-9">
																	<h5><a href="#?res_id='.$rows['rs_id'].'" >'.$rows['title'].'</a></h5> <span>'.$rows['address'].'</span>
																	<div class="bottom-part">
																		<div class="cost"><i class="fa fa-check"></i>Min Rwf 10,00</div>
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
														<!--end:workshop wrap -->
													</div>';
										  }


						?>




                    </div>
                </div>
                <!-- workshops listing ends -->

            </div>
        </section>
        <!-- Featured workshops ends -->
				<?php
				include("footer.php");
				?>
