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
								<p>Fruto dos alunos para os alunos</p>
							</div>

					</div>
				</div>
				<div id="intro-wrapper" class="wrapper style1">
					<div class="title">Introdução</div>
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
