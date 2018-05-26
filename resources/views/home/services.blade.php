@extends('home.partials.base')
@section('main-content')
  <section id="home" class="head-main-img">

    <div class="container">
      <div class="row text-center pad-row" >
        <div class="col-md-12">
          <h1> SERVICES  </h1>
        </div>
      </div>
    </div>

  </section>
  <!--/.HEADING END-->

  <section >
    <div class="container">
      <div class="row text-center pad-row">
        <div class="col-md-4  col-sm-4">
          <i class="fa fa-desktop fa-5x"></i>
          <h4> <strong>Architectural Services</strong> </h4>
          <p>
            We offer design and implementation of modern and affordable house plans
          </p>
          <a href="#" class="btn btn-primary" >Read Details</a>
        </div>
        <div class="col-md-4  col-sm-4">
          <i class="fa fa-bomb fa-5x"></i>
          <h4> <strong>LandScaping</strong> </h4>
          <p>
            Beauty and coherence is the main service i offer. blending it all for you
          </p>
          <a href="#" class="btn btn-primary" >Read Details</a>
        </div>
        <div class="col-md-4  col-sm-4">
          <i class="fa fa-plus  fa-5x"></i>
          <h4> <strong>Interior Design</strong> </h4>
          <p>
            What good is it to have a beuatiful structure and an unpleasant interior!
          </p>
          <a href="#" class="btn btn-primary" >Read Details</a>
        </div>


      </div>
      
    </div>
  </section>
  <section  class="note-sec" >

    <div class="container">
      <div class="row text-center pad-row" >
        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 ">
          <i class="fa fa-quote-left fa-3x"></i>
          <p>
            Service is not a one time offer, service is a life long satisafaction
          </p>
        </div>
      </div>
    </div>

  </section>
  <!--/.NOTE END-->
  {{-- <section id="clients"  >


    <div class="container">
      <div class="row text-center pad-bottom" >
        <div class="col-md-12">
          <img src="assets/img/clients.png" alt="" class="img-responsive" />
        </div>

      </div>
    </div>
  </section> --}}
  <!--/.CLIENTS END-->
@endsection
