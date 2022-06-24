<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB,Session;
use Carbon\Carbon;

class ProcessClient extends Controller
{
    //
    public function __construct(){
    }

    public function payment(Request $request){
        $idus = Session::get("userid");
        $post = $request->input();

        if(!empty($post["quanlity"]) && !empty($post["ca_idUs"])){
            foreach ($post["quanlity"] as $key => $value) {
                $update = DB::update("update carts set ca_quantity = ? where ca_idUs = ? and ca_idPd = ? ", [ $value, $idus, $key ]);
                if($update == -1){
                    redirect()->back()->with(["notify" => "Đã xảy ra lỗi"]);
                }
            }
            $select = DB::select("select ca_idUs, pd_id, pd_name, pd_prices, ca_quantity from products,carts where ca_idPd = pd_id", [  ]);
            
            if(empty($select)){
                return redirect()->back()->with(["notify" => "Đã xảy ra lỗi"]);
            }
            return view("client.payment", [ "data" => $select]);
        }else{
            return redirect()->back()->with(["notify" => "Chưa có sản phẩm"]);
        }
    }

    public function addPayment(Request $request){
        $idUs = Session::get("userid");
        $methodValue = $request->input();
        
        foreach ($methodValue["ca_idPd"] as $key => $value) {
            $deleteCarts = DB::delete("delete from carts where ca_idUs = ? and ca_idPd = ? ",[ $value, $key ]);
        }
        return redirect()->route("client")->with(["notify" => "đã xác nhận mua hàng"]);
        /*
        if(!empty($methodValue)){
            $insertReceipt = DB::insert("insert into receipt( re_idUs ) values (?)", [ $idUs ]);
            $date = Carbon::create("", "", "", "", "", "", "+7");
            $selectReceipt = DB::select("select * from receipt where re_idUs = ? and re_dateBill = ?",[ $idUs, substr($date,0,20) ]);
            
            foreach ($methodValue["ca_id"] as $key => $value) {
                $selectCarts = DB::select("select * from carts where ca_id = ?",[ $value ]);
                $insertReceiptProduct = DB::insert("insert into receipt_products( repd_idRe, repd_idPd, repd_quantity ) 
                                values (".$selectReceipt[0]->re_id.", ".$selectCarts[0]->ca_idPd.",".$selectCarts[0]->ca_quantity.")", []);
                if($insertReceiptProduct == true){
                    $deleteCarts = DB::delete("delete from carts where ca_id = ?",[ $value ]);
                }
            }
            $selectReceiptProduct = DB::select("select re_id,pd_name,pd_prices,repd_quantity from receipt_products,receipt, products 
                        where re_id = repd_idRe and pd_id = repd_idPd and re_id = ?",[ $selectReceipt[0]->re_id ]);
        }
        return view("client.titlePayment", [ "data" => $selectReceiptProduct]);
        */
    }

    public function deletePayment(Request $request){
        $idUs = Session::get("userid");
        $methodGet = $request->input();
        // dd($methodGet);
        if(!empty($methodGet)){
            $deleteRepd = DB::delete("delete from receipt_products where repd_idRe = ?",[ $methodGet["re_id"] ]);
            if($deleteRepd == -1){
                return redirect()->back()->with(["notify" => "Lỗi xóa hóa đơn"]);
            }
            $deleteRe = DB::delete("delete from receipt where re_id = ?",[ $methodGet["re_id"] ]);
            if($deleteRe == 1){
                return redirect()->route("client")->with(["notify" => "Xóa hóa đơn thành công"]);
            }
            return redirect()->back()->with(["notify" => "Lỗi xóa hóa đơn"]);
        }
    }

    public function addComment(Request $request){
        $idUs = Session::get("userid");
        $methodPost = $request->input();
        if(!empty($methodPost["Comment"])){
            $insert = DB::insert("insert into messages(ms_idUs, ms_idPd, ms_message ) values (?,?,'".$methodPost["Comment"]."')",[ $idUs, $methodPost["pd_id"] ]);
            if( $insert ){
                return redirect()->back()->with(["notify" => "Thêm thành công"]);
            }else{      
                return redirect()->back()->with(["notify" => "Thêm không thành công"]);
            }
        }else{
            return redirect()->back()->with(["notify" => "Chưa nhập nhận xét"]);
        }
    }
}
