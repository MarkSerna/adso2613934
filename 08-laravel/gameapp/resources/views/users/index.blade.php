@extends('layouts.app')
@section('title', 'Users Module')
@section('class', 'users')

@section('content')

    <header>
        <a href="../dashboard.html" class="btn-back">
            <img src="../images/btn-back.png" alt="Back" class="arrow-back">
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

<section>
    <div class="area">
        <a class='add' href="{{ url('users/create') }}">
            <img src="../images/add-users.png" alt="Add">
        </a>
        @foreach($users as $user)
        <article class="record">
            <figure class="avatar">
                    <img class="mask" src="../images/profile1.png" alt="Photo">
                </figure>
                <aside>
                    <h3>John Doe Springfield</h3>
                    <h4>Admin</h4>
                </aside>
                <figure class="actions">
                    <a href='../users/show.html'>
                        <img src="../images/ico-search.png" alt="Show">
                    </a>
                    <a href='../users/edit.html'>
                        <img src="../images/ico-edit.png" alt="Edit">
                    </a>
                    <a href="javascript:;">
                        <img src="../images/ico-delete.png" alt="Delete">
                    </a>
            </figure>
        </article>
        @endforeach
    </div>
</section>

<script src="../js/jquery-3.7.1.min.js"></script>
    <script>
      $(document).ready(function () {
        // - - - - - - - - - - - - - - -
        $("header").on("click", ".btn-burger", function () {
          $(this).toggleClass("active");
          $(".nav").toggleClass("active");
        });
        // - - - - - - - - - - - - - - -
      });
    </script>
{{ $users->links('layouts.paginator') }}


@endsection
    