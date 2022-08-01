@extends('layouts.app')
@section('content')
<div class="container bg-page">
    <div class="register ">
        <div class="grid md:grid-cols-2">
            <div class="md:relative md:block hidden">
                <div class="flex">
                    <img src="{{ asset ('images/mask-bg.jpg')}}" alt="" class="bg">
                </div>
                <!-- <div class="font-bold back md:pt-40 col-start absolute top-0">
                    <a href="{{ url('/') }}"><i class='fas fa-long-arrow-alt-left arrow'></i>Back to Home</a>
                </div> -->
                <div class="py-12 font-bold md:text-7xl lg:text-7xl absolute top-0 mt-10">
                    Learn Design
                    <br>From the
                    <br>Expert
                </div>
            </div>
            <div class="form-floating mt-10">
                <div class="lg:text-center font-bold md:pt-10 text-4xl text-center">Hello! Please Login</a></div>
                <form class="py-10 lg:w-1/2 lg:mx-auto" method="post" action="{{ route('login') }}">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"
                        class="form-control @error('name') is-invalid @enderror">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="jhonbeckham@gmail.com" required value="{{ old('email')}}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" required
                            value="{{ old('password')}}">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type=" submit" class=" text-white btn sm:w-full" id="btn-reg">Login</button>
                    <p class="py-2 text-center">or</p>
                    <button class="w-full" type=" submit" id="btn-gg">
                        <a class="btn btn-outline-dark w-full" href="/users/googleauth" role="button"
                            style="text-transform:none">
                            <img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
                            Login with Google
                        </a>
                    </button>
                    <p class="mt-2 text-center">Don't have account ?<a href="{{ route ('register')}}" class="font-bold">
                            Register</a> </p>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection