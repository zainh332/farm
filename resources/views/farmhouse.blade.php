@extends('header_footer')
<title>Farm Houses</title>
<link rel="stylesheet" type="text/css" href="public/styles/rooms_responsive.css">
<link rel="stylesheet" type="text/css" href="public/styles/rooms.css">
@section('content')
		<div class="home">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="public/images/rooms.jpg" data-speed="0.8"></div>
			<div class="home_container d-flex flex-column align-items-center justify-content-center">
				<div class="home_title"><h1>Farm Houses</h1></div>
			</div>
		</div>
	
		
		<div class="booking">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="booking_container d-flex flex-row align-items-end justify-content-start">
							<form action="#" class="booking_form">
								<div class="booking_form_container d-flex flex-lg-row flex-column align-items-start justify-content-start flex-wrap">
									<div class="booking_form_inputs d-flex flex-row align-items-start justify-content-between flex-wrap">
										<div class="booking_dropdown"><input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" required="required"></div>
										<div class="booking_dropdown"><input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" required="required"></div>
										<div class="custom-select">
											<select>
												<option value="0">Adults</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
										<div class="custom-select">
											<select>
												<option value="0">Children</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
									</div>
									<button class="booking_form_button ml-lg-auto">book now</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="rooms">
			
			
			<div class="container">
				
			</br>
				<div class="row">
					<div class="col">
						<div class="card-columns">
							{{-- {{$farmhouse}} --}}
							<!-- Room -->
							{{-- @foreach($image as $img) --}}
							@foreach($farmhouse as $farm)
							
							<div class="card">
								<img class="card-img-top" src="{{$farm->image->first()->img_dir}}" alt="Room image description">
								<div class="card-body">
									<div class="rooms_title"><h2>{{$farm['title']}}</h2></div>
									<div class="rooms_text">
										<p>{{$farm['description']}}</p>
										{{-- <p>{{$farm->description}}</p> --}}
									</div>
									<div class="rooms_list">
										<ul>
											<li class="d-flex flex-row align-items-center justify-content-start">
												<img width="28px" height="28px" src="public/images/rooms.png" alt="" >
												<span>{{$farm['rooms']}}</span>
											</li>
											<li class="d-flex flex-row align-items-center justify-content-start">
												<img width="28px" height="28px" src="public/images/location.png" alt="">
												<span>{{$farm['city']}}</span>
											</li>
											<li class="d-flex flex-row align-items-center justify-content-start">
												<img src="public/images/check.png" alt="">
												<span>Pellentesque vel neque finibus elit</span>
											</li>
										</ul>
									</div>
									<div class="rooms_price">Rs.{{$farm['price']}}<span>Night</span></div>
									<div class="button rooms_button"><a href="#">book now</a></div>
								</div>
							</div>
							
							{{-- @endforeach --}}
							@endforeach
							
	
							<!-- Room -->
							{{-- <div class="card">
								<img class="card-img-top" src="public/images/room_2.jpg" alt="Room image description">
								<div class="card-body">
									<div class="rooms_title"><h2>Luxury Double Suite</h2></div>
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
							</div> --}}
	
							<!-- Room -->
							{{-- <div class="card">
								<img class="card-img-top" src="public/images/room_3.jpg" alt="Room image description">
								<div class="card-body">
									<div class="rooms_title"><h2>Luxury Single Room</h2></div>
									<div class="rooms_text">
										<p>Maecenas sollicitudin tincidunt maximus. Morbi tempus malesuada erat sed pellentesque. Donec pharetra mattis nulla, id laoreet neque scelerisque at.</p>
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
							</div> --}}
	
							<!-- Room -->
							{{-- <div class="card card-special">
								<img class="card-img-top" src="public/images/room_4.jpg" alt="Room image description">
								<div class="card-special-panel">special offer</div>
								<div class="card-body">
									<div class="rooms_title"><h2>Budget Suite</h2></div>
									<div class="rooms_text">
										<p>Maecenas sollicitudin tincidunt maximus. Morbi tempus malesuada erat sed pellentesque. Donec pharetra mattis nulla, id laoreet neque scelerisque at.</p>
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
							</div> --}}
	
						</div>
	
						<div class="load_more_container text-center">
							<div class="load_more_button"><a href="#">load more rooms</a></div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<script src="public/js/rooms.js"></script>
		<script src="public/js/jquery-3.3.1.min.js"></script>
		<script src="public/js/custom.js"></script>
	@endsection
