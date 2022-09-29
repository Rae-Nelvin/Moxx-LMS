@extends('layouts.guest')

@section('content')

    <div class="flex flex-row justify-between items-end">
        <h1 class="font-bold text-[40px]">My Class</h1>
        <h3 class="underline font-normal text-base">Search</h3>
    </div>

    <div class="overflow-x-hidden flex flex-nowrap relative shadow-md sm:rounded-lg mt-[28px]">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        No
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Class Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Student
                    </th>
                    <th scope="col" class="py-3 px-6">
                        On Progress
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Completed
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Total Payment
                    </th>
                    <th scope="col">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b  dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                        1
                    </th>
                    <td class="py-4 px-6">
                        UX Fundamental
                    </td>
                    <td class="py-4 px-6">
                        1,280
                    </td>
                    <td class="py-4 px-6">
                        720
                    </td>
                    <td class="py-4 px-6">
                        560
                    </td>
                    <td class="py-4 px-6">
                        Rp124.250.000
                    </td>
                    <td class="pr-4">
                        <div class="bg-[#3CCAA1] rounded-2xl items-center flex justify-center p-2 w-auto">
                            <span class="font-base text-[10px] text-white text-center">Active</span>
                        </div>
                    </td>
                </tr>
                <tr class="bg-white border-b  dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                        2
                    </th>
                    <td class="py-4 px-6">
                        Basic Photoshop
                    </td>
                    <td class="py-4 px-6">
                        802
                    </td>
                    <td class="py-4 px-6">
                        502
                    </td>
                    <td class="py-4 px-6">
                        300
                    </td>
                    <td class="py-4 px-6">
                        Rp24.250.000
                    </td>
                    <td class="pr-4">
                        <div class="bg-[#EB5656] rounded-2xl items-center flex justify-center p-2 w-auto">
                            <span class="font-base text-[10px] text-white text-center">Deactivated</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection