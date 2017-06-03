@extends('layouts.front.central-cliente.layouts.slicklab', ['title' => 'Meu perfil'])

@section('content')

<!-- page head start-->
<div class="page-head">
	<div class="text-center">
		<h1 style="margin:0">
			Meus Contratos
		</h1>
	</div>
</div>
<!-- page head end-->
<!--body wrapper start-->
<div class="wrapper">
	<div class="row">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-md-12">
					<div class="row state-overview">
						<div class="col-lg-4 col-sm-6">
							<section class="panel green">
								<div class="symbol ">
									<i class="fa fa-contract"></i>
								</div>
								<div class="value white">
									<h1 class="timer" data-from="0" data-to="432"
									data-speed="1000">
									<!--432-->0
								</h1>
								<p>Ativos</p>
							</div>
						</section>
					</div>
					<div class="col-lg-4 col-sm-6">
						<section class="panel red ">
							<div class="symbol ">
								<i class="fa fa-contract"></i>
							</div>
							<div class="value gray">
								<h1 class="timer" data-from="0" data-to="123"
								data-speed="1000">
								<!--123-->0
							</h1>
							<p>Cancelados</p>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
