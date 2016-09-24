	/*
								<?php
									//$con=mysqli_connect("localhost","root","","testdb");
									$con = mysqli_connect("localhost","root","","editorDB");
									$sql = "SELECT Image FROM aboutus";
									$result = $con->query($sql);
								   echo "<table>";
								   echo "<tr>";
								   
								   while($row = $result->fetch_assoc())
								   {
								   echo "<td>"; 
								   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Image'] ).'" height="600" width="400"/>';
								   echo "<br>";
								   ?><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a> <?php
								   echo "</td>";
								   
								   
								   
								   }
								   echo "</tr>";
								   
								   echo "</table>";
								
								?>
								*/


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<!-- Mirrored from zunaidahmedpalak.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Sep 2016 10:13:12 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Obaidul Quader :: Minister of Road Transport & Bridges,BD</title>
        
        <meta name="description" content="">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://zunaidahmedpalak.com/img/favicon.png" rel="icon" type="image/png" id="page_favicon"/>

        <!-- Stylesheets -->
        <link rel="stylesheet" href="http://zunaidahmedpalak.com/assets/css/materialize.min.css">
        <link rel="stylesheet" href="http://zunaidahmedpalak.com/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://zunaidahmedpalak.com/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://zunaidahmedpalak.com/assets/css/ionicons.min.css">
        <link rel="stylesheet" href="http://zunaidahmedpalak.com/assets/css/fonts.css">
        <link rel="stylesheet" href="http://zunaidahmedpalak.com/assets/css/animate.min.css">
        <link rel="stylesheet" href="http://zunaidahmedpalak.com/assets/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="http://zunaidahmedpalak.com/assets/css/slick.css">
        <link rel="stylesheet" href="http://zunaidahmedpalak.com/assets/css/slick-theme.css">
  			<link rel="stylesheet" href="http://zunaidahmedpalak.com/assets/css/camera.css">
        <link rel="stylesheet" href="http://zunaidahmedpalak.com/assets/css/main.css">
        <link rel="stylesheet" href="http://zunaidahmedpalak.com/assets/css/responsive.css">
        <link rel="stylesheet" href="http://zunaidahmedpalak.com/assets/css/colors/color1.css">
        <!-- Header Scripts -->

        <!--[if lt IE 9]>
            <script src="assets/js/vendor/html5shiv.js"></script>
        <![endif]-->

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <!-- Loader start -->
        <div id="loader">
            <div class="loader-content">
                <div class="preloader-wrapper small active">
                    <div class="spinner-layer spinner-blue-only">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p class="loading-title">Obidul Quader</p>
            </div>
        </div>
        <!-- Loader end -->
        <!-- Header Menu start -->
        <header class="main-header">
            <!-- desktop menu -->
            <div class="header-big-screen hidden-sm hidden-xs">
                <div class="container">
                    <div class="header-inner clearfix">
                        <a href="#home" data-section="#home" class="logo menu-smooth-scroll">
                            <img src="http://zunaidahmedpalak.com/img/logo.png" alt="logo">
                        </a>
                        <nav class="menu">
                            <ul>
                                <li class="current"><a href="#home" data-section="#home" class="menu-smooth-scroll">Home</a></li>
                                <li><a href="#about" data-section="#about" class="menu-smooth-scroll">About</a></li>
                                <li><a href="#latestupdate" data-section="#latestupdate" class="menu-smooth-scroll">Latest Update</a></li>
<!--                                 <li><a href="#liveevents" data-section="#liveevents" class="menu-smooth-scroll">Live</a></li> -->
                                <li><a href="#blog" data-section="#blog" class="menu-smooth-scroll">Blog</a></li>
                                <li><button class="btn bg-brand color-white waves-effect modal-trigger" href="#modal1">Get an Appoinment</button></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- mobile menu -->
            <div class="header-mobile-screen visible-sm visible-xs full-height">
                <div class="header-inner full-height">
                    <div class="logo-area clearfix">
                        <a href="#home" data-section="#home" class="logo pull-left menu-smooth-scroll">
                            <img src="http://zunaidahmedpalak.com/img/logo.png" alt="logo">
                        </a>
                        <div class="bar-area pull-right">
                            <a href="#" class="open-menu"><i class="fa fa-bars"></i></a>
                            <a href="#" class="close-menu"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <nav class="menu animated">
                        <ul>
                                <li><a href="#home" data-section="#home" class="menu-smooth-scroll">Home</a></li>
                                <li><a href="#about" data-section="#about" class="menu-smooth-scroll">About</a></li>
                                <li><a href="#latestupdate" data-section="#latestupdate" class="menu-smooth-scroll">Latest Update</a></li>
<!--                                 <li><a href="#liveevents" data-section="#liveevents" class="menu-smooth-scroll">Live Events</a></li> -->
                                <li><a href="#archive" data-section="#archive" class="menu-smooth-scroll">Achievement</a></li>
                                <li><a href="#blog" data-section="#blog" class="menu-smooth-scroll">Blog</a></li>
                                
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- Header Menu end -->



        <!-- Main section start -->
        <main role="main" class="main">
            <!-- Banner Section start -->
            <section id="home" class="scroll-section hidden-overflow">
                <div class="fluid_container">
					<div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
<!-- 							<div data-src="img/slider-one.jpg"></div> -->
							<div data-src="http://zunaidahmedpalak.com/img/slider-two.jpg"></div>
							<div data-src="http://zunaidahmedpalak.com/img/slider-three.jpg"></div>
					</div>
<!-- 							<div id="pl-slides"></div>		 -->
									
				</div>		
            </section>
            <!-- Banner Section end -->

            <!-- Why this app start -->
            <section id="about" class="scroll-section section-space why-this-app section-bg-02 hidden-overflow">
                    <div class="container">

						<div class="row">
						
						
							<div class="why-section-col col-lg-5 col-md-5 col-sm-6 col-xs-12">
							
								
							
							<?php
								$con = mysqli_connect("localhost","root","","editorDB");
								  $result = mysqli_query($con, 
								 "CALL AboutTableProcedure(1)") or die("Query fail: " . mysqli_error());
								   while ($row = mysqli_fetch_array($result)){   
								  echo $row[0];echo "<br>";
							  }
								
							
							?>

							
							
							</div>
							
							
							
							
							
							<div class="why-section-col col-lg-1 col-md-1 hidden-sm hidden-xs"></div>
							
							<div class="why-section-col col-lg-6 col-md-6 col-sm-6" style="">
								<div class="why-slider" id="whySlider">
									<div class="thumb-area">
										<img src="img/Obidul_Quader.jpg"  alt="" />
									</div>
								</div>
							</div>
							
						</div>

					</div>
        </section>
            <!-- Why this app end -->
			<!-- Latest Update Section start -->
            <section id="latestupdate" class="scroll-section blog-section section-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-head">
                                <h2 class="section-title title-1">Latest Update</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="lateupdate">
                        <article class="single-post">
                            <div class="single-blog-post theme01 z-depth-1">
                                <div class="blog-post-thumb-container">
                                    <a href="" class="blog-post-thumb-permalink"><img src="img/OQ.jpg" alt="blog post thumbnail" class="lazy blog-post-thumbnail"></a>
                                </div>
                                <a href="#" class="blog-post-title-permalink"><h3 class="blog-post-title">Meeting with Queen Maxima of Netherlands</h3></a>
                                <!--<header><h5 class="blog-post-meta">By <a href="#" title="Posted by Admin">Admin</a> | 24 Oct 2014</h5></header>-->
                                <div class="blog-post-content">
                                    <p>Just had great meeting with Her Majesty Queen Maxima of Netherlands and special advocate to UN secre...</p>
                                </div>
                            </div>
                        </article>
                        <article class="single-post">
                            <div class="single-blog-post theme01 z-depth-1">
                                <div class="blog-post-thumb-container">
                                     <a href="" class="blog-post-thumb-permalink"><img src="img/OQ.jpg" alt="blog post thumbnail" class="lazy blog-post-thumbnail"></a>
                                </div>
                                <a href="#" class="blog-post-title-permalink"><h3 class="blog-post-title">Ami joy Banglar lok - Amar marka Nowka</h3></a>
                                <!--<header><h5 class="blog-post-meta">By <a href="#" title="Posted by Admin">Admin</a> | 24 Oct 2014</h5></header>-->
                                <div class="blog-post-content">
                                    <p>Zunaid ahmed was selected as a member of Bangladesh Awami League central executive committee in this year 2012</p>
                                </div>
                            </div>
                        </article>
                        <article class="single-post">
                            <div class="single-blog-post theme01 z-depth-1">
                                <div class="blog-post-thumb-container">
                                     <a href="" class="blog-post-thumb-permalink"><img src="img/OQ.jpg" alt="blog post thumbnail" class="lazy blog-post-thumbnail"></a>
                                </div>
                                <a href="#" class="blog-post-title-permalink"><h3 class="blog-post-title">Meeting with Queen Maxima of Netherlands</h3></a>
                                <!--<header><h5 class="blog-post-meta">By <a href="#" title="Posted by Admin">Admin</a> | 24 Oct 2014</h5></header>-->
                                <div class="blog-post-content">
                                    <p>Just had great meeting with Her Majesty Queen Maxima of Netherlands and special advocate to UN secre...</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!--<div class="row">
                        <div class="dol-lg-12 text-center">
                            <a href="javascript:void(0)" class="btn th-btn th-btn-medium bg-brand color-white wow fadeInUpSmall">View All</a>
                        </div>
                    </div>-->
                </div>
            </section>
            <!-- Blog Section end -->
            <!-- Video Section start -->
<!--             <section class="video-section section-bg-02 section-space" id="liveevents">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-head">
                                <h2 class="section-title title-1">Latest Videos</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 video-area">
							<div class="card-panel black lighten-5 z-depth-1">
								<div class="vedio-big-title">
									<h5 class="master-title">Bangladesh High Tech Park</h5>
								</div>
								<iframe width="1280" height="720" class="main-frame" src="https://www.youtube-nocookie.com/embed/drMcLVc1iuA?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
							</div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
								<div class="row">
									<div class="card-panel white lighten-5 z-depth-1 hidden-overflow">
									<span class="more-videos-title">More Videos</span>
									<div id="vedio-carousel" class="thumb-vedio">
										<div>
																																<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-left">
												<div data-url="https://www.youtube-nocookie.com/embed/drMcLVc1iuA?rel=0&amp;showinfo=0" data-title="" class="overlay-iframe"></div>
												<div class="more-videos">
													<iframe width="400" height="225" class="thumb-video" src="https://www.youtube-nocookie.com/embed/drMcLVc1iuA?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
												</div>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
												<div class="vedio-title">
													<a href=""><h5></h5></a>
													<span class="c-author">by Zunaid Ahmed Palak</span>
												</div>
											</div>
										</div>
										<div>
																						<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
											<div data-url="https://www.youtube-nocookie.com/embed/N1eSHDeNkfg?rel=0&amp;showinfo=0" class="overlay-iframe" data-title=""></div>
												<div class="more-videos">
													<iframe width="400" height="225" class="thumb-video" src="https://www.youtube-nocookie.com/embed/N1eSHDeNkfg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
												</div>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
												<div class="vedio-title">
													<h5></h5>
													<span class="c-author">by Zunaid Ahmed Palak</span>
												</div>
											</div>
										</div>
										<div>
																						<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
											<div data-url="https://www.youtube-nocookie.com/embed/BoVISK3o0ns?rel=0&amp;showinfo=0" class="overlay-iframe" data-title=""></div>
												<div class="more-videos">
													<iframe width="400" height="225" class="thumb-video" src="https://www.youtube-nocookie.com/embed/BoVISK3o0ns?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
												</div>
											</div>
												<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
													<div class="vedio-title">
														<h5></h5>
														<span class="c-author">by Zunaid Ahmed Palak</span>
													</div>
												</div>
										</div>

										<div>
																						<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
											<div data-url="https://www.youtube-nocookie.com/embed/1S5IwffdIBc?rel=0&amp;showinfo=0" class="overlay-iframe" data-title=""></div>
												<div class="more-videos">
													<iframe width="400" height="225" class="thumb-video" src="https://www.youtube-nocookie.com/embed/1S5IwffdIBc?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
												</div>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
												<div class="vedio-title">
													<h5></h5>
													<span class="c-author">by Zunaid Ahmed Palak</span>
												</div>
											</div>
										</div>
										<div>
																						<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-left">
												<div data-url="https://www.youtube-nocookie.com/embed/vUCu4y1XWQ4?rel=0&amp;showinfo=0" data-title="" class="overlay-iframe"></div>
												<div class="more-videos">
													<iframe width="400" height="225" class="thumb-video" src="https://www.youtube-nocookie.com/embed/vUCu4y1XWQ4?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
												</div>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
												<div class="vedio-title">
													<h5></h5>
													<span class="c-author">by Zunaid Ahmed Palak</span>
												</div>
											</div>
										</div>
										<div>
																						<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-left">
												<div data-url="https://www.youtube-nocookie.com/embed/_R3sVrHgwcc?rel=0&amp;showinfo=0" data-title="" class="overlay-iframe"></div>
												<div class="more-videos">
													<iframe width="400" height="225" class="thumb-video" src="https://www.youtube-nocookie.com/embed/_R3sVrHgwcc?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
												</div>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
												<div class="vedio-title">
													<h5></h5>
													<span class="c-author">by Zunaid Ahmed Palak</span>
												</div>
											</div>
										</div>
									</div>
									</div>	
								</div>
                        </div>

                    </div>
                </div>
            </section> -->
            <!-- Video Section end -->
			
			<!--Section achievements-->
			<section class="achievements section-space hidden-overflow" style="background-color:green">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-head">
                                <h2 class="section-title title-1 color-white">ACHIEVEMENTS</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">
					<div class="achivements-content">
						<div class="achive-post">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="card-panel grey lighten-5 z-depth-1">
									  <div class="row valign-wrapper">
										<div class="col-sm-5">
										  <img src="http://zunaidahmedpalak.com/img/achive-01.png" alt="" class="responsive-img">
										</div>
										<div class="col-sm-7">
										  <span class="black-text spnblk">
											<span class="title">18000+ Broadband</span>
											Dedicated Broadband connection to 18000+..
										  </span>
										  <span class="read-more">
											<a href="#" class="btn th-btn th-btn-small text-right bg-brand color-white waves-effect">Details</a>
										  </span>
										</div>
									  </div>
								</div>
							</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="card-panel grey lighten-5 z-depth-1">
								  <div class="row valign-wrapper">
									<div class="col-sm-5">
									  <img src="http://zunaidahmedpalak.com/img/achive-02.png" alt="" class="responsive-img"> <!-- notice the "circle" class -->
									</div>
									<div class="col-sm-7">
									  <span class="black-text spnblk">
											<span class="title">WITSA AWARD</span>
										description here..description here..		
									  </span>
									  <span class="read-more">  
										<a href="#" class="btn th-btn th-btn-small text-right bg-brand color-white waves-effect">Details</a>
									  </span>
									</div>
								  </div>
							</div>
						</div>
						</div>
						<div class="achive-post">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="card-panel grey lighten-5 z-depth-1">
								  <div class="row valign-wrapper">
									<div class="col-sm-5">
									  <img src="http://zunaidahmedpalak.com/img/achive-03.png" alt="" class="responsive-img"> <!-- notice the "circle" class -->
									</div>
									<div class="col-sm-7">
									  <span class="black-text spnblk">
										<span class="title">IT Park in Bangladesh</span>
										First ever IT Park in Bangladesh (JSTP)
									  </span>
									  <span class="read-more">  
										<a href="#" class="btn th-btn th-btn-small text-right bg-brand color-white waves-effect">Details</a>
									  </span>
									</div>
								  </div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="card-panel grey lighten-5 z-depth-1">
								  <div class="row valign-wrapper">
									<div class="col-sm-5">
									  <img src="http://zunaidahmedpalak.com/img/achive-04.png" alt="" class="responsive-img"> <!-- notice the "circle" class -->
									</div>
									<div class="col-sm-7">
									  <span class="black-text spnblk">
										<span class="title">25000 Digital Signature</span>
										25000 Digital Signature Delivered to Govt 
									  </span>
									  <span class="read-more">  
										<a href="#" class="btn th-btn th-btn-small text-right bg-brand color-white waves-effect">Details</a>
									  </span>
									</div>
								  </div>
							</div>
						</div>
						</div>
						<div class="achive-post">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="card-panel grey lighten-5 z-depth-1">
								  <div class="row valign-wrapper">
									<div class="col-sm-5">
									  <img src="http://zunaidahmedpalak.com/img/achive-05.png" alt="" class="responsive-img"> <!-- notice the "circle" class -->
									</div>
									<div class="col-sm-7">
									  <span class="black-text spnblk">
										<span class="title">25000 Android Tab</span>
										25000 Android Tab Delivered to Govt
									  </span>
									  <span class="read-more">  
										<a href="#" class="btn th-btn th-btn-small text-right bg-brand color-white waves-effect">Details</a>
									  </span>
									</div>
								  </div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="card-panel grey lighten-5 z-depth-1">
								  <div class="row valign-wrapper">
									<div class="col-sm-5">
									  <img src="http://zunaidahmedpalak.com/img/achive-06.png" alt="" class="responsive-img"> <!-- notice the "circle" class -->
									</div>
									<div class="col-sm-7">
									  <span class="black-text spnblk">
										<span class="title">600+ Mobile Application Developed</span>
										 600+ Mobile Application ..
									  </span>
									  <span class="read-more">  
										<a href="#" class="btn th-btn th-btn-small text-right bg-brand color-white waves-effect">Details</a>
									  </span>
									</div>
								  </div>
							</div>
						</div>
						</div>
					</div>
					</div>
				</div>
			</section>
			<!--Section Inovation-->
			<section class="inovation section-space hidden-overflow">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-head">
                                <h2 class="section-title title-1">Innovation</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							  <div class="card">
								<div class="card-image waves-effect waves-block waves-light">
								  <img class="activator" src="http://zunaidahmedpalak.com/img/inovation-one.jpg">
								</div>
								<div class="card-content">
								  <span class="card-title activator grey-text text-darken-4">Live Blood Bank<i class="ion-android-more-vertical right"></i></span>
								</div>
								<div class="card-reveal">
								  <span class="card-title grey-text text-darken-4">Live Blood Bank<i class="ion-close right"></i></span>
								  <p>Here is some more information about this product that is only revealed once clicked on.</p>
								</div>
							  </div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							  <div class="card">
								<div class="card-image waves-effect waves-block waves-light">
								  <img class="activator" src="http://zunaidahmedpalak.com/img/inovation-two.jpg">
								</div>
								<div class="card-content">
								  <span class="card-title activator grey-text text-darken-4">Crowd Source<i class="ion-android-more-vertical right"></i></span>
								</div>
								<div class="card-reveal">
								  <span class="card-title grey-text text-darken-4">Crowd Source<i class="ion-close right"></i></span>
								  <p>Here is some more information about this product that is only revealed once clicked on.</p>
								</div>
							  </div>
						</div>
					</div>
				</div>
			</section>	
			

            <!-- Amazing Feature Section start -->
            <section id="features" class="scroll-section section-space section-bg-01 amazing-feature amazing-feature-01 hidden-overflow" style="background-color:#424A54">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-head">
                                <h2 class="section-title title-1" style="background-color:#FFFFFF;border-radious:5ps solid #ddd"><i><marquee><b style="color:#405994">POLI</b>TICAL RESUME</marquee></i></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row feature-lists-box" style="background-color:"green">
                        <div class="feature-lists feature-lists-style-one">
													
													<div class="col-md-offset-2 col-md-8">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <img src="http://zunaidahmedpalak.com/img/elogo.png" alt="">
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">World Economic Forum</h3>
                                        <p class="pera">Young Global Leader</p>
																				<span>2016 to present Cologny</span>
                                    </div>
                                </div>
													</div>
													<div class="col-md-offset-2 col-md-8">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                       <img src="http://zunaidahmedpalak.com/img/ilogo.png" alt="">
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">ICT Division, Bangladesh</h3>
                                        <p class="pera">State Minister January 2014 to present Dhaka, Bangladesh</p>
																				<span>Ministry of Post, Telecommunication &amp; Information Technology </span>
                                    </div>
                                </div>
													</div>
													<div class="col-md-offset-2 col-md-8">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <img src="http://zunaidahmedpalak.com/img/slogo.png" alt="">
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">Supreme Court of Bangladesh</h3>
                                        <p class="pera">Advocate</p>
																				<span>2010 to Present Dhaka, Bangladesh</span>
                                    </div>
                                </div>
													</div>
													<div class="col-md-offset-2 col-md-8">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <img src="http://zunaidahmedpalak.com/img/glogo.png" alt="">
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">Government of the People's Republic of Bangladesh</h3>
                                        <p class="pera">Member of Parliament</p>
																				<span>January 2019 to Present Dhaka, Bangladesh</span>
                                    </div>
                                </div>
													</div>
<!--                             <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <i class="ion-pin"></i>
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">State Minister</h3>
                                        <p class="pera">Govt. of the People's Republic of Bangladesh</p>
										<b>2014 Present</b>
                                    </div>
                                </div>
                            </div> -->
<!--                             <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <i class="ion-pin"></i>
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">Member of Central Executive Committee</h3>
                                        <p class="pera">Bangladesh Awami League</p>
										<b>2013 - Present</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <i class="ion-pin"></i>
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">Co-Convener</h3>
                                        <p class="pera">Bangladesh Climate Parliament</p>
										<b>2012 - Present</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <i class="ion-pin"></i>
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">Youngest Member of Parliament</h3>
                                        <p class="pera">Bangladesh Parliament</p>
										<b>2008 - Present</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <i class="ion-pin"></i>
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">Advocate</h3>
                                        <p class="pera">Bangladesh Supreme Court</p>
										<b>2010 - Present</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <i class="ion-pin"></i>
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">Member, Natore District Unit</h3>
                                        <p class="pera">Bangladesh Awami League</p>
										<b>2009 - Present</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <i class="ion-pin"></i>
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">General Secretary</h3>
                                        <p class="pera">Singra Upzila Awami League</p>
										<b>2012 - Present</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <i class="ion-pin"></i>
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">Vice Chair</h3>
                                        <p class="pera">All party parliamentary group (APPG) on Climate change</p>
										<b>2009 - Present</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <i class="ion-pin"></i>
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">Member</h3>
                                        <p class="pera">ICT Parliamentary standing committee of Bangladesh</p>
										<b>2011 - Present</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <i class="ion-pin"></i>
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">Member</h3>
                                        <p class="pera">Private members bill Parliamentary standing comitee of Bangladesh</p>
										<b>2010 - Present</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <i class="ion-pin"></i>
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">President</h3>
                                        <p class="pera">Bangladesh carrom federation</p>
										<b>2009 - Present</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <i class="ion-pin"></i>
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">Vice President</h3>
                                        <p class="pera">International carrom federation</p>
										<b>2010 - Present</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <i class="ion-pin"></i>
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">Advisor, BPL-T20</h3>
                                        <p class="pera">Duronto rajshahi cricket team</p>
										<b>2011 - Present</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <i class="ion-pin"></i>
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">V.P. Student Council</h3>
                                        <p class="pera">Singra Govt. GA degree college.</p>
										<b>1999 - 2000</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <i class="ion-pin"></i>
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">General Secretary</h3>
                                        <p class="pera">Student League, Singra upzilla unit</p>
										<b>1999 - 2001</b>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </section>
			
			<!--Section social connect-->
			<section class="section-space section-bg-02 hidden-overflow">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-head">
                                <h2 class="section-title title-1">Social Connect</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="facebook-social">
								<a href="https://facebook.com/zapalak">
									<div class="fb-icon"><i class="ion-social-facebook"></i></div>
									<div class="fb-text">/zapalak</div>
								</a>	
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">						
							<div class="twitter-social">
								<a href="https://twitter.com/zapalak">
									<div class="tw-icon"><i class="ion-social-twitter"></i></div>
									<div class="tw-text">/zapalak</div>
								</a>	
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">						
							<div class="google-social">
								<a href="https://plus.google.com/+palakmp">
									<div class="gog-icon"><i class="ion-social-googleplus"></i></div>
									<div class="gog-text">/+palakmp</div>
								</a>	
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">						
							<div class="skype-social">
								<a href="#">
									<div class="sky-icon"><i class="ion-social-skype-outline"></i></div>
									<div class="sky-text">/palakmp</div>
								</a>	
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">						
							<div class="youtube-social">
								<a href="https://www.youtube.com/user/palakmp">
									<div class="youtube-icon"><i class="ion-social-youtube"></i></div>
									<div class="youtube-text">/palakmp</div>
								</a>	
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">						
							<div class="linkdin-social">
								<a href="#">
									<div class="linkdin-icon"><i class="ion-social-linkedin-outline"></i></div>
									<div class="linkdin-text">/zapalak</div>
								</a>	
							</div>
						</div>
					</div>
				</div>
			</section>	
			
            <!-- Amazing Feature Section end -->
		<section class="statistics statistics-01 statistics-bg text-center color-white parallux-bg">
                <div class="section-relative section-space">
                    <div class="overlay overlay-three"></div>
                    <div class="overlay-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12">
                                    <div class="statistic-area">
                                        <div class="top">
                                            <i class="ion-social-facebook"></i>
                                            <h3 class="number countNumb" data-from="1" data-to="100000">100000</h3>
                                        </div>
                                        <div class="bottom">
                                            <p class="text">Facebook Followers</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12">
                                    <div class="statistic-area">
                                        <div class="top">
                                            <i class="ion-social-twitter"></i>
                                            <h3 class="number countNumb" data-from="1" data-to="50000">50000</h3>
                                        </div>
                                        <div class="bottom">
                                            <p class="text">Twitter Followers</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12">
                                    <div class="statistic-area">
                                        <div class="top">
                                            <i class="ion-social-googleplus"></i>
                                            <h3 class="number countNumb" data-from="1" data-to="35000">35000</h3>
                                        </div>
                                        <div class="bottom">
                                            <p class="text">Google-plus Followers</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12">
                                    <div class="statistic-area">
                                        <div class="top">
                                            <i class="ion-social-linkedin"></i>
                                            <h3 class="number countNumb" data-from="1" data-to="20000">20000</h3>
                                        </div>
                                        <div class="bottom">
                                            <p class="text">Linkedin Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Statistics Section start -->
            <section class="statistics statistics-01 text-center color-white parallux-bg" id="archive" >
                <div class="section-relative section-space"   style="background-color:green">
                    <div class="overlay overlay-four"></div>
                    <div class="overlay-content"   style="background-color:green">
                        <div class="container">
							<div class="row">
								<div class="section-head only-title">
									<h2 class="section-title title-1 color-white">EDUCATION</h2>
								</div>	
								
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                                    <div class="statistic-area">
                                        <div class="top">
                                            <i class="ion-university"></i>
                                            <h3>MSS in Political Science</h3>
                                        </div>
                                        <div class="bottom">
                                            <p class="text">Dhaka College - 2001</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                                    <div class="statistic-area">
                                        <div class="top">
                                            <i class="ion-university"></i>
                                            <h3>Bachelor of LAW</h3>
                                        </div>
                                        <div class="bottom">
                                            <p class="text">National University of Bangladesh - 2003</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                                    <div class="statistic-area">
                                        <div class="top">
                                            <i class="ion-university"></i>
                                            <h3>Capstone Course</h3>
                                        </div>
                                        <div class="bottom">
                                            <p class="text">National Defence College of Bangladesh - 2012</p>
                                        </div>
                                    </div>
                                </div>
							</div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Statistics Section end -->


            <!-- Screenshot Section start -->
            <section id="screenshot" class="scroll-section section-space screenshot">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-head">
                                <h2 class="section-title title-1">Screenshot Gallery</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="screenshoot-wrapper">
                    <div class="container-width">
                        <div class="container">
                            <div class="screenshoot-area">
                                <div id="screenshoot_slider" class="screenshoot-slider">
                                    <div class="single-screenshoot"><img data-original="img/OQ.jpg" class="lazy" alt="screenshoot" width="550" height="400"></div>
                                    <div class="single-screenshoot"><img data-original="img/OQ.jpg" class="lazy" alt="screenshoot" width="550" height="400"></div>
                                    <div class="single-screenshoot"><img data-original="img/OQ.jpg" class="lazy" alt="screenshoot" width="550" height="400"></div>
                                    <div class="single-screenshoot"><img data-original="img/oQ.jpg" class="lazy" alt="screenshoot" width="550" height="400"></div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>
            <!-- Screenshot Section end -->



            <!-- Testimonial Section start -->
            <!--<section class="testimonial testimonial-bg parallux-bg">
                <div class="section-relative section-space">
                    <div class="overlay overlay-two"></div>
                    <div class="overlay-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <div class="section-head">
                                        <h2 class="section-title title-1 color-white">Testimonial</h2>
                                        <p>Lets see what say clients about us</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="testimonial" class="testimoinal-slider">
                            <div class="single-testimonial">
                                <div class="container">
                                    <div class="tes-thumbnail-area wow bounceIn" data-wow-delay=".5s" data-wow-deration=".8s" data-wow-offset="150">
                                        <div class="tes-thumbnail-outer">
                                            <img class="tes-thumb-img" src="img/profile-01.jpg" alt="testimonial thumb">
                                        </div>
                                        <span class="thumb-icon-area z-depth-1"><i class="fa fa-quote-left"></i></span>
                                    </div>
                                    <blockquote>
                                        <div class="blockquote-text">
                                            <p>Whatever artisan Bushwick keytar, street art readymade direct trade single-origin coffee Helvetica banh mi butcher cliche try-hard. Authentic street art bitters whatever twee typewriter locavore leggings retro bespoke jean shorts.</p>
                                        </div>
                                        <cite>Ekhtiar Mahmud, <span>BDinfosys</span></cite>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="container">
                                    <div class="tes-thumbnail-area wow bounceIn" data-wow-delay=".5s" data-wow-deration=".8s" data-wow-offset="150">
                                        <div class="tes-thumbnail-outer">
                                            <img class="tes-thumb-img" src="img/profile-02.jpg" alt="testimonial thumb">
                                        </div>
                                        <span class="thumb-icon-area z-depth-1"><i class="fa fa-quote-left"></i></span>
                                    </div>
                                    <blockquote>
                                        <div class="blockquote-text">
                                            <p>Whatever artisan Bushwick keytar, street art readymade direct trade single-origin coffee Helvetica banh mi butcher cliche try-hard. Authentic street art bitters whatever twee typewriter locavore leggings retro bespoke jean shorts.</p>
                                        </div>
                                        <cite>Ekhtiar Mahmud, <span>BDinfosys</span></cite>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="container">
                                    <div class="tes-thumbnail-area wow bounceIn" data-wow-delay=".5s" data-wow-deration=".8s" data-wow-offset="150">
                                        <div class="tes-thumbnail-outer">
                                            <img class="tes-thumb-img" src="img/profile-03.jpg" alt="testimonial thumb">
                                        </div>
                                        <span class="thumb-icon-area z-depth-1"><i class="fa fa-quote-left"></i></span>
                                    </div>
                                    <blockquote>
                                        <div class="blockquote-text">
                                            <p>Whatever artisan Bushwick keytar, street art readymade direct trade single-origin coffee Helvetica banh mi butcher cliche try-hard. Authentic street art bitters whatever twee typewriter locavore leggings retro bespoke jean shorts.</p>
                                        </div>
                                        <cite>Ekhtiar Mahmud, <span>BDinfosys</span></cite>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="tes-thumb-ctrl-area">
                                <ul class="tes-thumb-ctrl-lists" id="testimonial-thumb-ctrl">
                                    <li class="active"><a href="#"><img src="img/profile-01.jpg" alt="testimonial thumb"><div class="tes-thumb-overlay"></div></a></li>
                                    <li class=""><a href="#"><img src="img/profile-02.jpg" alt="testimonial thumb"><div class="tes-thumb-overlay"></div></a></li>
                                    <li class=""><a href="#"><img src="img/profile-03.jpg" alt="testimonial thumb"><div class="tes-thumb-overlay"></div></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>-->
            <!-- Testimonial Section end -->
            <!-- Download Section start -->
            <section id="download" class="scroll-section download download-bg text-center parallux-bg">
                <div class="section-relative section-space">
                    <div class="overlay overlay-three"></div>
                    <div class="overlay-content">
                        <div class="container">
                            <div class="section-head only-title">
                                <h2 class="section-title title-1 color-white">Download the App</h2>
                            </div>
                            <div class="download-buttons">
                                <a href="https://goo.gl/PYoEnf" class="btn">
                                    <span class="left-area"><i class="fa fa-apple"></i></span>
                                    <span class="right-area">
                                        <span class="top-area">Download for</span>
                                        <span class="bottom-area">Apple iOS</span>
                                    </span>
                                </a>
                                <a href="https://goo.gl/qmto4e" class="btn">
                                    <span class="left-area"><i class="fa fa-android"></i></span>
                                    <span class="right-area">
                                        <span class="top-area">Download for</span>
                                        <span class="bottom-area">Android</span>
                                    </span>
                                </a>
                                <a href="#" class="btn">
                                    <span class="left-area"><i class="fa fa-windows"></i></span>
                                    <span class="right-area">
                                        <span class="top-area">Download for</span>
                                        <span class="bottom-area">Windows</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Download Section end -->
            <!-- Blog Section start -->
            <section id="blog" class="scroll-section blog-section section-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-head">
                                <h2 class="section-title title-1">From the Blog</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row home-blog-posts" id="blog-posts">
                        <article class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single-post">
                            <div class="single-blog-post theme01 z-depth-1">
                                <div class="blog-post-thumb-container">
                                    <a href="javascript:void(0)" class="blog-post-thumb-permalink"><img data-original="img/blog-one.jpg" alt="blog post thumbnail" class="lazy blog-post-thumbnail" width="320" height="184"></a>
                                </div>
                                <a href="#" class="blog-post-title-permalink"><h3 class="blog-post-title">Meeting with Queen Maxima of Netherlands</h3></a>
                                <!--<header><h5 class="blog-post-meta">By <a href="#" title="Posted by Admin">Admin</a> | 24 Oct 2014</h5></header>-->
                                <div class="blog-post-content">
                                    <p>Just had great meeting with Her Majesty Queen Maxima of Netherlands and special advocate to UN secre...</p>
                                </div>
                                <div class="blog-post-bottom-meta clearfix">
                                    <a href="#" class="pull-left comment-link">3 Comments</a>
                                    <a href="#" class="pull-right js-favorite favorite-link" title="Love this"><span><i class="ion-heart"></i></span> <span class="numb">112</span></a>
                                </div>
                            </div>
                        </article>
                        <article class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single-post">
                            <div class="single-blog-post theme01 z-depth-1">
                                <div class="blog-post-thumb-container">
                                    <a href="javascript:void(0)" class="blog-post-thumb-permalink"><img data-original="img/blog-two.jpg" alt="blog post thumbnail" class="lazy blog-post-thumbnail" width="320" height="184"></a>
                                </div>
                                <a href="#" class="blog-post-title-permalink"><h3 class="blog-post-title">Ami joy Banglar lok - Amar marka Nowka</h3></a>
                                <!--<header><h5 class="blog-post-meta">By <a href="#" title="Posted by Admin">Admin</a> | 24 Oct 2014</h5></header>-->
                                <div class="blog-post-content">
                                    <p>Zunaid ahmed was selected as a member of Bangladesh Awami League central executive committee in this year 2012</p>
                                </div>
                                <div class="blog-post-bottom-meta clearfix">
                                    <a href="#" class="pull-left comment-link">3 Comments</a>
                                    <a href="#" class="pull-right js-favorite favorite-link" title="Love this"><span><i class="ion-heart"></i></span> <span class="numb">112</span></a>
                                </div>
                            </div>
                        </article>
                        <article class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single-post">
                            <div class="single-blog-post theme01 z-depth-1">
                                <div class="blog-post-thumb-container">
                                    <a href="javascript:void(0)" class="blog-post-thumb-permalink"><img data-original="img/blog-three.jpg" alt="blog post thumbnail" class="lazy blog-post-thumbnail" width="320" height="184"></a>
                                </div>
                                <a href="#" class="blog-post-title-permalink"><h3 class="blog-post-title">National Award on Tree Plantation</h3></a>
                                <!--<header><h5 class="blog-post-meta">By <a href="#" title="Posted by Admin">Admin</a> | 24 Oct 2014</h5></header>-->
                                <div class="blog-post-content">
                                    <p>Zunaid ahmed Palak was nationally awarded for tree plantation by honourable prime minister Sheikh Hasina in the year 2010.</p>
                                </div>
                                <div class="blog-post-bottom-meta clearfix">
                                    <a href="#" class="pull-left comment-link">3 Comments</a>
                                    <a href="#" class="pull-right js-favorite favorite-link" title="Love this"><span><i class="ion-heart"></i></span> <span class="numb">112</span></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!--<div class="row">
                        <div class="dol-lg-12 text-center">
                            <a href="javascript:void(0)" class="btn th-btn th-btn-medium bg-brand color-white wow fadeInUpSmall">View All</a>
                        </div>
                    </div>-->
                </div>
            </section>
            <!-- Blog Section end -->


            <!-- Newsletter Section start -->
<!--             <section class="news-letter news-letter-bg parallux-bg hidden-overflow">
                <div class="section-relative section-space">
                    <div class="overlay overlay-three"></div>
                    <div class="overlay-content">
                        <div class="container text-center">
                            <div class="section-head only-title">
                                <h2 class="section-title title-1 color-white">Newsletter</h2>
                            </div>
                            <div class="newsletter-form-area">
                                <form class="mailchimpForm" action="#">
                                    <div class="mail-icon"><i class="ion-android-mail"></i></div>
                                    <input type="email" placeholder="Enter your email">
                                    <input type="submit">
                                </form>
                                <div class="mailchimp-form-message" style="display:none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- Newsletter Section end -->


            <!-- Map And Contact Section start -->
<!--             <section class="map-section">
                <div class="map-header-area overlay-brand">
                    <h2>Find Us On Google Map</h2>
                </div>

               
                <div class="map">
                    <div id="map"></div>
                </div>
                
            </section> -->
            <!-- Map And Contact Section end -->


            <!-- Contact Area start -->
            <section id="contact" class="contact scroll-section">
                <div class="container">
                    <a href="#" data-section="#contact" class="btn contact-location-toggle-btn wow bounce" data-wow-duration="1.5s"><i class="ion-paper-airplane"></i></a>
                    <div class="contact-content-wrapper">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xxs-12 hidden-xxs">
                                <div class="contact-info">
                                    <h3 class="contact-title">Address</h3>
                                    <ul class="contact-info-lists">
                                        <li><a href="#"><span class="btn"><i class="ion-ios-location"></i></span>BCC Bhaban, Agargaon, Sher-e-Bangla Nagar, Dhaka-1207</a></li>
                                        <li><a href="#"><span class="btn"><i class="ion-android-call"></i></span>+88 029116616</a></li>
                                        <li><a href="#"><span class="btn"><i class="ion-android-mail"></i></span>info@zunaidahmedpalak.net</a></li>
                                        <li><a href="#"><span class="btn"><i class="ion-android-globe"></i></span>www.zunaidahmedpalak.net</a></li>
                                    </ul>
                                    <h3 class="contact-title">Reach Out</h3>
                                    <ul class="contact-info-lists">
                                        <li><a href="#"><span class="btn"><i class="ion-android-call"></i></span>+880 1766699999</br>+880 1535555555</a></li>
                                        <li><a href="#"><span class="btn"><i class="ion-android-mail"></i></span>palak.newage@gmail.com</br>palak_vision2021@yahoo.com</a></li>
                                        <li><a href="#"><span class="btn"><i class="ion-android-globe"></i></span>www.zunaidahmedpalak.net</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xxs-12">
                                <div class="contact-form cu-form">
                                    <h3 class="contact-title visible-xxs">Contact Us</h3>
                                    <form action="javascript:void(0)" id="contactForm">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-field">
                                                    <label for="contactName">Name</label>
                                                    <input id="contactName" type="text" name="contactName">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-field">
                                                    <label for="contactEmail">Email</label>
                                                    <input id="contactEmail" type="text" name="contactEmail">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="input-field">
                                                    <label for="contactSubject">Subject</label>
                                                    <input id="contactSubject" type="text" name="contactSubject">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="input-field">
                                                    <label for="contactMessage">Message</label>
                                                    <textarea id="contactMessage" class="materialize-textarea" rows="4" name="contactMessage"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="">
                                                    <input type="submit" class="btn th-btn th-btn-small th-btn-default" value="Send">
                                                    <div class="form-message z-depth-1" style="display:none"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xxs-12 visible-xxs">
                                <div class="contact-info">
                                    <ul class="contact-info-lists">
                                        <li><a href="#"><span class="btn"><i class="ion-ios-location"></i></span>BCC Bhaban, Agargaon, Sher-e-Bangla Nagar, Dhaka-1207</a></li>
                                        <li><a href="#"><span class="btn"><i class="ion-android-call"></i></span>+88 029116616</a></li>
                                        <li><a href="#"><span class="btn"><i class="ion-android-mail"></i></span>info@zunaidahmedpalak.net</a></li>
                                        <li><a href="#"><span class="btn"><i class="ion-android-globe"></i></span>www.zunaidahmedpalak.net</a></li>
                                    </ul>
                                    <ul class="contact-info-lists">
                                        <li><a href="#"><span class="btn"><i class="ion-android-call"></i></span>+880 1766699999</br>+880 1535555555</a></li>
                                        <li><a href="#"><span class="btn"><i class="ion-android-mail"></i></span>palak.newage@gmail.com</br>palak_vision2021@yahoo.com</a></li>
                                        <li><a href="#"><span class="btn"><i class="ion-android-globe"></i></span>www.zunaidahmedpalak.net</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact Area end -->
        </main>
        <!-- Main section end -->



        <!-- Footer area start -->
        <footer class="main-footer">
            <div class="top">
                <div class="container">
                    <div class="footer-logo">
                        <img src="http://zunaidahmedpalak.com/img/logo.png" alt="logo">
                    </div>
                    <div class="footer-social-area">
                        <ul class="social footer-social">
                            <li><a href="https://facebook.com/zapalak" class="btn"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="https://twitter.com/zapalak" class="btn"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#" class="btn"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#" class="btn"><i class="ion-social-linkedin"></i></a></li>
                            <li><a href="#" class="btn"><i class="ion-social-youtube"></i></a></li>
                            <li><a href="#" class="btn"><i class="ion-social-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="container">
                    <p>&copy; 2013 zunaidahmedpalak.net | Ezze Technlogy</p>
                </div>
            </div>
        </footer>
        <!-- Footer area end -->
	<!--Model-->		
<!-- Modal Structure -->
  <div id="modal1" class="modal" data-backdrop="static" data-keyboard="false">
    <div class="modal-content">
      <h5>Get an Appoinment</h5>
	  <br />
	  <a href="#" class="right-close modal-action modal-close right"><i class="ion-close-round"></i></a>
      <form action="#">
			<div class="input-field col-sm-offset-1 col-sm-5">
				  <i class="ion-person prefix"></i>
				  <input id="icon_prefix3" type="text" class="validate">
				  <label for="icon_prefix3" class="">Name</label>
			</div>
			<div class="input-field col-sm-5">
				  <i class="ion-calendar prefix"></i>
				   <input id="dates3" type="date" class="datepicker">
				  
			</div>
			<div class="input-field col-sm-offset-1 col-sm-5">
				  <i class="ion-android-call prefix"></i>
				  <input id="icon_telephone" type="tel" class="validate">
				  <label for="icon_telephone" class="">Mobile</label>
			</div>
			<div class="input-field col-sm-5">
				  <i class="ion-android-mail prefix"></i>
				  <input id="email3" type="email">
				  <label for="email" class="">Email</label>
			</div>
			<div class="input-field col-sm-offset-1 col-sm-10">
				  <i class="ion-ios-chatboxes prefix"></i>
				  <textarea id="message3" class="materialize-textarea"></textarea>
				  <label for="message" class="">Address</label>
            </div>
			<div class="input-field col-sm-offset-1 col-sm-10">
				  <i class="ion-ios-redo prefix"></i>
				  <textarea id="reference" class="materialize-textarea"></textarea>
				  <label for="reference" class="">Reference</label>
            </div>
			<div class="input-field col-sm-offset-1 col-sm-10">
				  <i class="ion-android-contact prefix"></i>
				  <textarea id="agenda" class="materialize-textarea"></textarea>
				  <label for="agenda" class="">Agenda</label>
            </div>
	  
    </div>
    <div class="modal-footer">
		<div class="input-field col-sm-offset-1 col-sm-10">
			<button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
			  <i class="ion-android-send right"></i>
			</button>
        </div>
    </div>
	</form>
  </div>


        <script>window.jQuery || document.write('<script type="text/javascript" src="http://zunaidahmedpalak.com/assets/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
<script type="text/javascript">
	$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();

        
  });
</script>
        <script type="text/javascript" src="http://zunaidahmedpalak.com/assets/js/jquery.lazyload.min.js"></script>
<script>
$(function() {
    $("img.lazy").lazyload({
			 event : "sporty"
		});
});
$(window).bind("load", function() {
    var timeout = setTimeout(function() {
        $("img.lazy").trigger("sporty")
    }, 2000);
});
</script>
        <script type="text/javascript" src="http://zunaidahmedpalak.com/assets/js/vendor/detectmobilebrowser.js"></script>
        <script type="text/javascript" src="http://zunaidahmedpalak.com/assets/js/vendor/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="http://zunaidahmedpalak.com/assets/js/vendor/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://zunaidahmedpalak.com/assets/js/vendor/materialize.min.js"></script>
        <script type="text/javascript" src="http://zunaidahmedpalak.com/assets/js/camera.min.js"></script>
        <script type="text/javascript" src="http://zunaidahmedpalak.com/assets/owl-carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="http://zunaidahmedpalak.com/assets/js/slick.min.js"></script>
        <script type="text/javascript" src="http://zunaidahmedpalak.com/assets/js/plugins.js"></script>

        <script type="text/javascript" src="http://zunaidahmedpalak.com/assets/js/common.js"></script>
        <script type="text/javascript" src="http://zunaidahmedpalak.com/assets/js/main.js"></script>
        <script type="text/javascript" src="http://zunaidahmedpalak.com/assets/js/zap.js"></script>
        <script type="text/javascript" src="http://zunaidahmedpalak.com/assets/js/settings.js"></script>
    </body>

<!-- Mirrored from zunaidahmedpalak.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Sep 2016 10:13:12 GMT -->
</html>