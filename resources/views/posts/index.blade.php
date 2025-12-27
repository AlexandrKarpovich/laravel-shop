@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
                <div class="card col-md-6 mb-4">
                    <div class="card-header">{{ $post->short_title }}</div>
                    <div class="card-body">
{{--                        <h5 class="card-title">{{ $post->short_title }}</h5>--}}
{{--                        <p class="card-text">{{ $post->descr }}</p>--}}
                        @if($post->img)
                            <img src="{{ $post->img }}" c class="card-img" alt="{{ $post->img }}">
                        @else
                            <img src="{{ asset('img/default.jpg') }}" class="card-img" alt="{{ asset('img/default.jpg') }}">
                        @endif
                        @if($post->author)
                            <div class="card-author">Автор: {{ $post->author->name }}</div>
                        @endif
                        <a href="#" class="btn btn-primary">Посмотреть пост</a>
                    </div>
                </div>



{{--                <div class="col-md-6 mb-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">{{ $post->short_title }}</div>--}}
{{--                        <div class="card-body">--}}
{{--                            {{ $post->descr }}--}}
{{--                            @if($post->author)--}}
{{--                                <small class="text-muted">by {{ $post->author->name }}</small>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            @endforeach
        </div>

        {{ $posts->links('pagination::bootstrap-4') }}
    </div>
@endsection




{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--    @vite(['resources/css/app.css'])--}}
{{--</head>--}}
{{--<body>--}}
{{--    <nav class="navbar navbar-expand-lg bg-body-tertiary">--}}
{{--    <div class="container-fluid">--}}
{{--        <a class="navbar-brand" href="#">Navbar</a>--}}
{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <ul class="navbar-nav me-auto mb-2 mb-lg-0">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link active" aria-current="page" href="#">Home</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Link</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                        Dropdown--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li><a class="dropdown-item" href="#">Action</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Another action</a></li>--}}
{{--                        <li><hr class="dropdown-divider"></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <form class="d-flex" role="search">--}}
{{--                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>--}}
{{--                <button class="btn btn-outline-success" type="submit">Search</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
{{--    <?php--}}
{{--    echo "<pre>";--}}
{{--    var_dump($posts);--}}
{{--    echo "</pre>";--}}
{{--    ?>--}}
{{--    <pre>{{ var_dump($posts) }}</pre>--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            @foreach($posts as $post)--}}
{{--                <div class="col-md-6 mb-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">{{ $post->short_title }}</div>--}}
{{--                        <div class="card-body">{{ $post->descr }}</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</body>--}}
{{--</html>--}}
