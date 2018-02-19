@extends('layouts.base')
@section('styles')
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="m-t-0 header-title"><b>{{ $category -> title }}</b></h4>
                        @foreach($kids as $kid)
                         <a href="{{ route('categories.show', $kid->id) }}" class="" style="font-size: 25px" ><span class="fa fa-folder">&nbsp;&nbsp;&nbsp; {{ $kid-> title }}</span></a> <br>
                        @endforeach

                    </div><!-- end col -->
                </div> <!-- end row -->
            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div>

@endsection

@section('scripts')
@endsection