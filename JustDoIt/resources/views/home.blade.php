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
                       @if($auth && $role == 'USER')
                            <a class="dropdown-item" href="{{url('cart')}}">View Cart</a>
                            <a class="dropdown-item" href="{{url('transaction')}}">View Transaction</a>
                        @elseif($auth && $role == 'ADMIN')
                            <a class="dropdown-item" href="{{url('add')}}">Add Shoes</a>
                            <a class="dropdown-item" href="{{url('transaction')}}">View Transaction</a>
                        @endif
                    </div>
                </div>
                <div class="row">
                    @foreach($shoes as $shoe)
                        <div class="col-4">
                            <div class="card mt-5" style="width: 18rem;">
                                <a href="{{ route('detail', $shoe->id)}}"><img src="{{asset('storage/'.$shoe->image)}}"
                                        class="card-img-top py-2 px-2" alt="" style="width: 18rem; max-height: 12rem"></a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="{{ route('detail', $shoe->id)}}">{{$shoe->name}}</a></h5>
                                    <p class="card-text">Rp. {{number_format($shoe->price)}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="container mt-4 mx-auto">
                    {{$shoes->links()}}
                </div>
            </div>
        </section>
    </main>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
</head>
