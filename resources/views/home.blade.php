@extends('layout')

@section('header')

@stop

@section('content')

<div class="homepage">
		<div id="page-wrapper">
				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<div class="homepage-hero-module">
	    <div class="video-container">
	        <div class="filter"></div>
	        <video autoplay="" loop="" class="fillWidth">
	            <source src="Videos/Meeting-Room.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
	            <source src="Videos/Meeting-Room.webm" type="video/webm">Your browser does not support the video tag. I suggest you upgrade your browser.
	        </video>
	        <div class="poster hidden">

	        </div>
	    </div>
	</div>
							<div id="logo">
								<h1><a href="index.html"><img id="logoPrinc" src="images/DATP2.png" alt="Logo DATP"></a></h1>
								<p>A free responsive site template by HTML5 UP</p>
							</div>

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

					</div>
				</div>
				<div id="intro-wrapper" class="wrapper style1">
					<div class="title">The Introduction</div>
					<section id="intro" class="container">
						<p class="style1">So in case you were wondering what this is all about ...</p>
						<p class="style2">
							Escape Velocity is a free responsive<br class="mobile-hide">
							site template by <a href="http://html5up.net" class="nobr">HTML5 UP</a>
						</p>
						<p class="style3">It's <strong>responsive</strong>, built on <strong>HTML5</strong> and <strong>CSS3</strong>, and released for
						free under the <a href="http://html5up.net/license">Creative Commons Attribution 3.0 license</a>, so use it for any of
						your personal or commercial projects – just be sure to credit us!</p>
						<ul class="actions">
							<li><a href="#" class="button style3 big">Proceed</a></li>
						</ul>
					</section>
				</div>

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">The Details</div>
					<div id="main" class="container">

						<!-- Image -->
							<a href="#" class="image featured">

							</a>

						<!-- Features -->
							<section id="features">
								<header class="style1">
									<h2>Dolor consequat feugiat amet veroeros</h2>
									<p>Feugiat dolor nullam orci pretium phasellus justo</p>
								</header>
								<div class="feature-list">
									<div class="row">
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-comment">Mattis velit diam vulputate</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-refresh">Lorem ipsum dolor sit veroeros</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
											</section>
										</div>
									</div>
									<div class="row">
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-picture-o">Pretium phasellus justo lorem</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-cog">Tempus sed pretium orci</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
											</section>
										</div>
									</div>
									<div class="row">
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-wrench">Aliquam consequat et feugiat</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-check">Dolore laoreet aliquam mattis</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
											</section>
										</div>
									</div>
								</div>
								<ul class="actions actions-centered">
									<li><a href="#" class="button style1 big">Get Started</a></li>
									<li><a href="#" class="button style2 big">More Info</a></li>
								</ul>
							</section>

					</div>
				</div>

			<!-- Highlights -->
				<div class="wrapper style3">
					<div class="title">The Endorsements</div>
					<div id="highlights" class="container">
						<div class="row 150%">
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic02.jpg" alt=""></a>
									<h3><a href="#">Aliquam diam consequat</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic03.jpg" alt=""></a>
									<h3><a href="#">Nisl adipiscing sed lorem</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic04.jpg" alt=""></a>
									<h3><a href="#">Mattis tempus lorem</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
						</div>
					</div>
				</div>
		</div>
		<div id="titleBar">
			<a href="#navPanel" class="toggle"></a>
			<span class="title">
				<h1><a href="index.html"><img id="logoPrinc" src="images/DATP2.png" alt="Logo DATP"></a></h1>
					<p>A free responsive site template by HTML5 UP</p>
			</span>
		</div>
	</div>
@stop

@section('footer')

@stop
