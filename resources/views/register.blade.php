@extends('master')

@section('content')


<div class="custom-login container">
  <div class="row">
   <div class="col-sm-4 col-sm-offset-4">
   <form action="register" method="post">
   @csrf
   <div class="form-group">
    <label for="exampleInputEmail1">User Name </label>
    <input type="text" name="name" class="form-control" aria-describedby="emailHelp" placeholder="Enter username">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
   <center>
  <button type="submit" class="btn btn-primary w-75 justify-content-center mx-auto">Register</button>
     
   </center>
</form>
   </div>
  </div>
</div>



@endsection