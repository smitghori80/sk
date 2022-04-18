@extends('seller.layouts.master')

@section('extra-css')
    {{--    <!-- botstrape version v 5.0 -->--}}
    {{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"--}}
    {{--          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">--}}

    <!--owl carousel desfault  -->
    <link rel="stylesheet" href="{{asset('seller-assets/css/owl.theme.default.min.css')}}">

    <!-- owl carousel css -->
    <link rel="stylesheet" href="{{asset('seller-assets/css/owl.carousel.min.css')}}">

    <!-- style css -->
    <link rel="stylesheet" href="{{asset('seller-assets/css/style.css')}}">

    <!-- media css -->
    <link rel="stylesheet" href="{{asset('seller-assets/css/media.css')}}">

    <!-- chart css -->
    <link rel="stylesheet" href="{{asset('seller-assets/css/chart.css')}}">
@endsection

@section('content')

@endsection

@section('extra-script')
    {{--<script src="{{asset('seller-assets/js/jquery-3.6.0.min.js')}}"></script>--}}

    <!-- chart js -->
    <script src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>

    <!-- chart theme js -->
    <script src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>

    <!-- chart custome js -->
    <script src="{{asset('seller-assets/js/chart.js')}}"></script>

    <!-- chart js v 2.5.0 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <!-- botstrape version v 5.0 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!--owl carousel js  -->
    <script src="{{asset('seller-assets/js/owl.carousel.min.js')}}"></script>

    <!-- scrript js -->
    <script src="{{asset('seller-assets/js/script.js')}}"></script>

@endsection
