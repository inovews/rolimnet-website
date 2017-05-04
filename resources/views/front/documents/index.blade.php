@extends('layouts.front.pages', ['title' => 'Documentos Públicos'])

@section('content')

<div class="banner-index" data-parallax="scroll" data-image-src="{{ url('assets/img/1920x1080/04.jpg') }}">
	<div class="container content-sm">
		<h1>Documentos Públicos</h1>
		<p class="margin-t-20">Texto provisório.</p>
	</div>
</div>

<div class="section-seperator">
	<div class="container content">
		<div class="row">
			<div class="col-sm-12">
				<div class="col-sm-3">
					<div class="well"><strong>Menu</strong> </div>
					<div class="panel panel-default">
						<ul class="nav nav-pills nav-stacked">
							<li><a href="#"> <i class="fa fa-file-o fa-fw"></i> Contratos</a></li>
							<li><a href="#"><i class="fa fa-file-o fa-fw"></i> Termos</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title text-center">CONTRATO SCM CARTORIO</h3>
						</div>
						<div class="panel-body">
							<h2>CONTRATO</h2>
							<p>Texto falando do contrato.</p>
							<h4><a href="arquivos/doc-publicos/contrato_scm_cartorio.pdf" class="label label-primary">Download</a></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection