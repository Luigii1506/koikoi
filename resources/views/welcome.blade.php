  
@extends('layouts.app')

@section('content')

   <div class="container-fluid home-mainWrapper" id="homeWrapper">
   <div class="header">
        <img alt="koikoi_logo" src="{{ asset('images/koikoi_logo_blanco.png') }}" class="logo">
        <div class="menu-wrapper">
          <span><a href="{{ url('/') }}"> Home</a></span>
          <span><a href="{{ url('/us') }}"> Us</a></span>
          <span><a href="{{ url('/web') }}"> Web</a></span>
          <span><a href="{{ url('/design') }}"> Design</a></span>
          <span><a href="{{ url('/contact') }}"> Contact</a></span>
          <span><a href="{{ url('/animation') }}"> Animation</a></span>
          <div class="lang-wrapper">
            <a href="{{url('locale/es')}}"><button class="btn btn-idioma {{ App::getLocale() == 'es' ? 'active' : '' }}" id="es">ESP</button></a>
            <a href="{{url('locale/en')}}"><button class="btn btn-idioma {{ App::getLocale() == 'en' ? 'active' : '' }}" id="en">ING</button></a>
          </div>
        </div>
      </div>
      <div class="home-first-section">
          <div class="home-first-section-text-wrapper">
            <p class="home-title-section-1">{{__('home.home_title_1')}}</p>
            <p class="home-title-section-1"> {{__('home.home_title_2')}}<span class="pink letter-spacing-negative"> {{__('home.home_title_3')}}</span></p>
            <p class="home-title-section-2">{{__('home.home_subtitle')}}</p>
          </div>
          <img class="home-desktop-mobile" src="{{ asset('images/computador_mobile.png') }}" alt="">
          <div class="row home-second-section-mobile">
            <div class="col-12 col-md-4">
              <a href="{{ url('/web') }}">
                <img alt="Quasar logo" src="{{ asset('images/inicio_card_1.png') }} " style="width: 100%; height: 100%" class="home-card-desktop">
                <img alt="Quasar logo" src="{{ asset('images/inicio_card_1_mobile.png') }} " style="width: 100%; height: 100%" class="home-card-mobile">
              </a>
            </div>
             <div class="col-12 col-md-4 mt-3">
                <a href="{{ url('/design') }}">
                  <img alt="Quasar logo" src="{{ asset('images/inicio_card_2.png') }}" style="width: 100%; height: 100%" class="home-card-desktop">
                  <img alt="Quasar logo" src="{{ asset('images/inicio_card_2_mobile.png') }} " style="width: 100%; height: 100%" class="home-card-mobile">

                </a>
            </div>
             <div class="col-12 col-md-4 mt-3">
              <a href="{{ url('/animation') }}">
                <img alt="Quasar logo" src="{{ asset('images/inicio_card_3.png') }}" style="width: 100%; height: 100%" class="home-card-desktop">
                <img alt="Quasar logo" src="{{ asset('images/inicio_card_3_mobile.png') }} " style="width: 100%; height: 100%" class="home-card-mobile">
              </a>
            </div>
            <div class="col-12">
              <p class="third-section-title-mobile">{{__('home.home_how')}}</p> 
            </div>
          </div>
           
      </div>

      <div class="row home-second-section-desktop">
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
            <div data-aos="fade-up"> <p class="home-third-section-title">{{__('home.home_how')}}</p></div>
          </div>
          <div class="col-6 col-sm-4 col-xl-4">
            <img alt="Quasar logo" src="{{ asset('images/tooltip_1.png') }}" class="home-third-section-small-img">
            <p class="home-third-section-text-2">{{__('home.col_1_title')}}</p>
            <!--
            <p class="home-third-section-text">Tenemos opciones que</p>
            <p class="home-third-section-text">suman valor a la</p>
            <p class="home-third-section-text">IDENTIDAD VISUAL de</p>
            <p class="home-third-section-text">tu proyecto o negocio.</p-->
              <p class="home-third-section-text">{{__('home.col_1_text')}}</p>
          </div>  
          <div class="col-6 col-sm-4 col-xl-4">
            <img alt="Quasar logo" src="{{ asset('images/tooltip_2.png') }}" class="home-third-section-small-img">
            <p class="home-third-section-text-2">{{__('home.col_2_title')}}</p>
            <!--
            <p class="home-third-section-text">Whatsapp, mensaje o</p>
            <p class="home-third-section-text">paloma mensajera.</p>
            -->
            <p class="home-third-section-text">{{__('home.col_2_text')}}</p>
          </div>    
          <div class="col-6 col-sm-4 col-xl-4">
            <img alt="Quasar logo" src="{{ asset('images/tooltip_3.png') }}" class="home-third-section-small-img ">
            <p class="home-third-section-text-2">{{__('home.col_3_title')}}</p>
            <!--
            <p class="home-third-section-text">Cuéntanos tu proyecto.</p>
            <p class="home-third-section-text">Platícanos tus necesidades</p>
            <p class="home-third-section-text">para comprenderte mejor.</p>
            <p class="home-third-section-text">La idea es cotizarte a la</p>
            <p class="home-third-section-text">medida.</p>
            -->
            <p class="home-third-section-text">{{__('home.col_3_text')}}</p>
          </div>
          <div class="col-12">   
            <img alt="Quasar logo" src="{{ asset('images/tooltip_4.png') }}" class="home-third-section-big-img">
            <p class="home-third-section-text-2">{{__('home.col_4_title')}}</p>
            <!--
            <p class="home-third-section-text">Sabes lo que necesitas y</p>
            <p class="home-third-section-text">tenemos lo que buscas.</p>
            <p class="home-third-section-text">¡Ahora sí a trabajar!</p>
            -->
            <p class="home-third-section-text mb-0">{{__('home.col_4_text')}} </p>
            <p class="home-third-section-text">{{__('home.col_4_text_2')}} </p>

          </div>
        </div>
        <div class="row q-mt-xl button-welcome">
          <img alt="Quasar logo" src="{{ asset('images/details.png') }}" class="home-third-section-details-img">
          <img alt="Quasar logo" src="{{ asset('images/details_mobile.png') }}" class="home-third-section-details-img-mobile">

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
              <p class="home-postick-text-1">{{__('home.contact_us')}}</p>
              <p class="home-postick-text-2">koikoi@studio.com</p>
            </div>
          </div>
          <img alt="Quasar logo" src="{{ asset('images/footer_mobile.png') }}" class="footer-img-mobile">
        </div>
        <div class="footer">
          <img alt="Quasar logo" src="{{ asset('images/footer.png') }}" class="footer-img">
        </div>
      </div>
   </div>
      
@endsection