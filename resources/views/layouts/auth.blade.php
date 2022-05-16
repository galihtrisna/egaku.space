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
    <main>
      <!-- Login -->
      <section class="relative h-screen">
        <div class="lg:flex lg:h-full">
          <!-- Left -->
          <div class="relative text-center lg:w-1/2">
            <img src="img/login.jpg" alt="login" class="absolute h-full w-full object-cover" />
            <!-- Logo -->
            <a href="index.html" class="relative inline-block py-36">
              <img src="img/logo_white.png" class="inline-block max-h-7" alt="Xhibiter | NFT Marketplace" />
            </a>
          </div>

          <!-- Right -->
          <div class="relative flex items-center justify-center p-[10%] lg:w-1/2">
            <picture class="pointer-events-none absolute inset-0 -z-10">
              <img src="img/gradient_light.jpg" alt="gradient" class="h-full w-full" />
            </picture>
            
            @yield('content') 
            
          </div>
        </div>
      </section>
      <!-- End Login -->
  
    

    @include('partials/script')

</body>

</html>
<!-- end document-->
