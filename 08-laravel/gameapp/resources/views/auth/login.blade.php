{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('layouts.app')
@section('title', 'Login')
@section('class', 'login')

@section('content')
<header>
    <a href="{{url('catalogue')}}" class="btn-back">
        <img src="images/btn-back.png" alt="Back" class="arrow-back">
    </a>
    <img src="images/login.png" alt="">

    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</header>

@include('menuburguer')

<section>
    <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>
                <h2>Email: </h2>
            </label>
            <input type="email" value="{{ old('email')}}" name="email" placeholder="johndoe123@example.com">
        </div>
        <div class="form-group">
            <label>
                <h2>Password</h2>
            </label>
            <img class="ico-eye" src="images/eye-close.svg" alt="eye">
            <input type="password" name="password" placeholder="dontmesswithmydog">
        </div>
        <div class="form-group">
            <button type="submit" alt="Login" name="submit"> Login </button>
            <a href="">Forgot your password ?</a>
        </div>
    </form>
</section>

@endsection

@section('js')
<script src="js/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('header').on('click', '.btn-burger', function(){
        $(this).toggleClass('active')
        $('.nav').toggleClass('active')
    })

    //- - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
    $togglePass = false
    $('section').on('click', '.ico-eye', function(){
        !$togglePass? $(this).next().attr('type', 'text')
                    : $(this).next().attr('type', 'password')
        
        !$togglePass? $(this).attr('src', 'images/eye-open.svg')
                    : $(this).attr('src', 'images/eye-close.svg')
        $togglePass = !$togglePass
    })

    //- - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
</script>

@if(count($errors->all()) > 0)
@php $error = '' @endphp
    @foreach($errors->all() as $message)
        @php $error .= '<li>'. $message .'</li>' @endphp
    @endforeach

<script>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            html: '@php echo $error @endphp',
            icon: 'error',
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 5000,
        })
</script>

@endif
@endsection