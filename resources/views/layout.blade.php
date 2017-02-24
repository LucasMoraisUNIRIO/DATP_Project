<!DOCTYPE HTML>

<html>
	<head>

		<meta charset="utf-8">

		<meta name="viewport" content="initial-scale=1">

		<meta name="viewport" content="user-scalable=yes,width=device-width,initial-scale=1"><title>Diretório Acadêmico Tércio Pacitti</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" href="http://sstatic.net/stackoverflow/img/favicon.ico">

		<link rel="stylesheet" href="css/main.css" type="text/css">

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700,900">

		<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

		<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

		<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

		@yield('header')

	</head>

	<body>
		<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img id="logoMin" src="images/DATP min.png" alt="Logo DATP" style="height: 50px"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
										<li>
											<a class="page-scroll" href="home">Home</a>
										</li>
                    <li>
                        <a class="page-scroll" href="sobre">Sobre Nós</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="eventos">Eventos</a>
                    </li>
                    <li>
                        <a id="last-scroll" class="page-scroll" href="contato">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
		@yield('content')
	<footer>

		<div id="footer-wrapper" class="wrapper">
			<div id="footer" class="container">
			<div id="copyright">
				<ul>
					<li>© Diretório Acadêmico Tércio Paccitti</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</div>
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
