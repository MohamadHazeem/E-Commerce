@extends('master')
@section("content")
<div class="custom-product">
        <div class="col-sm-10">
        <table class="table">
    <tbody>
      <tr>
        <td>Amount</td>
        <td> {{$total}} $</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>0 $</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>5 $</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>{{$total + 5}} $</td>
      </tr>
    </tbody>
  </table>
  <div class="">
  <form action="/orderplace" method="POST">
      @csrf
  <div class="form-group">
    <textarea name="address" required placeholder="Please enter you address" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method:</label><br><br>
    <input disabled value="cash" type="radio" name="payment"><span> Online Payment</span><br><br>
    <input disabled value="cash" type="radio" name="payment"><span> OMT Payment</span><br><br>
    <input value="cash" type="radio" name="payment"><span> Payment on delivey</span><br><br>
    <h3 style="color: white; background-color: red; padding: 5px; width: 100%; text-align: center;">Our website supports payment on delivery only at the moment</h3>
  </div>
  <button type="submit" class="btn btn-success" style="padding: 20px;">Proceed To Checkout</button>
</form>
  </div>
</div>
</div>
@endsection