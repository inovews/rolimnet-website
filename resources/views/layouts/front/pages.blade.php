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

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>

    </script>

    @yield('styles')
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
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ route('welcome.index') }}">Inicio</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ route('empresa.index') }}">Empresa</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ route('produtos.index') }}">Produtos</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ url('/#internet') }}">Internet</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ url('/#suporte') }}">Suporte</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ route('contato.index') }}">Contato</a></li>
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
    <script src="{{ url('//code.jquery.com/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/js/jquery.parallax.min.js') }}" type="text/javascript"></script>

    <script src="{{ url('assets/js/index.js') }}" type="text/javascript"></script>

    <script type='text/javascript'>//<![CDATA[
    $('#plan_cities').on('change',function () {
        var url = '/planos/cidade/';
        document.location.href = url + this.value;
    });


    $(document).ready(function(){
        $(".filter-button").click(function(){
            var value = $(this).attr('data-filter');
            if(value == "all")
            {
            $('.filter').show('1000');
        }
        else
        {
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');

        }
    });

        if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
        }
        $(this).addClass("active");

    });
    </script>

    @yield('scripts')

</body>
</html>
