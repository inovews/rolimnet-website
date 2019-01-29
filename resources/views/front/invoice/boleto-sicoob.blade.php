@extends('layouts.front.pages', ['title' => 'Atualizar Boleto do Sicoob'])

@section('content')
<div class="banner-index" data-parallax="scroll" data-image-src="{{ url('assets/img/1920x1080/04.jpg') }}">
	<div class="container content-sm">
		<h1>Atualizar Boleto do Sicoob</h1>
		<p class="margin-t-20">Rolim Net Tecnologia LTDA.</p>
	</div>
</div>

<div class="section-seperator">
	<div class="container content">
		<div class="row">
			<div class="col-md-8 col-sm-8">
				<h3>Sicoob</h3>
				<h2>Atualizar Boleto Sicoob pelo site</h2>
				<p class="text-justify">A forma mais fácil, rápida e segura para atualizar o seu boleto atrasado do Sicoob e emitir a 2ª via do código de barras para pagamento é através do próprio site da empresa.</p>

				<p class="text-justify">Portanto, para solicitar a segunda via do seu Boleto Sicoob, basta <a class="btn btn-success btn-xs" href="http://www.sicoob.com.br/segunda-via-de-boleto" target="_blank" rel="noopener">acessar este link</a> e escolher uma das duas maneiras disponíveis para fazer a atualização:</p>

				<p class="text-justify">1) Inserir os dados do boleto: “nosso número” e “cooperativa contratante / código beneficíário”. Segue uma imagem para te auxiliar a encontrar essas informações na sua fatura Sicoob.</p>
				<img src="{{ url('assets/img/como-atualizar-boleto-da-Sicoob.jpg') }}" alt="como atualizar boleto da Sicoob" width="655" height="185"/>

				<p class="text-justify">2) Preencher os números da linha digitável do seu boleto Sicoob, conforme imagem abaixo:</p>
				<img src="{{ url('assets/img/linha-digitável-de-boleto-atrasado-Sicoob.jpg') }}" alt="linha digitável de boleto atrasado Sicoob" width="655" height="200"/>

				<p class="text-justify">Reforçamos que, caso o boleto esteja vencido, o novo documento gerado através deste procedimento de atualização já virá com o valor atualizado, incluindo o acréscimo dos juros e/ou multa em função do atraso no pagamento.</p>
			</div>
			<div class="col-md-4 col-sm-4">
				<img src="{{ url('assets/img/dicas-de-segurança-para-2-via-de-boleto-sicoob.png') }}" alt="dicas de segurança para 2 via de boleto sicoob" width="362" height="100%"/>
			</div>
		</div>
	</div>
</div>

@endsection
