@extends('app.master')
@section('content')
	@include('app.header')
	@include('app.sidebar')
	<section id="main-content">
          <section class="wrapper site-min-height">
          	<div class="row mt">
          		<div class="col-lg-12">
          		<div id="map" style="height:900px;"></div>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChRbeqeMGH9WsRAO3Pg8fMr__BJuiC9PQ&callback=initMap">
    </script>
          		</p>
          		</div>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
	@include('app.footer')
@endsection