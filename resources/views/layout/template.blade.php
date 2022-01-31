<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="single is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="{{route('index')}}">Blog</a></h1>
						
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>

						

						

					</section>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2>@yield('titulo')</h2>
										<p>@yield('subtitulo')</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">@yield('fecha')</time>
										<a href="#" class="author"><span class="name">@yield('autor')</span><img src="@yield('imagen_autor')" alt="" /></a>
									</div>
								</header>
								<span class="image featured"><img src="@yield('imagen_texto')" alt="" /></span>
								<p>@yield('contenido')</p>
                                
								<footer>
									<ul class="stats">
										<li><a href="{{route('index')}}">Home</a></li>
									</ul>
								</footer>
							</article>

					</div>

			

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>