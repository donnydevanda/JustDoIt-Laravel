<?php

namespace App\Http\Controllers;

use App\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    function index(){
        $items = Transaction::whereNull('checkout_time')->get();
        return view('cart')->with('items', $items);
    }

    function insert(Request $request){
        Transaction::create([
            'users_id' => '2',
            'shoes_id' => $request->id,
            'quantity' => $request->quantity,
            'price' => $request->price * $request->quantity
        ]);

        return redirect('/');
    }

    function cartEditView(Request $request, $slug){
        $cartEdit = Transaction::where('shoes_id', $slug) -> firstOrFail();
        return view('cart-edit')->with('cartEdit', $cartEdit);
    }

    function cartEdit(Request $request){
        Transaction::where('id', $request->id)->update([
            'quantity' => $request->quantity,
            'price' => $request->price * $request->quantity
        ]);

        return redirect('/cart/1');
    }

    function cartDelete(Request $request){
        Transaction::find($request->id)->delete();
        return redirect('/cart/1');
    }

    function cartCheckout(Request $request){
        Transaction::whereNull('checkout_time')->update([
            'checkout_time' => Carbon::now()->toDateTimeString()
        ]);
        return redirect('/cart/1');
    }

    function transaction(){
        $items = Transaction::get()->groupBy('checkout_time');
        return view('transaction', [
            'items' => $items,
        ]);
    }
}
