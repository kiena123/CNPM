<?php

namespace App\Http\Middleware\Check;

use Closure;
use Illuminate\Http\Request;
use DB,Session;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $levelInput= "")
    {
        if($levelInput != ""){
            $traVe = $this->checkRightLevel($levelInput);
        }else{
            $traVe = $this->forbiddenAll();
        }
        
        if(empty($traVe)){
            return $next($request);
        }
        return redirect()->route($traVe)->with(['notify' => "Phải có quyền $levelInput"]);
    }

    private function checkRightLevel($levelInput = ""){
        $check = "";
        if(Session::has('userid')){
            $idUser = Session::get('userid');
            $data = DB::select("SELECT * FROM users WHERE us_id = :id",["id" => $idUser]);
            if( $data[0]->us_level != $levelInput){
                $check = $data[0]->us_level;
            }
        }else{
            $check = "home";
        }
        return $check;
    }

    private function forbiddenAll(){
        $check = "";
        if(Session::has('userid')){
            $idUser = Session::get('userid');
            $data = DB::select("SELECT * FROM users WHERE us_id = $idUser");
            if(!empty($data)){
                return $data[0]->us_level;
            }
        }
        return $check;
    }
}
