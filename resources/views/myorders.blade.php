@extends('master')

@section('content')
 <div class="container " >
     
       
        <div class="col-sm-10 " style="margin-top:-70px">
           <div class="trending-wrapper">
              <h4 class="">My orders Products </h4>
              @foreach($orders as $item)
              <div class="row cart-list-divider">
                 <div class="col-sm-3 text-center justify-content-center style ">
                 <a class="remove" href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}"  >
                 </a>
                 </div>

                 <div class="col-sm-4">     
                    <div class="">
                      <h2  style="font-size:18px">Name: {{$item->name}} </h2>
                      <h5>Delivery Status: {{$item->status}}</h5>
                      <h5>Address: {{$item->address}}</h5>
                      <h5>Payment Status:{{$item->payment_status}}</h5>
                      <h5>Payment Method: {{$item->payment_method}}</h5>
                      
                    </div>
                 
                 </div>


                 
             </div>
             @endforeach
        </div>
        
         
 </div>
<style>
 a:link{
     text-decoration:none;  
 }

 h5{
    color:#000;
 }
 .style{
     margin-top:10px;
 }
</style>




@endsection