@extends('layouts.front.pages', ['title' => 'Produtos'])

@section('content')

<div class="banner-index" data-parallax="scroll" data-image-src="{{ url('assets/img/1920x1080/04.jpg') }}">
	<div class="container content-sm">
		<h1>Produtos</h1>
		<p class="margin-t-20">Rolim Net Tecnologia LTDA.</p>
	</div>
</div>

<div class="section-seperator">
	<div class="container content">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>Rolim Net Tecnologia LTDA.</h1>
				<hr>
				<div class="row">
					<div class="col-sm-12 col-md-6 text-center">
						<img src="/assets/img/office-620822_640.jpg" height="388" width="570" alt="">
					</div>
					<div class="col-sm-12 col-md-6 text-sm-left">
						<p class="text-justify">A Rolim Net Informática ficou conhecida por ter iniciado em 2011 suas atividades oferecendo para os clientes descontos especiais em todo linha de produtos de informática e Telecom onde serva de 90% do nosso público são clientes de internet e provedores de internet, que procuram preço e qualidade.</p>
						<p>Nossos preços sempre foram muito atrativos principalmente para quem quer revender, pois somos representantes das principais indústrias do setor entre elas (Multilaser, Oiw Telecom Solutions ,Antenas Aquário, Greatek, APC, etc).</p>
						<p>A Rolim Net Informática fica localizada na Avenida Manaus, nº 5095 – Centro em Rolim de Moura – RO Telefone para Contato (69) 3442-2779.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="inline-image-right">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 align-vertical no-align-mobile">
				<h1>A Rolim Net Fibra tem a solução ideal para impulsonar o seu negócio.</h1>
				<h4>Evolução para seu negócio.</h4>
				<p class="text-justify">
					Os serviços empresariais da Rolim Net Fibra é a solução adequada para empresas que precisam
					utilizar a internet com alta qualidade e com garantia de disponibilidade da banda contratada. Empresas de todos os tamanhos que desejam acessar a Internet para uso profissional, encontram em nossos serviços a solução ideal para conectar-se á Internet com possibilidade de oferecer acesso externo as informações e recursos da rede local.
				</p>
			</div>

			<div class="col-sm-6 text-center">
				<img alt="Product Image" class="product-image" src="/assets/img/office-625892_640.jpg" height="388" width="570">
			</div>
		</div><!--end of row-->
	</div><!--end of container-->
</section>

<section class="duplicatable-content">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6 clearfix">
				<div class="feature feature-icon-small">
					<h4>Planos Fibra Empresarial</h4>
					<p class="text-justify">
						Tenologia 100% em fibra óptica que proporciona atigir alta velocidade na transmissão e recpção de dados. Mais econômico que uma conexão de garantia total de banda.
					</p>
				</div><!--end of feature-->
			</div>
			<div class="col-md-4 col-sm-6 clearfix">
				<div class="feature feature-icon-small">
					<h4>Link Dedicado sob Fibra Óptica</h4>
					<p class="text-justify">
						Garantia da banda contratada com simetria de download e upload, oferece privacidade, segurança e estabilidade pois o meio físico é único, exclusivo e estendido entre o assinante e o Provedor.
					</p>
				</div><!--end of feature-->
			</div>
			<div class="col-md-4 col-sm-6 clearfix">
				<div class="feature feature-icon-small">
					<h4>Serviços de VLAN</h4>
					<p class="text-justify">
						Conseguimos transportar dados com segurança e alta velocidade dentro de nossas redes de fibra óptica e de rádio frequência de alta capacidade.
					</p>
				</div><!--end of feature-->
			</div>
		</div><!--end of row-->
	</div><!--end of container-->
</section>

<section class="section section-seperator">
	<div class="container">
		<h2>Outros Serviços</h2>
		<hr>
		<div class="row text-sm-left flow-offset-2">
			<div class="col-xs-12 col-sm-6 col-lg-4">
				<div class="media thumbnail-mod-2">
					<div class="media-body">
						<h4>Ponto-a-ponto</h4>
						<p class="text-justify">Ideal para conectar a matriz as suas ﬁliais, ou a fábrica ao escritório.
							Esse tipo de conexão é indicado para conectar dois pontos da sua rede entre si, com alta disponibilidade e estabilidade.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<div class="media thumbnail-mod-2">
						<div class="media-body">
							<h4>Link Temporário</h4>
							<p class="text-justify">Solicite Links temporários para conexão do seu evento em qualquer região atendida pela RolimNet.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	@endsection