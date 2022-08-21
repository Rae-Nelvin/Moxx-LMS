@extends('layouts.app')
@section('content')
<div class="container bg-page">
    <div class="register ">
        <div class="grid md:grid-cols-2">
            <div class="md:relative md:block hidden">
                <div class="flex">
                    <img src="{{ asset ('images/mask-bg.jpg')}}" alt="" class="bg-mask">
                </div>
                <div class="font-bold back md:pt-40 col-start absolute top-0">
                    <a href="{{ url('/') }}"><i class='fas fa-long-arrow-alt-left arrow'></i>Back to Home</a>
                </div>
                <div class="py-12 font-bold md:text-7xl lg:text-7xl absolute top-1/3">
                    Learn Design
                    <br>From the
                    <br>Expert
                </div>
            </div>
            <div class="lg:mt-52 text-center mt-72">
                <div class="font-bold md:col-end-4 md:pt-40 md:text-center lg:text-5xl text-2xl">
                    Register
                    Completed!
                    <br>Thank you for registering with us.
                    </a>
                </div>
                <div class="text-center lg:font-300 font-10">
                    you will recieve a confirmation email to verify you're not a bot
                    <button type=" submit" class="lg:mt-10 text-white btn sm:w-1/2 font-bold " id="btn-reg"
                        onclick="window.location.href='{{ url('login') }}'">Login</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection