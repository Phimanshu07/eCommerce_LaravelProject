<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
   {{View::make('header')}} 
    @yield('content')
  
    
    {{View::make('footer')}} 
          
       
</body>
<!-- <script>
  $(document).ready(function(){
      $("button").click(function(){
          alert("hii")
      })
  })
</script> -->
<style>
 .custom-login{
     height:500px;
     padding-top:100px;
 }
 img.slider-img{
   height:400px !important;
   align:center;
 }
 .custom-product{
     height:600px;
 }
 .slider-text{
     background-color:#38ac3838 !important;
 }
 .trending-image{
     height:100px;
 }
 .trending-items{
     float:left;
     width:20%;
 }
 .trending-wrapper{
     margin:100px;
 }
 .detail-img{
     height:250px;
 }
 .search-box{
     width:500px !important;
 }
 .cart-list-divider{
     border-bottom:1px solid #ccc;
     margin-bottom:20px;
     padding-bottom:20px;
 }
 
</style>
</html>