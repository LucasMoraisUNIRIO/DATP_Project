<!DOCTYPE HTML>

<html>
	<head>

		<meta charset="utf-8">

		<meta name="viewport" content="initial-scale=1">

		<meta name="viewport" content="user-scalable=yes,width=device-width,initial-scale=1"><title>Escape Velocity by HTML5 UP</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="css/main.css" type="text/css">

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700,900">


		@yield('header')

	</head>

	<body>
		<nav id="nav">
			<ul>
				<li class="current" style="white-space: nowrap;"><a href="index.html">Home</a></li>
				<li class="opener" style="user-select: none; cursor: pointer; white-space: nowrap;">
					<a href="#">Dropdown</a>
					<ul class="dropotron level-0" style="user-select: none; display: none; position: absolute; z-index: 1000;">
						<li style="white-space: nowrap;"><a href="#" style="display: block;">Lorem ipsum</a></li>
						<li style="white-space: nowrap;"><a href="#" style="display: block;">Magna veroeros</a></li>
						<li style="white-space: nowrap;"><a href="#" style="display: block;">Etiam nisl</a></li>
						<li class="opener" style="user-select: none; cursor: pointer; white-space: nowrap;">
							<a href="#" style="display: block;">Sed consequat</a>
							<ul style="user-select: none; display: none; position: absolute; z-index: 1001;" class="dropotron level-1">
								<li style="white-space: nowrap;"><a href="#" style="display: block;">Lorem dolor</a></li>
								<li style="white-space: nowrap;"><a href="#" style="display: block;">Amet consequat</a></li>
								<li style="white-space: nowrap;"><a href="#" style="display: block;">Magna phasellus</a></li>
								<li style="white-space: nowrap;"><a href="#" style="display: block;">Etiam nisl</a></li>
								<li style="white-space: nowrap;"><a href="#" style="display: block;">Sed feugiat</a></li>
							</ul>
						</li>
						<li style="white-space: nowrap;"><a href="#" style="display: block;">Nisl tempus</a></li>
					</ul>
				</li>
				<li style="white-space: nowrap;"><a href="left-sidebar.html">Left Sidebar</a></li>
				<li style="white-space: nowrap;"><a href="right-sidebar.html">Right Sidebar</a></li>
				<li style="white-space: nowrap;"><a href="no-sidebar.html">No Sidebar</a></li>
			</ul>
		</nav>
		@yield('content')
	<footer>

		<div id="footer-wrapper" class="wrapper">
			<div class="title">The Rest Of It</div>
			<div id="footer" class="container">
				<header class="style1">
					<h2>Ipsum sapien elementum portitor?</h2>
					<p>
						Sed turpis tortor, tincidunt sed ornare in metus porttitor mollis nunc in aliquet.<br>
						Nam pharetra laoreet imperdiet volutpat etiam consequat feugiat.
					</p>
				</header>
				<hr>
				<div class="row 150%">
					<div class="6u 12u(mobile)">

						<!-- Contact Form -->
							<section>
								<form method="post" action="#">
									<div class="row 50%">
										<div class="6u 12u(mobile)">
											<input type="text" name="name" id="contact-name" placeholder="Name">
										</div>
										<div class="6u 12u(mobile)">
											<input type="text" name="email" id="contact-email" placeholder="Email">
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<textarea name="message" id="contact-message" placeholder="Message" rows="4"></textarea>
										</div>
									</div>
									<div class="row">
										<div class="12u">
											<ul class="actions">
												<li><input type="submit" class="style1" value="Send"></li>
												<li><input type="reset" class="style2" value="Reset"></li>
											</ul>
										</div>
									</div>
								</form>
							</section>

					</div>
					<div class="6u 12u(mobile)">

						<!-- Contact -->
							<section class="feature-list small">
								<div class="row">
									<div class="6u 12u(mobile)">
										<section>
											<h3 class="icon fa-home">Mailing Address</h3>
											<p>
												Untitled Corporation<br>
												1234 Somewhere Rd #987<br>
												Nashville, TN 00000-0000
											</p>
										</section>
									</div>
									<div class="6u 12u(mobile)">
										<section>
											<h3 class="icon fa-comment">Social</h3>
											<p>
												<a href="#">@untitled-corp</a><br>
												<a href="#">linkedin.com/untitled</a><br>
												<a href="#">facebook.com/untitled</a>
											</p>
										</section>
									</div>
								</div>
								<div class="row">
									<div class="6u 12u(mobile)">
										<section>
											<h3 class="icon fa-envelope">Email</h3>
											<p>
												<a href="#">info@untitled.tld</a>
											</p>
										</section>
									</div>
									<div class="6u 12u(mobile)">
										<section>
											<h3 class="icon fa-phone">Phone</h3>
											<p>
												(000) 555-0000
											</p>
										</section>
									</div>
								</div>
							</section>

					</div>
				</div>
				<hr>
			</div>
			<div id="copyright">
				<ul>
					<li>© Diretório Acadêmico Tércio Paccitti</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</div>
		</div>

	</footer>

		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/skel-viewport.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>

		<!-- <div id="titleBar">
			<a href="#navPanel" class="toggle"></a>
			<span class="title"><h1><a href="index.html"><img id="logoPrinc" src="images/DATP2.png" alt="Logo DATP"></a></h1><p>A free responsive site template by HTML5 UP</p></span>
		</div>
		<div id="navPanel">
			<nav>
							<a class="link depth-0" href="index.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Home</a>
							<a class="link depth-0" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Dropdown</a>
							<a class="link depth-1" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-1"></span>Lorem ipsum</a>
							<a class="link depth-1" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-1"></span>Magna veroeros</a>
							<a class="link depth-1" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-1"></span>Etiam nisl</a>
							<a class="link depth-1" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-1"></span>Sed consequat</a>
							<a class="link depth-2" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-2"></span>Lorem dolor</a>
							<a class="link depth-2" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-2"></span>Amet consequat</a>
							<a class="link depth-2" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-2"></span>Magna phasellus</a>
							<a class="link depth-2" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-2"></span>Etiam nisl</a>
							<a class="link depth-2" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-2"></span>Sed feugiat</a>
							<a class="link depth-1" href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-1"></span>Nisl tempus</a>
							<a class="link depth-0" href="left-sidebar.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Left Sidebar</a>
							<a class="link depth-0" href="right-sidebar.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>Right Sidebar</a>
							<a class="link depth-0" href="no-sidebar.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="indent-0"></span>No Sidebar</a>
			</nav>
		</div> -->

		@yield('footer')
	</body>

</html>
