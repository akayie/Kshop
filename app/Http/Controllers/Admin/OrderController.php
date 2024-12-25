<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function orders(){
        $orders = Order::all();//order arlone u
       // var_dump($orders);
        $voucher_group = $orders->groupBy('voucher_no')->toArray();//voucher no tu tar tway ko gp phawe p Array change
       // dd($voucher_group);
       foreach($voucher_group as $voucher) {
        $orders_id=array_column($voucher,'id');//Array htae mhar shi tal item id tway ko u
        // var_dump($orders_id);
        $order_data[]= Order::whereIn('id',$orders_id)->where('status','Pending')->first();//voucher no tu tae order tway htae ka firstly id yae to retrive data ko Array htae httae
       }
       //dd($order_data);
        return view('admin.orders.index',compact('order_data'));
    }
    public function orderAccept(){
         $orders = Order::all();
          $voucher_group = $orders->groupBy('voucher_no')->toArray();
         foreach($voucher_group as $voucher) {
         $orders_id=array_column($voucher,'id');
         $order_data[]= Order::whereIn('id',$orders_id)->where('status','Accept')->first();
         }
         return view('admin.orders.index',compact('order_data'));
      
    }
    public function orderComplete(){
        $orders = Order::all();
         $voucher_group = $orders->groupBy('voucher_no')->toArray();
       foreach($voucher_group as $voucher) {
         $orders_id=array_column($voucher,'id');
        $order_data[]= Order::whereIn('id',$orders_id)->where('status','Complete')->first();
       }
        return view('admin.orders.index',compact('order_data'));  
    }

    public function orderDetail($voucher){
        //echo $voucher;
        $orders = Order::where('voucher_no',$voucher)->get();
        $order_first= Order::where('voucher_no',$voucher)->first();
        return view('admin.orders.detail',compact('orders','order_first'));
    } 

    public function status(Request $request,$voucher){
    // dd($request);
    Order::where('voucher_no',$voucher)->update(['status'=>$request->status]);
    return redirect()->route('backend.orders');
    }
}

