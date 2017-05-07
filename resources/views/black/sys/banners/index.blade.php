@extends('layouts.black.slicklab', ['title' => 'Banners'])

@section('content')
<!-- page head start-->
<div class="page-head">
	<div class="text-center">
		<h1 style="margin:0">
		Listagem de Banners
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
					<a class="btn btn-info btn-sm" href="{{route('admin.banners.create')}}">Adicionar novo</a>
					<a class="btn btn-gray btn-sm" href="#">Todos</a>
					<a class="btn btn-gray btn-sm" href="#?status=aprovados">Aprovados</a>
					<a class="btn btn-gray btn-sm" href="#?status=nao-aprovados">Não aprovados</a>
					<a class="btn btn-gray btn-sm" href="#?status=aguardando-aprovacao">Aguardando</a>
				</header>
				<div class="table-responsive">
				@if($banners)
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
								<th>Data de criação</th>
								<th>Data de expiração</th>
								<th>Status</th>
								<th colspan="3">Ações</th>
							</tr>
						</thead>
						<tbody>
						@foreach($banners as $banner)
							<tr>
								<th>{{ $banner->id }}</th>
								<th><a href="{{ route('admin.banners.edit' , $banner->id) }}">{{ $banner->name }}</a></th>
								<th>{{ $banner->price }}</th>
								<th>{{ $banner->created_at}}</th>
								<th>{{ $banner->until_then}}</th>
								<th>@if ($banner->status == 'active')
									<span class="label label-success bg-success">ativo</span>
									@else
									<span class="label label-danger bg-danger">inativo</span>
									@endif</th>

								<th colspan="3">
									{!! Form::open([
									'route' => array('admin.banners.destroy', $banner->id), 'method' => 'DELETE']) !!}
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

