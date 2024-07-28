@extends('layouts.app')
@section('title', 'Assets Cube Store  - Welcome')
@section('class', 'welcome')

@section('content')

<header>
    <img src="images/logo-welcome.png" alt="Logo">
    <span class="logo_name">Assets Cube Store</span>
</header>

<section class="slider owl-carousel owl-theme">
    <img src="images/slide01.png" alt="Slide01">
    <img src="images/slide02.png" alt="Slide02">
    <img src="images/slide03.png" alt="Slide03">
    <img src="images/slide04.png" alt="Slide04">
    <img src="images/slide05.png" alt="Slide05">
    <img src="images/slide06.png" alt="Slide06">
    <img src="images/slide07.png" alt="Slide07">
    <img src="images/slide08.png" alt="Slide08">
    <img src="images/slide08.png" alt="Slide09">
</section>
<footer>
    <a href="{{asset('catalogue')}}" class="btn btn-explore">
        <div class="btn-enter">
            <div class="btn-cover"></div>
            <span class="enter">Enter</span>
        </div>
    </a>
</footer>

@endsection

@section('js')

<script>
    $(document).ready(function(){
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        dots:false,
        items:1,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
    });
});
</script>

@endsection