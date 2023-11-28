<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\dg_user;
use App\Models\dg_userwatchedgenre;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function review(Request $request){
        
        $account = dg_user::where("dg_name", $_GET["acc"])->get();
        $genre_count = dg_userwatchedgenre::where("dg_userID", $account[0]->dg_UUID)->get()->count();



        return view("review",["account" => $account[0], "genre_count" => $genre_count]);

    }
}
