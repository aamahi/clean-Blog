@extends('index')

@section('pageName')
    All Category
@endsection

@section('content')
{{--    <div class="container">--}}
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @if(session()->has('success'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">slug</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $row)
                        <tr>
                            <th scope="row">{{$row->id}}</th>
                            <td>{{$row->name}}</td>
                            <td>{{$row->slug}}</td>
                            <th>
                                <a href="{{}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </th>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

            </div>
        </div>
{{--    </div>--}}
    <hr>
@endsection
