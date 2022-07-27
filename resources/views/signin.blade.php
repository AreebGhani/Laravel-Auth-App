<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Pcoint</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/logo.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <!-- <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div> -->
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="head_top">
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <a href="{{url('home')}}"><img src="images/logo.png" alt="#" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                            <nav class="navigation navbar navbar-expand-md navbar-dark ">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div style="background: lightgrey;border-radius:50px;" class="collapse navbar-collapse" id="navbarsExample04">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('home')}}"> Home </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('about')}}">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('contact')}}">Contact us</a>
                                        </li>
                                    </ul>
                                    <div class="sign_btn">
                                        @if (Auth::check())
                                        <a href="" id="logout_confirm">Log Out</a>
                                        @else
                                        <a href="{{url('signin')}}">Sign In</a>
                                        @endif
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
        </div>
    </header>
    <br>
    <!-- end header -->
    <!-- request -->
    <div id="contact" class="request">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Sign In</h2>
                        <span>Explore more features and enjoy our site by logging with your account.
                            <br>
                            Don't have an account, <a href="{{url('signup')}}">Create One</a>.
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="black_bg">
                        <div class="row container">
                            <div class="col-md-12">
                                <form class="main_form" method="POST" action="{{ route('login.custom') }}" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            @if(Session::get('error'))
                                            <span class="text-danger">{{ Session::get('error') }}</span>
                                            @endif
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                            <input required class="contactus" placeholder="Email" type="email" name="email" autofocus>
                                        </div>
                                        <div class="col-md-12">
                                            @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                            <input required class="contactus" placeholder="Password" type="password" name="password">
                                        </div>
                                        <div class="col-sm-12">
                                            <button type="submit" name="signin" class="send_btn">Sign In</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end request -->
    <br><br>
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="cont">
                            <h3> <strong class="multi"> Free Multipurpose</strong><br>
                                Responsive Landing Page
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cont_call">
                            <h3> <strong class="multi"> Call Now</strong><br>
                                (+1) 12345667890
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>© <script>
                                    var date = new Date;
                                    document.write(date.getFullYear());
                                </script> All Rights Reserved. Design by <a href="{{url('home')}}"> Pcoint</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $('#logout_confirm').click(function(a) {
            var e = confirm('Do you want to Logout . . .');
            if (e) {
                window.location.href = "{{route('signout')}}";
            }
            a.preventDefault();
        });
    </script>
</body>

</html>