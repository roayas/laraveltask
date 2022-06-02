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
    public function home()
    {
        return view('layout.home');
    }
    public function contact()
    {
        return view('layout.contact1');
    }
    public function about()
    {
        return view('layout.about1');
    }
    public function Send(){

        $arr=['member1'=>'roa',
        'member2'=>'raghad',
        'member3'=>'tamara',
        'member4'=>'dyar',
    ];
    return view('layout.about1', compact('arr'));

    
}

}