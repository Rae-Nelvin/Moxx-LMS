@extends('layouts.guest')

@section('content')

    <div class="flex flex-col flex-nowrap pr-[126px]">
        <div class="flex flex-row justify-between items-center">
            <div class="w-full">
                <h1 class="font-bold text-[40px]">{{ $course->title }}</h1>
                <h2 class="mt-2 font-normal text-[19px]">Introduction</h2>
            </div>
            <p class="font-normal text-lg text-right">{{ $course->description }}</p>
        </div>
        <div class="flex flex-row mt-11 justify-between space-x-10">
            <img src="{{ asset('images/slide-1.jpg') }}" alt="cover-img" class="w-3/4 mt-4">
            <div class="w-full justify-between flex flex-col">
                <div>
                    <div class="flex flex-row justify-between items-center">
                        <h1 class="font-bold text-base">{{ $course->title }}</h1>
                        {{-- <p class="font-base text-[10px]">1 hours learning</p> --}}
                    </div>
                    @foreach ($lessonGroup as $lessonGroups)           
                        <div id="accordion-collapse" data-accordion="collapse" class="max-w-[330px] w-screen border border-1 border-[#3CCAA1] rounded-t-lg mt-4" data-active-classes="bg-[#3CCAA1]/30 text-black">
                            <h2 id="accordion-collapse-heading-{{ $lessonGroups->id }}" class="w-full bg-[#3CCAA1]/30">
                            <button type="button" class="flex items-center justify-between w-full py-2 px-5 text-left rounded-t-lg text-black" data-accordion-target="#accordion-collapse-body-{{ $lessonGroups->id }}" aria-expanded="true" aria-controls="accordion-collapse-body-{{ $lessonGroups->id }}">
                                <span class="font-bold text-xs">{{ $lessonGroups->groupTitle }}</span>
                                <div class="flex flex-row space-x-2 items-center">
                                    <span class="font-normal text-[10px]">(0/10)</span>
                                    <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </div>
                            </button>
                            </h2>
                            <div id="accordion-collapse-body-{{ $lessonGroups->id }}" aria-labelledby="accordion-collapse-heading-1" class="bg-[#3CCAA1]/10 w-full">
                                <div class="py-3 px-5 flex flex-col space-y-4 w-full">
                                    @foreach ($lesson as $lessons)
                                        @if ($lessons->lessonGroupID == $lessonGroups->id)
                                            <a href="/tutor/course/detail/{{ $courseID }}/{{ $lessonGroups->id }}/{{ $lessons->id }}">
                                                <div class="flex flex-row space-x-2 items-center w-full">
                                                    <img src="{{ asset('images/guest-icon/play-button.svg') }}" alt="play-button" class="w-3 h-3">
                                                    <p class="font-normal text-[10px]">{{ $lessons->title }}</p>
                                                </div>
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                    <div class="flex flex-row flex-nowrap justify-between mt-10 space-x-5">
                        <button class="bg-[#3CCAA1]/30 hover:bg-[#3CCAA1] focus:bg-[#3CCAA1] py-3 px-5 border-1 border border-[#3CCAA1] text-center font-semibold text-sm rounded-xl duration-500 transition-all ease-in-out" data-modal-toggle="addSection-modal">Add Section+</button>
                        <button class="bg-[#3CCAA1]/30 hover:bg-[#3CCAA1] focus:bg-[#3CCAA1] py-3 px-5 border-1 border border-[#3CCAA1] text-center font-semibold text-sm rounded-xl duration-500 transition-all ease-in-out" data-modal-toggle="addContent-modal">Add Content+</button>
                    </div>
                </div>  
            </div>
        </div>
    </div>

    <!-- Main modal -->
    <div id="addSection-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:text-white" data-modal-toggle="addSection-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900">Create New Section</h3>
                    <form class="space-y-6" action="{{ route('tutor.newSection') }}" method="POST">
                        @csrf
                        <input type="hidden" name="courseID" value="{{ $course->id }}"/>
                        <div>
                            <label for="Section" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">New Section</label>
                            <input type="text" name="section" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400" placeholder="Section Name" required>
                        </div>
                        <div class="flex flex-row space-x-5">
                            <button type="submit" class="w-full bg-[#3CCAA1]/30 hover:bg-[#3CCAA1] py-3 px-3 border-1 border border-[#3CCAA1] text-center font-semibold text-sm rounded-xl duration-500 transition-all ease-in-out">Create New Section</button>
                            <button data-modal-toggle="addSection-modal" class="w-full text-[#23262F] bg-[#F1F1F1] hover:bg-[#bebebe]/20 focus:ring-4 focus:outline-none border-1 border border-[#bebebe] focus:ring-gray-200 rounded-xl text-base font-normal py-3 px-3 focus:z-10 transition-all duration-500 ease-in-out">Batalkan</button>
                        </div>
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
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:text-white" data-modal-toggle="addContent-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900">Create New Content</h3>
                    <form class="space-y-6" action="{{ route('tutor.newContent') }}" method="POST" enctype="multipart/form-data" class="w-full">
                        @csrf
                        <label for="section" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Content Section</label>
                        <select name="groupID" class="bg-white border-0 mt-[17px]" required>
                            @foreach ($lessonGroup as $lessonGroups)
                                <option value="{{ $lessonGroups->sectionID }}">{{ $lessonGroups->groupTitle }}</option>
                            @endforeach
                        </select>
                        <div>
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Content Title</label>
                            <input type="text" id="file-cover" name="title" class="bg-white border-black w-full mt-[19px]">
                        </div>
                        <div>
                            <label for="File" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Content</label>
                            <input type="text" id="file-cover" name="content" class="bg-white border-black w-full mt-[19px]">
                        </div>
                        <div class="flex flex-row space-x-5">
                            <button type="submit" class="w-full bg-[#3CCAA1]/30 hover:bg-[#3CCAA1] py-3 px-3 border-1 border border-[#3CCAA1] text-center font-semibold text-sm rounded-xl duration-500 transition-all ease-in-out">Create New Content</button>
                            <button data-modal-toggle="addContent-modal" class="w-full text-[#23262F] bg-[#F1F1F1] hover:bg-[#bebebe]/20 focus:ring-4 focus:outline-none border-1 border border-[#bebebe] focus:ring-gray-200 rounded-xl text-base font-normal py-3 px-3 focus:z-10 transition-all duration-500 ease-in-out">Batalkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 

@endsection