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
                        <a class="dropdown-item" href="#">View All Shoes</a>
                        <a class="dropdown-item" href="#">View Cart</a>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <div class="row">
                        <div class="col">2020-06-11 07:00:00</div>
                        <div class="col"><b>Total: Rp. 50.0000.000</b></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card mt-5 pb-5" style="width: 15rem;">
                                <a href="#"><img src="https://cdn.flightclub.com/TEMPLATE/800801/1.jpg" class="card-img-top" alt="https://cdn.flightclub.com/TEMPLATE/800801/1.jpg"></a>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                </div>
        </section>
    </main>
@endsection
