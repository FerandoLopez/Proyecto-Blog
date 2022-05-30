<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crear Nuevo Post</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
@extends('template')

@section('contenido')
    <body class="antialiased">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{$error}}<br>
                            @endforeach
                        </div>
                    @endif
                    <h1 style="text-align: center;">Crear nuevo post</h1>
                    <form action="{{route('blog.store')}}" method = "post">
                    @csrf
                    <div class="form-group">

                    <label for="title">Titulo</label>
                    <input type="text" class="form-control" name = "titulo" placeholder="Titulo" value="{{old('titulo')}}">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="pages">Descripción</label>
                    <input type="text" class="form-control" name = "descripcion" placeholder="Descripción" value="{{old('descripcion')}}" >
                    </div>
                    <br>
                        <button type="submit" class="btn btn-success">Enviar</button>
                        <a href="{{route('blog.index')}}" class="btn btn-danger">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    </body>
</html>