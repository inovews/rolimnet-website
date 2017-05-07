@extends('layouts.black.slicklab', ['title' => 'Dashboard'])

@section('content')
<div class="page-head">
  <div class="text-center">
    <h1 style="font-weight:500">
      Bem vindo !
    </h1>
    <p class="lead">Tudo bem com você? Espero que sim <i class="fa fa-smile-o fa-3"></i>.</p>
  </div>
</div>
<!-- page head end--> 
<!--body wrapper start-->
<div class="wrapper">
  <div class="row">
    <div class="col-md-4">
      <section class="panel">
        <div class="panel-body">
          <!--monthly page view start-->
          <ul class="monthly-page-view w-p-view-">
            <li class="pull-left page-view-label">
            <span class="page-view-value">0</span>
              <span>//.</span>
            </li>
            <li class="pull-right">
              <div id="m-g-light" class="chart"><canvas height="35" width="131" style="display: inline-block; width: 131px; height: 35px; vertical-align: top;"></canvas></div>
            </li>
          </ul>
          <!--monthly page view end-->
        </div>
      </section>
    </div>
    <div class="col-md-4">
      <section class="panel">
        <div class="panel-body">
          <!--monthly page view start-->
          <ul class="monthly-page-view w-p-view-">
            <li class="pull-left page-view-label">
            <span class="page-view-value">1</span>
              <span>//.</span>
            </li>
            <li class="pull-right">
              <div id="m-g-light" class="chart"><canvas height="35" width="131" style="display: inline-block; width: 131px; height: 35px; vertical-align: top;"></canvas></div>
            </li>
          </ul>
          <!--monthly page view end-->
        </div>
      </section>
    </div>
    <div class="col-md-4">
      <section class="panel">
        <div class="panel-body">
          <!--monthly page view start-->
          <ul class="monthly-page-view w-p-view-">
            <li class="pull-left page-view-label">
            <span class="page-view-value">1</span>
              <span>//.</span>
            </li>
            <li class="pull-right">
              <div id="m-g-light" class="chart"><canvas height="35" width="131" style="display: inline-block; width: 131px; height: 35px; vertical-align: top;"></canvas></div>
            </li>
          </ul>
          <!--monthly page view end-->
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

