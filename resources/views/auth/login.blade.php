@extends('layouts.auth') @section('content')
<div class="w-full max-w-[25.625rem] text-center">
    <h1 class="text-jacarta-700 font-display mb-6 text-4xl">Sign in</h1>
    <p class="mb-10 text-lg leading-normal"> Welcome Back </p>
    <form class="bg-white" action="{{route('login')}}" method="post">
        @csrf
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
            </svg>
            <input class="pl-2 outline-none border-none" type="email" name="email" id="" placeholder="Email Address" />
        </div>
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
            </svg>
            <input class="pl-2 outline-none border-none" type="password" name="password" id="" placeholder="Password" />
        </div>
        <button class="border-jacarta-100 hover:bg-accent text-jacarta-700 mb-4 flex w-full items-center justify-center rounded-full border-2 bg-white py-4 px-8 text-center font-semibold transition-all hover:border-transparent hover:text-white mt-10" type="submit"> <span>Login</span> </button> <span class="text-sm ml-2 hover:text-blue-500 cursor-pointer">Forgot Password ?</span> <span class="text-sm ml-2 hover:text-blue-500 cursor-pointer"><a href="{{route ('register')}}"> don't have an account ?</a></span>
    </form>
</div> 
@endsection