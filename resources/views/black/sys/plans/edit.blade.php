@extends('layouts.black.slicklab', ['title' => 'Editar plano'])

@section('content')

<!-- page head start-->
<div class="page-head">
	<h1 class="text-center">Editar plano</h1>
	<p class="lead text-center">//</p>
</div>
<!-- page head end-->

<!--body wrapper start-->
<div class="wrapper">
	<div class="col-md-10 col-centered">
		<div class="row">
			@include('shared.errors')
			{{ Form::open(['route' => ['admin.plans.update', $plan->id], 'method' => 'PUT' ]) }}
			<section class="panel">
				<div class="panel-body">
					<div class="col-xs-12 col-sm-4">
						<div class="form-group">
							<p>Sua foto ou logo:</p>
							<input type="file" class="dropify" name="file" id="file"  data-default-file="" disabled />
						</div>
					</div>
					<div class="col-xs-12 col-sm-8">
						<div class="form-group">
							<input class="form-control" placeholder="Nome" type="text" value="{{ $plan->name }}" name="name" id="name" />
						</div>
						<div class="row">
							<div class="form-group col-xs-12 col-sm-6">
								<small>Cidade</small>
								{!! Form::select('plan_city_id', [''=>'-']+App\Black\PlanCity::pluck('name','id')->all(), $plan->plan_city_id, ['class'=>'form-control', 'form-control']) !!}
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-12 col-sm-6">
								<small>Localização</small>
								{!! Form::select('zone', ['' => '-', 'urban' => 'Zona Urbana', 'countryside' => 'Zona Rural'], $plan->zone, ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-12 col-sm-6">
								<small>Destaque</small>
								{!! Form::select('featured', ['' => '-', '1' => 'Sim', '0' => 'Não'], $plan->featured, ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="form-group">
							<small>Em fase de teste.</small>
							<div class="input-group">
								<span class="input-group-addon">http://rolimnet.com.br/planos/</span>
								<input class="form-control" placeholder="URL amigável" type="text" value="{{ $plan->slug }}" name="slug" id="slug" />
							</div>
						</div>
						<div class="row">
						<div class="form-group col-xs-12 col-sm-6">
							<div class="input-group">
								<span class="input-group-addon">R$</span>
								<input class="form-control" placeholder="Valor" type="text" value="{{ $plan->price }}" name="price" id="price" />
							</div>
						</div>
						</div>
						<hr class="hr-lg">
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
