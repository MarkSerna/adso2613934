@extends('layouts.app')
@section('title', 'CuboGame - my-profile')
@section('class', 'my-profile')

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
    <figure class="avatar" >
        <img class="mask" id="profile-picture" src="{{ asset('images'). '/' . Auth::user()->photo }}" alt="Photo">
        <button type="button" class="change-btn" onclick="document.getElementById('file-input').click()">Change</button>
        <input type="file" id="file-input" style="display:none;" accept="image/*" onchange="loadFile(event)">
    </figure>
    <form action="" class="profile-form">
        <label for="name">Name</label>
        <input type="text" id="name" value="{{ Auth::user()->fullname }}">

        <label for="dob">Date of birth</label>
        <input type="date" id="dob" value="{{ Auth::user()->birthdate }}">

        <fieldset class="gender">
            <legend>Gender</legend>
            <label>
                <input type="radio" name="gender" value="male" @if(Auth::user()->gender=="male") checked @endif>Female
            </label>
            <label>
                <input type="radio" name="gender" value="female" @if(Auth::user()->gender=="female") checked @endif>Male
            </label>
            <label>
                <input type="radio" name="gender" value="other" @if(Auth::user()->gender=="other") checked @endif>Other
            </label>
        </fieldset>

        <label for="email">Email</label>
        <input type="email" id="email" value="jeremyspring054@gmail.com">

        <label for="phone">Phone number</label>}
        <input type="number" id="phone" value="{{ Auth::user()->phone }}" placeholder="(+57) 3123456789">

        <button type="submit" class="submit-button">Change</button>
    </form>
    </div>
</section>
@endsection


@section('js')

<script>
function loadFile(event) {
    var image = document.getElementById('profile-picture');
    image.src = URL.createObjectURL(event.target.files[0]);
    image.style.display = 'block';
    image.onload = function() {
    URL.revokeObjectURL(image.src);
    }
}
/*  ==========================================================*/

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