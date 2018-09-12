<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>Stock Investment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Stock Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- countdown css -->
    <link rel="stylesheet" href="css/jquery.countdown.css" />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- //webfonts -->
</head>

<body>
	<!-- header -->
	<header>
		<div class="container">
			<!-- nav -->
			<nav class="navbar navbar-expand-lg navbar-light py-4">
				<!-- logo -->
				<h1>
					<a class="navbar-brand" href="{{ url('/') }}">
						Trading Investment
					</a>
				</h1>
				<!-- //logo -->
				<button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- main nav -->
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-lg-auto text-center">
						<li class="nav-item active  mr-lg-3">
							<a class="nav-link" href="{{ url('index') }}">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item mr-lg-3">
							<a class="nav-link" href="{{ url('about') }}">about</a>
						</li>
						<li class="dropdown nav-item">
							<a href="#" data-toggle="dropdown" class="nav-link">
								Lessons
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu multi-level" role="menu">
								<li class="nav-item">
									<a href="portfolio.html" class="nav-link">Beginners</a>
								</li>
								<li class="nav-item">
									<a href="portfolio.html" class="nav-link">Professional</a>
								</li>
								<li class="nav-item">
									<a href="{{ url('comingsoon') }}" class="nav-link">Coming soon</a>
								</li>
								
							</ul>
						</li>

						<li class="dropdown nav-item">
							<a href="#" data-toggle="dropdown" class="nav-link">
								Setups
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu multi-level" role="menu">
								<li class="nav-item">
									<a href="portfolio.html" class="nav-link">Weekly</a>
								</li>
								<li class="nav-item">
									<a href="portfolio.html" class="nav-link">Daily</a>
								</li>
								
							</ul>
						</li>
						<li class="nav-item mr-lg-3">
							<a class="nav-link" href="{{ url('services') }}">Articles</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('contact') }}">contact</a>
						</li>
						<li>
							<button type="button" class="btn btn-danger ml-lg-5 w3ls-btn" data-toggle="modal" aria-pressed="false" data-target="#exampleModal">
								Login
							</button>
						</li>
					</ul>
				</div>
				<!-- //main nav -->
			</nav>
			<!-- //nav -->
		</div>
	</header>
	<!-- //header -->

	 @yield('content')

	<!-- footer -->
	<footer class="py-sm-5">
		<div class="container">
			<div class="row py-5">
				<!-- footer grid1 -->
				<div class="col-lg-3 col-sm-6">
					<h2>
						<a class="navbar-brand" href="{{ url('/') }}">
							stock
						</a>
					</h2>
					<div class="fv3-contact mt-3">
						<span class="fas fa-home mr-2"></span>
						<p>90 Street, City, State 34789.</p>
					</div>
					<div class="fv3-contact">
						<span class="fas fa-phone-volume mr-2"></span>
						<p>+456 123 7890</p>
					</div>
					<div class="fv3-contact">
						<span class="fas fa-envelope-open mr-2"></span>
						<a href="mailto:example@email.com" class="text-secondary">info@example.com</a>
					</div>
				</div>
				<!-- //footer grid1 -->
				<!-- footer grid2 -->
				<div class="col-lg-3  col-sm-6 footv3-left text-lg-center my-sm-0 mt-5">
					<h3 class="mb-3">our services</h3>
					<ul class="list-agileits">
						<li>
							<a href="{{ url('index') }}">
								quality resourcing
							</a>
						</li>
						<li class="my-3">
							<a href="{{ url('index') }}">
								inventory tracking
							</a>
						</li>
						<li class="mb-3">
							<a href="{{ url('index') }}">
								financial planning
							</a>
						</li>
						<li>
							<a href="{{ url('index') }}">
								budget friendly
							</a>
						</li>
					</ul>
				</div>
				<!-- //footer grid2 -->
				<!-- footer grid3 -->
				<div class="col-lg-3  col-sm-6 footv3-left text-lg-center my-lg-0 mt-sm-5 mt-5">
					<h3 class="mb-3">Navigation</h3>
					<ul class="list-agileits">
						<li>
							<a href="{{ url('index') }}">
								Home
							</a>
						</li>
						<li class="my-3">
							<a href="{{ url('about') }}">
								About Us
							</a>
						</li>
						<li class="mb-3">
							<a href="{{ url('services') }}">
								Services
							</a>
						</li>
						<li>
							<a href="{{ url('contact') }}">
								Contact Us
							</a>
						</li>
					</ul>
				</div>
				<!-- //footer grid3 -->
				<!-- footer grid4  -->
				<div class="col-lg-3  col-sm-6 footv3-left my-lg-0 mt-5">
					<h3 class="mb-3">subscribe to newsletter</h3>
					<form action="#" method="post">
						<div class="form-group">
							<input type="email" class="form-control  bg-dark border-0" id="email" placeholder="Enter email" name="email" required>
						</div>
						<div class="form-group">
							<input type="Submit" class="form-control bg-secondary text-white border-0" id="sub" value="submit" name="sub">
						</div>
					</form>
				</div>
				<!-- //footer grid4 -->
			</div>
			<div class="cpy-right text-center  pt-5 pb-sm-0 pb-3">
				<p class="text-secondary">© 2018 Stock Investment. All rights reserved | Design by
					<a href="http://twitter.com/AllanKiptalam" class="text-white"> Allan Kiptalam.</a>
				</p>
			</div>
		</div>
		<!-- //footer container -->
	</footer>
	<!-- //footer -->
	<!-- Login modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Login</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Username</label>
							<input type="text" class="form-control border" placeholder=" " name="Name" id="recipient-name" required="">
						</div>
						<div class="form-group">
							<label for="password" class="col-form-label">Password</label>
							<input type="password" class="form-control border" placeholder=" " name="Password" id="password" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control border text-white" value="Login">
						</div>
						<div class="row sub-w3l my-3">
							<div class="col sub-agile">
								<input type="checkbox" id="brand1" value="">
								<label for="brand1" class="text-muted">
									<span></span>Remember me?</label>
							</div>
							<div class="col forgot-w3l text-right text-dark">
								<a href="#" class="text-white">Forgot Password?</a>
							</div>
						</div>
						<p class="text-center">Don't have an account?
							<a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-dark font-weight-bold">
								Register Now</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //Login modal -->
	<!-- Register modal -->
	<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel1">Register</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Username</label>
							<input type="text" class="form-control border" placeholder=" " name="Name" id="recipient-rname" required="">
						</div>
						<div class="form-group">
							<label for="recipient-email" class="col-form-label">Email</label>
							<input type="email" class="form-control border" placeholder=" " name="Email" id="recipient-email" required="">
						</div>
						<div class="form-group">
							<label for="password1" class="col-form-label">Password</label>
							<input type="password" class="form-control border" placeholder=" " name="Password" id="password1" required="">
						</div>
						<div class="form-group">
							<label for="password2" class="col-form-label">Confirm Password</label>
							<input type="password" class="form-control border" placeholder=" " name="Confirm Password" id="password2" required="">
						</div>
						<div class="sub-w3l">
							<div class="sub-agile">
								<input type="checkbox" id="brand2" value="">
								<label for="brand2" class="mb-3">
									<span></span>I Accept to the Terms & Conditions</label>
							</div>
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control bg-light text-white" value="Register">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- // Register modal -->
	<!-- subscribe form -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel2">Subscribe now!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Email</label>
							<input type="email" class="form-control border" placeholder=" " name="email" id="usermail" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control text-white" value="Subscribe">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
    <!-- //subscribe form -->
    <!-- js-->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- Countdown-Timer-JavaScript -->
    <script src="js/simplyCountdown.js"></script>
    <!-- easy to customize -->
    <script>
        $('#simply-countdown-losange').simplyCountdown({
            year: 2028,
            month: 12,
            day: 31
        });
    </script>
    <!-- move-top -->
    <script src="js/move-top.js"></script>
    <!-- easing -->
    <script src="js/easing.js"></script>
    <!-- smooth scroll -->
    <script src="js/SmoothScroll.min.js"></script>
    <!--  necessary snippets for few javascript files -->
    <script src="js/stock.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js "></script>
</body>

</html>