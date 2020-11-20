@extends('layouts.app')
@section('title', 'JUSTDOIT! | Cart')

@section('content')
    <main>
        <section class="content">
            <div class="container mt-5">
                <div class="btn-group text-center">
                    <h2>Cart</h2>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/')}}">View All Shoes</a>
                        <a class="dropdown-item" href="#">View Cart</a>
                        <a class="dropdown-item" href="#">View Transaction</a>
                    </div>
                </div>
                <div class="row mt-2">
                    <table class="table table-hover text-center">
                        <thead class="thead">
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td><img src="{{asset('storage/'.$item->shoes->image)}}" alt="" style="width: 150px"></td>
                                <td class="mid-align">{{$item->shoes->name}}</td>
                                <td class="mid-align">{{$item->quantity}}</td>
                                <td class="mid-align">Rp. {{$item->price}}</td>
                                <td class="mid-align"><button class="btn btn-primary">Edit</button></td>
                            </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td class="mid-align"></td>
                            <td class="mid-align"></td>
                            <td class="mid-align"></td>
                            <td class="mid-align"><button class="btn btn-primary my-3">Checkout Now</button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
@endsection
