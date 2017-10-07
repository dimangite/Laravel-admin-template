<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Material Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="{{asset('admin_template/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{asset('admin_template/css/material-dashboard.css?v=1.2.0')}}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('admin_template/css/demo.css" rel="stylesheet')}}" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

    <link href="{{asset("css/dataTables.bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset("css/jjsonviewer.css")}}" rel="stylesheet">
    <link href="{{asset('css/toastr.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/adminLTE.min.css')}}" rel="stylesheet" type="text/css">

    @stack('stylesheets')
</head>
<body>
    <div class="wrapper">
        @include('includes.slider')
        <div class="main-panel">
            @include('includes.navigation_menu')
            <div class="content">
                @yield('main_container')
            </div>
            @include('includes.footer')
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="{{asset('admin_template/js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin_template/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin_template/js/material.min.js')}}" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="{{asset('admin_template/js/chartist.min.js')}}"></script>
<!--  Dynamic Elements plugin -->
<script src="{{asset('admin_template/js/arrive.min.js')}}"></script>
<!--  PerfectScrollbar Library -->
<script src="{{asset('admin_template/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('admin_template/js/bootstrap-notify.js')}}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{asset('admin_template/js/material-dashboard.js?v=1.2.0')}}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('admin_template/js/demo.js')}}"></script>
<script src="{{asset("js/dataTables.bootstrap.min.js")}}"></script>
<script src="{{asset('js/toastr.min.js')}}"></script>
<script src="{{asset("js/jjsonviewer.js")}}"></script>
@stack('scripts')
</html>
