@extends('layouts.black.slicklab', ['title' => 'Fibra Óptica'])

@section('content')
<!-- page head start-->
<div class="page-head">
	<div class="text-center">
		<h1 style="margin:0">
		Lista de Clientes Fibra Óptica
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
					<a class="btn btn-info btn-sm" disabled href="{{route('admin.fibers.create')}}">Adicionar novo</a>
					<a class="btn btn-gray btn-sm" href="#">Todos</a>
					<a class="btn btn-gray btn-sm" href="#?status=aprovados">Aprovados</a>
					<a class="btn btn-gray btn-sm" href="#?status=nao-aprovados">Não aprovados</a>
					<a class="btn btn-gray btn-sm" href="#?status=aguardando-aprovacao">Aguardando</a>
				</header>
				<div class="table-responsive">
				@if($fibers)
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
								<th>Endereço</th>
								<th>Telefone</th>
								<th>E-mail</th>
								<th>Data de criação</th>
								<th>Status</th>
								<th colspan="3">Ações</th>
							</tr>
						</thead>
						<tbody>
						@foreach($fibers as $fiber)
							<tr>
								<th>{{ $fiber->id }}</th>
								<th><a disabled href="{{ route('admin.fibers.edit' , $fiber->id) }}">{{ $fiber->name }}</a></th>
								<th>{{ $fiber->address }}, {{ $fiber->number }}, {{ $fiber->neighborhood }}</th>
								<th>{{ $fiber->phone}}</th>
								<th>{{ $fiber->email}}</th>
								<th>{{ $fiber->created_at}}</th>
								<th>@if ($fiber->status == 'active')
									<span class="label label-success bg-success">ativo</span>
									@else
									<span class="label label-danger bg-danger">inativo</span>
									@endif
								</th>

								<th colspan="3">
									{!! Form::open([
									'route' => array('admin.fibers.destroy', $fiber->id), 'method' => 'DELETE']) !!}
									</a>
									<button disabled type="submit" class="btn btn-xs btn-danger">
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

