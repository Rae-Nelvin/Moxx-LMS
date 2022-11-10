@extends('layouts.guest')

@section('content')
    
    <div class="p-8">
        <div class="flex flex-row justify-between flex-nowrap w-full space-x-10">
            <a href="{{ route('admin.renderUserList') }}" class="w-1/3">
                <div class="border-[1px] border-[#7C7C7C]/40 py-5 px-4 rounded-md flex flex-col justify-between h-36 hover:bg-[#3CCAA1] hover:text-white transition-colors duration-300 ease-in-out">
                    <h1 class="font-semibold text-xl">Active Users</h1>
                    <h2 class="font-bold text-3xl">{{ $user }} Users</h2>
                </div>
            </a>
            <a href="{{ route('admin.renderCourse') }}" class="w-1/3">
                <div class="border-[1px] border-[#7C7C7C]/40 py-5 px-4 rounded-md flex flex-col justify-between h-36 hover:bg-[#3CCAA1] hover:text-white transition-colors duration-300 ease-in-out">
                    <h1 class="font-semibold text-xl">Active Courses</h1>
                    <h2 class="font-bold text-3xl">{{ $course }} Courses</h2>
                </div>
            </a>
            <a href="{{ route('admin.renderPayment') }}" class="w-1/3">
                <div class="border-[1px] border-[#7C7C7C]/40 py-5 px-4 rounded-md flex flex-col justify-between h-36 hover:bg-[#3CCAA1] hover:text-white transition-colors duration-300 ease-in-out">
                    <h1 class="font-semibold text-xl">Accepted Transactions</h1>
                    <h2 class="font-bold text-3xl">{{ $transaction }} Transactions</h2>
                </div>
            </a>
        </div>
    </div>

@endsection
