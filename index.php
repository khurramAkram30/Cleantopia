<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Site keywords here">
	<meta name="description" content="">
	<meta name='copyright' content=''>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Title -->
	<title>Cleantopia.</title>

	<!-- Favicon -->
	<link rel="icon" href="img/cleantopia/favicon.ico">

	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
		rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="css/nice-select.css">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- icofont CSS -->
	<link rel="stylesheet" href="css/icofont.css">
	<!-- Slicknav -->
	<link rel="stylesheet" href="css/slicknav.min.css">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="css/owl-carousel.css">
	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="css/datepicker.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="css/animate.min.css">
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Medipro CSS -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css">

	<!-- home.css -->
	<link rel="stylesheet" href="css/home.css">
	<style>
		.card-header {
			background-color: white !important;
		}

		.otp-form .otp-field {
			display: inline-block;
			width: 4rem;
			height: 4rem;
			font-size: 2rem;
			line-height: 4rem;
			text-align: center;
			border: none;
			/* border-bottom: 2px solid var(--bs-secondary); */
			border-bottom: 4px solid #1C9797;
			outline: none;
		}

		.otp-form .otp-field:focus {
			border-bottom-color: var(--bs-dark);
		}

		.col-xs-6 {
			width: 60%;
		}

		.btnstartmob {
			position: absolute;
			right: 25px;
			top: 9px;
			background-color: #1C9797;
			color: white;
			padding: 10px;
		}

		.positionsett {
			position: absolute;
			bottom: 0px;
		}

		.maindiv {
			border-radius: 10px 10px 10px 10px;
			width: 250px;
			/* border-radius: 20px; */
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: space-evenly;
			padding: 0;
			/* box-shadow: 0px 0px 13px 3px #00000075; */
			left: 40%;
			margin: 0;
			background: #e0dcdca8;
		}

		.year-div {
			font-size: 20px;
			/* margin-top: 30px; */
			padding: 10px 0 5px 0;
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		.date-div {
			display: flex;
			flex-direction: column;
			align-items: center;
			/* position: relative; */
		}

		.day {
			padding: 0;
			margin: 0;
			/* position: absolute;
  bottom: 2px; */
			font-size: 20px;
		}

		.sub-div {
			display: flex;
			flex-direction: column;
			align-items: center;
			width: 100%;
			background: #1C9797;
			border-radius: 9px 9px 0 0;
			color: white;
		}

		.dates {
		    font-size: 20px;
   			 margin: 5px;
    		padding: 0px;
		}
		.dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            z-index: 1;
            top: 53px;
            /* overflow-x: scroll; */
            height: 160px;
            width: 100%;
        }


        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
		#suggestions {
      display: block;
      position: absolute;
      width: 95%;
      max-height: 200px;
      overflow-y: auto;
      border: 1px solid #ccc;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      z-index: 1000;
    }
	ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    li {
      padding: 8px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
	</style>
</head>

<body>

	<!-- Preloader -->
	<div class="preloader">
		<div class="loader">
			<div class="loader-outter"></div>
			<div class="loader-inner"></div>

			<div class="indicator">
				<svg width="16px" height="12px">
					<polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
					<polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
				</svg>
			</div>
		</div>
	</div>
	<!-- End Preloader -->

	<!-- Get Pro Button -->
	<!-- <ul class="pro-features">
				<a class="get-pro" href="#">Get Pro</a>
				<li class="big-title">Pro Version Available on Themeforest</li>
				<li class="title">Pro Version Features</li>
				<li>2+ premade home pages</li>
				<li>20+ html pages</li>
				<li>Color Plate With 12+ Colors</li>
				<li>Sticky Header / Sticky Filters</li>
				<li>Working Contact Form With Google Map</li>
				<div class="button">
					<a href="http://preview.themeforest.net/item/mediplus-medical-and-doctor-html-template/full_screen_preview/26665910?_ga=2.145092285.888558928.1591971968-344530658.1588061879" target="_blank" class="btn">Pro Version Demo</a>
					<a href="https://themeforest.net/item/mediplus-medical-and-doctor-html-template/26665910" target="_blank" class="btn">Buy Pro Version</a>
				</div>
			</ul>
		-->
	<!-- Header Area -->
	<header class="header">
		<!-- Topbar -->

		<!-- End Topbar -->
		<!-- Header Inner -->
		<?php
		include "header.php";
		?>
		<!--/ End Header Inner -->
	</header>
	<!-- End Header Area -->

	<!-- Slider Area -->
	<section class="slider desktop">
		<div class="hero-slider">
			<!-- Start Single Slider -->
			<div class="single-slider" style="background-image:url('img/cleantopia/cleantopia1.svg')">
				<div class="container slidercontainer">
					<div class="row">
						<div class="col-lg-7">
							<div class="text1">
								<!-- <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1> -->
								<div style="position: relative;margin-top:10px">
									<h6 style="font-size: 20px;color:#1C9797;margin-bottom: 10px;">Enter your address to
										check coverage and begin your order!
									</h6>

									<input type="text" placeholder="Enter your address" class="text_your_address"
										style="width: 535px;padding: 13px;border-radius: 10px;">
									<button class="btnstart" style="">Start Your Order</button>
									<!-- <div id="suggestions"></div> -->
								</div>
								<!-- <div class="button">
										<a href="#" class="btn">Get Appointment</a>
										<a href="#" class="btn primary">Learn More</a>
									</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slider -->
			<!-- Start Single Slider -->
			<div class="single-slider" style="background-image:url('img/cleantopia/secondSlider.svg')">
				<div class="container slidercontainer">
					<div class="row">
						<div class="col-lg-7">
							<div class="text2">
								<h1 class="" style="color:#1C9797;font-weight: 500;font-size: 50px;line-height: 60px;">
									<span style="color:#1C9797;font-weight: 900;font-family: 'roboto-bold';">Stop
									</span> Doing Your <br> Own Laundry
								</h1>
								<p class="pdetails">Start
									enjoying life's little pleasures. Let us handle the <br> dirty work for you!</p>

								<div style="position: relative;margin-top:10px">
									<h6 style="font-size: 20px;color:#1C9797;margin-bottom: 10px;">Enter your address to
										check coverage and begin your order!
									</h6>

									<input type="text" placeholder="Enter your address" class="text_your_address"
										style="width: 535px;padding: 13px;border-radius: 10px;">
									<button class="btnstart" style="">Start Your Order</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Start End Slider -->
			<!-- Start Single Slider -->
			<div class="single-slider" style="background-image:url('img/cleantopia/thirdSlide.svg')">
				<div class="container slidercontainer">
					<div class="row">
						<div class="col-lg-7">
							<div class="text2">
								<h1 class="" style="color:#1C9797;font-weight: 500;font-size: 50px;line-height: 60px;">
									Leave It to the
									<span
										style="color:#1C9797;font-weight: 900;font-family: 'roboto-bold';">Professionals!
									</span>
								</h1>
								<p class="pdetails">Relax and let our expert team take care of your laundry. Your
									clothes will thank you with a smile!</p>

								<div style="position: relative;margin-top:10px">
									<h6 style="font-size: 20px;color:#1C9797;margin-bottom: 10px;">Enter your address to
										check coverage and begin your order!
									</h6>

									<input type="text" placeholder="Enter your address" class="text_your_address"
										style="width: 535px;padding: 13px;border-radius: 10px;">
									<button class="btnstart" style="">Start Your Order</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slider -->

			<!-- Start Single Slider -->
			<div class="single-slider" style="background-image:url('img/cleantopia/fourth.svg')">
				<div class="container slidercontainer">
					<div class="row">
						<div class="col-lg-7">
							<div class="text2">
								<h1 class="" style="color:#1C9797;font-weight: 500;font-size: 50px;line-height: 60px;">
									<span style="color:#1C9797;font-weight: 900;font-family: 'roboto-bold';">Pay easily
									</span> on your <br> phone!
								</h1>
								<p class="pdetails">Paying for our services is as easy as a tap on your phone screen.
									Enjoy hassle-free transactions and convenience at its best.</p>

								<div style="position: relative;margin-top:10px">
									<h6 style="font-size: 20px;color:#1C9797;margin-bottom: 10px;">Enter your address to
										check coverage and begin your order!
									</h6>

									<input type="text" placeholder="Enter your address" class="text_your_address"
										style="width: 535px;padding: 13px;border-radius: 10px;">
									<button class="btnstart" style="">Start Your Order</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slider -->

			<!-- Start Single Slider -->
			<div class="single-slider" style="background-image:url('img/cleantopia/fifth.svg')">
				<div class="container slidercontainer">
					<div class="row">
						<div class="col-lg-7">
							<div class="text2">
								<h1 class="" style="color:#1C9797;font-weight: 500;font-size: 50px;line-height: 60px;">
									Dive Into Your <br>
									<span style="color:#1C9797;font-weight: 900;font-family: 'roboto-bold';">Free Time!
									</span>
								</h1>
								<p class="pdetails">While we take care of your laundry, you're free to dive into the
									things you love. Beach or no beach, it's all yours!</p>

								<div style="position: relative;margin-top:10px">
									<h6 style="font-size: 20px;color:#1C9797;margin-bottom: 10px;">Enter your address to
										check coverage and begin your order!
									</h6>

									<input type="text" placeholder="Enter your address" class="text_your_address"
										style="width: 535px;padding: 13px;border-radius: 10px;">
									<button class="btnstart" style="">Start Your Order</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slider -->
		</div>
	</section>
	<!--/ End Slider Area -->

	<!-- Slider Area -->
	<section class="slider mobile">
		<div class="hero-slider">
			<!-- Start Single Slider -->
			<div class="single-slider" style="background-image:url('img/cleantopia/mobile_responsive1.png')">
				<div class="container slidercontainermobile">
					<div class="row">
						<div class="col-md-12 positionsett">
							<div>
								<input type="text" placeholder="Enter your address" class=" form-control text_address"
									style="padding: 13px;border-radius: 10px;">
								<button class="btnstartmob" style="">Start Your Order</button>

								<h6 style="text-align:center;font-size: 20px;color:#1C9797;margin-bottom: 10px;">Enter
									your address to
									check coverage and begin your order!
								</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slider -->
			<!-- Start Single Slider -->
			<div class="single-slider" style="background-image:url('img/cleantopia/Banner2.png')">
				<div class="container slidercontainermobile">
					<div class="row">
						<div class="col-sm-7 col-xs-6">
							<div class="text2">
								<h1 class="" style="color:#1C9797;font-weight: 300;font-size: 30px;line-height: 30px;">
									<span style="color:#1C9797;font-weight: 900;font-family: 'roboto-bold';">Stop
									</span> Doing Your Own Laundry
								</h1>
								<p class="pdetails">Start
									enjoying life's little pleasures. Let us handle the dirty work for you!</p>


							</div>
						</div>
						<div class="col-sm-6 col-xs-6"></div>
						<div class="col-md-12 positionsett">
							<div>
								<input type="text" placeholder="Enter your address" class="form-control text_address"
									style="padding: 13px;border-radius: 10px;">
								<button class="btnstartmob" style="">Start Your Order</button>

								<h6 style="text-align:center;font-size: 20px;color:#1C9797;margin-bottom: 10px;">Enter
									your address to
									check coverage and begin your order!
								</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Start End Slider -->
			<!-- Start Single Slider -->
			<div class="single-slider" style="background-image:url('img/cleantopia/Banner3.png')">
				<div class="container slidercontainermobile">
					<div class="row">
						<div class="col-sm-7 col-xs-6">
							<div class="text2">
								<h1 class="" style="color:#1C9797;font-weight: 300;font-size: 30px;line-height: 30px;">
									Leave It to the
									<span
										style="color:#1C9797;font-weight: 900;font-family: 'roboto-bold';">Professionals!
									</span>
								</h1>
								<p class="pdetails">Relax and let our expert team take care of your laundry. Your
									clothes will thank you with a smile!</p>


							</div>
						</div>
						<div class="col-sm-6 col-xs-6"></div>
						<div class="col-md-12 positionsett">
							<div>
								<input type="text" placeholder="Enter your address" class=" form-control text_address"
									style="padding: 13px;border-radius: 10px;">
								<button class="btnstartmob" style="">Start Your Order</button>

								<h6 style="text-align:center;font-size: 20px;color:#1C9797;margin-bottom: 10px;">Enter
									your address to
									check coverage and begin your order!
								</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slider -->

			<!-- Start Single Slider -->
			<div class="single-slider" style="background-image:url('img/cleantopia/Banner4.png')">
				<div class="container slidercontainermobile">
					<div class="row">
						<div class="col-sm-7 col-xs-6">
							<div class="text2">
								<h1 class="" style="color:#1C9797;font-weight: 300;font-size: 30px;line-height: 30px;">
									<span style="color:#1C9797;font-weight: 900;font-family: 'roboto-bold';">Pay easily
									</span> on your <br> phone!
								</h1>
								<p class="pdetails">Paying for our services is as easy as a tap on your phone screen.
									Enjoy hassle-free transactions and convenience at its best.</p>


							</div>
						</div>
						<div class="col-sm-6 col-xs-6"></div>
						<div class="col-md-12 positionsett">
							<div>
								<input type="text" placeholder="Enter your address" class=" form-control text_address"
									style="padding: 13px;border-radius: 10px;">
								<button class="btnstartmob" style="">Start Your Order</button>

								<h6 style="text-align:center;font-size: 20px;color:#1C9797;margin-bottom: 10px;">Enter
									your address to
									check coverage and begin your order!
								</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slider -->

			<!-- Start Single Slider -->
			<div class="single-slider" style="background-image:url('img/cleantopia/Banner5.png')">
				<div class="container slidercontainermobile">
					<div class="row">
						<div class="col-sm-7 col-xs-6">
							<div class="text2">
								<h1 class="" style="color:#1C9797;font-weight: 300;font-size: 30px;line-height: 30px;">
									Dive Into Your
									<span style="color:#1C9797;font-weight: 900;font-family: 'roboto-bold';">Free Time!
									</span>
								</h1>
								<p class="pdetails">While we take care of your laundry, you're free to dive into the
									things you love. Beach or no beach, it's all yours!</p>


							</div>
						</div>
						<div class="col-sm-6 col-xs-6"></div>
						<div class="col-md-12 positionsett">
							<div>
								<input type="text" placeholder="Enter your address" class=" form-control text_address"
									style="padding: 13px;border-radius: 10px;">
								<button class="btnstartmob" style="">Start Your Order</button>

								<h6 style="text-align:center;font-size: 20px;color:#1C9797;margin-bottom: 10px;">Enter
									your address to
									check coverage and begin your order!
								</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slider -->
		</div>
	</section>
	<!--/ End Slider Area -->






	<!-- how it works start -->

	<div class="container-fluid marginset  ">
		<div class="row">
			<div class="col-md-12 fourstepheading">
				<h5 class="howitworks">How it Works</h5>
				<h2 class="h2getitdone">GET IT DONE IN 4 STEPS</h2>
			</div>
			<div class="col-md-12 p-0 mt-5">
				<img src="img/cleantopia/Frame 34.svg" class="desktop" width="100%" alt="">
				<img src="img/cleantopia/Frame 52.svg" width="100%" class="mobile" alt="">

			</div>
		</div>
	</div>

	<!-- how it works end -->


	<!-- Schedule a pick up  start-->
	<div class="container " id="pickup">
		<div class="row">
			<div class="col-md-12 fourstepheading">
				<h5 class="howitworks">Only for 99¢/Lbs</h5>
				<h2 class="h2getitdone">Schedule a pickup now </h2>
			</div>
			<div class="col-md-12" style="padding: 25px;">
				<div class="card" style="box-shadow: 0px 0px 5px 0px;">
					<div class="card-body">
						
						<form id="schedulePickUp">
							<!-- row 1 -->
							<div class="row mb-5">
								<div class="col-md-1"></div>
								<div class="col-md-5">
									<div class="form-floating">
										<input type="text" class="form-control" id="Name" name="Name"
											placeholder="name@example.com" value="" Required>
										<label for="floatingInputValue">Name *</label>
									</div>
								</div>
								<!-- <div class="col-md-2"></div> -->
								<div class="col-md-5">
									<div class="form-floating">
										<input type="phone" class="form-control" id="Phone" name="number" value=""
											minlength="10" maxlength="13" size="13" placeholder=" Phone Number"
											Required>
										<label for="floatingInputValue">Phone Number *</label>
									</div>
								</div>

								<div class="col-md-1"></div>

							</div>

							<!-- row 2 -->
							<div class="row mb-5">
								<div class="col-md-1"></div>
								<div class="col-md-5 mb-5">
									<div class="form-floating">
										<input type="text" readonly class="form-control" id="Date" name="Date"
										 Required>
										<label for="floatingInputValue">Pickup Day*</label>
										<div id="calendarDropdown" class="dropdown-content">
							
										</div>
									</div>
								</div>
								<!-- <div class="col-md-2"></div> -->
								<div class="col-md-5 mb-2">
									<div class="form-floating">
										<select class="form-select" id="time" name="time" disabled
											aria-label="Floating label select example" Required
											style="background: none;border: none;border-bottom: 1px solid;">
											<option>Please Select the Time</option>
											<!-- <option value="6:00 to 7:00 am">6:00 to 7:00 am</option> -->
										</select>
										<label for="floatingSelectGrid">Pick up Time *</label>
									</div>
								</div>

								<div class="col-md-1"></div>

							</div>

							<!-- row 3 -->
							<div class="row mb-5">
								<div class="col-md-1"></div>
								<div class="col-md-10">
									<div class="form-floating">
										<input type="address" class="form-control" id="address"
											placeholder="name@example.com" name="address" value="" Required>
										<label for="floatingInputValue">Address*</label>
									</div>
								</div>


								<div class="col-md-1"></div>

							</div>

							<!-- row 4 -->
							<div class="row mb-5">
								<div class="col-md-1"></div>
								<div class="col-md-10">
									<div class="form-floating">
										<textarea class="form-control" placeholder="Leave a comment here"
											id="floatingTextarea2" name="Washinginstruction" style="height: 100px"></textarea>
										<label for="floatingInputValue">Washing Instructions</label>
									</div>
								</div>


								<div class="col-md-1"></div>

							</div>


							<!-- row 5 -->
							<div class="row mb-3">
								<div class="col-md-1"></div>
								<div class="col-md-10">
									<div class="form-floating">
										<textarea class="form-control" name="Deliveryinstruction" placeholder="Leave a comment here"
											id="floatingTextarea2" style="height: 100px"></textarea>
										<label for="floatingInputValue">Delivery Instructions</label>
									</div>
								</div>


								<div class="col-md-1"></div>

							</div>

							<div class="row mb-5">
								<div class="col-md-1"></div>
								<div class="col-md-10">
									<h6>* Required </h6>
								</div>


								<div class="col-md-1"></div>

							</div>


							<div class="row mb-1">
								<div class="col-md-12 text-center">
									<button class="btn" style="background-color:#1C9797;color: white;">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Schedule a pick up  end-->


	<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#otpModal">
  Launch demo modal
</button> -->
	<!-- Footer Area -->
	<?php
	include "footer.php";
	?>



	<?php
	include "otpmodal.php";
	include "successmodal.php";
	include "NoaddressModal.php";
	include "successEmailModal.php";
	include "warningmodal.php";

	?>
	<!--/ End Footer Area -->

	<!-- jquery Min JS -->
	<script src="js/jquery.min.js"></script>
	<!-- jquery Migrate JS -->
	<script src="js/jquery-migrate-3.0.0.js"></script>
	<!-- jquery Ui JS -->
	<script src="js/jquery-ui.min.js"></script>
	<!-- Easing JS -->
	<script src="js/easing.js"></script>
	<!-- Color JS -->
	<script src="js/colors.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap Datepicker JS -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Jquery Nav JS -->
	<script src="js/jquery.nav.js"></script>
	<!-- Slicknav JS -->
	<script src="js/slicknav.min.js"></script>
	<!-- ScrollUp JS -->
	<script src="js/jquery.scrollUp.min.js"></script>
	<!-- Niceselect JS -->
	<!-- <script src="js/niceselect.js"></script> -->
	<!-- Tilt Jquery JS -->
	<script src="js/tilt.jquery.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="js/owl-carousel.js"></script>
	<!-- counterup JS -->
	<script src="js/jquery.counterup.min.js"></script>
	<!-- Steller JS -->
	<script src="js/steller.js"></script>
	<!-- Wow JS -->
	<script src="js/wow.min.js"></script>
	<!-- Magnific Popup JS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Counter Up CDN JS -->
	<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script> -->
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCy3n78UjkGsKus80FssP9T60CF1Ixxo0M&callback=initAutocomplete&libraries=places&v=weekly"
      defer></script>
   
<!-- date calendar -->
<script>

let autocomplete;
let addressInputs = document.querySelectorAll(".text_your_address, .text_address");

// This function will be called when the Google Maps API is loaded
function initAutocomplete() {
  addressInputs.forEach(function(addressInput) {
    autocomplete = new google.maps.places.Autocomplete(addressInput, {
      componentRestrictions: { country: ["us", "ca"] },
      fields: ["address_components", "geometry"],
      types: ["address"],
    });

    autocomplete.addListener("place_changed", function() {
      fillInAddress(addressInput);
    });
  });
}

function fillInAddress(addressInput) {
  const place = autocomplete.getPlace();
  console.log(place);
}


function getDayOfWeek(date) {
    let days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    return days[date.getDay()];
}

// Function to get the month (e.g., "Mar")
function getMonth(date) {
    let months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    return months[date.getMonth()];
}

// Function to fill the date field with the selected date
function filldateField(date) {
    $("#calendarDropdown").css("display", "none");
    let formattedDate = `${getDayOfWeek(date)} ${getMonth(date)} ${date.getDate()}`;
    $("#Date").val(formattedDate);
	openTime();
}

$(document).ready(function () {

	$("#Date").on("focus", function () {
        $(".dropdown-content").css("display", "block");
    });


    // let currentDate = new Date();
    // for (let i = 0; i < 6; i++) {
	// 	let nextDate = new Date();
    //     nextDate.setDate(currentDate.getDate() + i);
		
    //     let formattedDate = `${nextDate.getDate()}, ${getDayOfWeek(nextDate)}, ${getMonth(nextDate)}`;
		
    // }

   
	$(".btnstart").on("click",function(){
    let nonEmptyFields = $(".text_your_address").filter(function() {
        return this.value.trim() !== "";
    });

    if(nonEmptyFields.length > 0){
        $("#AddressModal").modal("show");
    } else {
		
		$("#warningModal").modal("show");
		$("#warningMessage").html("Please Write Something in the field");
		setTimeout(() => {
		$("#warningModal").modal("hide");
			
		}, 2000);
  }
});

// mobile

$(".btnstartmob").on("click",function(){
    let nonEmptyFields = $(".text_address").filter(function() {
        return this.value.trim() !== "";
    });

    if(nonEmptyFields.length > 0){
        $("#AddressModal").modal("show");
    } else {
		
		$("#warningModal").modal("show");
		$("#warningMessage").html("Please Write Something in the field");
		setTimeout(() => {
		$("#warningModal").modal("hide");
			
		}, 2000);
  }
});

});
function openTime() {
		 $("#time").prop("disabled", false);

        let selectElement = document.getElementById("time");
        // selectElement.innerHTML = "";

        // for (let i = 7; i < 21; i++) {
        //     let option = document.createElement("option");
        //     option.text = `${i}:00 to ${i + 1}:00`;
        //     option.value = `${i}:00 to ${i + 1}:00`;
        //     selectElement.appendChild(option);
        // }
    }

$("#sendEmailBtn").on("click",function(){
	let email=$("#emailAddress").val();
	if(email == ""){
		$("#warningModal").modal("show");
		$("#warningMessage").html("Please Write Email");
		setTimeout(() => {
			
		$("#warningModal").modal("hide");
			
		}, 2000);
	}
	else{
		
		$("#AddressModal").modal("hide");
		$("#successEmailModal").modal("show");
		setTimeout(() => {
			
			$("#successEmailModal").modal("hide");
				
			}, 2000);
		

	}
})

</script>
<!-- date calendar -->


	<script type="module">
		// Import the functions you need from the SDKs you need
		import { initializeApp } from "https://www.gstatic.com/firebasejs/9.7.0/firebase-app.js";
		import { getFirestore, collection, addDoc, getDoc, getDocs, query, where, doc, setDoc } from "https://www.gstatic.com/firebasejs/9.7.0/firebase-firestore.js";
		import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.7.0/firebase-analytics.js";

		// TODO: Add SDKs for Firebase products that you want to use
		// https://firebase.google.com/docs/web/setup#available-libraries

		// Your web app's Firebase configuration
		// For Firebase JS SDK v7.20.0 and later, measurementId is optional
		/*const firebaseConfig = {
		  apiKey: "AIzaSyC6C9eZmYZYz-6l3NZd5YdgbTr1hT2HQiE",
		  authDomain: "cleantopia-176b4.firebaseapp.com",
		  projectId: "cleantopia-176b4",
		  storageBucket: "cleantopia-176b4.appspot.com",
		  messagingSenderId: "821180137418",
		  appId: "1:821180137418:web:bd808bcd1779f916a79933",
		  measurementId: "G-L93919LR0Y"
		};*/
		const firebaseConfig = {
			apiKey: "AIzaSyCYwnNd1yCmjKfp1eU1t_Av3Gj5AdzMnKY",
			authDomain: "laundryfirebasebackend.firebaseapp.com",
			databaseURL: "https://laundryfirebasebackend-default-rtdb.firebaseio.com",
			projectId: "laundryfirebasebackend",
			storageBucket: "laundryfirebasebackend.appspot.com",
			messagingSenderId: "128088765033",
			appId: "1:128088765033:web:6088a40ce8da16d402e8f8",
			measurementId: "G-VBB15DSJLX"
		};

		// Initialize Firebase
		const app = initializeApp(firebaseConfig);
		const analytics = getAnalytics(app);
		const db = getFirestore(app);
		//   console.log("app",app);
		//   console.log("db",db);

		window.addDoc = addDoc;
		window.getDocs = getDocs;
		window.getDoc = getDoc;
		window.setDoc = setDoc;
		window.db = db;
		window.collection = collection;
		window.query = query;
		window.where = where;
		window.doc = doc;


		//   console.log(addDoc,"adddoc");



		$(document).ready(function () {
			$(".owl-nav").css("display", "none");
			//      $(".hero-slider").owlCarousel({
			//     items: 1,
			//     loop: true,
			//     nav: true, // Previous and next navigation
			//     dots: true, // Show navigation dots
			//     autoplay: false,
			//     autoplayTimeout: 1000000,
			//     autoplayHoverPause: false,
			// });
		});

		$(document).ready(function () {
			// Add minus icon for collapse element which is open by default
			$(".collapse.show").each(function () {
				$(this)
					.prev(".card-header")
					.find(".fa")
					.addClass("fa-minus")
					.removeClass("fa-plus");
			});

			// Toggle plus minus icon on show hide of collapse element
			$(".collapse")
				.on("show.bs.collapse", function () {
					$(this)
						.prev(".card-header")
						.find(".fa")
						.removeClass("fa-plus")
						.addClass("fa-minus");
				})
				.on("hide.bs.collapse", function () {
					$(this)
						.prev(".card-header")
						.find(".fa")
						.removeClass("fa-minus")
						.addClass("fa-plus");
				});

			// otp Value
			$(".otp-form *:input[type!=hidden]:first").focus();
			let otp_fields = $(".otp-form .otp-field"),
				otp_value_field = $(".otp-form .otp-value");
			otp_fields
				.on("input", function (e) {
					$(this).val(
						$(this)
							.val()
							.replace(/[^0-9]/g, "")
					);
					let opt_value = "";
					otp_fields.each(function () {
						let field_value = $(this).val();
						if (field_value != "") opt_value += field_value;
					});
					otp_value_field.val(opt_value);
				})
				.on("keyup", function (e) {
					let key = e.keyCode || e.charCode;
					if (key == 8 || key == 46 || key == 37 || key == 40) {
						// Backspace or Delete or Left Arrow or Down Arrow
						$(this).prev().focus();
					} else if (key == 38 || key == 39 || $(this).val() != "") {
						// Right Arrow or Top Arrow or Value not empty
						$(this).next().focus();
					}
				})
				.on("paste", function (e) {
					let paste_data = e.originalEvent.clipboardData.getData("text");
					let paste_data_splitted = paste_data.split("");
					$.each(paste_data_splitted, function (index, value) {
						otp_fields.eq(index).val(value);
					});
				});
			// otp value
			$("#verify").on("click", function () {
				let otp = $(".otp-value").val();
				verifyOTP(mobile_number, otp);

			})

		});

	
		var mobile_number = "";
		$("#schedulePickUp").submit(function (event) {
			event.preventDefault();
			var form_data = new FormData(document.querySelector('#schedulePickUp'));
			// console.log("form_data:", ...form_data);
			var data = {};
			form_data.forEach(function (value, key) {
				data[key] = value;
			});
			//var form_data = new FormData(document.querySelector('#form2')); 
			//   console.log(data);
			var number = data['number'];
			if (number.length == 10) {
				number = '+1' + number;
			}
			mobile_number = encodeURIComponent(number);
			var verified_number = localStorage.getItem("verified_number");
			if (mobile_number == verified_number) {
				// alert("send");
				  sendData();
			} else {
				$("#otpModal").modal("show")
				// console.log("mobile:",mobile_number);
				sentOTP(mobile_number);
				var hashed = hashed_number(number);
				$("#hashed_number").html(hashed);
			}

			// sendData();

			return false;

		})


		function hashed_number(number) {
			var hashed = "";
			var l = number.length;
			for (var i = 0; i < l; i++) {
				if (i < 3 || i > l - 4) {
					hashed += number.charAt(i);
				} else {
					hashed += "*";
				}
			}
			return hashed;
		}



		//  otp
		function sentOTP(number) {
			$.ajax({
				url: "https://us-central1-laundryfirebasebackend.cloudfunctions.net/sentOTP?mobile=" + number,
				type: "GET",
				contentType: false,
				cache: false,
				processData: false,
				beforeSend: function () { },
				success: function (response) {
					console.log(response);
				},
				error: function (e) {
					console.log(e);
				}
			});
		}
		// otp

		// validateOtp
		var validateLock = false;


		// validateOtp

		// verifyotp
		function verifyOTP(number, otps) {
			// alert(otps);
			if (!validateLock) {
				validateLock = true;
				$.ajax({
					url: "https://us-central1-laundryfirebasebackend.cloudfunctions.net/verifyOTP?mobile=" + number + "&otp=" + otps,
					type: "GET",
					contentType: false,
					cache: false,
					processData: false,
					beforeSend: function () {

					},
					success: function (e) {
						if (e['result'] == "success") {
							localStorage.setItem("verified_number", number);
							sendData();
						} else {
							// $("#otp_message").css("display", "block");
							$("#otp_message").removeClass("d-none");
							$("#otp_message").html("invalid otp").removeClass("alert-success").addClass("alert-danger");

						}
						validateLock = false;

					},
					error: function (e) {
						//   alert("123")
						validateLock = false;
					}
				});
			}
		}
		// verify otp
		// getOrder();

		// order fetch
		async function getOrder() {
			var OrderId="kDK4yhVmwxBKQRuqLn1m";
			const docRef = doc(db, "orders", OrderId);
			const orderSnap = await getDoc(docRef);
			console.log("ps:", orderSnap.data());
			const order = orderSnap.data()
			if (order['payment_status'] != 'paid') {
				order['generatePaymentLink'] = true;
				order['triggerFunction'] = true;
				order['checkout_link'] = "";
				order['checkout_id'] = "";

				const ordersRef = collection(db, "orders");
				let resp = await setDoc(doc(ordersRef, OrderId), { ...order });
				console.log(resp)
				getLink();
				setTimeout(async function () {
					// getLink();
					/*const docRef = doc(db, "orders", OrderId);
					const orderSnap = await getDoc(docRef);
					console.log("ps:", orderSnap.data());
					window.location.href = orderSnap.data()['checkout_link'];*/
				}, 2000)

			}
			else {
				$('#PaymentMsgDiv').html("<h2>Payment already completed successfully</h2>");
				//alert( "Already Paid");
			}

		}
		async function getLink() {
			const docRef = doc(db, "orders", OrderId);
			const orderSnap = await getDoc(docRef)
			console.log("ps:", orderSnap.data());
			let link = orderSnap.data();
			if (link['checkout_link'] != "") {
				window.location.href = orderSnap.data()['checkout_link'];
				console.log("success");
			} else {
				getLink();
			}
		}



		// order fetch

		// start sendData

		async function sendData() {
			var form_data = new FormData(document.querySelector('#schedulePickUp'));
			var data = {
				'deliveryDate': "",
				'numBags': 0,
				'numberOfBedding': 0,
				'totalPounds': 0,
				'payment_status': 'unpaid',
				'totalPrice': 0.0,
				'washingNotes': '',
				'inStorePickup': false,
				'customerPickupCompleted': false,
				'bags': [],
				'pricingInfo': pricingInfo

				/*'pricingInfo':{
					'comforter_bedding_price': 399,
					'price_per_pound': 110
				}*/
			};


			data["created_at"] = new Date();

			data["order_status"] = "pending pickup";
			form_data.forEach(function (value, key) {
				data[key] = value;
			});
			/*var pick_date_timestamp = Date.parse(data['pickup_date']+" 00:00:00 EDT");
			data["pick_date_timestamp"] = new Date(pick_date_timestamp);*/
			let number = data['number'];
			if (number.length == 10) {
				data['number'] = '+1' + data['number'];
			}

			if (data['number'] != "" && data['name'] != "") {
				const docRef = await addDoc(collection(db, "orders"), {
					...data
				});
				console.log("Document written with ID: ", docRef.id);
				$("#otpModal").modal("hide");
				$("#successModal").modal("show");

				setTimeout(() => {
				$("#successModal").modal("hide");
				window.location.reload();
				}, 4000);
			}
		}

		// End send Data


		// pricing info start
		var resend_counter = 1;
		let pricingInfo = {};

		setTimeout(getPricingInfo, 2000);

		async function getPricingInfo() {

			const docRef = doc(db, "Item", "SIRykFKiKAXKEwLWlMlV");

			const priceSnap = await getDoc(docRef)

			// console.log("ps:", priceSnap.data());

			pricingInfo = priceSnap.data();
		}

		// pricing info end


		//  resend otp
		$("#Resend").on("click", function () {
			if (resend_counter < 4) {
				$("#otp_message").addClass("d-none");
				$(".otp-field").val("");
				resend_counter += 1;
				sentOTP(mobile_number);
			} else {
				$("#Resend").css("display", "none");
				$("#otp_message").removeClass("d-none");
				$("#otp_message").html("Limit Exceed").removeClass("alert-success").addClass("alert-danger");
			}
		})
		// resend otp end


		// get data and time start
		var dateRange = document.getElementById('date-range');
    var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    var daynames =["Mon","Tue","Wed","Thu","Fri","Sat","Sun"];
  async function loadPickUpTimes(){
    const AvailableTime = await getDocs(collection(db, "AvailableTime"));
    AvailableTime.forEach((doc) => {
        let av = doc.data();
	
	let currentDate = new Date();
let availableDays = av["Days"];
let timeslot=av["TimeSlot"];
timeslot.forEach(val=>{
	let option = document.createElement("option");
            option.text = `${val}`;
            option.value = `${val}`;
            $("#time").append(option);
});
let todayIndex = availableDays.indexOf(getDayOfWeek(new Date())); // Get the index of today's day
let dayIndex = todayIndex;



while (true) {
    if (availableDays.includes(getDayOfWeek(new Date(currentDate.getTime() + dayIndex * 24 * 60 * 60 * 1000)))) {
        break;
    }
    dayIndex++;
}

let htmlCode = '';
htmlCode += `<div class="d-flex" style="gap: 10px;padding: 25px;">`;


// for (let i = todayIndex; i < availableDays.length + todayIndex; i++) {
// 	console.log(i,"i")
//     let dayIndex = i % availableDays.length; // Calculate the index within the array range
// 	console.log(dayIndex,"dayindex");
//     let nextDate = new Date(currentDate.getTime());
// 	console.log(nextDate,"nextDatebefore");

//     nextDate.setDate(currentDate.getDate() + dayIndex);
// 	console.log(nextDate,"nextDateafter");

//     let dayOfWeek = availableDays[dayIndex];
// 		console.log(dayOfWeek,"dayOfWeek");

//     let formattedDate = `${nextDate.getDate()}, ${dayOfWeek}, ${getMonth(nextDate)}`;
// 	console.log(formattedDate);

  

//     if (dayOfWeek == undefined) {
// 		console.log("currentDate");
//         currentDate.setDate(currentDate.getDate() + 1);
//     }
// 	else{
// 		// console.log(availableDays)
// 		// console.log(formattedDate);

//   htmlCode += `<div class="maindiv" onclick="filldateField(new Date(${nextDate.getTime()}))">
//         <div class="sub-div">
//             <div class="year-div">
//                 <div id="month">${nextDate.getDate()}</div>
//             </div>
//         </div>
//         <div class="date-div">
//             <p id="dates" class="dates">${dayOfWeek}</p>
//             <p id="day" class="day">${getMonth(nextDate)}</p>
//         </div>
//     </div>`;
// 	}
// }

for (var day = 0; day < 7; day++) {
    var date = new Date();
    date.setDate(date.getDate() + day);
	// console.log(date.getDay())
    let dayName = daynames[date.getDay()-1];
	// console.log(daynames,"daynames")
	// console.log(dayName,"dayname")

    if (availableDays.indexOf(dayName) > -1) {
        var month = date.getMonth() + 1;
        if (month < 10) {
            month = "0" + month;
        }
        var dateVal = date.getDate();
        if (dateVal < 10) {
            dateVal = "0" + dateVal;
        }
        var formattedDate = `${dateVal}, ${dayName}, ${monthNames[date.getMonth()]}`;
        // console.log(formattedDate);

        htmlCode += `<div class="maindiv" onclick="filldateField(new Date(${date.getTime()}))">
            <div class="sub-div">
                <div class="year-div">
                    <div id="month">${date.getDate()}</div>
                </div>
            </div>
            <div class="date-div">
                <p id="dates" class="dates">${dayName}</p>
                <p id="day" class="day">${monthNames[date.getMonth()]}</p>
            </div>
        </div>`;
    }
}



htmlCode += `</div>`;
$("#calendarDropdown").html(htmlCode);

      });
  }

//   loadPickUpTimes();
  setTimeout(loadPickUpTimes, 1000);

		// get data and time end

	if ('OTPCredential' in window) {
    //alert("OTPCredential");
      window.addEventListener('DOMContentLoaded', (e) => {
        // const input = document.querySelector('#otp > *[id]');       
        const ac = new AbortController();        
        navigator.credentials
          .get({
            otp: { transport: ['sms'] },
            signal: ac.signal,
          })
          .then((otp) => {
			alert(otp.code);
			$(".otp-value").val(otp.code);
            //input.value = otp.code;
			const inputs = document.querySelectorAll('.otp-field');
   			 for (let i = 0; i < inputs.length; i++) {
              inputs[i].value = otp.code.charAt(i)
            }
        
          })
          .catch((err) => {
            console.log(err);
          });
      });
    }




$( "#schedulePickUp" ).submit(function( event ) {
var form_data = new FormData(document.querySelector('#schedulePickUp')); 
// console.log(form_data);
          $.ajax({
                  url: "insertajax.php",
                  type: "POST",
                  data:  form_data,
                  contentType: false,
                       cache: false,
                  processData:false,
                  beforeSend : function()
                  {
					
                  },
                  success: function(data)
                    {
                    
                    // alert('Successfully' + data);
                    // $("#alertss1").css("display","block").delay(3000).fadeOut();
                    // window.open('services.php','_self');
                    
                  
                  },
                   error: function(e) 
                    {
                                 
					}          
                  });
                  
                  
                     
return false;

});



	</script>
</body>

</html>