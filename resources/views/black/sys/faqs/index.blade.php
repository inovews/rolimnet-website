@extends('layouts.black.slicklab', ['title' => 'Perguntas Frequentes'])

@section('content')
<!-- page head start-->
<div class="page-head">
	<div class="text-center">
		<h1 style="margin:0">
		Lista de Perguntas Frequentes
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
					<a class="btn btn-info btn-sm" href="{{route('admin.faqs.create')}}">Adicionar novo</a>
					<a class="btn btn-gray btn-sm" href="#">Todos</a>
					<a class="btn btn-gray btn-sm" href="#?status=aprovados">Aprovados</a>
					<a class="btn btn-gray btn-sm" href="#?status=nao-aprovados">Não aprovados</a>
					<a class="btn btn-gray btn-sm" href="#?status=aguardando-aprovacao">Aguardando</a>
				</header>
				<div class="table-responsive">
				@if($faqs)
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
								<th>Descrição</th>
								<th>Data de criação</th>
								<th>Categoria</th>
								<th>Status</th>
								<th colspan="3">Ações</th>
							</tr>
						</thead>
						<tbody>
						@foreach($faqs as $faq)
							<tr>
								<th>{{ $faq->id }}</th>
								<th><a href="{{ route('admin.faqs.edit' , $faq->id) }}">{{ $faq->title }}</a></th>
								<th>{{ str_limit($faq->description, $limit = 50, $end = '...') }}</th>
								<th>{{ $faq->created_at}}</th>
								<th>{{ $faq->category_id}}</th>
								<th>@if ($faq->status == 'active')
									<span class="label label-success bg-success">ativo</span>
									@else
									<span class="label label-danger bg-danger">inativo</span>
									@endif</th>

								<th colspan="3">
									{!! Form::open([
									'route' => array('admin.faqs.destroy', $faq->id), 'method' => 'DELETE']) !!}
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

