@extends('master')

@section('content')
 <div class="container " >
     <div class="row">
       <div class="col-sm-4">
         <a href="#" class="" style="font-size:30px">Filter</a>
       </div>
        <div class="col-sm-4 " style="margin-top:-70px">
           <div class="trending-wrapper">
              <h4 class=""> </h4>
              @foreach($products as $item)
              <div class="">
                 <a class="remove" href="detail/{{$item['id']}}">
                    <img class="trending-image" src="{{$item['gallery']}}"  >
                    <div class="">
                      <h2  style="font-size:18px">&nbsp;<i>{{$item['name']}}</i> </span> </h2>
                      <h5>{{$item['description']}}</h5>
                    </div>
                 </a>
             </div>
             @endforeach
        </div>
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