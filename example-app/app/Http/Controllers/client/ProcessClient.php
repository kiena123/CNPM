<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB,Session;

class ProcessClient extends Controller
{
    //
    public function __construct(){
    }

    public function payment(Request $request){
        $post = $request->input();
        foreach ($post["quanlity"] as $key => $value) {
            $update = DB::update("update carts set ca_quantity = ? where ca_id = ? ", [ $value, $key ]);
            if($update == -1){
                redirect()->back()->with(["notify" => "Đã xảy ra lỗi"]);
            }
        }
        $all_ca_id_checked = "";
        foreach ($post["ca_id"] as $key => $value){
            if($all_ca_id_checked != ""){
                $all_ca_id_checked .= ", ".$value;
            }else{
                $all_ca_id_checked .= $value;
            }
        }
        // dd($all_ca_id_checked);
        $select = DB::select("select ca_id, pd_id, pd_name, pd_prices, ca_quantity from products,(select * from carts where ca_id in (?) ) as pc where ca_idPd = pd_id", [ $all_ca_id_checked ]);
        // dd($select);
        if($select == -1){
            redirect()->back()->with(["notify" => "Đã xảy ra lỗi"]);
        }
        return view("client.payment", [ "data" => $select]);
    }
}
