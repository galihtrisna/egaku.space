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

</head>

<body
    oncontextmenu="return false"
    class="dark:bg-jacarta-900 font-body text-jacarta-500 overflow-x-hidden"
    itemscope
    itemtype="http://schema.org/WebPage"
    >
    @include('sweetalert::alert')
    @include('partials.navbar')
    @yield('content') 
    @include('partials.footer')
    @include('partials/script')

</body>

</html>
<!-- end document-->
