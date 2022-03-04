  
@extends('layouts.app')

@section('content')

<div class="container-fluid contact-mainWrapper">
      <div class="header-contact">
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
      <img alt="koikoi_logo" src="{{ asset('images/contact/fondo_contacto.png') }}" class="contacto-fondo-pantalla">
      <!--
      <div class="header">
            <img alt="koikoi_logo" src="{{ asset('images/koikoi_logo_blanco.png') }}" class="logo">
      </div>
            -->
      <div class="contact-wrapper">
            <div class="contact-title-wrappaer"><p class="contact-title">CONTACT us</p></div>
            <div class="contact-form-wrapper">
                  <form class="custom-form" method="post" action="{{ url('/sendmail') }}">
                        {{  csrf_field()   }}
                        <div class="form-group">
                              <span class="contact-span"><span class="contact-span">Send us a mail</span></span>
                              <textarea class="form-control textarea custom-form-textarea" rows="5" placeholder="Hey me interesa una cotización" name="mensaje"></textarea>
                        </div>
                        <div class="form-group">
                              <span class="contact-span">Your mail</span>
                              <input type="email" class="form-control custom-form-input"  placeholder="correo@gmail.com" name="email">
                        </div>
                  </form>
            </div>
      </div>

      <div class="footer-contact-wrapper"><p class="footer-contact-text">koikoi@studio.com</p></div>

</div>
      
@endsection


