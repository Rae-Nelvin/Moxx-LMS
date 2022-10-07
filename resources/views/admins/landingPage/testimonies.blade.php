@extends('layouts.admin-landingPage')

@section('content')

    <h1 class="font-bold text-[40px]">All Testimonies</h1>
    <div class="flex flex-row flex-wrap w-full">
        @foreach ($course as $courseReview)
            <div class="flex flex-row bg-white py-4 px-6 my-6 w-auto max-w-2xl space-x-2 mr-4">
                <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="{{ asset('images/guest-icon/dummy-icon') }}" alt="Bonnie image">  
                <div class="flex flex-col justify-between items-start">
                    <div class="flex flex-row justify-between w-full">
                        <h1>{{ $courseReview->user->name }}</h1>
                        <p>{{ $courseReview->stars }}</p>
                    </div>
                    <div class="flex flex-col mt-4">
                        <h2>Type : {{ $courseReview->course->title }}</h2>
                        <p class="mt-4">{{ $courseReview->reviews }}</p>
                    </div>
                </div>
            </div>
        @endforeach
        @foreach ($mentor as $mentorReview)
            <div class="flex flex-row bg-white py-4 px-6 my-6 w-auto max-w-2xl space-x-2 mr-4">
                <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="{{ asset('images/guest-icon/dummy-icon') }}" alt="Bonnie image">  
                <div class="flex flex-col justify-between items-start">
                    <div class="flex flex-row justify-between w-full">
                        <h1>{{ $mentorReview->user->name }}</h1>
                        <p>{{ $mentorReview->stars }}</p>
                    </div>
                    <div class="flex flex-col mt-4">
                        <h2>Type : {{ $mentorReview->mentor->name }}</h2>
                        <p class="mt-4">{{ $mentorReview->reviews }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


@endsection