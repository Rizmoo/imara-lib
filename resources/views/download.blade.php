@extends('layouts.base')
@section('styles')
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                {{--<button type="button" class="btn btn-sm btn-primary btn-rounded w-md waves-effect waves-light pull-right">Add Files</button>--}}
                <h4 class="header-title m-b-30">My Files</h4>

                <div class="row">

                    @forelse($files as $file)
                       <div class="col-xs-6 col-sm-3 col-md-2">
                           <div class="file-man-box">
                               <a href="#" class="file-close"><i class="mdi mdi-close-circle"></i></a>
                               <div class="file-img-box">
                                   <img src="{{asset('theme/assets/images/file_icons/pdf.svg')}}" alt="icon">
                               </div>
                               <a href="{{url('/download?ref=')}}{{$file->id}}" class="file-download"><i class="mdi mdi-download"></i> </a>
                               <div class="file-man-title">
                                   <h5 class="m-b-0 text-overflow">{{$file->title}}</h5>
                                   <p class="m-b-0"><small>568.8 kb</small></p>
                               </div>
                           </div>
                        </div>
                    @empty
                        <div class="container text-center">

                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 class="title">No files found</h2>
                                    <a href="{{ url()->previous() }}" class="btn btn-outline-danger">Go Back</a>
                                </div>
                            </div> <!-- End row -->
                        </div>
                    @endforelse
                </div>

            </div>
        </div><!-- end col -->
    </div>
@endsection

@section('scripts')
@endsection