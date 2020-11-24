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
                        <a class="dropdown-item" href="{{url('/')}}">View All Shoes</a>
                        <a class="dropdown-item" href="{{url('cart')}}">View Cart</a>
                        <a class="dropdown-item" href="{{url('transaction')}}">View Transaction</a>
                    </div>
                </div>
                <form action="{{url('add')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price"/>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" name="description"/>
                    </div>
                    <div class="form-group">
                        <label for="Image">Image</label>
                        <input type="file" class="form-control-file" name="image">
                    </div>
                    <input type="submit" value="Add Now" class="btn btn-primary mt-3">
                </form>
            </div>
        </section>
    </main>
@endsection
