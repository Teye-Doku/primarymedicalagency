<html>
<head>
	<title>Registration</title>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

</head>
	<?php
	session_start();
	include("connect.php");
	$id='EF'.rand(1000,9999);
	$psw=rand(100000,999999);
	$encrypter_psw=md5($psw);
	$email_verification_code=md5(rand(1000,9999));
	$sql="insert into login values('$id','".$_POST['name']."','".$_POST['email']."','$encrypter_psw','$email_verification_code','deactive',0,0)";
	$result=mysqli_query($db1,$sql) or die(mysqli_error($db1));
	if(isset($result)){
	    	$base_url="http://localhost/edusite/";
	    	$email_body="
	    		<p>Hi ".$_POST['name']." Thank you for Registration </p>
	    		<p>Password=".$psw."</p>
	    		<p>UserID=".$id."</p>
	    		<p>Email Varification Link- ".$base_url."verification.php?activation_code=".$email_verification_code."&&userid=".$id."
	    		</p>
	    		<p>Best Regurded,<br>
	    		   <b>Sayan Roy</b>
	    		</p>
	    	";
	    	require'phpmailer/PHPMailerAutoload.php';
	    	$mail=new PHPMailer;
	    	$mail->isSMTP();
	    	$mail->Host='smtp.gmail.com';
	    	$mail->SMTPAuth=true;
	    	$mail->Username='edusite2019@gmail.com';
	    	$mail->Password='sayanroy1085';
	    	$mail->SMTPSecure='tls';
	    	$mail->Port=587;
	    	$mail->setFrom('edusite2019@gmail.com','Edusite Educational Forum');
	    	$mail->addAddress($_POST['email']);
	    	$mail->addReplyTo('no-reply@gmail.com','No-reply');
	    	$mail->isHTML(true);
	    	$mail->Subject='Active Account';
	    	$mail->Body=$email_body;
	    	if(!$mail->send()){
	    		$msg='Mail could not sent';
	    	}
	    	else{

	    		?>
	    		<body>
	    			<center>
	    				<br><br><br><br><br><br><br><br>
	    				<b><?php $msg='PLZ CHECK YOUR MAIL';
	    				echo $msg; ?></b>
	    				<br><br>
	    				<p>
	    					<a class="main-button icon-button" href="https://www.gmail.com">Gmail</a>
	    					<a class="main-button icon-button" href="https://www.ymail.com">Ymail</a>
	    					<a class="main-button icon-button" href="https://www.hotmail.com">Hotmail</a>
	    				</p>
	    				<br><br><br><br><br>
	    				<!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					<div class="col-md-6">
						<div class="footer-logo">
							<a class="logo" href="index.php">
								<img src="./img/logo.png" alt="logo">
							</a>
						</div>
					</div>
					<!-- footer logo -->

					<!-- footer nav -->
					<div class="col-md-6">
						<ul class="footer-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="login.php">Login</a></li>
							<li><a href="#">Courses</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
					<!-- /footer nav -->

				</div>
				<!-- /row -->

				<!-- row -->
				<div id="bottom-footer" class="row">

					<!-- social -->
					<div class="col-md-4 col-md-push-8">
						<ul class="footer-social">
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
					<!-- /social -->

					<!-- copyright -->
					<div class="col-md-8 col-md-pull-4">
						<div class="footer-copyright">
							<span>&copy; Copyright 2019. All Rights Reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <b>Sayan Roy</b></span>
						</div>
					</div>
					<!-- /copyright -->

				</div>
				<!-- row -->

			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->

	    	<?php }
	    }
?>


		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	    		</body>	
</html>