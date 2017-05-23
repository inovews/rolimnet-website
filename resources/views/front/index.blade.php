@extends('layouts.front.index', ['title' => 'Pagina Inicial'])

@section('title', config('rolimnet.title') )

@section('content')
<div class="banner-index" data-parallax="scroll" data-image-src="{{ url('assets/img/1920x1080/04.jpg') }}">
    <div class="container content-sm">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo-rolimnet-fibra pull-right">
                    <img class="img-responsive" src="{{ url('assets/img/logo-rolimnet-fibra.png') }}">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
                    <div class="carousel-inner">
                        @foreach( $banners->slice(0, 3) as $key => $banner)
                        <div class="item slides {{ $key == 0 ? 'active' : '' }}">
                            <div class="slide-{{ ++$key }}"></div>
                            <div class="planos">
                                <h2 class="banner-index-planos">{{ $banner->name  }}</h2>
                                <h2 class="banner-index-velocidade">{{ $banner->description }}</h2>
                                <p class="banner-index-down-up">down/up</p>

                                <ul class="text">
                                    <li class="color-white" >{{ $banner->subdescription }}</li>
                                </ul>
                                <hr>
                                <h1><span>R$ </span>{{ $banner->price }}</h1>
                                <button type="button" class="btn btn-lg btn-warning raised">Assine já</button>
                                <p><a href="#">Conheça outros planos</a></p>
                            </div>
                        </div>
                        @endforeach
                        <ol class="carousel-indicators">
                            <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#bs-carousel" data-slide-to="1"></li>
                            <li data-target="#bs-carousel" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--// end row -->
    </div>
</div>

<!--<div class="container">
    <div class="alert alert-warning alert-dismissible" role="alert">
            <strong>Atenção!</strong> Devido à nova funcionalidade, algumas mensagens de erro podem aparecer.
        </div>
    </div>
</div>-->

<div id="empresa">
    <div class="container content-sm">
        <div class="row">
            <div class="col-sm-4 col-lg-offset-1">
                <div class="text-center sm-text-left">
                    <h1 class="color-blue margin-b-0">Bem-Vindo!</h1>
                    <p>A Rolim Net surgiu no ano de 2008, hoje tem presença em mais de 10 cidades e várias Linhas na Zona da Mata. A Rolim Net é ganhadora do Troféu ACIRM dos anos de 2010, 2012, 2013, 2014, 2015 e 2016.</p>
                    <p class="text-right"><a href="{{ route('empresa.index') }}" class="color-blue">...mais sobre a empresa</a></p>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="empresa-img text-right">
                    <img class="full-width img-responsive familia-img" src="{{ url('assets/img/bg-familia-rolimnet-2016.jpg') }}">
                </div>
            </div>
        </div>
        <!--// end row -->
    </div>
</div>

<div id="centraldocliente">
    <div class="bg-color-blue" data-auto-height="true">
        <div class="container content">
            <div class="row">
                <div class="col-sm-8">
                    <a href="{{ route('faq.index') }}" class="btn btn-default sharp">Acessar o FAQ</a>
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="color-white">Perguntas Frequentes</h4>
                            <ul class="centraldocliente">
                                <li><a class="color-white" href="#">Solicitar a 2º via da Fatura.</a></li>
                                <li><a class="color-white"href="#">Não recebi a fatura/carne para pagamento. O que devo fazer?</a></li>
                                <li><a class="color-white" href="#">Como cancelar minha assinatura.</a></li>
                            </ul>
                        </div>
                        <!--// end row -->
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text-right sm-text-left">
                        <h2 class="content-heading color-white">Central do Cliente <span class="border text-right"></span></h2>

                        <div class="row">
                            <div class="col-sm-12">
                                <a href="{{ route('centralcliente.index')}}" class="btn btn-lg btn-default raised">Acessar Central</a>
                            </div>
                            <!--// end row -->
                        </div>
                    </div>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
</div>

<div id="internet">
    <div class="container content-sm">
        <div class="row">
            <div class="col-sm-4">
                <h2 class="content-heading">Internet <span class="border-black"></span></h2>
            </div>
            <div class="col-sm-12">
                <p>A Rolim Net tem os melhores planos para você aproveitar e se divertir navegando na internet, a qualquer momento, com a melhor conexão possível.</p>
                <div class="row">
                    <div class="internet">
                        <div class="col-sm-4">
                            <h2>Escolha o plano ideal para o seu você.</h2>
                            <p>Acesso à Internet 24 horas por dia.</p>
                            <p>Navegue e baixe todos os arquivos dos quais você necessitar: sem franquia e sem tarifas adicionais por tráfego.</p>
                            <ul class="nota">
                                <li>Consulte a disponibilidade dos planos na sua região</li>
                                <li>Valores sujeitos a alterações sem aviso prévio</li>
                            </ul>
                        </div>

                        <div class="col-sm-8">
                            <div class="cidades-uf">
                                <div class="row">
                                    <div class="form-group ">
                                        <label class="col-sm-3">Você está em:</label>
                                        <div class="col-lg-9">
                                            {!! Form::select('plan_cities', [''=>'Selecione a Cidade']+App\Front\PlanCity::pluck('name','slug')->all(), null, ['id' => 'plan_cities','class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row" >
                                    <div  name="planos" id="planos">
                                        @foreach( $plans as $plan)
                                        <div class="col-md-4 md-margin-b-30">
                                            <!-- Pricing List v4 -->
                                            <div class="pricing-list-v4 radius-10">
                                                <div class="pricing-list-v4-header">
                                                    <h4 class="pricing-list-v4-title">{{ $plan->name }}</h4>
                                                    <span class="pricing-list-v4-subtitle">{{ $plan->zone }}</span>
                                                </div>
                                                <div class="pricing-list-v4-content">
                                                    <div class="margin-b-40">
                                                        <span class="pricing-list-v4-price-sign">R$</span>
                                                        <span class="pricing-list-v4-price">{{ $plan->price }},</span>
                                                        <span class="pricing-list-v4-subprice">00</span>
                                                        <span class="pricing-list-v4-price-info">mês</span>
                                                    </div>
                                                    <div class="center-block">
                                                        <button type="button" class="btn btn-primary raised">Assinar</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Pricing List v4 -->
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!--// end row -->
                            </div>
                            <!-- End Pricing List v4 -->
                        </div>
                        <!--// end row -->
                    </div>
                </div>
            </div>
        </div>
        <!--// end row -->
    </div>
</div>

<div class="test" data-parallax="scroll" data-image-src="{{ url('assets/img/beard-2286440_1920.jpg') }}">
    <!-- http://www.flaticon.com/packs/web-navigation-line-craft -->
    <div class="container content-sm">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-4">
                    <div class="text-center">
                        <img src="{{ url('assets/img/favorites-button.png') }}">
                        <h3 class="color-white">6 Troféus ACIRM</h3>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text-center">
                        <img src="{{ url('assets/img/pin.png') }}">
                        <h3 class="color-white">7 Cidades</h3>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text-center">
                        <img src="{{ url('assets/img/check-square.png') }}">
                        <h3 class="color-white">Qualidade aprovada.</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--// end row -->
    </div>
</div>

<div id="suporte">
    <div class="bg-color-sky-light" data-auto-height="true">
        <div class="container content-sm">
            <div class="row">
                <div class="col-sm-4">
                    <h2 class="content-heading">Suporte <span class="border-black"></span></h2>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <p>Deixe seu numero de telefone/<i class="fa fa-whatsapp" aria-hidden="true"></i> que entraremos em contato o mais rapido possível.</p>
                    <form class="form-group get-in-grid-right text-center">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="input-with-icon">
                                    <input id="" name="nome" type="text" placeholder="Seu Nome" />
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="input-with-icon">
                                    <input id="" name="telefone" type="text" placeholder="Seu Telefone" />
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <input type="submit" class="btn btn-success raised" value="Enviar" >
                            </div>
                        </div>
                    </form>
                </div>
                <div class="suporte">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="row">
                            <div class="panel-group" id="accordion1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">Quero contratar internet Rolim Net Rádio</a>
                                        </h5>
                                    </div>
                                    <div id="accordion1_1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Consulte em nosso site a área de cobertura de internet via rádio. Caso seu município/localidade tenha cobertura de sinal, você pode contatar conosco diretamente pelo site, ou se preferir, ligue para a Rolim Net.</p>
                                            <p>A contratação dos planos é feita mediante teste de sinal.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">Quero contratar internet Rolim Net Fibra</a>
                                        </h5>
                                    </div>
                                    <div id="accordion1_2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Consulte em nosso site a área de cobertura de internet via fibra. Caso esteja dentro da área com internet, você pode contatar conosco diretamente pelo site, ou se preferir, ligue para a Rolim Net. Os consultores de vendas da Rolim Net entrarão em contato para lhe auxiliar na escolha do melhor plano.</p>
                                            <p>Antes da instalação, serão feitos testes técnicos para confirmar a disponibilidade do serviço.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">Meu município não está na área de cobertura Rolim Net. O que posso fazer?</a>
                                        </h5>
                                    </div>
                                    <div id="accordion1_3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Você pode informar seu interesse em ter internet Rolim Net diretamente pelo site. Nossa área de cobertura, tanto de internet via fibra como internet via rádio, será ampliada conforme demanda, garantindo a viabilidade do sistema sem redução de qualidade.</p>
                                            <p>Existe também a possibilidade de instalação de torres para internet via rádio sob demanda.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">Não recebi a fatura/carne para pagamento. O que devo fazer?</a>
                                        </h5>
                                    </div>
                                    <div id="accordion1_4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Você pode ligar para o Rolim Net, pelo telefone 69 3442-2779, e solicitar o carne para pagamento ou uma segunda via da fatura, que poderá ser enviada para seu e-mail.</p>
                                            <p>Se preferir, acesse a nossa central de atendimento no site.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">Testei minha velocidade e ela está abaixo do contratado, como medidir minha velocidade corretamente?</a>
                                        </h5>
                                    </div>
                                    <div id="accordion1_5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Grande parte dos medidores de velocidade disponíveis na internet faz o teste da conexão do usuário através da média da velocidade de download de um arquivo. Porém, esse resultado pode ser afetado por vários fatores como a velocidade disponível no servidor do site e a quantidade de acessos simultâneos no momento do teste. Além disso, muitos destes medidores limitam a velocidade máxima de download ou simplesmente possuem conexão com a internet em velocidade inferior a que você tem com a Rolim Net.</p>
                                            <p>Por isso, disponibilizamos em nosso site um medidor de velocidade.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">Qual o prazo para o atendimento de uma chamado técnico?</a>
                                        </h5>
                                    </div>
                                    <div id="accordion1_6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Quando o assinante entra em contato com a Rolim Net relatando problemas em sua conexão é transferido para um atendente técnico que vai orientá-lo a fim de detectar a causa. Não sendo possível a solução por telefone, a Rolim Net tem até 72h, contando apenas dias úteis, para realizar o atendimento técnico presencial.</p>
                                            <p>Seu problema não foi solucionado? Entre em contato com a ouvidoria aqui.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="row">
                    <div class="atendimento">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <h2 class="">Atendimento</h2>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8">
                            <select class="atendimento-cidade-div" data-target=".atendimento-cidade-dados">
                                <option selected data-show=".defalt">Selecione a Cidade </option>
                                <option value="orange" data-show=".cao">Cacoal</option>
                                <option value="orange" data-show=".cas">Castanheiras</option>
                                <option value="orange" data-show=".mdc">Presidente Medíci</option>
                                <option value="lemon" data-show=".nho">Novo Horizonte d' Oeste</option>
                                <option value="apple" data-show=".rlm">Rolim de Moura</option>
                                <option value="pear" data-show=".stl">Santa Luzia d' Oeste</option>
                                <option value="pear" data-show=".ser">Seringueiras</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="margin-t-0 sm-margin-t-0 atendimento-cidade">
                    <div class="atendimento-cidade-dados">
                        <div class="defalt hide">
                            <h3 class="margin-b-0">Selecione a Cidade</h3>
                        </div>
                        <div class="cao hide">
                            <h3 class="margin-b-0">Rolim Net</h3>
                            <p class="margin-b-0">Telefones: 69 3442-2779</p>
                            <p class="margin-b-0">Endereço: Av. Manaus, 5095, Centro</p>
                            <p>* As cidades de Cacoal e Presidente Médici contem apenas atendimento na zona rural.</p>
                        </div>
                        <div class="cas hide">
                            <h3 class="margin-b-0">InfoCast</h3>
                            <p class="margin-b-0">Telefones: 69 3442-2779</p>
                            <p>adamjhosua@rolimnet.com.br</p>
                        </div>
                        <div class="mdc hide">
                            <h3 class="margin-b-0">Rolim Net</h3>
                            <p class="margin-b-0">Telefones: 69 3442-2779</p>
                            <p class="margin-b-0">Endereço: Av. Manaus, 5095, Centro</p>
                            <p>* As cidades de Cacoal e Presidente Médici contem apenas atendimento na zona rural.</p>
                        </div>
                        <div class="nho hide">
                            <h3 class="margin-b-0">Rolim Net</h3>
                            <p class="margin-b-0">Telefones: 69 3442-2779</p>
                            <p class="margin-b-0">Endereço: Av. Manaus, 5095, Centro</p>
                            <hr>
                            <h3 class="margin-b-0">João</h3>
                            <p class="margin-b-0">Telefones: 69 3442-2779</p>
                            <p>joaobatista@rolimnet.com.br</p>
                        </div>
                        <div class="rlm hide">
                            <h3 class="margin-b-0">Rolim Net</h3>
                            <p class="margin-b-0">Telefones: 69 3442-2779</p>
                            <p class="margin-b-0">Endereço: Av. Manaus, 5095, Centro</p>
                        </div>
                        <div class="stl hide">
                            <h3 class="margin-b-0">Marcos André</h3>
                            <p class="margin-b-0">Telefones: 69 3442-2779</p>
                            <p>marcosandre@rolimnet.com.br</p>
                        </div>
                        <div class="ser hide">
                            <h3 class="margin-b-0">Laercio Degasperi</h3>
                            <p class="margin-b-0">Telefones: 69 3442-2779</p>
                            <p>laercio@rolimnet.com.br</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
</div>


<div id="fibra-up">
    <div class="bg-color-orange">
        <div class="container content-sm">
            <div class="col-sm-9 sm-margin-b-90">
                <h2 class="color-white">Está precisando de velocidade? Rolim Net Fibra!...</h2>
                <p class="color-white">Acesso a Internet de alta velocidade com toda qualidade de rede em 100% via fibra ótica. Planos de acordo com a velocidade que você deseja.</p>
            </div>
            <div class="col-sm-3 sm-margin-b-30">
                <p>
                    <a href="{{route('fibra.index')}}" class="btn btn-default btn-lg sharp pull-right">Assine já!</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div id="contato" class="text-center">
    <div class="bg-color-sky-light">
        <div class="container content-sm">
            <div class="row">
                <div class="col-lg-4 col-md-offset-4">
                    <h2 class="content-heading">Fale Conosco  <span class="border-black"></span></h2>
                    <p>Entre em contato com a nossa equipe</p>
                </div>
                <!--// end row -->
            </div>
            <div class="col-sm-8 col-md-offset-2">
                <div class="form-wrapper marginbot-50">
                    @if (Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                    @endif
                    {!! Form::open(array('route' => 'contato.enviar', 'class' => 'form', 'files' => true)) !!}
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <div class="form-group">
                        <input type="text" name="name" value="" placeholder="Seu nome" class="form-control input-lg" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Seu email" class="form-control input-lg" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" placeholder="Telefone" class="form-control input-lg" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" placeholder="Assunto" class="form-control input-lg" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="5" class="form-control input-lg" placeholder="Mensagem" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-block btn-success raised">Enviar Mensagem</button>
                    </div>
                </form>
            </div>
            <div class="text-center">
                <p class="margin-t-10"><i class="fa fa-phone"></i> Central de Atendimento (69) 3442-2779</p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection