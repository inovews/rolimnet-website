@extends('layouts.front.pages', ['title' => 'Perguntas Frequentes'])

@section('content')

<div class="banner-index" data-parallax="scroll" data-image-src="{{ url('assets/img/1920x1080/04.jpg') }}">
	<div class="container content-sm">
		<h1>Perguntas Frequentes (FAQ)</h1>
		<p class="margin-t-20">Nesta página estão respostas a algumas dúvidas que possam existir.</p>
	</div>
</div>

<div class="section-seperator">
	<div class="container content">
		<div class="row">
			
			<h1>{{ $faq->title }}</h1>
			<div class="col-lg-9 col-md-9 col-sm-12">
				<p class="lead">{!! $faq->html_content !!}</p>
			</div>
		</div>
	</div>
</div>

@endsection