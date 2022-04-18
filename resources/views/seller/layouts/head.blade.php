<head>
    <title>IKART DASHBORD</title>

    <link type="image/x-icon" rel="shortcut icon" href="{{asset('seller-assets/images/favicon.png')}}" />

    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font-Awesome Fonts -->
    <link href="{{asset('seller-assets/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('seller-assets/css/bootstrap.min.css')}}">

    <!-- Style Sheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('seller-assets/css/singleProduct_listing.css')}}">
    @yield('extra-css')
</head>
