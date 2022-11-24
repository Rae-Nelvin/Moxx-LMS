@extends('layouts.guest')

@section('content')
    @foreach ($course as $courses)
        <a href="/user/course/detail/{{ $courses->id }}/{{ $courses->progressLessonID }}">
            <div class="max-w-[318px] w-full mr-[37px] mb-[31px]">
                <div class="bg-[#3CCAA1]/30 relative rounded-lg flex flex-row ">
                    <img src="{{ asset('storage/' . $courses->course->photo->imageURL) }}" alt="" class="w-full">
                </div>
                <div class="bg-white py-[18px] px-[20px]">
                    <div class="flex flex-row justify-between">
                        <h1 class="font-bold text-2xl">{{ $courses->course->title }}</h1>
                        @if ($courses->progressLessonID == $courses->endLessonID)
                            <p class="font-light text-xl text-green-400">Done</p>
                        @else    
                            <p class="font-light text-xl text-gray-400">On Progress</p>
                        @endif
                    </div>
                    <div class="flex flex-row flex-nowrap justify-between items-center mt-1">
                        <h2 class="font-light text-lg">Rp. {{ $courses->course->price }}</h2>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
@endsection
