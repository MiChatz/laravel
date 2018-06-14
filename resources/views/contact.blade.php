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
              <h1 class="brand-heading">{{$contact[0]->body}}</h1>
              <p class="intro-text">{{$contact[1]->body}}</p>
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
              <h1 class="brand-heading">{{$contact[2]->body}}</h1>
              <p class="intro-text"> {{$contact[3]->body}}</p>
            </div>

            <div class="col-lg-12 mx-auto">
              <a href="emailto:chris.chairopoulos@hotmail.com"><p class="fa fa-envelope">&nbsp:&nbsp</p>{{$contact[4]->body}}</a>
            </div>

            <div class="col-lg-12 mx-auto">
              <a href="https://www.facebook.com/ca.chairopoulos" class="Blondie"><p class="fa fa-facebook">&nbsp:&nbsp</p>{{$contact[5]->body}}&nbsp&nbsp</a>
              <a href="tel:+306974600005" class="Blondie"><p class="fa fa-phone">&nbsp:&nbsp</p>{{$contact[6]->body}}</a>
            </div>
            <p>{{$contact[7]->body}}
              <a style="color: #42dca3">{{$contact[8]->body}}</a> {{$contact[9]->body}}</p>
              <div class="row col-lg-12" style="display: block;margin-left: auto;margin-right: auto ;" >
               <a href="https://www.facebook.com/bandemonic/" class="fa fa-facebook">&nbsp&nbsp {{$contact[10]->body}} &nbsp&nbsp</a>
                <a href="https://www.youtube.com/channel/UCi78gpZ_vXUGpB9gPHs86lg" class="fa fa-youtube">&nbsp&nbsp {{$contact[11]->body}} &nbsp&nbsp</a>
                <a href="http://www.bandemonic.com/" class="fa fa-globe">&nbsp&nbsp {{$contact[12]->body}} &nbsp&nbsp</a>
               <a href="https://twitter.com/bandemonic" class="fa fa-twitter">&nbsp&nbsp {{$contact[13]->body}} &nbsp&nbsp</a>
                <a href=" https://www.instagram.com/bandemonic_official/" class="fa fa-instagram">&nbsp&nbsp {{$contact[14]->body}} &nbsp&nbsp</a>
              </div>



    </div>
        </div>
      </div>
    </section>


@stop
