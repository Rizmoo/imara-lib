@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card-box">
                <h4 class="m-t-0 m-b-30 header-title">Basic Example</h4>
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
        <!-- end col -->
    </div>
@endsection
