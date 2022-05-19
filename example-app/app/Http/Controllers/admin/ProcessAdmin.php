<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB,Session;

class ProcessAdmin extends Controller
{
    //
    public function __construct(){

    }

    public function addProduct(Request $request){
        $user = Session::get('userid');
        $post = $request->all();
        if(!empty($post["ImageProduct"])){
            $file = $post["ImageProduct"];
            $file_name = $file->getClientoriginalName();
            $file->move(public_path("assets/image/anhsanpham"), $file_name);
            $image = "assets/image/anhsanpham/".$file_name;
        }
        $insert = DB::insert("INSERT INTO products ( pd_name, pd_ages, pd_image, pd_prices) VALUES ( '".$post["NameProduct"]."', '".$post["AgesProduct"]."', '".$image."', '".$post["PriceProduct"]."')",[]);
        if($insert == -1 ){
            return redirect()->back()->with(["notify" => "Đã thêm thành công sản phẩm"]);
        }else{
            return redirect()->back()->with(["notify" => "Thêm sản phẩm bị lỗi"]);
        }
    }

    public function updateProduct(Request $request){
        $post = $request->all();
        if(!empty($post["ImageProduct"])){
            $file = $post["ImageProduct"];
            $file_name = $file->getClientoriginalName();
            $file->move(public_path("assets/image/anhsanpham"), $file_name);
            $image = "assets/image/anhsanpham/".$file_name;
        }else{
            $select = DB::select("select pd_image from products where pd_id = ?",[$post["id"]]);
            $image = $select[0]->pd_image;
        }
        $name = $post['NameProduct'];
        $ages = $post["AgesProduct"];
        $price = $post["PriceProduct"];
        $id = $post["id"];
        $update = DB::update("update products set pd_name = '".$post["NameProduct"]."', pd_ages = '".$post["AgesProduct"]."', pd_image = '".$image."', pd_prices = '".$post["PriceProduct"]."' where pd_id = ".$post["id"], 
                    [  ]);
        // $update = DB::update("update products set pd_name = '$name', pd_ages = '$ages', pd_image = '$image', pd_prices = '$price' where pd_id = '$id' ", []);
        if($update == -1 ){
            return redirect()->back()->with(["notify" => "Đã thêm thành công sản phẩm"]);
        }else{
            return redirect()->back()->with(["notify" => "Thêm sản phẩm bị lỗi"]);
        }
    }

}
