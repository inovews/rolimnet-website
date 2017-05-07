@extends('layouts.black.slicklab', ['title' => 'Banners'])

@section('content')

@include('shared.errors')

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
		{{ Form::open(['route' => ['admin.banners.update', $banner->id], 'method' => 'POST' ]) }}
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
							<input class="form-control" placeholder="Nome" type="text" value="{{  ($banner->name) ?? old('name') }}" name="name" id="name" />
						</div>
						<div class="row">
							<div class="form-group col-xs-12 col-sm-6">
								<small>Status</small>
								{!! Form::select('status', ['' => '-', 'active' => 'Ativo', 'inactive' => 'Inativo'], $banner->status, ['class' => 'form-control']) !!}
							</div>
							<div class="form-group col-xs-12 col-sm-6">
								<small>Destaque</small>
								{!! Form::select('star', ['' => '-', '1' => 'Sim', '0' => 'Não'], $banner->star, ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-12 col-sm-6">
								<small>Localização</small>
								{!! Form::select('place', ['' => '-', 'home' => 'Página Inical', 'about' => 'Empresa'], $banner->place, ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="form-group">
							<small>Em fase de teste.</small>
							<div class="input-group">
								<span class="input-group-addon">http://rolimnet.com.br/internet/</span>
								<input class="form-control" placeholder="URL amigável" type="text" value="{{ $banner->slug }}" name="slug" id="slug" />
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-12 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon">R$</span>
									<input class="form-control" placeholder="Valor" type="text" value="{{ $banner->price }}" name="price" id="price" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<textarea class="form-control" placeholder="Descrição do banner" rows="3" name="description" id="description">{{ $banner->description }}</textarea>
						</div>
						<div class="form-group">
							<textarea class="form-control" placeholder="Sub-descrição do banner" rows="3" name="subdescription" id="subdescription">{{ $banner->subdescription }}</textarea>
						</div>
						<hr class="hr-lg">
						<h4>Informações adicionais</h4>
						<div class="row">
							<div class="form-group col-xs-12 col-sm-6">
								<small>Data de publicação</small>
								{!! Form::date('published_at', $banner->published_at, ['class'  => 'form-control'], 'd/m/Y') !!}
							</div>
							<div class="form-group col-xs-12 col-sm-6">
								<small>Exibir até</small>
								{!! Form::date('until_then', $banner->until_then, ['class'  => 'form-control'], 'd/m/Y') !!}
							</div>
							<div class="form-group col-xs-12 col-sm-12">
								<small>Abrir o link</small>
								{!! Form::select('target', ['' => '-', '_self' => 'na mesma página', '_blank' => 'em uma nova janela'], $banner->target, ['class' => 'form-control', 'data-rule-required' => true]) !!}    
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
						Atualizar
					</button>
				</div>
			</section>
		</form>
	</div>
</div>
</div>
@endsection