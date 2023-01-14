<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- META DATA -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->



    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <!-- TITLE OF SITE -->
    <title>TourExpert</title>

    <!-- for title img -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/logo/favicon.png"/>

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--linear icon css-->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    <!--animate.css-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--hover.css-->
    <link rel="stylesheet" href="assets/css/hover-min.css">

    <!--vedio player css-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet"/>


    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- bootsnav -->
    <link href="assets/css/bootsnav.css" rel="stylesheet"/>

    <!--style.css-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--responsive.css-->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

           #tour_table td, #tour_table th {
            font-size:24px ;
            text-align: center;
            vertical-align: center;
            margin: auto;
            padding: 20px;

        }
        #tour_table tr:nth-child(even){background-color: #f2f2f2;}
        #tour_table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color:#63464b;
            color: white;
            }
        #login,#login:hover{
            font-family: Fantasy;
            font-size:30px;
            margin-left: 350px;
            pointer-events: auto;
        }
        </style>

</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->


<!--header start-->
<section id="home"  class="header">
    <div class="container">
        <div class="header-left">
            <ul class="pull-left">
                <li>
                    <h1 style="color:mediumslateblue;">TourExpert</h1>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-phone" aria-hidden="true"></i> +992 563 542
                    </a>
                </li><!--/li-->
                <li>
                    <a href="#">
                        <i class="fa fa-envelope" aria-hidden="true"></i>info@mail.com
                    </a>
                </li>
                <li>
                    <a id="login"href="{{ url('/admin') }}" >Log in</a>
                </li><!--/li-->
            </ul><!--/ul-->
        </div><!--/.header-left -->
        <div class="header-right pull-right">
            <ul>
                <li class="reg">

                    <!-- small modal -->
                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											 	<span aria-hidden="true">
											 		<i class="fa fa-close"></i>
											 	</span>
                                    </button>
                                    <h4 class="modal-title" id="mySmallModalLabel">
                                        Sign In
                                    </h4>
                                    <form class="sm-frm" style="padding:25px">
                                        <label>Name :</label>
                                        <input type="text" class="form-control" placeholder="Enter Email">
                                        <label>Passoward :</label>
                                        <input type="text" class="form-control" placeholder="Enter Passoward">
                                        <label><input type="checkbox" name="personality"> Remenber Me</label>
                                        <button type="button" class="btn btn-default pull-right">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- large modal -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											 	<span aria-hidden="true">
											 		<i class="fa fa-close"></i>
											 	</span>
                                    </button>
                                    <h4 class="modal-title" id="myLargeModalLabel">Register</h4>
                                    <form class="lg-frm" style="padding:25px">
                                        <label>Name :</label>
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                        <label>Email :</label>
                                        <input type="text" class="form-control" placeholder="Enter Email">
                                        <label>Passoward :</label>
                                        <input type="text" class="form-control" placeholder="Enter Passoward">
                                        <button type="button" class="btn btn-default pull-right">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li><!--/li -->
                <li>
                  <!--/.social-icon -->
                </li><!--/li -->
            </ul><!--/ul -->
        </div><!--/.header-right -->
    </div><!--/.container -->

</section><!--/.header-->
<!--header end-->

<!--menu start-->
<!--/.navbar-header -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


</section><!--/#menu-->
<!--menu end-->

<!-- header-slider-area start -->
<section class="header-slider-area">
    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

<section id="about" class="about-us">
        @yield('content')
</section><!--/.about-us--><!--/.about-us-->
<!--about-us end -->

<!--service start-->


<!--hm-footer start-->


<!-- footer-copyright start -->
<footer class="footer-copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div class="foot-copyright pull-left">
                    <p>
                        &copy;TourExpert 2023
                </div><!--/.foot-copyright-->
            </div><!--/.col-->
            <div class="col-sm-5">
                <!-- /.foot-menu-->
            </div><!--/.col-->
        </div><!--/.row-->
        <div id="scroll-Top">
            <i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
        </div><!--/.scroll-Top-->
    </div><!-- /.container-->

</footer><!-- /.footer-copyright-->
<!-- footer-copyright end -->



<!-- jaquery link -->

<script src="assets/js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<!--modernizr.min.js-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


<!--bootstrap.min.js-->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<!-- bootsnav js -->
<script src="assets/js/bootsnav.js"></script>

<!-- for manu -->
<script src="assets/js/jquery.hc-sticky.min.js" type="text/javascript"></script>


<!-- vedio player js -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<!-- isotope js -->
<!-- <script src="assets/js/masonry.min.js"></script>
<script src="assets/js/isotop-custom.js"></script> -->

<!--owl.carousel.js-->
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>

<!-- counter js -->
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>

<!--Custom JS-->
<script type="text/javascript" src="assets/js/jak-menusearch.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>


</body>

</html>



