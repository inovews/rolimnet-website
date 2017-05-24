@extends('layouts.black.slicklab', ['title' => 'Planos'])

@section('content')
<!-- page head start-->
<div class="page-head">
	<div class="text-center">
		<h1 style="margin:0">
		Planos
		</h1>
	</div>
</div>
<!-- page head end-->
<!--body wrapper start-->
<div class="wrapper">
	<div class="row">
		<div class="col-lg-12">
			<section class="panel">
				<header class="panel-heading head-border">
					<a class="btn btn-info btn-sm" href="{{route('admin.plans.create')}}">Adicionar novo</a>
					<a class="btn btn-gray btn-sm" href="#">Todos</a>
					<a class="btn btn-gray btn-sm" href="#?status=aprovados">Aprovados</a>
					<a class="btn btn-gray btn-sm" href="#?status=nao-aprovados">Não aprovados</a>
					<a class="btn btn-gray btn-sm" href="#?status=aguardando-aprovacao">Aguardando</a>
				</header>
				<div class="table-responsive">
				@if($plans)
					@if (Session::has('message'))
					<div class="alert alert-success">
						{{ Session::get('message') }}
					</div>
					@endif
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Título</th>
								<th>Valor</th>
								<th>Cidade</th>
								<th>Data de criação</th>
								<th colspan="3">Ações</th>
							</tr>
						</thead>
						<tbody>
						@foreach($plans as $plan)
							<tr>
								<th>{{ $plan->id }}</th>
								<th><a href="{{ route('admin.plans.edit' , $plan->id) }} ">{{ $plan->name }}</a></th>
								<th>{{ $plan->price }}</th>
								<th>{{ $plan->plan_city->name }}</th>
								<th>{{ $plan->created_at}}</th>

								<th colspan="3">
									{!! Form::open([
									'route' => array('admin.plans.destroy', $plan->id), 'method' => 'DELETE']) !!}
									</a>
									<button type="submit" class="btn btn-xs btn-danger">
										<span class="fa fa-remove" aria-hidden="true"></span> Deletar
									</button>
									{!! Form::close() !!}
								</th>
							</tr>
						@endforeach
						</tbody>
					</table>
					@endif
				</div>
			</section>
		</div>
	</div>
</div>
<!--body wrapper end-->
@endsection

