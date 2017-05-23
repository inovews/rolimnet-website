@extends('layouts.black.slicklab', ['title' => 'Adicionar novo plano'])

@section('content')

<!-- page head start-->
<div class="page-head">
	<h1 class="text-center">Adicionar novo plano</h1>
	<p class="lead text-center">//</p>
</div>
<!-- page head end-->

<!--body wrapper start-->
<div class="wrapper">
	<div class="col-md-10 col-centered">
		<div class="row">
			@include('shared.errors')
			{{Form::open(array('route'=>'admin.plans.store','method'=>'POST'))}}
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
							<input class="form-control" placeholder="Nome" type="text" value="" name="name" id="name" />
						</div>
						<div class="row">
							<div class="form-group col-xs-12 col-sm-6">
								<small>Cidade</small>
								{!! Form::select('plan_city_id', [''=>'-']+App\Black\PlanCity::pluck('name','id')->all(), null, ['class'=>'form-control', 'form-control']) !!}
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-12 col-sm-6">
								<small>Localização</small>
								{!! Form::select('zone', ['' => '-', 'urban' => 'Zona Urbana', 'countryside' => 'Zona Rural'], null, ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-12 col-sm-6">
								<small>Destaque</small>
								{!! Form::select('featured', ['' => '-', '1' => 'Sim', '0' => 'Não'], null, ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="form-group">
							<small>Em fase de teste.</small>
							<div class="input-group">
								<span class="input-group-addon">http://rolimnet.com.br/planos/</span>
								<input class="form-control" placeholder="URL amigável" type="text" value="" name="slug" id="slug" />
							</div>
						</div>
						<div class="row">
						<div class="form-group col-xs-12 col-sm-6">
							<div class="input-group">
								<span class="input-group-addon">R$</span>
								<input class="form-control" placeholder="Valor" type="text" name="price" id="price" />
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
