<?php include('server.php') ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Hydroponics Monitoring System</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/normalize.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">
	<?php 
		session_start(); 
		if (isset($_SESSION['username'])) {
			header('location: ajax.php');
		}
	?>
	<div id="wrapper">
		<header id="header">
			<div class="content">
					<h1>Smart Hydroponics System</h1>
					<p>IOT Based Smart Hydroponics System Using Reinforcement Learning</p>
			</div>
			<nav>
				<ul>
					<li><a href="#about">About</a></li>
					<li><a href="#join_us">Connect</a></li>
				</ul>
			</nav>
		</header>

	<!-- Main -->
		<div id="main">

		<!-- About -->
			<article id="about">
				<h2 class="major">About</h2>
				<span class="image main"><img src="images/v1.jpg" alt="" /></span>
				<p>This web app is for viewing and controlling the sensor readings from the IOT based smart hydroponics system using reinforcement learning. Hydroponics is the growing of crops in a controlled nutrient solution.A smart IoT Based hydroponics system using reinforcement learning is a system that incorporates several technologies such as internet of things and machine learning specifically reinforcement learning to monitor and control a hydroponics system. In this work, a smart hydroponics system was designed and implemented to help the user who is growing the crops to monitor, in real-time, parameters such as level of water,pH,electrical conductivity ,temperature and humidity via a web application and a mobile application. The system will control some of these parameters using reinforcement learning.. This project comprises an integration of hardware and software. An Arduino UNO is used to receive readings from the sensors which is sent to the Node MCU WiFi module and is then sent to the cloud. These readings are sent to the mobile and web application and displayed on a live dashboard.The best parameters needed for the hydoponic crop to grow are fed into the Reinforcement Learning model and train in order to control the actuators.</p>
			</article>

		<!-- Join -->
			<article id="join_us">
				<h2 class="major">CONNECT</h2>
				<div class="form">
				<ul class="tab-group">
					<li class="tab active"><a href="#signup">Sign Up</a></li>
					<li class="tab"><a href="#login">Log In</a></li>
				</ul>

				<div class="tab-content">
					<div id="signup">
					<h1>REGISTER HERE</h1>
					<form action="index.php#join_us" method="post">
							<?php include('errors.php'); ?>	
							<div class="top-row">
						<div class="field-wrap">
							<label>
								First Name<span class="req">*</span>
							</label>
								<input type="text" required autocomplete="off" name ="firstname" value="<?php echo $firstname; ?>"/>
						</div>
						<div class="field-wrap">
							<label>
								Last Name<span class="req">*</span>
							</label>
								<input type="text" required autocomplete="off" name="lastname" value="<?php echo $lastname; ?>" />
						</div>
						</div>
						<div class="field-wrap">
						<label>
							Email Address<span class="req">*</span>
							</label>
								<input type="email" required autocomplete="off" name="email" value="<?php echo $email; ?>"/>
						</div>
						<div class="field-wrap">
						<label>
							Set A Password<span class="req">*</span>
							</label>
								<input type="password" name="password" required autocomplete="off" />
						</div>
						<button type="submit" class="button button-block" name="reg_user" />SIGN UP</button>
					</form>
					</div>

					<div id="login">
					<h1>Login To Your Account</h1>
					<form action="index.php#login" method="post">
						<div class="field-wrap">
						<label>
							Email Address<span class="req">*</span>
							</label>
						<input type="email" name="email" required autocomplete="off" />
						</div>
						<div class="field-wrap">
						<label>
							Password<span class="req">*</span>
							</label>
						<input type="password" name="password" required autocomplete="off" />
						</div>
						<button class="button button-block" name="login_user"/>Log In</button>
					</form>
					</div>
				</div>

			<!-- /form -->
				<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
				<script  src="assets/js/index.js"></script>
			</article>
		</div>

	</div>

<!-- BG -->
	<div id="bg"></div>
<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>
