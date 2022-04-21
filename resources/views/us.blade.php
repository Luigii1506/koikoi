  
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
        <div class="us-title">{{__('us.title')}}</div>
        <div class="us-text-wrapper">
          <p class="mb-0"> {{__('us.text_1')}} </p>
          <p class="">{{__('us.text_2')}}</p>
          <p class="mb-0"> {{__('us.text_3')}}</p>
          <p> {{__('us.text_4')}}</p>
          <p class="">{{__('us.text_5')}}</p>
          <p class="fw-bold mb-60-m">{{__('us.text_6')}}</p>

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
  

 