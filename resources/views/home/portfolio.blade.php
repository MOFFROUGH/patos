@extends('home.partials.base')
@section('main-content')
  <section id="home" class="head-main-img">

      <div class="container">
          <div class="row text-center pad-row" >
              <div class="col-md-12">
                  <h1>  MY PORTFOLIO  </h1>
              </div>
          </div>
      </div>

  </section>
  <!--/.HEADING END-->

  <section id="port-sec">
      <div class="container">
          <div class="row pad-row" >
              <div class="col-md-12 col-sm-12" >
                  <ul class="portfolio-items col-3">
                      <li class="portfolio-item">
                          <div class="item-main">
                              <div class="portfolio-image">
                                  <img src="{{asset('assets/img/d1.jpeg')}}" alt="">
                                  <div class="overlay">
                                      <a class="preview btn btn-primary" title="Render 1" href="{!! route('project','my-last-project') !!}">VIEW PROJECT</a>
                                  </div>
                              </div>
                              <h5>Lnascaping, MT colo housing</h5>
                          </div>
                      </li>
                      <li class="portfolio-item">
                          <div class="item-main">
                              <div class="portfolio-image">
                                  <img src="{{asset('assets/img/d2.jpeg')}}" alt="">
                                  <div class="overlay">
                                      <a class="preview btn btn-primary" title="Image Title Here" href="{!! route('project','my-first-project') !!}">VIEW PROJECT</a>
                                  </div>
                              </div>
                              <h5>Kiambu Heights</h5>
                          </div>
                      </li>
                      <li class="portfolio-item">
                          <div class="item-main">
                              <div class="portfolio-image">
                                  <img src="{{asset('assets/img/d3.jpeg')}}" alt="">
                                  <div class="overlay">
                                      <a class="preview btn btn-primary" title="Image Title Here" href="{!! route('project','my-second-project') !!}">VIEW PROJECT</a>
                                  </div>
                              </div>
                              <h5>Mr Njihia Bungalow</h5>
                          </div>
                      </li>

                  </ul>
              </div>
          </div>
      </div>
  </section>
  <!--/. END PORTFOLIO SECTION-->
  <section  class="note-sec" >

      <div class="container">
          <div class="row text-center pad-row" >
              <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 ">
                  <i class="fa fa-quote-left fa-3x"></i>
                  <p>
                      Driven by passion and dedication, anything can be achieved. With a good team, it gets easy, with resources it gets beyond your expectations
                  </p>
              </div>
          </div>
      </div>

  </section>
  <!--/.NOTE END-->
@endsection
