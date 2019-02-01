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
			<div class="col-md-12">
				<div class="thumbnail">
					<img class="img-responsive" src="http://placehold.it/984x170" alt="">
				</div>
			</div>
			<div class="tab-pane active" id="red">
				<div class="row">
					<div class="internet">
						<div class="col-sm-8">
							<div class="cidades-uf">
								<div class="row">
									<div class="form-group ">
										<label class="col-sm-3">Você está em:</label>
										<div class="col-lg-9">
											{!! Form::select('plan_cities', [''=>'Selecione a Cidade']+App\Front\PlanCity::orderBy('name','asc')->pluck('name','slug')->all(), $plan_city->slug, ['id' => 'plan_cities','class' => 'form-control']) !!}
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div align="center">
									<button class="btn btn-default filter-button" data-filter="all">Todos</button>
									<button class="btn btn-default filter-button" data-filter="urban">Zona Urbana</button>
									<button class="btn btn-default filter-button" data-filter="countryside">Zona Rural</button>
								</div>
								<div align="center">
									<button class="btn btn-success btn-xs filter-button" data-filter="fiber">Fibra Óptica</button>
									<button class="btn btn-success btn-xs filter-button" data-filter="wireless">Wireless</button>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="row">
									@if($plans->all())
									@foreach($plans as $plan)
									<div id='planos' class="col-md-4 md-margin-b-30">
										<!-- Pricing List v4 -->
										<div class="pricing-list-v4 radius-10 filter {{ $plan->zone }} {{ $plan->type }}">
											<div class="pricing-list-v4-header">
												<h4 class="pricing-list-v4-title">{{ $plan->name }}</h4>
												<span class="pricing-list-v4-subtitle">@if ($plan->zone == 'urban') Zona Urbana @else Zona Rural @endif</span>
											</div>
											<div class="pricing-list-v4-content">
												<div class="margin-b-40">
													<span class="pricing-list-v4-price-sign">R$</span>
													<span class="pricing-list-v4-price">{{ $plan->price }}</span>
													<span class="pricing-list-v4-price-info">mês</span>
												</div>
												<div class="">
													<button type="button" class="btn btn-primary raised">Assinar</button>
												</div>
											</div>
										</div>
										<!-- End Pricing List v4 -->
									</div>
									@endforeach
									<div class="text-center">
										<div class="pagination">
											<!-- Aqui vai a paginação -->
										</div>
									</div>
									@else
									<div class="text-center"><h2>Nenhum registro encontrado!</h2></div>
									@endif
								</div>
								<!--// end row -->
							</div>
							<!-- End Pricing List v4 -->
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