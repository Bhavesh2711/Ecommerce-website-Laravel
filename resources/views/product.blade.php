@extends('master')
@section("content")


<br><br>
<div class="trending-wrapper">
    <h3>
        <center>Trending products</center>
    </h3>
    <br>
    <br>
    <div class="row">
        @if(isset($products))
        @foreach($products as $key => $item)
        <div class="col-md-3 mb-4">
            <a href="detail/{{$item['id']}}">
                <div class="card h-100">
                    <img src="{{ asset('uploads/' . $item->gallery) }}" width="370" height="270">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item['name'] }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        @endif
    </div>
</div>

</div>
<br>
<br>
@endsection