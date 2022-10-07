@extends('layouts.admin-landingPage')

@section('content')

    <div class="flex flex-row justify-between w-full">
        <h1 class="font-bold text-[40px]">Plans</h1>
        <button data-modal-toggle="newPlan-modal" class="bg-[#50CFAB] items-center flex justify-center py-3 px-5 rounded-lg hover:bg-[#4ABA9A] transition-all duration-300 ease-in-out">
            <h2 class="text-white text-center font-semibold text-lg">Create new+</h2>
        </button>
    </div>
    <h2 class="font-bold text-3xl mt-10 mb-4">Active Plans</h2>
    <div class="why-card md:flex md:flex-row md:items-center w-full">
        @foreach ($active as $actives)
            <div class="lg:px-5">
                <div
                    class="bg-white p-4 max-w-sm rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-row justify-between items-center">
                        <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">{{ $actives->title }}</h5>
                        <div class="bg-[#3CCAA1] rounded-2xl items-center flex justify-center py-2 px-4">
                            <span class="font-base text-base text-white text-center">Active</span>
                        </div>
                    </div>
                    <div class="flex items-baseline text-gray-900 dark:text-black">
                        <span class="text-3xl font-semibold">Rp. </span>
                        <span class="text-3xl font-bold tracking-tight">{{ $actives->price }}</span>
                        <span class="ml-1 text-xl font-normal text-gray-500 dark:text-gray-400">/month</span>
                    </div>
                    <ul role="list" class="my-7 space-y-5">
                        @foreach ($detail as $details)
                            @if ($details->planID == $actives->id)
                                <li class="flex space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 icon-ctg" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">{{ $details->feature->name }}</span>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                    <div class="flex flex-row flex-wrap space-x-4">
                        @if($actives->status == 0)
                            <a href="{{ route('admin.actionPlan',$actives->id) }}" class="bg-[#3CCAA1] rounded-2xl items-center flex justify-center py-2 px-4 cursor-pointer hover:bg-[#2f9e7f] transition-all duration-300 ease-in-out">
                                <span class="font-base text-base text-white text-center">Activate</span>
                            </a>
                        @else
                            <a href="{{ route('admin.actionPlan',$actives->id) }}" class="bg-gray-400 rounded-2xl items-center flex justify-center py-2 px-4 cursor-pointer hover:bg-gray-700 transition-all duration-300 ease-in-out">
                                <span class="font-base text-base text-white text-center">Deactivate</span>
                            </a>
                        @endif
                        <button data-modal-toggle="editPlan-modal-{{ $actives->id }}" class="bg-blue-400 rounded-2xl items-center flex justify-center py-2 px-4 cursor-pointer hover:bg-blue-700 transition-all duration-300 ease-in-out">
                            <span class="font-base text-base text-white text-center">Edit</span>
                        </button>
                        <button data-modal-toggle="popup-delete-{{ $actives->id }}" class="bg-red-400 rounded-2xl items-center flex justify-center py-2 px-4 cursor-pointer hover:bg-red-700 transition-all duration-300 ease-in-out">
                            <span class="font-base text-base text-white text-center">Delete</span>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <h2 class="font-bold text-3xl mt-10 mb-4">All Plans</h2>
    <div class="why-card md:flex md:flex-row md:items-center w-full">
        @foreach ($plan as $plans)
            <div class="lg:px-5">
                <div
                    class="bg-white p-4 max-w-sm rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-row justify-between items-center">
                    <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">{{ $plans->title }}</h5>
                    @if ($plans->status == 1)
                        <div class="bg-[#3CCAA1] rounded-2xl items-center flex justify-center py-2 px-4">
                            <span class="font-base text-base text-white text-center">Active</span>
                        </div>
                    @else
                        <div class="bg-gray-400 rounded-2xl items-center flex justify-center py-2 px-4">
                            <span class="font-base text-base text-white text-center">Deactive</span>
                        </div>
                    @endif
                    </div>
                    <div class="flex items-baseline text-gray-900 dark:text-black">
                        <span class="text-3xl font-semibold">Rp</span>
                        <span class="text-3xl font-bold tracking-tight">{{ $plans->price }}</span>
                        <span class="ml-1 text-xl font-normal text-gray-500 dark:text-gray-400">/month</span>
                    </div>
                    <ul role="list" class="my-7 space-y-5">
                        @foreach ($detail as $details)
                            @if ($details->planID == $plans->id)
                                <li class="flex space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 icon-ctg" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">{{ $details->feature->name }}</span>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                    <div class="flex flex-row flex-wrap space-x-4">
                        @if($plans->status == 0)
                            <a href="{{ route('admin.actionPlan',$plans->id) }}" class="bg-[#3CCAA1] rounded-2xl items-center flex justify-center py-2 px-4 cursor-pointer hover:bg-[#2f9e7f] transition-all duration-300 ease-in-out">
                                <span class="font-base text-base text-white text-center">Activate</span>
                            </a>
                        @else
                            <a href="{{ route('admin.actionPlan',$plans->id) }}" class="bg-gray-400 rounded-2xl items-center flex justify-center py-2 px-4 cursor-pointer hover:bg-gray-700 transition-all duration-300 ease-in-out">
                                <span class="font-base text-base text-white text-center">Deactivate</span>
                            </a>
                        @endif
                        <button data-modal-toggle="editPlan-modal-{{ $plans->id }}" class="bg-blue-400 rounded-2xl items-center flex justify-center py-2 px-4 cursor-pointer hover:bg-blue-700 transition-all duration-300 ease-in-out">
                            <span class="font-base text-base text-white text-center">Edit</span>
                        </button>
                        <button data-modal-toggle="popup-delete-{{ $plans->id }}" class="bg-red-400 rounded-2xl items-center flex justify-center py-2 px-4 cursor-pointer hover:bg-red-700 transition-all duration-300 ease-in-out">
                            <span class="font-base text-base text-white text-center">Delete</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Tersiery modal -->
                <div id="editPlan-modal-{{ $plans->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:text-white" data-modal-toggle="editPlan-modal-{{ $plans->id }}">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="py-6 px-6 lg:px-8">
                                <h3 class="mb-4 text-xl font-medium text-gray-900">Edit Plan</h3>
                                <form class="space-y-6" action="{{ route('admin.editPlan') }}" method="POST" enctype="multipart/form-data" class="w-full">
                                    @csrf
                                    <input type="hidden" name="planID" value="{{ $plans->id }}">
                                    <div>
                                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Plan Title</label>
                                        <input type="text" id="file-cover" name="title" class="bg-white border-black w-full mt-[19px]" placeholder="{{ $plans->title }}">
                                    </div>
                                    <div>
                                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Plan Price</label>
                                        <div class="flex flex-row items-end">
                                            Rp. <input type="number" id="file-cover" name="price" class="bg-white border-black w-full mt-[19px] mx-4" placeholder="{{ $plans->price }}"> /month
                                        </div>
                                    </div>
                                    <div>
                                        <label for="File" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Features</label>
                                        <div class="flex flex-row items-center flex-wrap">
                                            @foreach ($feature as $features)
                                                <input type="checkbox" name="features[]" value="{{ $features->id }}" class="mx-2">{{ $features->name }}
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="flex flex-row space-x-5">
                                        <button type="submit" class="w-full bg-[#3CCAA1]/30 hover:bg-[#3CCAA1] py-3 px-3 border-1 border border-[#3CCAA1] text-center font-semibold text-sm rounded-xl duration-500 transition-all ease-in-out">Update Plan</button>
                                        <button type="button" data-modal-toggle="editPlan-modal-{{ $plans->id }}" class="w-full text-[#23262F] bg-[#F1F1F1] hover:bg-[#bebebe]/20 focus:ring-4 focus:outline-none border-1 border border-[#bebebe] focus:ring-gray-200 rounded-xl text-base font-normal py-3 px-3 focus:z-10 transition-all duration-500 ease-in-out">Batalkan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 
            <!-- End of Tersiery modal -->
            <!-- Delete Modal -->
            <div id="popup-delete-{{ $plans->id }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                <div class="relative p-4 w-[617px] h-full md:h-auto">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-delete-{{ $plans->id }}">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="py-6 px-8 text-center items-center flex flex-col">
                            <h3 class="mb-2 text-2xl font-medium text-[#23262F] mt-4">Apakah anda yakin ingin menghapus plan ini?</h3>
                            <p class="text-base font-medium text-[#87898E]">Tindakan ini tidak dapat dikembalikan</p>
                            <div class="flex flex-row mt-8 space-x-[16px]">
                                <a data-modal-toggle="popup-delete-{{ $plans->id }}" href="{{ route('admin.deletePlan',$plans->id) }}" type="button" class="text-white bg-red-500 hover:bg-[#ac2828] focus:ring-4 focus:outline-none focus:ring-red-300 font-normal rounded-full text-base inline-flex items-center px-[92px] py-5 text-center cursor-pointer transition-all duration-500 ease-in-out">
                                    Delete
                                </a>
                                <button data-modal-toggle="popup-delete-{{ $plans->id }}" type="button" class="text-white bg-gray-400 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-full text-base font-normal px-[92px] py-5 focus:z-10 transition-all duration-500 ease-in-out" data-modal-toggle="popup-delete-{{ $plans->id }}">Batalkan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Delete Modal -->
        @endforeach
    </div>

    <!-- Main modal -->
    <div id="newPlan-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center" aria-hidden="true">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="newPlan-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900">Create New Plan</h3>
                    <form class="space-y-6" action="{{ route('admin.newPlan') }}" method="POST" enctype="multipart/form-data" class="w-full">
                        @csrf
                        <div>
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Plan Title</label>
                            <input type="text" id="file-cover" name="title" class="bg-white border-black w-full mt-[19px]" required>
                        </div>
                        <div>
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Plan Price</label>
                            <div class="flex flex-row items-end">
                                Rp. <input type="number" id="file-cover" name="price" class="bg-white border-black w-full mt-[19px] mx-4" required> /month
                            </div>
                        </div>
                        <div>
                            <label for="File" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Features</label>
                            <div class="flex flex-row items-center flex-wrap">
                                @foreach ($feature as $features)
                                    <input type="checkbox" name="features[]" value="{{ $features->id }}" class="mx-2">{{ $features->name }}
                                @endforeach
                                <div data-modal-toggle="addFeature-modal" class="ml-2 rounded-lg px-2 cursor-pointer bg-green-400 hover:bg-green-700 transition-all duration-300 ease-in-out text-white font-semibold text-lg">+</div>
                            </div>
                        </div>
                        <div class="flex flex-row space-x-5">
                            <button type="submit" data-modal-toggle="newPlan-modal" class="w-full bg-[#3CCAA1]/30 hover:bg-[#3CCAA1] py-3 px-3 border-1 border border-[#3CCAA1] text-center font-semibold text-sm rounded-xl duration-500 transition-all ease-in-out">Create New Plan</button>
                            <button type="reset" data-modal-toggle="newPlan-modal" class="w-full text-[#23262F] bg-[#F1F1F1] hover:bg-[#bebebe]/20 focus:ring-4 focus:outline-none border-1 border border-[#bebebe] focus:ring-gray-200 rounded-xl text-base font-normal py-3 px-3 focus:z-10 transition-all duration-500 ease-in-out">Batalkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Main modal -->

    <!-- Secondary modal -->
    <div id="addFeature-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:text-white" data-modal-toggle="addFeature-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900">Create New Feature</h3>
                    <form class="space-y-6" action="{{ route('admin.newFeature') }}" method="POST" class="w-full">
                        @csrf
                        <div>
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Feature Name</label>
                            <input type="text" id="file-cover" name="name" class="bg-white border-black w-full mt-[19px]">
                        </div>
                        <div class="flex flex-row space-x-5">
                            <button type="submit" class="w-full bg-[#3CCAA1]/30 hover:bg-[#3CCAA1] py-3 px-3 border-1 border border-[#3CCAA1] text-center font-semibold text-sm rounded-xl duration-500 transition-all ease-in-out">Create New Feature</button>
                            <button type="reset" data-modal-toggle="addFeature-modal" class="w-full text-[#23262F] bg-[#F1F1F1] hover:bg-[#bebebe]/20 focus:ring-4 focus:outline-none border-1 border border-[#bebebe] focus:ring-gray-200 rounded-xl text-base font-normal py-3 px-3 focus:z-10 transition-all duration-500 ease-in-out">Batalkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
    <!-- End of Secondary Modal -->

@endsection