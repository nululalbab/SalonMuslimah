<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Salon @yield('title')</title>
      <link rel="stylesheet" href=" {{ URL::asset('css/styleulul.css') }} ">
  <link rel="stylesheet" href=" {{ URL::asset('css/bootstrap.css') }} ">
  <link href='{{ URL::asset("font/Raleway.ttf") }}' rel='stylesheet' type='text/css'>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	<link rel="icon" href="images/logokecil.png">
	<body style=" background-color: #FBC5D8;">
	<header>
	<!-- HEADER !-->



					<div class="row">

						<div class="collapse navbar-collapse" id="app-navbar-collapse">
								<!-- Left Side Of Navbar -->
								<ul class="nav navbar-nav">
										&nbsp;
								</ul>

								<!-- Right Side Of Navbar -->
								<ul class="nav navbar-nav navbar-right">
										<!-- Authentication Links -->
										@if (Auth::guest())
												<li><a href="{{ route('login') }}">Login</a></li>
												<li><a href="{{ route('register') }}" style="margin-right:30px;">Register</a></li>
										@else
											<a href="{{ route('logout') }}"
													onclick="event.preventDefault();
																	 document.getElementById('logout-form').submit();" style="margin-right:30px;">
													Logout
											</a>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
													{{ csrf_field() }}
											</form>
										@endif
								</ul>
						</div>

						<div class="row">
							<div class="col-lg-5 col-md-5">

							</div>
							<div class="col-lg-2 col-md-2">
								<img style="height:100px;"class="img-responsive" src="{{asset('images/logo2.png')}}">
							</div>
							<div class="col-lg-5 col-md-5">

							</div>
						</div>
					</div>


		<div class="row">
			<div class="col-md-2 col-lg-2"></div>
  			<div class="col-md-2 col-lg-2 navbar"><a href="/">Home</a></div>
  			<div class="col-md-2 col-lg-2 navbar"><a href="/services">Services</a></div>
  			<div class="col-md-2 col-lg-2 navbar"><a href="/prices">Prices</a></div>
  			<div class="col-md-2 col-lg-2 navbar"><a href="/reserve">Reserve</a></div>
  			<div class="col-md-2 col-lg-2"></div>
		</div>


  </header>

<!-- HEADER !-->
<!-- Content !-->
@section('body')
  @show
<!-- Content !-->
<!--<div class="row">
			<div class="col-md-1 col-lg-1"></div>
  			<div class="col-md-3 col-lg-3 " style="margin: 0 0 0 0;"><img src="images/page2_img8.jpg" style="width:250px;"> </div>!
  			<div class="col-md-3 col-lg-3 " style="margin: 0 0 0 45px;"><img src="images/page2_img8.jpg" style="width:250px;"></div>
  			<div class="col-md-3 col-lg-3 " style="margin: 0 0 0 40px;"><img src="images/page4_img1.jpg" style="width:250px;"></div>
  			<div class="col-md-1 col-lg-1"></div>
</div>-->
<!-- Footer !-->
<footer>
<div class="footer" style="margin-top: 50px; width: 100%;" >
    <div class="row" style="background-color: #382F32; display:table-cell;">
      <div class="col-md-2 col-lg-2" style="color:white; padding-left: 30px;">
      <dl>
      <h3> Contact Info</h3>
        <dt>Telepon</dt>
      <dd>081224997124</dd>
      <dt>Alamat</dt>
      <dd>Jl. Dinoyo No.101, Surabaya</dd>
      <dt>Email</dt>
      <dd>beautyshop@salon.co.id</dd>
      </dl>

      </div>
      <div class="col-md-7 col-lg-7">

      </div>
      <div class="col-md-3 col-lg-3">
        <img src="{{asset('images/facebook (1).png')}}" style="width: 50px; margin-top: 50px;">
        <img src="{{asset('images/twitter.png')}}" style="width: 50px; margin-top: 50px;">
        <img src="{{asset('images/google-plus.png')}}" style="width: 50px; margin-top: 50px;">
      </div>
    </div>
</div>
</footer>
<!-- Footer !-->


	</body>
</html>
