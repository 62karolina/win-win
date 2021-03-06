<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>AvocadoPanel</title>


    <!-- Styles -->
    <link href="{{ asset('assets/admin/css/chosen.css') }}" rel='stylesheet' tyle="text/css">
    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/admin/css/theme/avocado.css') }}" rel="stylesheet" type="text/css" id="theme-style">
    <link href="{{ asset('assets/admin/css/prism.css') }}" rel="stylesheet/less" type="text/css">
    <link href="{{ asset('assets/admin/css/fullcalendar.css') }}"rel='stylesheet' tyle="text/css">
    <link href="{{ asset('assets/admin/css/jquery-ui.css') }}"rel='stylesheet' tyle="text/css">
    <script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/1.0.0/dist/progressbar.js"></script>
    <meta name="csrf-token" content="{!!  csrf_token()   !!}">
    <style type="text/css">
        body { padding-top: 102px; }
    </style>
    <link href="{{ asset('assets/admin/css/bootstrap-responsive.css') }}"  rel="stylesheet">

    <!-- JavaScript/jQuery, Pre-DOM -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script src="{{ asset('assets/admin/js/charts/excanvas.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.jpanelmenu.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('assets/admin/js/avocado-custom-predom.js') }}"></script>

    <!-- HTML5, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="https://html5shim.googlecode.com/svn/trunk/html5.js" tppabs="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>
@if(!Auth::guest())
    <div class="jPanelMenu-panel" style="position: static; left: 0px;"><div class="navbar navbar-inverse navbar-fixed-top">


            <div class="navbar-inner">


                <div class="container">

                    <a href="#">
                        <button type="button" class="btn btn-navbar mobile-menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </a>
                    <a class="brand" href="/admin"><i class="icon-leaf"></i>Epicdrop <b>Panel</b></a>
                    <ul class="nav pull-right">
                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-user icon-white"></i>
                                <span class="hidden-phone">{{ Auth::user()->username }}</span>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a href="/logout"><i class="icon-off"></i>Выход</a></li>
                            </ul>


                        </li>


                    </ul>


                </div>
            </div>
            <div class="breadcrumb clearfix">


                <div class="container">


                    <ul class="pull-left">
                        <li><a href="/admin"><i class="icon-home"></i>Главная</a> <span class="divider">/</span></li>
                        <li><a href="/admin/lastvvod">Последние платежи</a> <span class="divider">/</span></li>
                        <li><a href="/admin/lastvivod">Запросы на вывод</a> <span class="divider">/</span></li>
                        <li><a href="/admin/users">Пользователи</a> <span class="divider">/</span></li>
                        <li><a href="/admin/cases">Кейсы</a> <span class="divider">/</span></li>
                        <li><a href="/admin/items">Вещи</a> <span class="divider">/</span></li>
                        <li><a href="/admin/contests">Розыгрыши</a> <span class="divider">/</span></li>
                    </ul>




                </div>

            </div>




        </div>
        </br>
        <div class="container">

            @endif

            @yield('content')
            @if(!Auth::guest())</div> @endif
</body>

<!-- Javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('assets/admin/js/jquery.hotkeys.js') }}"></script>
<script src="{{ asset('assets/admin/js/calendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.pajinate.js') }}" ></script>
<script src="{{ asset('assets/admin/js/jquery.prism.min.js') }}" ></script>
<script src="{{ asset('assets/admin/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/charts/jquery.flot.time.js') }}" ></script>
<script src="{{ asset('assets/admin/js/charts/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('assets/admin/js/charts/jquery.flot.resize.js') }}" ></script>
<script src="{{ asset('assets/admin/js/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/bootstrap/bootstrap-wysiwyg.js') }}"></script>
<script src="{{ asset('assets/admin/js/bootstrap/bootstrap-typeahead.js') }}" ></script>
<script src="{{ asset('assets/admin/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.chosen.min.js') }}" ></script>
<script src="{{ asset('assets/admin/js/avocado-custom.js') }}"></script>
<script type='text/javascript'  src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js' ></script>

<script>
$(document).ready(function() {
    $('#dp5').slider({
      max: 500,
      orientation: 'horizontal',
      selection: 'after'
    });
})
$('#dp5').slider();
</script>
</html>
