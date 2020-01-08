@extends('index')
@section('pageName')
    Home
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">

                @foreach($data as $blog)
{{--                    {{$timestamp = }}--}}

                <div class="post-preview">
                    <a href="">
                        <h2 class="post-title">
                            {{$blog->title}}
                        </h2>
                        <h3 class="post-subtitle">
{{--                            Problems look mighty small from 150 miles up--}}
                        </h3>
                    </a>
                    <p class="post-meta">
                        <i class="fa fa-podcast"></i> <a href="{{Route('allCategory')}}">{{$blog->category_id}}</a>
                        <i class="fa fa-user"></i> {{$blog->author}}
                        <i class="fa fa-calendar"></i> {{$date = date("jS M, Y",strtotime($blog->created_at))}}
                    </p>
                </div>
                @endforeach
                <hr>
                <!-- Pager -->
                <div class="clearfix">
                    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
                </div>
            </div>
        </div>
    </div>

    <hr>
@endsection
