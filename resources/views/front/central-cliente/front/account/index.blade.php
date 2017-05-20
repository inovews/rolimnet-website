@extends('layouts.front.central-cliente.layouts.slicklab', ['title' => 'Meu perfil'])

@section('content')

<!-- page head start-->
<div class="page-head">
	<div class="text-center">
		<h1 style="margin:0">
			Meu perfil
		</h1>
	</div>
</div>
<!-- page head end-->
<!--body wrapper start-->
<div class="wrapper">
	<div class="row">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-md-3">

					<section class="panel">
                    <div class="user-head">
                        <img src="http://thevectorlab.net/slicklab/img/w-p-img.jpg" alt=""/>
                    </div>
                    <div class="panel-body">
                        <div class="user-desk">
                            <div class="avatar">
                                <img src="http://www.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028?d=mm&amp;s=40" alt=""/>
                            </div>
                            <div class="clearfix"></div>
                            <h4 class="text-uppercase">Anjelina Joli</h4>
                            <span>Web & User Interface Designer</span>
                            <ul class="user-p-list">
                                <li class="active"><a href="#">Profile Details</a></li>
                                <li><a href="#">Project & Status</a></li>
                                <li><a href="#">Recent Activities</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
				</div>

			</div>
		</div>
	</div>

	@endsection
