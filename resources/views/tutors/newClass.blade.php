@extends('layouts.guest')

@section('content')
    <h1 class="font-bold text-[24px]">Course information</h1>
    @if (Auth::user()->roleID == 1)
        <form action="{{ route('admin.renderNewCourse') }}" method="POST"
            class="flex flex-row justify-between mt-4 space-x-10 border-[#7C7C7C]/40 border-[1px] rounded-md py-6 px-4" enctype="multipart/form-data" id="courseForm">
        @else
            <form action="{{ route('tutor.newCourse') }}" method="POST"
                class="flex flex-row justify-between mt-4 space-x-10 border-[#7C7C7C]/40 border-[1px] rounded-md py-6 px-4" enctype="multipart/form-data" id="courseForm">
    @endif
    @csrf
    <div class="flex flex-col w-1/2">
        <div class="flex flex-col py-4 px-6 rounded-md space-y-[4px]">
            <label for="Title" class="font-medium text-xl">Title</label>
            <input type="text" name="title" class="rounded-md border-[#7C7C7C] border-[1px]" placeholder="Course Title" required />
            @if ($errors->has('title'))
                <p class="mt-2 text-sm text-red-600">{{ $errors->first('title') }}</p>
            @endif
        </div>
        <div class="flex flex-col py-4 px-6 space-y-[4px]">
            <label for="Subtitle" class="font-medium text-xl">Description</label>
            <textarea name="subtitle" name="subtitle" cols="30" rows="5" class="border-[#7C7C7C] border-[1px] rounded-md" placeholder="Course Description..."></textarea>
        </div>
        <div class="flex flex-col py-4 px-6 space-y-[4px]">
            <label for="Price" class="font-medium text-xl">Price</label>
            <input type="number" step="0.01" name="price" class="border-[#7C7C7C] border-[1px] rounded-md" placeholder="Rp. "
                required />
            @if ($errors->has('price'))
                <p class="mt-2 text-sm text-red-600">{{ $errors->first('price') }}</p>
            @endif
        </div>
    </div>
    <div class="flex flex-col justify-between w-1/2">
        <div class="flex flex-col w-full">
            <div class="flex flex-col py-4 px-6 space-y-[4px]">
                <label for="Type" class="font-medium text-xl">Type</label>
                @if ($errors->has('type'))
                    <p class="mt-2 text-sm text-red-600">{{ $errors->first('type') }}</p>
                @endif
                <select name="type" class="border-[#7C7C7C] border-[1px] rounded-md" required>
                    @foreach ($data as $datas)
                        <option value="{{ $datas->id }}">{{ $datas->name }}</option>
                    @endforeach
                </select>
                <button class="w-full mt-5 font-medium text-[#7C7C7C] hover:text-black transition-colors duration-300 ease-in-out" type="button" data-modal-toggle="authentication-modal">Add More Type</button>
            </div>
            {{-- <label for="Discount" class="font-medium text-xl ml-[20px] mt-[20px]">Discount</label>
            <select name="discountID" class="bg-white border-0 mt-[17px]">
                <option value="">None</option>
                @foreach ($discount as $discounts)
                <option value="{{ $discounts->id }}">{{ $discounts->token }}</option>
                @endforeach
                </select>
                <button class="w-full mt-5" type="button" data-modal-toggle="discount-modal">Add New Discount</button>
                @if ($errors->has('type'))
                <p class="mt-2 text-sm text-red-600">{{ $errors->first('type') }}</p>
                @endif --}}
            <div class="flex flex-col py-4 px-6 space-y-[4px]">
                <label for="Upload Documentation" class="font-medium text-xl">Upload Documentation</label>
                <input type="file" id="file-cover" name="cover" class="border-[#7C7C7C] border-[1px] rounded-mds" onchange="loadFile(event)"
                    required>
                @if ($errors->has('cover'))
                    <p class="mt-2 text-sm text-red-600">{{ $errors->first('cover') }}</p>
                @endif
                <img id="output">
            </div>
        </div>
        <button class="ml-auto mx-6 bg-[#7C7C7C] rounded-lg font-semibold text-lg items-center w-[174px] flex flex-row justify-center text-center py-3 text-white hover:bg-[#50CFAB] transition-all ease-in-out duration-300" form="courseForm">Publish</button>
    </div>
    </form>

    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="authentication-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900">New Course Type</h3>
                    <form action="{{ route('tutor.storeType') }}" method="POST" id="courseType">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">New Course
                                Type</label>
                            <input type="text" name="type" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#14F6B5] focus:border-[#14F6B5] block w-full p-2.5"
                                placeholder="New Class Type" required>
                            @if ($errors->has('type'))
                                <p class="mt-2 text-sm text-red-600">{{ $errors->first('type') }}</p>
                            @endif
                        </div>
                        <button type="submit"
                            class="w-full mt-5 text-white bg-green-400 hover:bg-[#4ABA9A] focus:ring-4 focus:outline-none focus:ring-[#14F6B5] font-medium rounded-lg text-sm px-5 py-2.5 text-center transition-all duration-300 ease-in-out"
                            form="courseType">Add New Class Type</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Main Modal -->

    <!-- Secondary modal -->
    <div id="discount-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="discount-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900">New Discount</h3>
                    <form action="{{ route('tutor.storeDiscount') }}" method="POST" id="courseDiscount">
                        @csrf
                        <div>
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">Discount
                                Token</label>
                            <input type="text" name="token"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#14F6B5] focus:border-[#14F6B5] block w-full p-2.5"
                                placeholder="New Discount Token" required>
                            @if ($errors->has('type'))
                                <p class="mt-2 text-sm text-red-600">{{ $errors->first('token') }}</p>
                            @endif
                            <label for="discount" class="block mb-2 mt-4 text-sm font-medium text-gray-900 ">Discount
                                Amount</label>
                            <input type="number" name="discount" min="1" max="100"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#14F6B5] focus:border-[#14F6B5] block w-full p-2.5"
                                placeholder="Discount Amount" required>
                            @if ($errors->has('type'))
                                <p class="mt-2 text-sm text-red-600">{{ $errors->first('discount') }}</p>
                            @endif
                        </div>
                        <button type="submit"
                            class="w-full mt-5 text-white bg-green-400 hover:bg-[#4ABA9A] focus:ring-4 focus:outline-none focus:ring-[#14F6B5] font-medium rounded-lg text-sm px-5 py-2.5 text-center transition-all duration-300 ease-in-out"
                            form="courseDiscount">Add New Discount</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Secondary Modal -->

    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
@endsection
