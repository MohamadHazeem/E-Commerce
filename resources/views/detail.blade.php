@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img style="padding-top: 40px;" class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a style="font-size: 2.1em; color: orange;" href="/">Go Back</a>
            <h3>{{$product['name']}}</h3>
            <h3>Price: {{$product['price']}}</h3>
            <h3>Details: {{$product['description']}}</h3>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
            <button class="btn btn-primary">Add to cart</button>
            </form>
            <br><br>
        </div>
    </div>
</div>
@endsection