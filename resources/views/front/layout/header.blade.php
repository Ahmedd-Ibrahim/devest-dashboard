<!DOCTYPE html>
<html lang="en">
<head>
    <title>Devest</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{--icon--}}
    <link rel="icon" type="image/png"
          href="{{asset('assests/front/images/logobar.png')}}">
    {{--icon--}}
    <link rel="stylesheet" href="{{asset('assests/front/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assests/front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assests/front/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assests/front/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assests/front/css/flaticon.css')}}">
     {{-- begin   bootstrap--}}
    <link rel="stylesheet" href="{{asset('assests/front/css/bootstrap.min.css')}}">
    @if ( LaravelLocalization::getCurrentLocaleDirection() =='rtl' )
 <link rel="stylesheet" href="{{asset('assests/front/css/bootstrap-rtl.css')}}">
    @endif

     {{--End of bootstrap--}}
    <link rel="stylesheet" href="{{asset('assests/front/css/style.css')}}">
    {{--my edit--}}
    <link rel="stylesheet" href="{{asset('assests/front/css/custom.css')}}">
    {{--End my edit--}}
    {{--noty--}}
    <link rel="stylesheet" href="{{ asset('assests/front/plugins/noty/noty.css') }}">
    <script src="{{ asset('assests/front/plugins/noty/noty.min.js') }}"></script>
    <style>
        @font-face {
            font-family: Cairo;
            src: url({{'assests/front/webfonts/Cairo-Regular.ttf'}});
        }
        * {font-family: Cairo, sans-serif;}
    </style>

</head>
<body>
