@extends('master')

@section('title')

    <title>Contact</title>

@stop

@section('intro')

    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h1 class="brand-heading">Contact</h1>
              <p class="intro-text">Cklick the arrow below to see where you can find me.</p>
              <a href="#about" class="btn btn-circle js-scroll-trigger">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

@stop

@section('content')

    <!-- About Section -->
    <section id="about" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <img src="{{ URL::to('/img/contact.png') }}" alt=""/>
          </div>
          <div class="col-lg-6 mx-auto">
            <div class="col-lg-12 mx-auto">
              <h1 class="brand-heading">Christos Chropoulos</h1>
              <p class="intro-text"> Graphics ( Video - Animation ) & Sound Designer</p>
            </div>

            <div class="col-lg-12 mx-auto">
              <a href="emailto:chris.chairopoulos@hotmail.com"><p class="fa fa-envelope">&nbsp:&nbsp</p>chris.chairopoulos@hotmail.com</a>
            </div>

            <div class="col-lg-12 mx-auto">
              <a href="https://www.facebook.com/ca.chairopoulos" class="Blondie"><p class="fa fa-facebook">&nbsp:&nbsp</p>find me on facebook&nbsp&nbsp</a>
              <a href="tel:+306974600005" class="Blondie"><p class="fa fa-phone">&nbsp:&nbsp</p>+30 697 460 0005</a>
            </div>
            <p>Guitar player and vocals of
              <a style="color: #42dca3">BanDemoniC.</a> Details for the group you can find in the links below</p>
              <div class="row col-lg-12" style="display: block;margin-left: auto;margin-right: auto ;" >
               <a href="https://www.facebook.com/bandemonic/" class="fa fa-facebook">&nbsp&nbsp Like &nbsp&nbsp</a>
                <a href="https://www.youtube.com/channel/UCi78gpZ_vXUGpB9gPHs86lg" class="fa fa-youtube">&nbsp&nbsp Subscribe &nbsp&nbsp</a>
                <a href="http://www.bandemonic.com/" class="fa fa-globe">&nbsp&nbsp Official Web Site &nbsp&nbsp</a>
               <a href="https://twitter.com/bandemonic" class="fa fa-twitter">&nbsp&nbsp Tweet &nbsp&nbsp</a>
                <a href=" https://www.instagram.com/bandemonic_official/" class="fa fa-instagram">&nbsp&nbsp Follow &nbsp&nbsp</a>
              </div>

              {{$contact[0]->body}}


            @foreach ($contact as $contact)
              <li> {{$contact->body}} </li>
            @endforeach



    </div>
        </div>
      </div>
    </section>


@stop
