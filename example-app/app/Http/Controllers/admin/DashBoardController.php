<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB,Session;

class DashBoardController extends Controller
{
    //
    public function __construct(){

    }

    public function index(){
        return view('admin.DashBoard');
    }

    public function product(Request $request){
        $select = DB::select("select * from products");
        return view('admin.Table',[ "data" => $select ]);
    }

    public function addProduct(Request $request){
        $select = [];
        return view('admin.FormProduct',[ "type" => "add" ,"data" => $select ]);
    }

    public function updateProduct(Request $request){
        $get = $request->input();
        $select = DB::select("select * from products where pd_id = ?",[ $get["id"] ]);
        return view('admin.FormProduct',[ "type" => "update" , "data" => $select ]);
    }

    public function deleteProduct(Request $request){
        $get = $request->input();
        $delete = DB::delete("delete from products where pd_id = ?",[ $get["id"] ]);
        if($delete != -1 ){
            // return "Đã thêm sản phẩm có id là ".$get." vào giỏ hàng";
            return redirect()->back()->with(["notify" => "Đã xóa sản phẩm thành công"]);
        }else{
            return redirect()->back()->with(["notify" => "Lỗi khi xóa sản phẩm"]);
        }
    }
}
