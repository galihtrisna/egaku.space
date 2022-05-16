@extends('layouts.app')
@section('title', '- Home')

@section('content')
<main>
      <!-- Hero Slider -->
      <section class="relative h-screen">
        <div class="swiper full-slider h-screen">
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide after:bg-jacarta-900/60 after:absolute after:inset-0">
              <div class="container relative z-10 h-full pt-40">
                <h2 class="font-display text-2xl font-semibold text-white">
                  <a href="{{route('item', ['id'=>19])}}">Television Classic</a>
                </h2>
                <a href="{{route('profile', 2)}}" class="text-2xs font-medium text-white">By Galih Trisna</a>
              </div>
              <img src="{{asset('share_image/1652684555712-post2.png')}}" class="absolute inset-0 h-full w-full object-cover" alt="slide 1" />
            </div>
            <div class="swiper-slide after:bg-jacarta-900/60 after:absolute after:inset-0">
              <div class="container relative z-10 h-full pt-40">
                <h2 class="font-display text-2xl font-semibold text-white">
                  <a href="{{route('item', ['id'=>20])}}">City</a>
                </h2>
                <a href="{{route('profile', 2)}}" class="text-2xs font-medium text-white">By Galih Trisna</a>
              </div>
              <img
                src="{{asset('share_image/1652684989643-post3.png')}}"
                data-src="{{asset('share_image/1652684989643-post3.png')}}"
                class="swiper-lazy absolute inset-0 h-full w-full object-cover"
                alt="slide 2"
              />
              <div class="swiper-lazy-preloader"></div>
            </div>
            <div class="swiper-slide after:bg-jacarta-900/60 after:absolute after:inset-0">
              <div class="container relative z-10 h-full pt-40">
                <h2 class="font-display text-2xl font-semibold text-white">
                  <a href="{{route('item', ['id'=>22])}}">Radio Classic</a>
                </h2>
                <a href="{{route('profile', 2)}}" class="text-2xs font-medium text-white">Galih Trisna</a>
              </div>
              <img
                src="{{asset('share_image/1652687504293-radio.png')}}"
                data-src="{{asset('share_image/1652687504293-radio.png')}}"
                class="swiper-lazy absolute inset-0 h-full w-full object-cover"
                alt="slide 3"
              />
              <div class="swiper-lazy-preloader"></div>
            </div>
            <div class="swiper-slide after:bg-jacarta-900/60 after:absolute after:inset-0">
              <div class="container relative z-10 h-full pt-40">
                <h2 class="font-display text-2xl font-semibold text-white">
                  <a href="{{route('item', ['id'=>23])}}">Minimalist House</a>
                </h2>
                <a href="{{route('profile', 2)}}" class="text-2xs font-medium text-white">Galih Trisna</a>
              </div>
              <img
                src="{{asset('share_image/1652687749186-post5.png')}}"
                data-src="{{asset('share_image/1652687749186-post5.png')}}"
                class="swiper-lazy absolute inset-0 h-full w-full object-cover"
                alt="slide 4"
              />
              <div class="swiper-lazy-preloader"></div>
            </div>
          </div>
        </div>
        <!-- end main slider -->

        <!-- Thumbs -->
        <div class="absolute inset-x-0 bottom-12">
          <div class="container">
            <div class="swiper full-slider-thumbs">
              <div class="swiper-wrapper">
                <div class="swiper-slide cursor-pointer rounded p-5">
                  <img src="{{asset('share_image/1652684555712-post2.png')}}" class="w-full rounded-lg" alt="thumb 1" />
                  <div class="carousel-progress relative -bottom-5 z-10 -ml-5 -mr-5 h-0.5 bg-white/20">
                    <div class="progress bg-accent absolute h-0.5 w-0"></div>
                  </div>
                </div>
                <div class="swiper-slide cursor-pointer rounded p-5">
                  <img src="{{asset('share_image/1652684989643-post3.png')}}" class="w-full rounded-lg" alt="thumb 2" />
                  <div class="carousel-progress relative -bottom-5 z-10 -ml-5 -mr-5 h-0.5 bg-white/20">
                    <div class="progress bg-accent absolute h-0.5 w-0"></div>
                  </div>
                </div>
                <div class="swiper-slide cursor-pointer rounded p-5">
                  <img src="{{asset('share_image/1652687504293-radio.png')}}" class="w-full rounded-lg" alt="thumb 3" />
                  <div class="carousel-progress relative -bottom-5 z-10 -ml-5 -mr-5 h-0.5 bg-white/20">
                    <div class="progress bg-accent absolute h-0.5 w-0"></div>
                  </div>
                </div>
                <div class="swiper-slide cursor-pointer rounded p-5">
                  <img src="{{asset('share_image/1652687749186-post5.png')}}" class="w-full rounded-lg" alt="thumb 4" />
                  <div class="carousel-progress relative -bottom-5 z-10 -ml-5 -mr-5 h-0.5 bg-white/20">
                    <div class="progress bg-accent absolute h-0.5 w-0"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end thumbs slider -->
      </section>
      <!-- end hero slider -->

      

      <!-- Hot Bids -->
      <section class="relative py-24">
        <picture class="pointer-events-none absolute inset-0 -z-10 dark:hidden">
          <img src="img/gradient_light.jpg" alt="gradient" class="h-full w-full" />
        </picture>
        <div class="container">
          <h2 class="font-display text-jacarta-700 mb-8 text-center text-3xl dark:text-white">
            <span
              class="mr-1 inline-block h-6 w-6 bg-contain bg-center text-xl"
              style="
                background-image: url(https://cdn.jsdelivr.net/npm/emoji-datasource-apple@7.0.2/img/apple/64/1f525.png);
              "
            ></span>
            Most Downloaded
          </h2>

          <div class="relative">
            <!-- Slider -->
            <div class="swiper card-slider-4-columns !py-5">
              <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach($post as $popular => $value)
                <div class="swiper-slide">
                  <article>
                    <div
                      class="dark:bg-jacarta-700 dark:border-jacarta-700 border-jacarta-100 block rounded-[1.25rem] border bg-white p-[1.1875rem] transition-shadow hover:shadow-lg"
                    >
                      <figure>
                        <a href="{{route('item', ['id'=>$value])}}">
                          <img
                            src="{{asset('share_image/'.$value->file)}}"
                            alt="{{$value->Name}} - {{$value->Description}}"
                            style="width: 230px; height: 230px; object-fit: contain;"
                            class="w-full rounded-[0.625rem]"
                            loading="lazy"
                          />
                        </a>
                      </figure>
                      <div class="mt-4 flex items-center justify-between">
                        <a href="{{route('item', ['id'=>$value])}}">
                          <span class="font-display text-jacarta-700 hover:text-accent text-base dark:text-white"
                            >{{$value->Name}}</span
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
                          {{$value->Name_of_user}}
                        </button>
                      </div>
                    </div>
                  </article>
                </div>
                @endforeach
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

      
      <!-- end today's drops / sellers / buyers -->

      <!-- Featured collections -->
      <!-- end featured collections -->

      <!-- Process / Newsletter -->
      <section class="dark:bg-jacarta-800 relative py-24">
        <div class="container">
          <h2 class="font-display text-jacarta-700 mb-16 text-center text-3xl dark:text-white">
            Explore and Share Ideas
          </h2>
          
          <p class="text-jacarta-700 mx-auto mt-20 max-w-2xl text-center text-lg dark:text-white">
            Join our mailing list to stay in the loop with our newest feature releases and tips and tricks
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


@endsection
