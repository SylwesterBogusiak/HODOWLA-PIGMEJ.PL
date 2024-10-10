<body class="is-preload homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
						
							<div id="logo2">
							<h1><a href="/">Wyjątkowe i rzadkie ryby akwariowe.</a></h1>
								<span><img style="display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;" src="images/HODOWLA-PIGMEJ-mini.png"></span>
							</div>
							

							<?php
							/*
						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="current"><a href="index.html">Welcome</a></li>
									<li>
										<a href="#">Dropdown</a>
										<ul>
											<li><a href="#">Lorem ipsum dolor</a></li>
											<li><a href="#">Magna phasellus</a></li>
											<li>
												<a href="#">Phasellus consequat</a>
												<ul>
													<li><a href="#">Lorem ipsum dolor</a></li>
													<li><a href="#">Phasellus consequat</a></li>
													<li><a href="#">Magna phasellus</a></li>
													<li><a href="#">Etiam dolore nisl</a></li>
												</ul>
											</li>
											<li><a href="#">Veroeros feugiat</a></li>
										</ul>
									</li>
									<li><a href="left-sidebar.html">Left Sidebar</a></li>
									<li><a href="right-sidebar.html">Right Sidebar</a></li>
									<li><a href="no-sidebar.html">No Sidebar</a></li>
								</ul>
							</nav>
						*/
						?>

					</header>
				</div>

			<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="col-7 col-12-medium">
								<h2>HODOWLA "PIGMEJ".</h2>
								<p>Oferujemy wyjątkowe i rzadkie ryby akwariowe .</p>
							</div>
							<div class="col-5 col-12-medium">
								<ul>
									<li><a href="/offer" class="button large icon solid fa-arrow-circle-right">Oferta</a></li>
									<li><a href="#content" class="button alt large icon solid fa-question-circle">Więcej info</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			<!-- Features -->
				<div id="features-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/livebearers.png" alt="" /></a>
										<div class="inner">
											<header>
												<h2>Dzikie żyworódki</h2>
												<p>Odmiany spotykane w naturze</p>
											</header>
											<p>Specjalizujemy się w hodowli dzikich odmian żyworódek jak m.in Mieczyk Pigmej (Xiphophorus Pygmeatus) lub Wieloplamka (Phalloceros caudimaculatus). </p>
										</div>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/corys.png" alt="" /></a>
										<div class="inner">
											<header>
												<h2>Rzadkie odmiany ryb dennych</h2>
												<p>Różne kiryskowate i zbrojnikowate</p>
											</header>
											<p>Hodujemy rzadkie odmiany ryb kiryskowatych jak np. Kirysek Pigmej (Corydoras Pygematus).</p>
										</div>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/other.png" alt="" /></a>
										<div class="inner">
											<header>
												<h2>Inne gatunki ...</h2>
												<p>Mamy w ofercie również ryby bardziej popularne</p>
											</header>
											<p>Na hodowli mamy wiele odmian ryb akwariowych. Rozmnażamy je aby rozszerzyć ofertę dla naszych klientów.</p>
										</div>
									</section>

							</div>
						</div>
					</div>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<div id="sidebar">
										<section class="widget thumbnails">
											<h3>Oferta</h3>
											<div class="grid">
												<div class="row gtr-50">
													<?php 
													foreach ($ads as $ad)
													{
														?>
													<div class="col-6"><a href="/offer" class="image fit"><img src="https://akwa-market.pl/u/<?=$ad['item_id']?>/pic_1.jpg" alt="" style="width:197px;height:110px;"/></a></div>
													
														<?php
													}
													?>
												
												</div>
											</div>
											<?php 
											/*
											<a href="#" class="button icon fa-file-alt">Więcej</a>
											*/
											?>

										</section>
									</div>

							</div>
							<div class="col-8 col-12-medium imp-medium">

								<!-- Content -->
									<div id="content">
									<section class="last">
											<h2>O Nas</h2>
											<p>Zaczynaliśmy wiele lat temu jako hodowla <strong>Kirysek</strong>. Jednak perturbacje życiowe zmusiły nas do kilkukrotnej zmiany miejsca hodowli.

											Zdobyte na przestrzeni lat doświaczenia pozwoliły nam wypracować skuteczne metody pracy z wymagającymi gatunkami ryb. Wybraliśmy sobie w tej branży akwarystycznej naprawdę niszowe zajęcie - rozmnażanie rzadkich gatunków ryb.
											Mamy w ofercie egzotyczne i mało popularne wśród akwarystów ryby, które są wręcz rarytasami na rynku wśród znawców z branży. </p>
										</section>
										<section class="last">
											<h2>Gdzie sprzedajemy?</h2>
											<p>Ryby z hodowli <strong>Pigmej</strong>, można kupić przez znane serwisy ogłoszeniowe lub odwiedzając naszą hodowlę.
											Mamy swoją ofertę wystawioną na portalu <a href="https://OLX.pl">OLX.PL</a>, oraz na <a href="https://akwa-market.pl">AKWA-MARKET.PL</a>. </p>
											<p>Mamy szerokie doświadczenie w hodowli i w kwestii odpowiedniego transportu ryb. Ryby wysyłamy na całą Polskę. </p>
											<a href="/offer" class="button icon solid fa-arrow-circle-right">Zobacz ofertę</a>
										</section>
									</div>

							</div>
						</div>
					</div>
				</div>
