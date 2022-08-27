@extends('layouts.guest')

@section('content')

    <div class="flex flex-col">
        <h1 class="font-bold text-[40px]">{{ $course->title }}</h1>
        <h2 class="font-medium text-[24px] mt-5">{{ $course->subtitle }}</h2>
        <div class="flex flex-row space-x-[40px] mt-5">
            <img src="{{ asset('storage/' . $course->imageURL) }}" alt="imageURL" class="max-w-md">
            <div class="flex flex-col">
                @foreach ($lessonGroup as $lessonGroups)
                    <h1>{{ $lessonGroups->groupTitle }}</h1>
                    @foreach($lesson as $lessons)
                    <h2>{{ $lessons->file }}</h2>
                    @endforeach
                @endforeach
                <div class="space-y-[10px] flex flex-row">
                    <!-- Modal toggle -->
                    <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="addSection-modal">
                        Add Section +
                    </button>
                    <!-- Modal toggle -->
                    <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="addContent-modal">
                        Add content +
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- Main modal -->
    <div id="addSection-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="addSection-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Create New Section</h3>
                    <form class="space-y-6" action="{{ route('tutor.newSection') }}" method="POST">
                        @csrf
                        <input type="hidden" name="courseID" value="{{ $course->id }}"/>
                        <div>
                            <label for="Section" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">New Section</label>
                            <input type="text" name="section" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Section Name" required>
                        </div>
                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create New Section</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 

    <!-- Main modal -->
    <div id="addContent-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="addContent-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Create New Content</h3>
                    <form class="space-y-6" action="{{ route('tutor.newContent') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="section" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Content Section</label>
                        <select name="groupID" class="bg-white border-0 mt-[17px]" required>
                            @foreach ($lessonGroup as $lessonGroups)
                                <option value="{{ $lessonGroups->sectionID }}">{{ $lessonGroups->groupTitle }}</option>
                            @endforeach
                        </select>
                        <div>
                            <label for="File" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">New Content</label>
                            <input type="file" id="file-cover" name="content" class="bg-white border-0 mt-[19px]" onchange="loadFile(event)">
                        </div>
                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create New Content</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 

@endsection