@extends('layouts.base')
@section('styles')
    <link href="{{asset('theme/plugins/slick-slider/slick.css')}}" rel="stylesheet" />
    <link href="{{asset('theme/plugins/slick-slider/slick-theme.css')}}" rel="stylesheet" />
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="fade-slider slider ">
                    <div>
                        <img src="{{asset('theme/assets/images/big/img-2.jpg')}}" alt="slider-img" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{asset('theme/assets/images/big/img-1.jpg')}}" alt="slider-img" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{asset('theme/assets/images/big/img-3.jpg')}}" alt="slider-img" class="img-fluid">
                    </div>
                </div>
            </div>
        </div><!-- end col -->
    </div>
    <div class="container text-center">

        <div class="row">
            <div class="col-sm-12">
                <h2 class="title">Who are we ?</h2>
                <p class="slogan">
                    Imara lib is an online resource provider for scholars in kenya.
                </p>
            </div>
        </div> <!-- End row -->

        <div class="row">
            <div class="col-sm-4">
                <div class="features-2">
                    <img class="icon-colored" src="{{asset('theme/assets/images/icons/share.svg')}}" alt="">
                </div>
                <div>
                    <h4>Responsive Design</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div> <!-- end col -->

            <div class="col-sm-4">
                <div class="features-2">
                    <img class="icon-colored" src="{{asset('theme/assets/images/icons/graduation_cap.svg')}}" alt="">
                </div>
                <div>
                    <h4>Clean Code</h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Ut enim ad minim veniam, quis.</p>
                </div>
            </div> <!-- end col -->

            <div class="col-sm-4">
                <div class="features-2">
                    <img class="icon-colored" src="{{asset('theme/assets/images/icons/reading.svg')}}" alt="">
                </div>
                <div>
                    <h4>Easy Customize</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Ut enim ad minim veniam.</p>
                </div>
            </div> <!-- end col -->

        </div> <!-- End row -->

        <div class="row card-box">
           <div class="col-lg-4">
                        <div class="card-box ribbon-box">
                            <div class="ribbon ribbon-custom">Custom Ribbon</div>
                            <p class="m-b-0">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam mattis dictum aliquet. Nulla sapien mauris, eleifend et sem ac, commodo dapibus odio.</p>
                        </div>
                    </div>
            <div class="col-lg-4">
                        <div class="card-box ribbon-box">
                            <div class="ribbon ribbon-primary">Primary Ribbon</div>
                            <p class="m-b-0">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam mattis dictum aliquet. Nulla sapien mauris, eleifend et sem ac, commodo dapibus odio.</p>
                        </div>
                    </div>
            <div class="col-lg-4">
                        <div class="card-box ribbon-box">
                            <div class="ribbon ribbon-success">Success Ribbon</div>
                            <p class="m-b-0">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam mattis dictum aliquet. Nulla sapien mauris, eleifend et sem ac, commodo dapibus odio.</p>
                        </div>
                    </div>
         </div>

    </div>
@endsection

@section('scripts')
    <script src="{{asset('theme/plugins/slick-slider/slick.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('theme/assets/pages/jquery.slider.init.js')}}"></script>
@endsection