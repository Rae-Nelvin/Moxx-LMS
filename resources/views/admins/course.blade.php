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
                            <a href="{{ route('admin.courseDetail', $pendings->id) }}" class="w-full">
                                <div class="bg-blue-400 rounded-2xl items-center flex justify-center p-2 w-full cursor-pointer hover:bg-blue-600 transition-all duration-300 ease-in-out">
                                    <span class="font-base text-base text-white text-center">Detail</span>
                                </div>
                            </a>
                            <button data-modal-toggle="popup-accept-{{ $pendings->id }}" class="bg-[#3CCAA1] rounded-2xl items-center flex justify-center p-2 w-full cursor-pointer hover:bg-[#2f9e7f] transition-all duration-300 ease-in-out">
                                <span class="font-base text-base text-white text-center">Accept</span>
                            </button>
                            <button data-modal-toggle="popup-reject-{{ $pendings->id }}" class="bg-[#EB5656] rounded-2xl items-center flex justify-center p-2 w-full cursor-pointer hover:bg-[#af4040] transition-all duration-300 ease-in-out">
                                <span class="font-base text-base text-white text-center">Reject</span>
                            </button>
                        </td>

                        <!-- Start of Accept Modal -->
                        <div id="popup-accept-{{ $pendings->id }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-[617px] h-full md:h-auto">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-accept-{{ $pendings->id }}">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="py-6 px-8 text-center items-center flex flex-col">
                                        <img src="{{ asset('DashboardIcon/img/trash-logo.png') }}" alt="trash-logo" class="w-20 h-20">
                                        <h3 class="mb-2 text-2xl font-medium text-[#23262F] mt-4">Apakah anda yakin ingin menerima course ini?</h3>
                                        <p class="text-base font-medium text-[#87898E]">Tindakan ini tidak dapat dikembalikan</p>
                                        <div class="flex flex-row mt-8 space-x-[16px]">
                                            <a data-modal-toggle="popup-accept-{{ $pendings->id }}" href="{{ route('admin.acceptCourse', $pendings->id) }}" type="button" class="text-white bg-green-400 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-normal rounded-full text-base inline-flex items-center px-[92px] py-5 text-center cursor-pointer transition-all duration-500 ease-in-out">
                                                Accept
                                            </a>
                                            <button data-modal-toggle="popup-accept-{{ $pendings->id }}" type="button" class="text-white bg-gray-400 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-full text-base font-normal px-[92px] py-5 focus:z-10 transition-all duration-500 ease-in-out" data-modal-toggle="popup-accept-{{ $pendings->id }}">Batalkan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Accept Modal -->

                        <!-- Start of Reject Modal -->
                        <div id="popup-reject-{{ $pendings->id }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-[617px] h-full md:h-auto">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-reject-{{ $pendings->id }}">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="py-6 px-8 text-center items-center flex flex-col">
                                        <img src="{{ asset('DashboardIcon/img/trash-logo.png') }}" alt="trash-logo" class="w-20 h-20">
                                        <h3 class="mb-2 text-2xl font-medium text-[#23262F] mt-4">Apakah anda yakin ingin menolak course ini?</h3>
                                        <p class="text-base font-medium text-[#87898E]">Tindakan ini tidak dapat dikembalikan</p>
                                        <div class="flex flex-row mt-8 space-x-[16px]">
                                            <a data-modal-toggle="popup-reject-{{ $pendings->id }}" href="{{ route('admin.rejectCourse', $pendings->id) }}" type="button" class="text-white bg-red-500 hover:bg-[#ac2828] focus:ring-4 focus:outline-none focus:ring-red-300 font-normal rounded-full text-base inline-flex items-center px-[92px] py-5 text-center cursor-pointer transition-all duration-500 ease-in-out">
                                                Reject
                                            </a>
                                            <button data-modal-toggle="popup-reject-{{ $pendings->id }}" type="button" class="text-white bg-gray-400 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-full text-base font-normal px-[92px] py-5 focus:z-10 transition-all duration-500 ease-in-out" data-modal-toggle="popup-reject-{{ $pendings->id }}">Batalkan</button>
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
    </div>

@endsection