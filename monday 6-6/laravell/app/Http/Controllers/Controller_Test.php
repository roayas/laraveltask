<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candy;
use App\Models\User;

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
// public function list(){
//    return Candy::all();

// }
public function table()
{
    $data= Candy::all();
    return view('layout.table',['data'=>$data]);
}



public function add(){
    return view('layout.add');
}


public function insert(){
    $dataAdd= new Candy();
    $dataAdd->user_id = 0;
    $dataAdd->candy_name = request('candy_name');
    $dataAdd->candy_price = request('candy_price');
    $dataAdd->candy_des = request('candy_des');
    $dataAdd->candy_quantity = request('candy_quantity');
    $dataAdd->candy_img = 'img';
    $dataAdd->save();
    return redirect('table');
}
public function delete($id){
    $can=Candy::find($id);
    $can->delete();
    return redirect('table');

}

public function edit($id){
    $update = Candy::find($id);
   return view('layout.edit',compact('update'));
}
public function updated(Request $request, $id)
{
   $update = Candy::find($id); 
   $update->candy_name=$request->input('candy_name');
   $update->candy_quantity=$request->input('candy_quantity');
   $update->candy_price=$request->input('candy_price');
   $update->candy_des=$request->input('candy_des');
   $update->update();
   return redirect('/table');
}

public function select($id)
{
    $sel = Candy::find($id);
    return view('layout.select',compact('sel'));
}

public function validation (Request $request){
    $request->validate([
        'firstname'=>'required|alpha',
        'email'=>'required|email',
        'password'=>'required|min:8|regex:/^.(?=.{3,})(?=.[a-zA-Z])(?=.[0-9])(?=.[\d\x])(?=.[!$#%]).$/',
        'phonenumber'=>'numeric|digits_between:9,11'

    ]);
    return $request->input();

}
  public function onerel(){
      return User::find(1)->Candy;

  }
  public function form_validate(Request $request){
    $request->validate([
        'firstName'=>'required|alpha',
        'lastName'=>'required|alpha',
        'email'=>'required|email',
        'password'=>'required|min:8|regex:/^.(?=.{3,})(?=.[a-zA-Z])(?=.[0-9])(?=.[\d\x])(?=.[!$#%]).$/',
        'confirmPassword'=>'required|min:8|regex:/^.(?=.{3,})(?=.[a-zA-Z])(?=.[0-9])(?=.[\d\x])(?=.[!$#%]).$/',
        'city'=>'required|alpha',
        'phonenumber'=>'numeric|digits_between:9,11'
    ]);
    return $request->input();
}


}
