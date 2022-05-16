@extends('layouts.app')
@section('title', '- Edit')
@section('content')
<main>
    <!-- edit -->
      <section class="relative py-24">
        <picture class="pointer-events-none absolute inset-0 -z-10 dark:hidden">
          <img src="img/gradient_light.jpg" alt="gradient" class="h-full w-full" />
        </picture>
        <div class="container">
          <h1 class="font-display text-jacarta-700 py-16 text-center text-4xl font-medium dark:text-white">edit</h1>

          <form class="mx-auto max-w-[48.125rem]" action="{{ route('updateitem', $data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
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
                value="{{$data->Name}}"
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
              >{{$data->Description}}</textarea>
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
             <option value="{{$data->Category}}">{{$data->Category}}</option>
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

            <input type="hidden" value="{{ $data->id }}" id="id" name="id" >
            <!-- Submit -->
            <button
              type="submit"
              class="mt-10 bg-accent-lighter cursor-pointer rounded-full py-3 px-8 text-center font-semibold text-white transition-all"
            >
              edit
            </button>
          </form>
        </div>
      </section>
      <!-- end edit -->
</main>
@endsection