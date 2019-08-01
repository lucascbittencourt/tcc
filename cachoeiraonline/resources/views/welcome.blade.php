@extends('layouts.view')
@section('content')



@endsection
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container">
                        <a class ="navbar-brand" href='#'> Cachoeira Online </a> 
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Categorias</a>
                            </li>
                            </ul>
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Registro</a>
                                </li>
                            </ul>
                        </div>
                </div>
            </nav>
            <div class="container">
                <div class="header">
                    <h1> Cachoeira Online </h1>
                    <p> Seu guia para Cachoeira Paulista</p>
                    <input class="search-input" type="text" name="" placeholder="Procurar...">
                    <a href="#" class="search-icon"><i class="fas fa-search"></i></a>
                </div>
            <div class="top-estabs">
                <h1> Destaques</h1>
                @foreach($topEstabs as $topEstab)
                    {{$topEstab}}
                    <div class="col-4">
                        <div class="card">
                            <img class="card-img" src="https://placeimg.com/640/480/any" alt="estabelecimento">
                            <div class="card-body">
                                <div class="card-title"> <h5>{{$topEstab->establishment->name}}</h5></div>
                                <p class="card-text"> {{$topEstab -> description}} </p>
                                <button type="submit" class="btn btn-primary"> Conferir </button>
                            </div>
                        </div>
                        </div>

                @endforeach
            </div>

            <h1>Categorias</h1>

                @foreach($categories as $category)

                    {{$category}}<br>

                @endforeach

            </div>
        </div>
    </body>
</html>
