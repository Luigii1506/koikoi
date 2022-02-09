  
@extends('layouts.app')

@section('content')

   <div class="container-fluid web-mainWrapper">
   <div class="header">
        <img alt="koikoi_logo" src="{{ asset('images/koikoi_logo_blanco.png') }}" class="logo">
        <div class="menu-wrapper">
          <span><a href="{{ url('/') }}"> Home</a></span>
          <span><a href="{{ url('/us') }}"> Us</a></span>
          <span><a href="{{ url('/web') }}"> Web</a></span>
          <span><a href="{{ url('/design') }}"> Design</a></span>
        </div>
      </div>
      <div class="web-first-section">
        <div class="row">
          <div class="col-12 col-md-5 web-first-section-col-1">
            <div class="web-first-section-text-wrapper">
              <p class="web-first-section-text-1">WEB</p>
              <p class="web-first-section-text-2">PHRASE HERE</p>
              <p class="web-first-section-text-3">Algo más por aqui</p>
            </div>
          </div>
          <div class="col-12 col-md-7 web-first-section-second-col">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img src="https://cdn.quasar.dev/img/mountains.jpg" class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                        <img src="https://cdn.quasar.dev/img/parallax1.jpg" class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                        <img src="https://cdn.quasar.dev/img/parallax2.jpg" class="d-block w-100" alt="...">
                     </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                  </button>
               </div>
          </div>
        </div>
      </div>
      <div class="web-second-section">
        <img src="{{ asset('images/web/fondo_blanco-min.png') }}" alt="" class="web-second-section-fondo-blanco">
        <img src="{{ asset('images/web/burbuja.png') }}" alt="" class="web-second-section-burbuja">
        <p class="web-second-section-text">CHOOSE WHAT YOU NEED</p>
        <div class="web-second-section-row-wrapper">
          <div class="position-relative web-second-section-row h-100">
            <div class="owl-carousel owl-theme owl-carousel-section h-100">
              <div class="item text-center bottom-position">
                <button class="web-second-section-col-button">A</button>
                <p class="web-second-section-col-text">Ejemplo cualquiera</p>
                <p class="web-second-section-col-text">Ejemplo cualquiera</p>
                <p class="web-second-section-col-text">Ejemplo cualquiera</p>
                <p class="web-second-section-col-text">Ejemplo cualquiera</p>
                <p class="web-second-section-col-text">Ejemplo cualquiera</p>
              </div>
              <div class="item text-center bottom-position">
                <button class="web-second-section-col-button">B</button>
                <p class="web-second-section-col-text">Ejemplo cualquiera</p>
                <p class="web-second-section-col-text">Ejemplo cualquiera</p>
                <p class="web-second-section-col-text">Ejemplo cualquiera</p>
                <p class="web-second-section-col-text">Ejemplo cualquiera</p>
                <p class="web-second-section-col-text">Ejemplo cualquiera</p>
                <p class="web-second-section-col-text">Ejemplo cualquiera</p>
                <p class="web-second-section-col-text">Ejemplo cualquiera</p>
              </div>
              <div class="item text-center bottom-position">
                <button class="web-second-section-col-button">C</button>
                <p class="web-second-section-col-text">Ejemplo cualquiera</p>
                <p class="web-second-section-col-text">Ejemplo cualquiera</p>
                <p class="web-second-section-col-text">Ejemplo cualquiera</p>
                <p class="web-second-section-col-text">Ejemplo cualquiera</p>
                <p class="web-second-section-col-text">Ejemplo cualquiera</p>
                <p class="web-second-section-col-text">Ejemplo cualquiera</p>
                <p class="web-second-section-col-text">Ejemplo cualquiera</p>
                <p class="web-second-section-col-text">Ejemplo cualquiera</p>
                <p class="web-second-section-col-text">Ejemplo cualquiera</p>
              </div>
            </div>
          </div>
        </div>
       
      </div>

      <div class="web-third-section">
        <p class="web-third-section-text">EJEMPLOS</p>
        <div class="web-third-section-div"></div>
        <img src="{{ asset('images/web/circulo.png') }}" alt="" class="web-third-section-circulo">
      </div>
   </div>
      
@endsection


