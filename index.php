<?php

if (empty($_SERVER['HTTPS'])) {
    header('Location: https://www.securityknowledgeframework.org/');
    exit();
}

header('Strict-Transport-Security: max-age=16070400; includeSubDomains');
header('X-Frame-Options: deny');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');

$api_key_demo = "m776861145-d60d8f272b3b299802ea4af8";
$api_key_www = "m776861146-97cc8bd376321f69e6286cfc";

?>
<!DOCTYPE html>
<html lang="en">
<!-- woot -->
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
    <meta name="globalsign-domain-verification" content="klFJ7CXzEcqzVWABpNchW7Nb2-fem1Rolelu-Hs4Es" /> 
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <title>Security Knowledge Framework</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Ruda' rel='stylesheet' type='text/css'>
	
	<script src="js/modernizr-2.6.2.min.js"></script>
	
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" class="index">
	
	<div class="gradient">
	
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
                    <li class="active">
                        <a onclick="/index.php">Home</a>
                    </li>
                    <li>
                        <a onclick="/demo.php">Demo</a>
                    </li>
                    <li>
                        <a onclick="http://skf.readme.io">Documentation</a>
                    </li>
                    <li>
                        <a href="https://github.com/blabla1337/skf-flask">Download</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
	
    <header>
        <div class="container">	
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
						<div class="mobile">
							<img src="img/logos/logo-seed.svg" width="150" height="150" /> 
						</div>
						<div class="left">					
							<span class="skills">Training developers in writing secure code</span>
							<p>SKF is a fully open-source Python-Flask web-application that uses the OWASP Application Security Verification Standard to train you and your team in writing secure code, by design.</p>
							<ul>
								<li><a class="solid" href="https://github.com/blabla1337/skf-flask"><i class="fa fa-github"></i>Fork on Github</a></li>
                                <li><a href="https://securityknowledgeframework.org/demo.php" class="outline">View demo</a></li>
							</ul>
						</div>
						<div class="right">
							<img src="img/logos/logo-seed2.svg" width="250" height="250" />
						</div>
                    </div>
                </div>
            </div>
        </div>
    </header>
	
	<!-- News -->
	
	<section id="notification">
		<div class="inner">
			<div class="item">
				<div class="date">
					<span class="day">24</span>
					<span class="month">June</span>
					<span class="year">2015</span>
				</div>
				<div class="text">
					<h4>Devopsdays Amsterdam</h4>
					<p>We will be providing an extended workshop about skf for devops!
					<a href="http://www.devopsdays.org/events/2015-amsterdam/">Visit the website for more information</a>
					</p>
				</div>
			</div>
			<div class="item">
				<div class="date">
					<span class="day">19</span>
					<span class="month">June</span>
					<span class="year">2015</span>
				</div>
				<div class="text">
					<h4>New release!</h4>
					<p>New pre-development items and code examples to fend of some new attacks!</p>
				</div>
			</div>
		</div>
	</section>	
	
	</div>

	<!-- Details -->
	
	<section id="details">
		<div class="container">
			<div class="row two">
			
				<!-- Detail Processing Functions -->
			
				<div class="col">
					<div class="inner">
						<div class="image">
							<img src="img/icons/processing-functions.svg" width="380" height="280" />
						</div>
						<div class="text">
							<h3>Detect possible threats in your application</h3>
							<p>In pre-development detect possible threats based on the processing functions on your application.</p>
						</div>
					</div>
				</div>
				
				<!-- Detail Checklist -->
				
				<div class="col">
					<div class="inner">
						<div class="image">
							<img src="img/icons/checklist.svg" width="380" height="280" />
						</div>
						<div class="text">
							<h3>Run OWASP ASVS Checklists</h3>
							<p>Harden your application functions in post-development by running OWASP ASVS checklists, complete with feedback and solutions.</p>
						</div>
					</div>
				</div>
				
				<!-- Detail Code Examples -->
				
				<div class="col">
					<div class="inner">
						<div class="image">
							<img src="img/icons/knowledgebase.svg" width="380" height="280" />
						</div>
						<div class="text">
							<h3>Learn about threats and vulnerabilities in the SKF knowledge base</h3>
							<p>An extensive library of common hacks and exploits, learn the hacker mindset and keep your project secure.</p>
						</div>
					</div>
				</div>
				
				<!-- Detail Code Examples -->
				
				<div class="col">
					<div class="inner">
						<div class="image">
							<img src="img/icons/code-examples.svg" width="380" height="280" />
						</div>
						<div class="text">
							<h3>Learn to code secure from best practice code examples</h3>
							<p>An extensive library of code examples for a wide range of functions, beautifully commented.</p>
						</div>
					</div>
				</div>


				
			</div>
		</div>
	</section>
	
	<!-- Info -->
	
	<section id="lower">
		<div class="container">
			<div class="row three">
				
				<div class="col">
					<div class="inner">
						<!--<i class="fa fa-cog"></i>-->
						<h3>Demo</h3>
						<p>We have set up a demo version where you can test the SKF Application. Check it out!</p>
						<p><a href="https://www.securityknowledgeframework.org/demo.php" target="_blank">Go</a></p>
					</div>
				</div>

				<div class="col">
					<div class="inner">
						<!--<i class="fa fa-book"></i>-->
						<h3>Documentation</h3>
						<p>Getting started or need more information? Check out our documentation here.</p>
						<p><a href="http://skf.readme.io/">Go</a></p>
					</div>
				</div>

				<div class="col">				
					<div class="inner">
						<!--<i class="fa fa-life-ring"></i>-->
						<h3>Support</h3>
						<p>Request support here in case our documentation is not sufficient.</p>
						<p><a href="http://skf.readme.io/v1.0/discuss">Go</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- About -->
	
    <section class="about" id="about">
        <div class="container">
			<div class="col left">
				<div class="inner">
					<h3>What is SKF?</h3>
					<p>Over 10 years of experience in web application security bundled into a single application. The Security Knowledge Framework is a vital asset to the coding toolkit of you and your development team. Use SKF to learn and integrate security by design in your web application.</p><p> SKF is an open source security knowledgebase including <b>manageble projects</b> with <b>checklists</b> and best practice <b>code examples</b> in multiple programming languages showing you how to prevent hackers gaining access and running exploits on your application.</p>
					<h3>In a nutshell</h3>
					<ul>
						<li>Training your developers in writing secure code</li>
						<li>Security support pre-development (Security by design, early feedback of possible security issues)</li>
						<li>Security support post-development(Double check your code by means of the OWASP ASVS checklists )</li>
						<li>Code examples for secure coding</li>				
					</ul>
				</div>
			</div>
			<div class="col right">
				<div class="inner">
					<h3>Authors</h3>
					<div class="user">
						<div class="photo">
							<img width="16" height="16" src="img/logos/logo.svg">
							<i class="fa fa-user-secret"></i>
							<span class="glow"></span>
						</div>
						<div class="text">
							<h4>Glenn ten Cate</h4>
							<p>As a coder, hacker, speaker, trainer and security researcher Glenn has over 10 years experience in the field of security. Employed as a security engineer at Schuberg Philis in the Netherlands and speaking at multiple security conferences. His goals is to create an open-source software development life cycle with the tools and knowledge gathered over the years.</p>
							<p><span class="square"><i class="fa fa-linkedin"></i></span> <a class="linkedin" href="https://www.linkedin.com/profile/view?id=140628259">Linkedin Profile</a></p>
						</div>
					</div>
					<div class="user">
						<div class="photo">
							<img width="16" height="16" src="img/logos/logo.svg">
							<i class="fa fa-user-secret"></i>
							<span class="glow"></span>
						</div>
						<div class="text">
							<h4>Riccardo ten Cate</h4>
							<p>As a freelance penetration tester from the Netherlands Riccardo specialises in web-application security and has extensive knowledge in securing web applications in multiple coding languages.</p>
							<p><span class="square"><i class="fa fa-linkedin"></i></span> <a class="linkedin" href="https://www.linkedin.com/profile/view?id=288596459">Linkedin Profile</a></p>
						</div>
					</div>
				</div>
			</div>
        </div>
    </section>	
	
	<!-- Footer -->
	
	<footer>
		<div class="gradient">
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
				&copy; 2015 Security Knowledge Framework
			</div>
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
