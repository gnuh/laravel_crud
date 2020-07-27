<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with laravel 7</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/media/image/favicon.png')}}"/>
    <link href="{{ asset('vendors/bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />
</head>
<body class="form-membership" style="background: url({{asset("media/image/image1.jpg")}})">
@yield('main')
<script src="{{ asset('vendors/bundle.js') }}" type="text/js"></script>
<script src="{{ asset('js/app.min.js') }}" type="text/js"></script>

</body>
</html>
