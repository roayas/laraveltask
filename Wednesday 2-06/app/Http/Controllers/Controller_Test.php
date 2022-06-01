<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_Test extends Controller
{
    public function test(){
        return "ROA is  the BEST";
    }
    public function render($id,$name){
        return "id: ".$id."<br>name: ".$name;
    }
    public function test2($id,$user){
        echo "id: ".$id. '<br> user: '.$user;
     }
}

