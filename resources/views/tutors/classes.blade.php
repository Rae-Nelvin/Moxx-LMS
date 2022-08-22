@extends('layouts.guest')

@section('content')

    <div class="flex flex-row justify-between items-center">
        <h1 class="font-bold text-[40px]">My Class</h1>
        <button class="bg-[#50CFAB] items-center flex justify-center py-3 px-5 rounded-lg hover:bg-[#4ABA9A] transition-all duration-300 ease-in-out">
            <h2 class="text-white text-center font-semibold text-lg">Create new+</h2>
        </button>
    </div>

    <div class="flex flex-row flex-nowrap mt-7 space-x-10">
        <div class="w-1/3">
            <div class="bg-[#3CCAA1]/30 relative rounded-lg flex flex-row">
                <img src="{{ asset('images/item_bootcamp.png') }}" class="w-full">
                <div class="absolute left-0 bottom-0 flex flex-row justify-between w-full py-[25px] px-[30px]">
                    <h3 class="font-light text-base bg-[#50CFAB] px-2 py-1 rounded-3xl">Active</h3>
                    <a href="#">
                        <img src="{{ asset('images/guest-icon/dots.svg') }}">
                    </a>
                </div>
            </div>
            <div class="bg-white py-[21px] px-[30px]">
                <h1 class="font-bold text-2xl">PowerPoint Design</h1>
                <h2 class="font-light text-lg">Rp150.000</h2>
            </div>
        </div>
        <div class="w-1/3">
            <div class="bg-[#3CCAA1]/30 relative rounded-lg flex flex-row">
                <img src="{{ asset('images/item_bootcamp.png') }}" class="w-full">
                <div class="absolute left-0 bottom-0 flex flex-row justify-between w-full py-[25px] px-[30px]">
                    <h3 class="font-light text-base bg-[#C4C4C4] px-2 py-1 rounded-3xl">Deactive</h3>
                    <a href="#">
                        <img src="{{ asset('images/guest-icon/dots.svg') }}">
                    </a>
                </div>
            </div>
            <div class="bg-white py-[21px] px-[30px]">
                <h1 class="font-bold text-2xl">PowerPoint Design</h1>
                <h2 class="font-light text-lg">Rp150.000</h2>
            </div>
        </div>
    </div>

@endsection