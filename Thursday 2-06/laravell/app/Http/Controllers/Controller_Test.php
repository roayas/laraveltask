<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candy;

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
        $data= Candy::all();
        return view('layout.home',['data'=>$data]);
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
public function list(){
    $data= Candy::all();
}

}