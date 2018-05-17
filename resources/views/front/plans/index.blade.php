@extends('layouts.front.pages', ['title' => 'Planos'])

@section('content')

<div class="banner-index" data-parallax="scroll" data-image-src="{{ url('assets/img/1920x1080/04.jpg') }}">
	<div class="container content-sm">
		<h1>Planos</h1>
		<p class="margin-t-20">Confira nossos planos e assine.</p>
	</div>
</div>


<div class="section-seperator">
	<div class="container content">
		<div class="row">
			
			<div class="tab-pane active" id="red">
				<div class="row">
					<div class="internet">
						<div class="col-sm-8">
							<div class="cidades-uf">
								<div class="row">
									<div class="form-group ">
										<label class="col-sm-3">Você está em:</label>
										<div class="col-lg-9">
											{!! Form::select('plan_cities', [''=>'Selecione a Cidade']+App\Front\PlanCity::orderBy('name','asc')->pluck('name','slug')->all(), null, ['id' => 'plan_cities','class' => 'form-control']) !!}
										</div>
									</div>
								</div>
							</div>
							<!-- End Pricing List v4 -->
							<div class="col-sm-4">
								<div class="text-center">
									<img src="{{ url('assets/img/mouse.png') }}">
									<h3>DÚVIDA POR E-MAIL</h3>
									<p class="margin-b-30">
										Entre em contato que teremos maior prazer em respondê-lo. <a href=" {{route('contato.index')}} ">Clique aqui.</a>
									</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="text-center">
									<img src="{{ url('assets/img/history-button.png') }}">
									<h3>HORARIO DE ATENDIMENTO</h3>
									<p class="margin-b-30">
										Segunda a Sexta 08h as 18h<br>
										Sábado 08 as 13h
									</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="text-center">
									<img src="{{ url('assets/img/user.png') }}">
									<h3>CHAT ONLINE</h3>
									<p class="margin-b-0">
										Converse com um de nossos atendentes agora!
									</p>
									<button class="btn btn-default">Iniciar chat</button>
								</div>
							</div>

						</div>
						<div class="col-sm-4">
							<div class="row text-center">
								<div class="thumbnail">
									<img class="img-responsive" src="http://placehold.it/480x368" alt="">
								</div>
							</div>
						</div>
						<!--// end row -->
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

@endsection			