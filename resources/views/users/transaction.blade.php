@extends('layouts.guest')

@section('content')
    <h1 class="font-bold text-[40px]">Transcation</h1>

    <div class="overflow-x-hidden flex flex-nowrap relative shadow-md sm:rounded-lg mt-[28px]">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Course Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Course Price
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Status
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
                @foreach ($transaction as $transactions)
                    <tr class="bg-white border-b  dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                            {{ $transactions->course->title }}
                        </th>
                        <td class="py-4 px-6">
                            Rp. {{ $transactions->course->price }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $transactions->status }}
                        </td>
                        <td class="py-4 px-6">
                            Rp. {{ $transactions->totalPrice }}
                        </td>
                        <td class="pl-4 pr-2">
                            <a href="{{ $transactions->midtrans_url }}" type="button"
                                class="bg-blue-400 hover:bg-blue-600 rounded-2xl items-center flex justify-center p-2 w-auto font-base text-[10px] text-white text-center cursor-pointer transition-all duration-300 ease-in-out">
                                Pay Here
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
