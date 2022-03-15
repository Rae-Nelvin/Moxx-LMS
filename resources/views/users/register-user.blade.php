@extends('layouts.app')
@section('content')
<div class="container w-full">
    <div class="register w-100 h-100">
        <div class="grid md:grid-col-2">
            <div class="slogan md:col-start">
                <div class="bg w-100 h-100" style="background-image: url('{{ asset ('images/mask-bg.jpg')}}');">
                    <div href="{{route('welcome')}}" class="font-bold back md:pt-40 col-start">
                        <a href="">Back to Home</a>
                    </div>
                    <div class="py-12 font-bold md:text-4xl lg:text-5xl">
                        Learn Design
                        <br>From the
                        <br>Expert
                    </div>
                </div>
            </div>
            <div class=" md:col-end-4">
                <div class="font-bold md:col-end-4 title md:pt-40 ">Register</a></div>
                <form class="py-10 w-100" action="/register" method="POST">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" href="">Username</label>
                        @if ($errors->has('username'))
                        <span class="text-left text-danger">{{ $errors->first('username') }}</span>
                        @endif
                        <input name="username" type="text" class="form-control" id="username" value="{{ old ('username')}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" href="">Fullname</label>
                        @if ($errors->has('name'))
                        <span class="text-left text-danger">{{ $errors->first('name') }}</span>
                        @endif
                        <input type="text" name="name" class="form-control" id="username" value="{{ old ('name')}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        @if ($errors->has('email'))
                        <span class="text-left text-danger">{{ $errors->first('email') }}</span>
                        @endif
                        <input type="email" name="email" class="form-control" id="email" value="{{ old ('email')}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        @if ($errors->has('password'))
                        <span class="text-left text-danger">{{ $errors->first('password') }}</span>
                        @endif
                        <input type="password" name="password" class="form-control" value="{{ old ('password')}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        @if ($errors->has('password_confirm'))
                        <span class="text-left text-danger">{{ $errors->first('password_confirm') }}</span>
                        @endif
                        <input type="password" name="password_confirm" class="form-control" value="{{ old ('password_confirm')}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        @if ($errors->has('phone'))
                        <span class="text-left text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                        <input type="text" name="phone" class="form-control" id="phone" value="{{ old ('phone')}}" required>
                    </div>

                    <button type="submit" class="mt-2 text-white btn btn-reg sm:w-full">Register</button>

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
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
