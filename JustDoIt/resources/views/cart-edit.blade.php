@extends('layouts.app')
@section('title', 'JUSTDOIT! | Cart Edit')

@section('content')
    <main>
        <section class="content" id="cart-edit">
            <div class="container mt-5">
                <div class="btn-group text-center">
                    <h2>Detail</h2>
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
                    <div class="col">
                        <img class="my-auto" src="{{asset('storage/'.$cartEdit->shoes->image)}}" alt="" style="width: 500px">
                    </div>
                    <div class="col my-1">
                        <h2>{{$cartEdit->shoes->name}}</h2>
                        <p><b>Rp. {{number_format($cartEdit->shoes->price)}}</b>
                            (Total: Rp. {{number_format($cartEdit->shoes->price * $cartEdit->quantity)}})</p>
                        <p>{{$cartEdit->shoes->description}}</p>
                        <form action="{{url('cartEdit')}}" method="POST" class="mt-3" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" class="form-control" name="id" value="{{$cartEdit->id}}"/>
                            <input type="hidden" class="form-control" name="price" value="{{$cartEdit->shoes->price}}"/>
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="quantity" value="{{$cartEdit->quantity}}"/>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <input type="submit" class="btn btn-primary" style="width: 100px" value="Update">
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-8">
                            </div>
                            <div class="col-2">
                                <form action="{{url('cartDelete')}}" method="POST" class="" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" class="form-control" name="id" value="{{$cartEdit->id}}"/>
                                    <input type="submit" class="btn btn-link" value="Delete">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
