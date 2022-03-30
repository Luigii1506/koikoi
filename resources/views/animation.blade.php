
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
            <span><a href="{{ url('/contact') }}"> Contact</a></span>
            <span><a href="{{ url('/animation') }}"> Animation</a></span>
          </div>
      </div>
      <div class="animation-video-section">
         <video class="animation-video" autoplay loop muted>
            <source src="{{ asset('images/animation/video.mp4') }}" type="video/mp4" />
          </video>
      </div>
      <div class="animation-second-section">
         <div class="container animation-second-section-wrapper">
            <p class="animation-first-title">CONTEMOS TU HISTORIA</p>
            <p class="animation-second-title">COMO NADIE MÁS LO HA HECHO...</p>
            <p class="animation-first-text"><span class="fw-bold">Cuéntanos y cotiza tu idea.</span> Una animación depende de muchos aspectos para calcular su costo: Estilo, duración, detalle, urgencia, etc...</p>
            <p class="animation-first-text"><span class="fw-bold"> Pero para que no te asustes</span>el costo va</p>
            <!--<p class="animation-second-text">Personalizamos la animación a tu necesidad para que comuniques de forma muy concreta y sencilla tus ideas más chidas e importantes. Afinaremos detalles, duración o urgencia para darte opciones accesibles, creativas e innovadoras que capten la atención de tu público.</p>-->
         </div>
    
      </div>
      <div class="animation-third-section">
         <div class="owl-carousel owl-theme owl-carousel-animation">
            <img alt="" src="{{ asset('images/animation/1.png') }}" class="animation-carrousel">
            <img alt="" src="{{ asset('images/animation/2.png') }}" class="animation-carrousel">

            <img alt="" src="{{ asset('images/animation/3.png') }}" class="animation-carrousel">

            <img alt="" src="{{ asset('images/animation/4.png') }}" class="animation-carrousel">

            <img alt="" src="{{ asset('images/animation/5.png') }}" class="animation-carrousel">

            <img alt="" src="{{ asset('images/animation/6.png') }}" class="animation-carrousel">

            <img alt="" src="{{ asset('images/animation/7.png') }}" class="animation-carrousel">

            <img alt="" src="{{ asset('images/animation/8.png') }}" class="animation-carrousel">

           <!-- <img alt="" src="{{ asset('images/animation/9.png') }}" class="animation-carrousel">-->

        </div>
      </div>
   </div>
      
@endsection


