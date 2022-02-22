@extends('layouts.app')
@section('page.title', 'Regiser')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="px-6 py-5 font-semibold text-gray-700 bg-gray-200 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Register') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="name" class="block mb-2 text-sm font-bold text-gray-700 sm:mb-4">
                            {{ __('Name') }}:
                        </label>

                        <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <p class="mt-4 text-xs italic text-red-500">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="email" class="block mb-2 text-sm font-bold text-gray-700 sm:mb-4">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <p class="mt-4 text-xs italic text-red-500">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="yaer_id" class="block mb-2 text-sm font-bold text-gray-700 sm:mb-4">
                            year_id
                        </label>

                        <input  type="number" id="year_id"
                            class="form-input w-full @error('email') border-red-500 @enderror" name="year_id"
                            value="{{ old('email') }}" required autocomplete="email">

                       
                    </div> 
                    <div class="flex flex-wrap">
                        <label for="faculty_id" class="block mb-2 text-sm font-bold text-gray-700 sm:mb-4">
                        faculty_id
                        </label>

                        <input  type="number" id="faculty_id"
                            class="form-input w-full @error('email') border-red-500 @enderror" name="faculty_id"
                            >

                       
                    </div>
                    
                    
                    <div class="flex flex-wrap">
                        <label for="department_id" class="block mb-2 text-sm font-bold text-gray-700 sm:mb-4">
depaerment_id                        </label>

                        <input  type="number" id="department_id"
                            class="form-input w-full @error('email') border-red-500 @enderror" name="department_id"
                            value="{{ old('email') }}" required autocomplete="email">

                       
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block mb-2 text-sm font-bold text-gray-700 sm:mb-4">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                            class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                            required autocomplete="new-password">

                        @error('password')
                        <p class="mt-4 text-xs italic text-red-500">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password-confirm" class="block mb-2 text-sm font-bold text-gray-700 sm:mb-4">
                            {{ __('Confirm Password') }}:
                        </label>

                        <input id="password-confirm" type="password" class="w-full form-input"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full p-3 text-base font-bold leading-normal  no-underline whitespace-no-wrap  rounded-lg select-none  sm:py-4" style="color: rgb(150, 6, 6);"> 
                            {{ __('Register') }}
                        </button>

                        <p class="w-full my-6 text-xs text-center text-gray-700 sm:text-sm sm:my-8">
                            {{ __('Already have an account?') }}
                            <a class=" no-underline  hover:underline" style="color: rgb(150, 6, 6);" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </p>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
