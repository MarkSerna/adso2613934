@extends('layouts.app')
@section('title', 'GameApp - Users Module')
@section('class', 'users')

@section('content')
    <header>
        <a class="btn-back" href="{{ url('dashboard') }}">
            <img src="{{ url('images/btn-back.png') }}" alt="arrow-Back" />
        </a>
        <img src="{{url ('images/dashboard.png')}}" alt="" style="margin-top: 20px;">
        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
    </header>
    @include('menuburguer')
    <section>
        <div class="area">
            <a class="add" href="{{ url('users/create') }}">
                <img src="{{ url ('images/add-users.png')}}" alt="Add" />
            </a>
            <div class="options">
                <a href="{{ url ('export/users/pdf')}}">
                    <img src="{{ asset ('images/btn-export-pdf.svg')}}" alt="">
                </a>
                <a href="{{ url ('export/users/excel')}}">
                    <img src="{{ asset ('images/btn-export-excel.svg')}}" alt="">
                </a>
            </div>
            <input type="text" placeholder="Search" name="qsearch" id="qsearch">
            <div class="loader"></div>
            <div id="list">
                @foreach ($users as $user)
                    <article class="record">
                        <figure class="avatar">
                            <img class="mask" src="{{url ('images/profile1.png')}}" alt="Photo" />
                        </figure>
                        <aside>
                            <h3>{{ $user->fullname }}</h3>
                            <h4>{{ $user->role }}</h4>
                        </aside>
                        <figure class="actions">
                            <a href="{{ url('users/' . $user->id) }}">
                                <img src="{{url ('images/ico-search.png')}}" alt="Show" />
                            </a>
                            <a href="{{ url('users/' . $user->id . '/edit') }}">
                                <img src="../images/ico-edit.png" alt="Edit" />
                            </a>
                            <a href="javascript:;" class="delete" data-fullname="{{ $user->fullname }}">
                                <img src="{{ asset('images/ico-delete.png') }}" alt="Delete" />
                            </a>
                            <form action="{{ url('users/' . $user->id) }}" method="post" style="display: none">
                                @csrf
                                @method('delete')
                            </form>
                        </figure>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    {{ $users->links('layouts.paginator') }}
@endsection
@section('js')
    <script>

        $('header').on('click', '.btn-burger', function () {
            $(this).toggleClass('active')
            $('.nav').toggleClass('active')
        })
        
        $('figure').on('click', '.delete', function() {
            $('.loader').hide()



            $fullname = $(this).attr('data-fullname')

            Swal.fire({
                title: "Are you sure?",
                text: "Desea eliminar a:" + $fullname,
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

            $('body').on('keyUp', '#qsearch', function(e){
            e.preventDefault()
            $query = $(this).val()
            $token = $("input[name='_token']").val()
            $model = 'users'

            $('.loader').show()
            $('#list').hide()

            setTimeout(() => {
                $.post($model + '/search',
                    { q: $query, _token: $token },
                    function(data) {
                        $('.#list').html(data)
                        $('.loader').hide()
                        $('#list').fadeIn('slow')
                    }
                )
            }, 500);

            $.post($model + '/search', data,
                { q: $queqy, _token: $token },
                function(data) {
                    $('.area').empty().append(data)
                }
            )
        })
        })


    </script>
@endsection