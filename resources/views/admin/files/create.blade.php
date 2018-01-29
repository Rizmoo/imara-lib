@extends('layouts.base')

@section('content')
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-sm-12">
                        <div class="service-item animated fadeInLeft wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                            <i class="ion-social-buffer"></i>
                            <div class="service-detail">
                                <h4>Create Category</h4>
                                <p>We put a lot of effort in design, as it’s the most important ingredient of successful website.Sed ut perspiciatis unde omnis iste natus error sit.</p>
                            </div> <!-- /service-detail -->
                        </div> <!-- /service-item -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class=" panel-default">
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('files.store') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                @include('admin.files.forms.upload')

                                <div class="row">
                                    <div class="col-xs-12">
                                        <button type="submit" class="btn btn-custom" id="send">Submit</button>
                                    </div> <!-- /col -->
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 @endsection
