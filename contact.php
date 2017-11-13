<?php
// Free html5 templates : #

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$subject=$_POST['subject'];

	$to = "youremail@gmail.com";
	$subject = "Html5xCss3 - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>


<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Artistry - Free Responsive Html5 Templates</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates ">
	<meta name="author" content="">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="js/jquery183.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
		});
	</script>
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    
</head>
<body>
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<header>
	<div class="top-header">
		<div class="zerogrid">
			<nav id="menu-wrap"><div id="menu-trigger">Menu</div>    
				<ul id="menu" style="display: none;">
					<li><a href="index.html">Home</a></li>
					<li>
						<a href="#">Categories</a>
						<ul>
							<li>
								<a href="#">Item 01</a>
							</li>
							<li>
								<a href="#">Item 02</a>
							</li>
							<li>
								<a href="#">Item 03</a>
								<ul>
									<li><a href="#">Item 31</a></li>
									<li><a href="#">Item 32</a></li>
								</ul>				
							</li>
							<li>
								<a href="#">Item 04</a>				
								<ul>
									<li><a href="#">Item 41</a></li>
									<li><a href="#">Item 42</a></li>
									<li><a href="#">Item 43</a></li>
									<li><a href="#">Item 44</a></li>
								</ul>	
							</li>
						</ul>
					</li>
					<li><a href="single.html">About</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li style="float:right !important">
						<form method="get" action="/search" id="search" class="f-right">
							<input name="q" type="text" size="40" placeholder="Search..." />
						</form>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="clearfix">
		<div class="wrap-header">
			<div class="row">
				<div class="col-full t-center">
					<div class="wrap-col">
						<div class="logo"><a href="#"><img src="images/logo.png"/></a></div>	
						<div class="tagline">Temporibus autem quibusdam et aut officiis</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="zerogrid">
		<div class="cat-title t-center">
			<a href="#">CONTACT</a>
		</div>
	</div>
</header>

	<section id="container">
		<div class="zerogrid">
			<div class="wrap-container clearfix">
				<div class="row">
					<div id="main-content" class="col-2-3">
						<div class="wrap-content">
							<div class="col-full">
								<div style="margin-top: 60px;">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.289259162295!2d-120.7989351!3d37.5246781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091042b3386acd7%3A0x3b4a4cedc60363dd!2sMain+St%2C+Denair%2C+CA+95316%2C+Hoa+K%E1%BB%B3!5e0!3m2!1svi!2s!4v1434016649434" width="100%" height="450" frameborder="0" style="border:0"></iframe>
									<div class="contact">
										<h3>Contact Form</h3>
										<!--Warning-->
										<center><?php echo $text;?></center>
										<!---->
										<div id="contact_form">
											<form name="form1" id="ff" method="post" action="contact.php">
												<label class="row">
													<div class="col-1-2">
														<div class="wrap-col">
															<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
														</div>
													</div>
													<div class="col-1-2">
														<div class="wrap-col">
															<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
														</div>
													</div>
												</label>
												<label class="row">
													<div class="col-full">
														<div class="wrap-col">
														<input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
														</div>
													</div>
												</label>
												<label class="row">
													<div class="wrap-col">
														<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
														placeholder="Message"></textarea>
													</div>
												</label>
												<center><input class="sendButton" type="submit" name="submitcontact" value="Submit"></center>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="sidebar" class="col-1-3">
						<!---- Start Widget ---->
						<div class="widget wid-about">
							<div class="wid-header">
								<h5>ABOUT ME</h5>
							</div>
							<div class="wid-content">
								<img src="images/10.jpg" />
								<p>My name is Activello and I am an awesome WordPress blog theme for photography, food, travel and other blogs. I was created by colorlib.</p>
							</div>
						</div>
						<!---- Start Widget ---->
						<div class="widget wid-follow">
							<div class="wid-header">
								<h5>FOLLOW ME</h5>
							</div>
							<div class="wid-content">
								<ul class="quick-link">
									<li><a href=""><i class="fa fa-facebook"></i></a></li>
									<li><a href=""><i class="fa fa-twitter"></i></a></li>
									<li><a href=""><i class="fa fa-youtube"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus"></i></a></li>
									<li><a href=""><i class="fa fa-instagram"></i></a></li>
									<li><a href=""><i class="fa fa-github"></i></a></li>
								</ul>
							</div>
						</div>
						<!---- Start Widget ---->
						<div class="widget wid-post">
							<div class="wid-header">
								<h5>Latest Posts</h5>
							</div>
							<div class="wid-content">
								<div class="post">
									<div class="zoom-container">
										<a href="single.html">
											<img src="images/11.jpg" />
										</a>
									</div>
									<div class="wrapper">
										<h5 class="vid-name"><a href="#">Video's Name</a></h5>
										<div class="info">
											<h6>By <a href="#">Kelvin</a></h6>
											<span><i class="fa fa-calendar"></i>25/3/2015</span> 
											<span><i class="fa fa-heart"></i>1,200</span>
										</div>
									</div>
								</div>
								<div class="post">
									<div class="zoom-container">
										<a href="single.html">
											<img src="images/12.jpg" />
										</a>
									</div>
									<div class="wrapper">
										<h5 class="vid-name"><a href="#">Video's Name</a></h5>
										<div class="info">
											<h6>By <a href="#">Kelvin</a></h6>
											<span><i class="fa fa-calendar"></i>25/3/2015</span> 
											<span><i class="fa fa-heart"></i>1,200</span>
										</div>
									</div>
								</div>
								<div class="post">
									<div class="zoom-container">
										<a href="single.html">
											<img src="images/13.jpg" />
										</a>
									</div>
									<div class="wrapper">
										<h5 class="vid-name"><a href="#">Video's Name</a></h5>
										<div class="info">
											<h6>By <a href="#">Kelvin</a></h6>
											<span><i class="fa fa-calendar"></i>25/3/2015</span> 
											<span><i class="fa fa-heart"></i>1,200</span>
										</div>
									</div>
								</div>
								<div class="post">
									<div class="zoom-container">
										<a href="single.html">
											<img src="images/14.jpg" />
										</a>
									</div>
									<div class="wrapper">
										<h5 class="vid-name"><a href="#">Video's Name</a></h5>
										<div class="info">
											<h6>By <a href="#">Kelvin</a></h6>
											<span><i class="fa fa-calendar"></i>25/3/2015</span> 
											<span><i class="fa fa-heart"></i>1,200</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!---- Start Widget ---->
						<div class="widget wid-category">
							<div class="wid-header">
								<h5>CATEGORIES</h5>
							</div>
							<div class="wid-content">
								<ul>
									<li><a href="#">Post Formats</a></li>
									<li><a href="#">Template</a></li>
									<li><a href="#">Cat A</a></li>
									<li><a href="#">Edge Case</a></li>
									<li><a href="#">Cat B</a></li>
								</ul>
							</div>
						</div>
						<!---- Start Widget ---->
						<div class="widget wid-subcribe">
							<div class="wid-header">
								<h5>SUBSCRIBE TO BLOG VIA EMAIL</h5>
							</div>
							<div class="wid-content">
								<p>Enter your email address to subscribe to this blog and receive notifications of new posts by email.</p>
								<span>Join 4 other subscribers</span>
								<form method="get" action="/search" id="subcribe" >
									<input name="q" type="text" size="40" placeholder="Email Address" />
								</form>
								<a class="button button03" href="#">SUBSCRIBE</a>
							</div>
						</div>
						<!---- Start Widget ---->
						<div class="widget wid-follow">
							<div class="wid-header">
								<h5>FOLLOW ME ON INSTAGRAM</h5>
							</div>
							<div class="wid-content">
								<div class="row">
									<div class="col-1-3">
										<div class="wrap-col">
											<a href="#"><img src="images/15.jpg" /></a>
											<a href="#"><img src="images/16.jpg" /></a>
											<a href="#"><img src="images/17.jpg" /></a>
										</div>
									</div>
									<div class="col-1-3">
										<div class="wrap-col">
											<a href="#"><img src="images/18.jpg" /></a>
											<a href="#"><img src="images/19.jpg" /></a>
											<a href="#"><img src="images/20.jpg" /></a>
										</div>
									</div>
									<div class="col-1-3">
										<div class="wrap-col">
											<a href="#"><img src="images/21.jpg" /></a>
											<a href="#"><img src="images/22.jpg" /></a>
											<a href="#"><img src="images/23.jpg" /></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
<!--////////////////////////////////////Footer-->
<footer>
	<div class="zerogrid">
		<div class="wrap-footer t-center">
			<div class="row">
				<div class="full">
					<ul class="quick-link">
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-youtube"></i></a></li>
						<li><a href=""><i class="fa fa-google-plus"></i></a></li>
						<li><a href=""><i class="fa fa-instagram"></i></a></li>
						<li><a href=""><i class="fa fa-github"></i></a></li>
					</ul>
					<div class="copy-right">
						<p>Copyright 20xx - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<script type="text/javascript">
    $(function() {
		if ($.browser.msie && $.browser.version.substr(0,1)<7)
		{
		$('li').has('ul').mouseover(function(){
			$(this).children('ul').css('visibility','visible');
			}).mouseout(function(){
			$(this).children('ul').css('visibility','hidden');
			})
		}

		/* Mobile */
		$("#menu-trigger").on("click", function(){
			$("#menu").slideToggle();
		});

		// iPad
		var isiPad = navigator.userAgent.match(/iPad/i) != null;
		if (isiPad) $('#menu ul').addClass('no-transition');      
    });          
</script>


</div>
</body></html>