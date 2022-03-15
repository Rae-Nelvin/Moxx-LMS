@extends('layouts.app')
@section('content')
<div class="container w-full">
    <div class="register w-100 h-100">
        <div class="grid md:grid-col-2">
            <div class="slogan md:col-start">
                <div class="bg w-100 h-100" style="background-image: url('{{ asset ('images/mask-bg.jpg')}}');">
                    <div class="font-bold back md:pt-40 col-start">
                        <a href="{{ url ('/') }}">Back to Home</a>
                    </div>
                    <div class="py-12 font-bold md:text-4xl lg:text-5xl">
                        Learn Design
                        <br>From the
                        <br>Expert
                    </div>
                </div>
            </div>
            <div class=" md:col-end-4">
                <div class="font-bold md:col-end-4 title md:pt-40 ">Login</a></div>
                <form class="py-10 w-100" method="post" action="/login">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" required value="{{ old('email')}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" required value="{{ old('password')}}">
                    </div>
                    <button type=" submit" class="mt-2 text-white btn btn-reg sm:w-full">Login</button>
                    <p class="py-2 text-center">or</p>
                    <div class="sosmed">
                        <div class="google-btn ">
                            <div class="google-icon-wrapper">
                                <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" />
                            </div>
                            <div class="text-center btn-text">Sign in with google</div>
                        </div>
                        <button type="submit" class="mt-3 text-white btn btn-fb sm:w-full"><i class="fa fa-facebook"></i>Sign up with
                            facebook</button>
                    </div>
                    <p class="mt-2 text-sm-center">Don't have account ? <a href="{{url('register')}}" class="text-bold">Register</a> </p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
