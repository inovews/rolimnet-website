@extends('layouts.black.slicklab', ['title' => 'Adicionar nova faq'])

@section('content')

<!-- page head start-->
<div class="page-head">
	<h1 class="text-center">Adicionar nova faq</h1>
	<p class="lead text-center">Crie uma nova faq e tire as duvidas de seus clientes.</p>
</div>
<!-- page head end-->

<!--body wrapper start-->
<div class="wrapper">
	<div class="col-md-10 col-centered">
		<div class="row">
			@include('shared.errors')
			{{ Form::open(array('route'=>'admin.faqs.store','method'=>'POST'))}}
			{{ Form::hidden('user_id', Auth::user()->id, array('id' => 'user_id')) }}
			<section class="panel">
				<div class="panel-body">
					<div class="col-xs-12 col-sm-4">
						<div class="form-group">
							<p>Sua foto ou logo:</p>
							<input type="file" class="dropify" name="file" id="file"  data-default-file="" disabled/>
						</div>
					</div>
					<div class="col-xs-12 col-sm-8">
						<div class="form-group">
							<input class="form-control" placeholder="Nome" type="text" value="" name="title" id="title" />
						</div>
						<div class="row">
							<div class="form-group col-xs-12 col-sm-6">
								<small>Status</small>
								{!! Form::select('status', ['' => '-', 'active' => 'Ativo', 'inactive' => 'Inativo'], null, ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-12 col-sm-6">
								<small>Categoria</small>
								{!! Form::select('category_id', ['' => '-', '1' => 'Financeiro', '2' => 'Suporte'], null, ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="form-group">
							<small>Em fase de teste.</small>
							<div class="input-group">
								<span class="input-group-addon">http://rolimnet.com.br/faq/</span>
								<input class="form-control" placeholder="URL amigável" type="text" value="" name="slug" id="slug" />
							</div>
						</div>
						<div class="form-group">
							<textarea class="form-control" placeholder="Conteudo" rows="3" name="content" id="content"></textarea>
						</div>
						<textarea class="wysihtml5 form-control" rows="9" name="html_content" id="html_content"></textarea>
						<hr class="hr-lg">
						<div class="form-group">
							<textarea class="form-control" placeholder="Descrição da faq" rows="3" name="description" id="description"></textarea>
						</div>
						
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


