<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Coderthemes">
    <link rel="shortcut icon" href="images/favicon.ico">

    <title>Lugada - Landing Page</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Animate -->
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">

    <!-- Magnific-popup -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

    <!-- flex slider css -->
    <link href="{{asset('assets/css/flexslider.css')}}" rel="stylesheet" type="text/css" media="screen">

    <!-- Icon-font -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/ionicons.min.css')}}">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>


<div class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Navbar-header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="ion-navicon"></i>
            </button>
            <!-- LOGO -->
            <a class="navbar-brand logo" href="{{url('/')}}}">
                <i class="ion-ios-book"></i>
                <span>IMARA LIB</span>
            </a>
        </div>
        <!-- end navbar-header -->

        <!-- menu -->
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#features">Features</a>
                </li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown">
                        Categories
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu arrow">
                        <li><a href="{{route('categories.create')}}">Create</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown">
                        Classes
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu arrow">
                        <li><a href="{{route('classes.create')}}">Classes</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown">
                        Subjects
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu arrow">
                        <li><a href="{{route('subjects.create')}}">Create Subject</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown">
                        Files
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu arrow">
                        <li><a href="{{route('files.create')}}">Files</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--/Menu -->
    </div>
    <!-- end container -->
</div>
<!-- End navbar -->
@yield('content')


<!-- FOOTER -->
<footer class="section bg-gray footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h5>Lugada</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-sm-6">
                <h5>Social</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Behance</a></li>
                    <li><a href="#">Dribbble</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-sm-6">
                <h5>Support</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Help & Support</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-sm-6">
                <h5>Contact</h5>
                <address>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    <abbr title="Phone">P:</abbr> (123) 456-7890<br/>
                    E: <a href="mailto:lugada@lugada.com">lugada@lugada.com</a>
                </address>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="footer-alt">
                    <p class="pull-right">2015 © Lugada</p>
                    <p class="logo"><i class="ion-social-buffer"></i>Lugada</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- END FOOTER -->




<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Jquery easing -->
<script type="text/javascript" src="{{asset('assets/js/jquery.easing.1.3.min.js')}}"></script>
<script src="{{asset('assets/js/SmoothScroll.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!--flex slider plugin-->
<script src="{{asset('assets/js/jquery.flexslider-min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>


<!--common script for all pages-->
<script src="{{asset('assets/js/jquery.app.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
<script type="text/javascript">
    $('.select').select2({
        placeholder: 'Select an option'
    });

    $('#class').on('change', function (e) {
        var cat_id = e.target.value;
        alert(cat_id);
        $.get('/subcat?cat_id=' + cat_id, function (data) {
            $('#subject').empty();
            $.each(data, function (index, subcatObj) {
                $('#subject').append('<option value="' + subcatObj.id + '">' + subcatObj.title + '</option>');

            });

        });
    });
</script>


</body>

</html>
