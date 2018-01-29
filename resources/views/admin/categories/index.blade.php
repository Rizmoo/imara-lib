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
                <table class="table table-bordered">
                    <thead class="bg-dark" style="color: white">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Parent</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $item)
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
                                   href="{{ route('categories.edit',$item->id) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div> <!--end row -->


        </div>
    </section>
@endsection
