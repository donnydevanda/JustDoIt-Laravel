<?php

namespace App\Http\Controllers;

use App\Shoe;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    function index(){
        $shoes=Shoe::all();
        return view('home')->with('shoes', $shoes);
    }

    function insert(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'price'=> 'required|numeric|min: 100',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png'
        ]);

        Shoe::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $request->file('image')->store('images', 'public')
        ]);

        return redirect()->back();
    }

    function update(Request $request){
        $this->validate($request, [
            'id' => 'required|exists:shoes,id',
            'name' => 'required',
            'price'=> 'required|numeric|min: 100',
            'description' => 'required',

        ]);

        Shoe::where('id', $request->id)->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'image'=>$request->image
        ]);

        return redirect()->back();
    }
}
