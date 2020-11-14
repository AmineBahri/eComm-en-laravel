@extends('master')
@section("content")
<div class="custom-product">
  <div class="col-sm-10">
    <table class="table">
    <tbody>
      <tr>
        <td>Amount</td>
        <td>$ {{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 10</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>$ {{$total+10}}</td>
      </tr>
    </tbody>
  </table>
  <div>
    <form action="/action_page.php">
      <div class="form-group">
       <textarea type="email" placeholder="enter your address" class="form-control"></textarea>
      </div>
      <div class="form-group">
       <label for="pwd">Payement Method:</label><br>
       <input type="radio" name="payement"><span>online payement</span><br><br>
       <input type="radio" name="payement"><span>EMI payement</span><br><br>
       <input type="radio" name="payement"><span>Payement on  Delivery</span><br><br>
      </div>
      <button type="submit" class="btn btn-default">Order Now</button>
    </form>
  </div>  
  </div>
</div>
@endsection