@extends('index')
@section('pageName')
    Home
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-preview">
                    <a href="">
                        <h2 class="post-title">
                            Man must explore, and this is exploration at its greatest
                        </h2>
                        <h3 class="post-subtitle">
                            Problems look mighty small from 150 miles up
                        </h3>
                    </a>
                    <p class="post-meta">
                        <i class="fa fa-podcast"></i> <a href="{{Route('allCategory')}}"> Category Name </a>
                        <i class="fa fa-user"></i> <a href="#"> Start Bootstrap </a>
                        <i class="fa fa-calendar"></i> September 24, 2019
                    </p>
                </div>
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
