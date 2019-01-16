@extends('layouts.black.slicklab', ['title' => 'Seringueiras'])

@section('content')
<!-- page head start-->
<div class="page-head">
	<div class="text-center">
		<h1 style="margin:0">
		Clientes Fibra Óptica
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
					<a class="btn btn-info btn-sm" disabled href="{{route('admin.seringueiras.create')}}">Adicionar novo</a>
					<a class="btn btn-gray btn-sm" href="#">Todos</a>
					<a class="btn btn-gray btn-sm" href="#?status=aprovados">Aprovados</a>
					<a class="btn btn-gray btn-sm" href="#?status=nao-aprovados">Não aprovados</a>
					<a class="btn btn-gray btn-sm" href="#?status=aguardando-aprovacao">Aguardando</a>
				</header>
				<div class="table-responsive">
				@if($seringueiras)
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
						@foreach($seringueiras as $seringueira)
							<tr>
								<th>{{ $seringueira->id }}</th>
								<th><a disabled href="{{ route('admin.seringueiras.edit' , $seringueira->id) }}">{{ $seringueira->name }}</a></th>
								<th>{{ $seringueira->address }}, {{ $seringueira->number }}, {{ $seringueira->neighborhood }}</th>
								<th>{{ $seringueira->phone}}</th>
								<th>{{ $seringueira->email}}</th>
								<th>{{ $seringueira->created_at}}</th>
								<th>@if ($seringueira->installed == '1')
									<span class="label label-success bg-success">Instalado</span>
									@else
									<span class="label label-danger bg-danger">Não Instalado</span>
									@endif
								</th>

								<th colspan="3">
									{!! Form::open([
									'route' => array('admin.seringueiras.destroy', $seringueira->id), 'method' => 'DELETE']) !!}
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

