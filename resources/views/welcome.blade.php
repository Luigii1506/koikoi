  
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
          <span><a href="{{ url('/contact') }}"> Contact</a></span>
          <span><a href="{{ url('/animation') }}"> Animation</a></span>
        </div>
      </div>
      <div class="home-first-section">
          <div class="home-first-section-text-wrapper">
            <p class="home-title-section-1">Si no te habían visto,</p>
            <p class="home-title-section-1"> es porque<span class="pink"> no nos habías visto.</span></p>
            <p class="home-title-section-2">El estudio creativo binacional que estabas buscando</p>
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
            <p class="home-third-section-text-2">¿QUÉ NECESITAS?</p>
            <p class="home-third-section-text">Tenemos opciones que</p>
            <p class="home-third-section-text">suman valor a la</p>
            <p class="home-third-section-text">IDENTIDAD VISUAL de</p>
            <p class="home-third-section-text">tu proyecto o negocio.</p>
          </div>  
          <div class="col-12 col-sm-4 col-xl-3">
            <img alt="Quasar logo" src="{{ asset('images/tooltip_2.png') }}" class="home-third-section-small-img">
            <p class="home-third-section-text-2">¡CONTÁCTANOS!</p>
            <p class="home-third-section-text">Whatsapp, mensaje o</p>
            <p class="home-third-section-text">paloma mensajera.</p>
          </div>    
          <div class="col-12 col-sm-4 col-xl-3">
            <img alt="Quasar logo" src="{{ asset('images/tooltip_3.png') }}" class="home-third-section-small-img ">
            <p class="home-third-section-text-2">QUEREMOS CONOCERTE</p>
            <p class="home-third-section-text">Cuéntanos tu proyecto.</p>
            <p class="home-third-section-text">Platícanos tus necesidades</p>
            <p class="home-third-section-text">para comprenderte mejor.</p>
            <p class="home-third-section-text">La idea es cotizarte a la</p>
            <p class="home-third-section-text">medida.</p>
          </div>
          <div class="col-12 col-xl-3">   
            <img alt="Quasar logo" src="{{ asset('images/tooltip_4.png') }}" class="home-third-section-big-img">
            <p class="home-third-section-text-2">¡TRABAJAMOS JUNTOS</p>
            <p class="home-third-section-text-2">TODO EL PROCESO!</p>
            <p class="home-third-section-text">Sabes lo que necesitas y</p>
            <p class="home-third-section-text">tenemos lo que buscas.</p>
            <p class="home-third-section-text">¡Ahora sí a trabajar!</p>
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