@extends('layouts.app')
@section('title', 'JUSTDOIT! | Cart Add')

@section('content')
    <main>
        <section class="content" id="cart-edit">
            <div class="container mt-5">
                <div class="btn-group text-center">
                    <h2>Add to Cart</h2>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/')}}">View All Shoes</a>
                        <a class="dropdown-item" href="{{url('cart')}}">View Cart</a>
                        <a class="dropdown-item" href="{{url('transaction')}}">View Transaction</a>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="card mx-auto" style="width: 35rem;">
                        <img class="card-img-top py-2 px-2" src="{{asset('storage/'.$shoesCart->image)}}" alt="" style=" height: 300px">
                        <div class="card-body">
                            <h2>{{$shoesCart->name}}</h2>
                            <p><b>Rp. {{number_format($shoesCart->price)}}</b></p>
                            <p>{{$shoesCart->description}}</p>
                            <form action="{{url('/cart/add/success')}}" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="hidden" class="form-control" name="id" value="{{Auth::id()}}"/>
                                    <input type="hidden" class="form-control" name="id" value="{{$shoesCart->id}}"/>
                                    <input type="hidden" class="form-control" name="price" value="{{$shoesCart->price}}"/>
                                    <input type="number" class="form-control" name="quantity"/>
                                </div>
                                <input type="submit" value="Add Now" class="btn btn-primary mt-3">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
