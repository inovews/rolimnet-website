@extends('layouts.black.slicklab', ['title' => 'Banners'])

@section('content')
<!-- page head start-->
<div class="page-head">
	<div class="text-center">
		<h1 style="margin:0">
		Lista de Contato Suporte
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
					<a class="btn btn-info btn-sm" disabled href="{{route('admin.supports.create')}}">Adicionar novo</a>
					<a class="btn btn-gray btn-sm" href="#">Todos</a>
					<a class="btn btn-gray btn-sm" href="#?status=aprovados">Aprovados</a>
					<a class="btn btn-gray btn-sm" href="#?status=nao-aprovados">Não aprovados</a>
					<a class="btn btn-gray btn-sm" href="#?status=aguardando-aprovacao">Aguardando</a>
				</header>
				<div class="table-responsive">
				@if($supports)
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
								<th>Telefone</th>
								<th>Data de criação</th>
								<th colspan="3">Ações</th>
							</tr>
						</thead>
						<tbody>
						@foreach($supports as $support)
							<tr>
								<th>{{ $support->id }}</th>
								<th><a href="{{ route('admin.supports.edit' , $support->id) }} ">{{ $support->name }}</a></th>
								<th>{{ $support->phone }}</th>
								<th>{{ $support->created_at}}</th>

								<th colspan="3">
									{!! Form::open([
									'route' => array('admin.supports.destroy', $support->id), 'method' => 'DELETE']) !!}
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

