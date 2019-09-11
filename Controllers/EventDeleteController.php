<?php

namespace App\Http\Controllers;

use Request;


class EventDeleteController extends Controller
{
    function deleteEvent(){
        $checked = Request::input('checked',[]);
        foreach ((array)$checked as $id) {
             \DB::table('titles')->where("id",$id)->delete();
        }
        $alert = "<script type='text/javascript'>alert('滅びのバーストストリーム！！！！');</script>";
        echo $alert;
        echo "<script type='text/javascript'>window.close();</script>";
    }
    
}
