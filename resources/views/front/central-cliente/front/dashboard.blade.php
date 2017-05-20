@extends('layouts.front.central-cliente.layouts.slicklab', ['title' => 'Dashboard'])

@section('content')
<div class="page-head">
  <div class="text-center">
    <h1 style="font-weight:500">
      Bem-vindo a central do cliente Rolim Net
    </h1>
    <p class="lead">Tudo bem com você? Espero que sim <i class="fa fa-smile-o fa-3"></i>.</p>
  </div>
</div>
<!-- page head end--> 
<!--body wrapper start-->
<div class="wrapper">
  <div class="row state-overview">
    <div class="col-lg-4 col-sm-6">
      <section class="panel">
        <div class="panel-body">
          <!--monthly page view start-->
          <ul class="monthly-page-view">
            <li class="pull-left page-view-label">
              <span class="page-view-value timer" data-from="0" data-to="93205"
              data-speed="4000">
              <!--93,205--> 0
            </span>
            <span>Ultimas Visitas</span>
          </li>
          <li class="pull-right">
            <div id="page-view-graph" class="chart"></div>
          </li>
        </ul>
        <!--monthly page view end-->
      </div>
    </section>
  </div>
  <div class="col-lg-4 col-sm-6">
    <section class="panel green">
      <div class="symbol ">
        <i class="fa fa-tags"></i>
      </div>
      <div class="value white">
        <h1 class="timer" data-from="0" data-to="432"
        data-speed="1000">
        <!--432-->{{ $count_open_ticket }}
      </h1>
      <p>Tickets aberto.</p>
    </div>
  </section>
</div>
<div class="col-lg-4 col-sm-6">
  <section class="panel ">
    <div class="symbol purple-color">
      <i class="fa fa-tags"></i>
    </div>
    <div class="value gray">
      <h1 class="purple-color timer" data-from="0" data-to="123"
      data-speed="1000">
      <!--123-->{{ $count_ticket }}
    </h1>
    <p>Meus Tickets</p>
  </div>
</section>
</div>
</div>
<div class="row">
  <div class="col-md-6">
    <section class="panel">
      <header class="panel-heading head-border">
        Test 1
        <span class="tools pull-right">
        </span>
      </header>
    </section>
  </div>
  <div class="col-md-6">
    <section class="panel">
      <header class="panel-heading head-border">
        Test 2
        <span class="tools pull-right">
        </span>
      </header>
      <div class="noti-information notification-menu">
      </div>
    </section>
  </div>
</div>
</div>
<!--body wrapper end-->
@endsection