@extends('layouts.front.central-cliente.layouts.slicklab', ['title' => 'Meus tickets'])

@section('content')

<!-- page head start-->
<div class="page-head">
	<div class="text-center">
		<h1 style="margin:0">
			Meus tickets
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
					<a class="btn btn-info btn-sm" href="{{route('centralcliente.tickets.create')}}">Adicionar novo</a>
					<a class="btn btn-gray btn-sm" href="#">Todos</a>
					<a class="btn btn-gray btn-sm" href="#aberto">Aberto</a>
					<a class="btn btn-gray btn-sm" href="#em-andamento">Em andamento</a>
					<a class="btn btn-gray btn-sm" href="#fechado">Fechado</a>
					<a class="btn btn-gray btn-sm" href="#reaberto">Reaberto</a>
				</header>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Ticket ID</th>
								<th>Título</th>
								<th>Respostas</th>
								<th>Categoria</th>
								<th>Status</th>
								<th>Prioridade</th>
								<th>Data de criação</th>                                
								<th>Data de atualização</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><span class="label label-default">#T9CFRSGEEK</span></td>
								<td>
									<a href="http://rolimnet-ticket.local:8000/tickets/T9CFRSGEEK">
										Test 1
									</a>
								</td>   
								<td><span class="badge">0</span></td>
								<td>
									Technical
								</td>
								<td>
									<span class="label label-warning"> Em andamento</span>

								</td>
								<td>
									<p class="bg-success"> Normal</p>

								</td>                                    
								<td>1 hour ago</td>
								<td>1 hour ago</td>
							</tr>
						</tbody>
					</table>

				</div>
			</section>
		</div>
	</div>
</div>

@endsection
