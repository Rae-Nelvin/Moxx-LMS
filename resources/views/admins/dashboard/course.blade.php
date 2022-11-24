@extends('layouts.guest')

@section('content')

    <div class="p-8">
        <div class="flex flex-row justify-between flex-nowrap w-full space-x-10">
            <a href="#" class="w-1/3">
                <div class="border-[1px] border-[#7C7C7C]/40 py-5 px-4 rounded-md flex flex-col justify-between h-36 hover:bg-[#3CCAA1] hover:text-white transition-colors duration-300 ease-in-out">
                    <h1 class="font-semibold text-xl">Active Courses</h1>
                    <h2 class="font-bold text-3xl">{{ $active }} Courses</h2>
                </div>
            </a>
            <a href="#" class="w-1/3">
                <div class="border-[1px] border-[#7C7C7C]/40 py-5 px-4 rounded-md flex flex-col justify-between h-36 hover:bg-[#3CCAA1] hover:text-white transition-colors duration-300 ease-in-out">
                    <h1 class="font-semibold text-xl">Pending Courses</h1>
                    <h2 class="font-bold text-3xl">{{ $pending }} Courses</h2>
                </div>
            </a>
            <a href="#" class="w-1/3">
                <div class="border-[1px] border-[#7C7C7C]/40 py-5 px-4 rounded-md flex flex-col justify-between h-36 hover:bg-[#3CCAA1] hover:text-white transition-colors duration-300 ease-in-out">
                    <h1 class="font-semibold text-xl">Denied Courses</h1>
                    <h2 class="font-bold text-3xl">{{ $denied }} Courses</h2>
                </div>
            </a>
        </div>
        <div class="overflow-x-hidden flex flex-col flex-nowrap relative border-[1px] border-[#7C7C7C]/40 rounded-md py-5 px-4 mt-8">
            <h1 class="font-bold text-base">Pending Courses</h1>
            @if (!$pendingData->isEmpty())
                <table class="w-full mt-4">
                    <thead class=" text-left border-b-[#7C7C7C]/40 border-[1px] border-t-0 border-l-0 border-r-0">
                        <tr>
                            <th scope="col" class="py-2 px-4 font-medium text-sm text-[#7C7C7C]">
                                Creator Name
                            </th>
                            <th scope="col" class="py-2 px-4 font-medium text-sm text-[#7C7C7C]">
                                Course Name
                            </th>
                            <th scope="col" class="py-2 px-4 font-medium text-sm text-[#7C7C7C]">
                                Course Type
                            </th>
                            <th scope="col" class="py-2 px-4 font-medium text-sm text-[#7C7C7C]">
                                Total Lesson
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
                        @foreach ($pendingData as $pendings)
                            <tr class="border-b-[#7C7C7C]/40 border-[1px] border-t-0 border-l-0 border-r-0 my-4 text-left">
                                <td scope="row" class="py-2 px-4 font-medium text-sm">
                                    {{ $pendings->user->name }}
                                </td>
                                <td class="py-2 px-4 font-medium text-sm">
                                    {{ $pendings->title }}
                                </td>
                                <td class="py-2 px-4 font-medium text-sm">
                                    {{ $pendings->courseType->name }}
                                </td>
                                <td class="py-2 px-4 font-medium text-sm">
                                    {{ $pendings->lessonGroup->count() }}
                                </td>
                                <td class="py-2 px-4 font-medium text-sm">
                                    Rp {{ $pendings->price }}
                                </td>
                                <td class="flex flex-row space-x-5 px-4 py-2">
                                    <a href="{{ route('admin.courseDetail', $pendings->id) }}" class="w-full">
                                        <div
                                            class="bg-blue-400 rounded-2xl items-center flex justify-center p-2 w-full cursor-pointer hover:bg-blue-600 transition-all duration-300 ease-in-out">
                                            <span class="font-base font-medium text-sm text-white text-center">Detail</span>
                                        </div>
                                    </a>
                                    <button data-modal-toggle="popup-accept-{{ $pendings->id }}"
                                        class="bg-[#3CCAA1] rounded-2xl items-center flex justify-center p-2 w-full cursor-pointer hover:bg-[#2f9e7f] transition-all duration-300 ease-in-out">
                                        <span class="font-base text-white text-center font-medium text-sm">Accept</span>
                                    </button>
                                    <button data-modal-toggle="popup-reject-{{ $pendings->id }}"
                                        class="bg-[#EB5656] rounded-2xl items-center flex justify-center p-2 w-full cursor-pointer hover:bg-[#af4040] transition-all duration-300 ease-in-out">
                                        <span class="font-base text-white text-center font-medium text-sm">Reject</span>
                                    </button>
                                </td>

                                <!-- Start of Accept Modal -->
                                <div id="popup-accept-{{ $pendings->id }}" tabindex="-1"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                                    <div class="relative p-4 w-[617px] h-full md:h-auto">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <button type="button"
                                                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                data-modal-toggle="popup-accept-{{ $pendings->id }}">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="py-6 px-8 text-center items-center flex flex-col">
                                                <h3 class="mb-2 text-2xl font-medium text-[#23262F] mt-4">Apakah anda yakin
                                                    ingin menerima course ini?</h3>
                                                <p class="text-base font-medium text-[#87898E]">Tindakan ini tidak dapat
                                                    dikembalikan</p>
                                                <div class="flex flex-row mt-8 space-x-[16px]">
                                                    <a data-modal-toggle="popup-accept-{{ $pendings->id }}"
                                                        href="{{ route('admin.acceptCourse', $pendings->id) }}" type="button"
                                                        class="text-white bg-green-400 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-normal rounded-full text-base inline-flex items-center px-[92px] py-5 text-center cursor-pointer transition-all duration-500 ease-in-out">
                                                        Accept
                                                    </a>
                                                    <button data-modal-toggle="popup-accept-{{ $pendings->id }}" type="button"
                                                        class="text-white bg-gray-400 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-full text-base font-normal px-[92px] py-5 focus:z-10 transition-all duration-500 ease-in-out"
                                                        data-modal-toggle="popup-accept-{{ $pendings->id }}">Batalkan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Accept Modal -->

                                <!-- Start of Reject Modal -->
                                <div id="popup-reject-{{ $pendings->id }}" tabindex="-1"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                                    <div class="relative p-4 w-[617px] h-full md:h-auto">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <button type="button"
                                                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                data-modal-toggle="popup-reject-{{ $pendings->id }}">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="py-6 px-8 text-center items-center flex flex-col">
                                                <h3 class="mb-2 text-2xl font-medium text-[#23262F] mt-4">Apakah anda yakin
                                                    ingin menolak course ini?</h3>
                                                <p class="text-base font-medium text-[#87898E]">Tindakan ini tidak dapat
                                                    dikembalikan</p>
                                                <div class="flex flex-row mt-8 space-x-[16px]">
                                                    <a data-modal-toggle="popup-reject-{{ $pendings->id }}"
                                                        href="{{ route('admin.rejectCourse', $pendings->id) }}"
                                                        type="button"
                                                        class="text-white bg-red-500 hover:bg-[#ac2828] focus:ring-4 focus:outline-none focus:ring-red-300 font-normal rounded-full text-base inline-flex items-center px-[92px] py-5 text-center cursor-pointer transition-all duration-500 ease-in-out">
                                                        Reject
                                                    </a>
                                                    <button data-modal-toggle="popup-reject-{{ $pendings->id }}"
                                                        type="button"
                                                        class="text-white bg-gray-400 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-full text-base font-normal px-[92px] py-5 focus:z-10 transition-all duration-500 ease-in-out"
                                                        data-modal-toggle="popup-reject-{{ $pendings->id }}">Batalkan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Reject Modal -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h1 class="font-semibold text-xl">Tidak ada Pending Courses</h1>
            @endif
        </div>
    </div>

    

@endsection
