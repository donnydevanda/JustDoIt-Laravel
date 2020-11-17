@extends('layouts.app')
@section('title', 'JUSTDOIT! | Add Shoes')

@section('content')
    <main>
        <section class="content">
            <div class="container mt-5">
                <div class="btn-group text-center">
                    <h2>Add Shoes</h2>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">View All Shoes</a>
                        <a class="dropdown-item" href="#">View Cart</a>
                        <a class="dropdown-item" href="#">View Transaction</a>
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
                        <button style="float: right" class="btn btn-primary mr-3">Add Now</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
