@extends('home.partials.base')
@section('main-content')
  <section id="home" class="head-main-img">

      <div class="container">
          <div class="row text-center pad-row" >
              <div class="col-md-12">
                  <h1>  Contact me </h1>
              </div>
              <div class="col-md-6">
                <p>
                  <i class="fa fa-phone fa-3x"></i> +254 700 000 000 <br />
                  <i class="fa fa-3x fa-envelope"></i> patrickkabuagi@gmail.com <br />
                  <i class="fa fa-3x fa-map-marker"></i> Nairobi, Kenya
                </p>
              </div>
              <div class="col-md-6">
                  <form class="" action="index.html" method="post">
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="" placeholder="Your Name">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="" placeholder="Your Email">
                      </div>
                      <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" rows="8" class="form-control" cols="67" placeholder="Message"></textarea>

                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-default">
                            Send
                        </button>
                      </div>
                  </form>
              </div>
              <!-- <div class="col-md-12">

              </div> -->
          </div>
      </div>

  </section>
<section>
  
</section>
<section  class="note-sec" >

  <div class="container">
      <div class="row text-center pad-row" >
          <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 ">
              <i class="fa fa-quote-left fa-3x"></i>
              <p>
                  Customer Support Cannot be substituted. You must ensure your client is always happy no matter what
              </p>
          </div>
      </div>
  </div>

</section>
<!--/.NOTE END-->
@endsection
