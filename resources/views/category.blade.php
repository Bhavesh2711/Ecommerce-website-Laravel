@extends('master')
@section("content")
<div class="container" style="padding-top: 100px;">
    <div class="row">
        @if(isset($categories))
        @foreach($categories as $category)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('uploads/' . $category->gallery) }}" class="card-img-top" alt="Category Image" height="300px" width="100px">
                <div class="card-body">
                    <h5 class="card-title">{{ $category->category_name }}</h5>
                    <p class="card-text">{{ $category->category_desc }}</p>
                    <a href="/" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection