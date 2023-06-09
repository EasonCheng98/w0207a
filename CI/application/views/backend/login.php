<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="en" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="ltr" lang="en">
	<!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title>The Project | Page Login Fullscreen</title>
		<meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Fontello CSS -->
		<link href="fonts/fontello/css/fontello.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="css/animations.css" rel="stylesheet">
		<link href="plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
		<link href="plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="plugins/hover/hover-min.css" rel="stylesheet">		
		<link href="plugins/jquery.countdown/css/jquery.countdown.css" rel="stylesheet">
		<!-- The Project's core CSS file -->
		<!-- Use css/rtl_style.css for RTL version -->
		<link href="css/style.css" rel="stylesheet" >
		<!-- The Project's Typography CSS file, includes used fonts -->
		<!-- Used font for body: Roboto -->
		<!-- Used font for headings: Raleway -->
		<!-- Use css/rtl_typography-default.css for RTL version -->
		<link href="css/typography-default.css" rel="stylesheet" >
		<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
		<link href="css/skins/light_blue.css" rel="stylesheet">
		

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">

        <meta name="google-signin-scope" content="profile email"> 
        <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
        <script src="https://apis.google.com/js/platform.js" async defer></script>

	</head>

	<!-- body classes:  -->
	<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
	<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
	<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
	<!-- "gradient-background-header": applies gradient background to header -->
	<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
	<body class="no-trans    ">

		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
		
		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">
		
			<!-- background image -->
			<div class="fullscreen-bg"></div>

			<!-- banner start -->
			<!-- ================ -->
			<div class="pv-40 dark-translucent-bg">
				<div class="container">
					<div class="object-non-visible text-center" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
						<!-- logo -->
						<div id="logo" class="logo">
							<h3 class="margin-clear"><a href="index.html" class="logo-font link-light">The <span class="text-default">Project</span></a></h3>
						</div>
						<!-- name-and-slogan -->
						<p class="small">Multipurpose HTML5 Template</p>
						<div class="form-block center-block p-30 light-gray-bg border-clear">
							<h2 class="title text-left">Login</h2>
							<form class="form-horizontal text-left">
								<div class="form-group has-feedback">
									<label for="inputUserName" class="col-sm-3 control-label">User Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputUserName" placeholder="User Name" required>
										<i class="fa fa-user form-control-feedback"></i>
									</div>
								</div>
								<div class="form-group has-feedback">
									<label for="inputPassword" class="col-sm-3 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
										<i class="fa fa-lock form-control-feedback"></i>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-8">
										<div class="checkbox">
											<label>
												<input type="checkbox" required> Remember me.
											</label>
										</div>
										<button type="submit" class="btn btn-group btn-default btn-animated">Log In <i class="fa fa-user"></i></button>
										<ul class="space-top">
											<li><a href="#">Forgot your password?</a></li>
										</ul>
										<span class="text-muted">Login with</span>

                                        <fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>
                                        <div class="g-sign2" data-onsuccess="onSignIn" data-theme="dark"></div>





										<ul class="social-links colored circle clearfix">
											<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
											<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
											<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</div>
								</div>
							</form>
							<p>Don't have an account yet? <a href="page-signup-2.html">Sing up</a> now.</p>
						</div>
						<!-- .subfooter start -->
						<!-- ================ -->
						<p class="mt-20">Copyright © 2015 The Project by <a target="_blank" href="http://htmlcoder.me">HtmlCoder</a>. All Rights Reserved</p>
						<!-- .subfooter end -->
					</div>
				</div>
			</div>
			<!-- banner end -->


			
		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster -->
		<!-- ================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>
		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/waypoints/jquery.waypoints.min.js"></script>
		<!-- Count To javascript -->
		<script type="text/javascript" src="plugins/jquery.countTo.js"></script>
		<!-- Parallax javascript -->
		<script src="plugins/jquery.parallax-1.1.3.js"></script>
		<!-- Contact form -->
		<script src="plugins/jquery.validate.js"></script>
		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="plugins/owlcarousel2/owl.carousel.min.js"></script>
		<!-- SmoothScroll javascript -->
		<script type="text/javascript" src="plugins/jquery.browser.js"></script>
		<script type="text/javascript" src="plugins/SmoothScroll.js"></script>
		<!-- Count Down javascript -->
		<script type="text/javascript" src="plugins/jquery.countdown/js/jquery.plugin.js"></script>
		<script type="text/javascript" src="plugins/jquery.countdown/js/jquery.countdown.js"></script>
		<script type="text/javascript" src="js/coming.soon.config.js"></script>
		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>
		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>


        <script>
            function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            var id_token = googleUser.getAuthResponse();

            $.post("<?=base_url('api/glogin')?>", {
                "token":id_token,
            }, function(response){
                response = JSON.parse(response);

                if(response.status == "OK"){

                    console.log("login success");

                }else{
                    alert(response.result);
                }
            });
        }

        function statusChangeCallback(response)
        {
            console.log('statusChangeCallback');
            console.log(response);

            if(response === 'connected')
            {
                $.post("<?=base_url('api/flogin')?>",
                {"token":response.authResponse.accessToken},
                function(response){

                    response = JSON.parse(response);

                    if(response.status == "OK"){
                        console.log("login success");
                    }else{
                        alert(response.result);
                    }
                });

                //Logged into your app and facebook
                testAPI();
            }else{
                // The person is not logged into your app or we are unable to tell
                console.log('Please log' + 'into this app.' )
            }
        }

        function checkLoginState(){
            FB.getLoginStatus(function(response){
                statusChangeCallback(response);
            });

        window.fbAsynInit = function() {
            FB.init({
                appId  : '231543869666934',
                cookie : true,

                xfbml : true,
                version : 'v2.8'
            });
        }}
        </script>

	</body>
</html>
