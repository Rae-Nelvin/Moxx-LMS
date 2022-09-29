@extends('layouts.guest')

@section('content')

    <div class="flex flex-col flex-nowrap">
        <div class="flex flex-row justify-between">
            <div class="flex flex-row items-center">
                <a href="{{ route('user.dashboard') }}">
                    <img src="{{ asset('images/guest-icon/back-icon.svg') }}" alt="back-icon" class="w-[27px]">
                </a>
                <h1 class="font-bold text-[40px] ml-10">PowerPoint Design</h1>
            </div>
            <div class="flex flex-row items-center">
                <img src="{{ asset('images/guest-icon/star-icon.svg') }}" alt="star-icon" class="w-[28px] h-[28px] mr-[5px]">
                <span class="font-light text-[26px]">4.5</span>
                <span class="font-light text-[26px] ml-1">(1920)</span>
            </div>
        </div>
        <div class="bg-white mt-12 flex flex-col justify-between h-[554px]">
            <div class="pt-[52px] pr-[65px] pl-[55px]">
                <h1 class="font-bold text-xl">About this course</h1>
                <p class="mt-6 font-normal text-lg text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque consectetur id ligula eu luctus. Duis hendrerit finibus bibendum. Donec rutrum dolor eu blandit imperdiet. Curabitur id ligula interdum turpis laoreet pellentesque sit amet vitae arcu. Aenean dictum pharetra nibh non malesuada. Vestibulum pulvinar, mauris non commodo lobortis, metus ante lacinia turpis, id facilisis purus dui vel leo. Ut porttitor, nibh eu aliquet consectetur, erat lacus mattis massa, a maximus nulla massa dignissim sem.</p>
            </div>
            <div class="border-1 border border-[#3CCAA1]/30 py-7 pr-[65px] items-center justify-end flex flex-row space-x-[31px]">
                <h2 class="font-normal text-xl">Total : </h2>
                <h1 class="font-bold text-[27px]">Rp 300.000</h1>
                <button class="bg-white rounded-full hover:bg-[#3CCAA1] border-1 border border-[#3CCAA1] focus:bg-[#3CCAA1] active:bg-[#3CCAA1] hover:text-white focus:text-white active:text-white py-2 px-5 font-light hover:font-bold active:font-bold focus:font-bold text-lg w-auto duration-500 ease-in-out transition-all">Payment -></button>
            </div>
        </div>
    </div>

@endsection