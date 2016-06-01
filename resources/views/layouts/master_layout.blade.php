
<!doctype html>
<html lang="th-TH">
<head>
    <meta charset="UTF-8">
    <title>KMI.TL Url Shortener</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="kmi.tl">
    <meta name="keywords" content="kmitl">
    <link rel="shortcut icon" href="{{ asset('public/img/icon.png') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/default.css') }}" />
</head>
<body id="cover-bg" class="cover-{{ rand(1,16) }}">
<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">KMI.TL</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
           {{-- <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="/pages/custom_url"><span class="glyphicon glyphicon-heart"></span> Custom URL</a></li>
                <li><a href="/pages/request_custom_url"><span class="glyphicon glyphicon-edit"></span> Request Custom URL</a></li>
                <li><a href="/pages/api"><span class="glyphicon glyphicon-transfer"></span> API</a></li>
                <li><a href="mailto:csag@kmi.tl"><span class="glyphicon glyphicon-send"></span> Contact</a></li>
            </ul>--}}
        </div>
    </div>
</nav>
<div class="container body-container">
    @yield('content')
</div>
<div class="footer-container">
    <div class="container text-right">
        <br/>
        <small class="text-shadow">
            Copy right KMI<span class="color-primary">.</span>TL, Powered by <a href="http://csag.kmi.tl">CSAG</a>
        </small>
        <br/><br/>
    </div>
</div>
<script type="text/javascript" src="{{ asset('public/js/jquery-1.10.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/angular.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/default.js') }}"></script>
</body>
</html>