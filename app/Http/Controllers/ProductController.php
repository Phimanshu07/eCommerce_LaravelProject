<?php

namespace App\Http\Controllers;
use Alert;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Redirect;
class ProductController extends Controller
{
    //
    function index(){
        $data=Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id){
       $data= Product::find($id);
       return view('detail',['product'=>$data]);
    }

    function search(Request $request){

          $data=Product::where('name','like','%'.$request->input('query').'%')
                        ->get();
          return view('search',['products'=>$data]);     
    }
    function addToCart(Request $request){
        if($request->session()->has('user')){
            
            $cart=new Cart;
            $cart->user_id=$request->session()->get('user')['id'];
            $cart->product_id=$request->product_id;
            $cart->save();
            return redirect('/');
            
        }
         else{
               return redirect('/login');
         }
    }

    function addToBuy(){
        $userId=Session::get('user')['id'];
        
        $total=  $products=Db::table('carts')
                     ->join('products','carts.product_id','=','products.id')
                     ->where('carts.user_id',$userId)
                     ->sum('products.price');
   
          return view('ordernow',['total'=>$total]);
    }


    static function cartItem(){
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
    function castList(){
        $userId=Session::get('user')['id'];
        
       $products=Db::table('carts')
                  ->join('products','carts.product_id','=','products.id')
                  ->where('carts.user_id',$userId)
                  ->select('products.*','carts.id  as cartId')
                  ->get();

       return view('cartlist',['products'=>$products]);           
    }
    function removeCart($id){
        Cart::destroy($id);
        return redirect('cartList');
    }

    function ordernow(){
        $userId=Session::get('user')['id'];
        
      $total=  $products=Db::table('carts')
                   ->join('products','carts.product_id','=','products.id')
                   ->where('carts.user_id',$userId)
                   ->sum('products.price');
 
        return view('ordernow',['total'=>$total]);   

    }
    function orderplace(Request $request){

        $userId=Session::get('user')['id'];
        $allcart=Cart::where('user_id',$userId)->get();
        foreach($allcart as $cart){
           $order=new Order();
           $order->product_id=$cart['product_id'];
           $order->user_id=$cart['user_id'];
           $order->status="pending";
           $order->payment_method=$request->payment;
           $order->payment_status="pending";
           $order->address=$request->address;
           $order->save();
           Cart::where('user_id',$userId)->delete();
        }
            $request->input();
            return redirect('/'); 
    }
    function myorders(){
        $userId=Session::get('user')['id'];
        
        $orders=Db::table('orders')
                     ->join('products','orders.product_id','=','products.id')
                     ->where('orders.user_id',$userId)
                     ->get();
   
          return view('myorders',['orders'=>$orders]);    
    }
}
