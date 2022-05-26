  
@extends('layouts.app')

@section('content')

<div class="gracias-home-wrapper">
<div class="gracias-wrapper vertical-aligne">
    <div class="img-gracias-wrapper">
        <!--<img src="{{ asset('images/DetalleFlechaIzquierda.svg') }}" class="thanks-img"/>-->
        <p class="gracias-title">THANKS FOR WRITING TO US</p>
    </div>
    <p class="gracias-subtitle">We will be contacting you as soon as possible </p>
    <div class="loader" style="text-align: center; color: white;">Loading...</div>

</div>
</div>

<script>
    
    window.onload = function() {
        setTimeout(() => {
            window.location.href = '/'
        }, 3000);  
    };
    
</script>

@endsection


