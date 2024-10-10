<body class="is-preload homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<div id="logo2">
								<h1><a href="/">Nasza oferta.</a></h1>
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

	

			<!-- Features -->
				<div id="features-wrapper">
					<div class="container">
						<div class="row">
							

							<?php 

							foreach ($ads as $ad)
							{
							?>
								<div class="col-4 col-12-medium">

									<!-- Box -->
									<section class="box feature">
										<a href="https://akwa-market.pl/details?id=<?=$ad['item_id']?>" class="image featured"><img src="https://akwa-market.pl/u/<?=$ad['item_id']?>/pic_1.jpg" alt="" style="width:440px;height:330px;"/></a>
										<div class="inner">
											<header>
												<h2><?=mb_strimwidth($ad['item_name'],0,30,"...")?></h2>
											
											</header>
											<p><?=strip_tags(html_entity_decode(mb_strimwidth($ad['item_description'], 0, 90, "...")))?> </p>
										</div>
									</section>

								</div>
					

							<?php

							}
							?>

					
						
					</div>
				</div>
			</div>
