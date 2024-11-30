<?php include('include/header.php') ?>


<style>
	.owl-theme .owl-dots .owl-dot {
		display: none;
	}

	/* produt alignment */

	.project-bx .dlab-media a img {

		margin-bottom: 16vh;

	}

	/* produt alignment end*/


	/* align features */
	.align-features a img {

		object-fit: cover;
		height: 66vh
	}

	.page-content {
		margin-top: 0;
		padding-bottom: 0px;
	}



	/* footer align */
	.footer-bottom {

		display: none;

	}


	/* hero section - responsive start */

	.align-hero-section {
		max-width: 100%;
		margin: 0 auto;
		padding-top: 70px;
		position: relative;
	}

	.video-slide video {
		width: 100%;
		height: auto;
	}

	.video-overlay {
		position: absolute;
		bottom: 10%;
		left: 5%;
		max-width: 40%;
		color: white;
		text-align: left;
		z-index: 1;
		padding: 10px;
	}

	.video-heading {
		font-size: 2rem;
		font-weight: bold;
		margin-bottom: 10px;
	}

	.video-paragraph {
		font-size: 1rem;
		line-height: 1.5;
	}

	/* Responsive styles */
	@media (min-width: 1200px) {
		.video-overlay {
			bottom: 14vh;
			left: 14vh;
			max-width: 36vw;
		}

		.video-heading {
			font-size: 2.5rem;
		}

		.video-paragraph {
			font-size: 1.1rem;
		}

	}

	@media (min-width: 768px) and (max-width: 1199px) {
		.video-overlay {
			bottom: 15%;
			left: 10%;
			max-width: 50%;
		}

		.video-heading {
			font-size: 2rem;
			font-weight: 500;
		}

		.video-paragraph {
			font-size: 1rem;
			font-weight: 500;
		}
	}

	@media (min-width: 480px) and (max-width: 767px) {
		.video-overlay {
			bottom: 10%;
			left: 5%;
			max-width: 60%;
		}

		.video-heading {
			font-size: 1.8rem;
		}

		.video-paragraph {
			font-size: 0.9rem;
		}
	}

	@media (max-width: 479px) {
		.video-overlay {
			bottom: 8%;
			left: 5%;
			max-width: 90%;
		}

		.video-heading {
			font-size: 1.5rem;
		}

		.video-paragraph {
			font-size: 0.8rem;
		}
	}

	@media (max-width: 1200px) {

		.align-hero-section {

			padding-top: 65px;

		}

	}

	@media (max-width: 767px) {

		.align-hero-section {

			padding-top: 50px;

		}

		.video-slide::before {

			height: 98% !important;

		}

	}


	@media (max-width: 400px) {

		.textual-content {
			bottom: -1%;
		}

	}

	@media (max-width: 375px) {

.textual-content {
	bottom: -11%;
}

}


	/* hero section - responsive end */



	/* about padding */
	.content-inner {
		padding-top: 0px;
		padding-bottom: 50px;
	}


	/* why choose us - align */

	.align-part {

		margin-top: 13vh;

	}

	/* why choose us - align - end */

	.video-slide::before {
		content: "";
		width: 100%;
		height: 99%;
		position: absolute;
		left: 0;
		top: 0;
		background-color: #0000004d;
	}

	/* other */

	.about-sub-head {

		color: #1579BD;
		font-family: 'Cabin', sans-serif !important;

	}

	.site-header .navbar-toggler,
	.site-header .is-fixed .navbar-toggler {
		margin: 22px 0 14px 10px;
	}

	.faq-video {

		margin-right: 2.5vw;
		margin-left: 2.5vw;

	}



	/* nav-align */
	@media screen and (max-width: 991px) {
		.mo-left .header-nav.nav-dark {
			background-color: #202020;
		}

		.mo-left .header-nav {
			overflow-y: scroll;
			position: fixed;
			width: 60px;
			left: -280px;
			height: 100vh !important;
			transition: all 0.5s;
			-webkit-transition: all 0.5s;
			-moz-transition: all 0.5s;
			-o-transition: all 0.5s;
			top: 0;
			background-color: #fff;
			margin: 0;
			z-index: 99;
		}

		.mo-left .header-nav li.open a {
			position: relative;
		}

		.header-nav {
			overflow-x: scroll;
			height: 100%;
		}

		.mo-left .header-nav.show {
			left: -1px;
			transition: all 0.8s;
			-webkit-transition: all 0.8s;
			-moz-transition: all 0.8s;
			-o-transition: all 0.8s;
			margin: 0;
			width: 280px;
		}

		.mo-left .navbar-toggler.open:after {
			background-color: rgba(0, 0, 0, 0.6);
			content: "";
			left: 0;
			position: fixed;
			right: -20px;
			top: -63px;
			transform: scale(100);
			-o-transform: scale(100);
			-moz-transform: scale(100);
			-webkit-transform: scale(100);
			width: 100%;
			z-index: -1;
			transition: all 0.5s;
			transform-origin: top right;
			margin: 0 0px 0px 20px;
			-webkit-box-shadow: 0 0 0 1000px rgba(0, 0, 0, 0.6);
			box-shadow: 0 0 0 1000px rgba(0, 0, 0, 0.6);
		}

		.mo-left .header-nav .logo-header {
			display: block;
			float: none;
			height: auto;
			max-width: 100%;
			padding: 30px 15px;
			width: 100%;
		}

		.mo-left .header-nav .logo-header img {
			max-width: unset;
			width: 180px;
			vertical-align: middle;
		}

		.mo-left .navbar-toggler.open span {
			background: #fff;
		}

	}

	@media only screen and (max-width: 767px) {

		.logo-header,
		.is-fixed.header-curve .logo-header,
		.is-fixed .logo-header,
		.is-fixed.header-curve .logo-header {
			width: 135px;
			max-width: 135px;
			height: 50px;
		}

		.logo-header img,
		.logo-footer img {
			max-width: 160px;
		}

		.is-fixed .logo-header a img,
		.is-fixed.header-curve .logo-header a img {
			vertical-align: sub;
		}

		.is-fixed .header-nav .logo-header a img,
		.is-fixed.header-curve .header-nav .logo-header a img {
			vertical-align: middle;
		}

		.site-header .navbar-toggler,
		.site-header .is-fixed .navbar-toggler {
			margin: 22px 0 14px 10px;
		}

		.site-header .extra-nav,
		.site-header .is-fixed .extra-nav {
			padding: 10px 0;
		}
	}

	@media only screen and (max-width: 767px) {

		.mo-left .header-nav .logo-header img {

			max-width: 160px;

		}

	}

	/* nav-align  end */

	/* hide-arrow */

	.hide-arrow{

		display: none !important;

	} 

	/* hide-arrow end */

</style>


<!-- Content -->
<div class="page-content bg-white">

	<!-- video - hero-section - start -->
	<div class="align-hero-section">
		<div class="video-slide">
			<video autoplay muted loop>
				<source src="video/power-broach-intro.mp4" type="video/mp4">
			</video>
			<div class="video-overlay textual-content">
				<h1 class="video-heading text-light">Reliable Broaching Machine Expert</h1>
				<p class="video-paragraph">Power Broach provides expert broaching solutions for all workpiece applications, meeting customer needs.</p>
			</div>
		</div>
	</div>
	<!-- video - hero-section - end -->





	<!-- About Us -->
	<div class="section-full content-inner bg-white mt-3">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
					<div class="our-story">
						<span class="about-head mt-5">ABOUT US</span>
						<h2 class="title">Commited to High Quality <br> <span class="about-sub-head"> Broaching Service </span></h2>
						<!-- <h4 class="title">
							Your Trusted Partner in Broaching Solutions <br>
							Innovative Machines | Precision Engineering | Global Excellence</h4> -->
						<p>Power Broach, located in Faridabad, India, is a trusted name in the broaching machine industry. We make high-quality broaching machines and tools designed to fit different industrial needs. With a focus on quality and innovation, we create reliable solutions that businesses around the world depend on for great performance.</p>
						<a href="javascript:;" class="site-button btnhover14">Read More</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 m-b30 wow fadeInUp zoom-efct" data-wow-duration="2s" data-wow-delay="0.6s">
					<img src="images/about/about-img.jpg" class="radius-sm zoom-efct-img" alt="">
				</div>
			</div>
		</div>
	</div>
	<!-- About Us End -->


	<!-- our product -->



	<div class="section-full content-inner-2 bg-gray wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
		<div class="container">

			<div class="section-head text-black text-center">
				<h2 class="title">Our Products</h2>
				<p>Your Search for the Perfect Broaching Machine Ends Here <br> Feel Free to Explore Power Broach's Machine.</p>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="img-carousel-dots-nav owl-theme owl-dots-none owl-carousel owl-btn-center-lr owl-btn-3">



						<div class="item">
							<div class="dlab-box project-bx">
								<div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect zoom">
									<a href="javascript:;"><img src="images/product/Vertical Internal Hydraulic Broaching Machines.jpg" alt=""></a>
								</div>
								<div class="dlab-info">
									<h5 class="dlab-title"><a href="javascript:;">Vertical Internal Hydraulic Broaching Machines</a></h5>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="dlab-box project-bx">
								<div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect zoom">
									<a href="javascript:;"><img src="images/product/Surface Hydraulic Broaching Machine.png" alt=""></a>
								</div>
								<div class="dlab-info">
									<h5 class="dlab-title"><a href="javascript:;">Surface Hydraulic Broaching Machine</a></h5>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="dlab-box project-bx">
								<div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect zoom">
									<a href="javascript:;"><img src="images/product/Servo Hydraulic Internal Broaching Machine.jpg" alt=""></a>
								</div>
								<div class="dlab-info">
									<h5 class="dlab-title"><a href="javascript:;">Servo Hydraulic Internal Broaching Machine</a></h5>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="dlab-box project-bx">
								<div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect zoom">
									<a href="javascript:;"><img src="images/product/Servo Electrical Broaching Machines.png" alt=""></a>
								</div>
								<div class="dlab-info">
									<h5 class="dlab-title"><a href="javascript:;">Servo Electrical Broaching Machines</a></h5>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="dlab-box project-bx">
								<div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect zoom">
									<a href="javascript:;"><img src="images/product/Table Up Hydraulic Broaching Machines.png" alt=""></a>
								</div>
								<div class="dlab-info">
									<h5 class="dlab-title"><a href="javascript:;">Table Up Hydraulic Broaching Machines</a></h5>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="dlab-box project-bx">
								<div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect zoom">
									<a href="javascript:;"><img src="images/product/Customized Broaching Machines.png" alt=""></a>
								</div>
								<div class="dlab-info">
									<h5 class="dlab-title"><a href="javascript:;">Customized Broaching Machines</a></h5>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Our product - end -->


	<!-- features  -->

	<div class="section-head text-black text-center mt-5 mb-0">
		<h2 class="title">Our Features</h2>
		<p> Discover how PowerBroach deliver reliability, and ease for all your machining needs. <br> Welcome to our Features section! </p>
	</div>

	<div class="section-full bg-white">
		<div class="project-carousel owl-btn-center-lr owl-carousel owl-loaded owl-drag">



			<div class="owl-stage-outer">
				<div class="owl-stage" style="transition: 3s; width: 4421px; transform: translate3d(-2210px, 0px, 0px);">
					<div class="owl-item cloned" style="width: 611.5px; margin-right: 20px;">
						<div class="item wow fadeInUp animated" data-wow-duration="2s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.6s; animation-name: undefined;">
							<div class="dlab-box portfolio-style1">
								<div class="align-features dlab-media dlab-img-overlay1 dlab-img-effect">
									<a href="services-details">
										<img src="images/features/our-facility.png" alt="">
									</a>

								</div>
								<div class="portfolio-info">
									<h4 class="title"><a href="services-details">Our Facility</a></h4>
									<p>Our advanced facility in Faridabad ensures precision, quality, and efficient production for global delivery.</p>
								</div>
							</div>
						</div>
					</div>



					<div class="owl-item cloned" style="width: 611.5px; margin-right: 20px;">
						<div class="item wow fadeInUp animated" data-wow-duration="2s" data-wow-delay="0.9s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.9s; animation-name: undefined;">
							<div class="dlab-box portfolio-style1">
								<div class="align-features dlab-media dlab-img-overlay1 dlab-img-effect">
									<a href="services-details">
										<img src="images/features/expert-team.png" alt="">
									</a>
								</div>
								<div class="portfolio-info">
									<h4 class="title"><a href="services-details">
											Expert Team</a></h4>
									<p>Our expert team of engineers, technicians, and support staff is dedicated to delivering excellence with precision and expertise.</p>
								</div>
							</div>
						</div>
					</div>


					<div class="owl-item cloned" style="width: 611.5px; margin-right: 20px;">
						<div class="item wow fadeInUp animated" data-wow-duration="2s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.6s; animation-name: undefined;">
							<div class="dlab-box portfolio-style1">
								<div class="align-features dlab-media dlab-img-overlay1 dlab-img-effect">
									<a href="services-details">
										<img src="images/features/global-reach.png" alt="">
									</a>
								</div>
								<div class="portfolio-info">
									<h4 class="title"><a href="services-details">Global Reach</a></h4>
									<p>Based in Faridabad, India, we serve global markets with high-quality broaching machines and support through a strong distributor network.</p>
								</div>
							</div>
						</div>
					</div>


					<div class="owl-item" style="width: 611.5px; margin-right: 20px;">
						<div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.3s; animation-name: fadeInUp;">
							<div class="dlab-box portfolio-style1">
								<div class="align-features dlab-media dlab-img-overlay1 dlab-img-effect">
									<a href="services-details">
										<img src="images/features/quality-statement.png" alt="">
									</a>
								</div>
								<div class="portfolio-info">
									<h4 class="title"><a href="services-details">Quality Statement</a></h4>
									<p>Power Broach ensures quality in every aspect, from precision products to exceptional customer service.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="owl-item" style="width: 611.5px; margin-right: 20px;">
						<div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.6s; animation-name: fadeInUp;">
							<div class="dlab-box portfolio-style1">
								<div class="align-features dlab-media dlab-img-overlay1 dlab-img-effect">
									<a href="services-details">
										<img src="images/features/innovation-&-technology.png" alt="">
									</a>
								</div>
								<div class="portfolio-info">
									<h4 class="title"><a href="services-details">Innovation & Technology</a></h4>
									<p>At Power Broach, innovation drives us to deliver advanced, efficient, and accurate broaching solutions.</p>
								</div>
							</div>
						</div>
					</div>


					<div class="owl-item active center" style="width: 611.5px; margin-right: 20px;">
						<div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.9s; animation-name: fadeInUp;">
							<div class="dlab-box portfolio-style1">
								<div class="align-features dlab-media dlab-img-overlay1 dlab-img-effect">
									<a href="services-details">
										<img src="images/features/custumer-centric-approach.png" alt="">
									</a>
								</div>
								<div class="portfolio-info">
									<h4 class="title"><a href="services-details">Customer-Centric Approach</a></h4>
									<p>Our customer-centric approach focuses on building lasting relationships with tailored solutions and exceptional support.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="owl-item cloned active" style="width: 611.5px; margin-right: 20px;">
						<div class="item wow fadeInUp animated" data-wow-duration="2s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.3s; animation-name: undefined;">
							<div class="dlab-box portfolio-style1">
								<div class="align-features dlab-media dlab-img-overlay1 dlab-img-effect">
									<a href="services-details">
										<img src="images/features/our-facility.png" alt="">
									</a>
								</div>
								<div class="portfolio-info">
									<h4 class="title"><a href="services-details">a1</a></h4>
									<p>Our advanced facility in Faridabad ensures precision, quality, and efficient production for global delivery.</p>
								</div>
							</div>
						</div>
					</div>



				</div>
			</div>
			<div class="owl-nav hide-arrow">
				<button type="button" role="presentation" class="owl-prev"><i class="la la-long-arrow-left"></i></button>
				<button type="button" role="presentation" class="owl-next"><i class="la la-long-arrow-right"></i></button>
			</div>
			<div class="owl-dots disabled"></div>
		</div>
	</div>

	<!-- features end  -->









	<div class="section-full mt-5">

		<!-- exhibition part - start -->

		<div class="row spno about-industry">
			<!-- Slider Section (Left Side) -->
			<div class="col-lg-7 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeIn;">
				<div class="slick-slider">
					<div>
						<img src="images/exhibition/1.jpeg" alt="Exhibition Image 1" class="img-cover">
					</div>
					<div>
						<img src="images/exhibition/2.jpeg" alt="Exhibition Image 2" class="img-cover">
					</div>
					<div>
						<img src="images/exhibition/3.jpeg" alt="Exhibition Image 3" class="img-cover">
					</div>
					<div>
						<img src="images/exhibition/4.jpeg" alt="Exhibition Image 4" class="img-cover">
					</div>
				</div>
			</div>

			<!-- Textual Content Section (Right Side) -->
			<div class="col-lg-5 bg-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.4s; animation-name: fadeIn;">
				<div class="service-box style2">
					<div>
						<h2 class="title text-black change-font-size"><span>Our Previous Exhibition:</span> <br>"PMTEX 2024 - MEDIA"</h2>
						<p>Powerbroach made a strong impact at PMTEX 2024 and MEDIA exhibitions, <br> showcasing our advanced broaching solutions.</p>
						<!-- <a href="javascript:;" class="site-button outline outline-2 btnhover11">READ MORE</a> -->
					</div>
				</div>
			</div>
		</div>




		<!-- exhibition part - end -->


		<!-- why choose us - start -->

		<div class="section-full overlay-white-middle content-inner align-part">
			<div class="container">
				<div class="section-head text-black text-center">
					<h3 class="title">Why Choose Us?</h3>
					<p>Here’s why PowerBroach is the perfect choice for your machining needs. <br> Read this carefully. </p>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 m-b30">
						<div class="faq-video">
							<!-- <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=_FRZVScwggM"> -->
							<i class="flaticon-play-button text-white"></i></a>
							<img src="images/why-choose-us.jpg" alt="" class="img-cover radius-sm" style="border-radius: 10px;">
						</div>
					</div>
					<div class="col-lg-6 col-md-12 m-b30">
						<div class="dlab-accordion faq-1 box-sort-in m-b30" id="accordion1">
							<div class="panel">
								<div class="acod-head">
									<h6 class="acod-title">
										<a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#faq1" class="collapsed" aria-expanded="true">
											1. Why should I choose Power Broach?</a>
									</h6>
								</div>
								<div id="faq1" class="acod-body collapse" data-bs-parent="#accordion1">
									<div class="acod-content">A: Power Broach provides high-quality, customized broaching solutions tailored to meet diverse industrial needs. Their focus on precision, innovation, and customer satisfaction ensures reliable and efficient performance for all your applications.</div>
								</div>
							</div>
							<div class="panel">
								<div class="acod-head">
									<h6 class="acod-title">
										<a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed" aria-expanded="false">
											2. Does Power Broach provide customized solutions?</a>
									</h6>
								</div>
								<div id="faq2" class="acod-body collapse" data-bs-parent="#accordion1">
									<div class="acod-content">A: Yes, Power Broach specializes in tailored broaching solutions to meet specific requirements. They focus on optimizing performance for any workpiece application.</div>
								</div>
							</div>
							<div class="panel">
								<div class="acod-head">
									<h6 class="acod-title">
										<a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed" aria-expanded="false">
											3. Advantages of broaching compared to other methods? </a>
									</h6>
								</div>
								<div id="faq3" class="acod-body collapse" data-bs-parent="#accordion1">
									<div class="acod-content">A: Broaching ensures high accuracy, faster processing, and consistent quality, making it ideal for complex designs.</div>
								</div>
							</div>
							<div class="panel">
								<div class="acod-head">
									<h6 class="acod-title">
										<a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed" aria-expanded="false">
											4. What makes us unique? </a>
									</h6>
								</div>
								<div id="faq4" class="acod-body collapse" data-bs-parent="#accordion1">
									<div class="acod-content">A: Our advanced technology ensures efficient performance and smooth finishes, meeting diverse industrial needs effectively.</div>
								</div>
							</div>

							<div class="panel">
								<div class="acod-head">
									<h6 class="acod-title">
										<a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed" aria-expanded="false">
											5. What benefits does Power Broach provide?</a>
									</h6>
								</div>
								<div id="faq5" class="acod-body collapse" data-bs-parent="#accordion1">
									<div class="acod-content">A: Our machines ensure precise performance, minimal maintenance, and optimized productivity for various industrial applications.</div>
								</div>
							</div>

							<div class="panel">
								<div class="acod-head">
									<h6 class="acod-title">
										<a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#faq6" class="collapsed" aria-expanded="false">
											6. What types of broaching machines does Power Broach offer?</a>
									</h6>
								</div>
								<div id="faq6" class="acod-body collapse" data-bs-parent="#accordion1">
									<div class="acod-content">A: Power Broach provides a range of machines, including vertical hydraulic and servo-driven models, designed for various broaching applications.</div>
								</div>
							</div>

							<div class="panel">
								<div class="acod-head">
									<h6 class="acod-title">
										<a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#faq7" class="collapsed" aria-expanded="false">
											7. Do we provide our services globally?</a>
									</h6>
								</div>
								<div id="faq7" class="acod-body collapse" data-bs-parent="#accordion1">
									<div class="acod-content">A: Yes, Power Broach offers broaching solutions worldwide, serving industries across North America, Europe, and Asia with high-quality, customized machines.</div>
								</div>
							</div>

						</div>
					</div>
				</div>



			</div>
		</div>

		<!-- why choose us - end -->


		<!-- testimonial start -->

		<div class="section-full overlay-black-middle bg-secondry content-inner-2 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s" style="background-image: url(&quot;images/background/map-bg.png&quot;); visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeIn;">
			<div class="container">
				<div class="section-head text-white text-center">
					<h2 class="title">What People Are Saying About Us</h2>
					<p>Discover what our satisfied customers have to say about their experiences with PowerBroach. <br> Your trust drives our success!</p>
				</div>
				<div class="section-content">
					<div class="testimonial-two-dots owl-carousel owl-none owl-theme owl-dots-primary-full owl-loaded owl-drag">









						<div class="owl-stage-outer">
							<div class="owl-stage" style="transform: translate3d(-2576px, 0px, 0px); transition: 3s; width: 6118px;">
								<div class="owl-item cloned" style="width: 292px; margin-right: 30px;">
									<div class="item">
										<div class="testimonial-15 text-white">
											<div class="testimonial-text quote-left quote-right">
												<p>PowerBroach exceeded our expectations with their precision tools and outstanding customer service. They’re truly industry leaders!</p>
											</div>
											<div class="testimonial-detail clearfix">
												<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
												<strong class="testimonial-name">Aman Mehta</strong> <span class="testimonial-position">CEO</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 292px; margin-right: 30px;">
									<div class="item">
										<div class="testimonial-15 text-white">
											<div class="testimonial-text quote-left quote-right">
												<p>The quality of PowerBroach products have streamlined our operations and saved us time and costs. Highly recommended!</p>
											</div>
											<div class="testimonial-detail clearfix">
												<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic2.jpg" width="100" height="100" alt=""></div>
												<strong class="testimonial-name">Hemant Joshi</strong> <span class="testimonial-position">Manager</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 292px; margin-right: 30px;">
									<div class="item">
										<div class="testimonial-15 text-white">
											<div class="testimonial-text quote-left quote-right">
												<p>We really appreciate PowerBroach's global presence, providing reliable solutions wherever we are. Highly recommended!</p>
											</div>
											<div class="testimonial-detail clearfix">
												<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
												<strong class="testimonial-name">Govind Goyal</strong> <span class="testimonial-position">CEO</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 292px; margin-right: 30px;">
									<div class="item">
										<div class="testimonial-15 text-white">
											<div class="testimonial-text quote-left quote-right">
												<p>We’ve relied on PowerBroach's services for years beacuse their commitment to customer satisfaction never disappoint us.</p>
											</div>
											<div class="testimonial-detail clearfix">
												<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic2.jpg" width="100" height="100" alt=""></div>
												<strong class="testimonial-name"> Shivam Bisht </strong> <span class="testimonial-position">Manager</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 292px; margin-right: 30px;">
									<div class="item">
										<div class="testimonial-15 text-white">
											<div class="testimonial-text quote-left quote-right">
												<p>We trust PowerBroach for their innovative broaching machines. They make tough tasks simpler and faster. Highly recommended!</p>
											</div>
											<div class="testimonial-detail clearfix">
												<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic3.jpg" width="100" height="100" alt=""></div>
												<strong class="testimonial-name">Mohit Thakur</strong> <span class="testimonial-position">CEO</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item" style="width: 292px; margin-right: 30px;">
									<div class="item">
										<div class="testimonial-15 text-white">
											<div class="testimonial-text quote-left quote-right">
												<p>Every project runs smoother with PowerBroach. Their broaching machines are a true game-changer for us.
													GO And buy this!
												</p>
											</div>
											<div class="testimonial-detail clearfix">
												<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic3.jpg" width="100" height="100" alt=""></div>
												<strong class="testimonial-name">Shubham Jha</strong> <span class="testimonial-position">Manager</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item" style="width: 292px; margin-right: 30px;">
									<div class="item">
										<div class="testimonial-15 text-white">
											<div class="testimonial-text quote-left quote-right">
												<p>When we need a solution, PowerBroach is our first choice. Their broaching machines ensure smooth and precise results every time!</p>
											</div>
											<div class="testimonial-detail clearfix">
												<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic2.jpg" width="100" height="100" alt=""></div>
												<strong class="testimonial-name">Sidharth Agarwal</strong> <span class="testimonial-position">CEO</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item" style="width: 292px; margin-right: 30px;">
									<div class="item">
										<div class="testimonial-15 text-white">
											<div class="testimonial-text quote-left quote-right">
												<p>PowerBroach’s global availability ensures we have access to top-tier broaching machines anytime, anywhere. Truly a global partner!</p>
											</div>
											<div class="testimonial-detail clearfix">
												<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
												<strong class="testimonial-name">Rishabh Pathak</strong> <span class="testimonial-position">Manager</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item active" style="width: 292px; margin-right: 30px;">
									<div class="item">
										<div class="testimonial-15 text-white">
											<div class="testimonial-text quote-left quote-right">
												<p>PowerBroach’s international availability allows us to rely on their cutting-edge broaching machines for consistent results, wherever we are!</p>
											</div>
											<div class="testimonial-detail clearfix">
												<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic3.jpg" width="100" height="100" alt=""></div>
												<strong class="testimonial-name">Arjun Jain</strong> <span class="testimonial-position">CEO</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item active" style="width: 292px; margin-right: 30px;">
									<div class="item">
										<div class="testimonial-15 text-white">
											<div class="testimonial-text quote-left quote-right">
												<p>PowerBroach has been a game-changer for us. Their innovative machines and exceptional customer service always exceed expectations!</p>
											</div>
											<div class="testimonial-detail clearfix">
												<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
												<strong class="testimonial-name">Aditya singh</strong> <span class="testimonial-position">Manager</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item active" style="width: 292px; margin-right: 30px;">
									<div class="item">
										<div class="testimonial-15 text-white">
											<div class="testimonial-text quote-left quote-right">
												<p>PowerBroach delivers unmatched precision and efficiency. Their commitment to excellence is evident in every machine they produce!</p>
											</div>
											<div class="testimonial-detail clearfix">
												<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic2.jpg" width="100" height="100" alt=""></div>
												<strong class="testimonial-name">Mayank Kanojia</strong> <span class="testimonial-position">CEO</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item" style="width: 292px; margin-right: 30px;">
									<div class="item">
										<div class="testimonial-15 text-white">
											<div class="testimonial-text quote-left quote-right">
												<p>We trust PowerBroach for their outstanding support. Their machines always perform flawlessly, helping us stay ahead in the industry!</p>
											</div>
											<div class="testimonial-detail clearfix">
												<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
												<strong class="testimonial-name">Shivam Arora</strong> <span class="testimonial-position">Manager</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item" style="width: 292px; margin-right: 30px;">
									<div class="item">
										<div class="testimonial-15 text-white">
											<div class="testimonial-text quote-left quote-right">
												<p>The innovation and quality of PowerBroach’s products have made a significant difference in our operations. Highly recommended!</p>
											</div>
											<div class="testimonial-detail clearfix">
												<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic2.jpg" width="100" height="100" alt=""></div>
												<strong class="testimonial-name">Abhshek Thakur</strong> <span class="testimonial-position">CEO</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item" style="width: 292px; margin-right: 30px;">
									<div class="item">
										<div class="testimonial-15 text-white">
											<div class="testimonial-text quote-left quote-right">
												<p>Every product from PowerBroach is built to last, offering unparalleled performance and reliability. They truly stand out in the industry!</p>
											</div>
											<div class="testimonial-detail clearfix">
												<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic3.jpg" width="100" height="100" alt=""></div>
												<strong class="testimonial-name">Vaibhav kapoor</strong> <span class="testimonial-position">Manager</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 292px; margin-right: 30px;">
									<div class="item">
										<div class="testimonial-15 text-white">
											<div class="testimonial-text quote-left quote-right">
												<p>We’ve been using PowerBroach’s machines for years, and their consistent quality and efficiency have never let us down!</p>
											</div>
											<div class="testimonial-detail clearfix">
												<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic3.jpg" width="100" height="100" alt=""></div>
												<strong class="testimonial-name">Suraj Kanokia</strong> <span class="testimonial-position">CEO</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 292px; margin-right: 30px;">
									<div class="item">
										<div class="testimonial-15 text-white">
											<div class="testimonial-text quote-left quote-right">
												<p>PowerBroach offers more than just products—they provide solutions that boost our productivity and efficiency every single time!</p>
											</div>
											<div class="testimonial-detail clearfix">
												<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic2.jpg" width="100" height="100" alt=""></div>
												<strong class="testimonial-name">Rajneesh Thakur</strong> <span class="testimonial-position">Manager</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 292px; margin-right: 30px;">
									<div class="item">
										<div class="testimonial-15 text-white">
											<div class="testimonial-text quote-left quote-right">
												<p>We highly recommend PowerBroach for reliable, high-quality broaching machines. Their precision and performance are unmatched!</p>
											</div>
											<div class="testimonial-detail clearfix">
												<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
												<strong class="testimonial-name"> keshav Pathak </strong> <span class="testimonial-position">CEO</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 292px; margin-right: 30px;">
									<div class="item">
										<div class="testimonial-15 text-white">
											<div class="testimonial-text quote-left quote-right">
												<p>We recommend PowerBroach for all broaching needs. Their innovative machines and service make them a trusted partner.</p>
											</div>

											<div class="testimonial-detail clearfix">
												<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic3.jpg" width="100" height="100" alt=""></div>
												<strong class="testimonial-name">Abhimanyu Singh</strong> <span class="testimonial-position">Manager</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 292px; margin-right: 30px;">
									<div class="item">
										<div class="testimonial-15 text-white">
											<div class="testimonial-text quote-left quote-right">
												<p>We are thankful for PowerBroach's global availability, ensuring we always have the Necessary Machine and support we need, no matter where we are!</p>
											</div>
											<div class="testimonial-detail clearfix">
												<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
												<strong class="testimonial-name"> Sachin Maheshwari </strong> <span class="testimonial-position">CEO</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="ti-arrow-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="ti-arrow-right"></i></button></div>

						<div class="owl-dots d-none"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div>
					</div>

				</div>
			</div>
		</div>

		<!-- testimonial end -->


		<!-- contact us start -->

		<!-- <footer class="site-footer map-footer bg-black-1 mt-5" style="display: block; height: 500.875px;">
   <div class="footer-top"> -->
		<div class="container-fluid">
			<div class="row equal-wraper">

				<div class="col-md-12 col-lg-12 col-sm-12 p-a0 equal-col" style="height: 500.875px;">
					<iframe class="" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14444.846145183914!2d75.84806889203723!3d25.16233421040968!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1517832215254" style="border:0; width:100%; min-height:300px;	height:100%; vertical-align: middle;" allowfullscreen=""></iframe>
				</div>


			</div>
		</div>
		<!-- </div>
</footer> -->

		<!-- contact us end -->


	</div>
	<!-- Content END -->



	<?php include('include/footer.php') ?>