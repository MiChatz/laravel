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
                <p class="intro-text">At this page you can find some samples of my work.</p>
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

                <h4 style="color: #42dca3">BanDemoniC</h4>

              <p>Burn the Witch </br>
                <a href="https://itunes.apple.com/gr/album/burn-the-witch/943926728?i=943926846">Lisent on iTunes  </a><a style="color: #42dca3">   ||   </a>
                <a href="https://www.amazon.com/gp/product/B00Q525C7S?ie=UTF8&*Version*=1&*entries*=0">  Find it on Amazon</a> </br>
              Steel Gallery Records - A BlankTV World Premiere!</p>
              <p>"Burn the Witch" depicts a medieval witch-hunt and the negative effects of fanaticism, a theme that resonates even more soundly in recent years.
    We shot on two non-consecutive full-day sessions between September and October 2015, in an abandoned quarry on the outskirts of our hometown, Ioannina, Greece.</p>
            </div>

            <div class="col-lg-6 mx-auto">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/LCYLlQoeOOI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                <h4 style="color: #42dca3">BanDemoniC</h4>

              <p> Unbent, Unbowed, Unbroken </br>
                <a href="https://bandemonic09.bandcamp.com/album/against-all-odds">Order here</a><a style="color: #42dca3">   ||   </a>
                <a href="http://www.steelgallery.com/metal-store/product/bandemonic-against-all-odds-pre-order-cd/">  And here</a> </br>
              </p>
              <p>All "Against All Odds" songs including this track, Produced & Arranged by BanDemoniC.</br>Music by: C. Chairopoulos</br>Lyrics by: A. Kyprianos
              </br>All Rights Reserved.</p>
            </div>

            <div class="col-lg-6 mx-auto">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/2Qf2Pz48vtA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              <p>Against All Odds</p>
              <p> new cooperation with<a style="color: #42dca3"> STEEL GALLERY Records  </a></br>
                <a style="color: #42dca3"> STEEL GALLERY RECORDS  </a>agreed with<a style="color: #42dca3"> BANDEMONIC </a> to officially release their latest album<a style="color: #42dca3"> “Against All Odds” </a>that was self-released exclusively by the band some months ago, specifically on October 26th 2017!Within six months, the band managed to sell all copies and so the label from Thessaloniki, that had already released the first album of the band titled <a style="color: #42dca3"> "Fires Of Redemption"  </a>back in 2014, decided to release the second album too, adding some extras!</br>More information and release date will be announced soon by the label</br>
             <a style="color: #42dca3">...STAY TUNED...AND...</br>
            ...Let The Fires Burn...</a>
          </p>
            </div>

            <div class="col-lg-6 mx-auto">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/9u-iQQAZwpw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>

          </div>
        </div>
      </section>


  @stop
