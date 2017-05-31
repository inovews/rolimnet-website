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
      <header class="panel-heading ">
        Financeiro
      </header>
      <div class="panel-body">
        <div class="btn-group">
          <button class="btn btn-default" type="button">Selecione a opção</button>
          <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button"><span class="caret"></span></button>
          <ul role="menu" class="dropdown-menu">
            <li><a href="#">Alterar vencimento</a></li>
            <li><a href="#">2ª Via de Boleto</a></li>
            <li class="divider"></li>
            <li><a href="#">Quitar Débitos</a></li>
          </ul>
        </div>
      </div>
    </section>
  </div>
  <div class="col-md-6">
    <section class="panel">
      <header class="panel-heading ">
        Outros Serviços
      </header>
      <div class="panel-body">
        <div class="btn-group">
          <button class="btn btn-default" type="button">Selecione a opção</button>
          <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button"><span class="caret"></span></button>
          <ul role="menu" class="dropdown-menu">
            <li><a href="#">Alterar endereço</a></li>
            <li><a href="#">Alterar plano</a></li>
            <li><a href="#">2ª Via NF-e</a></li>
            <li class="divider"></li>
            <li><a href="#">Cancelar Assinatura</a></li>
          </ul>
        </div><!-- /btn-group -->
      </div>
    </section>
  </div>
  <div class="col-sm-12">
    <div class="row state-overview state-alt">
    <div class="col-lg-3 col-sm-6">
                    <section class="panel b-border">
                        <div class="symbol ">
                            <span class="bg-info"><i class="fa fa-eye"></i></span>
                        </div>
                        <div class="value ">
                            <h1 class="">
                                0
                            </h1>
                            <p>Total Visitas</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <section class="panel g-border">
                        <div class="symbol">
                            <span class="bg-success"><i class="fa fa-tag"></i></span>
                        </div>
                        <div class="value ">
                            <h1 class="">
                                0
                            </h1>
                            <p>Contratos Ativos</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <section class="panel p-border">
                        <div class="symbol ">
                            <span class="bg-primary"><i class="fa fa-money"></i></span>
                        </div>
                        <div class="value ">
                            <h1>
                               0
                            </h1>
                            <p>Débitos</p>
                        </div>
                    </section>
                </div>
                
    </div>
  </div>
  <div class="col-sm-6">
    <section class="panel">
      <header class="panel-heading">
        <i class="fa fa-line-chart" aria-hidden="true"></i> Consumo Tempo Real
      </header>
      <div class="panel-body">
        <select class="form-control" id="interface" name="interface">
          <option value='pppoe'>central-cliente@rolimnet.com.br</option>
        </select>
        <div id="multi-sates">
          <div id="multi-states-container" class="f-c-space">
          </div>
        </div>
      </div>
    </section>
  </div>
  
</div>

</div>

<!--body wrapper end-->
@endsection