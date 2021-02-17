<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('/bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/bower_components/admin-lte/dist/css/adminlte.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="{{ asset("/bower_components/admin-lte/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />
    <link rel='shortcut icon' type='image/x-icon' href={{ asset("/images/bps.ico")}} />
</head>
<style>
    .cards-list {
        z-index: 0;
        width: 100%;
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .cardo {
        position: relative;
        margin: 30px auto;
        width: 100%;
        border-radius: 20px;
        box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.10), -5px -5px 30px 7px rgba(0,0,0,0.10);
    }

    .cardo > .cardo-content {
        position: relative;
        width: inherit;
        height: inherit;
        border-radius: 20px;
    }

    .cardo-progress {
        border-radius: 20px;
    }
    
    /* .cardo .card_image {
        padding: 20px 20px 20px 20px;
        background:url(https://cdn.dribbble.com/users/13449/screenshots/12078823/downloads/the_valley.png);
        position: relative;
        width: inherit;
        height: inherit;
        border-radius: 20px;
    } */
    
    .cardo .cardo-content img {
        width: inherit;
        height: inherit;
        border-radius: 20px;
        object-fit: cover;
    }
    
    .cardo .card-title {
        padding: 20px 20px 20px 20px;
        position: absolute;
        text-align: center;
        border-radius: 0px 0px 40px 40px;
        font-family: sans-serif;
        font-weight: bold;
        font-size: 30px;
        /* margin-top: -80px; */
        /* height: 40px; */
        top: 0px;
        left: 0px;
    }

    .card .card-body {
        padding: 20px 20px 20px 20px;
    }
    
    .title-white {
        color: white;
    }
    
    .title-black {
        color: black;
    }

    .hr-text {
      line-height: 1em;
      position: relative;
      outline: 0;
      border: 0;
      color: black;
      text-align: center;
      height: 1.5em;
      opacity: .5;
    }

    .hr-text:before {
        content: '';
        /* // use the linear-gradient for the fading effect
        // use a solid background color for a solid bar */
        background: linear-gradient(to right, transparent, #535353, transparent);
        position: absolute;
        left: 0;
        top: 50%;
        width: 100%;
        height: 1px;
    }
    .hr-text:after {
        content: attr(data-content);
        position: relative;
        display: inline-block;
        color: black;
    
        padding: 0 .5em;
        line-height: 1.5em;
        /* // this is really the only tricky part, you need to specify the background color of the container element... */
        color: #535353;
        background-color: #f8f9fa;
    }

    @media all and (max-width: 500px) {
        .card-list {
        /* On small screens, we are no longer using row direction but column */
        flex-direction: column;
        }
    }
</style>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('layouts.nav')
        @include('keuangan::layouts.left')
        <div class="content-wrapper">
            <div class="content-header">
                @yield('header')
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>
        @include('layouts.footer')
    </div>
    <script src="{{ asset('/bower_components/admin-lte/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('/bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('/bower_components/admin-lte/dist/js/adminlte.min.js')}}"></script>
    @yield('scripts')
</body>
</html>
