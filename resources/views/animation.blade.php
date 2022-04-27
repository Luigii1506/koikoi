
@extends('layouts.app')

@section('content')

   <div class="container-fluid animation-mainWrapper position-relative" id="animationWrapper">
      <div class="header animation-header">
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
          <div class="animation-video-title-wrapper">
             <div class="center">
               <p class="animation-video-title">ANIMACION</p>
             </div>
          </div>
      </div>
      <div class="animaion-sections-wrapper">
      <div class="animation-second-section">
         <div class="animation-second-section-wrapper">
         <p class="animation-first-title mb-0">CONTEMOS TU HISTORIA</p>
               <p class="animation-second-title">COMO NADIE MÁS LO HA HECHO...</p>
            <div class="animation-second-section-text-wrapper">
               <p class="animation-first-text-bold"><span class="fw-bold">¿CAPACITAR, PROMOCIONAR o EXPLICAR?</span></p>
               <p class="animation-first-text"><span class="">Descríbenos el qué, cómo, cuándo y dónde de tu proyecto o negocio.
                  Nosotros nos encargamos del resto.
                  </span> </p>
               <p class="animation-first-text">Personalizamos la animación para que comuniques de forma concreta, sencilla y muy chida aquello que
                  tienes en mente y quieres compartir.
               </p>
               <p class="animation-first-text"><span class=""> Detallaremos el estilo, duración o urgencia para ofrecerte propuestas accesibles, creativas e innovadoras
                  que capten a tu público
               </p>
               <p class="animation-price mb-0">Desde $100.00 USD</p>
            </div>          
         </div>
         <img alt="" src="{{ asset('images/animation/burbuja_2.png') }}" class="animation-burbuja-1">
         <img alt="" src="{{ asset('images/animation/burbuja_1.png') }}" class="animation-burbuja-2">

      </div>
      <div class="animation-third-section">
         <div class="owl-carousel owl-theme owl-carousel-animation">
            <img alt="" src="{{ asset('images/animation/1.png') }}" class="animation-carrousel">
            <img alt="" src="{{ asset('images/animation/2.png') }}" class="animation-carrousel">

            <img alt="" src="{{ asset('images/animation/3.png') }}" class="animation-carrousel">


            <img alt="" src="{{ asset('images/animation/5.png') }}" class="animation-carrousel">

           <!-- <img alt="" src="{{ asset('images/animation/9.png') }}" class="animation-carrousel">-->

        </div>

        <button class="btn btn-dark btn-animation">CONTACTANOS</button>
      </div>

      </div>
      
   </div>
      
@endsection


