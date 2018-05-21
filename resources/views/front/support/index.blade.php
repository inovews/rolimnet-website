@extends('layouts.front.pages', ['title' => 'Suporte Técnico'])

@section('content')

<div class="banner-index" data-parallax="scroll" data-image-src="{{ url('assets/img/1920x1080/04.jpg') }}">
	<div class="container content-sm">
		<h1>Suporte Técnico</h1>
		<p class="margin-t-20">Rolim Net Tecnologia LTDA.</p>
	</div>
</div>

<div class="section-seperator">
	<div class="container content">
		<div class="row">
			<div class="col-sm-12">
				<h3>Está com problemas?</h3>
				<h2>Suporte Técnico</h2>
				<h3>Por favor, antes de nos ligar, siga estes procedimentos básicos:</h3>
				<ul class="list-group">
					<li class="list-group-item">01. Certifique-se de que sua antena de recepção de sinal esteja ligada e os cabos devidamente colocados nas posições corretas.</li>
					<li class="list-group-item">02. Caso possua roteador wi-fi, verifique se o mesmo está ligado e se os cabos estão nas posições corretas.</li>
					<li class="list-group-item">03. Verifique se o sinal wi-fi do seu celular ou computador está conectado.</li>
					<li class="list-group-item">04. Caso esteja tudo ligado e não funcione, comece desligando o roteador e a antena. Feito isso, espere alguns segundos e teste novamente.</li>
					<li class="list-group-item">05. Siga estes passos, e se não funcionar, nos ligue! Teremos o maior prazer em atende-los.</li>
					<li class="list-group-item">06. Ao ligar solicite o número do protocolo de antendimento. É muito importante para o seu acompanhamento e solicitação de desconto por paralização.</li>
				</ul>
				<p>Nosso atendimento é de segunda a sábado das 8:00 às 18:00 horas pelo telefone (69)3442-2779.<br>
				Lembramos que, se necessário ir ao local, o atendimento será em até 72 horas e em horário comercial.</p>

			</div>
			<div class="col-sm-12">
				<h2>Quer entrar em contato com a gente?</h2>
				<p>Para tirar dúvidas, nos dar sugestões, ou fazer algum tipo de reclamação, basta preencher os campos abaixo. Teremos o prazer em responder.</p>
				<div class="row">
					
					<div class="col-sm-7">                  
						@if (Session::has('message'))
						<div class="alert alert-success">
							{{ Session::get('message') }}
						</div>
						@endif
						{!! Form::open(array('route' => 'suporte.enviar', 'class' => 'form', 'files' => true)) !!}
						<ul>
							@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
						<div class="controls">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="name" value="" placeholder="Seu nome" class="form-control input-lg" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="email" placeholder="Seu email" class="form-control input-lg" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="phone" placeholder="Telefone" class="form-control input-lg" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="subject" placeholder="Assunto" class="form-control input-lg" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="message" id="" cols="30" rows="5" class="form-control input-lg" placeholder="Mensagem" required></textarea>
									</div>
								</div>
								<div class="col-md-12">
									{!! Captcha::display($attributes) !!}
								</div>
								<div class="col-md-12">
									<input type="submit" class="btn btn-block btn-success raised" value="Enviar Mensagem">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<br>
									<small class="text-muted"><strong>*</strong> Estes campos são obrigatórios.</small>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-sm-5">
					<div class="row text-center">
						<div class="thumbnail">
							<img class="img-responsive" src="http://placehold.it/480x368" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection