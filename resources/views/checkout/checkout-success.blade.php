@extends('layouts.app')
@section('content')
@include('components.navbar')
<div class="h-screen container checkout-page mt-24">
    <div class="flex-1 overflow-y-auto p-5">
        <h1 class="text-4xl font-bold text-black text-center">
            Checkout Confirmation
        </h1>
        <p class="text-center mt-3">Terima kasih telah membeli kelas ini. silahkahkan akses kelas di dashboard anda!</p>
    </div>
    <div class=" card lg:w-1/2 mx-auto rounded-xl lg:h-1/2" id="card-checkout">
        <div class="lg:grid grid-cols-2 gap-4 grid-flow-col">
            <div class="">
                <img src="{{ asset ('images/slide-2.jpg')}}" alt="" class="rounded-lg lg:m-5 lg:w-3/4"
                    id="img-checkout">
                <div class="checkout-price text-white lg:m-5 text-center">
                    <h3 class="font-bold ">
                        Adobe Ilustrator
                    </h3>
                    <span>Rp.300.000</span>
                </div>
            </div>
            <div class="m-5 mt-5">
                <span class="text-white text-xl font-bold">
                    Payment Method
                </span>
                <br>
                <span class="text-white text-sm">
                    <strong>E-money Bank</strong> Transfers
                    <div class="line-bar">

                    </div>
                </span>
                <div class="grid grid-cols-2">
                    <p class="text-white mt-3">
                        Price :
                    </p>
                    <p class="text-white mt-3">
                        Rp.300.000
                    </p>
                </div>
                <div class="grid grid-cols-2">
                    <p class="text-white mt-3">
                        Midtrans Fee :
                    </p>
                    <p class="text-white mt-3">
                        Rp.5000
                    </p>
                </div>
                <div class="grid grid-cols-2">
                    <p class="text-white mt-5">
                        Total :
                    </p>
                    <p class="text-white mt-5">
                        Rp.300.500
                    </p>
                </div>
                <div class="flex justify-end mt-4 m-5">
                    <button class="btn text-white rounded-full border-success" id="checkout-dashboard">
                        Dashboard
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection