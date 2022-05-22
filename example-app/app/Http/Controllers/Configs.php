<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB,Session;

class Configs extends Controller
{
    //
    public function __construct(){

    }

    public function search(Request $request){
        $get = $request->input();
        if($get['search'] != ""){
            // $search = [ "pd_name" => $get['search']];
            $data = DB::select("select * from products where pd_name like '".$get['search']."%' || pd_name like '%".$get['search']."%' || pd_name like '%".$get['search']."'",[]);
            return view('client.listItem',[ "search" => $get['search'], "data" => $data]);
        }else{
            return redirect()->back()->with(['notify' => "Ô tìm kiếm bị trống"]);
        }
    }

    public function searchAges(Request $request){
        $get = $request->input();
        if($get['ages'] != ""){
            $search = $get['ages'];
            $data = DB::select("select * from products where pd_ages = ".$search,[]);
            return view('client.listItem',[ "search" => $search, "data" => $data]);
        }else{
            return redirect()->back()->with(['notify' => "Ô tìm kiếm bị trống"]);
        }
    }

    public function allProducts(Request $request){
        $data = DB::select("select * from products", []);
        return view('client.listItem',["data" => $data]);
    }
}
