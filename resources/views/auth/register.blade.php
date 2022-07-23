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
            <div class=" md:col-end-4 form-floating">
                <div class="font-bold md:col-end-4 title md:pt-40 ">Register</a></div>
                <form class="py-10 w-100" method="post" action="{{ route('users.success') }}">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"
                        class="form-control @error('name') is-invalid @enderror">
                    <div class="mb-3">
                        <label for="exampleInputname" class="form-label">Name</label>
                        <input name="name" type="name" class="form-control" required value="{{ old('name')}}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input name="text" type="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="jhonbeckham@gmail.com" required value="{{ old('email')}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" required
                            value="{{ old('password')}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input name="password_confirm" type="password"
                            class="form-control @error('confirm_password') is-invalid @enderror" required
                            value="{{ old('password_confirm')}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Phone</label>
                        <input name="phone" type="phone" class="form-control @error('phone') is-invalid @enderror"
                            required value="{{ old('phone')}}">
                    </div>
                    <button type=" submit" class=" text-white btn sm:w-full" id="btn-reg">Register</button>
                    <p class="py-2 text-center">or</p>
                    <button class="w-full" type=" submit" id="btn-gg">
                        <a class="btn btn-outline-dark w-full" href="/users/googleauth" role="button"
                            style="text-transform:none">
                            <img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
                            Login with Google
                        </a>
                    </button>
                    <p class="mt-2 text-sm-center">Don't have account ? <a href="{{ route ('register')}}"
                            class="text-bold">Register</a> </p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection