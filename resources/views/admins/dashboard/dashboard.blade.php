@extends('layouts.guest')

@section('content')
    <h1 class="font-bold text-[40px]">Dashboard</h1>
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
                <h1 class="font-bold text-[32px]">{{ $transaction }}</h1>
                <h2 class="font-normal text-[22px]">Successfull Transactions</h2>
            </div>
        </div>
        <div class="bg-white flex flex-row items-center py-[31px] px-[33px] w-1/3">
            <div class="bg-[#3CCAA1]/30 rounded-full w-[54px] h-[54px]">
            </div>
            <div class="ml-[35px] space-y-1">
                <h1 class="font-bold text-[32px]">{{ $course }}</h1>
                <h2 class="font-normal text-[22px]">Active Courses</h2>
            </div>
        </div>
    </div>
    <h1 class="mt-[34px] font-bold text-3xl">Statistics</h1>
    <div class="bg-white mt-[34px] h-[348px] w-full">
    </div>
@endsection
