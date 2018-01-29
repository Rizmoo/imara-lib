@extends('layouts.base')

@section('content')
    <!-- HOME -->
    <section class="home bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="home-wrapper">
                        <h1 class="animated fadeInDown wow" data-wow-delay=".1s">Professional Landing Page Template</h1>
                        <h4 class="animated fadeInDown wow" data-wow-delay=".2s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat arcu ut orci porta, eget porttitor felis suscipit.<br/> Sed a nisl ullamcorper, tempus augue at, rutrum lacus. Duis et turpis eros.</h4>
                        <a href="#" class="btn btn-custom btn-rnd animated fadeInDown wow" data-wow-delay=".4s">Learn more</a>
                        <div class="clearfix"></div>
                        <a href="http://vimeo.com/99025203" class="video-btn btn popup-video animated fadeInDown wow" data-wow-delay=".6s"><i class="ion-play"></i>Watch Video</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->

    <section class="section bg-gray" id="services">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="title zoomIn animated wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">Best Services</h1>
                    <p class="sub-title zoomIn animated wow animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">Constituto voluptatibus mei ex. Eum soleat lorem Ipsum is simply dummy<br> text of the printing and typesetting industry. </p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="service-item animated fadeInLeft wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                        <i class="ion-social-buffer"></i>
                        <div class="service-detail">
                            <h4>Strategy Solutions</h4>
                            <p>We put a lot of effort in design, as it’s the most important ingredient of successful website.Sed ut perspiciatis unde omnis iste natus error sit.</p>
                        </div> <!-- /service-detail -->
                    </div> <!-- /service-item -->
                </div> <!-- /col -->

                <div class="col-sm-4">
                    <div class="service-item animated fadeInDown wow animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
                        <i class="ion-ipad"></i>
                        <div class="service-detail">
                            <h4>Digital Design</h4>
                            <p>We put a lot of effort in design, as it’s the most important ingredient of successful website.Sed ut perspiciatis unde omnis iste natus error sit.</p>
                        </div> <!-- /service-detail -->
                    </div> <!-- /service-item -->
                </div> <!-- /col -->

                <div class="col-sm-4">
                    <div class="service-item animated fadeInRight wow animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                        <i class="ion-wand"></i>
                        <div class="service-detail">
                            <h4>SEO</h4>
                            <p>We put a lot of effort in design, as it’s the most important ingredient of successful website.Sed ut perspiciatis unde omnis iste natus error sit.</p>
                        </div> <!-- /service-detail -->
                    </div> <!-- /service-item -->
                </div> <!-- /col -->
            </div> <!--end row -->


            <div class="row">
                <div class="col-sm-4">
                    <div class="service-item animated fadeInLeft wow animated" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInLeft;">
                        <i class="ion-coffee"></i>
                        <div class="service-detail">
                            <h4>Graphic Design</h4>
                            <p>We put a lot of effort in design, as it’s the most important ingredient of successful website.Sed ut perspiciatis unde omnis iste natus error sit.</p>
                        </div> <!-- /service-detail -->
                    </div> <!-- /service-item -->
                </div> <!-- /col -->

                <div class="col-sm-4">
                    <div class="service-item animated fadeInUp wow animated" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
                        <i class="ion-stats-bars"></i>
                        <div class="service-detail">
                            <h4>Analystics</h4>
                            <p>We put a lot of effort in design, as it’s the most important ingredient of successful website.Sed ut perspiciatis unde omnis iste natus error sit.</p>
                        </div> <!-- /service-detail -->
                    </div> <!-- /service-item -->
                </div> <!-- /col -->

                <div class="col-sm-4">
                    <div class="service-item animated fadeInRight wow animated" data-wow-delay="1.1s" style="visibility: visible; animation-delay: 1.1s; animation-name: fadeInRight;">
                        <i class="ion-help-buoy"></i>
                        <div class="service-detail">
                            <h4>Dedicated Support</h4>
                            <p>We put a lot of effort in design, as it’s the most important ingredient of successful website.Sed ut perspiciatis unde omnis iste natus error sit.</p>
                        </div> <!-- /service-detail -->
                    </div> <!-- /service-item -->
                </div> <!-- /col -->
            </div> <!-- end row -->
        </div>
    </section>
@endsection