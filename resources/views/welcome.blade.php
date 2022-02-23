  
@extends('layouts.app')

@section('content')

   <div class="container-fluid home-mainWrapper">
   <div class="header">
        <img alt="koikoi_logo" src="{{ asset('images/koikoi_logo_blanco.png') }}" class="logo">
        <div class="menu-wrapper">
          <span><a href="{{ url('/') }}"> Home</a></span>
          <span><a href="{{ url('/us') }}"> Us</a></span>
          <span><a href="{{ url('/web') }}"> Web</a></span>
          <span><a href="{{ url('/design') }}"> Design</a></span>
        </div>
      </div>
      <div class="home-first-section">
          <div class="home-first-section-text-wrapper">
            <p class="home-title-section-1">if they don't see you,</p>
            <p class="home-title-section-1">it's because you haven't <span class="pink">seen us</span></p>
            <p class="home-title-section-2">The creative studio you were looking for</p>
          </div>  
      </div>

      <div class="row">
        <div class="col-12 col-md-4">
          <a href="{{ url('/web') }}"><img alt="Quasar logo" src="{{ asset('images/inicio_card_1.png') }} " style="width: 100%; height: 100%" class="test"></a>
        </div>
         <div class="col-12 col-md-4">
            <a href="{{ url('/design') }}"><img alt="Quasar logo" src="{{ asset('images/inicio_card_2.png') }}" style="width: 100%; height: 100%"></a>
        </div>
         <div class="col-12 col-md-4">
          <a href="{{ url('/animation') }}"><img alt="Quasar logo" src="{{ asset('images/inicio_card_3.png') }}" style="width: 100%; height: 100%"></a>
        </div>
      </div>
      <div class="home-third-section">
        <div class="row home-row-third-section">
          <div class="col-12">
            <div data-aos="fade-up"> <p class="home-third-section-title">How?</p></div>
          </div>
          <div class="col-12 col-sm-4 col-xl-3">
            <img alt="Quasar logo" src="{{ asset('images/tooltip_1.png') }}" class="home-third-section-small-img">
            <p class="home-third-section-text-2">¿SABES LO QUE NECESITAS?</p>
            <p class="home-third-section-text">identidad visual de tu</p>
            <p class="home-third-section-text">proyecto o negocio.</p>
          </div>
          <div class="col-12 col-sm-4 col-xl-3">
            <img alt="Quasar logo" src="{{ asset('images/tooltip_2.png') }}" class="home-third-section-small-img">
            <p class="home-third-section-text-2">CONTÁCTANOS</p>
            <p class="home-third-section-text">Nos comunicaremos de</p>
            <p class="home-third-section-text">volada para agendar</p>
            <p class="home-third-section-text">videollamada.</p>
          </div>
          <div class="col-12 col-sm-4 col-xl-3">
            <img alt="Quasar logo" src="{{ asset('images/tooltip_3.png') }}" class="home-third-section-small-img ">
            <p class="home-third-section-text-2">QUEREMOS CONOCERTE</p>
            <p class="home-third-section-text">Cuéntanos tus necesidades y</p>
            <p class="home-third-section-text">haznos saber cómo podemos</p>
            <p class="home-third-section-text">videollamada para cotizarte a</p>
            <p class="home-third-section-text">la medida.</p>
          </div>
          <div class="col-12 col-xl-3">
            <img alt="Quasar logo" src="{{ asset('images/tooltip_4.png') }}" class="home-third-section-big-img">
            <p class="home-third-section-text-2">TRABAJAMOS</p>
            <p class="home-third-section-text-2">CONTIGO TODO</p>
            <p class="home-third-section-text-2">EL PROCESO</p>
          </div>
        </div>
        <div class="row q-mt-xl button-welcome">
          <img alt="Quasar logo" src="{{ asset('images/details.png') }}" class="home-third-section-details-img">
        </div>
        <div class="row home-third-section-circulo-img">
          <div 
            class="home-animation-postick-1">
            <img alt="Quasar logo" src="{{ asset('images/postick_1.png') }}" class="home-third-section-circulo-img-1">
          </div>
          <div 
            class="home-animation-postick-2">
            <img alt="Quasar logo" src="{{ asset('images/postick_2.png') }}" class="home-third-section-circulo-img-2">
            <div class="home-postick-text">
              <p class="home-postick-text-1">Contact us</p>
              <p class="home-postick-text-2">koikoi@studio.com</p>
            </div>
          </div>
        </div>
        <div class="footer">
          <img alt="Quasar logo" src="{{ asset('images/footer.png') }}" class="footer-img">
        </div>
      </div>
   </div>
      
@endsection


