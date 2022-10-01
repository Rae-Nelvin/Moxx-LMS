@extends('layouts.guest')

@section('content')

    <h1 class="font-bold text-[40px]">Payment</h1>
    <div class="flex flex-row flex-nowrap mt-[39px] space-x-10">
        <div class="bg-white flex flex-row items-center py-[31px] px-[33px] w-1/3">
            <div class="bg-[#3CCAA1]/30 rounded-full w-[54px] h-[54px]">
            </div>
            <div class="ml-[35px] space-y-1">
                <h1 class="font-bold text-[32px]">{{ $success }}</h1>
                <h2 class="font-normal text-[22px]">Successfull Transactions</h2>
            </div>
        </div>
        <div class="bg-white flex flex-row items-center py-[31px] px-[33px] w-1/3">
            <div class="bg-[#3CCAA1]/30 rounded-full w-[54px] h-[54px]">
            </div>
            <div class="ml-[35px] space-y-1">
                <h1 class="font-bold text-[32px]">{{ $pending }}</h1>
                <h2 class="font-normal text-[22px]">Pending Transactions</h2>
            </div>
        </div>
    </div>

    <div class="flex flex-row justify-end">
        <h3 class="underline font-normal text-base">Filter</h3>
    </div>
    <div class="overflow-x-hidden flex flex-nowrap relative shadow-md sm:rounded-lg mt-[28px]">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Student ID
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Class
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Email
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Phone
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Total Spend
                    </th>
                    <th scope="col">
                        Payment
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Edit
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b  dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                        20912
                    </th>
                    <td class="py-4 px-6">
                        Wahyu Hidayat
                    </td>
                    <td class="py-4 px-6">
                        10
                    </td>
                    <td class="py-4 px-6">
                        wahyuhidayat@gmail.com
                    </td>
                    <td class="py-4 px-6">
                        08523923242
                    </td>
                    <td class="py-4 px-6">
                        Rp124.250.000
                    </td>
                    <td>
                        <div class="bg-[#3CCAA1] rounded-2xl items-center flex justify-center p-2 w-auto">
                            <span class="font-base text-[10px] text-white text-center">Accept</span>
                        </div>
                    </td>
                    <td class="pl-4 pr-2">
                        <a href="#" type="button" class="bg-blue-400 hover:bg-blue-600 rounded-2xl items-center flex justify-center p-2 w-auto font-base text-[10px] text-white text-center cursor-pointer transition-all duration-300 ease-in-out">
                            Edit
                        </a>
                    </td>
                </tr>
                <tr class="bg-white border-b  dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                        20912
                    </th>
                    <td class="py-4 px-6">
                        Wahyu Hidayat
                    </td>
                    <td class="py-4 px-6">
                        10
                    </td>
                    <td class="py-4 px-6">
                        wahyuhidayat@gmail.com
                    </td>
                    <td class="py-4 px-6">
                        08523923242
                    </td>
                    <td class="py-4 px-6">
                        Rp124.250.000
                    </td>
                    <td>
                        <div class="bg-[#FBBC05] rounded-2xl items-center flex justify-center p-2 w-auto">
                            <span class="font-base text-[10px] text-white text-center">Process</span>
                        </div>
                    </td>
                    <td class="pl-4 pr-2">
                        <a href="#" type="button" class="bg-blue-400 hover:bg-blue-600 rounded-2xl items-center flex justify-center p-2 w-auto font-base text-[10px] text-white text-center cursor-pointer transition-all duration-300 ease-in-out">
                            Edit
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection