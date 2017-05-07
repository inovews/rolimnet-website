@extends('layouts.black.slicklab', ['title' => 'Adicionar novo banner'])

@section('content')

<!-- page head start-->
<div class="page-head">
	<h1 class="text-center">Adicionar novo banner</h1>
	<p class="lead text-center">Crie um novo banner ou promoção e escolha sua melhor localização para exibi-lo.</p>
</div>
<!-- page head end-->

<!--body wrapper start-->
<div class="wrapper">
	<div class="col-md-10 col-centered">
		<div class="row">
			@include('shared.errors')
			{{Form::open(array('route'=>'admin.files.store','method'=>'POST'))}}
			<section class="panel">
				<div class="panel-body">
					<div class="col-xs-12 col-sm-4">
						<div class="form-group">
							<p>Sua foto ou logo:</p>
							<input type="file" class="dropify" name="file" id="file"  data-default-file="" />
						</div>
					</div>
					<div class="col-xs-12 col-sm-8">
						<div class="form-group">
							<input class="form-control" placeholder="Nome" type="text" value="" name="name" id="name" />
						</div>
						<div class="row">
							<div class="form-group col-xs-12 col-sm-6">
								<small>Tipo</small>
								{!! Form::select('type', ['' => '-', 'active' => 'Ativo', 'inactive' => 'Inativo'], null, ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="form-group">
							<small>Em fase de teste.</small>
							<div class="input-group">
								<span class="input-group-addon">chave</span>
								<input class="form-control" placeholder="URL amigável" type="text" value="" name="key" id="key" />
							</div>
						</div>
						<hr class="hr-lg">
					</div>
				</div>
			</section>

			<section class="panel">
				<div class="panel-body">
					<button type="submit" class="btn btn-primary btn-md">
						<i class="fa fa-disk-o"></i>
						Salvar
					</button>
				</div>
			</section>
		</form>
	</div>
</div>
</div>
@endsection
