@extends('layouts.admin')
 
 @section('content')
    <div class="card">
          <div class="card-header">
          <h4>
                Bienvenu  Administrateur !!!!
            </h4>
          </div>
        <div class="card-body">
        <div class="container-lg my-3">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol>
        
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/images/login/arriereplan.webp" width="100px" class="d-block w-50" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="font-weight-bold" style="color:#A30478;">Services de Qualite</h1>
                    <p>Some demonstrative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/images/login/arriereplan.webp" class="d-block w-50" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="font-weight-bold" style="color:#2A81B7;">Acheter en un clic</h1>
                    <p>Some demonstrative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/images/login/arriereplan.webp" class="d-block w-50" alt="Slide 3">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="font-weight-bold" style="color:#A30478;">Trouver votre Bonheur ici</h1>
                    <p>Some demonstrative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>

        <!-- Carousel controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
  
        </div>
    </div>

 @endsection