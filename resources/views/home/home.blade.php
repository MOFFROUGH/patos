@extends('home.partials.base')
@section('main-content')
  <section id="home" class="text-center">

          <div id="carousel-example" class="carousel slide" data-ride="carousel">

              <div class="carousel-inner">
                  <div class="item active">

                      <img src="{{asset('assets/img/1.jpg')}}" alt="" />
                      <div class="carousel-caption" >
                          <h4 class="back-light">Building Preparation for MymathKings.com</h4>
                      </div>
                  </div>
                  <div class="item">
                      <img src="{{asset('assets/img/2.jpg')}}" alt="" />
                      <div class="carousel-caption ">
                          <h4 class="back-light">It wasnt easy building Vixens.io</h4>
                      </div>
                  </div>
                  <div class="item">
                      <img src="{{asset('assets/img/3.jpg')}}" alt="" />
                      <div class="carousel-caption ">
                          <h4 class="back-light">And Tinkers.ke Was a good run</h4>
                      </div>
                  </div>
              </div>

              <ol class="carousel-indicators">
                  <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example" data-slide-to="1"></li>
                  <li data-target="#carousel-example" data-slide-to="2"></li>
              </ol>
          </div>

      </section>
      <!--/.SLIDESHOW END-->


      <section id="intro">
          <div class="container">
              <div class="row text-center" >
                  <div class="col-md-12">

                      <div class="row text-center pad-row  ">
                          <div class="col-md-6 col-sm-6 ">
                              <img class="img-circle" src="{{asset('assets/img/team1.png')}}" alt="" />
                              <h3><strong>Patrick Kabuagi</strong> </h3>
                              <p>
                                  Dedicated FreeLancer in structural systems, project management and house renders
                              </p>
                              <!-- <a href="#" class="btn btn-primary" >Read Details</a> -->
                          </div>
                          <div class="col-md-6 col-sm-6" >
                            {{-- <!-- <div class="alert alert-success"> -->
                                <div class="skill-name">PHP- Laravel</div>
                                <div class="progress  progress-adjust">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 86%">
                                        <span class="sr-only">100% Complete</span>
                                    </div>
                                </div>
                            <!-- </div> -->
                              <!-- <div class="alert alert-success"> -->
                                  <div class="skill-name">Python</div>
                                  <div class="progress  progress-adjust">
                                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                          <span class="sr-only">100% Complete</span>
                                      </div>
                                  </div>
                              <!-- </div> -->
                              <!-- <div class="alert alert-success"> -->
                                  <div class="skill-name">Vue js</div>
                                  <div class="progress  progress-adjust">
                                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                          <span class="sr-only">100% Complete</span>
                                      </div>
                                  </div>
                              <!-- </div> -->
                              <!-- <div class="alert alert-success"> -->
                                  <div class="skill-name">HTML5 & CSS3</div>
                                  <div class="progress  progress-adjust">
                                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                          <span class="sr-only">100% Complete</span>
                                      </div>
                                  </div>
                              <!-- </div> -->
                              <!-- <div class="alert alert-success"> -->
                                  <div class="skill-name">Node js</div>
                                  <div class="progress  progress-adjust">
                                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                          <span class="sr-only">100% Complete</span>
                                      </div>
                                  </div>
                              <!-- </div> -->
                              <!-- <div class="alert alert-success"> -->
                                  <div class="skill-name">PHP- Slim/ Lumen</div>
                                  <div class="progress  progress-adjust">
                                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                          <span class="sr-only">100% Complete</span>
                                      </div>
                                  </div>
                              <!-- </div> -->
                              <!-- <div class="alert alert-success"> -->
                                  <div class="skill-name">JavaScript</div>
                                  <div class="progress  progress-adjust">
                                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 67%">
                                          <span class="sr-only">100% Complete</span>
                                      </div>
                                  </div>
                              <!-- </div> --> --}}
                          </div>

                      </div>

                  </div>

              </div>
          </div>
      </section>

      <!--/.INTRO END-->
      <section id="offer"  >
          <div class="container">
              <div class="row   alert alert-info" >
                  <div class="col-sm-12 text-center">
                      <h1>Why Consider Me</h1>
                  </div>
                  {{-- <div class="col-md-4 col-sm-4" style="padding-top: 15px;">
                      <a href="pricing.html" class=" btn btn-primary btn-lg">Web Dev offer Here</a>
                  </div> --}}

              </div>
          </div>
      </section>
      <!--/.OFFFER END-->
      <section id="just-intro">
          <div class="container">
              <div class="row text-center pad-row">
                  <div class="col-md-4  col-sm-4">
                      <i class="fa fa-desktop fa-5x"></i>
                      <h4> <strong>Creativity</strong> </h4>
                      <p>
                          I am dedicated to seeing your business move to the next level.
                      </p>
                      <!-- <a href="#" class="btn btn-primary" >Read Details</a> -->
                  </div>
                  <div class="col-md-4  col-sm-4">
                      <i class="fa fa-flask  fa-5x"></i>
                      <h4> <strong>Custom Made for You</strong> </h4>
                      <p>
                          I beleive in haing unique design for each scenario.
                      </p>
                      <!-- <a href="#" class="btn btn-primary" >Read Details</a> -->
                  </div>
                  <div class="col-md-4  col-sm-4">
                      <i class="fa fa-pencil  fa-5x"></i>
                      <h4> <strong>Customer support</strong> </h4>
                      <p>
                        I know its tough but i will be with you every step of the way
                      </p>
                      <!-- <a href="#" class="btn btn-primary" >Read Details</a> -->
                  </div>

              </div>
          </div>
      </section>
      <!--/.JUST-INTRO END-->
      <section  class="note-sec" >

          <div class="container">
              <div class="row text-center pad-row" >
                  <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 ">
                      <i class="fa fa-quote-left fa-3x"></i>
                      <p>
                          Nature is the best inspiration in terms of designs, but imagination allows us to combine and use this power!
                      </p>
                  </div>
              </div>
          </div>

      </section>
      <!--/.NOTE END-->
      <!-- <section id="clients"  >


          <div class="container">
              <div class="row text-center pad-bottom" >
                  <div class="col-md-12">
                      <img src="assets/img/clients.png" alt="" class="img-responsive" />
                  </div>

              </div>
          </div>
      </section> -->
      <!--/.CLIENTS END-->

@endsection
