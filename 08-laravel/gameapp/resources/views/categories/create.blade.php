@extends('layouts.app')
@section('title', 'GameApp - Create Category')
@section('class', 'add-category')
@section('content')
    <header>
        <a href="{{ url('categories') }}" class="btn-back">
            <img src="{{ asset('images/btn-back.svg') }}" alt="Back">
        </a>
        <img src="../images/dashboard.png" alt="" style="margin-top: 20px;">
        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
    </header>
    @include('menuburguer')
    <section class="scroll">
        <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="gamename">
                    <label for="name">
                        Name
                    </label>
                    <input type="text" id="name" name="name">
                </div>
                <div class="form-group">
                    <label>
                        Description
                    </label>
                    <textarea id="description" name="description"></textarea>
                </div>
                <div class="gamename">
                    <label for="name">
                        Manufacturer
                    </label>
                    <input type="text" id="manufacturer" name="manufacturer">
                </div>
                <div class="gamename">
                    <label for="name">
                        Release date
                    </label>
                    <input type="date" id="releasedate" name="releasedate">
                </div>
                <div class="form-group">
                    <div class="upload-section">
                        <img id="upload" src="{{ asset('images/imagechange.png') }}" alt="Placeholder Image">
                        <input type="file" id="photo" name="image" style="display:none" accept="image/*" onchange="loadFile(event)">
                        <button class="upload" type="button" onclick="document.getElementById('photo').click()"></button>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button class="add-category" type="submit" class="add-category-btn"></button>
            </div>
        </form>
    </section>
@endsection
@section('js')
    <script>
function loadFile(event) {
    var image = document.getElementById('upload');
    image.src = URL.createObjectURL(event.target.files[0]);
    image.style.display = 'block';
    image.onload = function() {
    URL.revokeObjectURL(image.src);
    }
}

        /* ------------------------------*/

        $(document).ready(function() {
            $('header').on('click', '.btn-burger', function() {
                $(this).toggleClass('active')
                $('.nav').toggleClass('active')
            })
            $('#photo').change(function(e) {
                e.preventDefault()
                let reader = new FileReader()
                reader.onload = function(event) {
                    $('#upload').attr('src', event.target.result)
                };
                reader.readAsDataURL(this.files[0])
            })

        })
    </script>
    @if (count($errors->all()) > 0)
        @php $error = '' @endphp
        @foreach ($errors->all() as $message)
            @php $error .= '<li>' . $message . '</li>' @endphp
        @endforeach
        <script>
            $(document).ready(function() {
                Swal.fire({
                    position: "top",
                    title: "Error!",
                    html: `@php echo $error @endphp`,
                    icon: "error",
                    toast: true,
                    showConfirmButton: false,
                    timer: 5000,
                })
            })
        </script>
    @endif
@endsection
