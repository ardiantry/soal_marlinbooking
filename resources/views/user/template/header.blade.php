<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Amezia - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta content="A premium admin dashboard template by themesbrand" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
     <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/morris/morris.css') }}">
    <link href="{{ asset('backend/plugins/metro/MetroJs.min.css') }}" rel="stylesheet">
    <!-- Dropzone css
    <link href="{{ asset('backend/plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet"> -->
    <!-- App css -->
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
        <!--Chartist Chart CSS -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/chartist/css/chartist.min.css') }}">
    
    <link href="{{ asset('backend/css/style-1.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <script type="text/javascript">
        var ajaxUrl="{{url('')}}/";
        var Urlpage      ="{{Request::segment(1)}}";
    </script>
</head>
<body class="bg-white enlarge-menu">

