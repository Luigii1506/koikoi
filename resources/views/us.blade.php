  
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
        </div>
      </div>
      <div class="us-first-section">
        <div class="us-title">GET TO KNOW <span class="pink">US</span></div>
        <div class="us-text-wrapper">
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
          <p> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
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


