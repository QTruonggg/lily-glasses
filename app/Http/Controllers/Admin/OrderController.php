<?php 

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Appointment;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderController extends Controller 
{
    public function showListOrder() {
        $data = Order::orderBy('created_at', 'DESC')->get();
        $orderCount = count($data);
        return view('backend.orders.list', ['breadcrumb'=>'danh sách đơn hàng'], compact('data','orderCount'));
    }

    public function showDetailsOrder($id) {
        $data_details = Order::where('id','=',$id)->get();
        foreach ($data_details as $key => $item) {
            $decode_product =  json_decode($item->product_rowId);
            foreach ($decode_product as $key => $value) {
            }
        }
        $product_cart = json_decode($value);
        // dd($product_cart);
        return view('backend.orders.details_order',['breadcrumb'=>'Chi tiết đơn hàng'], compact('data_details','product_cart'));
    }

    // order Appointment

    public function orderAppointment(){
        $data = Appointment::orderBy('created_at', 'DESC')->get();
        return view('backend.appointment.list', ['breadcrumb'=>'Danh sách lịch hẹn'],compact('data'));
    }
}