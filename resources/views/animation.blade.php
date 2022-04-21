
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
         <p class="animation-first-title">CONTEMOS TU HISTORIA</p>
               <p class="animation-second-title">COMO NADIE MÁS LO HA HECHO...</p>
            <div class="animation-second-section-text-wrapper">
               <p class="animation-first-text"><span class="fw-bold">Descríbenos  el qué, cómo, cuándo y dónde de tu proyecto o negocio. 
                  Con imaginación, nosotros nos encargamos del resto. 
                  </span> </p>
               <p class="animation-first-text">Personalizamos la animación a tus necesidades para que comuniques de forma concreta y sencilla las ideas más chidas e importantes que tienes en mente.
               </p>
               <p class="animation-first-text"><span class="fw-bold"> Analizaremos detalles como el estilo, duración o urgencia para darte propuestas accesibles, creativas e innovadoras que capten la atención de tu público. 
               </p>
               <p class="animation-price">desde $100dlls</p>
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


