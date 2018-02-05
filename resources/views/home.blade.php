@extends('layouts.base')

@section('content')
    <section class="section bg-gray" id="services">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="title zoomIn animated wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">Best Services</h1>
                    <p class="sub-title zoomIn animated wow animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">Constituto voluptatibus mei ex. Eum soleat lorem Ipsum is simply dummy<br> text of the printing and typesetting industry. </p>
                </div>
            </div>

            <div class="row">
                @foreach($categories as $category)
                <div class="col-sm-12">
                    <div class="service-item animated fadeInLeft wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                        <i class="ion-social-buffer"></i>
                        <div class="service-detail">
                            <a href="{{url('/items?ref=')}}{{$category->id}}" class="btn btn-default  btn-xs"><h4>{{$category->title}}</h4></a>
                        </div> <!-- /service-detail -->
                    </div> <!-- /service-item -->
                </div> <!-- /col -->
                @endforeach
            </div> <!--end row -->

        </div>
    </section>
@endsection
