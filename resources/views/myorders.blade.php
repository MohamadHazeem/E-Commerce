@extends('master')
@section("content")
<div class="custom-product">
        <div class="col-sm-10">
        <div class="trending-wrapper">
    <h4>My Orders:</h4>
    @foreach($orders as $item)
    <div class="row searched-item cart-list-devider"> 
    <div class="col-sm-3">
    <a href="detail/{{$item->id}}">
      <img class="trending-image" src="{{$item->gallery}}">
    </a>
    </div>
    <div class="col-sm-4">
      <div class="">
        <h3>{{$item->name}}</h3>
        <h3>{{$item->description}}</h3>
      </div>
    </div>
    </div>
    @endforeach
  </div>
</div>
</div>
@endsection