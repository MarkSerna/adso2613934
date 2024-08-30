@extends('layouts.app')
@section('title', 'GameApp - Show Category')
@section('class', 'show-game')
@section('content')
    <header>
        <a href="{{ url('categories') }}" class="btn-back">
            <img src="{{ asset('images/btn-back.svg') }}" alt="Back">
        </a>
        <img src="{{ asset('images/dashboard.png') }}" alt="" style="margin-top: 20px;">
        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
    </header>
    @include('menuburguer')
    <section>
        <img src="../images/image-view.png" alt="Game" />
        <div class="row">
            <div class="column">
                <h4>Category:</h4>
                <p>{{ $category->name }}</p>
            </div>
        </div>
        <div class="row">
            <div class="column">
              <h4>Description</h4>
              <p>
                {{ $category->description }}
              </p>
            </div>
          </div>
        <div class="row">
            <span>
                <b>{{ $category->manufacturer }}</b>
            </span>
            <span>
                <b>{{ $category->releasedate }}</b>
            </span>
        </div>
    </section>
@endsection
@section('js')
    <script src="js/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {

            $('header').on('click', '.btn-burger', function() {
                $(this).toggleClass('active')
                $('.nav').toggleClass('active')
            })
            //----------------------------       
        })
    </script>
@endsection
