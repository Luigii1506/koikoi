  
@extends('layouts.app')

@section('content')

   <div class="container-fluid design-mainWrapper">
      <div class="header">
         <img alt="koikoi_logo" src="{{ asset('images/koikoi_logo_blanco.png') }}" class="logo">
         <div class="menu-wrapper">
            <span><a href="{{ url('/') }}"> Home</a></span>
            <span><a href="{{ url('/us') }}"> Us</a></span>
            <span><a href="{{ url('/web') }}"> Web</a></span>
            <span><a href="{{ url('/design') }}"> Design</a></span>
          </div>
      </div>
      <div class="design-first-section">
         <div class="row">
            <div class="col-12 col-md-5 design-first-section-col-1">
               <div class="design-first-section-text-wrapper">
                  <p class="design-first-section-text-1">DESIGN</p>
                  <p class="design-first-section-text-2 mb-0">TE AYUDAMOS A CREAR</p>
                  <p class="design-first-section-text-2">TU IDENTIDAD VISUAL</p>
                  <p class="design-first-section-text-3">Ofrece experiencias amigables, luce chido e impacta aún mejor.</p>
               </div>
            </div>
            <div class="col-12 col-md-7 design-first-section-second-col">
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
      <div class="design-second-section">
         <img src="{{ asset('images/design/fondo_blanco.png') }}" alt="" class="design-second-section-fondo-blanco">
         <img src="{{ asset('images/design/circulo.png') }}" class="design-second-section-burbuja">
         <p class="design-second-section-text">ÉCHALE UN OJO A NUESTRAS OPCIONES</p>
        <div class="design-second-section-row-wrapper">
          <div class="position-relative design-second-section-row h-100">
            <div class="owl-carousel owl-theme owl-carousel-section-2 h-100">
              <div class="item text-center design-bottom-position">
                <button class="design-second-section-col-button">BÁSICO</button>
                <p class="design-second-section-col-text">Logotipo</p>
                <p class="design-second-section-col-text">Tarjetas de presentación</p>
                <p class="design-second-section-col-text">Firma Electrónica</p>
                <p class="design-second-section-col-text">Elementos gráficos</p>
                <p class="design-second-section-col-text">Guía de uso de marca</p>
                <p class="design-second-section-col-text">Presentación corporativa</p>
                <p class="design-second-section-col-text">(plantillas)</p>

              </div>
              <div class="item text-center design-bottom-position">
                <button class="design-second-section-col-button">PRO</button>
                <p class="design-second-section-col-text">Logotipo</p>
                <p class="design-second-section-col-text">Tarjetas de presentación</p>
                <p class="design-second-section-col-text">Firma Electrónica</p>
                <p class="design-second-section-col-text">Elementos gráficos</p>
                <p class="design-second-section-col-text">Guía de uso de marca</p>
                <p class="design-second-section-col-text">Presentación corporativa</p>
                <p class="design-second-section-col-text">(plantillas)</p>
                <p class="design-second-section-col-text">Diseño de redes sociales</p>
                <p class="design-second-section-col-text">Iconografía</p>
                <p class="design-second-section-col-text">GIF del logo</p>
              </div>
              <div class="item text-center design-bottom-position">
                <button class="design-second-section-col-button">PREMIUM</button>
                <p class="design-second-section-col-text">Logotipo</p>
                <p class="design-second-section-col-text">Tarjetas de presentación</p>
                <p class="design-second-section-col-text">Firma Electrónica</p>
                <p class="design-second-section-col-text">Elementos gráficos</p>
                <p class="design-second-section-col-text">Guía de uso de marca</p>
                <p class="design-second-section-col-text">Presentación corporativa</p>
                <p class="design-second-section-col-text">(plantillas)</p>
                <p class="design-second-section-col-text">Diseño de redes sociales</p>
                <p class="design-second-section-col-text">Iconografía</p>
                <p class="design-second-section-col-text">GIF del logo</p>
                <p class="design-second-section-col-text">Cartel/Poster publictario</p>
                <p class="design-second-section-col-text">Etiquetas de producto</p>
                <p class="design-second-section-col-text">Animación (15 seg)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="design-third-section">
         <div class="design-third-section-carousel">
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
         <p class="design-third-section-text">EJEMPLOS GRÁFICOS</p>
      </div>
   </div>
      
@endsection


