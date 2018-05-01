<?php
	session_start();
	
	if($_SESSION["login"] != 1000)
	{
		$url = "../login/";
		echo "<meta http-equiv='refresh' content='0;URL=$url' />";
	}
?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Medische Fiches Online!</title>
		<meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="/mefi/images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="/mefi/bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="/mefi/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="/mefi/css/animations.css" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="/mefi/css/style.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="/mefi/css/custom.css" rel="stylesheet">
		
		<!-- php scripts include -->
		<?php
			include('/home/chiroschelle/public_html/mefi/php/functions.php');
		?>
		<script>
		function clearbody() {
	        var maindiv = document.getElementById('adminContainer')[0];
	        var myNode = maindiv.getElementsByTagName('table');
            myNode.innerHTML = "";
		}
        </script>
	</head>

	<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ --> 
		<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix">

							<!-- logo -->
							<div class="logo smooth-scroll">
							</div>

							<!-- name-and-slogan -->
							<div class="site-name-and-slogan smooth-scroll">
								<div class="site-name"><a href="/mefi/">Chiro Schelle</a></div>
								<div class="site-slogan">Medische Fiches Online!</div>
							</div>

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-8">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<li><a href="#"><?php echo "Hey ".$_SESSION["user"] ?></a></li>
												<li><a href="index.php?function=Logout">Uitloggen</a></li>
											</ul>
										</div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
		<!-- header end -->

		<!-- banner start -->
		<!-- ================ -->
		<div id="banner" class="banner">
			<div class="banner-image"></div>
			<div class="banner-caption">
				<div class="container adminContainer" id="adminContainer">
					<form action="/mefi/admin/" method="POST">
						<button type="submit" class="btn btn-warning">Vegie's</button>
						<input name="function" value="Vegie" hidden/>
					</form>
					<form action="/mefi/admin/" method="POST">
						<button type="submit" class="btn btn-warning">Voeding</button>
						<input name="function" value="Allergie" hidden/>
					</form>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
							<h3 class="Nieuwe Medische Fiche"></h3>
							<!--Zoeken op fiches-->
							
							<form method="POST">
								<div id="imaginary_container"> 
									<div class="input-group stylish-input-group">
										<input name="zoek" type="text" class="form-control"  placeholder="Zoek op naam, voornaam of afdeling" >
										<input name="function" value="Zoeken" hidden>
										<span class="input-group-addon">
											<button type="submit" onclick="clearbody()">
												<span class="glyphicon glyphicon-search"></span>
											</button>  
										</span>
									</div>
								</div>
							</form>
						</div>
					</div>
					<?php
						if(isset($_POST["function"]))
						{		
							if($_POST["function"] == "Zoeken")
							{
								echo Zoeken($_POST["zoek"]);
							}
							
							if($_POST["function"] == "Vegie")
							{
								echo Vegie();
							}
							
							if($_POST["function"] == "Allergie")
							{
								echo Allergie();
							}
						}
						
						if(isset($_GET["function"]))
						{
							if($_GET["function"] == "Fiche")
							{
							    echo IndividueleFiche($_GET["id"]);
							}
						}
					?>
				</div>
			</div>
		</div>
		<!-- banner end -->
		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="/mefi/plugins/jquery.min.js"></script>
		<script type="text/javascript" src="/mefi/bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="/mefi/plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="/mefi/plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Backstretch javascript -->
		<script type="text/javascript" src="/mefi/plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="/mefi/plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="/mefi/js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="/mefi/js/custom.js"></script>

	</body>
</html>
