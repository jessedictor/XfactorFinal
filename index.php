<html>
	<head>
		<title>Jesse's Test Application</title>
		
			<script src="http://jessedictor.com/twilio/js/jquery-1.10.2.min.js"></script>
		
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="http://jessedictor.com/twilio/css/bootstrap.min.css">

			<!-- Optional theme -->
			<link rel="stylesheet" href="http://jessedictor.com/twilio/css/bootstrap-theme.min.css">

			<!-- Latest compiled and minified JavaScript -->
			<script src="http://jessedictor.com/twilio/js/bootstrap.min.js"></script>
			
			<script>
			function outCall()
			
			{
			
			phoneVal = $('#phone').val();
			
				var formData = {phone:phoneVal}; //Array 
				 
				$.ajax({
					url : "twilioCall.php",
					type: "POST",
					data : formData,
					success: function(data, textStatus, jqXHR)
					{
						//data - response from server
					},
					error: function (jqXHR, textStatus, errorThrown)
					{
				 
					}
				});
			}
			</script>			
			
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
				    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				    	<span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </a>
				 
				    <!-- Be sure to leave the brand out there if you want it shown -->
				    <a class="brand hidden-phone" href="javascript:void()">Jesse's Test Application</a>
					<div class="brand visible-phone">Call: 503-505-7204</div>
					
					<a class="brand right visible-desktop" href="#">Call: (919) 867-1418</a>
				</div>
			</div>
		</div>
		<div class="hero" style="margin-top:40px;">
			<div class="container">
	<a class="hidden-phone" href="javascript:void();" id="videoPlay"></a>
	<h2 class="hidden-phone">
		Are you interested in testing this automated calling program?
	</h2>
</div>
<div id="call">
	<div class="container">
		<div class="clickToCall">
			<div class="callYou">Enter your phone number and click below to take part of our poll:</div>
			<form action="/" id="callForm">
				<input type="text" id="phone" name="phone" maxlength="10" size="10" placeholder="phone number">
				<input type="button" value="Call Me" onclick="outCall();">
			</form>
		</div>
	</div>
</div>
<div class="container">
	<div class="row-fluid">
		<span class="span12 detailText">
	</div>
</div>
			<div class="container">
				<div class="row-fluid copyright">
					<span class="span12">
						This website is for demonstration purposes and does not reflect an active research study. For more information on clinical research advertising visit <a href="http://www.xfactoradvertising.com" target="_blank">www.xfactoradvertising.com</a> <br />&copy; Copyright 2013 <a href="http://www.xfactoradvertising.com" target="_blank">X Factor Advertising</a>
					</span>
				</div>
			</div>
		</div>
	</body>
</html> 