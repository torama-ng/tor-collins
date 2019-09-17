<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        	<!-- CSS
	================================================== -->
	    <link rel="stylesheet" href="{{asset('css/plugins/plugins.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <div id="app">
                @include('inc.navbar')
                @include('inc.messages')
                    @yield('content') 
                @include('inc.footer')
        </div>

			<!-- Scripts
			================================================== -->
			<script type="application/javascript" src="{{ asset('js/plugins/jquery.min.js')}}"></script>
			<script type="application/javascript" src="{{ asset('js/plugins/viewportchecker.js')}}"></script>
			<script type="application/javascript" src="{{ asset('js/plugins/bootstrap.min.js')}}"></script>
			<script type="application/javascript" src="{{ asset('js/plugins/bootsnav.js')}}"></script>
			<script type="application/javascript" src="{{ asset('js/plugins/select2.min.js')}}"></script>
			<script type="application/javascript" src="{{ asset('js/plugins/wysihtml5-0.3.0.js')}}"></script>
			<script type="application/javascript" src="{{ asset('js/plugins/bootstrap-wysihtml5.js')}}"></script>
			<script type="application/javascript" src="{{ asset('js/plugins/datedropper.min.js')}}"></script>
			<script type="application/javascript" src="{{ asset('js/plugins/dropzone.js')}}"></script>
			<script type="application/javascript" src="{{ asset('js/plugins/loader.js')}}"></script>
			<script type="application/javascript" src="{{ asset('js/plugins/owl.carousel.min.js')}}"></script>
			<script type="application/javascript" src="{{ asset('js/plugins/slick.min.js')}}"></script>
			<script type="application/javascript" src="{{ asset('js/plugins/gmap3.min.js')}}"></script>
			<script type="application/javascript" src="{{ asset('js/plugins/jquery.easy-autocomplete.min.js')}}"></script>
			<!-- Custom Js -->
			<script type="application/javascript" src="{{ asset('js/custom.js')}}"></script>
    </body>
</html>
