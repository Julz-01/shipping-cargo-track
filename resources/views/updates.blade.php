<!DOCTYPE html>
<html lang="en-US">


<!-- Mirrored from nilethemes.com/html/nile-logistics/service-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2019 04:20:50 GMT -->
<head>
	<title>Macro Ocean Philippines Inc.</title>
	<meta name="author" content="Nile-Theme">
	<meta name="robots" content="index follow">
	<meta name="googlebot" content="index follow">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="keywords" content="cargo, clean, contractor, corporate, freight, industry, localization, logistics, modern, shipment, transport, transportation, truck, trucking">
	<meta name="description" content="Transportation and Logistics Responsive HTML5 Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800%7CPoppins:300i,300,400,500,600,700,400i,500%7CDancing+Script:700%7CDancing+Script:700%7CGreat+Vibes:400%7CPoppins:400%7CDosis:800%7CRaleway:400,700,800&amp;subset=latin-ext" rel="stylesheet">
	<!-- animate -->
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
	<!-- owl Carousel assets -->
	<link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<!-- hover anmation -->
	<link rel="stylesheet" href="{{ asset('css/hover-min.css') }}">
	<!-- flag icon -->
	<link rel="stylesheet" href="{{ asset('css/flag-icon.min.css') }}">
	<!-- main style -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<!-- elegant icon -->
	<link rel="stylesheet" href="{{ asset('css/elegant_icon.css') }}">
	<!-- fontawesome  -->
	<link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">

	<link rel="stylesheet" href="{{ asset('css/design.css') }}">

</head>

<body>
	<!--  Header  -->
	<header class="background-white">
		<div class="header-output">
			<div class="header-output">
				<div class="header-in">

					<!-- Up Head -->
					<div class="up-head d-none d-lg-block background-grey-4">
						<div class="container">
							<div class="row">
								<div class="col-xl-10 col-lg-12">
									<div class="row">
										<div class="col-md-2"><i class="fa fa-phone margin-right-10px"></i> 7146902</div>
										<div class="col-md-3"><i class="fa fa-envelope-o margin-right-10px"></i> info@your-site.com</div>
										<div class="col-md-7"><i class="fa fa-map-marker margin-right-10px"></i> TMI Centre Building, 3rd Floor, Arzobispo St, Intramuros, Manila, 1002 Metro Manila</div>
									</div>
								</div>
								<div class="col-xl-2 d-none d-xl-block">
									<div class="row">

										<div class="col-lg-6">
											<!--  Social -->
											<ul class="social-media list-inline text-right margin-0px text-white">
												<li class="list-inline-item"><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											</ul>
											<!-- // Social -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- // Up Head -->
					<div class="container">
						<div class="position-relative">
							<div class="row">
								<div class="col-lg-3 col-md-12">
									<a id="logo" href="{{ url('/') }}" class="d-inline-block margin-tb-15px"><img src="{{ asset('img/mopi.png') }}" alt=""></a>
									<a class="mobile-toggle padding-15px background-second-color border-radius-3" href="#"><i class="fa fa-bars"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- // Header  -->


<div class="page-title">
	<div class="container">
		<div class="padding-tb-120px">
			<h1>Vessel Updates</h1>
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Vessel Updates</li>
			</ol>
		</div>
	</div>
</div>


<div class="padding-tb-100px">
	<div class="container">
		<div class="row mt-3">
			<div class="col-md-12">
				<div class="cart-counters background-midnight">
					<div class="icon"><img src="img/icons/service-light-2.png" alt=""></div>
					<h2>VESSEL UPDATE</h2>
				</div>
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<th>BL Number</th>
							<th>Container</th>
							<th>Consignee</th>
							<th>Port</th>
							<th>Discharge</th>
						</thead>

						<tbody>
							@foreach($data as $dt)
							<tr>
								<td>{{ $dt->blnumber }}</td>
								<td>{{ $dt->container }}</td>
								<td>{{ $dt->consignee }}</td>
								<td>{{ $dt->port }}</td>
								<td>{{ $dt->discharge }}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>

				<div class="row">
					<div class="col-md-12 text-center">
						{{$data->links()}}
					</div>
				</div>


			</div>
		</div>
	</div>
</div>


<div class="section padding-tb-100px section-ba-3">
	<div class="container">
		<!-- Title -->
		<div class="section-title margin-bottom-40px">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<div class="icon text-main-color"><i class="fa fa-envelope-o"></i></div>
					<div class="h2 text-white">Contact Us</div>
					<div class="des text-white">Drop us an inquiry.</div>
				</div>
			</div>
		</div>
		<!-- // End Title -->

		<div class="row">
			<div class="col-md-12">
				<form>
					<div class="row">
						<div class="col-md-6 form-group">
							<input type="text" name="" class="form-control form-input" id="inputName4" placeholder="Name">
						</div>
						<div class="col-md-6 form-group">
							<input type="email" name="" class="form-control form-input" id="inputEmail4" placeholder="E-mail">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<textarea name="name" rows="8" cols="80" class="form-control form-input" id="exampleFormControlTextarea1" placeholder="Message"></textarea>
						</div>
					</div>
				</form>
			</div>

		</div>

	</div>
</div>


<footer class="layout-dark">
	<div class="container padding-tb-15px">
		<div class="row">

			<div class="col-md-3">
				<div class="about-us sm-mb-45px">
					<div class="logo-footer margin-bottom-35px">
						<a href="#"><img src="{{ asset('img/logo.png') }}" alt="" style="width: 50%;"></a>
					</div>
					<div class="text margin-bottom-35px text-justify">
						We continuously strive to undertake our business activities with absolutely no accidents, no harm to people, and no harm to the environment.
					</div>
				</div>
			</div>

			<div class="col-md-2"></div>

			<div class="col-md-7">
				<div class="nile-widget">
					<div class="margin-bottom-60px">
						<h2 class="title">Location</h2>
						<div class="contact-info opacity-9">
							<div class="icon margin-top-5px"><span class="icon_pin_alt"></span></div>
							<div class="text">
								<span class="title-in">Location :</span> <br>
								<span class="font-weight-500 text-uppercase">3F TMI Centre Building, Arzobispo St, Intramuros, Manila, 1002 Metro Manila</span>
							</div>
						</div>
					</div>
					<div class="call_center">
						<h2 class="title">Contact Number</h2>
						<div class="contact-info opacity-9">
							<div class="icon  margin-top-5px"><span class="icon_phone"></span></div>
							<div class="text">
								<span class="title-in">Call Us :</span><br>
								<span class="font-weight-500 text-uppercase">7146902</span>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="copy-right">
		<div class="container padding-tb-15px">
			<div class="row">
				<div class="col-lg-6">
					<div class="copy-right-text text-lg-left text-center sm-mb-15px">© <?php echo date("Y"); ?> Macro Ocean Philippines Inc. - All rights reserved </div>
				</div>
				<div class="col-lg-6">
					<!--  Social -->
					<ul class="social-media list-inline text-lg-right text-center margin-0px text-white">
						<li class="list-inline-item"><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					</ul>
					<!-- // Social -->
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- jquery library  -->
<script src="{{ asset('js/nile-slider.js') }}"></script>
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/YouTubePopUp.jquery.js') }}"></script>
<script src="{{ asset('js/imagesloaded.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>


</html>
