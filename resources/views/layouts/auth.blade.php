<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">

    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" id="auth-css" href="{!! asset('assets/css/auth.css') !!}" type="text/css" media="all">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    -->
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
    <link rel="shortcut icon" href="{!! asset('assets/css/demo/demo9/media/img/logo/favicon.ico') !!}" />
</head>
<body>

	@yield('content')
    <script src="components/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
    <script src="components/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
    <!--end::Base Scripts -->   
    <!--begin::Page Snippets -->
</body>
</html>
