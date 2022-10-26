@extends('layouts.admin-landingPage')

@section('content')
    <h1 class="font-bold text-[40px]">Top Courses</h1>
    <div class="flex flex-row flex-wrap mt-7 space-x-10">
        @foreach ($shownCourse as $shownCourses)
            <div class="w-1/4">
                <div class="bg-[#3CCAA1]/30 relative rounded-lg flex flex-row ">
                    <img src="{{ asset('storage/' . $shownCourses->photo->imageURL) }}" class="w-full" alt="Class Cover" />
                    <div class="absolute left-0 bottom-0 flex flex-row justify-between w-full py-[25px] px-[30px]">
                        @if ($shownCourses->isActive == 1)
                            <h3 class="font-light text-base bg-[#50CFAB] px-2 py-1 rounded-3xl">Active</h3>
                            <a href="{{ route('tutor.courseDetail', $shownCourses->id) }}">
                                <img src="{{ asset('images/guest-icon/dots.svg') }}">
                            </a>
                        @else
                            <div class="absolute left-0 bottom-0 flex flex-row justify-between w-full py-[25px] px-[30px]">
                                <h3 class="font-light text-base bg-[#C4C4C4] px-2 py-1 rounded-3xl">Deactive</h3>
                                <a href="{{ route('tutor.courseDetail', $shownCourses->id) }}">
                                    <img src="{{ asset('images/guest-icon/dots.svg') }}">
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="bg-white py-[21px] px-[30px]">
                    <h1 class="font-bold text-2xl">{{ $shownCourses->title }}</h1>
                    <h2 class="font-light text-lg">Price : Rp. {{ $shownCourses->price }}</h2>
                    @if ($shownCourses->discountID > 0)
                        <h2 class="font-light text-lg">Discount Token : {{ $shownCourses->discount->token }}</h2>
                        <h2 class="font-light text-lg">Discount Price : Rp.
                            {{ $shownCourses->price * ($shownCourses->discount->discounts / 100) }}</h2>
                    @endif
                    <a href="{{ route('admin.unshowCourses', $shownCourses->id) }}"
                        class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Unshow</a>
                </div>
            </div>
        @endforeach
    </div>

    <h1 class="font-bold text-[40px]">All Courses</h1>
    <div class="flex flex-row flex-wrap mt-7 space-x-10">
        @foreach ($unshownCourse as $unshownCourses)
            <div class="w-1/4">
                <div class="bg-[#3CCAA1]/30 relative rounded-lg flex flex-row ">
                    <img src="{{ asset('storage/' . $unshownCourses->photo->imageURL) }}" class="w-full"
                        alt="Class Cover" />
                    <div class="absolute left-0 bottom-0 flex flex-row justify-between w-full py-[25px] px-[30px]">
                        @if ($unshownCourses->isActive == 1)
                            <h3 class="font-light text-base bg-[#50CFAB] px-2 py-1 rounded-3xl">Active</h3>
                            <a href="{{ route('tutor.courseDetail', $unshownCourses->id) }}">
                                <img src="{{ asset('images/guest-icon/dots.svg') }}">
                            </a>
                        @else
                            <div class="absolute left-0 bottom-0 flex flex-row justify-between w-full py-[25px] px-[30px]">
                                <h3 class="font-light text-base bg-[#C4C4C4] px-2 py-1 rounded-3xl">Deactive</h3>
                                <a href="{{ route('tutor.courseDetail', $unshownCourses->id) }}">
                                    <img src="{{ asset('images/guest-icon/dots.svg') }}">
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="bg-white py-[21px] px-[30px]">
                    <h1 class="font-bold text-2xl">{{ $unshownCourses->title }}</h1>
                    <h2 class="font-light text-lg">Price : Rp. {{ $unshownCourses->price }}</h2>
                    @if ($unshownCourses->discountID > 0)
                        <h2 class="font-light text-lg">Discount Token : {{ $unshownCourses->discount->token }}</h2>
                        <h2 class="font-light text-lg">Discount Price : Rp.
                            {{ $unshownCourses->price * ($unshownCourses->discount->discounts / 100) }}</h2>
                    @endif
                    <a href="{{ route('admin.showCourses', $unshownCourses->id) }}"
                        class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Show</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
