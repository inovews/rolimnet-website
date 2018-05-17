@extends('layouts.front.pages', ['title' => 'Ouvidoria'])

@section('content')

<div class="banner-index" data-parallax="scroll" data-image-src="{{ url('assets/img/1920x1080/04.jpg') }}">
	<div class="container content-sm">
		<h1>Ouvidoria</h1>
		<p class="margin-t-20">Rolim Net Tecnologia LTDA.</p>
	</div>
</div>

<div class="section-seperator">
	<div class="container content">
		<div class="row">
			<div class="col-sm-12">
				<h3>Canal de comunicação</h3>
				<h2>Ouvidoria</h2>
				<p class="text-justify">Caso tenha algum problema não resolvido pelo serviço de atendimento normal da Rolim net, enviando mensagem à Ouvidoria, você estará relatando o seu problema diretamente à diretoria da Rolim Net.</p>
				<p class="text-justify">A Rolim Net sempre trabalha para oferecer para nossos Assinantes um serviço de qualidade e de excelência! Durante nossa história recebemos várias mensagens com elogios, sugestões e críticas, pois somente assim, com a sua participação podemos crescer e oferecer serviços e atendimento com a qualidade que você merece. Por esse motivo a OUVIDORIA é um canal de comunicação para que você possa relatar algum problema (técnico, financeiro, comercial) não resolvido pelo atendimento normal diretamente para um Gestor ou Diretor da empresa.</p>
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
						{!! Form::open(array('route' => 'ouvidoria.enviar', 'class' => 'form', 'files' => true)) !!}
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