{{--@extends('layouts.auth')--}}
{{--@section('title', 'JUSTDOIT! | Add Shoes')--}}

{{--@section('content')--}}
{{--    <main>--}}
{{--        <section class="content">--}}
{{--            <div class="container mt-5">--}}
{{--                <div class="card mx-auto register" style="width: 30rem;">--}}
{{--                    <div class="card-body">--}}
{{--                        <form action="{{url('login')}}" method="POST" enctype="multipart/form-data">--}}
{{--                            {{csrf_field()}}--}}
{{--                            <h1 class="my-3 text-center"><b>Login!</b></h1>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="email">Email</label>--}}
{{--                                <input type="text" class="form-control" name="email"/>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="password">Password</label>--}}
{{--                                <input type="password" class="form-control" name="password"/>--}}
{{--                            </div>--}}
{{--                            <input type="submit" value="Login" class="btn btn-primary mt-3">--}}
{{--                        </form>--}}
{{--                        <div class="div mt-3">--}}
{{--                            @if($errors->any())--}}
{{--                                {{$errors->first()}}--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    </main>--}}
{{--@endsection--}}
