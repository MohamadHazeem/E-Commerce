@extends('master')
@section("content")
<div class="custom-product">
        <div class="col-sm-10">
        <div class="trending-wrapper">
    <h4>Products in the cart</h4>
    <a href="ordernow" class="btn btn-success">Order Now!</a><br><br>
    @foreach($products as $item)
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
        <h3>{{$item->price}}</h3>
      </div>
    </div>
    <div class="col-sm-3">
        <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning p-t-10">Remove Item</a>
    </div>
    </div>
    @endforeach
  </div>
</div>
</div>
@endsection