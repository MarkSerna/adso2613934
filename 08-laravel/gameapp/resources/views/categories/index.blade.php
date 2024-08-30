@extends('layouts.app')
@section('title', 'GameApp - Categories Module')
@section('class', 'categories')

@section('content')
    <header>
        <a class="btn-back" href="{{ url('dashboard') }}">
            <img src="{{ asset('images/btn-back.png') }}" alt="Back" />
        </a>
        <img src="{{ asset('images/dashboard.png')}}" alt="" style="margin-top: 20px;">
        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
    </header>
    @include('menuburguer')
    <section>
        <div class="area">
            <a class="add" href="{{ url('categories/create') }}">
                <img src="{{ asset('images/add-category.png') }}" alt="Add" />
            </a>
            <form action="" method="post">
                <input type="text" placeholder="Search...">
            </form>

            <div class="area" id="list">
                @foreach ($categories as $category)
                    <article class="record">
                        <figure class="avatar">
                            <img class="mask" src="{{ asset('images'). '/'. $category->image }}" alt="Photo">                        </figure>
                        <aside>
                            <h3>Category</h3>
                            <h2>{{ $category->name }}</h2>
                            {{-- <h4>{{ $category->description }}</h4> --}}
                        </aside>
                        <figure class="actions">
                            <a href="{{ url('categories/' . $category->id) }}">
                                <img src="{{ asset('images/ico-search.png') }}" alt="Show" />
                            </a>
                            <a href="{{ url('categories/' . $category->id . '/edit') }}">
                                <img src="{{ asset('images/ico-edit.png') }}" alt="Edit" />
                            </a>
                            <a href="javascript:;" class="delete" data-name="{{ $category->name }}">
                                <img src="{{ asset('images/ico-delete.png') }}" alt="Delete" />
                            </a>
                            <form action="{{ url('categories/' . $category->id) }}" method="post" style="display: none">
                                @csrf
                                @method('delete')
                            </form>
                        </figure>
                    </article>
                @endforeach
            </div>
        </div>
        0
    </section>
    {{ $categories->links('layouts.paginator') }}
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            // - - - - - - - - - - - - - - -
            $("header").on("click", ".btn-burger", function() {
                $(this).toggleClass("active");
                $(".nav").toggleClass("active");
            });
            // - - - - - - - - - - - - - - -
        });

        $('figure').on('click', '.delete', function() {
            $name = $(this).attr('data-name')

            Swal.fire({
                title: "Are you sure?",
                text: "Desea eliminar a:" + $name,
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).next().submit()
                }
            });
        })

        $('body').on('keyup', '#qsearch', function(e) {
            e.preventDefault()
            $query = $(this).val()
            $token = $('input[name=_token]').val()
            $model = 'categories'

            $.post($model + '/search', {
                    q: $query,
                    _token: $token
                },
                function(data) {
                    $('#list').html(data)
                }
            )
        })
    </script>
@endsection
