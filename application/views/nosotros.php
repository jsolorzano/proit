<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Home - Full Screen Image | Canvas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="inicio" class="standard-logo" data-dark-logo="<?php echo assets_url(); ?>images/logo-dark.png"><img src="<?php echo assets_url(); ?>images/logo.png" alt="Canvas Logo"></a>
						<a href="inicio" class="retina-logo" data-dark-logo="<?php echo assets_url(); ?>images/logo-dark@2x.png"><img src="<?php echo assets_url(); ?>images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="sub-title">

						<ul>
							<li class="current"><a href="inicio"><div>PROIT</div><span>Sobre Nosotros</span></a>
								<ul>
									<li><a href="nosotros"><div>Sobre Nosotros</div></a></li>
								</ul>
							</li>
							<li><a href="#"><div>Mercados</div><span>Buy Now</span></a>
								<ul>
									<li><a href="admin_p"><div>Administración Pública</div></a></li>
									<li><a href="ambiente"><div>Ambiente</div></a></li>
									<li><a href="agricultura"><div>Agricultura</div></a></li>
									<li><a href="energia"><div>Energía</div></a></li>
									<li><a href="industria"><div>Industria 4.0</div></a></li>
									<li><a href="mar"><div>Mar y Crecimiento Azul</div></a></li>
									<li><a href="salud"><div>Salud</div></a></li>
									<li><a href="servicios_f"><div>Servicios Financieros</div></a></li>
									<li><a href="telecomunicaciones"><div>Telecomunicaciones</div></a></li>
									<li><a href="transporte"><div>Transporte</div></a></li>
									<li><a href="ciudades_i"><div>Ciudades inteligentes y IOT</div></a></li>
								</ul>
							</li>
							<li><a href="#"><div>Soluciones</div><span>Amazing Elements</span></a>
								<ul>
									<li><a href="soluciones"><div>Soluciones de Negocios</div></a></li>
									<li><a href="intraestructura"><div>Infraestructura</div></a></li>
									<li><a href="seguridad"><div>Seguridad</div></a></li>
									<li><a href="plataformas"><div>Plataformas en Aplicaciones</div></a></li>
									<li><a href="redes_i"><div>Redes Inteligentes</div></a></li>
									<li><a href="gestion_s"><div>Gestión de servicios</div></a></li>
									<li><a href="outsourcing"><div>Outsourcing Global</div></a></li>
									<li><a href="productos"><div>Productos Compra</div></a></li>
								</ul>
							</li>
							<li>
								<a href="contacto"><div>Contactos</div><span>Información de contacto</span></a>
							</li>
						</ul>

						<!-- Top Cart
						============================================= -->
						<div id="top-cart">
							<a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
							<div class="top-cart-content">
								<div class="top-cart-title">
									<h4>Shopping Cart</h4>
								</div>
								<div class="top-cart-items">
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="<?php echo assets_url(); ?>images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Blue Round-Neck Tshirt</a>
											<span class="top-cart-item-price">$19.99</span>
											<span class="top-cart-item-quantity">x 2</span>
										</div>
									</div>
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="<?php echo assets_url(); ?>images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Light Blue Denim Dress</a>
											<span class="top-cart-item-price">$24.99</span>
											<span class="top-cart-item-quantity">x 3</span>
										</div>
									</div>
								</div>
								<div class="top-cart-action clearfix">
									<span class="fleft top-checkout-price">$114.95</span>
									<button class="button button-3d button-small nomargin fright">View Cart</button>
								</div>
							</div>
						</div><!-- #top-cart end -->

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('<?php echo assets_url(); ?>images/about/parallax.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">

			<div class="container clearfix">
				<h1>About Us</h1>
				<span>Everything you need to know about our Company</span>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li class="active">About Us</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_one_third">

						<div class="heading-block fancy-title nobottomborder title-bottom-border">
							<h4>Why choose <span>Us</span>.</h4>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

					</div>

					<div class="col_one_third">

						<div class="heading-block fancy-title nobottomborder title-bottom-border">
							<h4>Our <span>Mission</span>.</h4>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

					</div>

					<div class="col_one_third col_last">

						<div class="heading-block fancy-title nobottomborder title-bottom-border">
							<h4>What we <span>Do</span>.</h4>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

					</div>

				</div>

				<div class="section nomargin">
					<div class="container clearfix">

						<div class="col_one_fourth nobottommargin center" data-animate="bounceIn">
							<i class="i-plain i-xlarge divcenter icon-line2-directions"></i>
							<div class="counter counter-lined"><span data-from="100" data-to="846" data-refresh-interval="50" data-speed="2000"></span>K+</div>
							<h5>Lines of Codes</h5>
						</div>

						<div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="200">
							<i class="i-plain i-xlarge divcenter nobottommargin icon-line2-graph"></i>
							<div class="counter counter-lined"><span data-from="3000" data-to="15360" data-refresh-interval="100" data-speed="2500"></span>+</div>
							<h5>KBs of HTML Files</h5>
						</div>

						<div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="400">
							<i class="i-plain i-xlarge divcenter nobottommargin icon-line2-layers"></i>
							<div class="counter counter-lined"><span data-from="10" data-to="408" data-refresh-interval="25" data-speed="3500"></span>*</div>
							<h5>No. of Templates</h5>
						</div>

						<div class="col_one_fourth nobottommargin center col_last" data-animate="bounceIn" data-delay="600">
							<i class="i-plain i-xlarge divcenter nobottommargin icon-line2-clock"></i>
							<div class="counter counter-lined"><span data-from="60" data-to="1200" data-refresh-interval="30" data-speed="2700"></span>+</div>
							<h5>Hours of Coding</h5>
						</div>

					</div>
				</div>

				<div class="row common-height clearfix">

					<div class="col-sm-5 col-padding" style="background: url('<?php echo assets_url(); ?>images/team/3.jpg') center center no-repeat; background-size: cover;"></div>

					<div class="col-sm-7 col-padding">
						<div>
							<div class="heading-block">
								<span class="before-heading color">CEO &amp; Co-Founder</span>
								<h3>John Doe</h3>
							</div>

							<div class="row clearfix">

								<div class="col-md-6">
									<p>Employment respond committed meaningful fight against oppression social challenges rural legal aid governance. Meaningful work, implementation, process cooperation, campaign inspire.</p>
									<p>Advancement, promising development John Lennon, our ambitions involvement underprivileged billionaire philanthropy save the world transform. Carbon rights maintain healthcare emergent, implementation inspire social change solve clean water livelihoods.</p>
									<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a>
								</div>

								<div class="col-md-6">
									<ul class="skills">
										<li data-percent="80">
											<span>Wordpress</span>
											<div class="progress">
												<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="80" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
											</div>
										</li>
										<li data-percent="60">
											<span>CSS3</span>
											<div class="progress">
												<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="60" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
											</div>
										</li>
										<li data-percent="90">
											<span>HTML5</span>
											<div class="progress">
												<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="90" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
											</div>
										</li>
										<li data-percent="70">
											<span>jQuery</span>
											<div class="progress">
												<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="70" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
											</div>
										</li>
										<li data-percent="85">
											<span>Ruby</span>
											<div class="progress">
												<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="85" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
											</div>
										</li>
									</ul>
								</div>

							</div>

						</div>
					</div>

				</div>

				<div class="row common-height bottommargin-lg clearfix">

					<div class="col-sm-7 col-padding" style="background-color: #F5F5F5;">
						<div>
							<div class="heading-block">
								<span class="before-heading color">Developer &amp; Evangelist</span>
								<h3>Mary Jane</h3>
							</div>

							<div class="row clearfix">

								<div class="col-md-6">
									<p>Employment respond committed meaningful fight against oppression social challenges rural legal aid governance. Meaningful work, implementation, process cooperation, campaign inspire.</p>
									<p>Advancement, promising development John Lennon, our ambitions involvement underprivileged billionaire philanthropy save the world transform. Carbon rights maintain healthcare emergent, implementation inspire social change solve clean water livelihoods.</p>
									<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a>
								</div>

								<div class="col-md-6">
									<ul class="skills">
										<li data-percent="80">
											<span>Wordpress</span>
											<div class="progress">
												<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="80" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
											</div>
										</li>
										<li data-percent="60">
											<span>CSS3</span>
											<div class="progress">
												<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="60" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
											</div>
										</li>
										<li data-percent="90">
											<span>HTML5</span>
											<div class="progress">
												<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="90" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
											</div>
										</li>
										<li data-percent="70">
											<span>jQuery</span>
											<div class="progress">
												<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="70" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
											</div>
										</li>
										<li data-percent="85">
											<span>Ruby</span>
											<div class="progress">
												<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="85" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
											</div>
										</li>
									</ul>
								</div>

							</div>

						</div>
					</div>

					<div class="col-sm-5 col-padding" style="background: url('<?php echo assets_url(); ?>images/team/8.jpg') center center no-repeat; background-size: cover;"></div>

				</div>

				<div class="container clearfix">

					<div class="clear"></div>

					<div class="heading-block center">
						<h4>Our Clients</h4>
					</div>

					<ul class="clients-grid grid-6 nobottommargin clearfix">
						<li><a href="http://logofury.com/logo/enzo.html"><img src="<?php echo assets_url(); ?>images/clients/1.png" alt="Clients"></a></li>
						<li><a href="http://logofury.com"><img src="<?php echo assets_url(); ?>images/clients/2.png" alt="Clients"></a></li>
						<li><a href="http://logofaves.com/2014/03/grabbt/"><img src="<?php echo assets_url(); ?>images/clients/3.png" alt="Clients"></a></li>
						<li><a href="http://logofaves.com/2014/01/ladera-granola/"><img src="<?php echo assets_url(); ?>images/clients/4.png" alt="Clients"></a></li>
						<li><a href="http://logofaves.com/2014/02/hershel-farms/"><img src="<?php echo assets_url(); ?>images/clients/5.png" alt="Clients"></a></li>
						<li><a href="http://logofury.com/logo/food-fight-radio.html"><img src="<?php echo assets_url(); ?>images/clients/6.png" alt="Clients"></a></li>
						<li><a href="http://logofury.com"><img src="<?php echo assets_url(); ?>images/clients/7.png" alt="Clients"></a></li>
						<li><a href="http://logofury.com/logo/up-travel.html"><img src="<?php echo assets_url(); ?>images/clients/8.png" alt="Clients"></a></li>
						<li><a href="http://logofury.com/logo/caffi-bardi.html"><img src="<?php echo assets_url(); ?>images/clients/9.png" alt="Clients"></a></li>
						<li><a href="http://logofury.com/logo/bignix-design.html"><img src="<?php echo assets_url(); ?>images/clients/10.png" alt="Clients"></a></li>
						<li><a href="http://logofury.com/"><img src="<?php echo assets_url(); ?>images/clients/11.png" alt="Clients"></a></li>
						<li><a href="http://logofury.com/"><img src="<?php echo assets_url(); ?>images/clients/12.png" alt="Clients"></a></li>
					</ul>

				</div>

				<div class="section footer-stick">

					<h4 class="uppercase center">What <span>Clients</span> Say?</h4>

					<div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
						<div class="flexslider">
							<div class="slider-wrap">
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="<?php echo assets_url(); ?>images/testimonials/3.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
										<div class="testi-meta">
											Steve Jobs
											<span>Apple Inc.</span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="<?php echo assets_url(); ?>images/testimonials/2.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
										<div class="testi-meta">
											Collis Ta'eed
											<span>Envato Inc.</span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="<?php echo assets_url(); ?>images/testimonials/1.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
										<div class="testi-meta">
											John Doe
											<span>XYZ Inc.</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						<img src="<?php echo assets_url(); ?>images/footer-logo.png" alt="" class="footer-logo">

						Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.
					</div>

					<div class="col_half col_last tright">
						<div class="copyrights-menu copyright-links fright clearfix">
							<a href="#">Home</a>/<a href="#">About</a>/<a href="#">Features</a>/<a href="#">Portfolio</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
						</div>
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless nobottommargin si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="<?php echo assets_url(); ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo assets_url(); ?>js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?php echo assets_url(); ?>js/functions.js"></script>

</body>
</html>