<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Moffat Munene" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>@yield('title')</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body >

    <div class="navbar navbar-default navbar-fixed-top" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Moffat Munene</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">HOME</a></li>
                    <li><a href="/services">SERVICES</a></li>
                    <li><a href="/portfolio">PORTFOLIO</a></li>
                    <li><a href="/pricing">PRICING</a></li>
                    <li><a href="/contact">CONTACT</a></li>
                </ul>
            </div>

        </div>
    </div>
    @section('main-content')

    @show
    <!--/.FOOTER END-->
    <section id="footer-sec" >

        <div class="container">
            <div class="row  pad-bottom" >
                <div class="col-md-4">
                    <h4> <strong>ABOUT MOFFAT</strong> </h4>
                    <p>
                        Always committed to deadlines and has a sharp ear to customer needs.
                        My slogan: Never fail to execute your task because of the rains.
                    </p>
                </div>
                <div class="col-md-4">
                    <h4> <strong>SOCIAL LINKS</strong> </h4>
                    <p>
                        <a href="#"><i class="fa fa-facebook-square fa-3x"  ></i></a>
                        <a href="#"><i class="fa fa-twitter-square fa-3x"  ></i></a>
                        <a href="#"><i class="fa fa-linkedin-square fa-3x"  ></i></a>
                        <a href="#"><i class="fa fa-google-plus-square fa-3x"  ></i></a>
                    </p>
                </div>
                <div class="col-md-4">
                    <h4> <strong>LOCATION</strong> </h4>
                    <p>
                        Nairobi, <br />
                        Kenya
                    </p>
                    <!-- <a href="#" class="btn btn-primary" >SEND QUERY</a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="{{asset('assets/plugins/jquery-1.10.2.js')}}"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="{{asset('assets/plugins/bootstrap.js')}}"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
  </body>
  </html>
