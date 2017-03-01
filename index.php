<?php
 require_once 'dbconfig.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title -->
        <title>UTHM Student DataCard System</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min" rel="stylesheet">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
		
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="body-bg">
            <!-- Phone/Email -->
            <div id="pre-header" class="background-gray-lighter">
                <div class="container no-padding">
                    <div class="row hidden-xs">
                        <div class="col-sm-4 padding-vert-5">
                            <strong>Phone:</strong>&nbsp;+607-453 7000/7025
                        </div>
						<div class="col-sm-4 text-center padding-vert-5" style="font-size:24px">
                            <strong>UTHM Student DataCard System</strong>&nbsp;
                        </div>
                        <div class="col-sm-4 text-right padding-vert-5">
                            <strong>Email:</strong>&nbsp;pro@uthm.edu.my
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Phone/Email -->
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html" title="UTHM Student DataCard System">
                                <img src="assets/UTHM/uthm logo.png" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- End Header -->
            <!-- Top Menu -->
            <div id="hornav" class="bottom-border-shadow">
                <div class="container no-padding border-bottom">
                    <div class="row">
                        <div class="col-md-12 no-padding">
                            <div class="visible-lg">
                                <ul id="hornavmenu" class="nav navbar-nav">
                                    <li>
                                        <a href="index.php" class="fa-home active">Home</a>
                                    </li>
                                    <li>
                                        <span class="glyphicon glyphicon-education">Academics</span>
                                        <ul>
                                            <li class="parent">
                                                <span>Faculties</span>
                                                <ul>
                                                    <li>
                                                        <a href="http://fkaas.uthm.edu.my/v3/">Civil & Environmental Engineering</a>
                                                    </li>
                                                    <li>
                                                        <a href="http://fkee.uthm.edu.my/v3/">Electrical & Electronic Engineering</a>
                                                    </li>
													<li>
                                                        <a href="http://fkmp.uthm.edu.my/v4/">Mechanical & Manufacturing Engineering</a>
                                                    </li>
													<li>
                                                        <a href="http://fptp.uthm.edu.my/v3/index.php/en/">Technology Management & Business</a>
                                                    </li>
													<li>
                                                        <a href="http://fptv.uthm.edu.my/">Technical & Vocasional Education</a>
                                                    </li>
													<li>
                                                        <a href="http://fsktm.uthm.edu.my/v6/index.php/en/">Computer Science & Information Technology</a>
                                                    </li>
													<li>
                                                        <a href="http://fstpi.uthm.edu.my/v6/">Science, Technology & Human Development</a>
                                                    </li>
													<li>
                                                        <a href="http://ftk.uthm.edu.my/v3/">Engineering Technology</a>
                                                    </li>
													<li>
                                                        <a href="http://www.uthm.edu.my/v2/content/view/420/253/lang,en/">Diploma Studies</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent">
                                                <span>Centers</span>
                                                <ul>
                                                    <li>
                                                        <a href="#">Graduate Studies</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Academic Development & Training</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Continuing Education Centre</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent">
                                                <span>Offices</span>
                                                <ul>
                                                    <li>
                                                        <a href="#">Academic Management</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="fa-copy ">Admission</span>
                                        <ul>
                                            <li>
                                                <a href="#">Programmes Offered</a>
                                            </li>
                                            <li>
                                                <a href="#">Tuition Fees</a>
                                            </li>
                                            <li class="parent">
                                                <span>Diploma Programme</span>
												<ul>
                                                    <li>
                                                        <a href="#">Diploma Programmes</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Admission Requirements</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Application Procedures</a>
                                                    </li>
													<li>
                                                        <a href="#">Fees</a>
                                                    </li>
                                                </ul>
                                            </li>
											<li class="parent">
                                                <span>Degree Programme</span>
												<ul>
                                                    <li>
                                                        <a href="#">Degree Programme</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Admission Requirements</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Application Procedures</a>
                                                    </li>
													<li>
                                                        <a href="#">Fees</a>
                                                    </li>
                                                </ul>
                                            </li>
											<li class="parent">
                                                <span>Postgraduate Programme</span>
												<ul>
                                                    <li>
                                                        <a href="#">Postgraduate</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Admission Requirements</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Application Procedures</a>
                                                    </li>
													<li>
                                                        <a href="#">Fees</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Offshore Programme</a>
                                            </li>
                                            <li>
                                                <a href="pages-full-width.html">International Students</a>
                                            </li>
										</ul>
                                    </li>
                                    <li>
                                        <span class="fa-group ">Administration</span>
                                        <ul>
                                            <li>
                                                <a href="#">Vice Chancellor Office</a>
                                            </li>
                                            <li class="parent">
                                                <span>Asst. Vice Chancellor Office (Community & Industrial Relations)</span>
												<ul>
                                                    <li>
                                                        <a href="#">University & Industry Relations Office</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">University & Community Relation Office</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Kampus Pagoh</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent">
                                                <span>Asst. Vice Chancellor Office (Developments, Facilities Management & ICT)</span>
												<ul>
                                                    <li>
                                                        <a href="#">Development Division</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Facility Management Division</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Property Administration Office</a>
                                                    </li>
													<li>
                                                        <a href="#">Information Technology Centre</a>
                                                    </li>
													<li>
                                                        <a href="#">OSHE</a>
                                                    </li>
													<li>
                                                        <a href="#">Contract Division</a>
                                                    </li>
													<li>
                                                        <a href="#">Pagof Development Unit</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="portfolio-6-column.html">Registrar Office</a>
                                            </li>
											<li>
                                                <a href="portfolio-6-column.html">Bursary Office</a>
                                            </li>
											<li>
                                                <a href="portfolio-6-column.html">Strategic & Corporate Communication Office</a>
                                            </li>
											<li>
                                                <a href="portfolio-6-column.html">International Office</a>
                                            </li>
											<li>
                                                <a href="portfolio-6-column.html">Publisher's Office</a>
                                            </li>
											<li>
                                                <a href="portfolio-6-column.html">Internal Audit Office</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="fa-comment ">Contact</a>
                                    </li>
                                </ul>
							<?php 
								if(isset($_SESSION['user'])){
									?>
									<ul id="hornavmenu" class="nav navbar-nav navbar-right">
									<li><a href="logoutAdmin.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
									</ul>
								<?php
								}else{
								?>
									<ul id="hornavmenu" class="nav navbar-nav navbar-right">
									<li><a href="#sectionLogin"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
									</ul>
								<?php
									}
							?>
							<ul id="hornavmenu" class="nav navbar-nav navbar-right">
							<li style="float:right;"><a href="#">Hello, <?=isset($_SESSION['username'])? $_SESSION['username'] : 'Guest' ?></a></li>
							</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Menu -->
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            <div id="slideshow" class="bottom-border-shadow">
                <div class="container no-padding background-white bottom-border">
                    <div class="row">
                        <!-- Carousel Slideshow -->
                        <div id="carousel-example" class="carousel slide" data-ride="carousel">
                            <!-- Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example" data-slide-to="1"></li>
                                <li data-target="#carousel-example" data-slide-to="2"></li>
                            </ol>
                            <div class="clearfix"></div>
                            <!-- End Carousel Indicators -->
                            <!-- Carousel Images -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="assets/img/slideshow/slide1.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slideshow/slide2.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slideshow/slide3.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slideshow/slide4.jpg">
                                </div>
                            </div>
                            <!-- End Carousel Images -->
                            <!-- Carousel Controls -->
                            <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                            <!-- End Carousel Controls -->
                        </div>
                        <!-- End Carousel Slideshow -->
                    </div>
                </div>
            </div>
			<body data-spy="scroll" data-target=".navbar" data-offset="50">
            <div id="icons class="bottom-border-shadow">
                <div class="container background-grey bottom-border">
                    <div id="sectionLogin" class="row padding-vert-60">
						<div class="jumbotron">
							<h2 class="bg-info text-center text-info padding" style="font-size : 30px; padding: 10px; margin: 0 0 40px 0"><strong>Select your Login here</strong></h2>  
							<p></p>
						<!-- Icons -->
                        <div class="col-md-4 text-center">
						<a href="loginAdmin.html">
                            <i class="fa-user fa-4x color-primary animate fadeIn"></i>
                            <h2 class="padding-top-10 animate fadeIn text-primary">Admin</h2>
						</a>
                            <p class="animate fadeIn">Admin login</p>
                        </div>
                        <div class="col-md-4 text-center">
						<a href="loginStudent.php">
                            <i class="fa-user fa-4x color-primary animate fadeIn"></i>
                            <h2 class="padding-top-10 animate fadeIn text-primary">New Student</h2>
						</a>
                            <p class="animate fadeIn">New student 2016/2017 Intake please login here</p>
                        </div>
                        <div class="col-md-4 text-center">
						<a href="login.html">
                            <i class="fa-user fa-4x color-primary animate fadeIn"></i>
                            <h2 class="padding-top-10 animate fadeIn text-primary">Staff Login</h2>
						</a>
                            <p class="animate fadeIn">UTHM staff login</p>
                        </div>
                        <!-- End Icons -->
						</div>
                    </div>
				
                </div>
            </div>
			</body>
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            <div id="base">
                <div class="container bottom-border padding-vert-30">
                    <div class="row">
                        <!-- Disclaimer -->
                        <div class="col-md-4">
                            <h3 class="margin-bottom-10">Disclaimer</h3>
                            <p class="text-justify" style="font-size:12px;">Universiti Tun Hussein Onn Malaysia (UTHM) aims its best to provide the best service through the dissemination of information through the web page which is accurate and up to date. 
							However, the university reserves the rights to make changes on the information from time to time and we shall not be responsible to any liability on the accuracy of the information. 
							The university has the rights to change or modify any parts without prior notice.</p>
                            <p class="text-justify" style="font-size:12px;">The website may contain links to the third parties and UTHM will not be responsible on the accuracy and appropriateness of the contents. 
							Information to be downloaded from the website is guaranteed virus free. 
							The university shall not be held responsible for any damages due to virus infection while downloading the information from the website.</p>
                        </div>
                        <!-- End Disclaimer -->
                        <!-- Contact Details -->
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Contact Details</h3>
                            <p>
                                <span class="fa-phone">Telephone:</span>+607-453 7000/7025
                                <br>
                                <span class="fa-envelope">Email:</span>
                                <a href="mailto:info@example.com">pro@uthm.edu.my</a>
                                <br>
                                <span class="fa-link">Website:</span>
                                <a href="index.html">UTHM Student DataCard System</a>
                            </p>
                            <p>Beg Berkunci 101 Parit Raja,
                                <br>86400 Batu Pahat,
                                <br>Johor,
                                <br>West Malaysia</p>
                        </div>
                        <!-- End Contact Details -->
                        <!-- Sample Menu -->
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Sample Menu</h3>
                            <ul class="menu">
                                <li>
                                    <a class="fa-tasks" href="#">Menu 1</a>
                                </li>
                                <li>
                                    <a class="fa-users" href="#">Menu 2</a>
                                </li>
                                <li>
                                    <a class="fa-signal" href="#">Menu 3</a>
                                </li>
                                <li>
                                    <a class="fa-coffee" href="#">Menu 4</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Sample Menu -->
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <div id="footer" class="background-grey">
                <div class="container">
                    <div class="row">
                        <!-- Footer Menu -->
                        <div id="footermenu" class="col-md-8">
                            <ul class="list-unstyled list-inline">
                                <li>
                                    <a href="http://www.uthm.edu.my/v2/index.php" target="_blank">About UTHM Portal</a>
                                </li>
                                <li>
                                    <a href="http://www.uthm.edu.my/v2/content/view/469/256/" target="_blank">FAQ</a>
                                </li>
                                <li>
                                    <a href="index.html" target="_self">Login</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Footer Menu -->
                        <!-- Copyright -->
                        <div id="copyright" class="col-md-4">
                            <p class="pull-right">(c) 2016 Liew Wui Foon Copyright</p>
                        </div>
                        <!-- End Copyright -->
                    </div>
                </div>
            </div>
            <!-- End Footer -->
            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
		</div>
    </body>
</html>
<!-- === END FOOTER === -->