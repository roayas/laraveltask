<?php

namespace App\Http\Controllers;
use App\Models\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //

    public function show(){
        $data=Movie::all();
        return view('movies', compact('data'));

    }
    public function viewadd(){
        return view('add');
    }
    public function createData(Request $request){
        $create=new Movie();
        $create->Movie=$request->input('Movie');
        $create->MovieName=$request->input('MovieName');
        $create->MovieDes=$request->input('MovieDes');
        $create->MovieGen=$request->input('MovieGen');
        $create->save();
        return redirect('movies')->with('message','The data has been added successfully');
     }

     public function delete($id){
        $can=Movie::find($id);
        $can->delete();
        return redirect('movies');
    
    }
    public function edit($id){
        $update = Movie::find($id);
       return view('edit',compact('update'));
    }
    public function updated(Request $request, $id)
    {
       $update = Movie::find($id); 
       $update->Movie=$request->input('Movie');
       $update->MovieName=$request->input('MovieName');
       $update->MovieDes=$request->input('MovieDes');
       $update->MovieGen=$request->input('MovieGen');
       $update->update();
       return redirect('/movies');
    }
    
}
