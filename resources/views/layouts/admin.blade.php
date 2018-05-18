<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
	
	<meta name="description" content="@yield('description')">

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
        google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
        active: function() {
            sessionStorage.fonts = true;
        }
        });
    </script>
    <link href="{!! asset('assets/css/vendors/custom/fullcalendar/fullcalendar.bundle.css') !!}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors -->
    <link href="{!! asset('assets/css/vendors/base/vendors.bundle.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/css/demo/demo9/base/style.bundle.css') !!}" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="{!! asset('assets/css/demo/demo9/media/img/logo/favicon.png') !!}" />
    
    <!--
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    
    <link href="{!! asset('assets/css/admin.css') !!}" rel="stylesheet">
	
	
    <link href="{!! asset('assets/css/plugins/morris.css') !!}" rel="stylesheet">

    >
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>

<body class="m--skin- m-page--loading-enabled m-page--loading m-content--skin-light m-header--fixed m-header--fixed-mobile m-aside-left--offcanvas-default m-aside-left--enabled m-aside-left--fixed m-aside-left--skin-dark m-aside--offcanvas-default" >

    <div id="wrapper">
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        <div id="page-wrapper">
		
			@yield('content')

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

     
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <!-- jQuery
    <script src="{!! asset('assets/js/plugins/morris/raphael.min.js') !!}"></script>
    <script src="{!! asset('assets/js/plugins/morris/morris.min.js') !!}"></script>
    <script src="{!! asset('assets/js/plugins/morris/morris-data.js') !!}"></script>
    -->
    <script src="{!! asset('components/assets/vendors/base/vendors.bundle.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('components/assets/demo/default/base/scripts.bundle.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('components/assets/demo/default/custom/components/forms/widgets/dropzone.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('components/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('components/assets/app/js/dashboard.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('components/assets/demo/default/custom/components/datatables/base/record-selection.js') !!}" type="text/javascript"></script>
    <!--end::Page Snippets -->   
    <!-- begin::Page Loader -->
    <script>
        $(window).on('load', function() {
            $('body').removeClass('m-page--loading');         
        });
    </script>
</body>

</html>