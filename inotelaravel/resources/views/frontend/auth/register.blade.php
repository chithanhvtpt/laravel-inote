<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/auth-sign-up-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 May 2021 03:15:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Admindek | Admin Template</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="colorlib" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset("assets/images/favicon.ico")}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset("bower_components/bootstrap/css/bootstrap.min.css")}}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset("assets/pages/waves/css/waves.min.css")}}" type="text/css" media="all"><!-- feather icon --> <link rel="stylesheet" type="text/css" href="{{asset("assets/icon/feather/css/feather.css")}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/icon/themify-icons/themify-icons.css")}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/icon/icofont/css/icofont.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/icon/font-awesome/css/font-awesome.min.css")}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/style.css")}}"><link rel="stylesheet" type="text/css" href="{{asset("assets/css/pages.css")}}">
</head>

<body themebg-pattern="theme1">
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="loader-track">
        <div class="preloader-wrapper">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<section class="login-block">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <!-- Authentication card start -->
                <form class="md-float-material form-material" method="post">
                    @csrf
                    <div class="text-center">
                        <img src="{{asset("assets/images/logo.png")}}" alt="logo.png">
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Sign up</h3>
                                </div>
                            </div>
{{--                            <div class="row m-b-20">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <a href="#!" class="btn btn-facebook m-b-20 btn-block waves-effect waves-light"><i class="icofont icofont-social-facebook"></i>facebook</a>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <a href="#!" class="btn btn-twitter m-b-0 btn-block waves-effect waves-light"><i class="icofont icofont-social-twitter"></i>twitter</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <p class="text-muted text-center p-b-5">Sign up with your regular account</p>
                            <div class="form-group form-primary">
                                <input type="text" name="name" class="form-control" >
                                <span class="form-bar"></span>
                                <label class="float-label">Your Name</label>
                                @error("name")
                                <p class="text text-danger" >{{$message}}</p>
                                @enderror

                            </div>
                            <div class="form-group form-primary">
                                <input type="email" name="email" class="form-control" >
                                <span class="form-bar"></span>
                                <label class="float-label">Your Email Address</label>
                                @error("email")
                                <p class="text text-danger" >{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group form-primary">
                                <input type="password" name="password" class="form-control" >
                                <span class="form-bar"></span>
                                <label class="float-label">Password</label>
                                @error("password")
                                <p class="text text-danger" >{{$message}}</p>
                                @enderror
                            </div>'

                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up now</button>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Thank you.</p>
                                    <p class="text-inverse text-left"><a href="{{route("login.form")}}"><b style="font-weight: bolder">Back to website</b></a></p>
                                </div>
                                <div class="col-md-2">
                                    <img src="{{asset("assets/images/auth/Logo-small-bottom.png")}}" alt="small-logo.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Authentication card end -->
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container-fluid -->
</section>
<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 10]-->

<script type="text/javascript" src="{{asset("bower_components/jquery/js/jquery.min.js")}}"></script>
<script type="text/javascript" src="{{asset("bower_components/jquery-ui/js/jquery-ui.min.js")}}"></script>
<script type="text/javascript" src="{{asset("bower_components/popper.js/js/popper.min.js")}}"></script>
<script type="text/javascript" src="{{asset("bower_components/bootstrap/js/bootstrap.min.js")}}"></script>
<!-- waves js -->
<script src="{{asset("assets/pages/waves/js/waves.min.js")}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset("bower_components/jquery-slimscroll/js/jquery.slimscroll.js")}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{asset("bower_components/modernizr/js/modernizr.js")}}"></script>
<script type="text/javascript" src="{{asset("bower_components/modernizr/js/css-scrollbars.js")}}"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="{{asset("bower_components/i18next/js/i18next.min.js")}}"></script>
<script type="text/javascript" src="{{asset("bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js")}}"></script>
<script type="text/javascript" src="{{asset("bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js")}}"></script>
<script type="text/javascript" src="{{asset("bower_components/jquery-i18next/js/jquery-i18next.min.js")}}"></script>
<script type="text/javascript" src="{{asset("assets/js/common-pages.js")}}"></script>
</body>


<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/auth-sign-up-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 May 2021 03:15:28 GMT -->
</html>
