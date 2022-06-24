<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB,Session;

class HomeController extends Controller
{
    //
    public function __construct(){
    }

    public function index(){
        $select = DB::select("select * from products limit 9", []);
        return view('client.home', [ "data" => $select ]);
    }

    public function login(){
        return view('client.login');
    }

    public function register(){
        return view('client.register');
    }

    public function titleProduct(Request $request){
        $get = $request->input();
        $data = DB::select("select * from products where pd_id = '".$get['pd_id']."'", []);
        return view('client.titleProduct', [ "data" => $data]);
    }

    public function cart(){
        $id = Session::get("userid");
        $data = DB::select("select ca_idUs, pd_id, pd_name, pd_ages, pd_image, pd_prices from carts,products where ca_idPd = pd_id and ca_idUs = ?",[$id]);
        return view('client.cart',["data" => $data]);
    }
}
