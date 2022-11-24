@extends('layouts.guest')

@section('content')
    <div class="p-8">
        <div class="flex flex-row justify-between flex-nowrap w-full space-x-10">
            <a href="#" class="w-1/3">
                <div class="border-[1px] border-[#7C7C7C]/40 py-5 px-4 rounded-md flex flex-col justify-between h-36 hover:bg-[#3CCAA1] hover:text-white transition-colors duration-300 ease-in-out">
                    <h1 class="font-semibold text-xl">Active Users</h1>
                    <h2 class="font-bold text-3xl">{{ $user }} Users</h2>
                </div>
            </a>
            <a href="#" class="w-1/3">
                <div class="border-[1px] border-[#7C7C7C]/40 py-5 px-4 rounded-md flex flex-col justify-between h-36 hover:bg-[#3CCAA1] hover:text-white transition-colors duration-300 ease-in-out">
                    <h1 class="font-semibold text-xl">Active Tutors</h1>
                    <h2 class="font-bold text-3xl">{{ $tutor }} Tutors</h2>
                </div>
            </a>
        </div>
        <div class="overflow-x-hidden flex flex-col flex-nowrap relative border-[1px] border-[#7C7C7C]/40 rounded-md py-5 px-4 mt-8">
            <h1 class="font-bold text-base">Users</h1>
            @if (!$users->isEmpty())
                <table class="w-full mt-4">
                    <thead class=" text-left border-b-[#7C7C7C]/40 border-[1px] border-t-0 border-l-0 border-r-0">
                        <tr>
                            <th scope="col" class="py-2 px-4 font-medium text-sm text-[#7C7C7C]">
                                Name
                            </th>
                            <th scope="col" class="py-2 px-4 font-medium text-sm text-[#7C7C7C]">
                                Email
                            </th>
                            <th scope="col" class="py-2 px-4 font-medium text-sm text-[#7C7C7C]">
                                Address
                            </th>
                            <th scope="col" class="py-2 px-4 font-medium text-sm text-[#7C7C7C]">
                                Phone Number
                            </th>
                            <th scope="col" class="py-2 px-4 font-medium text-sm text-[#7C7C7C]">
                                Role
                            </th>
                            {{-- <th scope="col" class="py-2 px-4 font-medium text-sm text-[#7C7C7C]">
                                Payment
                            </th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="border-b-[#7C7C7C]/40 border-[1px] border-t-0 border-l-0 border-r-0 my-4 text-left">
                                <td scope="row" class="py-2 px-4 font-medium text-sm">
                                    {{ $user->name }}
                                </td>
                                <td class="py-2 px-4 font-medium text-sm">
                                    {{ $user->email }}
                                </td>
                                <td class="py-2 px-4 font-medium text-sm">
                                    {{ $user->alamat }}
                                </td>
                                <td class="py-2 px-4 font-medium text-sm">
                                    {{ $user->phone }}
                                </td>
                                <td class="py-2 px-4 font-medium text-sm">
                                    {{ $user->role->name }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h1 class="font-semibold text-xl">Tidak ada Transactions</h1>
            @endif
        </div>
    </div>
@endsection
