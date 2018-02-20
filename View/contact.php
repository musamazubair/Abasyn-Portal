<!DOCTYPE HTML>
<html>
<head>
<title>Contact Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Stylesheets Links -->
<link rel="stylesheet" href="../css/touchTouch.css" type="text/css" media="all" />
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="../css/style.css" rel='stylesheet' type='text/css' />

<!-- script Links -->
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/responsiveslides.min.js"></script>

</head>
<body>
<!-- banner --> 
<div class="banner2">	  
	 <div class="header">
			 <div class="logo">
				 <a href="../index.html"><img src="../images/logo1.png" alt=""/></a>
			 </div>
			 <div class="top-menu">
				 <span class="menu"></span>
				 <ul class="navig">
				 <li><a href="../index.php">Home</a></li>
				 <li><a href="about.php">About</a></li>
				 <li><a href="blog.php">Blog</a></li>
				 <li><a href="gallery.php">Gallery</a></li>
				 <li class="active"><a href="contact.php">Contact</a></li>
				 <li><?php include('./login.php'); ?></li>
				 </ul>
			 </div>
			 <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$("ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->
			 <div class="clearfix"></div>
	 </div>	  
</div>
<!---->
<!--contact-->
<div class="contact">
	 <div class="container">
		 <div class="main-head-section">
					<h2>Contact</h2>
			<div class="contact-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424396.3176723366!2d150.92243255000002!3d-33.7969235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1431587453420" width="100%" height="151px" frameborder="0" style="border:0"></iframe>
			</div>
		 </div>
		 <div class="contact_top">			 		
			 <div class="col-md-8 contact_left">
			 		<h4>Below Type Here</h4>
			 		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt dolor et tristique bibendum. Aenean sollicitudin vitae dolor ut posuere.</p>
					<form>
					  <div class="form_details">
					      <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
						  <input type="text" class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
						  <input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
						  <textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
						  <div class="clearfix"> </div>
						 <div class="sub-button">
							 <input type="submit" value="Send message">
						 </div>
					  </div>
				   </form>
			 </div>
			 <div class="col-md-4 company-right">
				 <div class="company_ad">
						<h3>Address</h3>
						<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit velit justo.</span>
			      	 <address>
						 <p>email : <a href="mailto:example@mail.com">info@display.com</a></p>
						 <p>phone : 1.306.222.4545</p>
						 <p>222 2nd Ave South</p>
						 <p>Saskabush, SK   S7M 1T6</p>									 	 	
					 </address>
				 </div>
			 </div>	
				<div class="clearfix"> </div>
		  </div>
	 </div>
</div>
<!---->
<div class="footer">
	 <div class="container">
		 <div class="ftr-sec">
			 <div class="col-md-4 ftr-grid">
				 <h3>Text Module</h3>
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut odio ut quam convallis ultricies. Morbi rutrum lectus tortor. Cras vitae semper mi, et feugiat dolor.</p>
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut odio ut quam convallis ultricies. Morbi rutrum lectus tortor. Cras vitae semper mi, et feugiat dolor.</p>
			 </div>
			 <div class="col-md-4 ftr-grid2">
				 <h3>Pages</h3>
				 <ul>
					 <li><a href="index.php"><span></span>Home</a></li>
					 <li><a href="about.php"><span></span>About</a></li>
					 <li><a href="program.php"><span></span>Programs</a></li>
					 <li><a href="blog.php"><span></span>Blog</a></li>	
					 <li><a href="gallery.php"><span></span>Gallery</a></li>
					 <li class="active"><a href="contact.php"><span></span>Contact</a></li>
					 <li><?php include('./login.php'); ?></li>

				 </ul>
			 </div>
			 <div class="col-md-4 ftr-grid3">
				 <h3>Quick links</h3>
				 <ul>
					 <li><a href="about.html"><span></span>History</a></li>
					 <li><a href="about.html"><span></span>Departments</a></li>
					 <li><a href="gallery.html"><span></span>Services</a></li>
					 <li><a href="blog.html"><span></span>Guidancs</a></li>	
					 <li><a href="about.html"><span></span>Team</a></li>
					 <li><a href="contact.html"><span></span>Contact</a></li>
				 </ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="copywrite">
	 <div class="container">
		<p>Copyright © 2018 Abasyn University. All rights reserved</p>
	</div>
</div>
<!---->
</body>
</html>