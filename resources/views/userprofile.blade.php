@extends('layouts.app')
@section('title', '- Profile')


    <main class="pt-[5.5rem] lg:pt-24">
      <!-- Banner -->
      <div class="relative">
        <img src="{{asset('img/user/banner.jpg')}}" alt="banner" class="h-[18.75rem] object-cover" />
      </div>
      <!-- end banner -->

      <!-- Profile -->
      <section class="dark:bg-jacarta-800 bg-light-base relative pb-12 pt-28">
        <!-- Avatar -->
        <div class="absolute left-1/2 top-0 z-10 flex -translate-x-1/2 -translate-y-1/2 items-center justify-center">
          <figure class="relative">
            <img
              src="{{asset('img/user/user_avatar.gif')}}"
              alt="collection avatar"
              class="dark:border-jacarta-600 rounded-xl border-[5px] border-white"
            />
            <div
              class="dark:border-jacarta-600 bg-green absolute -right-3 bottom-0 flex h-6 w-6 items-center justify-center rounded-full border-2 border-white"
              data-tippy-content="Verified Collection"
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
            </div>
          </figure>
        </div>

        <div class="container">
          <div class="text-center">
            <h2 class="font-display text-jacarta-700 mb-2 text-4xl font-medium dark:text-white">{{$value->name}}</h2>
            <div
              class="dark:bg-jacarta-700 dark:border-jacarta-600 border-jacarta-100 mb-8 inline-flex items-center justify-center rounded-full border bg-white py-1.5 px-4"
            >
              <a
                class="js-copy-clipboard dark:text-jacarta-200  select-none overflow-hidden text-ellipsis whitespace-nowrap"
                data-tippy-content="Copy"
                href="mailto:{{$value->email}}"
              >
                <span>{{$value->email}}</span>
              </a>
            </div>

            <p class="dark:text-jacarta-300 mx-auto mb-2 max-w-xl text-lg">
              I make art with the simple goal of giving you something pleasing to look at for a few seconds.
            </p>
            <span class="text-jacarta-400">Joined {{$value->created_at->format('M  Y')}}</span>

            <div class="mt-6 flex items-center justify-center space-x-2.5">
              
              <div
                class="dark:border-jacarta-600 dark:hover:bg-jacarta-600 border-jacarta-100 dropdown hover:bg-jacarta-100 dark:bg-jacarta-700 rounded-xl border bg-white"
              >
                <a
                  href="#"
                  class="dropdown-toggle inline-flex h-10 w-10 items-center justify-center text-sm"
                  role="button"
                  id="collectionShare"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  data-tippy-content="Share"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    width="24"
                    height="24"
                    class="dark:fill-jacarta-200 fill-jacarta-500 h-4 w-4"
                  >
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                      d="M13.576 17.271l-5.11-2.787a3.5 3.5 0 1 1 0-4.968l5.11-2.787a3.5 3.5 0 1 1 .958 1.755l-5.11 2.787a3.514 3.514 0 0 1 0 1.458l5.11 2.787a3.5 3.5 0 1 1-.958 1.755z"
                    />
                  </svg>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-end dark:bg-jacarta-800 z-10 hidden min-w-[200px] whitespace-nowrap rounded-xl bg-white py-4 px-2 text-left shadow-xl"
                  aria-labelledby="collectionShare"
                >
                  <a
                    href="#"
                    class="dark:hover:bg-jacarta-600 font-display hover:bg-jacarta-50 flex w-full items-center rounded-xl px-5 py-2 text-left text-sm transition-colors dark:text-white"
                  >
                    <svg
                      aria-hidden="true"
                      focusable="false"
                      data-prefix="fab"
                      data-icon="facebook"
                      class="group-hover:fill-accent fill-jacarta-300 mr-2 h-4 w-4 dark:group-hover:fill-white"
                      role="img"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512"
                    >
                      <path
                        d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"
                      ></path>
                    </svg>
                    <span class="mt-1 inline-block">Facebook</span>
                  </a>
                  <a
                    href="#"
                    class="dark:hover:bg-jacarta-600 font-display hover:bg-jacarta-50 flex w-full items-center rounded-xl px-5 py-2 text-left text-sm transition-colors dark:text-white"
                  >
                    <svg
                      aria-hidden="true"
                      focusable="false"
                      data-prefix="fab"
                      data-icon="twitter"
                      class="group-hover:fill-accent fill-jacarta-300 mr-2 h-4 w-4 dark:group-hover:fill-white"
                      role="img"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512"
                    >
                      <path
                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                      ></path>
                    </svg>
                    <span class="mt-1 inline-block">Twitter</span>
                  </a>
                  <a
                    href="#"
                    class="dark:hover:bg-jacarta-600 font-display hover:bg-jacarta-50 flex w-full items-center rounded-xl px-5 py-2 text-left text-sm transition-colors dark:text-white"
                  >
                    <svg
                      aria-hidden="true"
                      focusable="false"
                      data-prefix="fab"
                      data-icon="discord"
                      class="group-hover:fill-accent fill-jacarta-300 mr-2 h-4 w-4 dark:group-hover:fill-white"
                      role="img"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 640 512"
                    >
                      <path
                        d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z"
                      ></path>
                    </svg>
                    <span class="mt-1 inline-block">Discord</span>
                  </a>
                  <a
                    href="#"
                    class="dark:hover:bg-jacarta-600 font-display hover:bg-jacarta-50 flex w-full items-center rounded-xl px-5 py-2 text-left text-sm transition-colors dark:text-white"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="24"
                      height="24"
                      class="group-hover:fill-accent fill-jacarta-300 mr-2 h-4 w-4 dark:group-hover:fill-white"
                    >
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path
                        d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm9.06 8.683L5.648 6.238 4.353 7.762l7.72 6.555 7.581-6.56-1.308-1.513-6.285 5.439z"
                      />
                    </svg>
                    <span class="mt-1 inline-block">Email</span>
                  </a>
                  <a
                    href="#"
                    class="dark:hover:bg-jacarta-600 font-display hover:bg-jacarta-50 flex w-full items-center rounded-xl px-5 py-2 text-left text-sm transition-colors dark:text-white"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="24"
                      height="24"
                      class="group-hover:fill-accent fill-jacarta-300 mr-2 h-4 w-4 dark:group-hover:fill-white"
                    >
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path
                        d="M18.364 15.536L16.95 14.12l1.414-1.414a5 5 0 1 0-7.071-7.071L9.879 7.05 8.464 5.636 9.88 4.222a7 7 0 0 1 9.9 9.9l-1.415 1.414zm-2.828 2.828l-1.415 1.414a7 7 0 0 1-9.9-9.9l1.415-1.414L7.05 9.88l-1.414 1.414a5 5 0 1 0 7.071 7.071l1.414-1.414 1.415 1.414zm-.708-10.607l1.415 1.415-7.071 7.07-1.415-1.414 7.071-7.07z"
                      />
                    </svg>
                    <span class="mt-1 inline-block">Copy</span>
                  </a>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>
      <!-- end profile -->

      <!-- Collection -->
      <section class="relative py-24 pt-20">
        <picture class="pointer-events-none absolute inset-0 -z-10 dark:hidden">
          <img src="{{asset('img/gradient_light.jpg')}}" alt="gradient" class="h-full w-full" />
        </picture>
        <div class="container">
          <!-- Tabs Nav -->
          <ul
            class="nav nav-tabs scrollbar-custom dark:border-jacarta-600 border-jacarta-100 mb-12 flex items-center justify-start overflow-x-auto overflow-y-hidden border-b pb-px md:justify-center"
            role="tablist"
          >
            <li class="nav-item" role="presentation">
              <button
                class="nav-link hover:text-jacarta-700 text-jacarta-400 relative flex items-center whitespace-nowrap py-3 px-6 dark:hover:text-white"
                id="collections-tab"
                data-bs-toggle="tab"
                data-bs-target="#collections"
                type="button"
                role="tab"
                aria-controls="collections"
                aria-selected="false"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="24"
                  height="24"
                  class="mr-1 h-5 w-5 fill-current"
                >
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M10.9 2.1l9.899 1.415 1.414 9.9-9.192 9.192a1 1 0 0 1-1.414 0l-9.9-9.9a1 1 0 0 1 0-1.414L10.9 2.1zm.707 2.122L3.828 12l8.486 8.485 7.778-7.778-1.06-7.425-7.425-1.06zm2.12 6.364a2 2 0 1 1 2.83-2.829 2 2 0 0 1-2.83 2.829z"
                  />
                </svg>
                <span class="font-display text-base font-medium">Collections</span>
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link hover:text-jacarta-700 text-jacarta-400 relative flex items-center whitespace-nowrap py-3 px-6 dark:hover:text-white"
                id="activity-tab"
                data-bs-toggle="tab"
                data-bs-target="#activity"
                type="button"
                role="tab"
                aria-controls="activity"
                aria-selected="false"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="24"
                  height="24"
                  class="mr-1 h-5 w-5 fill-current"
                >
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M11.95 7.95l-1.414 1.414L8 6.828 8 20H6V6.828L3.465 9.364 2.05 7.95 7 3l4.95 4.95zm10 8.1L17 21l-4.95-4.95 1.414-1.414 2.537 2.536L16 4h2v13.172l2.536-2.536 1.414 1.414z"
                  />
                </svg>
                <span class="font-display text-base font-medium">Activity Download</span>
              </button>
            </li>
          </ul>

          <div class="tab-content">
            <!-- On Sale Tab -->
            <div class="tab-pane fade show active" id="collections" role="tabpanel" aria-labelledby="collections-tab">
              <!-- Filters -->
              <div class="mb-8 flex flex-wrap items-center justify-between">
                <div class="flex flex-wrap items-center">
                  <!-- Category -->
                  <div class="my-1 mr-2.5">
                    <button
                      class="group dropdown-toggle dark:border-jacarta-600 dark:bg-jacarta-700 group dark:hover:bg-accent hover:bg-accent border-jacarta-100 font-display text-jacarta-700 flex h-9 items-center rounded-lg border bg-white px-4 text-sm font-semibold transition-colors hover:border-transparent hover:text-white dark:text-white"
                      id="onSaleCategoriesFilter"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        width="24"
                        height="24"
                        class="fill-jacarta-700 dark:fill-jacarta-100 mr-1 h-4 w-4 transition-colors group-hover:fill-white"
                      >
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                          d="M14 10v4h-4v-4h4zm2 0h5v4h-5v-4zm-2 11h-4v-5h4v5zm2 0v-5h5v4a1 1 0 0 1-1 1h-4zM14 3v5h-4V3h4zm2 0h4a1 1 0 0 1 1 1v4h-5V3zm-8 7v4H3v-4h5zm0 11H4a1 1 0 0 1-1-1v-4h5v5zM8 3v5H3V4a1 1 0 0 1 1-1h4z"
                        />
                      </svg>
                      <span>Category</span>
                    </button>
                    <div
                      class="dropdown-menu dark:bg-jacarta-800 z-10 hidden min-w-[220px] whitespace-nowrap rounded-xl bg-white py-4 px-2 text-left shadow-xl"
                      aria-labelledby="onSaleCategoriesFilter"
                    >
                      <ul class="flex flex-col flex-wrap">
                        <li>
                          <a
                            href="#"
                            class="dropdown-item font-display dark:hover:bg-jacarta-600 hover:bg-jacarta-50 flex w-full items-center justify-between rounded-xl px-5 py-2 text-left text-sm transition-colors dark:text-white"
                          >
                            <span class="text-jacarta-700 dark:text-white">All</span>
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 24 24"
                              width="24"
                              height="24"
                              class="fill-accent mb-[3px] h-4 w-4"
                            >
                              <path fill="none" d="M0 0h24v24H0z"></path>
                              <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                            </svg>
                          </a>
                        </li>
                        <li>
                          <a
                            href="#"
                            class="dropdown-item font-display dark:hover:bg-jacarta-600 hover:bg-jacarta-50 flex w-full items-center rounded-xl px-5 py-2 text-left text-sm transition-colors dark:text-white"
                          >
                            Art
                          </a>
                        </li>
                        <li>
                          <a
                            href="#"
                            class="dropdown-item font-display dark:hover:bg-jacarta-600 hover:bg-jacarta-50 flex w-full items-center rounded-xl px-5 py-2 text-left text-sm transition-colors dark:text-white"
                          >
                            Collectibles
                          </a>
                        </li>
                        <li>
                          <a
                            href="#"
                            class="dropdown-item font-display dark:hover:bg-jacarta-600 hover:bg-jacarta-50 flex w-full items-center rounded-xl px-5 py-2 text-left text-sm transition-colors dark:text-white"
                          >
                            Domain
                          </a>
                        </li>
                        <li>
                          <a
                            href="#"
                            class="dropdown-item font-display dark:hover:bg-jacarta-600 hover:bg-jacarta-50 flex w-full items-center rounded-xl px-5 py-2 text-left text-sm transition-colors dark:text-white"
                          >
                            Music
                          </a>
                        </li>
                        <li>
                          <a
                            href="#"
                            class="dropdown-item font-display dark:hover:bg-jacarta-600 hover:bg-jacarta-50 flex w-full items-center rounded-xl px-5 py-2 text-left text-sm transition-colors dark:text-white"
                          >
                            Photography
                          </a>
                        </li>
                        <li>
                          <a
                            href="#"
                            class="dropdown-item font-display dark:hover:bg-jacarta-600 hover:bg-jacarta-50 flex w-full items-center rounded-xl px-5 py-2 text-left text-sm transition-colors dark:text-white"
                          >
                            Virtual World
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <!-- Price Range -->
                </div>
              </div>
              <!-- end filters -->

              <!-- Grid -->
              <div class="grid grid-cols-1 gap-[1.875rem] md:grid-cols-2 lg:grid-cols-4">
                  @foreach($data as $myprofile => $value)
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
                        <a href="{{route('item', ['id'=>$value], ['Email_of_user'=>$value])}}">
                          <span class="font-display text-jacarta-700 hover:text-accent text-base dark:text-white"
                            >{{$value->Name}}</span
                          >
                        </a>
                        <div class="dark:hover:bg-jacarta-600 dropup hover:bg-jacarta-100 rounded-full">
                        <a href="#" class="dropdown-toggle inline-flex h-8 w-8 items-center justify-center text-sm" role="button" id="itemActions2" data-bs-toggle="dropdown" aria-expanded="false">
                          <svg width="16" height="4" viewBox="0 0 16 4" fill="none" xmlns="http://www.w3.org/2000/svg" class="dark:fill-jacarta-200 fill-jacarta-500">
                            <circle cx="2" cy="2" r="2"></circle>
                            <circle cx="8" cy="2" r="2"></circle>
                            <circle cx="14" cy="2" r="2"></circle>
                          </svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dark:bg-jacarta-800 z-10 hidden min-w-[200px] whitespace-nowrap rounded-xl bg-white py-4 px-2 text-left shadow-xl" aria-labelledby="itemActions2">
                        
                          <a href="{{route('edititem', ['id'=>$value])}}">
                          <button class="dark:hover:bg-jacarta-600 font-display hover:bg-jacarta-50 block w-full rounded-xl px-5 py-2 text-left text-sm transition-colors dark:text-white">
                            Edit
                          </button></a>
                          <a href="{{route('delete', ['id'=>$value])}}">
                          <button class="dark:hover:bg-jacarta-600 font-display hover:bg-jacarta-50 block w-full rounded-xl px-5 py-2 text-left text-sm transition-colors dark:text-white">
                            Delete
                          </button>
                        </a>
                        </div>
                      </div>
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
                  @endforeach
              </div>
              <!-- end grid -->
            </div>
            <!-- end on sale tab -->

            <!-- Activity Tab -->
            <div class="tab-pane fade" id="activity" role="tabpanel" aria-labelledby="activity-tab">
              <!-- Records / Filter -->
              <div class="lg:flex">
                <!-- Records -->
                <div class="mb-10 shrink-0 basis-8/12 space-y-5 lg:mb-0 lg:pr-10">
                    @foreach($history as $myprofile => $riwayat)
                  <a
                    href="{{route('item', ['id'=>$riwayat])}}"
                    class="dark:bg-jacarta-700 dark:border-jacarta-700 border-jacarta-100 relative flex items-center rounded-[1.25rem] border bg-white p-8 transition-shadow hover:shadow-lg"
                  >
                    <figure class="mr-5 self-start">
                      <img src="{{asset('share_image/'.$riwayat->file)}}"
                      alt="{{$riwayat->Name}} - {{$riwayat->Description}}"
                      width="50"
                      height="50"
                      style="width: 50px; height: 50px; object-fit: contain;"
                      class="w-full rounded-[0.625rem]"
                      loading="lazy" />
                    </figure>

                    <div>
                      <h3 class="font-display text-jacarta-700 mb-1 text-base font-semibold dark:text-white">
                        {{$riwayat->Name}}
                      </h3>
                      <span class="text-jacarta-500 mb-3 block text-sm">{{$riwayat->Name_of_user}}</span>
                      <span class="text-jacarta-300 block text-xs">{{$riwayat->created_at}}</span>
                    </div>

                    <div class="dark:border-jacarta-600 border-jacarta-100 ml-auto rounded-full border p-3">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="fill-jacarta-700 dark:fill-white">
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path d="M16.05 12.05L21 17l-4.95 4.95-1.414-1.414 2.536-2.537L4 18v-2h13.172l-2.536-2.536 1.414-1.414zm-8.1-10l1.414 1.414L6.828 6 20 6v2H6.828l2.536 2.536L7.95 11.95 3 7l4.95-4.95z"></path>
                      </svg>
                    </div>
                  </a>
                  @endforeach
                </div>

                <!-- Filters -->
                <aside class="basis-4/12 lg:pl-5">
                  <form action="search" class="relative mb-12 block">
                    <input
                      type="search"
                      class="text-jacarta-700 placeholder-jacarta-500 focus:ring-accent border-jacarta-100 w-full rounded-2xl border py-[0.6875rem] px-4 pl-10 dark:border-transparent dark:bg-white/[.15] dark:text-white dark:placeholder-white"
                      placeholder="Search"
                    />
                    <span class="absolute left-0 top-0 flex h-full w-12 items-center justify-center rounded-2xl">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        width="24"
                        height="24"
                        class="fill-jacarta-500 h-4 w-4 dark:fill-white"
                      >
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path
                          d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z"
                        ></path>
                      </svg>
                    </span>
                  </form>

                  <h3 class="font-display text-jacarta-500 mb-4 font-semibold dark:text-white">Filters</h3>
                  <div class="flex flex-wrap">
                    <button
                      class="dark:border-jacarta-600 dark:bg-jacarta-700 group dark:hover:bg-accent hover:bg-accent border-jacarta-100 mr-2.5 mb-2.5 inline-flex items-center rounded-xl border bg-white px-4 py-3 hover:border-transparent hover:text-white dark:text-white dark:hover:border-transparent"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        width="24"
                        height="24"
                        class="mr-2 h-4 w-4 group-hover:fill-white dark:fill-white"
                      >
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                          d="M10.9 2.1l9.899 1.415 1.414 9.9-9.192 9.192a1 1 0 0 1-1.414 0l-9.9-9.9a1 1 0 0 1 0-1.414L10.9 2.1zm.707 2.122L3.828 12l8.486 8.485 7.778-7.778-1.06-7.425-7.425-1.06zm2.12 6.364a2 2 0 1 1 2.83-2.829 2 2 0 0 1-2.83 2.829z"
                        />
                      </svg>
                      <span class="text-2xs font-medium">Listing</span>
                    </button>
                    <button
                      class="dark:border-jacarta-600 dark:bg-jacarta-700 group dark:hover:bg-accent hover:bg-accent border-jacarta-100 mr-2.5 mb-2.5 inline-flex items-center rounded-xl border bg-white px-4 py-3 hover:border-transparent hover:text-white dark:text-white dark:hover:border-transparent"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        width="24"
                        height="24"
                        class="mr-2 h-4 w-4 group-hover:fill-white dark:fill-white"
                      >
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                          d="M14 20v2H2v-2h12zM14.586.686l7.778 7.778L20.95 9.88l-1.06-.354L17.413 12l5.657 5.657-1.414 1.414L16 13.414l-2.404 2.404.283 1.132-1.415 1.414-7.778-7.778 1.415-1.414 1.13.282 6.294-6.293-.353-1.06L14.586.686zm.707 3.536l-7.071 7.07 3.535 3.536 7.071-7.07-3.535-3.536z"
                        />
                      </svg>
                      <span class="text-2xs font-medium">Bids</span>
                    </button>
                    <button
                      class="dark:border-jacarta-600 dark:bg-jacarta-700 group dark:hover:bg-accent hover:bg-accent border-jacarta-100 mr-2.5 mb-2.5 inline-flex items-center rounded-xl border bg-white px-4 py-3 hover:border-transparent hover:text-white dark:text-white dark:hover:border-transparent"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        width="24"
                        height="24"
                        class="mr-2 h-4 w-4 group-hover:fill-white dark:fill-white"
                      >
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                          d="M16.05 12.05L21 17l-4.95 4.95-1.414-1.414 2.536-2.537L4 18v-2h13.172l-2.536-2.536 1.414-1.414zm-8.1-10l1.414 1.414L6.828 6 20 6v2H6.828l2.536 2.536L7.95 11.95 3 7l4.95-4.95z"
                        />
                      </svg>
                      <span class="text-2xs font-medium">Transfer</span>
                    </button>
                    <button
                      class="dark:border-jacarta-600 dark:bg-jacarta-700 group dark:hover:bg-accent hover:bg-accent border-jacarta-100 mr-2.5 mb-2.5 inline-flex items-center rounded-xl border bg-white px-4 py-3 hover:border-transparent hover:text-white dark:text-white dark:hover:border-transparent"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        width="24"
                        height="24"
                        class="mr-2 h-4 w-4 group-hover:fill-white dark:fill-white"
                      >
                        <path fill="none" d="M0 0H24V24H0z" />
                        <path
                          d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z"
                        />
                      </svg>
                      <span class="text-2xs font-medium">Likes</span>
                    </button>
                    <button
                      class="dark:border-jacarta-600 dark:bg-jacarta-700 group dark:hover:bg-accent hover:bg-accent border-jacarta-100 mr-2.5 mb-2.5 inline-flex items-center rounded-xl border bg-white px-4 py-3 hover:border-transparent hover:text-white dark:text-white dark:hover:border-transparent"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        width="24"
                        height="24"
                        class="mr-2 h-4 w-4 group-hover:fill-white dark:fill-white"
                      >
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                          d="M6.5 2h11a1 1 0 0 1 .8.4L21 6v15a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6l2.7-3.6a1 1 0 0 1 .8-.4zM19 8H5v12h14V8zm-.5-2L17 4H7L5.5 6h13zM9 10v2a3 3 0 0 0 6 0v-2h2v2a5 5 0 0 1-10 0v-2h2z"
                        />
                      </svg>
                      <span class="text-2xs font-medium">Purchases</span>
                    </button>
                  </div>
                </aside>
              </div>
            </div>
            <!-- end activity tab -->
          </div>
        </div>
      </section>
      <!-- end collection -->
    </main>


@section('content')
@endsection