@extends('layouts.main')

@section('head')

@include('layouts.partials.head')

@stop

@section('content')


<div class="banner">
    <ul>
        <li class="banner-image banner-image-1"><a href="{{ URL::to('about') }}"><div class="banner-copy right"><span class="header">Expert residential and commercial electricians<br></span>
        <br>Years of experience, friendly &amp reliable service
        <br><br><strong>Find out more ></strong></div></a></li>
        <li class="banner-image banner-image-2"><a href="{{ URL::to('about') }}"><div class="banner-copy left"><span class="header">Full and partial rewires<br></span>
        <br>We offer a full range of services to the homeowner from fitting a couple of sockets or light fitting to a complete rewire
        <br><br><strong>Find out more ></strong></div></a></li>
        <li class="banner-image banner-image-3"><a href="{{ URL::to('about') }}"><div class="banner-copy right"><span class="header">Burglar Alarm & CCTV installation<br></span>
        <br>Ensure your home or business are fully secured. Quick-Elec will install burglar alarms and CCTV systems to suit your budget and your needs
        <br><br><strong>More info here ></strong></div></a></li>
        <li class="banner-image banner-image-4"><a href="{{ URL::to('about') }}"><div class="banner-copy left"><span class="header">Consumer unit upgrades<br></span>
        <br>All household consumer units should be RCD protected. An RCD, or residual current device, is a life-saving device which is designed to prevent you from getting a fatal electric shock. It can also provide protection against electrical fires. Contact us for a free quote.
        <br><br><strong>Find out more ></strong></div></a></li>
        <li class="banner-image banner-image-5"><a href="{{ URL::to('domestic') }}"><div class="banner-copy right"><span class="header">Lighting updates<br></span>
        <br>Upgrade the lighting in your home with down lights, led lighting and security lighting. Whatever your lighting needs Quick-Elec will deliver
        <br><br><strong>Click for more info ></strong></div></a></li>
        <li class="banner-image banner-image-6"><a href="{{ URL::to('about') }}"><div class="banner-copy left"><span class="header">Energy saving upgrades<br></span>
        <br>Upgrade your home or business with Quick-Elec and save upto 30% on your energy bills.
        <br><br><strong>More here ></strong></div></a></li>
        <li class="banner-image banner-image-7"><a href="{{ URL::to('exterior') }}"><div class="banner-copy right"><span class="header">Add lighting to your outdoor space<br></span>
        <br>Add a touch of class to your garden or patio area
        <br><br><strong>More here ></strong></div></a></li>
    </ul>
</div>

<section grid>
  <article column="6" class="link-box domestic"><a href="{{ url('/domestic') }}"><h3>Domestic Projects</h3></a></article>
  <article column="6" class="link-box commercial"><a href="{{ url('/commercial') }}"><h3>Commercial Projects</h3></a></article>
</section>



<script type="text/javascript" src="{{ URL::asset('js/unslider.js') }}"></script>
<script>$(function() { $('.banner').unslider({ autoplay: true, delay: 7000 }) })</script>

@stop