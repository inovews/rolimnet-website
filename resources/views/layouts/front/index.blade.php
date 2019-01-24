<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta content="{{ config('rolimnet.description') }}" name="description"/>
    <meta content="{{ config('rolimnet.author') }}" name="author"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}" type="text/css" >
    <link rel="stylesheet" href="{{ url('assets/buttons/css/buttons.css') }}">
    <link rel="stylesheet" href="{{ url('assets/font-awesome/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('assets/perfecticons/perfecticons.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ url('assets/css/index.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}" type="text/css">

    <title>{{ isset($title) ? $title . ' - Rolim Net | Rolim Net Tecnologia LTDA - ME' : null }}</title>

    <link rel="shortcut icon" href="{{ url('assets/images/favicon.ico') }}"/>

    <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>

    </script>
</head>
<body id="body" data-spy="scroll" data-target=".header">

    <header class="header navbar-fixed-top">
        
        <nav class="navbar" role="navigation">
            <div class="container">
                <div class="menu-container js_nav-item">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="toggle-icon"></span>
                    </button>

                    <div class="logo">
                        <a class="logo-wrap" href="{{ route('welcome.index') }}">
                            <img class="logo-img logo-img-main" src="{{ url('assets/img/logo.png') }}" alt="Rolim Net Logo">
                            <img class="logo-img logo-img-active" src="{{ url('assets/img/logo-dark.png') }}" alt="Rolim Net Logo">
                        </a>
                    </div>
                </div>

                <div class="collapse navbar-collapse nav-collapse">
                    <div class="menu-container">
                        <ul class="nav navbar-nav navbar-nav-right">
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ url('/#body') }}">Inicio</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ url('/#empresa') }}">Empresa</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ route('produtos.index') }}">Produtos</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ url('/#internet') }}">Internet</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ url('/#suporte') }}">Suporte</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ url('/#contato') }}">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div>
        @yield('content')

        @include('partials.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ url('assets/js/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ url('assets/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/js/jquery.parallax.min.js') }}" type="text/javascript"></script>

    <script src="{{ url('assets/js/index.js') }}" type="text/javascript"></script>

    <script type='text/javascript'>//<![CDATA[
        $(document).on('change', '.atendimento-cidade-div', function() {
            var target = $(this).data('target');
            var show = $("option:selected", this).data('show');
            $(target).children().addClass('hide');
          $(show).removeClass('hide');
        });
            $(document).ready(function(){
                $('.atendimento-cidade-div').trigger('change');
        });

        $('#plan_cities').on('change',function () {
            var url = '/planos/cidade/';
            document.location.href = url + this.value;
        });

        /*$('#plan_cities').on('change',function (e) {
            //console.log(e);
            var plan_city_id = e.target.value;

            //ajax
            $.get('/planos/city/' + plan_city_id, function(data){
                //success data
                console.log(data);
                $('#planos').empty();
                $.each(data, function(index, planObj){
                   $('#planos').append(
                    '<div class="col-md-4 md-margin-b-30">'
                        +'<div class="pricing-list-v4 radius-10">'
                            +'<div class="pricing-list-v4-header">'
                                +'<h4 class="pricing-list-v4-title">'+ planObj.name +'</h4>'
                                +'<span class="pricing-list-v4-subtitle">'+ planObj.zone +'</span>'
                            +'</div>'
                            +'<div class="pricing-list-v4-content">'
                                +'<div class="margin-b-40">'
                                   +'<span class="pricing-list-v4-price-sign">R$</span>'
                                    +'<span class="pricing-list-v4-price">'+ planObj.price +',</span>'
                                    +'<span class="pricing-list-v4-subprice">00</span>'
                                    +'<span class="pricing-list-v4-price-info">mês</span>'
                                +'</div>'
                                +'<div class="center-block">'
                                    +'<button type="button" class="btn btn-primary raised">Assinar</button>'
                                +'</div>'
                            +'</div>'
                        +'</div>'
                    +'</div>'
                    );
                });
            });
        });*/
    </script>
    <script> (function () { var script = document.createElement("script"); script.src = 'https://acessobot.com/api/botSites/d4d4a89b6617b2b23d2a22a0eb87e8a5/v1?lang=pt-BR&api=https://acessobot.com'; script.setAttribute('crossorigin', '*'); document.getElementsByTagName("body")[0].appendChild(script); })(); </script>
</body>
</html>
