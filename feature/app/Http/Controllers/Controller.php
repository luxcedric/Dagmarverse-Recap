<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\dg_user;
use App\Models\dg_time;
use App\Models\dg_themes;
use App\Models\dg_userwatchedthemes;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function review(Request $request){
        
        $account = dg_user::where("dg_name", $_GET["acc"])->get();
        //$genre_count = dg_userwatchedgenre::where("dg_userID", $account[0]->dg_UUID)->get()->count();
        


        // Berechnung wie viele Tage der Ausgewählte Account schon Member ist.
        $dateofreg = $account[0]->dg_registration;
        $obj_dateofreg = date_create($dateofreg);
        $currentdate = date('Y-m-d H:i:s');
        $obj_currentdate = date_create($currentdate);
        $diff = date_diff($obj_dateofreg, $obj_currentdate)->format("%a");

        // Wieviele Stunden DagmarverseTime
        $hourswatched = 0;
        $hourswatched = $hourswatched + dg_time::where("dg_User_ID", $account[0]->dg_UUID)->sum("dg_jan");
        $hourswatched = $hourswatched + dg_time::where("dg_User_ID", $account[0]->dg_UUID)->sum("dg_feb");
        $hourswatched = $hourswatched + dg_time::where("dg_User_ID", $account[0]->dg_UUID)->sum("dg_mar");
        $hourswatched = $hourswatched + dg_time::where("dg_User_ID", $account[0]->dg_UUID)->sum("dg_apr");
        $hourswatched = $hourswatched + dg_time::where("dg_User_ID", $account[0]->dg_UUID)->sum("dg_mai");
        $hourswatched = $hourswatched + dg_time::where("dg_User_ID", $account[0]->dg_UUID)->sum("dg_jun");
        $hourswatched = $hourswatched + dg_time::where("dg_User_ID", $account[0]->dg_UUID)->sum("dg_jul");
        $hourswatched = $hourswatched + dg_time::where("dg_User_ID", $account[0]->dg_UUID)->sum("dg_aug");
        $hourswatched = $hourswatched + dg_time::where("dg_User_ID", $account[0]->dg_UUID)->sum("dg_sep");
        $hourswatched = $hourswatched + dg_time::where("dg_User_ID", $account[0]->dg_UUID)->sum("dg_okt");
        $hourswatched = $hourswatched + dg_time::where("dg_User_ID", $account[0]->dg_UUID)->sum("dg_nov");
        $hourswatched = $hourswatched + dg_time::where("dg_User_ID", $account[0]->dg_UUID)->sum("dg_dez");

        // 3 Top Genre werden gesucht
        $genre_count = dg_userwatchedthemes::where("dg_userID", $account[0]->dg_UUID)->orderBy('dg_timewatched','DESC')->get();

        $top_genre_1_id = $genre_count[0]->dg_themesID;
        $top_genre_2_id = $genre_count[1]->dg_themesID;
        $top_genre_3_id = $genre_count[2]->dg_themesID;
        
        $top_1_genre = dg_themes::where("dg_ID", $top_genre_1_id)->get()[0]->dg_name;
        $top_2_genre = dg_themes::where("dg_ID", $top_genre_2_id)->get()[0]->dg_name;
        $top_3_genre = dg_themes::where("dg_id", $top_genre_3_id)->get()[0]->dg_name;

   
        

        return view("review", ["account" => $account[0], "membersince" => $diff, "hourswatched" => $hourswatched, "genre_1" => $top_1_genre, "genre_2" => $top_2_genre, "genre_3" => $top_3_genre]);

    }
}
