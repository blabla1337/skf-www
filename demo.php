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
	
	<script src="js/modernizr-2.6.2.min.js"></script>
	
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="fail">
	
	<div id="errorContainer">
		<div class="inner">
			<div class="wrapper">
			
				<div class="logo">
					<img class="fa-spin" src="https://www.securityknowledgeframework.org/img/logos/logo.svg" width="120" height="120" alt="logo" />
				</div>
			
				<h1>SKF demo(Temporarily unavailable)</h1>

				<h3>username: admin<br />
				password: test-skf </h3>
				
				<p><a class="btn" href="https://demo.securityknowledgeframework.org">To demo!</a> <a class="btn" style="margin-left: 20px;" href="https://github.com/blabla1337/skf-flask/blob/master/README.md"><i class="fa fa-github" style="margin-right: 10px;"></i> Download SKF</a></p>
				
			</div>
		</div>
	</div>
	
</body>
<!--<img src="img/scrum.png" style="visibility:hidden;" width="1px;"/>-->
</html>
