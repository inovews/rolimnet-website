@extends('layouts.front.central-cliente.layouts.slicklab', ['title' => 'Financeiro'])

@section('content')

<!-- page head start-->
<div class="page-head">
	<div class="text-center">
		<h1 style="margin:0">
			Financeiro
		</h1>
	</div>
</div>
<!-- page head end-->
<!--body wrapper start-->
<div class="wrapper">
	<div class="row">
		<div class="col-sm-12">
			<div class="row state-overview state-alt">
				<div class="col-lg-3 col-sm-6">
					<section class="panel g-border">
						<div class="symbol">
							<span class="bg-success"><i class="fa fa-tag"></i></span>
						</div>
						<div class="value ">
							<h1 class="">
								0
							</h1>
							<p>Contratos Ativos</p>
						</div>
					</section>
				</div>
				<div class="col-lg-3 col-sm-6">
					<section class="panel p-border">
						<div class="symbol ">
							<span class="bg-primary"><i class="fa fa-money"></i></span>
						</div>
						<div class="value ">
							<h1>
								0
							</h1>
							<p>Débitos</p>
						</div>
					</section>
				</div>

			</div>
		</div>
		<div class="col-sm-12">
			<section class="panel">
				<header class="panel-heading ">
					Acesso Rápido
				</header>
				<div class="panel-body">
					<button type="button" class="btn btn-default m-b-10">Alterar vencimento</button>
					<button type="button" class="btn btn-default m-b-10">2ª Via de Boleto</button>
					<button type="button" class="btn btn-default m-b-10">Quitar Débitos</button>
					<button type="button" class="btn btn-default m-b-10">Alterar endereço</button>
					<button type="button" class="btn btn-default m-b-10">Alterar plano</button>
					<button type="button" class="btn btn-default m-b-10">2ª Via NF-e</button>
					<button type="button" class="btn btn-danger m-b-10">Cancelar Assinatura</button>
				</div>
			</section>
		</div>
	</div>

	@endsection
