@extends('layouts.admin-landingPage')

@section('content')
    <h1 class="font-bold text-[40px]">Top Mentors</h1>
    <div class="flex flex-row flex-wrap mt-7 space-x-10">
        @foreach ($shownMentor as $shownMentors)
            <div
                class="w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-end px-4 pt-4">
                </div>
                <div class="flex flex-col items-center pb-10">
                    @if ($shownMentors->avatarID)
                        <img class="mb-3 w-24 h-24 rounded-full shadow-lg"
                            src="{{ asset('storage/' . $shownMentors->photo->imageURL) }}" alt="Bonnie image">
                    @endif
                    <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="{{ asset('images/guest-icon/dummy-icon') }}"
                        alt="Bonnie image">
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $shownMentors->name }}</h5>
                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ $shownMentors->email }}</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">Total Review :
                        {{ $shownMentors->reviews }}</span>
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <button
                            class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Details</button>
                        <a href="{{ route('admin.unshowMentors', $shownMentors->id) }}"
                            class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Unshow</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <h1 class="font-bold text-[40px]">All Mentors</h1>
    <div class="flex flex-row flex-wrap mt-7 space-x-10">
        @foreach ($unshownMentor as $unshownMentors)
            <div
                class="w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-end px-4 pt-4">
                </div>
                <div class="flex flex-col items-center pb-10">
                    @if ($unshownMentors->avatarID)
                        <img class="mb-3 w-24 h-24 rounded-full shadow-lg"
                            src="{{ asset('storage/' . $unshownMentors->photo->imageURl) }}" alt="Bonnie image">
                    @endif
                    <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="{{ asset('images/guest-icon/dummy-icon') }}"
                        alt="Bonnie image">
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $unshownMentors->name }}</h5>
                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ $unshownMentors->email }}</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">Total Review :
                        {{ $unshownMentors->reviews }}</span>
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <button
                            class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Details</button>
                        <a href="{{ route('admin.showMentors', $unshownMentors->id) }}"
                            class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Show</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
