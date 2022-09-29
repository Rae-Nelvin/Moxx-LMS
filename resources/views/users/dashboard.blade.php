@extends('layouts.guest')

@section('content')

    <div class="flex flex-col flex-nowrap">
        <h1 class="font-bold text-[40px]">Course List</h1>
        <div class="flex flex-row flex-nowrap space-x-[20px] mt-6">
            <button class="bg-white rounded-full hover:bg-[#3CCAA1] border-1 border border-[#3CCAA1] focus:bg-[#3CCAA1] active:bg-[#3CCAA1] hover:text-white focus:text-white active:text-white py-2 px-5 font-light hover:font-bold active:font-bold focus:font-bold text-lg w-auto duration-500 ease-in-out transition-all">
                Trending
            </button>
            <button class="bg-white rounded-full hover:bg-[#3CCAA1] border-1 border border-[#3CCAA1] focus:bg-[#3CCAA1] active:bg-[#3CCAA1] hover:text-white focus:text-white active:text-white py-2 px-5 font-light hover:font-bold active:font-bold focus:font-bold text-lg w-auto duration-500 ease-in-out transition-all">
                Newest
            </button>
            <button class="bg-white rounded-full hover:bg-[#3CCAA1] border-1 border border-[#3CCAA1] focus:bg-[#3CCAA1] active:bg-[#3CCAA1] hover:text-white focus:text-white active:text-white py-2 px-5 font-light hover:font-bold active:font-bold focus:font-bold text-lg w-auto duration-500 ease-in-out transition-all">
                Latest
            </button>
            <button class="bg-white rounded-full hover:bg-[#3CCAA1] border-1 border border-[#3CCAA1] focus:bg-[##3CCAA1] active:bg-[#3CCAA1] hover:text-white focus:text-white active:text-white py-2 px-5 font-light hover:font-bold active:font-bold focus:font-bold text-lg w-auto duration-500 ease-in-out transition-all">
                Free Course
            </button>
        </div>
        <div class="flex flex-row flex-wrap mt-6 w-full">
            <div class="max-w-[318px] w-full mr-[37px] mb-[31px]">
                <div class="bg-[#3CCAA1]/30 relative rounded-lg flex flex-row ">
                    {{-- <img src="{{ asset('storage/'. $datas->imageURL) }}" class="w-full" alt="Class Cover" /> --}}
                    <img src="{{ asset('images/slide-1.jpg') }}" alt="" class="w-full">
                </div>
                <div class="bg-white py-[18px] px-[20px]">
                    <h1 class="font-bold text-2xl">PowerPoint Design</h1>
                    <div class="flex flex-row flex-nowrap justify-between items-center mt-1">
                        <h2 class="font-light text-lg">Rp. 300.000</h2>
                        <div class="flex flex-row items-center">
                            <img src="{{ asset('images/guest-icon/star-icon.svg') }}" alt="star-icon" class="w-[18px] h-[18px] mr-[5px]">
                            <span class="font-light text-base">4.5</span>
                            <span class="font-light text-base">(1920)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-[318px] w-full mr-[37px] mb-[31px]">
                <div class="bg-[#3CCAA1]/30 relative rounded-lg flex flex-row ">
                    {{-- <img src="{{ asset('storage/'. $datas->imageURL) }}" class="w-full" alt="Class Cover" /> --}}
                    <img src="{{ asset('images/slide-1.jpg') }}" alt="" class="w-full">
                </div>
                <div class="bg-white py-[18px] px-[20px]">
                    <h1 class="font-bold text-2xl">PowerPoint Design</h1>
                    <div class="flex flex-row flex-nowrap justify-between items-center mt-1">
                        <h2 class="font-light text-lg">Rp. 300.000</h2>
                        <div class="flex flex-row items-center">
                            <img src="{{ asset('images/guest-icon/star-icon.svg') }}" alt="star-icon" class="w-[18px] h-[18px] mr-[5px]">
                            <span class="font-light text-base">4.5</span>
                            <span class="font-light text-base ml-1">(1920)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-[318px] w-full mr-[37px] mb-[31px]">
                <div class="bg-[#3CCAA1]/30 relative rounded-lg flex flex-row ">
                    {{-- <img src="{{ asset('storage/'. $datas->imageURL) }}" class="w-full" alt="Class Cover" /> --}}
                    <img src="{{ asset('images/slide-1.jpg') }}" alt="" class="w-full">
                </div>
                <div class="bg-white py-[18px] px-[20px]">
                    <h1 class="font-bold text-2xl">PowerPoint Design</h1>
                    <div class="flex flex-row flex-nowrap justify-between items-center mt-1">
                        <h2 class="font-light text-lg">Rp. 300.000</h2>
                        <div class="flex flex-row items-center">
                            <img src="{{ asset('images/guest-icon/star-icon.svg') }}" alt="star-icon" class="w-[18px] h-[18px] mr-[5px]">
                            <span class="font-light text-base">4.5</span>
                            <span class="font-light text-base">(1920)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-[318px] w-full mr-[37px] mb-[31px]">
                <div class="bg-[#3CCAA1]/30 relative rounded-lg flex flex-row ">
                    {{-- <img src="{{ asset('storage/'. $datas->imageURL) }}" class="w-full" alt="Class Cover" /> --}}
                    <img src="{{ asset('images/slide-1.jpg') }}" alt="" class="w-full">
                </div>
                <div class="bg-white py-[18px] px-[20px]">
                    <h1 class="font-bold text-2xl">PowerPoint Design</h1>
                    <div class="flex flex-row flex-nowrap justify-between items-center mt-1">
                        <h2 class="font-light text-lg">Rp. 300.000</h2>
                        <div class="flex flex-row items-center">
                            <img src="{{ asset('images/guest-icon/star-icon.svg') }}" alt="star-icon" class="w-[18px] h-[18px] mr-[5px]">
                            <span class="font-light text-base">4.5</span>
                            <span class="font-light text-base">(1920)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection