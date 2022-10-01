@extends('layouts.guest')

@section('content')

    <h1 class="font-bold text-[40px]">User List</h1>
    <div class="flex flex-row flex-nowrap mt-[39px] space-x-10">
        <div class="bg-white flex flex-row items-center py-[31px] px-[33px] w-1/3">
            <div class="bg-[#3CCAA1]/30 rounded-full w-[54px] h-[54px]">
            </div>
            <div class="ml-[35px] space-y-1">
                <h1 class="font-bold text-[32px]">{{ $user }}</h1>
                <h2 class="font-normal text-[22px]">Active Users</h2>
            </div>
        </div>
        <div class="bg-white flex flex-row items-center py-[31px] px-[33px] w-1/3">
            <div class="bg-[#3CCAA1]/30 rounded-full w-[54px] h-[54px]">
            </div>
            <div class="ml-[35px] space-y-1">
                <h1 class="font-bold text-[32px]">{{ $tutor }}</h1>
                <h2 class="font-normal text-[22px]">Active Tutors</h2>
            </div>
        </div>
    </div>

@endsection