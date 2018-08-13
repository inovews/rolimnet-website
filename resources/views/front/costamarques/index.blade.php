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
						<p class="text-justify">Escolhemos vocês, cidade histórica Brasileira e Rondoniense para receber a melhor e mais moderna rede de internet por fibra óptica da região.</p>
						<p class="text-justify">A Rolim Net — com sede em Rolim de Moura, iniciou o trabalho de cabeamento de fibra pela cidade. Contaremos com a mais moderna rede em Fibra Óptica com cobertura de 100% da cidade — estaremos ligando a cidade de Rolim de Moura ao município de Costa Marques levando a melhor qualidade de serviço, atendimento, VELOCIDADE no padrão Rolim Net de serviço!</p>
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
				{{Form::open(array('route'=>'costamarques.enviar','method'=>'POST'))}}
				<div class="form-top">
					<div class="form-top-left">
						<p>Preencha sem compromisso o formulário abaixo e ajude sua rua ou avenida ser contemplada com essa tecnologia.</p>
					</div>
				</div>
				<div class="form-bottom">
					<div class="form-group">
						<label class="sr-only" for="name">Nome</label>
						<input type="text" name="name" placeholder="Nome" class="form-control" id="name">
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-9">
								<label class="sr-only" for="phone">Telefone</label>
								<input type="number" pattern="^[0-9]" name="phone" placeholder="Telefone" class="form-control" id="phone">
							</div>
							<div class="col-md-3 text-right">
								<label>WhatsApp</label>
								<input type="checkbox" name='whatsapp' id="whatsapp" checked>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="sr-only" for="email">E-mail</label>
						<input type="text" name="email" placeholder="E-mail" class="form-control" id="email">
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">Endereço:</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="sr-only" for="address">Endereço</label>
										<input type="text" name="address" placeholder="Endereço" class="form-control" id="address">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="sr-only" for="number">Número</label>
										<input type="number" pattern="^[0-9]" name="number" placeholder="Número" class="form-control" id="number">
									</div>
								</div>
								<div class="col-md-8">
									<div class="form-group">
										<label class="sr-only" for="neighborhood">Bairro</label>
										<input type="text" name="neighborhood" placeholder="Bairro" class="form-control" id="neighborhood">
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="form-group">
						<label class="sr-only" for="lat">Latitude </label>
						<input type="text" name="lat" placeholder="Latitude" class="form-control" id="lat" value="-12.435708175456028">
					</div>

					<div class="form-group">
						<label class="sr-only" for="lng">Longitude </label>
						<input type="text" name="lng" placeholder="Longitude" class="form-control" id="lng" value="-64.22940379431225">
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
			lat: -12.435708175456028,
			lng: -64.22940379431225
		},
		zoom:15,
		mapTypeId: google.maps.MapTypeId.HYBRID
	});
	var marker = new google.maps.Marker({
		position: {
			lat: -12.435708175456028,
			lng: -64.22940379431225
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