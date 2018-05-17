@extends('layouts.black.slicklab', ['title' => 'Editar Fibra Óptica'])

@section('content')

<!-- page head start-->
<div class="page-head">
	<h1 class="text-center">Editar Fibra Óptica</h1>
	<p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
<!-- page head end-->

<!--body wrapper start-->
<div class="wrapper">
	<div class="col-md-10 col-centered">
		<div class="row">
			@include('shared.errors')
			{{ Form::open(['route' => ['admin.fibers.update', $fiber->id], 'method' => 'PUT' ]) }}
			<section class="panel">
				<div class="panel-body">

					<div class="col-xs-12 col-sm-4">
						<div class="form-group">
							<p>Sua foto ou logo:</p>
							<input type="file" class="dropify" name="file" id="file"  data-default-file="" disabled />
						</div>
					</div>

					<div class="col-xs-12 col-sm-8">
						<div class="row">
							<div class="form-group col-xs-12 col-sm-6">
								<label>Instalado?</label>
								{!! Form::select('installed', ['' => '-', '1' => 'Sim', '0' => 'Não'], $fiber->installed, ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="form-group">
							<label>Nome</label>
							<input class="form-control" placeholder="Nome" type="text" value="{{ $fiber->name }}" name="name" id="name" disabled />
						</div>
						<div class="form-group">
							<label>Logradouro</label>
							<input class="form-control" placeholder="Logradouro" type="text" value="{{ $fiber->address }}" name="address" id="address" disabled />
						</div>
						<div class="form-group">
							<label>Número</label>
							<input class="form-control" placeholder="Número" type="text" value="{{ $fiber->number }}" name="number" id="number" disabled />
						</div>
						<div class="form-group">
							<label>Bairro</label>
							<input class="form-control" placeholder="Bairro" type="text" value="{{ $fiber->neighborhood }}" name="neighborhood" id="neighborhood" disabled />
						</div>
						<hr class="hr-lg">
						<div class="form-group">
							<label>E-mail</label>
							<input class="form-control" placeholder="E-mail" type="text" value="{{ $fiber->email }}" name="email" id="email" disabled />
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
