@extends('layouts.app')
@section('title', 'JUSTDOIT! | All Shoes')

@section('content')
<main>
    <section class="content">
        <div class="container mt-5">
            <div class="btn-group text-center">
                <h2>All Shoes</h2>
                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{url('/')}}">View All Shoes</a>
                    <a class="dropdown-item" href="#">View Cart</a>
                    <a class="dropdown-item" href="#">View Transaction</a>
                </div>
            </div>
            <div class="row">
                @foreach($shoes as $shoe)
                <div class="col">
                    <div class="card mt-5" style="width: 18rem;">
                        <a href="{{ route('detail', $shoe->id)}}"><img src={{asset('storage/'.$shoe->image)}} class="card-img-top" alt="https://cdn.flightclub.com/TEMPLATE/800801/1.jpg"></a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ route('detail', $shoe->id)}}">{{$shoe->name}}</a></h5>
                            <p class="card-text">Rp. {{$shoe->price}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="container mt-5 mx-auto">
                {{$shoes->links()}}
            </div>
        </div>
    </section>
</main>
@endsection
