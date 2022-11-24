@extends('layouts.guest')

@section('content')
    <div class="overflow-x-hidden flex flex-col flex-nowrap relative border-[1px] border-[#7C7C7C]/40 rounded-md py-5 px-4 mt-8">
        <h1 class="font-bold text-base">Transactions</h1>
        @if (!$transaction->isEmpty())
            <table class="w-full mt-4">
                <thead class=" text-left border-b-[#7C7C7C]/40 border-[1px] border-t-0 border-l-0 border-r-0">
                    <tr>
                        <th scope="col" class="py-2 px-4 font-medium text-sm text-[#7C7C7C]">
                            Course Name
                        </th>
                        <th scope="col" class="py-2 px-4 font-medium text-sm text-[#7C7C7C]">
                            Course Price
                        </th>
                        <th scope="col" class="py-2 px-4 font-medium text-sm text-[#7C7C7C]">
                            Status
                        </th>
                        <th scope="col" class="py-2 px-4 font-medium text-sm text-[#7C7C7C]">
                            Total Price
                        </th>
                        <th scope="col" class="py-2 px-4 font-medium text-sm text-[#7C7C7C]">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaction as $transactions)
                        <tr class="border-b-[#7C7C7C]/40 border-[1px] border-t-0 border-l-0 border-r-0 my-4 text-left">
                            <td scope="row" class="py-2 px-4 font-medium text-sm">
                                {{ $transactions->course->title }}
                            </td>
                            <td class="py-2 px-4 font-medium text-sm">
                                {{ $transactions->course->price }}
                            </td>
                            <td class="py-2 px-4 font-medium text-sm">
                                {{ $transactions->status }}
                            </td>
                            <td class="py-2 px-4 font-medium text-sm">
                                {{ $transactions->totalPrice }}
                            </td>
                            <td class="py-2 px-4 font-medium text-sm">
                                @if ($transactions->status == 'waiting')
                                <a href="{{ $transactions->midtrans_url }}" type="button"
                                    class="bg-blue-400 hover:bg-blue-600 rounded-2xl items-center flex justify-center p-2 w-auto font-base text-[10px] text-white text-center cursor-pointer transition-all duration-300 ease-in-out">
                                    Pay Here
                                </a>
                            @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h1 class="font-semibold text-xl">Tidak ada Transactions</h1>
        @endif
    </div>
@endsection
