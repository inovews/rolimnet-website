@extends('layouts.front.pages', ['title' => 'Seringueiras'])

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
		<h1>Seringueiras</h1>
		<p class="margin-t-20">Rolim Net Tecnologia LTDA.</p>
	</div>
</div>

<div class="section-seperator">
	<div class="container content">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>Rolim Net Fibra</h1>
				<hr>
				<div class="row">
					<div class="col-sm-12  googlemaps">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="form-group">
									<div id="map-canvas"></div>
								</div>
							</div>
							<div class="panel-footer">Localize aqui sua residência.</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 text-sm-left">
						<p class="text-justify">🚨AlôÔô Seringueiras - RO 🚨 Chegamos com nossa ampla e moderna rede Fibra Óptica⚡🚀 Desfrute da melhor internet em sua casa ou trabalho! Ligue agora ou mande WhatsApp no número 69.3442-2779 e saiba mais😉</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="section section-seperator">
	<div class="container">
		<h2>Registre-se aqui.</h2>
		<hr>
		<div class="row text-sm-left flow-offset-2">
			<div class="col-sm-12 form-box">
				@if (Session::has('message'))
				<div class="alert alert-success">
					{{ Session::get('message') }}
				</div>
				@endif
				@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				{{Form::open(array('route'=>'seringueiras.enviar','method'=>'POST'))}}
				<div class="form-top">
					<div class="form-top-left">
						<p>Preencha sem compromisso o formulário abaixo e ajude sua rua ou avenida ser contemplada com essa tecnologia.</p>
					</div>
				</div>
				<div class="form-bottom">
					<div class="form-group">
						<label class="sr-only" for="name">Nome</label>
						<input type="text" name="name" placeholder="Nome" class="form-control" id="name" required>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-9">
								<label class="sr-only" for="phone">Telefone</label>
								<input type="number" pattern="^[0-9]" name="phone" placeholder="Telefone" class="form-control" id="phone" required>
							</div>
							<div class="col-md-3 text-right">
								<label>WhatsApp</label>
								<input type="checkbox" name='whatsapp' id="whatsapp" checked>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="sr-only" for="email">E-mail</label>
						<input type="text" name="email" placeholder="E-mail" class="form-control" id="email" required>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">Endereço:</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="sr-only" for="address">Endereço</label>
										<input type="text" name="address" placeholder="Endereço" class="form-control" id="address" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="sr-only" for="number">Número</label>
										<input type="number" pattern="^[0-9]" name="number" placeholder="Número" class="form-control" id="number" required>
									</div>
								</div>
								<div class="col-md-8">
									<div class="form-group">
										<label class="sr-only" for="neighborhood">Bairro</label>
										<input type="text" name="neighborhood" placeholder="Bairro" class="form-control" id="neighborhood" required>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="form-group">
						<label class="sr-only" for="lat">Latitude </label>
						<input type="text" name="lat" placeholder="Latitude" class="form-control" id="lat" value="-12.435708175456028" required>
					</div>

					<div class="form-group">
						<label class="sr-only" for="lng">Longitude </label>
						<input type="text" name="lng" placeholder="Longitude" class="form-control" id="lng" value="-64.22940379431225" required>
					</div>
					<div class="form-group">
							{!! Captcha::display() !!}
						</div>
					<div class="form-group">
						<input type="submit" class="btn btn-block btn-success raised" value="Registrar">
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
</section>

@endsection

@section('scripts')

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBA8QI_S7N-WnyBaZtxRuolkTcLzjbk0fw&libraries=places" type="text/javascript"></script>
<script>
	var map = new google.maps.Map(document.getElementById('map-canvas'),{
		center:{
			lat: -11.76894342922781,
			lng: -63.03511267950512
		},
		zoom:15,
		mapTypeId: google.maps.MapTypeId.HYBRID
	});
	var marker = new google.maps.Marker({
		position: {
			lat: -11.76894342922781,
			lng: -63.03511267950512
		},
		map: map,
		draggable: true
	});

	google.maps.event.addListener(marker,'position_changed',function(){
		var lat = marker.getPosition().lat();
		var lng = marker.getPosition().lng();
		$('#lat').val(lat);
		$('#lng').val(lng);
	});
</script>

@endsection