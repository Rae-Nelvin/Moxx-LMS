@extends('layouts.app')
@section('content')
<div class="container w-full">
    <div class="register w-100 h-100">
        <div class="grid">
            <div class="bg w-100 h-100" style="background-image: url('{{ asset ('images/mask-bg.jpg')}}');">
                <div class="slogan lg:col-start">
                    <div class="font-bold back md:pt-40 col-start">
                        <a href="">Back to Home</a>
                    </div>
                    <div class="py-12 font-bold md:text-4xl lg:text-5xl">
                        Learn Design
                        <br>From the
                        <br>Expert
                    </div>
                </div>
            </div>
            <div class="lg:col-end-4">
                <div class="font-bold md:col-end-4 title md:pt-40 text-center">Register Completed
                    <br>Thank you for registering with us.
                    </a>
                </div>
                <div class="text-center font-300">
                    you will recieve a confirmation email to verify you're not a bot
                    <button type=" submit" class="mt-10 text-white btn sm:w-1/2 font-bold" id="btn-reg">Login</button>
                </div>
            </div>
        </div>
    </div>
    @endsection