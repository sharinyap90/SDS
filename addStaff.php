<?php
include_once 'dbconfig.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title -->
        <title>Add Staff</title>
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
                            <strong>Phone:</strong>
							<a href="tel:+607-453 7000">&nbsp;+607-453 7000/7025</a>
                        </div>
						<div class="col-sm-4 text-center padding-vert-5" style="font-size:24px">
                            <strong>UTHM Student DataCard System</strong>&nbsp;
                        </div>
                        <div class="col-sm-4 text-right padding-vert-5">
                            <strong>Email:</strong>
							<a href="mailto:pro@uthm.edu.my">&nbsp;pro@uthm.edu.my</a>
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
                                        <a href="adminIndex.php" class="fa-home">Home</a>
                                    </li>                                    
                                    <li>
                                        <a href="addStaff.php" class="fa-plus-square   active">Add Staff</a>
                                    </li>
									<li>
                                        <a href="addStudent.php" class="fa-plus-square">Add Student</a>
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
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
						<!-- Add New Staff -->
                        <div class="col-md-10 col-md-offset-1 col-sm-offset-3">
                            <form class="signup-page form-horizontal" action = "addStaffDB.php" method = 'POST'>
                                <div class="signup-header">
                                    <center><h2>Add New Staff</h2></center>
                                <hr>    
                                </div>								
											<div class="form-group">
											 <label class="col-sm-3 control-label">Username</label>
											 <div class="col-sm-8">
											 <input type="text" name="staffUser" class="form-control" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder="Full Name"/>
											 </div>
											</div>
									
											<div class="form-group">
											 <label class="col-sm-3 control-label">Password</label>
											 <div class="col-sm-8">
											 <input type="text" name="staffPassword" class="form-control" required data-parsley-required="" placeholder="password"/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">Position</label>
											 <div class="col-sm-3">
											 <select class="form-control" name="position" required>
												  <option value="" selected="selected"> - Select - </option>
												  <option value="2">PPA</option>
												  <option value="5">Bursary</option>
													<option value="4">PKU</option>
											 </select>
											 </div>
											</div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-12 text-right">
                                        <button class="btn btn-primary" type="submit" name="submit">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Add New Staff -->	
					</div>
				</div>	
            </div>
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
            <div id="footer" class="background-grey">
                <div class="container">
                    <div class="row">
                        <!-- Footer Menu -->
                        <div id="footermenu" class="col-md-8">
                            <ul class="list-unstyled list-inline">
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Footer Menu -->
                        <!-- Copyright -->
                        <div id="copyright" class="col-md-4">
                            <p class="pull-right">(c) 2014 Your Copyright Info</p>
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
			<script src="jquery.js"></script>
			<script src="parsley.min.js"></script>
			<script src="jquery-1.12.4-jquery.min.js"></script>

			<script type="text/javascript">
				$('#form').parsley();
			</script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->