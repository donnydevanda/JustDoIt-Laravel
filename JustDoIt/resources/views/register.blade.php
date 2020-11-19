{{--@extends('layouts.auth')--}}
{{--@section('title', 'JUSTDOIT! | Add Shoes')--}}

{{--@section('content')--}}
{{--    <main>--}}
{{--        <section class="content">--}}
{{--            <div class="container mt-5">--}}
{{--                <div class="card mx-auto register" style="width: 30rem;">--}}
{{--                    <div class="card-body">--}}
{{--                        <form action="{{url('register')}}" method="POST" enctype="multipart/form-data">--}}
{{--                            {{csrf_field()}}--}}
{{--                            <h1 class="my-3 text-center"><b>Register!</b></h1>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="username">Username</label>--}}
{{--                                <input type="text" class="form-control" name="username"/>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="email">Email Address</label>--}}
{{--                                <input type="text" class="form-control" name="email"/>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="password">Password</label>--}}
{{--                                <input type="password" class="form-control" name="password"/>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="password_confirmation">Confirm Password</label>--}}
{{--                                <input type="password" class="form-control" name="password_confirmation"/>--}}
{{--                            </div>--}}
{{--                            <input type="submit" value="Register" class="btn btn-primary mt-3">--}}
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
