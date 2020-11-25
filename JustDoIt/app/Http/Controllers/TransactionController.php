<?php

namespace App\Http\Controllers;

use Auth;
use App\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    function index(){
        $auth = Auth::check();
        $userId = 0;
        if($auth){
            $userId = Auth::user()->id;
        }
        $items = Transaction::whereNull('checkout_time')->where('users_id', $userId)->get();
        return view('cart')->with('items', $items);
    }

    function insert(Request $request){
        $userId = Auth::user()->id;
        Transaction::updateOrCreate([
            'users_id' => $userId,
            'shoes_id' => $request->id,
            'checkout_time' => null
        ],
        [
            'quantity' => $request->quantity,
            'price' => $request->price * $request->quantity
        ]);

        return redirect('/');
    }

    function cartEditView(Request $request, $slug){
        $id = Auth::user()->id;
        $cartEdit = Transaction::where(['shoes_id' => $slug, 'users_id' => $id, 'checkout_time' => null])->firstOrFail();
        return view('cart-edit')->with('cartEdit', $cartEdit);
    }

    function cartEdit(Request $request){
        $id = Auth::user()->id;
        Transaction::where(['id' => $request->id, 'users_id' => $id, 'checkout_time' => null])->update([
            'quantity' => $request->quantity,
            'price' => $request->price * $request->quantity
        ]);

        return redirect('/cart');
    }

    function cartDelete(Request $request){
        Transaction::find($request->id)->delete();
        return redirect('/cart');
    }

    function cartCheckout(Request $request){
        Transaction::whereNull('checkout_time')->update([
            'checkout_time' => Carbon::now()->toDateTimeString()
        ]);
        return redirect('/cart');
    }

    function transaction(){
        $auth = Auth::check();
        $role = 0;
        $item = 0;
        if($auth){
            $role = Auth::user()->role;
            if($role == 'USER') $items = Transaction::get()->whereNotNull('checkout_time')->where('users_id', auth()->user()->id)->groupBy('checkout_time');
            elseif($role == 'ADMIN') $items = Transaction::get()->whereNotNull('checkout_time')->groupBy('checkout_time');
        }
        return view('transaction', [
            'items' => $items,
        ]);
    }
}
