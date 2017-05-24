@extends('layouts.front.pages', ['title' => 'Perguntas Frequentes'])

@section('content')

<style type="text/css">
	/* ------ main-banner ------ */
	.main-banner{
		margin-bottom:20px;
	}

	/* ------ page ------ */
	.page{
		background-color:#fff;
		padding:10px 7px;
		margin-bottom:3px;
	}

	.page .details ul{
		list-style: none;
		padding-left: 0px;
		margin-bottom:18px;
	}
	.page .details ul li{
		float:left;
		padding-right:15px;
		font-size: 13px;
		font-weight: 600;
	}
	.page .details ul li:last-child {
		float: inherit;
	}
	.page h4{
		font-size:13px;
		font-weight:600;
	}

</style>

<div class="banner-index" data-parallax="scroll" data-image-src="{{ url('assets/img/1920x1080/04.jpg') }}">
	<div class="container content-sm">
		<h1>Perguntas Frequentes (FAQ)</h1>
		<p class="margin-t-20">Nesta página estão respostas a algumas dúvidas que possam existir.</p>
	</div>
</div>

<div class="section-seperator">
	<div class="container content">
		<div class="row">
			<div class="col-md-12">
				<div class="thumbnail">
					<img class="img-responsive" src="http://placehold.it/984x170" alt="">
				</div>
			</div>
			<div class="col-md-8">
			@if($faqs->all())
				@foreach($faqs as $faq)
				<div class="page">
					<h3>{{$faq->title}}</h3>
					<div class="contentt">
						{{substr(strip_tags($faq->html_content),0,50)}}{{strlen($faq->html_content) > 50 ? "..." : ""}}
					</div>
					<h4><a href="{{route('faq.slug',$faq->id)}}">Veja mais...</a></h4>
				</div>
				@endforeach
            <div class="text-center">
                <div class="pagination">
                    {!! $faqs->links() !!}
                </div>
            </div>
            @else
            <div class="text-center"><h2>No blogs to display</h2></div>
            @endif
			</div>
			<div class="col-sm-4">
				<div class="row text-center">
					<img src="{{ url('assets/img/banner-rolimnet-fibra.jpg') }}" width="368" height="100%">
				</div>
			</div>
		</div>
	</div>
</div>

@endsection