<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TechNews - HTML and CSS Template</title>

    <!-- favicon -->
    <link href=" {{ asset('assets/img/favicon.png') }} " rel=icon>

    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>
    @yield("seo")
    
    <link href="{{ asset('blog/public/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- font-awesome -->
    <link href="{{ asset('blog/public/assets/fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Mobile Menu Style -->
    <link href="{{ asset('blog/public/assets/css/mobile-menu.css') }}" rel="stylesheet">

    <!-- Owl carousel -->
    <link href="{{ asset('blog/public/assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('blog/public/assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <!-- Theme Style -->
    <link href="{{ asset('blog/public/assets/css/style.css') }}" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">

    @yield("content")

<script src="{{ asset('blog/public/assets/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('blog/public/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('blog/public/assets/js/mobile-menu.js') }}"></script>
<script src="{{ asset('blog/public/assets/js/owl.carousel.min.j') }}s"></script>
<script src="{{ asset('blog/public/assets/js/script.js') }}"></script>
</body>

</html>