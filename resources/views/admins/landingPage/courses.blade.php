@extends('layouts.admin-landingPage')

@section('content')

    <h1 class="font-bold text-[40px]">Top Courses</h1>
    <div class="flex flex-row flex-wrap mt-7 space-x-10">
        @foreach ($course as $courses)
            <div class="w-1/4">
                <div class="bg-[#3CCAA1]/30 relative rounded-lg flex flex-row ">
                    <img src="{{ asset('storage/'. $courses->photo->imageURL) }}" class="w-full" alt="Class Cover" />
                    <div class="absolute left-0 bottom-0 flex flex-row justify-between w-full py-[25px] px-[30px]">
                        @if($courses->isActive == 1)
                            <h3 class="font-light text-base bg-[#50CFAB] px-2 py-1 rounded-3xl">Active</h3>
                            <a href="{{ route('tutor.courseDetail',$courses->id) }}">
                                <img src="{{ asset('images/guest-icon/dots.svg') }}">
                            </a>
                        @else
                        <div class="absolute left-0 bottom-0 flex flex-row justify-between w-full py-[25px] px-[30px]">
                            <h3 class="font-light text-base bg-[#C4C4C4] px-2 py-1 rounded-3xl">Deactive</h3>
                            <a href="{{ route('tutor.courseDetail',$courses->id) }}">
                                <img src="{{ asset('images/guest-icon/dots.svg') }}">
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="bg-white py-[21px] px-[30px]">
                    <h1 class="font-bold text-2xl">{{ $courses->title }}</h1>
                    <h2 class="font-light text-lg">Price : Rp. {{ $courses->price }}</h2>
                    @if( $courses->discountID > 0 )
                        <h2 class="font-light text-lg">Discount Token : {{ $courses->discount->token }}</h2>
                        <h2 class="font-light text-lg">Discount Price : Rp. {{ $courses->price * ($courses->discount->discounts/100) }}</h2>
                    @endif
                </div>
            </div>
            @endforeach
        </div>

@endsection