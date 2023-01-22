<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Museum Quest</title>
	<script src="https://cdn.jsdelivr.net/npm/ol@v7.2.2/dist/ol.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol@v7.2.2/ol.css">
	<link rel="stylesheet" href="https://rawcdn.githack.com/SochavaAG/example-mycode/master/_common/css/reset.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="museums.css">

</head>

<body class="hero-anime">

	<div class="navigation-wrap bg-light start-header start-style">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">

						<a class="navbar-brand" href="museum3.html" target="_blank">Museum Hub</a>

						<button class="navbar-toggler" type="button" data-toggle="collapse"
							data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
							<ul class="navbar-nav py-4 py-md-0">
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
										aria-haspopup="true" aria-expanded="false">Home</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<a class="dropdown-item" href="#">Another action</a>
									</div>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="#events">Events</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="#explore">Explore</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="http://localhost/animated-epic-php-user-management-system-main/login.php" role="button"
										aria-haspopup="true" aria-expanded="false">Register</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<a class="dropdown-item" href="#">Another action</a>
									</div>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="http://localhost/animated-epic-php-user-management-system-main/login.php">Log-in</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="logout.php">logout</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="#">Contact</a>

									<!-- <div class="container">
											<div class="row">
												<div class="col-12">
													<div id="switch">
														<div id="circle"></div>
													</div>
												</div>	
											</div>		
										</div>			 -->

								</li>
							</ul>
						</div>

					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="section-top">
		<div class="absolute-center">
			<div class="section mt-2">
				<div class="container mt-4">
					<div class="row">
						<div class="col-12">
							<h1><span>M</span><span>u</span><span>s</span><span>e</span><span>u</span><span>m</span>
								<br>
								<span>Q</span><span>u</span><span>e</span><span>s</span><span>t</span>
							</h1>
							<p>"Museum Explorer - Tickets, Events, and Guides"</p> 
							<p>Welcome to our Museum Hub! We are excited to offer you the convenience of purchasing tickets, discovering upcoming events, and exploring the rich cultural heritage of our city all in one place. Our website provides an easy-to-use platform for visitors to plan their museum trips, learn about the history and significance of each museum, and even access guides to enhance their experience. Whether you're a local resident or a tourist, our Museum Hub has something for everyone. Browse through our selection of museums and start planning your next cultural adventure today!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="display-6 fw-semibold" id="events">Events and Exhibitions</div>
	<div class="ag-container-shops">
		<div class="js-flickity-slider">
			<div class="js-carousel-cell">
				<div class="ag-shop-card_box-wrap">
					<div class="ag-shop-card_box">
						<div class="ag-shop-card_body">
							<div class="js-card-bg ag-card-bg"
								style="background-image:url(images/fundraiser.webp);">
							</div>
							<!-- <a href="#" class="ag-shop-card-body_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/5cd3905e11943.png"
									alt="Falu" class="ag-shop-card-body_img"></a> -->
						</div>
						<div class="ag-shop-card_footer">
							<!-- <a href="#" class="ag-shop-card-footer_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/arrow.svg"
									class="ag-shop-card-footer_arrow"></a> -->
							<span class="ag-shop-card-footer_title">Fundraiser</span>
							<span class="ag-shop-card-footer_products">23-01-2023</span>
						</div>
					</div>
				</div>
			</div>

			<div class="js-carousel-cell">
				<div class="ag-shop-card_box-wrap">
					<div class="ag-shop-card_box">
						<div class="ag-shop-card_body">
							<div class="js-card-bg ag-card-bg"
								style="background-image: url(images/fundraiser.webp);	">
							</div>
							<!-- <a href="#" class="ag-shop-card-body_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/5c40c0840d5f0.png"
									alt="Falu" class="ag-shop-card-body_img"></a> -->
						</div>
						<div class="ag-shop-card_footer">
							<!-- <a href="#" class="ag-shop-card-footer_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/arrow.svg"
									class="ag-shop-card-footer_arrow"></a> -->
							<span class="ag-shop-card-footer_title">Tienda de PatricioOliver</span>
							<span class="ag-shop-card-footer_products">Tienda oficial</span>
						</div>
					</div>
				</div>
			</div>

			<div class="js-carousel-cell">
				<div class="ag-shop-card_box-wrap">
					<div class="ag-shop-card_box">
						<div class="ag-shop-card_body">
							<div class="js-card-bg ag-card-bg"
								style="background: palegreen	">
							</div>
							<!-- <a href="#" class="ag-shop-card-body_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/5c40096210546.png"
									alt="Falu" class="ag-shop-card-body_img"></a> -->
						</div>
						<div class="ag-shop-card_footer">
							<!-- <a href="#" class="ag-shop-card-footer_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/arrow.svg"
									class="ag-shop-card-footer_arrow"></a> -->
							<span class="ag-shop-card-footer_title">Tienda de Soft Horno</span>
							<span class="ag-shop-card-footer_products">Tienda oficial</span>
						</div>
					</div>
				</div>
			</div>

			<div class="js-carousel-cell">
				<div class="ag-shop-card_box-wrap">
					<div class="ag-shop-card_box">
						<div class="ag-shop-card_body">
							<div class="js-card-bg ag-card-bg"
								style="background: palegreen	">
							</div>
							<!-- <a href="#" class="ag-shop-card-body_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/5ce7f5360446f.png"
									alt="Falu" class="ag-shop-card-body_img"></a> -->
						</div>
						<div class="ag-shop-card_footer">
							<!-- <a href="#" class="ag-shop-card-footer_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/arrow.svg"
									class="ag-shop-card-footer_arrow"></a> -->
							<span class="ag-shop-card-footer_title">Tienda de Alvarez</span> <span
								class="ag-shop-card-footer_products">Tienda oficial</span>
						</div>
					</div>
				</div>
			</div>

			<div class="js-carousel-cell">
				<div class="ag-shop-card_box-wrap">
					<div class="ag-shop-card_box">
						<div class="ag-shop-card_body">
							<div class="js-card-bg ag-card-bg"
								style="background: palegreen	">
							</div>
							<!-- <a href="#" class="ag-shop-card-body_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/5be47ff15177a.png"
									alt="Falu" class="ag-shop-card-body_img"></a> -->
						</div>
						<div class="ag-shop-card_footer">
							<!-- <a href="#" class="ag-shop-card-footer_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/arrow.svg"
									class="ag-shop-card-footer_arrow"></a> -->
							<span class="ag-shop-card-footer_title">Tienda de George Manta</span>
							<span class="ag-shop-card-footer_products">Tienda oficial</span>
						</div>
					</div>
				</div>
			</div>

			<div class="js-carousel-cell">
				<div class="ag-shop-card_box-wrap">
					<div class="ag-shop-card_box">
						<div class="ag-shop-card_body">
							<div class="js-card-bg ag-card-bg"
								style="background: palegreen	">
							</div>
							<!-- <a href="#" class="ag-shop-card-body_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/5cc351113b311.png"
									alt="Falu" class="ag-shop-card-body_img"></a> -->
						</div>
						<div class="ag-shop-card_footer">
							<!-- <a href="#" class="ag-shop-card-footer_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/arrow.svg"
									class="ag-shop-card-footer_arrow"></a> -->
							<span class="ag-shop-card-footer_title">Tienda de Ascer437</span> <span
								class="ag-shop-card-footer_products">Tienda oficial</span>
						</div>
					</div>
				</div>
			</div>

			<div class="js-carousel-cell">
				<div class="ag-shop-card_box-wrap">
					<div class="ag-shop-card_box">
						<div class="ag-shop-card_body">
							<div class="js-card-bg ag-card-bg"
								style="background: palegreen	">
							</div>
							<!-- <a href="#" class="ag-shop-card-body_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/5cc23af24a05e.png"
									alt="Falu" class="ag-shop-card-body_img"></a> -->
						</div>
						<div class="ag-shop-card_footer">
							<!-- <a href="#" class="ag-shop-card-footer_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/arrow.svg"
									class="ag-shop-card-footer_arrow"></a> -->
							<span class="ag-shop-card-footer_title">Tienda de universokiki</span>
							<span class="ag-shop-card-footer_products">Tienda oficial</span>
						</div>
					</div>
				</div>
			</div>

			<div class="js-carousel-cell">
				<div class="ag-shop-card_box-wrap">
					<div class="ag-shop-card_box">
						<div class="ag-shop-card_body">
							<div class="js-card-bg ag-card-bg"
								style="background: palegreen	">
							</div>
							<!-- <a href="#" class="ag-shop-card-body_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/5d128a3493363.png"
									alt="Falu" class="ag-shop-card-body_img"></a> -->
						</div>
						<div class="ag-shop-card_footer">
							<!-- <a href="#" class="ag-shop-card-footer_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/arrow.svg"
									class="ag-shop-card-footer_arrow"></a> -->
							<span class="ag-shop-card-footer_title">Tienda de strawberrystyle</span>
							<span class="ag-shop-card-footer_products">Tienda oficial</span>
						</div>
					</div>
				</div>
			</div>

			<div class="js-carousel-cell">
				<div class="ag-shop-card_box-wrap">
					<div class="ag-shop-card_box">
						<div class="ag-shop-card_body">
							<div class="js-card-bg ag-card-bg"
								style="background: palegreen	">
							</div>
							<!-- <a href="#" class="ag-shop-card-body_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/5d0a6ff679c0f.png"
									alt="Falu" class="ag-shop-card-body_img"></a> -->
						</div>
						<div class="ag-shop-card_footer">
							<!-- <a href="#" class="ag-shop-card-footer_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/arrow.svg"
									class="ag-shop-card-footer_arrow"></a> -->
							<span class="ag-shop-card-footer_title">Tienda de Tótem</span> <span
								class="ag-shop-card-footer_products">Tienda oficial</span>
						</div>
					</div>
				</div>
			</div>

			<div class="js-carousel-cell">
				<div class="ag-shop-card_box-wrap">
					<div class="ag-shop-card_box">
						<div class="ag-shop-card_body">
							<div class="js-card-bg ag-card-bg"
								style="background: palegreen	">
							</div>
							<!-- <a href="#" class="ag-shop-card-body_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/5db9c81ac794d.png"
									alt="Falu" class="ag-shop-card-body_img"></a> -->
						</div>
						<div class="ag-shop-card_footer">
							<!-- <a href="#" class="ag-shop-card-footer_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/arrow.svg"
									class="ag-shop-card-footer_arrow"></a> -->
							<span class="ag-shop-card-footer_title">Tienda de Corvus</span> <span
								class="ag-shop-card-footer_products">Tienda oficial</span>
						</div>
					</div>
				</div>
			</div>

			<div class="js-carousel-cell">
				<div class="ag-shop-card_box-wrap">
					<div class="ag-shop-card_box">
						<div class="ag-shop-card_body">
							<div class="js-card-bg ag-card-bg"
								style="background: palegreen	">
							</div>
							<!-- <a href="#" class="ag-shop-card-body_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/5bfda621f1ceb.png"
									alt="Falu" class="ag-shop-card-body_img"></a> -->
						</div>
						<div class="ag-shop-card_footer">
							<!-- <a href="#" class="ag-shop-card-footer_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/arrow.svg"
									class="ag-shop-card-footer_arrow"></a> -->
							<span class="ag-shop-card-footer_title">Tienda de martinvarbaro</span>
							<span class="ag-shop-card-footer_products">Tienda oficial</span>
						</div>
					</div>
				</div>
			</div>

			<div class="js-carousel-cell">
				<div class="ag-shop-card_box-wrap">
					<div class="ag-shop-card_box">
						<div class="ag-shop-card_body">
							<div class="js-card-bg ag-card-bg"
								style="background: palegreen	">
							</div>
							<!-- <a href="#" class="ag-shop-card-body_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/5bce0fc9151e8.png"
									alt="Falu" class="ag-shop-card-body_img"></a> -->
						</div>
						<div class="ag-shop-card_footer">
							<!-- <a href="#" class="ag-shop-card-footer_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/arrow.svg"
									class="ag-shop-card-footer_arrow"></a> -->
							<span class="ag-shop-card-footer_title">Tienda de Villy</span> <span
								class="ag-shop-card-footer_products">Tienda oficial</span>
						</div>
					</div>
				</div>
			</div>

			<div class="js-carousel-cell">
				<div class="ag-shop-card_box-wrap">
					<div class="ag-shop-card_box">
						<div class="ag-shop-card_body">
							<div class="js-card-bg ag-card-bg"
								style="background: palegreen	">
							</div>
							<!-- <a href="#" class="ag-shop-card-body_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/5be086fa51ac5.png"
									alt="Falu" class="ag-shop-card-body_img"></a> -->
						</div>
						<div class="ag-shop-card_footer">
							<!-- <a href="#" class="ag-shop-card-footer_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/arrow.svg"
									class="ag-shop-card-footer_arrow"></a> -->
							<span class="ag-shop-card-footer_title">Tienda de SunSurf</span> <span
								class="ag-shop-card-footer_products">Tienda oficial</span>
						</div>
					</div>
				</div>
			</div>

			<div class="js-carousel-cell">
				<div class="ag-shop-card_box-wrap">
					<div class="ag-shop-card_box">
						<div class="ag-shop-card_body">
							<div class="js-card-bg ag-card-bg"
								style="background: palegreen	">
							</div>
							<!-- <a href="#" class="ag-shop-card-body_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/5ca6990d33356.png"
									alt="Falu" class="ag-shop-card-body_img"></a> -->
						</div>
						<div class="ag-shop-card_footer">
							<!-- <a href="#" class="ag-shop-card-footer_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/arrow.svg"
									class="ag-shop-card-footer_arrow"></a> -->
							<span class="ag-shop-card-footer_title">Tienda de Los Cocos</span>
							<span class="ag-shop-card-footer_products">Tienda oficial</span>
						</div>
					</div>
				</div>
			</div>

			<div class="js-carousel-cell">
				<div class="ag-shop-card_box-wrap">
					<div class="ag-shop-card_box">
						<div class="ag-shop-card_body">
							<div class="js-card-bg ag-card-bg"
								style="background: palegreen	">
							</div>
							<!-- <a href="#" class="ag-shop-card-body_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/5c3eb9093ed2b.png"
									alt="Falu" class="ag-shop-card-body_img"></a> -->
						</div>
						<div class="ag-shop-card_footer">
							<!-- <a href="#" class="ag-shop-card-footer_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/arrow.svg"
									class="ag-shop-card-footer_arrow"></a> -->
							<span class="ag-shop-card-footer_title">Tienda de Piñata</span> <span
								class="ag-shop-card-footer_products">Tienda oficial</span>
						</div>
					</div>
				</div>
			</div>

			<div class="js-carousel-cell">
				<div class="ag-shop-card_box-wrap">
					<div class="ag-shop-card_box">
						<div class="ag-shop-card_body">
							<div class="js-card-bg ag-card-bg"
								style="background: palegreen	">
							</div>
							<!-- <a href="#" class="ag-shop-card-body_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/5bea050c4eb98.png"
									alt="Falu" class="ag-shop-card-body_img"></a> -->
						</div>
						<div class="ag-shop-card_footer">
							<!-- <a href="#" class="ag-shop-card-footer_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/arrow.svg"
									class="ag-shop-card-footer_arrow"></a> -->
							<span class="ag-shop-card-footer_title">Tienda de California Sun</span>
							<span class="ag-shop-card-footer_products">Tienda oficial</span>
						</div>
					</div>
				</div>
			</div>

			<div class="js-carousel-cell">
				<div class="ag-shop-card_box-wrap">
					<div class="ag-shop-card_box">
						<div class="ag-shop-card_body">
							<div class="js-card-bg ag-card-bg"
								style="background: palegreen	">
							</div>
							<!-- <a href="#" class="ag-shop-card-body_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/5cb88d289ab15.png"
									alt="Falu" class="ag-shop-card-body_img"></a> -->
						</div>
						<div class="ag-shop-card_footer">
							<!-- <a href="#" class="ag-shop-card-footer_link"><img
									src="https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/parallax-swipe/images/arrow.svg"
									class="ag-shop-card-footer_arrow"></a> -->
							<span class="ag-shop-card-footer_title">Tienda de Kapusta</span> <span
								class="ag-shop-card-footer_products">Tienda oficial</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Start upcoming-event Area -->
	<section class="upcoming-event-area section-gap" id="explore">
		<div class="container">
			<div class="section-top">
				<div class="absolute-center">
					<div class="section">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<h1><span>E</span><span>x</span><span>p</span><span>l</span><span>o</span><span>r</span><span>e</span>
										<br>
										<span>M</span><span>u</span><span>s</span><span>e</span><span>u</span><span>m</span><span>s</span>
									</h1>
									<p>across Hubli and Dharwad</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 event-left">
					<div class="single-events">
						<img class="img-fluid" src="images\science\img.jpg" alt="">
						<a href="#">
							<h4>Dharwad Regional Science Center</h4>
						</a>
						<!-- <h6><span>21st February</span> at Central government museum</h6> -->
						<p>
							Welcome to the Dharwad Regional Science Centre, an exciting destination for science enthusiasts of all ages. Located within the premises of the Karnatak University's Botanical Garden, the Science Centre was inaugurated by Shri. Mallikarjuna Kharge, Honorable Union Minister of Labor & Employment on February 27, 2012. Our Science Centre is a unique blend of indoor and outdoor exhibits that showcases the wonders of science and technology in an interactive and engaging manner. The Center House comprises of several sections such as Indian Science & Technology Heritage, Taramandala, Fun Science, Biomachines and 3D Theater, which offer a glimpse into the rich history of Indian science and technology, and its impact on our everyday lives. Our Science Park is a collection of models of various mechanical devices and prehistoric animals, providing a fun and educational experience for visitors of all ages. With low ticket prices, the Dharwad Regional Science Centre is an affordable and entertaining way to spend an afternoon. We look forward to welcoming you to our Science Centre soon.
						</p>
						<a href="#" class="primary-btn text-uppercase">Go to Webpage</a>
					</div>
					<div class="single-events">
						<img class="img-fluid" src="images\railway\img3.jpg" alt="">
						<a href="#">
							<h4>Railway Museum</h4>
						</a>
						<!-- <h6><span>21st February</span> at Central government museum</h6> -->
						<p>
                            Discover the rich history and evolution of Indian Railways at the Hubballi Railway Museum, the first of its kind in North Karnataka. Located centrally next to the second entry of Hubballi Railway Station, the museum offers a visual treat of railway heritage items used in the past. Visitors can explore the Galaxy of Rolling Stock, the historic Malaprabha and Ghataprabha cottages, a theatre coach, a toy train, a memorabilia shop, and a children's activity room. The museum aims to preserve and portray the glorious heritage of various branches of the Indian Railways, displaying the gradual evolution of advanced systems in all spheres of railway working. Come and experience the bygone era at the Hubballi Railway Museum.
                        </p>
						<a href="#" class="primary-btn text-uppercase">View Details</a>
					</div>
				</div>
				<div class="col-lg-6 event-right">
                    <div class="single-events">
                        <a href="#">
                            <h4>Zoology Museum</h4>
						</a>
						<!-- <h6><span>21st February</span> at Central government museum</h6> -->
						<p>
                            Welcome to our Zoology Museum website! We are excited to offer you a unique and engaging platform for exploring the world of animals and wildlife. Our museum, housed in the zoology department at the Karnatak Science College in Dharwad, is one of the largest zoology museums in the state, and is home to specimens of 2,500 different species, each preserved in a pristine condition. From live specimens of king cobra, African lungfish, civet cat, head mounted wild boar, head mounted deer, golden cat, jungle cat, pangolin, to the skulls of elephant, tiger, deer, horse, our museum has something for everyone. Whether you're a nature lover, a student of zoology or just looking for a fun and educational activity, our Zoology Museum is sure to captivate and interest visitors of all ages. Don't wait, start planning your visit today and discover the world of animals and wildlife with us!
						</p>
						<a href="#" class="primary-btn text-uppercase">View Details</a>
						<img class="img-fluid" src="images\zoology\img.jpg" alt="">
					</div>
					<div class="single-events">

						<a href="#">
							<h4>Bendre Bhavana</h4>
						</a>
						<!-- <h6><span>21st February</span> at Central government museum</h6> -->
						<p>
							Bendre bhavan It is located in sadhanakeri, dharwad. It is located just right next to the Da.Ra. Bendres house. Big hall is there. This museum has photos of Bendres major occasions, most notably the Jnanapeeth award. Bendres B.A , M.A certificates are there. Padmashri award certificate is in this museum. Cleanliness is well maintained. The memories of Bendre are cast everywhere in the hall. Greeny environment is there around.Bendre bhavan is a place where Dattatreya bendre were lived. here we can see all of his achievements also the accessories used. He is a Gynapeeta and Kendra sahitya academy awardee. He was awarded Gyanpeet for his book Naku tanti ( Four strings)A great place to visit for all proud kannadigas and Indians.Bendre Bhavan is a memorial built for the famous Kannada poet Da Ra Bendre. Memorial having the detailed information of life history of Bendre. Besides to this memorial there is a Bendre House. In this house you can find the momentum of Jnanapeeta, Padmashree award and other awards given to Bendre. It is a must visit place for all Kannada literature lovers. Brief About:Bendre Bhavana is the memorial built in memory of great Kannada poet and Jnaana Peetha award winner Dr. Dattatreya Ramachandra Bendre (D R Bendre). It is located in Sadhanakeri at a distance of 5km away from Dharwad. Exhibits in Bendre Bhavana includes rare photographs from the poets life; portrait paintings; quotes and extracts from his poems etc.Dr. Bendres home Shree Matha is located adjacent to the Bendre Bhavan which is also a place of memory of the great poet
						</p>
						<a href="#" class="primary-btn text-uppercase">View Details</a>
						<img class="img-fluid" src="images\bb\img8.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End upcoming-event Area -->
	<div class="row p-5" id="plans">
		<div class="col-sm-3 mb-3 mb-sm-0">
			<div class="card">
				<div class="card-body">

					<h5 class="card-title text-center">1.  Basic Plan-700Rs</h5>
					<p class="card-text">
					<ul>
						<li>-   Access to basic museum information and exhibit descriptions</li>
						<li>-   Basic navigational tools and search functionality</li>
						<li>-   Limited multimedia content (e.g. images and videos)</li>
						<li>-   Ability to purchase tickets online</li>
						<li>-   Option to save favorite exhibits and events</li>
						<li>-   Option to create a personalized itinerary</li>
						<li>-   Option to leave feedback and ratings</li>
						<li>-   Option to receive updates and notifications</li>
						<li>-   Option to share content on social media</li>
						<li>-   Option to download and print guidebook</li>
					</ul>
					<!-- <button type="button" class="btn btn-primary"></button> -->
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">2.  Standard Plan:1000Rs</h5>
					<p class="card-text">
						<li>-   Advanced navigational tools and search functionality</li>
						<li>-   Detailed information on museum events and programs</li>
						<li>-   Rich multimedia content (e.g. high-resolution images, videos, and audio)</li>
						<li>-   Ability to access audio guides and transcripts</li>
						<li>-   Option to take self-guided tours</li>
						<li>-   Option to access member-exclusive content</li>
						<li>-   Option to get special offers and discounts</li>
						<li>-   Option to participate in quizzes and challenges</li>
						<li>-   Option to connect with other visitors via chat or forum</li>
						<li>-   Option to access member-exclusive content</li>
					</p>

				</div>
			</div>
		</div>
		<div class="col-sm-3 mb-3 mb-sm-0">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">3.  Premium Plan:1500Rs</h5>
					<p class="card-text">
						<li>-   Interactive multimedia content (e.g. virtual tours and augmented reality experiences)</li>
						<li>-   Customizable guide options (e.g. ability to create personalized itineraries)</li>
						<li>-   Access to exclusive content and behind-the-scenes information</li>
						<li>-   Ability to reserve tours and activities</li>
						<li>-   Option to access live webinars and lectures</li>
						<li>-   Option to join virtual meetups and social events</li>
						<li>  Option to get priority access to exhibitions and events</li>
						<li>-   Option to purchase exclusive merchandise</li>
						<li>-   Option to get complimentary parking or transportation</li>
						<li>-   Option to get VIP access to special exhibitions and events</li>
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-3 mb-3 mb-sm-0">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">4.  VIP Plan:2000Rs</h5>
					<p class="card-text">
						<li>-   Priority access to museum events and programs</li>
						<li>-   Dedicated guide and concierge services</li>
						<li>-   Special perks and discounts for museum shop and restaurant</li>
						<li>-   Option to get private tours and experiences</li>
						<li>-   Option to get priority access to parking or transportation</li>
						<li>-   Option to get complimentary refreshments</li>
						<li>-   Option to get priority access to special exhibitions and events</li>
						<li>-   Option to get special invitations to members-only events</li>
						<li>-   Option to get complimentary or reduced-price guest tickets</li>
						<li>-   Option to get special recognition and acknowledgment in the museum</li>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div id="map" style="height: 400px; width: 100%;padding:20px;"></div>

	<div id="popup"></div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
		crossorigin="anonymous"></script>
	<script src="museum3.js"></script>
</body>

</html>