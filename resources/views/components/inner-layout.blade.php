<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify emails quickly</title>
    <link rel="stylesheet" type="text/css" href="{{asset('inner/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('inner/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('inner/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('inner/css/iofrm-theme16.css')}}">
    <link href="{{ asset('favicon.png') }}" rel="icon">
</head>
<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="/">
                <div class="logo">
                    <img class="logo-size" src="{{ asset("inner/img/main-logo.png") }}" alt="">
                </div>
            </a>
        </div>
        

        {{$slot}}

    </div>
<script src="{{asset('inner/js/jquery.min.js')}}"></script>
<script src="{{asset('inner/js/popper.min.js')}}"></script>
<script src="{{asset('inner/js/bootstrap.min.js')}}"></script>
<script src="{{asset('inner/js/main.js')}}"></script>
</body>
</html>