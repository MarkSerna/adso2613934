@extends('layouts.app')
@section('title', 'GameApp - Edit Category')
@section('class', 'my-')
@section('content')
        <header>
            <a href="{{ url('categories') }}" class="btn-back">
                <img src="{{ asset('images/btn-back.svg') }}" alt="Back">
            </a>
            <h1>Edit Category</h1>
            <svg class="btn-burger" viewBox="0 0 100 100" width="80">
                <path
                    class="line top"
                    d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                <path
                    class="line middle"
                    d="m 70,50 h -40" />
                <path
                    class="line bottom"
                    d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
            </svg>
        </header>
        @include('menuburguer')
        <section class="scroll">
            <form action="{{ url('categories/' .$category->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @if(count($errors->all()) > 0)
                @foreach($errors->all() as $message)
                <li>{{$message}}</li>
                @endforeach
                @endif
                <div class="form-group">
                    <img id="upload" class="mask" src="{{ asset('images/' . $category->image)}}" alt="">
                    <img class="border" src="{{ asset('images/border-photo.svg')}}" alt="">
                    <input id="photo" type="file" name="image" accept="image/*">
                    <input type="hidden" name="originphoto" value="{{ $category->image }}">
                    <input type="hidden" name="id" value="{{ $category->id }}">
                </div>
                <div class="form-group">
                    <label>
                        Name:
                    </label>
                    <input type="text" name="name" value="{{ old('name', $category->name) }}">
                </div>
                <div class="form-group">
                    <label>
                        Manufacturer:
                    </label>
                    <input type="text" name="manufacturer" value="{{ old('manufacturer', $category->manufacturer) }}">
                </div>
                <div class="form-group">
                    <label>
                        Release Date:
                    </label>
                    <input type="date" name="releasedate"  value="{{ old('releasedate', $category->releasedate)}}">
                </div>
                <div class="form-group">
                    <label>
                        Description:
                    </label>
                    <textarea name="description">{{ old('description', $category->description) }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit">
                        <img src="{{ asset('images/content-btn-add.svg')}}" alt="Login">
                    </button>
                </div>
            </form>
        </section>
        @endsection
        @section('js')
    <script src="../js/jquery-3.7.1.min.js"></script>  
    <script>
        $(document).ready(function () {
            
            $('header').on('click', '.btn-burger', function(){
            $(this).toggleClass('active')
            $('.nav').toggleClass('active')
            })
        //----------------------------       
        })

        $('.border').click(function(e) {
                $('#photo').click()
            })
            $('#photo').change(function(e) {
                e.preventDefault()
                let reader = new FileReader()
                reader.onload = function(event) {
                    $('#upload').attr('src', event.target.result)
                };
                reader.readAsDataURL(this.files[0])
            })
    </script>
        @endsection