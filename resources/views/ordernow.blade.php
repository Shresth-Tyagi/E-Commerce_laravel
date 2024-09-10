@extends('master')
@section('content')
<div class="container">
<div class="custom-product">
<div class="col-sm-10">
   
    <table class="table">
       
        <tbody>
          <tr>
            <td>Amount</td>
            <td>{{ $total }}$</td>
          </tr>

          <tr>
            <td>Tax</td>
            <td>0$</td>
          </tr>

          <tr>
            <td>Delivary Charges</td>
            <td>10$</td>
          </tr>

          <tr>
            <td>Total Amount</td>
            <td>{{ $total+10 }}$</td>
        </tr>

        </tbody>
      </table>

      <div>
        <form action="/orderplace" method="POST">
            @csrf
            <div class="form-group">
              <textarea name="address" placeholder="enter your address" class="form-control"></textarea>
            </div>
            <br>
            <div class="form-group">
              <label for="exampleInputPassword1">Payment Methods:</label><br><br>
              <input type="radio" value="cash" name="payment"><span>Online Payment</span><br><br>
              <input type="radio" value="cash" name="payment"><span>EMI Payment</span><br><br>
              <input type="radio" value="cash" name="payment"><span>Payment on Delivery</span>
            </div>
        <br>
            <button type="submit" class="btn btn-primary">Order Now</button>
          </form>
      </div>
   
</div>  
</div>
</div>
@endsection