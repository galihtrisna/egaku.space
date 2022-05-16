<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="When it comes to a great idea, you know it when you see it">
    <meta name="author" content="Galih Trisna">
    <meta name="keywords" content="egaku">

    <!-- Title Page-->
    <title>{{config('app.name')}} @yield('title')</title>

    @include('partials/css')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BGRV88ZHBD"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-BGRV88ZHBD');
    </script>

</head>

<body
    class="dark:bg-jacarta-900 font-body text-jacarta-500 overflow-x-hidden"
    itemscope
    itemtype="http://schema.org/WebPage"
    >
    @include('partials.header')
    @yield('content') 
    @include('partials.footer')
    @include('partials/script')

</body>

</html>
<!-- end document-->
