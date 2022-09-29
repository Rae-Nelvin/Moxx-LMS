@extends('layouts.guest')

@section('content')

    <h1 class="font-bold text-[40px]">Courses</h1>
    <div class="flex flex-row flex-nowrap mt-[39px] space-x-10">
        <div class="bg-white flex flex-row items-center py-[31px] px-[33px] w-1/3">
            <div class="bg-[#3CCAA1]/30 rounded-full w-[54px] h-[54px]">
            </div>
            <div class="ml-[35px] space-y-1">
                <h1 class="font-bold text-[32px]">{{ $active }}</h1>
                <h2 class="font-normal text-[22px]">Active Courses</h2>
            </div>
        </div>
        <div class="bg-white flex flex-row items-center py-[31px] px-[33px] w-1/3">
            <div class="bg-[#3CCAA1]/30 rounded-full w-[54px] h-[54px]">
            </div>
            <div class="ml-[35px] space-y-1">
                <h1 class="font-bold text-[32px]">{{ $pending }}</h1>
                <h2 class="font-normal text-[22px]">Pending Courses</h2>
            </div>
        </div>
        <div class="bg-white flex flex-row items-center py-[31px] px-[33px] w-1/3">
            <div class="bg-[#3CCAA1]/30 rounded-full w-[54px] h-[54px]">
            </div>
            <div class="ml-[35px] space-y-1">
                <h1 class="font-bold text-[32px]">{{ $active }}</h1>
                <h2 class="font-normal text-[22px]">Denied Courses</h2>
            </div>
        </div>
    </div>

    <h1 class="font-bold text-[40px] mt-10">Pending Courses</h1>
    <div class="overflow-x-hidden flex flex-nowrap relative shadow-md sm:rounded-lg mt-[39px]">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Creator Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Course Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Course Type
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Total Lesson
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Total Price
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($pendingData as $pendings)
                    <tr class="bg-white border-b  dark:border-gray-700">
                        <td scope="row" class="py-4 px-6">
                            {{ $pendings->user->name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $pendings->title }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $pendings->courseType->name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $pendings->lessonGroup->count() }}
                        </td>
                        <td class="py-4 px-6">
                            Rp {{ $pendings->price }}
                        </td>
                        <td class="flex flex-row space-x-5 px-4">
                            <div class="bg-blue-400 rounded-2xl items-center flex justify-center p-2 w-full cursor-pointer hover:bg-blue-600 transition-all duration-300 ease-in-out">
                                <span class="font-base text-base text-white text-center">Detail</span>
                            </div>
                            <div class="bg-[#3CCAA1] rounded-2xl items-center flex justify-center p-2 w-full cursor-pointer hover:bg-[#2f9e7f] transition-all duration-300 ease-in-out">
                                <span class="font-base text-base text-white text-center">Accept</span>
                            </div>
                            <div class="bg-[#EB5656] rounded-2xl items-center flex justify-center p-2 w-full cursor-pointer hover:bg-[#af4040] transition-all duration-300 ease-in-out">
                                <span class="font-base text-base text-white text-center">Reject</span>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection