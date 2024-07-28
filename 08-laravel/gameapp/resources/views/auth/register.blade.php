{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('layouts.app')
@section('title', 'Register')
@section('class', 'register')

@section('content')
    <header>
        <a href="javascript:;" class="btn-back">
            <img src="images/btn-back.png" alt="Back" class="arrow-back">
        </a>
        <img src="images/registry.png" alt="">

        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
    </header>

    @include('menuburguer')

    <section class="scroll">
        <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
            {{-- @csrf
            @if (count($errors->all()) > 0)
                @foreach ($errors->all() as $message)
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                @endforeach
            @endif --}}
            <div class="form-group">
                <div class="profile-picture">
                    <div class="photo-placeholder">
                        <img id="profile-img" src="" alt="Profile Picture" style="display:none;">
                        <button type="button" class="add-photo-btn" onclick="getElementById('file-input').click()">Add a photo</button>
                        <input type="file" id="file-input" name="photo" style="display:none;" accept="image/*" onchange="loadFile(event)">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>
                    Document:
                </label>
                <input type="number" name="document" placeholder="12345678123">
            </div>
            <div class="form-group">
                <label>
                    Fullname:
                </label>
                <input type="text" name="fullname" placeholder="John Doe">
            </div>
            <div class="form-group">
                <label>
                    Email:
                </label>
                <input type="email" name="email" placeholder="johndoe@example.com">
            </div>
            <div class="form-group">
                <label>
                    Phone Number:
                </label>
                <input type="text" name="phone" placeholder="3123456789">
            </div>
            <div class="form-group">
                <fieldset class="gender">
                    <legend>Gender</legend>
                    <label>
                        <input type="radio" name="gender" value="male">Female
                    </label>
                    <label>
                        <input type="radio" name="gender" value="female">Male
                    </label>
                    <label>
                        <input type="radio" name="gender" value="other">Other
                    </label>
                </fieldset>
            </div>
            <div class="form-group">
                <label>
                    Birth Date:
                </label>
                <input type="date" name="birthdate" placeholder="20/02/2025">
            </div>
            <div class="form-group">
                <label>
                    Password:
                </label>
                <img class="ico-eye" src="images/ico-eye.svg" alt="">
                <input type="password" name="password" placeholder="dontmesswithmydog">
            </div>
            <div class="form-group">
                <label>
                    Confirm Password:
                </label>
                <img class="ico-eye" src="images/ico-eye.svg" alt="">
                <input type="password" name="password_confirmation" placeholder="dontmesswithmydog">
            </div>
            <div class="form-group">
                <button type="submit">
                    <img src="images/content-btn-register.svg" alt="Register">
                </button>
            </div>
        </form>
    </section>

@endsection

@section('js')
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function loadFile(event) {
            var image = document.getElementById('profile-img');
            image.src = URL.createObjectURL(event.target.files[0]);
            image.style.display = 'block';
            image.onload = function() {
                URL.revokeObjectURL(image.src); // Limpia la URL después de cargar la imagen
            }
        }
        /*  ==========================================================*/



        $('header').on('click', '.btn-burger', function() {
            $(this).toggleClass('active')
            $('.nav').toggleClass('active')
        })

        //- - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
        $togglePass = false
        $('section').on('click', '.ico-eye', function() {
            !$togglePass ? $(this).next().attr('type', 'text') :
                $(this).next().attr('type', 'password')

                !$togglePass ? $(this).attr('src', 'images/eye-open.svg') :
                $(this).attr('src', 'images/eye-close.svg')
            $togglePass = !$togglePass
        })

        //- - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
    </script>

    <script>
        $('form').on('submit', function() {
            Swal.fire({
                title: "Success!",
                text: "Profile registered correctly!",
                icon: "success",
                position: 'top',
                toast: true,
                showConfirmButton: true,
                timer: 5000,
            });
        });
    </script>

@endsection
