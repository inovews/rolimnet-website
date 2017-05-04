@extends('layouts.front.pages', ['title' => 'Contato'])

@section('content')
	<div class="banner-index" data-parallax="scroll" data-image-src="{{ url('assets/img/1920x1080/04.jpg') }}">
		<div class="container content-sm">
			<h1>Contato</h1>
			<p class="margin-t-20">A equipe de atendimento Rolim Net está à disposição para ajudar você.</p>
		</div>
	</div>

	<div class="section-seperator">
		<div class="container content">
			<div class="row">
				<div class="col-sm-12">
					<h2>Canais de comunicação</h2>
					<div class="col-sm-4">
						<div class="text-center">
							<img src="{{ url('assets/img/mouse.png') }}">
							<h3>DÚVIDA POR E-MAIL</h3>
							<p class="margin-b-30">
								Entre em contato que teremos maior prazer em respondê-lo.
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
							{!! Form::open(array('route' => 'contato.enviar', 'class' => 'form', 'files' => true)) !!}
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
							<div class="row col1">
								<div class="col-xs-3">
									<i class="fa fa-map-marker" style="font-size:16px;"></i> Endereço
								</div>
								<div class="col-xs-9">
									Av. Manaus, 5095, Centro, Rolim de Moura/RO
								</div>
							</div>

							<div class="row col1">
								<div class="col-sm-3">
									<i class="fa fa-phone"></i> Telefone
								</div>
								<div class="col-sm-9">
									(69) 3442-2779
								</div>
							</div>
							<div class="row col1">
								<div class="col-sm-3">
									<i class="fa fa-envelope"></i> E-mail
								</div>
								<div class="col-sm-9">
									<a href="#">geral@rolimnet.com.br</a> <br> <a href="#">suporte@rolimnet.com.br</a>
								</div>
							</div><br>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1954.3850105893791!2d-61.778981206544195!3d-11.732684828113818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93c86bf73f54805d%3A0xf073da2a98c27a5a!2sRolim+Net!5e0!3m2!1spt-BR!2sus!4v1489105726156" width="100%" height="210" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div class="col-sm-7">
							<h2>WhatsApp</h2>
							<div class="col-sm-4">
								<div class="text-center">
									<i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i>
									<h3>Financeiro</h3>
									<p>(69) 9 8494-5271</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="text-center">
									<i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i>
									<h3>Suporte</h3>
									<p>(69) 9 8451-8073</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="text-center">
									<i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i>
									<h3>Vendas</h3>
									<p>(69) 9 8475-3479</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection