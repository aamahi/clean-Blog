@extends('index')

@section('pageName')
    Write Post
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
                <form method="post" action="{{Route('write_post')}}">
                    @csrf
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Titile</label>
                            <input type="text" class="form-control" placeholder="Post title" id="name" name="title" value="{{old('title')}}">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>author</label>
                            <input type="text" class="form-control" placeholder="Author Name" id="name" name="author" value="{{old('author')}}">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <select class="form-control" name="category_id">
                                <option value="i" selected disabled>Select Category</option>
                                @foreach($data as $name)
                                <option value="{{$name->id}}">{{$name->name}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control"  rows="4" cols="50" name="content">Write your Post ----</textarea>
                    </div>

                    <br>
                    <div id="success"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="sendMessageButton">Add Categories</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
@endsection
