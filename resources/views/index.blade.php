<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
@extends('template')

@section('contenido')
<body class="antialiased">
<h1 class="bg-primary p-3 text-light" style="text-align: center;">Bienvenidos a mi blog</h1>
<div class="img-fluid">
      <img src="./img/portada.jpg" alt="" width="100%" height="300px" style="display: block; margin: auto;"/>
      <br />
    </div>
 <div class="container">
    <div class="row justify-content-md-center">
    <div class="card mb-3" style="width: 40rem;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/Foto perfil.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Fernando López Grajeda</h5>
        <p class="card-text">Hola bienvenido a mi blog personal, aquí encontrarás información acerca de mi dia a dia, mis gustos, etc..<br> Espero te guste :D</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
 </div>
</div>
</div> 
    <div class="container" style="background-color: #84b6f4">
    <div class="row justify-content-md-center">
        <div class="col-lg-8">
            <br>
        <h1 class ="text-light"style="text-align: center;">Posts</h1>
        </div>
            <div class="col-lg-12">
            <form action="{{route('blog.create')}}">
                <button class="btn btn-primary">Nuevo</button>
                    </form>
                    <br>
    @foreach ($posts as $post)
        <div class="row justify-content-md-center">
            <div class="card" style="width: 50rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$post->titulo}}</h5>
                        <p class="card-text">{{$post->descripcion}}</p>
                        <p class="card-text"><small class="text-muted">{{$post->updated_at}}</small></p>
                            <form action="{{route('blog.destroy',$post)}}" method="post" style="text-align: right">
                                    @method('delete')
                                    @csrf
                                 <input type="submit" value="Eliminar" class="btn btn-danger" onclick="return confirm('¿Deseas eliminar?')">
                            <a href="{{route('blog.edit',$post->id)}}" class="btn btn-warning">Actualizar</a>
                            </form>
                </div>
            </div>
        </div>
            <br>
            @endforeach
            </div>
        </div>
    </div>  
  
        <!-- Footer -->
        <footer class="bg-dark text-center text-white">
      <!-- Grid container -->
      <div class="container p-4">
        <!-- Section: Social media -->
        <section class="mb-4 bg-dark p-4">
            <h2>No olvides seguirme en mis redes sociales :D</h2>
          <!-- Facebook -->
          <a class="btn btn-floating m-1" href="" role="button"
            ><i class="fab fa-facebook-f"
              ><img
                src="/img/icons8-facebook-rodeado-de-círculo-48.png"
                alt="" /></i
          ></a>

          <!-- Twitter -->
          <a class="btn btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-twitter"
              ><img src="/img/icons8-twitter-circled-48.png" alt="" /></i
          ></a>

          <!-- Instagram -->
          <a class="btn btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-instagram"
              ><img src="/img/icons8-instagram-48.png" alt="" /></i
          ></a>

          <!-- Youtube -->
          <a class="btn btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-github"
              ><img src="/img/icons8-youtube-play-48.png" alt="" /></i
          ></a>
        </section>
        <!-- Section: Social media -->

        <!-- Section: Form -->
        <section class="">
          <form action="">
            <!--Grid row-->
            <div class="row d-flex justify-content-center">
              <!--Grid column-->
              <div class="col-auto">
                <p class="pt-2">
                  <strong>Suscribete al newsletter para saber cuando hago un nuevo post</strong>
                </p>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-5 col-12">
                <!-- Email input -->
                <div class="form-outline form-white mb-4">
                  <input
                    type="email"
                    id="form5Example21"
                    class="form-control"
                  />
                  <label class="form-label" for="form5Example21"
                    >Correo electronico</label
                  >
                </div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-auto">
                <!-- Submit button -->
                <button type="submit" class="btn btn-outline-light mb-4">
                  Subscribete
                </button>
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </form>
        </section>
        <!-- Section: Form -->


      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2022 Fernando López. Todos los derechos reservados.
      </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    @endsection
    </body>
</html>
