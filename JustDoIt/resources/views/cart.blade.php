@extends('layouts.app')
@section('title', 'JUSTDOIT! | Cart')

@section('content')
    <main>
        <section class="content">
            <div class="container my-5">
                <div class="btn-group text-center">
                    <h2>Cart</h2>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/')}}">View All Shoes</a>
                        <a class="dropdown-item" href="{{url('cart')}}">View Cart</a>
                        <a class="dropdown-item" href="{{url('transaction')}}">View Transaction</a>
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
                                <td><img src="{{asset('storage/'.$item->shoes->image)}}" alt="" style="width: 150px; height: 90px"></td>
                                <td class="mid-align">{{$item->shoes->name}}</td>
                                <td class="mid-align">{{$item->quantity}}</td>
                                <td class="mid-align">Rp. {{$item->price}}</td>
                                <td class="mid-align"><a href="{{ route('cartEdit', $item->shoes_id)}}"><button class="btn btn-primary">Edit</button></a></td>
                            </tr>
                        @endforeach
                        @if($items == '[]')
                            <tr>
                                <td></td>
                                <td class="mid-align"></td>
                                <td class="mid-align py-5">Cart Empty</td>
                                <td class="mid-align"></td>
                                <td></td>
                            </tr>
                        @elseif($items != NULL)
                            <td></td>
                            <td class="mid-align"></td>
                            <td class="mid-align"></td>
                            <td class="mid-align"></td>
                            <td>
                                <form action="{{url('cartCheckout')}}" class="py-3" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="submit" value="Checkout Now" class="btn btn-primary">
                                </form>
                            </td>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
@endsection
