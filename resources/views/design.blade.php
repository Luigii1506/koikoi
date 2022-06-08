  
@extends('layouts.app')

@section('content')

   <div class="container-fluid design-mainWrapper" id="designWrapper">
      <div class="header">
         <img alt="koikoi_logo" src="{{ asset('images/koikoi_logo_blanco.png') }}" class="logo">
         <div class="menu-wrapper">
            <span><a href="{{ url('/') }}"> Home</a></span>
            <span><a href="{{ url('/us') }}"> Us</a></span>
            <span><a href="{{ url('/web') }}"> Web</a></span>
            <span><a href="{{ url('/design') }}"> Design</a></span>
            <span><a href="{{ url('/contact') }}"> Contact</a></span>
            <span><a href="{{ url('/animation') }}"> Animation</a></span>
          </div>
      </div>
      <div class="design-first-section">
         <div class="row design-first-row">
            <div class="col-12 col-md-5 design-first-section-col-1">
               <div class="design-first-section-text-wrapper">
                  <p class="design-first-section-text-1">{{__('design.title')}}</p>
                  <p class="design-first-section-text-2 mb-0">{{__('design.sub_title_1')}}</p>
                  <p class="design-first-section-text-2 mb-2">{{__('design.sub_title_2')}}</p>

                  <p class="design-first-section-text-3 mb-0">{{__('design.sub_sub_title_1')}}</p>
                 <!-- <p class="design-first-section-text-3">{{__('design.sub_sub_title_2')}}</p>-->
               </div>
            </div>
            <div class="col-12 col-md-7 design-first-section-second-col">
               <div id="carouselDesign2" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img src="{{ asset('images/design/carrousel_1.png') }}" class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                        <img src="{{ asset('images/design/carrousel_2.png') }}" class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                        <img src="{{ asset('images/design/carrousel_3.png') }}" class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                        <img src="{{ asset('images/design/carrousel_4.png') }}" class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                        <img src="{{ asset('images/design/carrousel_5.png') }}" class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                        <img src="{{ asset('images/design/carrousel_6.png') }}" class="d-block w-100" alt="...">
                     </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselDesign2" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselDesign2" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                  </button>
               </div>
            </div>
            <div class="col-12 design-first-section-text-mobile">
               <p >{{__('design.second_title')}}</p>
            </div>
         </div>
      </div>
      <div class="design-second-section">
         <img src="{{ asset('images/design/fondo_blanco.png') }}" alt="" class="design-second-section-fondo-blanco">
         <img src="{{ asset('images/design/fondo_blanco_mobile.png') }}" alt="" class="design-second-section-fondo-blanco-mobile">

         <img src="{{ asset('images/design/circulo.png') }}" class="design-second-section-burbuja">
        <div class="design-second-section-row-wrapper">
         <p class="design-second-section-text">{{__('design.second_title')}}</p>

          <div class="position-relative design-second-section-row h-100">
             
             <!--
            <div class="owl-carousel owl-theme owl-carousel-section-2 h-100">
              <div class="item text-center design-bottom-position design-align-1">
                <button class="design-second-section-col-button">BÁSICO</button>
                <p class="design-second-section-col-text">Logotipo</p>
                <p class="design-second-section-col-text">Diseño tarjetas de presentación</p>
                <p class="design-second-section-col-text">Firma electrónica</p>
                <p class="design-second-section-col-text">Elementos gráficos</p>
                <p class="design-second-section-col-text">(Patrón, paleta de color, etc)</p>
                <p class="design-second-section-col-text">Guía de uso de marca</p>
                <p class="design-second-section-col-text">Presentación corporativa (plantillas)</p>

              </div>
              <div class="item text-center design-bottom-position design-align-2">
                <button class="design-second-section-col-button">PRO</button>
                <p class="design-second-section-col-text">Logotipo</p>
                <p class="design-second-section-col-text">Diseño tarjetas de presentación</p>
                <p class="design-second-section-col-text">Firma electrónica</p>
                <p class="design-second-section-col-text">Elementos gráficos</p>
                <p class="design-second-section-col-text">(Patrón, paleta de color, etc)</p>
                <p class="design-second-section-col-text">Presentación corporativa (plantillas)</p>
                <p class="design-second-section-col-text">Guía de uso de marca</p>
                <p class="design-second-section-col-text">Iconografia</p>
                <p class="design-second-section-col-text">GIF del logo</p>
                <p class="design-second-section-col-text">Diseño de plantillas para redes sociales (9)</p>
              </div>
              <div class="item text-center design-bottom-position design-align-3">
                <button class="design-second-section-col-button">PREMIUM</button>
                <p class="design-second-section-col-text">Logotipo</p>
                <p class="design-second-section-col-text">Diseño tarjetas de presentación</p>
                <p class="design-second-section-col-text">Firma electrónica</p>
                <p class="design-second-section-col-text">Elementos gráficos</p>
                <p class="design-second-section-col-text">(Patrón, paleta de color, etc)</p>
                <p class="design-second-section-col-text">Presentación corporativa (plantillas)</p>
                <p class="design-second-section-col-text">Guía de uso de marca</p>
                <p class="design-second-section-col-text">Iconografia</p>
                <p class="design-second-section-col-text">GIF del logo</p>
                <p class="design-second-section-col-text">Diseño de plantillas para redes sociales (13)</p>
                <p class="design-second-section-col-text">Plantillas historias (3)</p>
                <p class="design-second-section-col-text">Cartel/poster publicitario (1)</p>
                <p class="design-second-section-col-text">(Patrón paleta de color, etc)</p>
                <p class="design-second-section-col-text">Etiquetas para productos</p>
                <p class="design-second-section-col-text">Animación (15 segundos)</p>
              </div>
            </div>
            -->
            <div class="row custom-card-row">
               <div class="col-12 col-lg-4">
                  <div class="custom-card">
                     <div class="custom-card-header">
                           <p class="custom-card-header-text">BÁSICO</p>
                     </div>
                     <div class="custom-card-body">
                        <ul class="ul-web">
                           <li>Logotipo</li>
                           <li>Firma electrónica</li>
                           <li>Elementos gráficos</li>
                           <li>Tarjetas de presentación</li>
                           <li>Presentación Corporativa</li>
                           <li>Guia de uso de marca</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-4">
                  <div class="custom-card">
                     <div class="custom-card-header">
                           <p class="custom-card-header-text">PRO</p>
                     </div>
                     <div class="custom-card-body">
                        <ul class="ul-web">
                           <li>Logotipo</li>
                           <li>Iconografía</li>
                           <li>GIF de logotipo</li>
                           <li>Firma electrónica</li>
                           <li>Elementos gráficos</li>
                           <li>Tarjetas de presentación</li>
                           <li>Presentación Corporativa</li>
                           <li>Diseño de plantillas</li>
                           <li>Guia de uso de marca</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-4">
                  <div class="custom-card">
                     <div class="custom-card-header">
                           <p class="custom-card-header-text">PREMIUM</p>
                     </div>
                     <div class="custom-card-body">
                        <ul class="ul-web">
                           <li>Logotipo</li>
                           <li>Firma electrónica</li>
                           <li>Elementos gráficos</li>
                           <li>Tarjetas de presentación</li>
                           <li>Presentación Corporativa</li>
                           <li>Guia de uso de marca</li>
                           <li>Elementos gráficos</li>
                           <li>Tarjetas de presentación</li>
                           <li>Presentación Corporativa</li>
                           <li>Diseño de plantillas</li>
                           <li>Guia de uso de marca</li>
                        </ul>
                     </div>
                  </div>
               </div>

            </div>
          </div>
        </div>
        <img src="{{ asset('images/flecha_izquierda.png') }}" alt="" class="design-flecha-izquierda d-block d-md-none">
        <img src="{{ asset('images/flecha_derecha.png') }}" alt="" class="design-flecha-derecha d-block d-md-none">
      </div>
      <div class="design-third-section">
         <div class="design-third-section-carousel">
            <p class="design-third-section-text-mobile mb-0">{{__('design.examples')}}</p>
            <div id="carouselDesign1" class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img src="{{ asset('images/design/carrousel_7.png') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="{{ asset('images/design/carrousel_8.png') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="{{ asset('images/design/carrousel_9.png') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="{{ asset('images/design/carrousel_10.png') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="{{ asset('images/design/carrousel_11.png') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="{{ asset('images/design/carrousel_12.png') }}" class="d-block w-100" alt="...">
                  </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselDesign1" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselDesign1" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
               </button>
            </div>
         </div>
         <p class="design-third-section-text">{{__('design.examples')}}</p>
      </div>
   </div>
      
@endsection


