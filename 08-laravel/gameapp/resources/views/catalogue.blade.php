@extends('layouts.app')
@section('title', 'Catalogue')
@section('class', 'catalogue')

@section('content')

<header>
    <a href="{{url('/')}}" class="btn-back">
        <img src="images/btn-back.png" alt="Back" class="arrow-back">
    </a>
    <img src="images/logo-top.png" alt="Logo" class="logo-top">

    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</header>
<nav class="nav">
    <img src="images/assets-cube-store.png" alt="Menu" class="title-menu">
    <menu>
        <a href="{{ url('login')}}">
            <img src="images/ico-login.svg" alt="Login">
            Login
        </a>
        <a href="{{ url ('register')}}">
            <img src="images/ico-register.svg" alt="Register">
            Register
        </a>
        <a href="{{ url ('catalogue')}}">
            <img src="images/ico-catalogue.svg" alt="Catalogue">
            Catalogue
        </a>
    </menu>
</nav>
<section class="scroll">
    <form action="" method="post">
        <input type="text" placeholder="Search...">
    </form>
    <article>
        <h2>
            <img src="images/ico-category.svg" alt="Category">
            Arcade
        </h2>
        <div class="owl-carousel owl-theme">
            
            <figure>
                <img src="images/slide-c1-01.png" alt="" class="slide">
                Pacman
                <a href="view-game.html" class="btn-more"> </a>
            </figure>

            <figure>
                <img src="images/slide-c1-02.png" alt="" class="slide">
                Galaxy
                <a href="view-game.html" class="btn-more">
                </a>
            </figure>

            <figure>
                <img src="images/slide-c1-03.png" alt="" class="slide">
                Rust
                <a href="view-game.html" class="btn-more">
                </a>
            </figure>

        </div>
    </article>
    

    <article>
        <h2>
            <img src="images/ico-category.svg" alt="Category">
            Nintendo Switch
        </h2>
        <div class="owl-carousel owl-theme">
            
            <figure>
                <img src="images/slide-c1-01.png" alt="" class="slide">
                Pacman
                <a href="view-game.html" class="btn-more">
                </a>
            </figure>

            <figure>
                <img src="images/slide-c1-02.png" alt="" class="slide">
                Galaxy
                <a href="view-game.html" class="btn-more">
                </a>
            </figure>

            <figure>
                <img src="images/slide-c1-03.png" alt="" class="slide">
                Rust
                <a href="view-game.html" class="btn-more">
                </a>
            </figure>

        </div>
    </article>


    <article>
        <h2>
            <img src="images/ico-category.svg" alt="Category">
            Nintendo Switch
        </h2>
        <div class="owl-carousel owl-theme">
            
            <figure>
                <img src="images/slide-c1-01.png" alt="" class="slide">
                Pacman
                <a href="view-game.html" class="btn-more">
                </a>
            </figure>

            <figure>
                <img src="images/slide-c1-02.png" alt="" class="slide">
                Galaxy
                <a href="view-game.html" class="btn-more">
                </a>
            </figure>

            <figure>
                <img src="images/slide-c1-03.png" alt="" class="slide">
                Rust
                <a href="view-game.html" class="btn-more">
                </a>
            </figure>

        </div>
    </article>
</section>

@endsection

@section('js')

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