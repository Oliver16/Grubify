@extends('app.master')
@section('content')
	@include('app.header')
	@include('app.sidebar')
<section id="main-content">
          <section class="wrapper site-min-height">
          	<div class="row mt">
          		<div class="col-lg-12">
          		<p><?php echo $ratings; ?></p>
          		</div>
          	</div>
			
		</section><! --/wrapper -->
      </section>
	@include('app.footer')
@endsection