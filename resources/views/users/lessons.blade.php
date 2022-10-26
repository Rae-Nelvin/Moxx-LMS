@extends('layouts.guest')

@section('content')
    <div class="flex flex-col flex-nowrap">
        <div class="flex flex-row justify-between items-center">
            <div class="w-full">
                <h1 class="font-bold text-[40px]">{{ $course->title }}</h1>
                <h2 class="mt-2 font-normal text-[19px]">{{ $file->title }}</h2>
            </div>
            <p class="font-normal text-lg text-right">{{ $course->description }}</p>
        </div>
        <div class="flex flex-row mt-11 justify-between space-x-10 w-full h-[70vh]">
            <div class="w-4/5">
                <div class="h_iframe">
                    {!! $file->file !!}
                </div>
            </div>
            <div class="justify-between flex flex-col w-1/5">
                <div>
                    <div class="flex flex-row justify-between items-center mb-4">
                        <h1 class="font-bold text-base">{{ $course->title }}</h1>
                    </div>

                    @foreach ($lessonGroup as $lessonGroups)
                        <div id="accordion-collapse" data-accordion="collapse"
                            class="max-w-[300px] w-screen border border-1 border-[#3CCAA1]"
                            data-active-classes="bg-[#3CCAA1]/30 text-black">
                            <h2 id="accordion-collapse-heading-{{ $lessonGroups->id }}" class="w-full bg-[#3CCAA1]/30">
                                <button type="button"
                                    class="flex items-center justify-between w-full py-2 px-5 text-left rounded-t-lg text-black"
                                    data-accordion-target="#accordion-collapse-body-{{ $lessonGroups->id }}"
                                    aria-expanded="true" aria-controls="accordion-collapse-body-{{ $lessonGroups->id }}">
                                    <span class="font-bold text-xs">{{ $lessonGroups->groupTitle }}</span>
                                    <div class="flex flex-row space-x-2 items-center">
                                        <span class="font-normal text-[10px]">(0/10)</span>
                                        <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-{{ $lessonGroups->id }}"
                                aria-labelledby="accordion-collapse-heading-1" class="bg-[#3CCAA1]/10 w-full">
                                <div class="py-3 px-5 flex flex-col space-y-4 w-full">
                                    @foreach ($lesson as $lessons)
                                        @if ($lessons->lessonGroupID == $lessonGroups->id)
                                            <a
                                                href="/user/course/detail/{{ $course->id }}/{{ $lessonGroups->id }}/{{ $lessons->id }}">
                                                <div class="flex flex-row space-x-2 items-center w-full">
                                                    <img src="{{ asset('images/guest-icon/play-button.svg') }}"
                                                        alt="play-button" class="w-3 h-3">
                                                    <p class="font-normal text-[10px]">{{ $lessons->title }}</p>
                                                </div>
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
