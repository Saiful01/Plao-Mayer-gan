<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs ================================================== -->
    <meta charset="utf-8">

    <!-- Mobile Specific Metas ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>মায়ের ভাষায় ঘুমপাড়ানি গান</title>
    <!-- Site Title -->



    <!-- CSS
          ================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/theme/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="/theme/css/font-awesome.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="/theme/css/animate.css">
    <!-- magnific -->
    <link rel="stylesheet" href="/theme/css/magnific-popup.css">
    <!-- carousel -->
    <link rel="stylesheet" href="/theme/css/owl.carousel.min.css">
    <!-- isotop -->
    <link rel="stylesheet" href="/theme/css/isotop.css">
    <!-- ico fonts -->
    <link rel="stylesheet" href="/theme/css/xsIcon.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="/theme/css/style.css">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="/theme/css/responsive.css">

    <link rel="stylesheet" href="/css/custom.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <link rel="icon" type="image/png" href="/images/favicon.png">


    <meta property="og:image" content="{{ $thumbnail }}"/>
    <meta property="og:image:width" content="600"/>
    <meta property="og:image:height" content="375"/>
    <meta property="og:title" content="{{ $fb_title }} ">
    <meta property="og:description"
          content="{{ $fb_sub_title }}">
    <script>
        var app = angular.module('myApp', []);

        console.log("My App Initiated")

    </script>


    {{--    <link rel="stylesheet" href="/theme/css/custom.css">--}}

    <style>
        .ts-intro-item .single-intro-text {
            min-height: 325px;
        }

        .ts-title {
            font-size: 24px;
            padding-top: 33px;
            margin-bottom: -5px;
        }

        .copyright-area {
            background: #f4f4f4;
            padding-top: 30px;
        }

        .ts-speakers {
            padding-top: 40px;
            padding-bottom: 40px;

        }

        .ts-speaker {
            border: 1px solid #e2e2e2;
        }

        .ts-title {
            padding-top: 10px;
        }

        .navbarmiddle {
            margin-left: 37% !important;
        }

        section, .section-padding {
            padding: 40px 0;
            position: relative;
        }

        .section-title, .column-title {

            position: relative;
            padding-bottom: 30px;
            margin-bottom: 50px;
        }
        .check{
            margin-left: 20px
        }


        .form-check-label {
            padding-left: 1.25rem;
            margin-bottom: 0;
            background: #ef3f23;
            width: 100%;
            padding: 10px 30px;
            border-radius: 5px;
            color: #fff;
        }

        .question {
            background: #ef3f23;
            margin-left: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .question p {
            padding-bottom: 0px;
            padding-top: 12px;
            color: #fff;
            padding-left: 10px;
            padding-right: 10px;
        }

        .btn {
            background: #ef3f23;
            border: 1px solid #ef3f23;
            width: 45%;
        }

        .btn-primary:hover {
            background: #ef3f23;
            border: 1px solid #ef3f23;
            width: 47%;
        }

        .form-control {
            padding: 10px 10px;
        }

        .swal2-styled.swal2-confirm {
            background-color: #ef3f23 !important;
        }

        .mobile {
            display: none;
        }

        .desktop {
            display: block;
        }

        @media (max-width: 767px) {
            .header .navbar-light .navbar-toggler {
                background: #ef3f23;
                color: #fff;
                border-color: #ef3f23;
            }

            .section-title, .column-title {

                padding-top: 20px;
            }

            .ts-speakers, section, .ts-intro-item {
                padding: 10px 0;
            }

            .section-title, .column-title {
                position: relative;
                padding-bottom: 30px;
                margin-bottom: 25px;
            }

            .question {
                margin-left: 15px;
                margin-bottom: 0px;
                border-radius: 5px;
            }

            .header .navbar-light .navbar-toggler {
                background: #ef3f23;
                color: #fff;
                border-color: #ef3f23;
            }

            .mobile {
                display: block;
            }

            .desktop {
                display: none;
            }

            .footer-logo {
                height: 45px !important;
                margin-left: -10px;
            }
        }

        form {
            margin-top: 10px;
        }

        ul {
            padding: 0;
            margin: 0;
            padding: 0px 20px;
        }

        a {
            color: #ef3f23;

        }

        .header .navbar-light .navbar-toggler {
            background: #ef3f23;
            color: #fff;
            border-color: #ef3f23;
        }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MDSGJVCQP2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-MDSGJVCQP2');
    </script>
</head>

<body ng-app="myApp" ng-controller="myController">
<div class="body-inner">
    <!-- Header start -->
  <header id="header" class="header header-classic">
      <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
              <!-- logo-->
              <a class="navbar-brand" href="/">

                 <img src="/images/gum_logo.png" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav ml-auto">
                      <li class="dropdown nav-item active">
                          <a style="color:#EF3F23 " href="/">হোম </a>
                      </li>
                      <li class="nav-item">
                          <a href="#apply">স্ট্যাটাস লিখুন</a>
                      </li>
                      <li class="nav-item">
                          <a href="#status">স্ট্যাটাস পোস্ট </a>
                      </li>


                  </ul>
              </div>
          </nav>
      </div><!-- container end-->
  </header>
<!--/ Header end -->


    @yield('content')


    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <div class="row">
                    <div class="col-md-10 col-12 mx-auto">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <img src="/images/palologoblack.png" class="footer-logo" style="height: 75px"/>
                                {{-- <img src="/images/palologo.png" style="height: 75px"/>--}}
                            </div>
                            <div class="col-md-6 col-12">
                                <p class="footer-p">
                                    কপিরাইট ©
                                    <a href="https://www.prothomalo.com/" target="_blank">
                                        প্রথম আলো ডিজিটাল
                                    </a>
                                    <br>
                                    প্রগতি ইনস্যুরেন্স ভবন, ২০-২১ কারওয়ান বাজার, ঢাকা ১২১৫। <br>ফোন: ৮১৮০০৭৮-৮১</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Javascript Files
          ================================================== -->
    <!-- initialize jQuery Library -->
    <script src="/theme/js/jquery.js"></script>

    <script src="/theme/js/popper.min.js"></script>
    <!-- Bootstrap jQuery -->
    <script src="/theme/js/bootstrap.min.js"></script>
    <!-- Counter -->
    <script src="/theme/js/jquery.appear.min.js"></script>
    <!-- Countdown -->
    <script src="/theme/js/jquery.jCounter.js"></script>
    <!-- magnific-popup -->
    <script src="/theme/js/jquery.magnific-popup.min.js"></script>
    <!-- carousel -->
    <script src="/theme/js/owl.carousel.min.js"></script>
    <!-- Waypoints -->
    <script src="/theme/js/wow.min.js"></script>
    <!-- isotop -->
    <script src="/theme/js/isotope.pkgd.min.js"></script>

    <!-- Template custom -->
    <script src="/theme/js/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</div>
<!-- Body inner end -->

@if(Session::has('error'))
    <script>
        Swal.fire({
            text: '{{ Session::get('error')}}',
            icon: 'error',
            confirmButtonText: 'ওকে '
        })
    </script>
@endif


@if(Session::has('message'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '{{ Session::get('message')}}',
            showConfirmButton: true,
            confirmButtonText: 'ঠিক আছে '
        })
    </script>
@endif

</body>


</html>
