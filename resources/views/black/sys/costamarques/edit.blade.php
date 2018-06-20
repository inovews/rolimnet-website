@extends('layouts.black.slicklab', ['title' => 'Editar Costa Marques'])

@section('styles')
<style type="text/css">
	#map-canvas{
		height: 600px;
	width: auto;
	}
</style>
@endsection

@section('content')

<!-- page head start-->
<div class="page-head">
	<h1 class="text-center">Editar Costa Marques</h1>
	<p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
<!-- page head end-->

<!--body wrapper start-->
<div class="wrapper">
	<div class="col-md-10 col-centered">
		<div class="row">
			@include('shared.errors')
			{{ Form::open(['route' => ['admin.costamarques.update', $costamarque->id], 'method' => 'PUT' ]) }}
			<section class="panel">
				<div class="panel-body">

					<div class="col-xs-12 col-sm-4">
						<div class="panel panel-default">
								<div class="panel-body">
									<div class="form-group">
										<div id="map-canvas"></div>
									</div>
								</div>
								<div class="panel-footer">Localize aqui sua residência.</div>
							</div>
					</div>

					<div class="col-xs-12 col-sm-8">
						<div class="row">
							<div class="form-group col-xs-12 col-sm-6">
								<label>Instalado?</label>
								{!! Form::select('installed', ['' => '-', '1' => 'Sim', '0' => 'Não'], $costamarque->installed, ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="form-group">
							<label>Nome</label>
							<input class="form-control" placeholder="Nome" type="text" value="{{ $costamarque->name }}" name="name" id="name" disabled />
						</div>
						<div class="form-group">
							<label>Logradouro</label>
							<input class="form-control" placeholder="Logradouro" type="text" value="{{ $costamarque->address }}" name="address" id="address" disabled />
						</div>
						<div class="form-group">
							<label>Número</label>
							<input class="form-control" placeholder="Número" type="text" value="{{ $costamarque->number }}" name="number" id="number" disabled />
						</div>
						<div class="form-group">
							<label>Bairro</label>
							<input class="form-control" placeholder="Bairro" type="text" value="{{ $costamarque->neighborhood }}" name="neighborhood" id="neighborhood" disabled />
						</div>
						<hr class="hr-lg">
						<div class="form-group">
							<label>E-mail</label>
							<input class="form-control" placeholder="E-mail" type="text" value="{{ $costamarque->email }}" name="email" id="email" disabled />
						</div>
						<div class="form-group">
							<label>Latitude </label>
							<input class="form-control" placeholder="Latitude" type="text" value="{{ $costamarque->lat }}" name="lat" id="lat" disabled />
						</div>
						<div class="form-group">
							<label>Longitude </label>
							<input class="form-control" placeholder="Longitude" type="text" value="{{ $costamarque->lng }}" name="lng" id="lng" disabled />
						</div>

					</div>

				</div>
			</section>

			<section class="panel">
				<div class="panel-body">
					<button type="submit" class="btn btn-primary btn-md">
						<i class="fa fa-disk-o"></i>
						Salvar
					</button>
				</div> 
			</section>
		</form>
	</div>
</div>
</div>
@endsection

@section('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBA8QI_S7N-WnyBaZtxRuolkTcLzjbk0fw&libraries=places" type="text/javascript"></script>
<script>
	var lat = {{$costamarque->lat}};
	var lng = {{$costamarque->lng}};
	var map = new google.maps.Map(document.getElementById('map-canvas'),{
		center:{
			lat: lat,
			lng: lng
		},
		zoom: 17,
		mapTypeId: google.maps.MapTypeId.HYBRID
	});
	var marker = new google.maps.Marker({
		position:{
			lat:lat,
			lng: lng
		},
		map:map
	});
</script>

@endsection