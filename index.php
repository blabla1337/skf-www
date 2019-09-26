<?php

if (empty($_SERVER['HTTPS'])) {
    header('Location: https://www.securityknowledgeframework.org/');
    exit();
}

header('Strict-Transport-Security: max-age=16070400; includeSubDomains');
header('X-Frame-Options: deny');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');


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
	<link href='https://fonts.googleapis.com/css?family=Ruda' rel='stylesheet' type='text/css'>
	
	<script src="js/modernizr-2.6.2.min.js"></script>
	
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" class="index">
	
<script>
  ((window.gitter = {}).chat = {}).options = {
    room: 'Security-Knowledge-Framework/Lobby'
  };
</script>
<script src="https://sidecar.gitter.im/dist/sidecar.v1.js" async defer></script>
	
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
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="demo.php">Demo</a>
                    </li>
                    <li>
                        <a href="talks.php">Talks</a>
                    </li>
                    <li>
                        <a href="http://skf.readme.io">Documentation</a>
                    </li>
                    <li>
                        <a href="http://skf.readme.io/v1.0/docs/installation">Download</a>
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
	
	<!-- News 
	 # When item has link, add class "hasButton" to parent paragraph
	-->
	
	<section id="notification">
		<div class="inner">
			<div class="item hasImg">
				<div class="left">
					<div class="img">
						<img src="img/wasper.png" />
					</div>
				</div>
				<div class="text">
					<h4>Major new release SKF</h4>					
					<p>We are to announce that we are having a new Major release of SKF ready!</p>
					Release date <span class="date">27-09-2019</span> @OWASP AppSec Amstedam</p>
				</div>
			</div>
			<div class="item hasImg">
				<div class="left">
					<div class="img">
						<img src="img/wasper.png" />
					</div>
				</div>
				<div class="text">
					<h4>OWASP Appsec Amsterdam</h4>					
					<p>We will be doing a presentation about the new SKF release and demo the new features</p>
					<p class="footer"><span class="date">27-09-2019</span></p>
				</div>
			</div>
		</div>
	</section>	
	
	<div class="message">SKF proven useful? You can donate to the project on our <a href="https://www.owasp.org/index.php/OWASP_Security_Knowledge_Framework" target="_blank">OWASP Wiki page</a>.</div>
	
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
						<div class="avatar">
							<img src="img/team/glenn-ten-cate-hat.jpg" width="300" height="300" alt="Glenn ten Cate" />
						</div>
						<div class="text">
							<h4>Glenn ten Cate</h4>
							<p>As a coder, hacker, speaker, trainer and security researcher employed at ING Belgium Glenn has over 15 years experience in the field of security. One of the founders of defensive development def[dev]eu a security training and conference series dedicated to helping you build and maintain secure software and also speaking at multiple other security conferences in the world. His goals is to create an open-source software development life cycle with the tools and knowledge gathered over the years.</p>
							<p><span class="square"><i class="fa fa-linkedin"></i></span> <a class="linkedin" href="https://www.linkedin.com/in/glenn-ten-cate-11711a3b">Linkedin Profile</a></p>
						</div>
					</div>
					<div class="user">
						<div class="avatar">
							<img src="img/team/riccardo-ten-cate.jpg" width="300" height="300" alt="Riccardo ten Cate" />
						</div>
						<div class="text">
							<h4>Riccardo ten Cate</h4>
							<p>As a penetration tester from the Netherlands employed at Zerocopter Riccardo specialises in web-application security and has extensive knowledge in securing web applications in multiple coding languages.</p>
							<p><span class="square"><i class="fa fa-linkedin"></i></span> <a class="linkedin" href="https://www.linkedin.com/in/riccardo-ten-cate-a0b79780">Linkedin Profile</a></p>
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
				&copy; 2019 Security Knowledge Framework
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
