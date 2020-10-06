<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Marimar Hotel template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('public/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('public/plugins/OwlCarousel2-2.3.4/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('public/plugins/OwlCarousel2-2.3.4/owl.theme.default.css')}}">
<link rel="stylesheet" href="{{asset('public/plugins/OwlCarousel2-2.3.4/animate.css')}}">
<link rel="stylesheet" href="{{asset('public/plugins/jquery-datepicker/jquery-ui.css')}}">
<link rel="stylesheet" href="{{asset('public/styles/bootstrap-4.1.2/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('public/styles/main_styles.css')}}">
<link rel="stylesheet" href="{{asset('public/styles/responsive.css')}}">
<link rel="stylesheet" href="{{asset('public/styles/rangeslider.css')}}">


{{--<link rel="stylesheet" type="text/css" href="public/styles/blog.css">
<link rel="stylesheet" type="text/css" href="public/styles/blog_responsive.css">
<link rel="stylesheet" type="text/css" href="public/styles/contact.css">
<link rel="stylesheet" type="text/css" href="public/styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="public/styles/elements.css">
<link rel="stylesheet" type="text/css" href="public/styles/elements_responsive.css"> --}}

</head>

<body>


	
	<!-- Header -->

	<header class="header">
		@if(Auth::check())
		<div style="float: right">
			<a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('logout') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
				
				{{ Auth::user()->name }}
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{ route('logout') }}"
					   onclick="event.preventDefault();
									 document.getElementById('logout-form').submit();">
						{{ __('Logout') }}
					</a>
		
					<form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
						@csrf
					</form>
				</div>
				@else
				<ul class="navbar-nav ml-auto">
					<!-- Authentication Links -->
					@guest
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
						@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
						@endif
					@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('logout') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }}
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}"
								   onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</div>
						</li>
					@endguest
				</ul>
			@endif
				
			</a>
	
			
		 </div>
		<div class="header_content d-flex flex-column align-items-center justify-content-lg-end justify-content-center">
			
			<!-- Logo -->
			<div class="logo"><a href="{{url("/")}}"><img class="logo_1" src="public/images/logo.png" alt=""><img class="logo_2" src="public/images/logo_2.png" alt=""><img class="logo_3" src="public/images/logo_3.png" alt=""></a></div>

			<!-- Main Nav -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="{{url("/")}}">Home</a></li>
					<li><a href="{{url("about-us")}}">About us</a></li>
					<li><a href="{{route('farmhouse.index')}}">Farm Houses</a></li>{{--yeh asli tariqa hoat hai call karane ka agar controller bana hua hai to --}}
					{{-- <li><a href="{{url("farmhouse")}}">Farm Houses</a></li> --}}
					<li><a href="blog.html">News</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>

			<!-- Social -->
			<div class="social header_social">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				</ul>
			</div>

			<!-- Header Right -->
			<div class="header_right d-flex flex-row align-items-center justify-content-start">
				
				<!-- Search Activation Button -->
				<div class="search_button">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 512 512" enable-background="new 0 0 512 512" width="512px" height="512px">
						<g>
							<path d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z" fill="#FFFFFF"></path>
						</g>
					</svg>
				</div>

				<!-- Header Link -->
				<div class="header_link"><a href="{{ url("post") }}">Book Your Farm</a></div>

				<!-- Hamburger Button -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>

			</div>

			<!-- Search Panel -->
			<div class="search_panel">
				<div class="search_panel_content d-flex flex-row align-items-center justify-content-start">
					<img src="public/images/search.png" alt="">
					<form action="#" class="search_form">
						<input type="text" class="search_input" placeholder="Type your search here" required="required">
					</form>
					<div class="search_close ml-auto d-flex flex-column align-items-center justify-content-center"><div></div></div>
				</div>
			</div>
		</div>
			
	</header>

	<!-- Logo Overlay -->

	<div class="logo_overlay">
		<div class="logo_overlay_content d-flex flex-column align-items-center justify-content-center">
			<div class="logo"><a href="{{url("/")}}"><img src="public/images/logo_3.png" alt=""></a></div>
		</div>
	</div>

	<!-- Menu Overlay -->

	<div class="menu_overlay">
		<div class="menu_overlay_content d-flex flex-row align-items-center justify-content-center">
			
			<!-- Hamburger Button -->
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>

		</div>
	</div>

	<!-- Menu -->

	<div class="menu">
		<div class="menu_container d-flex flex-column align-items-center justify-content-center">

			<!-- Menu Navigation -->
			<nav class="menu_nav text-center">
				<ul>
					<li><a href="{{url("/")}}">Home</a></li>
					<li><a href="{{url('about-us')}}">About us</a></li>
					<li><a href="{{route('farmhouse.index')}}">Farmhouses</a></li>
					<li><a href="blog.html">News</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
			<div class="button menu_button"><a href="#">book now</a></div>

			<!-- Menu Social -->
			<div class="social menu_social">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				</ul>
			</div>

		</div>
	</div>

	
	@yield('content')
	
		
	
   <!-- Footer -->

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="public/images/footer.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_logo text-center">
						<a href="#"><img src="public/images/logo.png" alt=""></a>
					</div>
					<div class="footer_content">
						<div class="row">
							<div class="col-lg-4 footer_col">
								<div class="footer_info d-flex flex-column align-items-lg-end align-items-center justify-content-start">
									<div class="text-center">
										<div>Phone:</div>
										<div>+546 990221 123</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 footer_col">
								<div class="footer_info d-flex flex-column align-items-center justify-content-start">
									<div class="text-center">
										<div>Address:</div>
										<div>Main Str, no 23, New York</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 footer_col">
								<div class="footer_info d-flex flex-column align-items-lg-start align-items-center justify-content-start">
									<div class="text-center">
										<div>Mail:</div>
										<div>hotel@contact.com</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</footer>




<script src="{{asset('public/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('public/styles/bootstrap-4.1.2/popper.js')}}"></script>
<script src="{{asset('public/styles/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
<script src="{{asset('public/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('public/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('public/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('public/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('public/plugins/OwlCarousel2-2.3.4/owl.carousel.js')}}"></script>
<script src="{{asset('public/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('public/plugins/easing/easing.js')}}"></script>
<script src="{{asset('public/plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{asset('public/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('public/plugins/jquery-datepicker/jquery-ui.js')}}"></script>
<script src="{{asset('public/js/custom.js')}}"></script>
<script src="{{asset('public/js/rooms.js')}}"></script>
<script src="{{asset('public/js/about.js')}}"></script>
<script src="{{asset('public/js/blog.js')}}"></script>
<script src="{{asset('public/js/contact.js')}}"></script>
<script src="{{asset('public/js/elements.js')}}"></script>
<script src="{{asset('public/js/rangeslider.js')}}"></script>
<script src="{{asset('public/js/rangeslider.min.js')}}"></script>

</body>
</html>