@extends('layouts.app')
@section('content')
<div class="container bg-page">
    <div class="register">
        <div class="grid lg:grid-cols-2">
            <div class="md:relative lg:block hidden">
                <div class="flex">
                    <img src="{{ asset ('images/mask-bg.jpg')}}" alt="" class="bg">
                </div>
                <!-- <div class="font-bold back md:pt-40 col-start absolute top-0">
                    <a href="{{ url('/') }}"><i class='fas fa-long-arrow-alt-left arrow'></i>Back to Home</a>
                </div> -->
                <div class="py-12 font-bold lg:text-7xl absolute top-0 lg:mt-40">
                    Learn Design
                    <br>From the
                    <br>Expert
                </div>
            </div>
            <div class="form-floating mt-10">
                <div class="lg:text-center font-bold md:mt-40 text-4xl text-center">Register</a>
                </div>
                <form class="py-10 lg:w-1/2 lg:mx-auto" method="post" action="{{ route('register') }}">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"
                        class="form-control @error('name') is-invalid @enderror">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            placeholder="Jhon" required value="{{ old('name')}}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
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
                            class="form-control @error('password') is-invalid @enderror" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input name="password_confirmation" type="password"
                            class="form-control @error('password_confirmation') is-invalid @enderror" required>
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Phone</label>
                        <input name="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                            placeholder="+628" required value="{{ old('phone')}}">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type=" submit" class=" text-white btn sm:w-full" id="btn-reg">Register</button>
                    <p class="py-2 text-center">or</p>
                    <button class="w-full" type=" submit" id="btn-gg">
                        <a class="btn btn-outline-dark w-full" href="{{ route('googleLogin') }}" role="button"
                            style="text-transform:none">
                            <img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
                            Login with Google
                        </a>
                    </button>
                    <p class="mt-2 text-center">Already have account ?<a href="{{ route ('login')}}"
                            class="font-bold">
                            Login</a> </p>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection