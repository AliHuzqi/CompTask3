<?php

namespace App\Http\Controllers;

use App\Models\index_table;
use Illuminate\Http\Request;

class IndexController extends Controller
{
//    public  function index(){
//
//        $serves = index::all();
//        return view('index.store');
//
//    }
    public function store(Request $request){

        for($i=0 ; $i<count($request['item']) ; $i++){
            $index = new index_table();
            $item=$request['item'][$i];
            $Unit=$request['unit'][$i];
            $Quantity=$request['quantity'][$i];
            $the_value=$request['the_value'][$i];
            $purpose_of_purchase=$request['purpose_of_purchase'][$i];
            $order_date=$request['order_date'][$i];

            $index->create([
                'item'=>$item,
                'Unit'=>$Unit,
                'Quantity'=>$Quantity,
                'the_value'=>$the_value,
                'purpose_of_purchase'=>$purpose_of_purchase,
                'order_type'=>'طلب صرف مواد',
                'order_date'=>$order_date
            ]);


        }
        return redirect()->back();

    }
}
