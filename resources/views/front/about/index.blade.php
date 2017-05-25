@extends('layouts.front.pages', ['title' => 'Empresa'])

@section('content')
<div class="banner-index" data-parallax="scroll" data-image-src="{{ url('assets/img/1920x1080/04.jpg') }}">
	<div class="container content-sm">
		<h1>Empresa</h1>
		<p class="margin-t-20">Rolim Net Tecnologia LTDA.</p>
	</div>
</div>

<div class="section-seperator">
	<div class="container content">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>Sobre nós</h3>
				<h2>Rolim Net</h2>
				<img class="pull-right" alt="" src="{{ url('assets/img/rolimnet-01.png') }}"/>
				<p>A Rolim Net surgiu no ano de 2008 entre uma conversa entre os Irmão Alexandre Silvério e Juliano Silvério referente a carência de serviços de conectividade a rede mundial de internet em Rolim de Moura - RO. Com muito trabalho foi montado o primeiro servidor com um link dedicado entregue sobre par metálico de 2 Megabytes e a primeira Torre de Transmissão ainda no mesmo ano. Já no ano de 2011 não tendo mais como aumentar a demanda de links em Rolim de Moura, foi fundada a NORTE TELECOMUNICAÇÕES uma empresa em parceria com a Eletrônica Panamérica do município de Pimenta Bueno - RO onde foi possível adquirir o primeiro link de internet sobre fibra Óptica. A Rolim Net sempre preocupada em atender bem, em Junho de 2013 inaugurou sua sede e passou a comercializar também produtos de informática e realizar manutenções em micro computadores.</p>
				<p>No ano de 2014 a empresa buscou junto a ELETRONORTE uma solução para falta de links em Rolim de Moura, onde ficou responsável pela montagem do bastidor Óptico e Switch óptico na Eletrobrás possibilitando interligar Rolim de Moura com vários outros estados. Hoje a empresa conta com um total de link dedicado que ultrapassa 01 Gigabyte de Link distribuídos entre Rolim de Moura e Pimenta Bueno estando com postos de presença em mais de 10 cidades e várias Linhas na Zona da Mata. A Rolim Net é ganhadora dos Troféu ACIRM dos anos de 2010, 2012, 2013, 2014, 2015 e 2016.</p>
				<p>Totalmente familiar, assim é a Rolim Net hoje, contando com a colaboração dos patriarcas, Osvaldo e Glória Silvério, dos irmãos Alexandre e Juliano Silvério e ainda com uma equipe de mais de 15 colaboradores, que constantemente trabalham para oferecer o melhor da internet. Localizada na Avenida Manaus, nº 5095 – Centro – Rolim de Moura – RO e atendendo pelo telefone, (69) 3442-2779 a Rolim Net é especializada em transmissão de internet banda larga, manutenção de computadores, redes e servidores, consultoria e venda de produtos de informática.</p>
			</div>
		</div>
	</div>
</div>

<section class="duplicatable-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="feature">
					<h2>Missão</h2>
					<p>
						Oferecer excelência em internet e serviços de conectividade, promovendo o desenvolvimento sustentável da região.
					</p>
				</div>
			</div><!--end 4 col-->

			<div class="col-sm-4">
				<div class="feature">
					<h2>Valores</h2>
					<p>
						Ser referência entre as principais empresas de telecomunicação da Região.
					</p>
				</div>
			</div><!--end 4 col-->

			<div class="col-sm-4">
				<div class="feature">
					<h2>Visão</h2>
					<p>
						Ter respeito pelas pessoas, pois as pessoas fazem a diferença;
					Ter a satisfação de nossos clientes, eles são os responsáveis pela existência do nosso negócio;
					Buscar constantemente inovação e conhecimento e aplica-lo com humildade.
					</p>
				</div>
			</div><!--end 4 col-->
		</div><!--end of row-->
	</div>
</section>
@endsection
