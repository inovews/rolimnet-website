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
											{!! Form::select('plan_cities', [''=>'Selecione a Cidade']+App\Front\PlanCity::pluck('name','id')->all(), null, ['id' => 'plan_cities','class' => 'form-control']) !!}
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="row">
									<div id='planos' class="col-md-4 md-margin-b-30">
										<!-- Pricing List v4 -->
										<div class="pricing-list-v4 radius-10">
											<div class="pricing-list-v4-header">
												<h4 class="pricing-list-v4-title">3mega</h4>
												<span class="pricing-list-v4-subtitle">Urbano</span>
											</div>
											<div class="pricing-list-v4-content">
												<div class="margin-b-40">
													<span class="pricing-list-v4-price-sign">R$</span>
													<span class="pricing-list-v4-price">99,</span>
													<span class="pricing-list-v4-subprice">00</span>
													<span class="pricing-list-v4-price-info">mês</span>
												</div>
												<div class="">
													<button type="button" class="btn btn-primary raised">Assinar</button>
												</div>
											</div>
										</div>
										<!-- End Pricing List v4 -->
									</div>
									<div class="col-md-4 md-margin-b-30">
										<!-- Pricing List v4 -->
										<div class="pricing-list-v4 radius-10">
											<div class="pricing-list-v4-header">
												<h4 class="pricing-list-v4-title">5mega</h4>
												<span class="pricing-list-v4-subtitle">Urbano</span>
											</div>
											<div class="pricing-list-v4-content">
												<div class="margin-b-40">
													<span class="pricing-list-v4-price-sign">R$</span>
													<span class="pricing-list-v4-price">149,</span>
													<span class="pricing-list-v4-subprice">00</span>
													<span class="pricing-list-v4-price-info">mês</span>
												</div>
												<div class="center-block">
													<button type="button" class="btn btn-primary raised">Assinar</button>
												</div>
											</div>
										</div>
										<!-- End Pricing List v4 -->
									</div>
									<div class="col-md-4 md-margin-b-30">
										<!-- Pricing List v4 -->
										<div class="pricing-list-v4 radius-10">
											<div class="pricing-list-v4-header">
												<h4 class="pricing-list-v4-title">10mega</h4>
												<span class="pricing-list-v4-subtitle">Urbano</span>
											</div>
											<div class="pricing-list-v4-content">
												<div class="margin-b-40">
													<span class="pricing-list-v4-price-sign">R$</span>
													<span class="pricing-list-v4-price">199,</span>
													<span class="pricing-list-v4-subprice">00</span>
													<span class="pricing-list-v4-price-info">mês</span>
												</div>
												<div class="center-block">
													<button type="button" class="btn btn-primary raised">Assinar</button>
												</div>
											</div>
										</div>
										<!-- End Pricing List v4 -->
									</div>
								</div>
								<!--// end row -->
							</div>
							<!-- End Pricing List v4 -->
						</div>
						<div class="col-sm-4">
							<div class="row text-center">
								<img src="{{ url('assets/img/banner-rolimnet-fibra.jpg') }}" width="368" height="100%">
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