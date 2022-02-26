@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-4">
    <h3>Search Results</h3>
    </div>
    <div class="col-sm-4">
    <div class="trending-wrapper">
    @foreach($products as $item)
    <div class="searched-item"> 
    <a href="detail/{{$item['id']}}">
      <img class="trending-image" src="{{$item['gallery']}}">
      <div class="">
        <h2 style="color: black; text-decoration: none; padding-bottom: 40px;">{{$item['name']}}</h2>
      </div>
    </a>
    </div>
    @endforeach
  </div>
    </div>
</div>
@endsection