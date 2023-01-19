
<?php
include("header.php");
?>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        <div class="page-wrapper">
            <!-- top Links -->
            <div class="top-links">
                <div class="container">
                    <ul class="row links">

                        <li class="col-xs-12 col-sm-4 link-item active"><span>1</span><a href="workshops.php">Sign up</a></li>
                        <li class="col-xs-12 col-sm-4 link-item"><span>2</span><a href="#">Get Certificate</a></li>
                        <li class="col-xs-12 col-sm-4 link-item"><span>3</span><a href="#">Get hired</a></li>
                    </ul>
                </div>
            </div>
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <div class="inner-page-hero bg-image" data-image-src="images/img/res.jpeg">
                <div class="container"> </div>
                <!-- end:Container -->
            </div>
            <div class="result-show">
                <div class="container">
                    <div class="row">


                    </div>
                </div>
            </div>
            <!-- //results show -->
            <section class="workshops-page">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-3">


                            <div class="widget clearfix">
                                <!-- /widget heading -->
                                <div class="widget-heading">
                                    <h3 class="widget-title text-dark">
                                      Popular tags
                                   </h3>
                                         <div class="clearfix"></div>
                                     </div>
                                     <div class="widget-body">
                                         <ul class="tags">
                                             <li> <a href="#" class="tag">
                                         Ishashi
                                         </a> </li>
                                             <li> <a href="#" class="tag">

                                         </a> </li>
                                             <li> <a href="#" class="tag">

                                         </a> </li>
                                             <li> <a href="#" class="tag">
                                         Ipfundo
                                         </a> </li>
                                             <li> <a href="#" class="tag">

                                         </a> </li>

                                         </ul>
                                     </div>
                                 </div>
                                 <!-- end:Widget -->
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-9">
                            <div class="bg-gray workshop-entry">
                                <div class="row">
								<?php $ress= mysqli_query($db,"select * from workshop");
									      while($rows=mysqli_fetch_array($ress))
										  {


													 echo' <div class="col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left">
															<div class="entry-logo">
																<a class="img-fluid" href="#?res_id='.$rows['rs_id'].'" > <img src="admin/Res_img/'.$rows['image'].'" alt="mouzah logo"></a>
															</div>
															<!-- end:Logo -->
															<div class="entry-dscr">
																<h5><a href="#?res_id='.$rows['rs_id'].'" >'.$rows['title'].'</a></h5> <span>'.$rows['address'].' <a href="#">...</a></span>
																<ul class="list-inline">
																	<li class="list-inline-item"><i class="fa fa-check"></i> Min Rwf 500</li>
																	<li class="list-inline-item"><i class="fa fa-motorcycle"></i> 30 min</li>
																</ul>
															</div>
															<!-- end:Entry description -->
														</div>

														 <div class="col-sm-12 col-md-12 col-lg-4 text-xs-center">
																<div class="right-content bg-white">
																	<div class="right-review">
																		<div class="rating-block"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
																		<p> 245 Reviews</p> <a href="#.php?res_id='.$rows['rs_id'].'" class="btn theme-btn-dash">See more</a> </div>
																</div>
																<!-- end:right info -->
															</div>';
										  }


						?>

                                </div>
                                <!--end:row -->
                            </div>



                            </div>



                        </div>
                    </div>
                </div>
            </section>
            <?php
						include("footer.php");
						?>
