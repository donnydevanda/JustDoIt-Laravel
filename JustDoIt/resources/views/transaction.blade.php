@extends('layouts.app')
@section('title', 'JUSTDOIT! | Transaction')

@section('content')
    <main>
        <section class="content">
            <div class="container mt-5">
                <div class="btn-group text-center">
                    <h2>Transaction</h2>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/')}}">View All Shoes</a>
                        <a class="dropdown-item" href="{{url('cart')}}">View Cart</a>
                        <a class="dropdown-item" href="{{url('transaction')}}">View Transaction</a>
                    </div>
                </div>
                <div class="mt-5">
                        @foreach($items as $item => $itemDetail)
                            <h5>Transaction Date: <b>{{$item}}</b></h5>
                            <div class="row">
                                @php
                                    $totalPrice = 0
                                @endphp
                                @foreach($itemDetail as $detail)
                                    <input type="hidden" value="{{$totalPrice += $detail["price"]}}">
                                    <div class="col-4 my-2">
                                        <div class="card" style="width: 18rem;">
                                            <img src="{{asset('storage/'.$detail->shoes->image)}}" class="card-img-top"
                                                 alt="https://cdn.flightclub.com/TEMPLATE/800801/1.jpg" style="width: 285px; height: 170px">
                                        </div>
                                    </div>
                                    @if($loop->last)
                                        <h6 class="col-12 mt-3">Total Price: <b>Rp. {{number_format($totalPrice)}}</b></h6>
                                    @endif
                                @endforeach
                            </div>
                        <hr>
                        @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
