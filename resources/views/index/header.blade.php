<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{Route('home')}}">Clean Blog</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{Route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{Route('allCategory')}}">All Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{Route('addCategories')}}">Add Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Write Post Post</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Header -->
<header class="masthead" style="background-image: url('{{asset('assets/image/cleanBlog.jpeg')}}')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>@yield('pageName')</h1>
                    <span class="subheading">A Blog Laravel Templeate by Abdullah Al Mahi</span>
                </div>
            </div>
        </div>
    </div>
</header>
