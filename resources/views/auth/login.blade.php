@extends('layouts.app')
@section('page.title', 'Login')

@section('content')
@endsection

    <style>
 #total
 {
    background-image:url("/images/faculty7.jpeg");

    background-repeat: no-repeat;
    background-size: cover;
    height: 1100px;
margin:0;    
position: absolute;
        top: 0;
        left: 0;
        width: 100%;
 }


    </style>
    <body>
    <div id="total">

<div class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10 " style="padding-top:150px ;      opacity: .8;
;
" >

    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <div class="px-6 py-5 font-semibold   sm:py-6 sm:px-8 sm:rounded-t-md text-center" style="color: rgb(150, 6, 6);
font-size: 40px; font-family:'Arial Black', arial-black">
                    {{ __('Login') }}
                </div>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="email" class="block mb-2 text-sm font-bold text-gray-700 sm:mb-4">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <p class="mt-4 text-xs italic text-red-500">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block mb-2 text-sm font-bold text-gray-700 sm:mb-4">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                            class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                            required>

                        @error('password')
                        <p class="mt-4 text-xs italic text-red-500">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>


                    <div class="flex flex-wrap">
                        <button type="submit"
                        class="w-full p-3 text-base font-bold leading-normal text-gray-100 no-underline whitespace-no-wrap  rounded-lg select-none  sm:py-4" style="background-color: rgb(150, 6, 6);
">
                            {{ __('submit') }}
                        </button>

                        @if (Route::has('register'))
                        <p class="w-full my-6 text-xs text-center text-gray-700 sm:text-sm sm:my-8">
                            {{ __("Don't have an account?") }}
                            
                            <a class=" no-underline " style="color: rgb(150, 6, 6);" href="{{route('register')}}">
                                {{ __('Register') }}
                            </a>
                        </p>
                        @endif
                    </div>
                </form>

            </section>
        </div>
    </div>
    </div>
    </body>
