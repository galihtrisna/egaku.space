@extends('layouts.app')
@section('title', '- Item ') 
@section('content')
<main class="mt-24">
      <!-- Item -->
      <section class="relative pt-12 pb-24 lg:py-24">
        <picture class="pointer-events-none absolute inset-0 -z-10 dark:hidden">
          <img src="img/gradient_light.jpg" alt="gradient" class="h-full" />
        </picture>
        <div class="container">
          <!-- Item -->
          <div class="md:flex md:flex-wrap">
            <!-- Image -->
            <figure class="mb-8 md:w-2/5 md:flex-shrink-0 md:flex-grow-0 md:basis-auto lg:w-1/2">
              <img
                src="{{asset('share_image/'.$data->file)}}"
                alt="{{$data->Name}} - {{$data->Description}}"
                class="cursor-pointer rounded-[1.25rem]"
                data-bs-toggle="modal"
                data-bs-target="#imageModal"
              />

              <!-- Modal -->
              <div
                class="modal fade"
                id="imageModal"
                tabindex="-1"
                aria-labelledby="buyNowModalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog !my-0 flex h-full items-center justify-center p-4">
                  <img src="{{asset('share_image/'.$data->file)}}" alt="{{$data->Name}}" />
                </div>

                <button
                  type="button"
                  class="btn-close absolute top-6 right-6"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    width="24"
                    height="24"
                    class="h-6 w-6 fill-white"
                  >
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                      d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"
                    />
                  </svg>
                </button>
              </div>
              
              <!-- end modal -->
            </figure>

            <!-- Details -->
            <div class="md:w-3/5 md:basis-auto md:pl-8 lg:w-1/2 lg:pl-[3.75rem]">
              <!-- Collection / Likes / Actions -->
              <div class="mb-3 flex">
                <!-- Collection -->
                <div class="flex items-center">
                  <a href="{{route('profile', $iduser[0]->id)}}" class="text-accent mr-2 text-sm font-bold">{{$data->Name_of_user}}</a>
                  <span
                    class="dark:border-jacarta-600 bg-green inline-flex h-6 w-6 items-center justify-center rounded-full border-2 border-white"
                    data-tippy-content="Verified Account"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="24"
                      height="24"
                      class="h-[.875rem] w-[.875rem] fill-white"
                    >
                      <path fill="none" d="M0 0h24v24H0z"></path>
                      <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                    </svg>
                  </span>
                </div>

                <!-- Likes / Actions -->
                <div class="ml-auto flex space-x-2">
                  

                  <!-- Actions -->
                  <div
                    class="dark:border-jacarta-600 dark:hover:bg-jacarta-600 border-jacarta-100 dropdown hover:bg-jacarta-100 dark:bg-jacarta-700 rounded-xl border bg-white"
                  >
                    <a
                      href="#"
                      class="dropdown-toggle inline-flex h-10 w-10 items-center justify-center text-sm"
                      role="button"
                      id="collectionActions"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      <svg
                        width="16"
                        height="4"
                        viewBox="0 0 16 4"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="dark:fill-jacarta-200 fill-jacarta-500"
                      >
                        <circle cx="2" cy="2" r="2"></circle>
                        <circle cx="8" cy="2" r="2"></circle>
                        <circle cx="14" cy="2" r="2"></circle>
                      </svg>
                    </a>
                    <div
                      class="dropdown-menu dropdown-menu-end dark:bg-jacarta-800 z-10 hidden min-w-[200px] whitespace-nowrap rounded-xl bg-white py-4 px-2 text-left shadow-xl"
                      aria-labelledby="collectionActions"
                    >
                      <input class="mobileShow" type="hidden" name="message" value="{{$data->Name}} by {{$data->Name_of_user}} %0aegaku.space/explore/item/{{$data->id}}">
                      <button onclick="share()" class="dark:hover:bg-jacarta-600 font-display hover:bg-jacarta-50 block w-full rounded-xl px-5 py-2 text-left text-sm transition-colors dark:text-white">Share</button>
                      <a href="mailto:admin@egaku.space">
                        <button
                        class="dark:hover:bg-jacarta-600 font-display hover:bg-jacarta-50 block w-full rounded-xl px-5 py-2 text-left text-sm transition-colors dark:text-white"
                      >
                        Report
                      </button>
                    </a>
                    </div>
                  </div>
                </div>
              </div>

              <h1 class="font-display text-jacarta-700 mb-4 text-4xl font-semibold dark:text-white">{{$data->Name}}</h1>

              <div class="mb-8 flex items-center space-x-4 whitespace-nowrap">
                <div class="flex items-center">
                  <span class="text-green text-sm font-medium tracking-tight">{{$data->Category}}</span>
                </div>
                <span class="dark:text-jacarta-300 text-jacarta-400 text-sm">Published on {{$data->created_at->format('M d, Y')}}</span>
              </div>

              <p class="dark:text-jacarta-300 mb-10">
                {{$data->Description}}
              </p>
              <form action="{{route('download_history_item')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$data->file}}" id="file" name="file" >
                <input type="hidden" value="{{$data->id}}" id="id_image" name="id_image" >
              <input type="hidden" value="{{ Auth::user()->id }}" id="id_user" name="id_user" >
              
              <!-- Bid -->
                <button
                  
                  type="submit"
                  target="_self"
                  type="submit"
                  class="bg-accent shadow-accent-volume hover:bg-accent-dark inline-block w-full rounded-full py-3 px-8 text-center font-semibold text-white transition-all"
                  >Download</
                >
              </form>
              
              <!-- end bid -->
            </div>
            <!-- end details -->
          </div>

          <!-- Tabs -->
          <div class="scrollbar-custom mt-14 overflow-x-auto rounded-lg">
            <div class="min-w-fit">
              <!-- Tabs Nav -->
              <ul class="nav nav-tabs flex items-center" role="tablist">
                <!-- Offers -->
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link active hover:text-jacarta-700 text-jacarta-400 relative flex items-center whitespace-nowrap py-3 px-6 dark:hover:text-white"
                    id="offers-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#offers"
                    type="button"
                    role="tab"
                    aria-controls="offers"
                    aria-selected="true"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="24"
                      height="24"
                      class="mr-1 h-5 w-5 fill-current"
                    >
                      <path fill="none" d="M0 0H24V24H0z" />
                      <path
                        d="M5 3v16h16v2H3V3h2zm15.293 3.293l1.414 1.414L16 13.414l-3-2.999-4.293 4.292-1.414-1.414L13 7.586l3 2.999 4.293-4.292z"
                      />
                    </svg>
                    <span class="font-display text-base font-medium">Download History</span>
                  </button>
                </li>

                
              </ul>

              <!-- Tab Content -->
              <div class="tab-content">
                <!-- Offers -->
                <div class="tab-pane fade show active" id="offers" role="tabpanel" aria-labelledby="offers-tab">
                  <div
                    role="table"
                    class="scrollbar-custom dark:bg-jacarta-700 dark:border-jacarta-600 border-jacarta-100 grid max-h-72 w-full grid-cols-2 overflow-y-auto rounded-lg rounded-tl-none border bg-white text-sm dark:text-white"
                  >
                    <div class="contents" role="row">
                      
                      <div class="dark:bg-jacarta-600 bg-light-base sticky top-0 py-2 px-4" role="columnheader">
                        <span class="text-jacarta-700 dark:text-jacarta-100 w-full overflow-hidden text-ellipsis"
                          >Time</span
                        >
                      </div>
                      <div class="dark:bg-jacarta-600 bg-light-base sticky top-0 py-2 px-4" role="columnheader">
                        <span class="text-jacarta-700 dark:text-jacarta-100 w-full overflow-hidden text-ellipsis"
                          >Name</span
                        >
                      </div>
                    </div>
                    
                    @foreach($history as $item => $riwayat)
                    <div class="contents" role="row">
                     
                      <div
                        class="dark:border-jacarta-600 border-jacarta-100 flex items-center border-t py-4 px-4"
                        role="cell"
                      >
                      {{$riwayat->created_at->format('M d, Y')}}
                      </div>
                      <div
                        class="dark:border-jacarta-600 border-jacarta-100 flex items-center border-t py-4 px-4"
                        role="cell"
                      >
                        <a href="#" class="text-accent">{{$riwayat->name}}</a>
                      </div>
                      
                    </div>
                    @endforeach
                  </div>
                </div>

              </div>
              <!-- end tab content -->
            </div>
          </div>
          <!-- end tabs -->
        </div>
      </section>
      <!-- end item -->

      <!-- Related -->
      <section class="dark:bg-jacarta-800 bg-light-base py-24">
        <div class="container">
          <h2 class="font-display text-jacarta-700 mb-8 text-center text-3xl dark:text-white">
            More from {{$data->Name_of_user}}
          </h2>
          <input
          name="Email_of_user"
            type="hidden"
            value="{{$data->Email_of_user}}"
          />
          <div class="relative">
            <!-- Slider -->
            <div class="swiper card-slider-4-columns !py-5">
              <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach($itemuser as $item => $value)
                <div class="swiper-slide">
                  <article>
                    <div
                      class="dark:bg-jacarta-700 dark:border-jacarta-700 border-jacarta-100 block rounded-[1.25rem] border bg-white p-[1.1875rem] transition-shadow hover:shadow-lg"
                    >
                      <figure>
                        <a href="{{route('item', ['id'=>$value], ['Email_of_user'=>$value])}}">
                          <img
                            src="{{asset('share_image/'.$value->file)}}"
                            alt="{{$value->Name}} - {{$value->Description}}"
                            width="230"
                            height="230"
                            style="width: 230px; height: 230px; object-fit: contain;"
                            class="w-full rounded-[0.625rem]"
                            loading="lazy"
                          />
                        </a>
                      </figure>
                      <div class="mt-4 flex items-center justify-between">
                        <a href="item.html">
                          <span class="font-display text-jacarta-700 hover:text-accent text-base dark:text-white"
                            >{{$value->Name}}</span
                          >
                        </a>
                      </div>
                      <div class="mt-2 text-sm">
                        <span class="dark:text-jacarta-300">Published on </span>
                        <span class="dark:text-jacarta-100 text-jacarta-700">{{$value->created_at->format('M d, Y')}}</span>
                      </div>

                      <div class="mt-8 flex items-center justify-between">
                        <a
                          class="text-accent font-display text-sm font-semibold"
                          href="{{route('item', ['id'=>$value], ['Email_of_user'=>$value])}}"
                        >
                          Detail
                        </a>
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
      <!-- end related -->
    </main>
    <script type="text/javascript">
          
        // Function to share on whatsapp
        function share() {
  
            // Getting user input
            var message = $("input[name=message]").val();
  
            // Opening URL
            window.open(
                "whatsapp://send?text=" + message,
  
                // This is what makes it 
                // open in a new window.
                '_blank' 
            );
        }
    </script>
@endsection