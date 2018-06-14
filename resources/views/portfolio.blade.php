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
                <h1 class="brand-heading">{{$portfolio[0]->body}}</h1>
                <p class="intro-text">{{$portfolio[1]->body}}</p>
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

      <section id="about" class="content-section text-center" style="background-image:url('{{ URL::to('/img/portfolio.jpg') }}');opacity: 0.65;display: block;margin-left: auto;margin-right: auto;" >
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mx-auto">

                <iframe width="560" height="315" src="https://www.youtube.com/embed/JfIaFTIfNsM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                <h4 style="color: #42dca3">{{$portfolio[2]->body}}</h4>

              <p>{{$portfolio[3]->body}} </br>
                <a href="https://itunes.apple.com/gr/album/burn-the-witch/943926728?i=943926846">{{$portfolio[4]->body}}  </a><a style="color: #42dca3">   ||   </a>
                <a href="https://www.amazon.com/gp/product/B00Q525C7S?ie=UTF8&*Version*=1&*entries*=0">  {{$portfolio[5]->body}}</a> </br>
              {{$portfolio[6]->body}}</p>
              <p>{{$portfolio[7]->body}}</p>
            </div>

            <div class="col-lg-6 mx-auto">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/LCYLlQoeOOI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                <h4 style="color: #42dca3">{{$portfolio[8]->body}}</h4>

              <p> {{$portfolio[9]->body}} </br>
                <a href="https://bandemonic09.bandcamp.com/album/against-all-odds">{{$portfolio[10]->body}}</a><a style="color: #42dca3">   ||   </a>
                <a href="http://www.steelgallery.com/metal-store/product/bandemonic-against-all-odds-pre-order-cd/">  {{$portfolio[11]->body}}</a> </br>
              </p>
              <p>{{$portfolio[12]->body}}</br>{{$portfolio[13]->body}}</br>{{$portfolio[14]->body}}
              </br>{{$portfolio[15]->body}}</p>
            </div>

            <div class="col-lg-6 mx-auto">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/2Qf2Pz48vtA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              <h4 style="color: #42dca3">{{$portfolio[16]->body}}</h4>
              <p>{{$portfolio[17]->body}}</p>
              <p> {{$portfolio[18]->body}}<a style="color: #42dca3"> {{$portfolio[19]->body}}  </a></br>
                <a style="color: #42dca3"> {{$portfolio[20]->body}}  </a>{{$portfolio[21]->body}}<a style="color: #42dca3"> {{$portfolio[22]->body}} </a> {{$portfolio[23]->body}}<a style="color: #42dca3"> {{$portfolio[24]->body}} </a>{{$portfolio[25]->body}} <a style="color: #42dca3"> {{$portfolio[26]->body}}  </a>{{$portfolio[27]->body}}</br>{{$portfolio[28]->body}}</br>
             <a style="color: #42dca3">{{$portfolio[29]->body}}</br>
            {{$portfolio[30]->body}}</a>
          </p>
            </div>

            <div class="col-lg-6 mx-auto">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/9u-iQQAZwpw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>

          </div>
        </div>
      </section>


  @stop
