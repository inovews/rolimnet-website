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
    <div class="col-md-12">
      <div class="jumbotron">
        <h1>Welcome to My Blog!</h1>
        <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
      </div>
    </div>
  </div>
  <!-- end of header .row -->

  <div class="row">
    <div class="col-md-8">
      <div class="post">
        <h3>Post Title</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis amet tenetur eum, consequuntur assumenda officiis quidem omnis placeat. Sequi ex fugiat reiciendis at eligendi inventore ad, odio magnam velit doloribus...</p>
        <a href="#" class="btn btn-primary">Read More</a>
      </div>

      <hr>

      <div class="post">
        <h3>Post Title</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis amet tenetur eum, consequuntur assumenda officiis quidem omnis placeat. Sequi ex fugiat reiciendis at eligendi inventore ad, odio magnam velit doloribus...</p>
        <a href="#" class="btn btn-primary">Read More</a>
      </div>

      <hr>

      <div class="post">
        <h3>Post Title</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis amet tenetur eum, consequuntur assumenda officiis quidem omnis placeat. Sequi ex fugiat reiciendis at eligendi inventore ad, odio magnam velit doloribus...</p>
        <a href="#" class="btn btn-primary">Read More</a>
      </div>

      <hr>

      <div class="post">
        <h3>Post Title</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis amet tenetur eum, consequuntur assumenda officiis quidem omnis placeat. Sequi ex fugiat reiciendis at eligendi inventore ad, odio magnam velit doloribus...</p>
        <a href="#" class="btn btn-primary">Read More</a>
      </div>

      <hr>
    </div>

    <div class="col-md-3 col-md-offset-1">
      <h2>Sidebar</h2>
    </div>
  </div>
	</div>
</div>

@endsection