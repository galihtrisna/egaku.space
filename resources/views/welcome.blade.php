@extends('layouts.welcome')
@section('title')
@section('content')
    <main>
      <!-- Hero -->
      <section class="relative pb-10 pt-20 md:pt-32 lg:h-[88vh]">
        <picture class="pointer-events-none absolute inset-x-0 top-0 -z-10 dark:hidden">
          <img src="img/gradient.jpg" alt="gradient" />
        </picture>
        <picture class="pointer-events-none absolute inset-x-0 top-0 -z-10 hidden dark:block">
          <img src="img/gradient_dark.jpg" alt="gradient dark" />
        </picture>

        <div class="container h-full">
          <div class="grid h-full items-center gap-4 md:grid-cols-12">
            <div
              class="col-span-6 flex h-full flex-col items-center justify-center py-10 md:items-start md:py-20 xl:col-span-4"
            >
              <h1
                class="text-jacarta-700 font-display mb-6 text-center text-5xl dark:text-white md:text-left lg:text-6xl xl:text-7xl"
              >
                Search and Save Ideas
              </h1>
              <p class="dark:text-jacarta-300 mb-8 text-center text-lg md:text-left">
                When it comes to a great idea, you know it when you see it
              </p>
              <div class="flex space-x-4">
                <a
                  href="{{route('share')}}"
                  class="bg-accent shadow-accent-volume hover:bg-accent-dark w-36 rounded-full py-3 px-8 text-center font-semibold text-white transition-all"
                >
                  Share
                </a>
                <a
                  href="{{route('explore')}}"
                  class="text-accent shadow-white-volume hover:bg-accent-dark hover:shadow-accent-volume w-36 rounded-full bg-white py-3 px-8 text-center font-semibold transition-all hover:text-white"
                >
                  Explore
                </a>
              </div>
            </div>

            <!-- Hero image -->
            <div class="col-span-6 xl:col-span-8">
              <div class="relative text-center md:pl-8 md:text-right">
                <svg
                  viewbox="0 0 200 200"
                  xmlns="http://www.w3.org/2000/svg"
                  class="mt-8 inline-block w-72 rotate-[8deg] sm:w-full lg:w-[24rem] xl:w-[35rem]"
                >
                  <defs>
                    <clipPath id="clipping" clipPathUnits="userSpaceOnUse">
                      <path
                        d="
                    M 0, 100
                    C 0, 17.000000000000004 17.000000000000004, 0 100, 0
                    S 200, 17.000000000000004 200, 100
                        183, 200 100, 200
                        0, 183 0, 100
                "
                        fill="#9446ED"
                      ></path>
                    </clipPath>
                  </defs>
                  <g clip-path="url(#clipping)">
                    <!-- Bg image -->
                    <image href="img/hero/hero.jpg" width="200" height="200" clip-path="url(#clipping)" />
                  </g>
                </svg>
                <img src="img/hero/3D_elements.png" alt="" class="animate-fly absolute top-0 md:-right-[10%]" />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- Hot Bids -->
      <section class="pt-10 pb-24">
        <div class="container">
          <h2 class="font-display text-jacarta-700 mb-8 text-center text-3xl dark:text-white">
            <span
              class="mr-1 inline-block h-6 w-6 bg-contain bg-center text-xl"
              style="
                background-image: url(https://cdn.jsdelivr.net/npm/emoji-datasource-apple@7.0.2/img/apple/64/1f525.png);
              "
            ></span>
            Trending
          </h2>

          <div class="relative">
            <!-- Slider -->
            <div class="swiper card-slider-4-columns !py-5">
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <article>
                    <div
                      class="dark:bg-jacarta-700 dark:border-jacarta-700 border-jacarta-100 block rounded-[1.25rem] border bg-white p-[1.1875rem] transition-shadow hover:shadow-lg"
                    >
                      <figure>
                        <a href="item.html">
                          <img
                            src="./img/products/item_1.jpg"
                            alt="item 1"
                            width="230"
                            height="230"
                            class="w-full rounded-[0.625rem]"
                            loading="lazy"
                          />
                        </a>
                      </figure>
                      <div class="mt-4 flex items-center justify-between">
                        <a href="item.html">
                          <span class="font-display text-jacarta-700 hover:text-accent text-base dark:text-white"
                            >ETH Me Outside</span
                          >
                        </a>
                        
                      </div>
                      

                      <div class="mt-8 flex items-center justify-between">
                        <button
                          type="button"
                          class="text-accent font-display text-sm font-semibold"
                          data-bs-toggle="modal"
                          data-bs-target="#placeBidModal"
                        >
                          Place bid
                        </button>

                        <div class="flex items-center space-x-1">
                          <span
                            class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('../img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                            data-tippy-content="Favorite"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 24 24"
                              width="24"
                              height="24"
                              class="dark:fill-jacarta-200 fill-jacarta-500 hover:fill-red dark:hover:fill-red h-4 w-4"
                            >
                              <path fill="none" d="M0 0H24V24H0z" />
                              <path
                                d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z"
                              />
                            </svg>
                          </span>
                          <span class="dark:text-jacarta-200 text-sm">159</span>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <article>
                    <div
                      class="dark:bg-jacarta-700 dark:border-jacarta-700 border-jacarta-100 block rounded-[1.25rem] border bg-white p-[1.1875rem] transition-shadow hover:shadow-lg"
                    >
                      <figure>
                        <a href="item.html">
                          <img
                            src="./img/products/item_2.jpg"
                            alt="item 2"
                            width="230"
                            height="230"
                            class="w-full rounded-[0.625rem]"
                            loading="lazy"
                          />
                        </a>
                      </figure>
                      <div class="mt-4 flex items-center justify-between">
                        <a href="item.html">
                          <span class="font-display text-jacarta-700 hover:text-accent text-base dark:text-white"
                            >Lazyone Panda</span
                          >
                        </a>
                        
                      </div>
                      

                      <div class="mt-8 flex items-center justify-between">
                        <button
                          type="button"
                          class="text-accent font-display text-sm font-semibold"
                          data-bs-toggle="modal"
                          data-bs-target="#placeBidModal"
                        >
                          Place bid
                        </button>
                        <div class="flex items-center space-x-1">
                          <span
                            class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('../img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                            data-tippy-content="Favorite"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 24 24"
                              width="24"
                              height="24"
                              class="dark:fill-jacarta-200 fill-jacarta-500 hover:fill-red dark:hover:fill-red h-4 w-4"
                            >
                              <path fill="none" d="M0 0H24V24H0z" />
                              <path
                                d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z"
                              />
                            </svg>
                          </span>
                          <span class="dark:text-jacarta-200 text-sm">75</span>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <article>
                    <div
                      class="dark:bg-jacarta-700 dark:border-jacarta-700 border-jacarta-100 block rounded-[1.25rem] border bg-white p-[1.1875rem] transition-shadow hover:shadow-lg"
                    >
                      <figure>
                        <a href="item.html">
                          <img
                            src="./img/products/item_6.jpg"
                            alt="item 6"
                            width="230"
                            height="230"
                            class="w-full rounded-[0.625rem]"
                            loading="lazy"
                          />
                        </a>
                      </figure>
                      <div class="mt-4 flex items-center justify-between">
                        <a href="item.html">
                          <span class="font-display text-jacarta-700 hover:text-accent text-base dark:text-white"
                            >Splendid Girl</span
                          >
                        </a>
                        
                      </div>
                    

                      <div class="mt-8 flex items-center justify-between">
                        <button
                          type="button"
                          class="text-accent font-display text-sm font-semibold"
                          data-bs-toggle="modal"
                          data-bs-target="#placeBidModal"
                        >
                          Place bid
                        </button>
                        <div class="flex items-center space-x-1">
                          <span
                            class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('../img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                            data-tippy-content="Favorite"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 24 24"
                              width="24"
                              height="24"
                              class="dark:fill-jacarta-200 fill-jacarta-500 hover:fill-red dark:hover:fill-red h-4 w-4"
                            >
                              <path fill="none" d="M0 0H24V24H0z" />
                              <path
                                d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z"
                              />
                            </svg>
                          </span>
                          <span class="dark:text-jacarta-200 text-sm">253</span>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <article>
                    <div
                      class="dark:bg-jacarta-700 dark:border-jacarta-700 border-jacarta-100 block rounded-[1.25rem] border bg-white p-[1.1875rem] transition-shadow hover:shadow-lg"
                    >
                      <figure>
                        <a href="item.html">
                          <img
                            src="./img/products/item_4.jpg"
                            alt="item 4"
                            width="230"
                            height="230"
                            class="w-full rounded-[0.625rem]"
                            loading="lazy"
                          />
                        </a>
                      </figure>
                      <div class="mt-4 flex items-center justify-between">
                        <a href="item.html">
                          <span class="font-display text-jacarta-700 hover:text-accent text-base dark:text-white"
                            >Amazing NFT art</span
                          >
                        </a>
                        
                      </div>
                    

                      <div class="mt-8 flex items-center justify-between">
                        <button
                          type="button"
                          class="text-accent font-display text-sm font-semibold"
                          data-bs-toggle="modal"
                          data-bs-target="#placeBidModal"
                        >
                          Place bid
                        </button>
                        <div class="flex items-center space-x-1">
                          <span
                            class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('../img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                            data-tippy-content="Favorite"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 24 24"
                              width="24"
                              height="24"
                              class="dark:fill-jacarta-200 fill-jacarta-500 hover:fill-red dark:hover:fill-red h-4 w-4"
                            >
                              <path fill="none" d="M0 0H24V24H0z" />
                              <path
                                d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z"
                              />
                            </svg>
                          </span>
                          <span class="dark:text-jacarta-200 text-sm">324</span>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <article>
                    <div
                      class="dark:bg-jacarta-700 dark:border-jacarta-700 border-jacarta-100 block rounded-[1.25rem] border bg-white p-[1.1875rem] transition-shadow hover:shadow-lg"
                    >
                      <figure class="relative">
                        <a href="item.html">
                          <img
                            src="./img/pixel.jpg"
                            data-src="./img/products/item_3.gif"
                            alt="item 3"
                            width="230"
                            height="230"
                            class="swiper-lazy w-full rounded-[0.625rem]"
                          />
                          <div class="swiper-lazy-preloader"></div>
                        </a>
                      </figure>
                      <div class="mt-4 flex items-center justify-between">
                        <a href="item.html">
                          <span class="font-display text-jacarta-700 hover:text-accent text-base dark:text-white"
                            >Portrait Gallery</span
                          >
                        </a>
                        
                      </div>
                    

                      <div class="mt-8 flex items-center justify-between">
                        <button
                          type="button"
                          class="text-accent font-display text-sm font-semibold"
                          data-bs-toggle="modal"
                          data-bs-target="#placeBidModal"
                        >
                          Place bid
                        </button>
                        <div class="flex items-center space-x-1">
                          <span
                            class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('../img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                            data-tippy-content="Favorite"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 24 24"
                              width="24"
                              height="24"
                              class="dark:fill-jacarta-200 fill-jacarta-500 hover:fill-red dark:hover:fill-red h-4 w-4"
                            >
                              <path fill="none" d="M0 0H24V24H0z" />
                              <path
                                d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z"
                              />
                            </svg>
                          </span>
                          <span class="dark:text-jacarta-200 text-sm">54</span>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <article>
                    <div
                      class="dark:bg-jacarta-700 dark:border-jacarta-700 border-jacarta-100 block rounded-[1.25rem] border bg-white p-[1.1875rem] transition-shadow hover:shadow-lg"
                    >
                      <figure class="relative">
                        <a href="item.html">
                          <img
                            src="./img/pixel.jpg"
                            data-src="./img/products/item_5.jpg"
                            alt="item 5"
                            width="230"
                            height="230"
                            class="swiper-lazy w-full rounded-[0.625rem]"
                          />
                          <div class="swiper-lazy-preloader"></div>
                        </a>
                      </figure>
                      <div class="mt-4 flex items-center justify-between">
                        <a href="item.html">
                          <span class="font-display text-jacarta-700 hover:text-accent text-base dark:text-white"
                            >Flourishing Cat #180</span
                          >
                        </a>
                       
                      </div>
                  

                      <div class="mt-8 flex items-center justify-between">
                        <button
                          type="button"
                          class="text-accent font-display text-sm font-semibold"
                          data-bs-toggle="modal"
                          data-bs-target="#placeBidModal"
                        >
                          Place bid
                        </button>
                        <div class="flex items-center space-x-1">
                          <span
                            class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('../img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                            data-tippy-content="Favorite"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 24 24"
                              width="24"
                              height="24"
                              class="dark:fill-jacarta-200 fill-jacarta-500 hover:fill-red dark:hover:fill-red h-4 w-4"
                            >
                              <path fill="none" d="M0 0H24V24H0z" />
                              <path
                                d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z"
                              />
                            </svg>
                          </span>
                          <span class="dark:text-jacarta-200 text-sm">125</span>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>

            <!-- Slider Navigation -->
            <div
              class="group swiper-button-prev shadow-white-volume absolute top-1/2 -left-4 z-10 -mt-6 flex h-12 w-12 cursor-pointer items-center justify-center rounded-full bg-white p-3 text-base sm:-left-6"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                width="24"
                height="24"
                class="fill-jacarta-700 group-hover:fill-accent"
              >
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z" />
              </svg>
            </div>
            <div
              class="group swiper-button-next shadow-white-volume absolute top-1/2 -right-4 z-10 -mt-6 flex h-12 w-12 cursor-pointer items-center justify-center rounded-full bg-white p-3 text-base sm:-right-6"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                width="24"
                height="24"
                class="fill-jacarta-700 group-hover:fill-accent"
              >
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" />
              </svg>
            </div>
          </div>
        </div>
      </section>
      <!-- end hot bids -->

      <!-- Process / Newsletter -->
      <section class="dark:bg-jacarta-800 relative py-24">
        <picture class="pointer-events-none absolute inset-0 -z-10 dark:hidden">
          <img src="img/gradient_light.jpg" alt="gradient" class="h-full" />
        </picture>
        <div class="container">
          <h2 class="font-display text-jacarta-700 mb-16 text-center text-3xl dark:text-white">
            Explore and Share Ideas
          </h2>
          <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-4">
            <div class="text-center">
              <div class="mb-6 inline-flex rounded-full bg-[#CDBCFF] p-3">
                <div class="bg-accent inline-flex h-12 w-12 items-center justify-center rounded-full">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    width="24"
                    height="24"
                    class="h-5 w-5 fill-white"
                  >
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                      d="M22 6h-7a6 6 0 1 0 0 12h7v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2zm-7 2h8v8h-8a4 4 0 1 1 0-8zm0 3v2h3v-2h-3z"
                    />
                  </svg>
                </div>
              </div>
              <h3 class="font-display text-jacarta-700 mb-4 text-lg dark:text-white">1. Set up your Profile</h3>
              <p class="dark:text-jacarta-300">
                create an account and set your account profile.
              </p>
            </div>
            <div class="text-center">
              <div class="mb-6 inline-flex rounded-full bg-[#C4F2E3] p-3">
                <div class="bg-green inline-flex h-12 w-12 items-center justify-center rounded-full">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    width="24"
                    height="24"
                    class="h-5 w-5 fill-white"
                  >
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" />
                  </svg>
                </div>
              </div>
              <h3 class="font-display text-jacarta-700 mb-4 text-lg dark:text-white">2. Create Your Collection</h3>
              <p class="dark:text-jacarta-300">
                Click Create and set up your collection. Add social links, a description, profile & banner images, and
                set a secondary sales fee.
              </p>
            </div>
            <div class="text-center">
              <div class="mb-6 inline-flex rounded-full bg-[#CDDFFB] p-3">
                <div class="bg-blue inline-flex h-12 w-12 items-center justify-center rounded-full">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    width="24"
                    height="24"
                    class="h-5 w-5 fill-white"
                  >
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                      d="M17.409 19c-.776-2.399-2.277-3.885-4.266-5.602A10.954 10.954 0 0 1 20 11V3h1.008c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3H6V1h2v4H4v7c5.22 0 9.662 2.462 11.313 7h2.096zM18 1v4h-8V3h6V1h2zm-1.5 9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                    />
                  </svg>
                </div>
              </div>
              <h3 class="font-display text-jacarta-700 mb-4 text-lg dark:text-white">3. Add Your NFTs</h3>
              <p class="dark:text-jacarta-300">
                Upload your work (image, video, audio, or 3D art), add a title and description, and customize your NFTs
                with properties, stats.
              </p>
            </div>
            <div class="text-center">
              <div class="mb-6 inline-flex rounded-full bg-[#FFD0D0] p-3">
                <div class="bg-red inline-flex h-12 w-12 items-center justify-center rounded-full">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    width="24"
                    height="24"
                    class="h-5 w-5 fill-white"
                  >
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                      d="M10.9 2.1l9.899 1.415 1.414 9.9-9.192 9.192a1 1 0 0 1-1.414 0l-9.9-9.9a1 1 0 0 1 0-1.414L10.9 2.1zm2.828 8.486a2 2 0 1 0 2.828-2.829 2 2 0 0 0-2.828 2.829z"
                    />
                  </svg>
                </div>
              </div>
              <h3 class="font-display text-jacarta-700 mb-4 text-lg dark:text-white">4. List Them For Sale</h3>
              <p class="dark:text-jacarta-300">
                Choose between auctions, fixed-price listings, and declining-price listings. You choose how you want to
                sell your NFTs!
              </p>
            </div>
          </div>

          <p class="text-jacarta-700 mx-auto mt-20 max-w-2xl text-center text-lg dark:text-white">
            Join our mailing list to stay in the loop with our newest feature releases, tips and tricks
            for navigating Egaku
          </p>

          <div class="mx-auto mt-7 max-w-md text-center">
            <form class="relative">
              <input
                type="email"
                placeholder="Email address"
                class="dark:bg-jacarta-700 dark:border-jacarta-600 focus:ring-accent border-jacarta-100 w-full rounded-full border py-3 px-4 dark:text-white dark:placeholder-white"
              />
              <button
                class="hover:bg-accent-dark font-display bg-accent absolute top-2 right-2 rounded-full px-6 py-2 text-sm text-white"
              >
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </section>
      <!-- end process / newsletter -->
    </main>

    <!-- Wallet Modal -->
    <div class="modal fade" id="walletModal" tabindex="-1" aria-labelledby="walletModalLabel" aria-hidden="true">
      <div class="modal-dialog max-w-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="walletModalLabel">Connect your wallet</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                width="24"
                height="24"
                class="fill-jacarta-700 h-6 w-6 dark:fill-white"
              >
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                  d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"
                />
              </svg>
            </button>
          </div>

          <!-- Body -->
          <div class="modal-body p-6 text-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              x="0"
              y="0"
              viewBox="0 0 318.6 318.6"
              xml:space="preserve"
              class="mb-4 inline-block h-8 w-8"
            >
              <style>
                .st1,
                .st6 {
                  fill: #e4761b;
                  stroke: #e4761b;
                  stroke-linecap: round;
                  stroke-linejoin: round;
                }
                .st6 {
                  fill: #f6851b;
                  stroke: #f6851b;
                }
              </style>
              <path
                fill="#e2761b"
                stroke="#e2761b"
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M274.1 35.5l-99.5 73.9L193 65.8z"
              />
              <path
                class="st1"
                d="M44.4 35.5l98.7 74.6-17.5-44.3zm193.9 171.3l-26.5 40.6 56.7 15.6 16.3-55.3zm-204.4.9L50.1 263l56.7-15.6-26.5-40.6z"
              />
              <path
                class="st1"
                d="M103.6 138.2l-15.8 23.9 56.3 2.5-2-60.5zm111.3 0l-39-34.8-1.3 61.2 56.2-2.5zM106.8 247.4l33.8-16.5-29.2-22.8zm71.1-16.5l33.9 16.5-4.7-39.3z"
              />
              <path
                d="M211.8 247.4l-33.9-16.5 2.7 22.1-.3 9.3zm-105 0l31.5 14.9-.2-9.3 2.5-22.1z"
                fill="#d7c1b3"
                stroke="#d7c1b3"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M138.8 193.5l-28.2-8.3 19.9-9.1zm40.9 0l8.3-17.4 20 9.1z"
                fill="#233447"
                stroke="#233447"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M106.8 247.4l4.8-40.6-31.3.9zM207 206.8l4.8 40.6 26.5-39.7zm23.8-44.7l-56.2 2.5 5.2 28.9 8.3-17.4 20 9.1zm-120.2 23.1l20-9.1 8.2 17.4 5.3-28.9-56.3-2.5z"
                fill="#cd6116"
                stroke="#cd6116"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M87.8 162.1l23.6 46-.8-22.9zm120.3 23.1l-1 22.9 23.7-46zm-64-20.6l-5.3 28.9 6.6 34.1 1.5-44.9zm30.5 0l-2.7 18 1.2 45 6.7-34.1z"
                fill="#e4751f"
                stroke="#e4751f"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                class="st6"
                d="M179.8 193.5l-6.7 34.1 4.8 3.3 29.2-22.8 1-22.9zm-69.2-8.3l.8 22.9 29.2 22.8 4.8-3.3-6.6-34.1z"
              />
              <path
                fill="#c0ad9e"
                stroke="#c0ad9e"
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M180.3 262.3l.3-9.3-2.5-2.2h-37.7l-2.3 2.2.2 9.3-31.5-14.9 11 9 22.3 15.5h38.3l22.4-15.5 11-9z"
              />
              <path
                fill="#161616"
                stroke="#161616"
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M177.9 230.9l-4.8-3.3h-27.7l-4.8 3.3-2.5 22.1 2.3-2.2h37.7l2.5 2.2z"
              />
              <path
                d="M278.3 114.2l8.5-40.8-12.7-37.9-96.2 71.4 37 31.3 52.3 15.3 11.6-13.5-5-3.6 8-7.3-6.2-4.8 8-6.1zM31.8 73.4l8.5 40.8-5.4 4 8 6.1-6.1 4.8 8 7.3-5 3.6 11.5 13.5 52.3-15.3 37-31.3-96.2-71.4z"
                fill="#763d16"
                stroke="#763d16"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                class="st6"
                d="M267.2 153.5l-52.3-15.3 15.9 23.9-23.7 46 31.2-.4h46.5zm-163.6-15.3l-52.3 15.3-17.4 54.2h46.4l31.1.4-23.6-46zm71 26.4l3.3-57.7 15.2-41.1h-67.5l15 41.1 3.5 57.7 1.2 18.2.1 44.8h27.7l.2-44.8z"
              />
            </svg>
            <p class="text-center dark:text-white">
              You don't have MetaMask in your browser, please download it from
              <a href="https://metamask.io/" class="text-accent" target="_blank" rel="noreferrer noopener">MetaMask</a>
            </p>
          </div>
          <!-- end body -->

          <div class="modal-footer">
            <div class="flex items-center justify-center space-x-4">
              <a
                href="https://metamask.io/"
                target="_blank"
                rel="noreferrer noopener"
                class="bg-accent shadow-accent-volume hover:bg-accent-dark rounded-full py-3 px-8 text-center font-semibold text-white transition-all"
              >
                Get Metamask
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Buy Now Modal -->
    <div class="modal fade" id="buyNowModal" tabindex="-1" aria-labelledby="buyNowModalLabel" aria-hidden="true">
      <div class="modal-dialog max-w-2xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="buyNowModalLabel">Complete checkout</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                width="24"
                height="24"
                class="fill-jacarta-700 h-6 w-6 dark:fill-white"
              >
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                  d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"
                />
              </svg>
            </button>
          </div>

          <!-- Body -->
          <div class="modal-body p-6">
            <div class="mb-2 flex items-center justify-between">
              <span class="font-display text-jacarta-700 text-sm font-semibold dark:text-white">Item</span>
              <span class="font-display text-jacarta-700 text-sm font-semibold dark:text-white">Subtotal</span>
            </div>

            <div class="dark:border-jacarta-600 border-jacarta-100 relative flex items-center border-t border-b py-4">
              <figure class="mr-5 self-start">
                <img src="img/avatars/avatar_2.jpg" alt="avatar 2" class="rounded-2lg" loading="lazy" />
              </figure>

              <div>
                <a href="collection.html" class="text-accent text-sm">Elon Musk #709</a>
                <h3 class="font-display text-jacarta-700 mb-1 text-base font-semibold dark:text-white">
                  Lazyone Panda
                </h3>
                <div class="flex flex-wrap items-center">
                  <span class="dark:text-jacarta-300 text-jacarta-500 mr-1 block text-sm">Creator Earnings: 5%</span>
                  <span
                    data-tippy-content="The creator of this collection will receive 5% of the sale total from future sales of this item."
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="24"
                      height="24"
                      class="dark:fill-jacarta-300 fill-jacarta-700 h-4 w-4"
                    >
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path
                        d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM11 7h2v2h-2V7zm0 4h2v6h-2v-6z"
                      />
                    </svg>
                  </span>
                </div>
              </div>

              <div class="ml-auto">
                <span class="mb-1 flex items-center whitespace-nowrap">
                  <span data-tippy-content="ETH">
                    <svg
                      version="1.1"
                      xmlns="http://www.w3.org/2000/svg"
                      x="0"
                      y="0"
                      viewBox="0 0 1920 1920"
                      xml:space="preserve"
                      class="h-4 w-4"
                    >
                      <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                      <path fill="#62688F" d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z"></path>
                      <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z"></path>
                      <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                      <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                    </svg>
                  </span>
                  <span class="dark:text-jacarta-100 text-sm font-medium tracking-tight">1.55 ETH</span>
                </span>
                <div class="dark:text-jacarta-300 text-right text-sm">$130.82</div>
              </div>
            </div>

            <!-- Total -->
            <div
              class="dark:border-jacarta-600 border-jacarta-100 mb-2 flex items-center justify-between border-b py-2.5"
            >
              <span class="font-display text-jacarta-700 hover:text-accent font-semibold dark:text-white">Total</span>
              <div class="ml-auto">
                <span class="flex items-center whitespace-nowrap">
                  <span data-tippy-content="ETH">
                    <svg
                      version="1.1"
                      xmlns="http://www.w3.org/2000/svg"
                      x="0"
                      y="0"
                      viewBox="0 0 1920 1920"
                      xml:space="preserve"
                      class="h-4 w-4"
                    >
                      <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                      <path fill="#62688F" d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z"></path>
                      <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z"></path>
                      <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                      <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                    </svg>
                  </span>
                  <span class="text-green font-medium tracking-tight">1.55 ETH</span>
                </span>
                <div class="dark:text-jacarta-300 text-right">$130.82</div>
              </div>
            </div>

            <!-- Terms -->
            <div class="mt-4 flex items-center space-x-2">
              <input
                type="checkbox"
                id="buyNowTerms"
                class="checked:bg-accent dark:bg-jacarta-600 text-accent border-jacarta-200 focus:ring-accent/20 dark:border-jacarta-500 h-5 w-5 self-start rounded focus:ring-offset-0"
              />
              <label for="buyNowTerms" class="dark:text-jacarta-200 text-sm"
                >By checking this box, I agree to Egaku's <a href="#" class="text-accent">Terms of Service</a></label
              >
            </div>
          </div>
          <!-- end body -->

          <div class="modal-footer">
            <div class="flex items-center justify-center space-x-4">
              <button
                type="button"
                class="bg-accent shadow-accent-volume hover:bg-accent-dark rounded-full py-3 px-8 text-center font-semibold text-white transition-all"
              >
                Confirm Checkout
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    

    @endsection
