@extends('layout')
@section('content3')
<style>
    .bgimg{
        height:500px;
        background-image: url('Images/bgimg.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;

    }
    input
    {
        border:none;
        border-bottom: 1px solid #000;

    }
    input:focus{
        outline: none;
        border-bottom: 1px solid #000;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-6 mt-2 bgimg"></div>
        <div class="col-lg-6 mt-2">
    <h1 class="text-md-start text-center">Login Yourself</h1>

   <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-100" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-100" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
           

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-dark hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <br>
                <button type="submit" class="mt-2 w-100 btn btn-warning text-white">Login Now</button>
                <br>
                <a href="/google/auth" class="mt-2 w-100 text-white btn btn-primary">Sign In With Google</a>
            </div>
        </form>
</div>
    </div>
</div>
<br>
<br>
<br>
@endsection