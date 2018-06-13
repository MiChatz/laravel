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
              <h1 class="brand-heading">About Me</h1>
              <p class="intro-text">Here you can find a short presentations of my background.</p>
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
            <h2>Christos A. Chairopoulos</h2>
            <p>I have had experience designing
                for numerous companies, creating a wide variety of designs
                to suit the needs of the individual.
                I can <a style="color: #42dca3"> produce </a>and edit your<a style="color: #42dca3"> video, animation </a>or<a style="color: #42dca3"> graphics / sound </a>design projects.
                I am skilled on <a style="color: #42dca3"> Illustrator, Photoshop </a>as well as <a style="color: #42dca3"> After Effects </a>and<a style="color: #42dca3"> Premiere. </a>
                I also use<a style="color: #42dca3"> ZBrush </a>and<a style="color: #42dca3"> 3DsMax </a>for various projects.
                I make sure I design everything in the shortest time possible
                while keeping a high standard of work.
              </p>

            </div>
          </div>
        </div>
      </div>
    </section>

@stop
