<?php

header('Strict-Transport-Security: max-age=16070400; includeSubDomains');
header('X-Frame-Options: deny');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');

?>
<!DOCTYPE html>
<html lang="en">

<head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-54883827-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '467164280320951'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=467164280320951&ev=PageView&noscript=1"/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <title>Security Knowledge Framework - Demo</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Ruda' rel='stylesheet' type='text/css'>
	
	<script src="js/modernizr-2.6.2.min.js"></script>
	
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="gradient demo">
	
<script>
  ((window.gitter = {}).chat = {}).options = {
    room: 'Security-Knowledge-Framework/Lobby'
  };
</script>
<script src="https://sidecar.gitter.im/dist/sidecar.v1.js" async defer></script>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
		
            <!-- Brand and toggle get grouped for better mobile display -->
			
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Start guide</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                </button> 
                <a class="navbar-brand" href="#page-top">
					<img src="img/logos/logo.svg" width="35" height="35" />
					<span class="desktop">Security Knowledge Framework</span>
					<span class="mobile">SKF</span>
				</a>
            </div>

            <!-- Navigation -->
			
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li class="active">
                        <a href="demo.php">Demo</a>
                    </li>
                    <li>
                        <a href="talks.php">Talks</a>
                    </li>
                    <li>
                        <a href="http://skf.readme.io">Documentation</a>
                    </li>
                    <li>
                        <a href="https://github.com/blabla1337/skf-flask">Download</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
	
	<!-- News -->
	
	<section id="headline">
		<div class="container">
			<h1>Try before you .. </h1>
		</div>	
	</section>	

	<!-- Details -->
	
	<section id="demo">
		<div class="container">
			<div class="leftCol">
				<h2>Just kidding, it's free</h2>
				<p>The demo shows a complete version of the Security Knowledge Framework.</p>
				<p><b>Please note:</b> When the website is under attack it shuts itself down for about, 2min giving you a 500 error message. Also we do a pull from github every hour, if you are visiting the demo this point your session could
				be invalidated. Just login again with the provided username and password.  </p>
				<p>If you have any questions, awesome ideas or general comments please use the <a href="http://skf.readme.io/">support</a> interface and get in touch!</p>
			</div>
			<div class="rightCol">
				<div class="wrap login">
					<h3>Login</h3>
					<ul>
						<li><strong>Username:</strong> admin</li>
						<li><strong>Password:</strong> test-skf</li>
					</ul>
					<a class="btn solid" href="https://demo.securityknowledgeframework.org">View the Beta!</a>
				</div>
			</div>
		</div>
	</section>
		
	<!-- Footer -->
	
	<footer>
		<div class="container top">
			<div class="col licence">
				Security knowledge framework is licensed under the <a href="http://www.gnu.org/licenses/agpl-3.0.html">GNU 3.0 licence</a>
			</div>
			<div class="col links">
				<ul>
					<li><img src="img/logos/owasp-icon-white.svg" width="20" height="20" /><a href="https://www.owasp.org/index.php?title=OWASP_Security_Knowledge_Framework">OWASP Wiki for SKF</a></li>
					<li><i class="fa fa-github"></i> <a href="https://github.com/blabla1337/skf-flask">Github SKF flask python</a></li>
				</ul>
			</div>
		</div>
		<div class="container footer">
			&copy; 2019 Security Knowledge Framework
		</div>
	</footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/freelancer.js"></script>
	
</body>
<!--<img src="img/scrum.png" style="visibility:hidden;" width="1px;"/>-->
</html>
