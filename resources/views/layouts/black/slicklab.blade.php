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
    <link href="js/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />

    <!--vector maps -->
    <link rel="stylesheet" href="js/vector-map/jquery-jvectormap-1.1.1.css">

    <!--right slidebar-->
    <link href="css/slidebars.css" rel="stylesheet">

    <!--switchery-->
    <link href="js/switchery/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />

    <!--jquery-ui-->
    <link href="js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet" />

    <!--iCheck-->
    <link href="js/icheck/skins/all.css" rel="stylesheet">

    <link href="css/owl.carousel.css" rel="stylesheet">


    <!--common style-->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
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
                    <li class="active"><a href="{{ url('/admin') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                    <li class="menu-list">
                        <a href=""><i class="fa fa-laptop"></i>  <span>Banners</span></a>
                        <ul class="child-list">
                            <li><a href="#"> Adicionar</a></li>
                            <li><a href="{{route('admin.banners.index')}}"> Listar</a></li>
                            <li><a href="#"> Categorias</a></li>
                        </ul>
                    </li>
                    <li class="menu-list"><a href=""><i class="fa fa-book"></i> <span>UI Elements</span></a>
                        <ul class="child-list">
                            <li><a href="general.html"> BS Elements</a></li>
                            <li><a href="buttons.html"> Buttons</a></li>
                            <li><a href="toastr.html"> Toaster Notification</a></li>
                            <li><a href="widgets.html"> Widgets</a></li>
                            <li><a href="ion-slider.html"> Ion Slider</a></li>
                            <li><a href="tree.html"> Tree View</a></li>
                            <li><a href="nestable.html"> Nestable</a></li>
                            <li><a href="fontawesome.html"> Fontawesome</a></li>
                            <li><a href="line-icon.html"> Line Icon</a></li>
                        </ul>
                    </li>

                    <li>
                        <h3 class="navigation-title">Extra</h3>
                    </li>

                    <li class="menu-list"><a href="javascript:;"><i class="fa fa-envelope-o"></i> <span>Email <span class="label noti-arrow bg-danger pull-right">4 Unread</span> </span></a>
                        <ul class="child-list">
                            <li><a href="inbox.html"> Inbox</a></li>
                            <li><a href="inbox-details.html"> View Mail</a></li>
                            <li><a href="inbox-compose.html"> Compose Mail</a></li>
                        </ul>
                    </li>

                    <li class="menu-list"><a href="javascript:;"><i class="fa fa-map-marker"></i> <span>Maps</span></a>
                        <ul class="child-list">
                            <li><a href="google-map.html"> Google Map</a></li>
                            <li><a href="vector-map.html"> Vector Map</a></li>
                        </ul>
                    </li>

                    <li class="menu-list"><a href=""><i class="fa fa-file-text"></i> <span>Extra Pages</span></a>
                        <ul class="child-list">
                            <li><a href="profile.html"> Profile</a></li>
                            <li><a href="invoice.html"> Invoice</a></li>
                            <li><a href="login.html"> Login </a></li>
                            <li><a href="registration.html"> Registration </a></li>
                            <li><a href="lock.html"> Lock Screen </a></li>
                            <li><a href="404.html"> 404 Error</a></li>
                            <li><a href="500.html"> 500 Error</a></li>

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
                2015 &copy; SlickLab by VectorLab.
            </footer>
            <!--footer section end-->

        </div>
        <!-- body content end-->
    </section>



<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>

<!--jquery-ui-->
<script src="js/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>

<script src="js/jquery-migrate.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>

<!--Nice Scroll-->
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>

<!--right slidebar-->
<script src="js/slidebars.min.js"></script>

<!--switchery-->
<script src="js/switchery/switchery.min.js"></script>
<script src="js/switchery/switchery-init.js"></script>

<!--flot chart -->
<script src="js/flot-chart/jquery.flot.js"></script>
<script src="js/flot-chart/flot-spline.js"></script>
<script src="js/flot-chart/jquery.flot.resize.js"></script>
<script src="js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="js/flot-chart/jquery.flot.pie.js"></script>
<script src="js/flot-chart/jquery.flot.selection.js"></script>
<script src="js/flot-chart/jquery.flot.stack.js"></script>
<script src="js/flot-chart/jquery.flot.crosshair.js"></script>


<!--earning chart init-->
<script src="js/earning-chart-init.js"></script>


<!--Sparkline Chart-->
<script src="js/sparkline/jquery.sparkline.js"></script>
<script src="js/sparkline/sparkline-init.js"></script>

<!--easy pie chart-->
<script src="js/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>


<!--vectormap-->
<script src="js/vector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="js/vector-map/jquery-jvectormap-world-mill-en.js"></script>
<script src="js/dashboard-vmap-init.js"></script>

<!--Icheck-->
<script src="js/icheck/skins/icheck.min.js"></script>
<script src="js/todo-init.js"></script>

<!--jquery countTo-->
<script src="js/jquery-countTo/jquery.countTo.js"  type="text/javascript"></script>

<!--owl carousel-->
<script src="js/owl.carousel.js"></script>


<!--common scripts for all pages-->

<script src="js/scripts.js"></script>


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

</script>

</body>
</html>
