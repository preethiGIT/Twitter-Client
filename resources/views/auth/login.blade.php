@extends('layouts.app')

@section('content') 

<html><head>
    <meta charset="UTF-8">
    <title>Log in</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="App.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="/favicon-fm.png">
</head>
<body>


<div id="root">
            <div class="container pt-5">
        <section class="discount-program pt-5"><h4 class="pt-3 pb-3">Please sign in</h4>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                <div class="col-md-12 d-flex flex-row pl-0">
                    <div class="form-group d-flex flex-row col-md-4 pl-0">

                       <input type="email" value="" class="form-control" name="email" id="inputEmail" placeholder="Email" required="" autofocus="">
                    </div>
                </div>

                <div class="col-md-12 d-flex flex-row pl-0">
                    <div class="form-group d-flex flex-row col-md-4 pl-0">

                        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-success">Sign in</button>
                    </div>
                </div>

                <input type="hidden" name="_csrf_token" value="vCGeHkeRwW1CE4gH2RcpzF1tl0B2I_2-CLn1CNzLLFA">
            </form>
        </section>
    </div>

    </div>
</div>

</body></html>
@endsection
