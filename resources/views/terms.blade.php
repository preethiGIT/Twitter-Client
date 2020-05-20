<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    
</head>
<body>
    <div class="container-fluid p-0">
        <div class="top-header col-md-12 d-flex flex-row p-0">
            <div class="top-bg-red col-md-4"></div>
            <div class="top-bg-blue col-md-2"></div>
            <div class="top-bg-gray col-md-2"></div>
            <div class="top-bg-light-blue col-md-2"></div>
            <div class="top-bg-yellow col-md-2"></div>
        </div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    
                </div>
            </div>
        </nav>
    </div>
        
    <div style="padding-left: 50px">
        <h1>Terms of Use</h1>
        <p>By accessing website website.com, you are agree to be bound by the Terms of Use and agree that you are responsible for the agreement with any applicable local laws.</p>

        <p>All the contents published on this web site is the sole property of website.com and protected by laws governing intellectual property rights.</p>

        <p>At any time without notice website.com reserves the right to modify this document. Please revisit Terms of Use each time you access the website website.com. By using this web site you are agree to be bound by current Terms of Use.</p>

        <p>Do at your own risk. Authors, owners or participants of website.com are not responsible for any harm, damage or loss caused by reading, following or implementing of instructions, manuals, materials, services or any contents published on this website.</p>

        <p>March 30, 2020.</p>
    </div>

    <div class="ctr-p" id="footer"><style data-iml="1589827703697">.M6hT6{left:0;right:0;-webkit-text-size-adjust:none}.fbar p{display:inline}.fbar a,#fsettl{text-decoration:none;white-space:nowrap}.fbar{margin-left:-27px}.Fx4vi{padding-left:27px;margin:0 !important}#fbarcnt{display:block;}.fmulti{text-align:center}.fmulti #fsr{display:block;float:none}.fmulti #fuser{display:block;float:none}#fuserm{line-height:25px}#fsr{float:right;white-space:nowrap}#fsl{white-space:nowrap}#fsett{background:#fff;border:1px solid #999;bottom:30px;padding:10px 0;position:absolute;box-shadow:0 2px 4px rgba(0,0,0,.2);box-shadow:0 2px 4px rgba(0,0,0,.2);text-align:left;z-index:128}#fsett a{display:block;line-height:44px;padding:0 20px;text-decoration:none;white-space:nowrap}#fbar{background:#f2f2f2;line-height:40px;min-width:980px;border-top:1px solid #e4e4e4;}.B4GxFc{margin-left:166px}.fbar p,.fbar a,#fsettl,#fsett a{color:#5f6368}.fbar a:hover,#fsett a:hover{color:#333}.fbar{font-size:14px}#fuser{float:right}.EvHmz{bottom:0;left:0;position:absolute;right:0}.hRvfYe #fsettl:hover{text-decoration:underline}.hRvfYe #fsett a:hover{text-decoration:underline}.hRvfYe a:hover{text-decoration:underline}#fsl{margin-left:30px;}#fsr{margin-right:30px}.fmulti #fsl{margin-left:0;}.fmulti #fsr{margin-right:0}.b0KoTc{color:rgba(0,0,0,.54);padding-left:27px}.Q8LRLc{font-size:15px}.b0KoTc{margin-left:30px;text-align:left}</style><div id="fbarcnt" style="height: 50px; visibility: visible;"><div id="footcnt"><div class="EvHmz hRvfYe" id="fbar" style="bottom: 0px; position: absolute;"><div class="fbar"><div class="b2hzT"><div class="b0KoTc"></div></div><span id="fsr"><a class="Fx4vi" href="{{ route('privacy') }}">Privacy</a><a class="Fx4vi" href="{{ route('terms') }}">Terms</a></span></span></div></div></div></div></div>


</body>
</html>