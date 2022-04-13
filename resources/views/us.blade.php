  
@extends('layouts.app')

@section('content')

   <div class="container-fluid us-mainWrapper" id="usWrapper">
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
        <div class="us-title">CONÓCENOS</div>
        <div class="us-text-wrapper">
          <p class="">¡Hola, somos Koi Koi! El Studio web creativo que tal vez no sabías…pero necesitas.</p>
          <p> Formamos un equipo de talento puro: ilustradores, animadores digitales y desarrolladores medio geeks enfocados en ofrecer servicios web, de animación y diseño (Sí, todo en uno).</p>
          <p class="">Nos encanta ir más allá de los horizontes, la imaginación o la creatividad para ofrecer opciones que ayuden a mejorar la identidad visual junto a la presencia de tu proyecto o negocio en línea.</p>
          <p class="fw-bold mb-60-m">Proyéctate distinto. Que tus plataformas luzcan muy chidas, creativas, innovadoras, atractivas y muy funcionales.</p>

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
  

 