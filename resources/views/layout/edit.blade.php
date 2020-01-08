@extends('index')

@section('pageName')
    Edit Categories
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{$error}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endforeach
                @endif
                <form method="post" action="{{Route('edit',$data->id)}}">
                    @csrf
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{$data->name}}">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Slug</label>
                            <input type="text" class="form-control" name="slug" value="{{$data->slug}}">
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="sendMessageButton">Update Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
@endsection
