<?php

namespace App\Http\Controllers;

use App\Shoe;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    function index(){
        $shoes=Shoe::paginate(6);
        return view('home')->with('shoes', $shoes);
    }

    function detail(Request $request, $slug){
        $shoesDetail = Shoe::where('id', $slug) -> firstOrFail();
        return view('detail')->with('shoesDetail', $shoesDetail);
    }

    function cart(Request $request, $slug){
        $shoesCart = Shoe::where('id', $slug) -> firstOrFail();
        return view('cart-add')->with('shoesCart', $shoesCart);
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
