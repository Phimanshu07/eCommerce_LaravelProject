@extends('master')

@section('content')
 <div class="container " >
     
       
 <h2><i> Shipping Cart</i></h2>
            
  <table class="table table-bordered">
    
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
        <td>${{$total +10}}</td>
      </tr>
    </tbody>
  </table>
  <form action="orderplace " method="post" class="mb-2">
  @csrf
  <div class="form-group">
    <textarea name="address" placeholder="enter your address" class="form-control" id="email"></textarea>
  </div>
  <div class="form-group ">
    <label  for="pwd">Payment Method:</label>
    <div class="radio">
      <label><input type="radio" value="Online Payment" name="payment" checked>Online Payment</label>
    </div>
    <div class="radio">
      <label><input type="radio" value="Emi Payment" name="payment" checked>Emi Payment</label>
    </div>
    <div class="radio">
      <label><input type="radio" value="cash " name="payment" checked>Cash on Delivery </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">order now</button>
</form>
     <br><br>    
 </div>
<style>
 a:link{
     text-decoration:none;  
 }

 h5{
    color:#000;
 }
</style>




@endsection