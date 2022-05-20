<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB,Session;
use Mail;

class ProcessConfigs extends Controller
{
    //
    public function __construct(){

    }

    public function processLogin(Request $request){
        $post = $request->input();
        $data = DB::select("SELECT * FROM users WHERE us_email = :email ",[ 'email' => $post['email']]);
        if(!empty($data)){
            if(password_verify($post['password'], $data[0]->us_pass)){
                Session::put('userid', $data[0]->us_id);
                return redirect()->route($data[0]->us_level);
            }
        }
        return redirect()->back()->with(['error' => "Email hoặc mật khẩu không đúng"]);
    }

    public function processRegister(Request $request){
        $post = $request->input();
        $post = array_slice($post,0,3);
        $query = [];
        foreach ($post as $key => $value) {
            if($key != "password"){
                $query["$key"] = $value;
            }else{
                $query["$key"] = password_hash($value,PASSWORD_DEFAULT);
            }
        }

        $result = DB::insert("INSERT INTO users (us_name,us_email,us_pass,us_level) VALUES (':fullname',':email',':password', 'client')", $query);
        if(!empty($result)){
            return redirect()->route('home');
        }else{
            return redirect()->back()->with(['error' => "Đã có lỗi thêm tài khoản"]);
        }

        // return dd($query);
    }

    public function processLogout(Request $request){
        if(Session::has('userid')){
            Session::forget('userid');
        }
        return redirect()->route('home');
    }

    public function addCart(Request $request){
        $get = $request->input("pd_id");
        $insert = DB::insert("INSERT INTO carts (ca_idUs, ca_idPd, ca_quantity) VALUES (?,?,1)",[ Session::get("userid"),$get]);
        if($insert == -1 ){
            // return "Đã thêm sản phẩm có id là ".$get." vào giỏ hàng";
            return redirect()->back()->with(["notify" => "Đã thêm thành công vào giỏ hàng"]);
        }else{
            return redirect()->back()->with(["notify" => "Lỗi khi thêm vào giỏ hàng"]);
        }
    }

    public function deleteCart(Request $request){
        $get = $request->input("ca_id");
        $delete = DB::delete("DELETE FROM carts WHERE ca_id = ?",[ $get ]);
        if($delete != -1 ){
            // return "Đã thêm sản phẩm có id là ".$get." vào giỏ hàng";
            return redirect()->back()->with(["notify" => "Đã xóa thành công khỏi giỏ hàng"]);
        }else{
            return redirect()->back()->with(["notify" => "Lỗi khi xóa vào giỏ hàng"]);
        }
    }

    public function sendEmail(Request $request){
        $post = $request->input();
        $data = [

        ];    
        Mail::send('email',$data,function($message){
            $message->from('dinhnguyenhai6@gmail.com',"admin");
            $message->to($post["email"],"client");
            $message->subject('Xác nhận email');
        });
    }

}
