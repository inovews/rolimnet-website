@extends('layouts.front.central-cliente.layouts.slicklab', ['title' => 'Meus tickets'])

@section('content')
<!-- page head start-->
<div class="page-head">
	<h1 class="text-center">Criar ticket</h1>
	<p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
<!-- page head end-->

<!--body wrapper start-->
<div class="wrapper">
	<div class="col-md-10 col-centered">
		<div class="row">
			@include('shared.errors')
			{{Form::open(array('route'=>'centralcliente.tickets.create','method'=>'POST'))}}
			<section class="panel">
				<div class="panel-body">
					<div class="col-xs-12 col-sm-4">
						<div class="form-group">
							<p>Sua foto ou logo:</p>
							<input type="file" class="dropify" name="file" id="file"  data-default-file="" disabled />
						</div>
					</div>
					<div class="col-xs-12 col-sm-8">
						<div class="form-group">
							<input class="form-control" placeholder="Nome" type="text" value="" name="name" id="name" />
						</div>
						<div class="row">
							<div class="form-group col-xs-12 col-sm-6">
								<small>Categoria</small>
								<select id="category" type="category" class="form-control" name="category">
                                    <option value="">Selecione a Categoria</option>
                                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-12 col-sm-6">
								<small>Prioridade</small>
								 <select id="priority" type="priority" class="form-control" name="priority">
                                    <option value="">Selecione a Prioridade</option>
                                    @foreach ($prioritys as $priority)
                        <option value="{{ $priority->id }}">{{ $priority->name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('priority'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('priority') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<textarea class="wysihtml5 form-control" rows="9" name="html_content" id="html_content"></textarea>
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