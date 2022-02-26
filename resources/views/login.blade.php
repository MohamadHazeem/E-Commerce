@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
        <form action="login" method="POST">
            <div class="form-group">
                @csrf
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" required class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-success col-sm-offset-4">Login</button>
        </form>
        </div>
    </div>
</div>
@endsection