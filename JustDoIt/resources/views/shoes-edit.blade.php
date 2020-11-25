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
                        <a class="dropdown-item" href="{{url('/')}}">View All Shoes</a>
                        <a class="dropdown-item" href="{{url('cart')}}">View Cart</a>
                        <a class="dropdown-item" href="{{url('transaction')}}">View Transaction</a>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <img src="{{asset('storage/'.$update->image)}}" alt="" style="width: 500px">
                    </div>
                    <div class="col my-1">
                        <h2>{{$update->name}}</h2>
                        <p><b>Rp. {{$update->price}}</b></p>
                        <p>{{$update->description}}</p>
                    </div>
                </div>

                <form action="{{url('update')}}" method="POST" class="mt-3 mb-3" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" class="form-control" name="id" value="{{$update->id}}"/>
                    <div class="form-group">
                        <label for="id">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$update->name}}"/>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$update->price}}"/>
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{$update->description}}"/>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Image">Image</label>
                        <input type="file" class="form-control-file" name="image" value="{{$update->images}}">
                    </div>
                    <input type="submit" value="Update Now" class="btn btn-primary mt-3">
                </form>
            </div>
        </section>
    </main>
@endsection
