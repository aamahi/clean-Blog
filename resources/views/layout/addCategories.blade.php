@extends('index')

@section('pageName')
    Add Categories
@endsection

@section('content')
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Categories Name</label>
                            <input type="text" class="form-control" placeholder="Categories Name" id="name" name="name">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="slug">Slug Name</label>
                            <input type="text" class="form-control" placeholder="Slug Name" id="slug" name="slug">
                        </div>
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
