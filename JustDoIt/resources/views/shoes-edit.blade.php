@extends('layouts.app')
@section('title', 'JUSTDOIT! | Edit Shoes')

@section('content')
    <main>
        <section class="content">
            <div class="container mt-5">
                <div class="btn-group text-center">
                    <h2>Shoes Edit</h2>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">View All Shoes</a>
                        <a class="dropdown-item" href="#">View Cart</a>
                        <a class="dropdown-item" href="#">View Transaction</a>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <img src="https://stockx-360.imgix.net//adidas-Yeezy-Boost-350-V2-Zyon/Images/adidas-Yeezy-Boost-350-V2-Zyon/Lv2/img01.jpg?auto=format,compress&w=559&q=90&dpr=2&updated_at=1603481985" alt="" style="width: 500px">
                    </div>
                    <div class="col my-1">
                        <h2>Yeezyeezy eezy eezy eezyeezy eezy eezy</h2>
                        <p><b>Rp. 50.000.000</b></p>
                        <p>Sepatu mahal bos Sepatu mahal bos Sepatu mahal bos Sepatu mahal bos Sepatu mahal bos</p>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <p>Shoe Name:</p>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="quantity"/>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <p>Price:</p>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="quantity"/>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <p>Description:</p>
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" id="quantity"/>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <p>Image:</p>
                    </div>
                    <div class="col">
                        <form>
                            <div class="form-group">
                                <input type="file" class="form-control-file" id="image">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                    </div>
                    <div class="col">
                        <button style="float: right" class="btn btn-primary mr-3">Update</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
