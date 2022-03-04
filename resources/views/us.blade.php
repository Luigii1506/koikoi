  
@extends('layouts.app')

@section('content')

   <div class="container-fluid us-mainWrapper">
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
      <div class="us-first-section">
        <div class="us-title">GET TO KNOW <span class="pink">US</span></div>
        <div class="us-text-wrapper">
          <p class="mb-0 fw-bold">!Somos Koi Koi! El Studio web creativo que buscabas.</p>
          <p>Nos encanta ir más alla de los horizontes, la imaginación o la creatividad para ofrecerte servicios que ayuden a mejorar tu identidad visual y presencia en la web. Queremos que tu negocio se proyecte diferente.</p>
          <p class="mb-0">Con tus ganas de mejorar, nuestro ingenio (o un poco de locura), chambearemos juntos para que tus plataformas luzcan creativas, innovadoras, atractivas y sean funcionales.</p>
          <p>Somos un equipo de animadores y desarrolladores web, enfocados a oferecer servicios web, animación y diseño integrados para que además de lucir muy chido, funcones aún mejor.</p>

        </div>    
      </div>
      <div class="us-second-section">
        <img src="{{ asset('images/us/us_personaje_1.png') }}" alt="" class="us-personaje-1">
        <img src="{{ asset('images/us/us_personaje_2.png') }}" alt="" class="us-personaje-2">
        <img src="{{ asset('images/us/us_personaje_3.png') }}" alt="" class="us-personaje-3">
        <img src="{{ asset('images/us/us_mesa.png') }}" alt="" class="us-mesa">
        <img src="{{ asset('images/us/us_globo_1.png') }}" alt="" class="us-globo-1">
        <img src="{{ asset('images/us/us_globo_2.png') }}" alt="" class="us-globo-2">
        <img src="{{ asset('images/us/us_globo_3.png') }}" alt="" class="us-globo-3">
      </div>
   </div>
      
@endsection


