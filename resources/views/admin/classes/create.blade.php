
@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card-box">
                <h4 class="m-t-0 m-b-30 header-title">Basic Example</h4>
                {{ Form::open(array('route' => 'classes.store','data-parsley-validate')) }}

                @include('admin.classes.forms.classes')

                {{ Form::submit('Submit', array('class' => 'btn btn-custom')) }}

                {{ Form::close() }}

            </div>
        </div>
        <!-- end col -->
    </div>
@endsection
