@extends('layouts.guest')

@section('content')

    <div class="flex flex-row justify-between items-center">
        <h1 class="font-bold text-[40px]">My Class</h1>
        <button class="bg-[#50CFAB] items-center flex justify-center py-3 px-5 rounded-lg hover:bg-[#4ABA9A] transition-all duration-300 ease-in-out">
            <a href="{{ route('tutor.newClass') }}">
                <h2 class="text-white text-center font-semibold text-lg">Create new+</h2>
            </a>
        </button>
    </div>

    <div class="flex flex-row flex-wrap mt-7 space-x-10">
    @if(!$data->isEmpty())
        @foreach ($data as $datas)
            
                <div class="w-1/4">
                    <div class="bg-[#3CCAA1]/30 relative rounded-lg flex flex-row ">
                        <img src="{{ asset('storage/'. $datas->imageURL) }}" class="w-full" alt="Class Cover" />
                        <div class="absolute left-0 bottom-0 flex flex-row justify-between w-full py-[25px] px-[30px]">
                            @if($datas->isActive == 1)
                            <h3 class="font-light text-base bg-[#50CFAB] px-2 py-1 rounded-3xl">Active</h3>
                            <a href="{{ route('tutor.courseDetail',$datas->id) }}">
                                <img src="{{ asset('images/guest-icon/dots.svg') }}">
                            </a>
                            @else
                            <div class="absolute left-0 bottom-0 flex flex-row justify-between w-full py-[25px] px-[30px]">
                                <h3 class="font-light text-base bg-[#C4C4C4] px-2 py-1 rounded-3xl">Deactive</h3>
                                <a href="{{ route('tutor.courseDetail',$datas->id) }}">
                                    <img src="{{ asset('images/guest-icon/dots.svg') }}">
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="bg-white py-[21px] px-[30px]">
                        <h1 class="font-bold text-2xl">{{ $datas->title }}</h1>
                        <h2 class="font-light text-lg">Rp. {{ $datas->price }}</h2>
                    </div>
                </div>
        @endforeach
    @else
        <h1 class="mt-10 font-semibold text-4xl">Let's create a new class today!</h1>
    @endif
    </div>

@endsection