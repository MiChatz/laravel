@extends('master')

@section('title')

    <title>Info</title>

@stop

@section('intro')

    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h1 class="brand-heading">{{$info[0]->body}}</h1>
              <p class="intro-text">{{$info[1]->body}}</p>
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

          <div style="display: block;margin-left: auto;margin-right: auto; opacity: 0.6;">
                <img src="{{ URL::to('/img/me.png') }}" height="50%" alt=""/>
          </div>
          <div class="col-lg-8 mx-auto">
            <h2>{{$info[2]->body}}</h2>
            <p>{{$info[3]->body}} <a style="color: #42dca3"> {{$info[4]->body}} </a>{{$info[5]->body}}<a style="color: #42dca3"> {{$info[6]->body}} </a>or<a style="color: #42dca3"> {{$info[7]->body}} </a>{{$info[8]->body}} <a style="color: #42dca3"> {{$info[9]->body}} </a>{{$info[10]->body}} <a style="color: #42dca3"> {{$info[11]->body}} </a>{{$info[12]->body}}<a style="color: #42dca3"> {{$info[13]->body}} </a>
                {{$info[14]->body}}<a style="color: #42dca3"> {{$info[15]->body}} </a>{{$info[16]->body}}<a style="color: #42dca3"> {{$info[17]->body}} </a>{{$info[18]->body}}
              </p>

            </div>
          </div>
        </div>
      </div>
    </section>

@stop
