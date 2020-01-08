@extends('index')
@section('pageName')
    {{$post->author}}
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <a href=""><h2 class="post-title">{{$post->title}}</h2></a>
                <p class="post-meta">
                    <i class="fa fa-podcast"></i> <a href="{{Route('allCategory')}}">{{$post->category_id}}</a>
                    <i class="fa fa-user"></i> {{$post->author}}
                    <i class="fa fa-calendar"></i> {{$date = date("jS M, Y",strtotime($post->created_at))}}
                </p>
                <p>{{$post->content}}</p>
            </div>
        </div>
    </div>
@endsection
