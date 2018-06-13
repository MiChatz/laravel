@extends('master')

@section('title')

    <title>Portfolio</title>

@stop

@section('intro')

    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h1 class="brand-heading">Portfolio</h1>
              <p class="intro-text">At this page you can find some samples of my work in different projects</p>
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
  <!-- <img src="{{ URL::to('/img/portfolio.jpg') }}" style="display: block;margin-left: auto;margin-right: auto; opacity: 0.65;" width="90%" height="90%" alt=""/> -->

  <!-- <div style="background-image:url('/pix/samples/bg1.gif');padding:5px;width:150px;height:200px;border:1px solid black;"> -->

    <section id="about" class="content-section text-center" style="background-image:url('{{ URL::to('/img/portfolio.jpg') }}');opacity: 0.65;display: block;margin-left: auto;margin-right: auto;" >
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>BanDemoniC</h2>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/JfIaFTIfNsM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <p>Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
              <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
            <p>This theme features stock photos by
              <a href="http://gratisography.com/">Gratisography</a>
              along with a custom Google Maps skin courtesy of
              <a href="http://snazzymaps.com/">Snazzy Maps</a>.</p>
            <p>Grayscale includes full HTML, CSS, and custom JavaScript files along with SASS and LESS files for easy customization!</p>
          </div>
        </div>
      </div>
    </section>


@stop
