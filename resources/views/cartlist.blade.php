@extends('master')

@section('content')
 <div class="container " >
     
       
        <div class="col-sm-10 " style="margin-top:-70px">
           <div class="trending-wrapper">
              <h4 class="">Cart Products </h4>
              @if(count($products)==0)
              <div class="row cart-list-divider">
                 <div class="col-sm-3 ">
                 
                  <p>Please buy Some products</p>
                 </div>
                 </div>
               @else  
                <a  href="ordernow" class="btn btn-success ">Order Now</a>
                @foreach($products as $item)
              <div class="row cart-list-divider">
                 <div class="col-sm-3 ">
                 <a class="remove" href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}"  >
                    
                 </a>
                 </div>

                 <div class="col-sm-4">
               
                    
                    <div class="">
                      <h2  style="font-size:18px">&nbsp;<i>{{$item->name}}</i> </span> </h2>
                      <h5>{{$item->description}}</h5>
                    </div>
                 
                 </div>


                 <div class="col-sm-3">
                      <a href="/removecart/{{$item->cartId}}" class="btn btn-danger">Remove from Cart</a>
                 </div>
             </div>
             @endforeach
             @endif
        </div>
        
         
 </div>
<style>
 a:link{
     text-decoration:none;  
 }
 h2{
     color:#cfa62b;
 }
 h5{
    color:#000;
 }
</style>




@endsection