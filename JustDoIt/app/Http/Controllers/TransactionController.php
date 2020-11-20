<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    function index(Request $request, $id){
        $items = Transaction::all();
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
}
