@extends('layouts.front.pages', ['title' => 'Costa Marques'])

@section('styles')
<style type="text/css">
#map-canvas{
	height: 600px;
	width: auto;
}
</style>
@endsection

@section('content')

<div class="banner-index" data-parallax="scroll" data-image-src="{{ url('assets/img/1920x1080/04.jpg') }}">
	<div class="container content-sm">
		<h1>Costa Marques</h1>
		<p class="margin-t-20">Rolim Net Tecnologia LTDA.</p>
	</div>
</div>

<div class="section-seperator">
	<div class="container content">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>Obrigado!</h1>
				<hr>
				@if (Session::has('message'))
				<div class="alert alert-success">
					{{ Session::get('message') }}
				</div>
				@endif
				<div class="alert alert-success" role="alert">
					Agora você está registrado, entraremos em contato. Te aguardamos em breve!
				</div>
				<h1>Ligue! (69) 3442-2779</h1>

			</div>
		</div>
	</div>


	@endsection
