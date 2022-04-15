@extends('layouts.app')
@section('title', '- Create')
@section('content')
<main>
    <!-- Create -->
      <section class="relative py-24">
        <picture class="pointer-events-none absolute inset-0 -z-10 dark:hidden">
          <img src="img/gradient_light.jpg" alt="gradient" class="h-full w-full" />
        </picture>
        <div class="container">
          <h1 class="font-display text-jacarta-700 py-16 text-center text-4xl font-medium dark:text-white">Create</h1>

          <form class="mx-auto max-w-[48.125rem]" action="{{route('simpanshare')}}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- File Upload -->
            <div class="mb-6">
              <label class="font-display text-jacarta-700 mb-2 block dark:text-white"
                >Image<span class="text-red">*</span></label
              >
              <p class="dark:text-jacarta-300 text-2xs mb-3">Drag or choose your file to upload</p>

              <div
                class="dark:bg-jacarta-700 dark:border-jacarta-600 border-jacarta-100 group relative flex max-w-md flex-col items-center justify-center rounded-lg border-2 border-dashed bg-white py-20 px-5 text-center"
              >
                <div class="relative z-10 cursor-pointer">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    width="24"
                    height="24"
                    class="fill-jacarta-500 mb-4 inline-block dark:fill-white"
                  >
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                      d="M16 13l6.964 4.062-2.973.85 2.125 3.681-1.732 1-2.125-3.68-2.223 2.15L16 13zm-2-7h2v2h5a1 1 0 0 1 1 1v4h-2v-3H10v10h4v2H9a1 1 0 0 1-1-1v-5H6v-2h2V9a1 1 0 0 1 1-1h5V6zM4 14v2H2v-2h2zm0-4v2H2v-2h2zm0-4v2H2V6h2zm0-4v2H2V2h2zm4 0v2H6V2h2zm4 0v2h-2V2h2zm4 0v2h-2V2h2z"
                    />
                  </svg>
                  <p class="dark:text-jacarta-300 mx-auto max-w-xs text-xs">
                    JPG, PNG, GIF, SVG, Max size: 10 MB
                  </p>
                </div>
                <div
                  class="dark:bg-jacarta-600 bg-jacarta-50 absolute inset-4 cursor-pointer rounded opacity-0 group-hover:opacity-100"
                ></div>
                <input
                  type="file"
                  accept="image/*"
                  id="file"
                  name="file"
                  required
                  class="absolute inset-0 z-20 cursor-pointer opacity-0"
                />
              </div>
            </div>

            <!-- Name -->
            <div class="mb-6">
              <label for="item-name" class="font-display text-jacarta-700 mb-2 block dark:text-white"
                >Name<span class="text-red">*</span></label
              >
              <input
                type="text"
                id="name"
                class="dark:bg-jacarta-700 border-jacarta-100 hover:ring-accent/10 focus:ring-accent dark:border-jacarta-600 dark:placeholder:text-jacarta-300 w-full rounded-lg py-3 hover:ring-2 dark:text-white"
                placeholder="Item name"
                name="name"
                required
              />
            </div>

            

            <!-- Description -->
            <div class="mb-6">
              <label for="item-description" class="font-display text-jacarta-700 mb-2 block dark:text-white"
                >Description</label
              >
              <p class="dark:text-jacarta-300 text-2xs mb-3">
                The description will be included on the item's detail page underneath its image. Markdown syntax is
                supported.
              </p>
              <textarea
                id="description"
                name="description"
                class="dark:bg-jacarta-700 border-jacarta-100 hover:ring-accent/10 focus:ring-accent dark:border-jacarta-600 dark:placeholder:text-jacarta-300 w-full rounded-lg py-3 hover:ring-2 dark:text-white"
                rows="4"
                required
                placeholder="Provide a detailed description of your item."
              ></textarea>
            </div>

            <!-- Collection -->
            <div class="relative">
              <div>
                <label class="font-display text-jacarta-700 mb-2 block dark:text-white">Categories</label>
                <div class="mb-3 flex items-center space-x-2">
                  <p class="dark:text-jacarta-300 text-2xs">choice your Category image</p>
                  <span
                    class="inline-block"
                    data-tippy-content="to make it easier for search engines to find the most suitable image."
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="24"
                      height="24"
                      class="dark:fill-jacarta-300 fill-jacarta-500 h-4 w-4"
                    >
                      <path fill="none" d="M0 0h24v24H0z"></path>
                      <path
                        d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM11 7h2v2h-2V7zm0 4h2v6h-2v-6z"
                      ></path>
                    </svg>
                  </span>
                </div>
              </div>

              <select name="category" required="" class="dark:bg-jacarta-700 border-jacarta-100 hover:ring-accent/10 focus:ring-accent dark:border-jacarta-600 dark:placeholder:text-jacarta-300 w-full rounded-lg py-3 hover:ring-2 dark:text-white">
             <option></option>
             <option value="Virtual Worlds">Virtual Worlds</option>
             <option value="Utility">Utility</option>
             <option value="Design">Design</option>
             <option value="Sports">Sports</option>
             <option value="Photography">Photography</option>
             <option value="Music">Music</option>
             <option value="Office">Office</option>
             <option value="Animals">Animals</option>
             <option value="Art">Art</option>
            </select>
            </div>

            <input type="hidden" value="{{ Auth::user()->email }}" id="Email_of_user" name="Email_of_user" >
            <input type="hidden" value="{{ Auth::user()->name }}" id="Name_of_user" name="Name_of_user" >


            <!-- Submit -->
            <button
              type="submit"
              class="mt-10 bg-accent-lighter cursor-pointer rounded-full py-3 px-8 text-center font-semibold text-white transition-all"
            >
              Create
            </button>
          </form>
        </div>
      </section>
      <!-- end create -->
</main>
@endsection