<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Mosaddek" />
    <meta name="keyword" content="slick, flat, dashboard, bootstrap, admin, template, theme, responsive, fluid, retina" />
    <meta name="description" content="" />
    <link rel="shortcut icon" href="javascript:;" type="image/png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? $title . ' - Rolim Net | Adminstração' : null }}</title>

    <!--easy pie chart-->
    <link href="{{ url('slicklab/js/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen" />

    <!--vector maps -->
    <link rel="stylesheet" href="{{ url('slicklab/js/vector-map/jquery-jvectormap-1.1.1.css') }}">

    <!--right slidebar-->
    <link href="{{ url('slicklab/css/slidebars.css') }}" rel="stylesheet">

    <!--switchery-->
    <link href="{{ url('slicklab/js/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css" media="screen" />

    <!--jquery-ui-->
    <link href="{{ url('slicklab/js/jquery-ui/jquery-ui-1.10.1.custom.min.css') }}" rel="stylesheet" />

    <!--iCheck-->
    <link href="{{ url('slicklab/js/icheck/skins/all.css') }}" rel="stylesheet">

    <link href="{{ url('slicklab/css/owl.carousel.css') }}" rel="stylesheet">


    <!--common style-->
    <link href="{{ url('slicklab/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('slicklab/css/style-responsive.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ url('slicklab/js/html5shiv.js') }}"></script>
    <script src="{{ url('slicklab/js/respond.min.js') }}"></script>
    <![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.1/css/dropify.min.css">

    <!--bootstrap-wysihtml5-->
    <link rel="stylesheet" type="text/css" href="{{ url('slicklab/js/bootstrap-wysihtml5/bootstrap-wysihtml5.css') }}" />

    <!--dropzone-->
    <link href="{{ url('slicklab/css/dropzone.css') }}" rel="stylesheet">
</head>

<body class="sticky-header">

    <section>
        <!-- sidebar left start-->
        <div class="sidebar-left">
            <!--responsive view logo start-->
            <div class="logo dark-logo-bg visible-xs-* visible-sm-*">
                <a href="{{ url('/admin') }}">
                    <!--<img src="admin/img/logo-icon.png" alt="">-->
                    <!--<i class="fa fa-maxcdn"></i>-->
                    <span class="brand-name">{{ config('app.name', 'Laravel') }}</span>
                </a>
            </div>
            <!--responsive view logo end-->

            <div class="sidebar-left-info">
                <!-- visible small devices start-->
                <div class=" search-field">  </div>
                <!-- visible small devices end-->

                <!--sidebar nav start-->
                <ul class="nav nav-pills nav-stacked side-navigation">
                    <li>
                        <h3 class="navigation-title">Painel do Usuário</h3>
                    </li>
                    <li class="{{ active('admin.') }}"><a href="{{ url('/admin') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                    <li class="menu-list {{ active('admin.banners.*') }}">
                        <a href=""><i class="fa fa-laptop"></i>  <span>Banners</span></a>
                        <ul class="child-list">
                            <li class="{{ active('admin.banners.create') }}"><a href="{{route('admin.banners.create')}}"> Adicionar</a></li>
                            <li class="{{ active('admin.banners.index') }}"><a href="{{route('admin.banners.index')}}"> Listar</a></li>
                            <li><a href="#"> Categorias</a></li>
                        </ul>
                    </li>
                    <li class="menu-list {{ active('admin.documents.*') }}"><a href=""><i class="fa fa-cloud-upload"></i> <span>Documentos Publicos</span></a>
                        <ul class="child-list">
                            <li class="{{ active('admin.documents.create') }}"><a href="{{route('admin.documents.create')}}"> Adicionar</a></li>
                            <li class="{{ active('admin.documents.index') }}"><a href="{{route('admin.documents.index')}}"> Listar</a></li>
                            <li class="{{ active('admin.files.index') }}"><a href="{{route('admin.files.index')}}"> Arquivos</a></li>
                        </ul>
                    </li>
                    <li class="{{ active('admin.fibers.index') }}"><a href="{{route('admin.fibers.index')}}"><i class="fa fa-bolt"></i> <span>Fibra</span></a></li>
                    <li class="menu-list {{ active('admin.plans.*') }}"><a href=""><i class="fa fa-tags"></i> <span>Planos</span></a>
                        <ul class="child-list">
                            <li class="{{ active('admin.plans.create') }}"><a href="{{route('admin.plans.create')}}"> Adicionar</a></li>
                            <li class="{{ active('admin.plans.index') }}"><a href="{{route('admin.plans.index')}}"> Listar</a></li>
                            <li><a href="#"> Cidades</a></li>
                        </ul>
                    </li>
                    <li class="menu-list {{ active('admin.faqs.*') }}"><a href=""><i class="fa fa-book"></i> <span>Perguntas Frequentes</span></a>
                        <ul class="child-list">
                            <li class="{{ active('admin.faqs.create') }}"><a href="{{route('admin.faqs.create')}}"> Adicionar</a></li>
                            <li class="{{ active('admin.faqs.index') }}"><a href="{{route('admin.faqs.index')}}"> Listar</a></li>
                            <li class="{{ active('admin.banners.index') }}"><a href="#"> Categorias</a></li>
                        </ul>
                    </li>
                    <li class="{{ active('admin.supports.index') }}"><a href="{{route('admin.supports.index')}}"><i class="fa fa-phone"></i> <span>Suporte</span></a></li>

                    <li>
                        <h3 class="navigation-title">Extra</h3>
                    </li>
                    <li class="menu-list"><a href=""><i class="fa fa-file-text"></i> <span>Páginas Extras</span></a>
                        <ul class="child-list">
                            <li><a href="#"> Empresa</a></li>
                            <li><a href="#"> Produtos</a></li>
                        </ul>
                    </li>
                </ul>
                <!--sidebar nav end-->

            </div>
        </div>
        <!-- sidebar left end-->

        <!-- body content start-->
        <div class="body-content" >

            <!-- header section start-->
            <div class="header-section"> 

                <!--logo and logo icon start-->
                <div class="logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="{{ url('/admin') }}">
                        <!--<img src="admin/img/logo-icon.png" alt="">-->
                        <!--<i class="fa fa-maxcdn"></i>-->
                        <span class="brand-name">{{ config('app.name', 'Laravel') }}</span>
                    </a>
                </div>

                <div class="icon-logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="{{ url('/admin') }}">
                        <!--<img src="admin/img/logo-icon.png" alt="">-->
                        <!--<i class="fa fa-maxcdn"></i>-->
                    </a>
                </div>
                <!--logo and logo icon end-->

                <!--toggle button start-->
                <a class="toggle-btn"><i class="fa fa-outdent"></i></a>
                <!--toggle button end-->

                <div class="notification-wrap">
                <!--left notification start-->
                 <!--left notification end-->


                <!--right notification start-->
                <div class="right-notification">
                    <ul class="notification-menu">
                        <li>
                            <a href="javascript:;" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <!--<img src="img/avatar-mini.jpg" alt="">-->
                                {{ Auth::user()->name }}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu purple pull-right">
                                <!--<li><a href="javascript:;">  Profile</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-danger pull-right">40%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="label bg-info pull-right">new</span>
                                        Help
                                    </a>
                                </li>-->
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!--right notification end-->
                </div>

            </div>
            <!-- header section end-->

            @yield('content')

                        <!--body wrapper end-->


            <!--footer section start-->
            <footer>
                Todos os direitos reservados © 2008 - 2017 NOC | Rolim Net. 
            </footer>
            <!--footer section end-->

        </div>
        <!-- body content end-->
    </section>



<!-- Placed js at the end of the document so the pages load faster -->
<script src="{{ url('slicklab/js/jquery-1.10.2.min.js') }}"></script>

<!--jquery-ui-->
<script src="{{ url('slicklab/js/jquery-ui/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>

<script src="{{ url('slicklab/js/jquery-migrate.js') }}"></script>
<script src="{{ url('slicklab/js/bootstrap.min.js') }}"></script>
<script src="{{ url('slicklab/js/modernizr.min.js') }}"></script>

<!--Nice Scroll-->
<script src="{{ url('slicklab/js/jquery.nicescroll.js') }}" type="text/javascript"></script>

<!--Sparkline Chart-->
<script src="{{ url('slicklab/js/sparkline/jquery.sparkline.js') }}"></script>
<script src="{{ url('slicklab/js/sparkline/sparkline-init.js') }}"></script>

<!--easy pie chart-->
<script src="{{ url('slicklab/js/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
<script src="{{ url('slicklab/js/easy-pie-chart.js') }}"></script>


<!--vectormap-->
<script src="{{ url('slicklab/js/vector-map/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ url('slicklab/js/vector-map/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ url('slicklab/js/dashboard-vmap-init.js') }}"></script>

<!--Icheck-->
<script src="{{ url('slicklab/js/icheck/skins/icheck.min.js') }}"></script>
<script src="{{ url('slicklab/js/todo-init.js') }}"></script>

<!--jquery countTo-->
<script src="{{ url('slicklab/js/jquery-countTo/jquery.countTo.js') }}"  type="text/javascript"></script>

<!--owl carousel-->
<script src="{{ url('slicklab/js/owl.carousel.js') }}"></script>


<!--common scripts for all pages-->

<script src="{{ url('slicklab/js/scripts.js') }}"></script>


<script type="text/javascript">

    $(document).ready(function() {

        //countTo

        $('.timer').countTo();

        //owl carousel

        $("#news-feed").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true
        });
    });

    $(window).on("resize",function(){
        var owl = $("#news-feed").data("owlCarousel");
        owl.reinit();
    });

    $('.dropify').dropify();

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.1/js/dropify.min.js"></script>

@yield('script')

<!--bootstrap-wysihtml5-->
<script type="text/javascript" src="{{ url('slicklab/js/bootstrap-wysihtml5/wysihtml5-0.3.0.js') }}"></script>
<script type="text/javascript" src="{{ url('slicklab/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js') }}"></script>

<script>

    jQuery(document).ready(function(){
        $('.wysihtml5').wysihtml5();

        $('.summernote').summernote({
            height: 200,                 // set editor height

            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor

            focus: true                 // set focus to editable area after initializing summernote
        });
    });

</script>

<!--dropzone-->
<script src="{{ url('slicklab/js/dropzone.js') }}"></script>

<script src="{{ url('slicklab/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('slicklab/js/datatables/dataTables.bootstrap.min.js') }}"></script>

@stack('scripts')

</body>
</html>