@extends('layouts.front.pages', ['title' => 'Fibra'])

@section('content')

<div class="banner-index" data-parallax="scroll" data-image-src="{{ url('assets/img/1920x1080/04.jpg') }}">
	<div class="container content-sm">
		<h1>Fibra</h1>
		<p class="margin-t-20">O futuro CHEGOU! O mundo na Velocidade da Luz!</p>
	</div>
</div>

<div class="section-seperator">
	<div class="container content">
		<div class="row">
			<div class="col-sm-8">
				<h2>Registre aqui sem compromisso o interesse pela fibra.</h2>

				<p>Como não poderíamos ficar de fora a nossa empresa se empenhou em um novo empreendimento trazendo pra Rolim de Moura o advento de maior tecnologia existente nos grandes centros, a fibra ótica. Prepare-se para acessar a internet sem interferências, interrupções e, principalmente, em alta velocidade. Preencha sem compromisso o formulário abaixo e ajude sua Rua ou Avenida ser contemplada com essa Tecnologia.</p>

				{{Form::open(array('route'=>'fibra.enviar','method'=>'POST'))}}
				<div class="controls">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" name="name" id="name" placeholder="Seu nome" class="form-control input-lg" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" name="address" id="address" placeholder="Endereço" type="text" required />
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<input class="form-control" name="number" id="number" placeholder="Número" type="text" required />
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input class="form-control" name="neighborhood" id="neighborhood" placeholder="Bairro" type="text" required />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name="phone" id="phone" placeholder="Telefone" class="form-control input-lg" required>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" name="email" id="email" placeholder="Seu email" class="form-control input-lg" required>
							</div>
						</div>
						<div class="col-md-12">
							<input type="submit" class="btn btn-block btn-success raised" value="Registrar">
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="col-sm-4">
			<div class="row text-center">
				<div class="thumbnail">
					<img class="img-responsive" src="http://placehold.it/480x368" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
</div>

@endsection