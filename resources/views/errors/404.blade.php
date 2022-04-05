@extends('layouts.app')
@yield('title','404')
  @section('content')
  <main class="pt-[5.5rem] lg:pt-24">
      <!-- 404 -->
      <section class="dark:bg-jacarta-800 relative py-16 md:py-24">
        <picture class="pointer-events-none absolute inset-0 -z-10 dark:hidden">
          <img src="img/gradient_light.jpg" alt="gradient" class="h-full w-full" />
        </picture>
        <div class="container">
          <div class="mx-auto max-w-lg text-center">
            <img src="img/404.png" alt="" class="mb-16 inline-block" />
            <h1 class="text-jacarta-700 font-display mb-6 text-4xl dark:text-white md:text-6xl">Page Not Found!</h1>
            <p class="dark:text-jacarta-300 mb-12 text-lg leading-normal">
              Oops! The page you are looking for does not exist. It might have been moved or deleted.
            </p>
            <a
              href="index.html"
              class="bg-accent shadow-accent-volume hover:bg-accent-dark inline-block rounded-full py-3 px-8 text-center font-semibold text-white transition-all"
              >Navigate Back Home</a
            >
          </div>
        </div>
      </section>
      <!-- end 404 -->
    </main>
    @section('content')