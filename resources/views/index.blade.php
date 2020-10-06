@extends('header_footer')
<title>Home</title>
@section('content')

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="public/images/home.jpg" data-speed="0.8"></div>
		<div class="home_container d-flex flex-column align-items-center justify-content-center">
			<div class="home_title"><h1>Book Your Farm</h1></div>
			<div class="home_text text-center">Fusce erat dui, venenatis et erat in, vulputate dignissim lacus. Donec vitae tempus dolor, sit amet elementum lorem. Ut cursus tempor turpis.</div>
			{{-- <div class="button home_button"><a href="#">book now</a></div> --}}
		</div>
	</div>

	<!-- Booking -->

	<div class="booking">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="booking_container d-flex flex-row align-items-end justify-content-start">
							
						<form action="{{url('farmfilter')}}" method="GET" class="booking_form">
							<div class="booking_form_container d-flex flex-lg-row flex-column align-items-start justify-content-start flex-wrap">
								
								<div class="booking_form_inputs d-flex flex-row align-items-start justify-content-between flex-wrap">
									
									{{-- <div class="booking_dropdown"><input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" name="check_in" value ="{{Request::input('check_in')}}" required="required"></div>


									<div class="booking_dropdown"><input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out"name="check_out" value ="{{Request::input('check_out')}}" required="required"></div> --}}
									
									{{-- <div data-role="rangeslider">
										<label for="price-min">Prices:</label>
										<input type="range" name="price-min" id="price-min" value="200" min="0" max="1000">
										<input type="range" name="price-max" id="price-max" value="800" min="0" max="1000">
									  </div> --}}
									  
									  {{-- <label for="price-min">Prices:</label> --}}
									  {{-- <input type="ranges" name="price-min" id="price-min" value="200" min="0" max="1000">
									  <input type="ranges" name="price-max" id="price-max" value="800" min="0" max="1000"> --}}
									
									  <div class="custom-select">
										<select name="price-min" id="selected_numbers" >
											<option value="0">Rs.0</option>
											<option value="0">Rs.0</option>
											<option value="10000">Rs.10000</option>
											<option value="15000">Rs.15000</option>
											<option value="20000">Rs.20000</option>
											<option value="25000">Rs.25000</option>
											<option value="30000">Rs.30000</option>
										</select>
									</div>

									<div class="custom-select">
										<select name="price-max" id="selected_numbers" >
											<option value="10000">Rs.10000</option>
											<option value="15000">Rs.15000</option>
											<option value="20000">Rs.20000</option>
											<option value="25000">Rs.25000</option>
											<option value="30000">Rs.30000</option>
										</select>
									</div>
										  
									<div class="custom-select">
										<select name="rooms" id="selected_numbers" >
											<option value="">Rooms</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>

									{{-- <div class="custom-select" required>
										<select id="selected_numbers" required>
											<option value="0">Adults</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div> --}}

									{{-- <div class="custom-select">
										<select>
											<option value="0">Children</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div> --}}
								</div>
								<button class="booking_form_button ml-lg-auto">book now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<div>Welcome</div>
						<h1>Amazing Hotel in front of the Sea</h1>
					</div>
				</div>
			</div>
			<div class="row intro_row">
				<div class="col-xl-8 col-lg-10 offset-xl-2 offset-lg-1">
					<div class="intro_text text-center">
						<p>Maecenas sollicitudin tincidunt maximus. Morbi tempus malesuada erat sed pellentesque. Donec pharetra mattis nulla, id laoreet neque scelerisque at. Quisque eget sem non ligula consectetur ultrices in quis augue. Donec imperd iet leo eget tortor dictum, eget varius eros sagittis. Curabitur tempor dignissim massa ut faucibus sollicitudin tinci dunt maximus. Morbi tempus malesuada erat sed pellentesque. Donec pharetra mattis nulla, id laoreet neque scele risque at. Quisque eget sem non ligula consectetur ultrices in quis augue. Donec imperdiet leo eget tortor dictum, eget varius eros sagittis. Curabitur tempor dignissim massa ut faucibus.</p>
					</div>
				</div>
			</div>
			<div class="row gallery_row">
				<div class="col">

					<!-- Gallery -->
					<div class="gallery_slider_container">
						<div class="owl-carousel owl-theme gallery_slider">
							
							<!-- Slide -->
							<div class="gallery_slide">
								<img src="public/images/gallery_1.jpg" alt="">
								<div class="gallery_overlay">
									<div class="text-center d-flex flex-column align-items-center justify-content-center">
										<a href="#">
											<span>+</span>
											<span>See More</span>
										</a>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="gallery_slide">
								<img src="public/images/gallery_2.jpg" alt="">
								<div class="gallery_overlay">
									<div class="text-center d-flex flex-column align-items-center justify-content-center">
										<a href="#">
											<span>+</span>
											<span>See More</span>
										</a>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="gallery_slide">
								<img src="public/images/gallery_3.jpg" alt="">
								<div class="gallery_overlay">
									<div class="text-center d-flex flex-column align-items-center justify-content-center">
										<a href="#">
											<span>+</span>
											<span>See More</span>
										</a>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="gallery_slide">
								<img src="public/images/gallery_4.jpg" alt="">
								<div class="gallery_overlay">
									<div class="text-center d-flex flex-column align-items-center justify-content-center">
										<a href="#">
											<span>+</span>
											<span>See More</span>
										</a>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Rooms -->

	<div class="rooms_right container_wrapper">
		<div class="container">
			<div class="row row-eq-height">

				<!-- Rooms Image -->
				<div class="col-xl-6 order-xl-1 order-2">
					<div class="rooms_slider_container">
						<div class="owl-carousel owl-theme rooms_slider">
							
							<!-- Slide -->
							<div class="slide">
								<div class="background_image" style="background-image:url(public/images/rooms_1.jpg)"></div>
							</div>

							<!-- Slide -->
							<div class="slide">
								<div class="background_image" style="background-image:url(public/images/rooms_1.jpg)"></div>
							</div>

							<!-- Slide -->
							<div class="slide">
								<div class="background_image" style="background-image:url(public/images/rooms_1.jpg)"></div>
							</div>

						</div>
					</div>
				</div>

				<!-- Rooms Content -->
				<div class="col-xl-6 order-xl-2 order-1">
					<div class="rooms_right_content">
						<div class="section_title">
							<div>Rooms</div>
							<h1>Luxury Double Suite</h1>
						</div>
						<div class="rooms_text">
							<p>Maecenas sollicitudin tincidunt maximus. Morbi tempus malesuada erat sed pellentesque. Donec pharetra mattis nulla, id laoreet neque scelerisque at. Quisque eget sem non ligula consectetur ultrices in quis augue. Donec imperd iet leo eget tortor dictum, eget varius eros sagittis. Curabitur tempor dignissim massa ut faucibus sollicitudin tinci dunt maximus. Morbi tempus malesuada erat sed pellentesque.</p>
						</div>
						<div class="rooms_list">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<img src="public/images/check.png" alt="">
									<span>Morbi tempus malesuada erat sed</span>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<img src="public/images/check.png" alt="">
									<span>Tempus malesuada erat sed</span>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<img src="public/images/check.png" alt="">
									<span>Pellentesque vel neque finibus elit</span>
								</li>
							</ul>
						</div>
						<div class="rooms_price">$129/<span>Night</span></div>
						<div class="button rooms_button"><a href="#">book now</a></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Rooms -->

	<div class="rooms_left container_wrapper">
		<div class="container">
			<div class="row row-eq-height">
				
				<!-- Rooms Content -->
				<div class="col-xl-6">
					<div class="rooms_left_content">
						<div class="section_title">
							<div>Rooms</div>
							<h1>Luxury Single Room</h1>
						</div>
						<div class="rooms_text">
							<p>Maecenas sollicitudin tincidunt maximus. Morbi tempus malesuada erat sed pellentesque. Donec pharetra mattis nulla, id laoreet neque scelerisque at. Quisque eget sem non ligula consectetur ultrices in quis augue. Donec imperd iet leo eget tortor dictum, eget varius eros sagittis. Curabitur tempor dignissim massa ut faucibus sollicitudin tinci dunt maximus. Morbi tempus malesuada erat sed pellentesque.</p>
						</div>
						<div class="rooms_list">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<img src="public/images/check.png" alt="">
									<span>Morbi tempus malesuada erat sed</span>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<img src="public/images/check.png" alt="">
									<span>Tempus malesuada erat sed</span>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<img src="public/images/check.png" alt="">
									<span>Pellentesque vel neque finibus elit</span>
								</li>
							</ul>
						</div>
						<div class="rooms_price">$89/<span>Night</span></div>
						<div class="button rooms_button"><a href="#">book now</a></div>
					</div>
				</div>

				<!-- Rooms Image -->
				<div class="col-xl-6">
					<div class="rooms_slider_container">
						<div class="owl-carousel owl-theme rooms_slider">
							
							<!-- Slide -->
							<div class="slide">
								<div class="background_image" style="background-image:url(public/images/rooms_2.jpg)"></div>
							</div>

							<!-- Slide -->
							<div class="slide">
								<div class="background_image" style="background-image:url(public/images/rooms_2.jpg)"></div>
							</div>

							<!-- Slide -->
							<div class="slide">
								<div class="background_image" style="background-image:url(public/images/rooms_2.jpg)"></div>
							</div>
							
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Discover -->

	<div class="discover">

		<!-- Discover Content -->
		<div class="discover_content">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="section_title">
							<div>Hotel</div>
							<h1>Discover Marimar Hotel</h1>
						</div>
					</div>
				</div>
				<div class="row discover_row">
					<div class="col-lg-5">
						<div class="discover_highlight">
							<p>Morbi tempus malesuada erat sed pellentesque. Donec pharetra mattis nulla, id laoreet neque scelerisque at. Quisque eget sem non ligula consectetur.</p>
						</div>
						<div class="button discover_button"><a href="#">discover</a></div>
					</div>
					<div class="col-lg-7">
						<div class="discover_text">
							<p>Morbi tempus malesuada erat sed pellentesque. Donec pharetra mattis nulla, id laoreet neque scelerisque at. Quisque eget sem non ligula consectetur ultrices in quis augue. Donec imperd iet leo eget tortor dictum, eget varius eros sagittis. Curabitur tempor dignissim massa ut faucibus sollicitudin tinci dunt maximus. Morbi tempus malesuada erat sed pellentesque. Donec pharetra mattis. Donec pharetra mattis nulla, id laoreet neque scelerisque at. Morbi tempus malesuada erat sed pellentesque. Donec pharetra mattis nulla, id laoreet neque scelerisque at. Quisque eget sem non ligula consectetur ultrices in quis augue.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Discover Slider -->
		<div class="discover_slider_container">
			<div class="owl-carousel owl-theme discover_slider">
				
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(public/images/discover_1.jpg)"></div>
					<div class="discover_overlay d-flex flex-column align-items-center justify-content-center">
						<h1><a href="#">Weddings</a></h1>
					</div>
				</div>

				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(public/images/discover_2.jpg)"></div>
					<div class="discover_overlay d-flex flex-column align-items-center justify-content-center">
						<h1><a href="#">Parties</a></h1>
					</div>
				</div>

				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(public/images/discover_3.jpg)"></div>
					<div class="discover_overlay d-flex flex-column align-items-center justify-content-center">
						<h1><a href="#">Relax</a></h1>
					</div>
				</div>

			</div>
		</div>

	</div>

	<!-- Testimonials -->

	<div class="testimonials">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<div>Clients</div>
						<h1>Testimonials</h1>
					</div>
				</div>
			</div>
			<div class="row testimonials_row">
				<div class="col">
					
					<!-- Testimonials Slider -->
					<div class="testimonials_slider_container">
						<div class="owl-carousel owl-theme testimonials_slider">

							<!-- Slide -->
							<div>
								<div class="testimonial_text text-center">
									<p>Maecenas sollicitudin tincidunt maximus. Morbi tempus malesuada erat sed pellentesque. Donec pharetra mattis nulla, id laoreet neque scelerisque at. Quisque eget sem non ligula consectetur ultrices in quis augue. Donec imperd iet leo eget tortor dictum, eget varius eros sagittis. Curabitur tempor dignissim massa ut faucibus sollicitudin tinci dunt maximus. Morbi tempus malesuada erat sed pellentesque. Donec pharetra mattis nulla, id laoreet neque scele risque at. Quisque eget.</p>
								</div>
								<div class="testimonial_author text-center">
									<div class="testimonial_author_image"><img src="public/images/author_1.jpg" alt=""></div>
									<div class="testimonial_author_name"><a href="#">Maria Smith,</a><span> Client</span></div>
								</div>
							</div>

							<!-- Slide -->
							<div>
								<div class="testimonial_text text-center">
									<p>Maecenas sollicitudin tincidunt maximus. Morbi tempus malesuada erat sed pellentesque. Donec pharetra mattis nulla, id laoreet neque scelerisque at. Quisque eget sem non ligula consectetur ultrices in quis augue. Donec imperd iet leo eget tortor dictum, eget varius eros sagittis. Curabitur tempor dignissim massa ut faucibus sollicitudin tinci dunt maximus. Morbi tempus malesuada erat sed pellentesque. Donec pharetra mattis nulla, id laoreet neque scele risque at. Quisque eget.</p>
								</div>
								<div class="testimonial_author text-center">
									<div class="testimonial_author_image"><img src="public/images/author_1.jpg" alt=""></div>
									<div class="testimonial_author_name"><a href="#">Maria Smith,</a><span> Client</span></div>
								</div>
							</div>

							<!-- Slide -->
							<div>
								<div class="testimonial_text text-center">
									<p>Maecenas sollicitudin tincidunt maximus. Morbi tempus malesuada erat sed pellentesque. Donec pharetra mattis nulla, id laoreet neque scelerisque at. Quisque eget sem non ligula consectetur ultrices in quis augue. Donec imperd iet leo eget tortor dictum, eget varius eros sagittis. Curabitur tempor dignissim massa ut faucibus sollicitudin tinci dunt maximus. Morbi tempus malesuada erat sed pellentesque. Donec pharetra mattis nulla, id laoreet neque scele risque at. Quisque eget.</p>
								</div>
								<div class="testimonial_author text-center">
									<div class="testimonial_author_image"><img src="public/images/author_1.jpg" alt=""></div>
									<div class="testimonial_author_name"><a href="#">Maria Smith,</a><span> Client</span></div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
</div>

<script src="public/js/jquery-3.3.1.min.js"></script>
<script src="public/js/custom.js"></script>
@endsection