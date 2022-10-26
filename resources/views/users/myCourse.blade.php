@extends('layouts.guest')

@section('content')
    @foreach ($course as $courses)
        <a href="/user/course/detail/{{ $courses->id }}/1/1">
            <div class="max-w-[318px] w-full mr-[37px] mb-[31px]">
                <div class="bg-[#3CCAA1]/30 relative rounded-lg flex flex-row ">
                    <img src="{{ asset('storage/' . $courses->imageURL) }}" alt="" class="w-full">
                </div>
                <div class="bg-white py-[18px] px-[20px]">
                    <h1 class="font-bold text-2xl">{{ $courses->title }}</h1>
                    <div class="flex flex-row flex-nowrap justify-between items-center mt-1">
                        <h2 class="font-light text-lg">Rp. {{ $courses->price }}</h2>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
@endsection
