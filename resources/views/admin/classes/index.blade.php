@extends('layouts.base')
@section('styles')
    <link href="{{asset('theme/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">
                <div class="card-header">
                    <h4 class="m-t-0 header-title"><b>Classes</b></h4>
                    <p class="text-muted font-13 m-b-30">
                        <a href="{{route('classes.create')}}" class="btn btn-outline-info btn-sm pull-right">New</a>
                    </p>
                </div>
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Parent</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($classes as $item)
                        <tr>
                            <td>{{ $loop->iteration  }}</td>
                            <td>{{ $item -> title}}</td>
                            <td>{{ $item -> description}}</td>
                            @if($item->parent_id == null)
                                <td>No Parent</td>
                            @else
                                <td>{{$item ->parent -> name}}</td>
                            @endif
                            <td>
                                <a class="btn btn-info btn-xs "
                                   href="{{ route('classes.edit',$item->id) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end row -->
@endsection
@section('scripts')
    <script src="{{asset('theme/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('theme/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable()
        } );

    </script>

@endsection

