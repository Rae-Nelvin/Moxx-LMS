@extends('layouts.guest')

@section('content')

    <div class="flex flex-col flex-nowrap">
        <div class="flex flex-row justify-between">
            <div class="flex flex-row items-center">
                <a href="{{ route('user.dashboard') }}">
                    <img src="{{ asset('images/guest-icon/back-icon.svg') }}" alt="back-icon" class="w-[27px]">
                </a>
                <h1 class="font-bold text-[40px] ml-10">{{ $course->title }}</h1>
            </div>
            <div class="flex flex-row items-center">
                <img src="{{ asset('images/guest-icon/star-icon.svg') }}" alt="star-icon" class="w-[28px] h-[28px] mr-[5px]">
                <span class="font-light text-[26px]">{{ $course->reviews }}</span>
                <span class="font-light text-[26px] ml-1">({{ $course->courseReview->count() }})</span>
            </div>
        </div>
        <div class="bg-white mt-12 flex flex-col justify-between h-auto">
            <img src="{{ asset('storage/'. $course->photo->imageURL) }}" class="w-1/2 mt-4 justify-between items-center mx-auto" alt="Class Cover" />
            <div class="pt-[52px] pr-[65px] pl-[55px]">
                <h1 class="font-bold text-xl">About this course</h1>
                <p class="mt-6 font-normal text-lg text-justify">{{ $course->description }}</p>
            </div>
            <form class="border-1 border py-7 pr-[65px] items-end mt-10 justify-end flex flex-col" action="{{ route('user.checkout') }}" method="POST">
                @csrf
                <input type="hidden" name="courseID" value="{{ $course->id }}">
                <div class="flex flex-row items-center space-x-[31px]">
                    <label class="font-light text-xl">Masukkan token Discount :  </label>
                    <input type="text" name="token">
                </div>
                <div class="flex flex-row items-center space-x-[31px]">
                    <h2 class="font-normal text-xl">Total :  </h2>
                    <h1 class="font-bold text-[27px]">Rp {{ $course->price }}</h1>
                </div>
                <button type="submit" class="mt-5 bg-white rounded-full hover:bg-[#3CCAA1] border-1 border border-[#3CCAA1] focus:bg-[#3CCAA1] active:bg-[#3CCAA1] hover:text-white focus:text-white active:text-white py-2 px-5 font-light hover:font-bold active:font-bold focus:font-bold text-lg w-auto duration-500 ease-in-out transition-all">Payment -></button>
            </form>
        </div>
    </div>

@endsection