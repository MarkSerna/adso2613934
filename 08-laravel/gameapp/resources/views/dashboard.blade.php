{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('layouts.app')
@section('title', 'Dashboard')
@section('class', 'dashboard')

@section('content')

<header>
    <a href="catalogue.html" class="btn-back">
        <img src="images/btn-back.png" alt="Back" class="arrow-back">
    </a>
    <img src="images/dashboard.png" alt="" style="margin-top: 20px;">

    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</header>

@include('menuburguer')

<section class="scroll">
    <img src="images/dashboard-title.png" alt="">
    <article class="module">
        <aside>
            <img class="icon" src="images/users.png" alt="">
            <span class="rows">75 users.</span>
        </aside>
        <img class="title" src="images/title-module-users.svg" alt="">
        <a href="{{ url('users') }}">
            <img src="images/view-button.png" alt="View">
        </a>
    </article>
    <article class="module">
        <aside>
            <img class="icon" src="images/categories.png" alt="">
            <span class="rows">250 categ.</span>
        </aside>
        <img class="title" src="images/title-module-categories.svg" alt="">
        <a href="categories/index.html">
            <img src="images/view-button.png" alt="View">
        </a>
    </article>
    <article class="module">
        <aside>
            <img class="icon" src="images/games.png" alt="">
            <span class="rows">3725 games.</span>
        </aside>
        <img class="title" src="images/title-module-games.svg" alt="">
        <a href="games/index.html">
            <img src="images/view-button.png" alt="View">
        </a>
    </article>
</section>

@endsection

@section('js')

<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            center: false,
            loop: true,
            dots: false,
            responsive: {
                0: {
                    items: 2
                }
            }
        })
        $('header').on('click', '.btn-burger', function () {
            $(this).toggleClass('active')
            $('.nav').toggleClass('active')
        })
    })
</script>

@endsection