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
    <h1 class="text-md-start text-center">Register Yourself</h1>

       

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" placeholder="abc" class="block mt-1 w-100 p-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" placeholder="abc@gmail.com" class="block mt-1 w-100 p-1" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" placeholder="123Abc" class="block mt-1 w-100 p-1" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" placeholder="123Abc" class="block mt-1 w-100 p-1" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-dark hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

               <button class="btn btn-warning w-25 float-end mb-5" style="font-weight:bolder">Register Now</button>
            </div>
        </form>
  
</div>
    </div>
</div>
<br>
<br>
<br>
@endsection