@extends('layout.layout')

@section('title','Home')
     <link rel="stylesheet" href=" {{ URL::asset('css/styleulul.css') }} ">
  <link rel="stylesheet" href=" {{ URL::asset('css/bootstrap.css') }} ">
<script src="{{ URL::asset('js/bootstrap.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.js') }}"></script>
@section('body')

<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="overlay"> </div>
      <div class="slide-1" style="background-image: url('images/slidehijab4.jpg');">
      </div>
      <div class="hero">
        <hgroup>
            <h1>Lovely Hair Care</h1>
            <h3>We Do It with Care and Love!</h3>
        </hgroup>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2" style="background-image: url('images/slidehijab3.jpg');"><div class="overlay"></div></div>
      <div class="hero">
        <hgroup>
            <h1>Glowing Face Care</h1>
            <h3>Get your face shiny and glowing!</h3>
        </hgroup>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3" style="background-image: url('images/slidehijab2.jpg');"><div class="overlay"></div></div>
      <div class="hero">
        <hgroup>
            <h1>Softly Body Care</h1>
            <h3>sophitiscated body pleasure!</h3>
        </hgroup>
      </div>
    </div>
  </div>
</div>

<!-- HEADER !-->
<!-- Content !-->

		<div class="row" style="margin-top: 50px">
			<div class="col-md-1 col-lg-1"></div>
  			<div class="col-md-3 col-lg-3 contentSquare" style="background-color: #F1396D; text-align: center; margin: 0 20px 0 20px;"><a href="/services">Hair<br> Care</a>
  			</div>
  			<div class="col-md-3 col-lg-3 contentSquare" style="background-color: #c173b1; text-align: center; margin: 0 20px 0 20px;"><a href="/services">Face<br> Care</a></div>
  			<div class="col-md-3 col-lg-3 contentSquare" style="background-color: #F1396D; text-align: center; margin: 0 20px 0 20px;"><a href="/services">Body<br> Care</a></div>
  			<div class="col-md-1 col-lg-1"></div>
		</div>


<div class="row" style="margin-top: 50px;">
			<div class="col-md-1 col-lg-1"></div>
  			<div class="col-md-3 col-lg-3 contentSquare1" style="background-color: #c173b1; text-align: center; margin: 0 20px 0 20px;"><a href="/services">Rebounding</a><img src="images/servis_4.jpg">


  			</div>
  			<div class="col-md-3 col-lg-3 contentSquare1" style="background-color: #F1396D; text-align: center; margin: 0 20px 0 20px;">
  			<a href="/services">Peeling</a>
        <img src="images/servis_6.jpg">
        </div>
  			<div class="col-md-3 col-lg-3 contentSquare1" style="background-color: #c173b1; text-align: center; margin: 0 20px 0 20px;"><a href="/services">Spa</a>
              <img src="images/servis_8.jpg">
        </div>

  			<div class="col-md-1 col-lg-1"></div>
</div>


<!-- Content !-->
@endsection
