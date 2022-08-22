@extends('layouts.guest')

@section('content')

    <h1 class="font-bold text-[32px]">Create New Class</h1>
    <form action="#" method="POST" class="flex flex-row justify-between mt-[46px] space-x-10" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col w-1/2">
            <h1 class="font-bold text-[24px]">Class information</h1>
            <label for="Title" class="font-medium text-xl ml-[20px] mt-[31px]">Title</label>
            <input type="text" class="bg-white border-0 mt-[17px]" />
            <label for="Subtitle" class="font-medium text-xl ml-[20px] mt-[20px]">Subtitle</label>
            <textarea name="subtitle" cols="30" rows="5" class="bg-white border-0 mt-[19px]"></textarea>
            <label for="Price" class="font-medium text-xl ml-[20px] mt-[101px]">Price</label>
            <input type="number" class="bg-white border-0 mt-[17px]" placeholder="Rp. " /> 
        </div>
        <div class="flex flex-col w-1/2">
            <h1 class="font-bold text-[24px]">Material Information</h1>
            <label for="Section Name" class="font-medium text-xl ml-[20px] mt-[31px]">Section Name</label>
            <input type="text" class="bg-white border-0 mt-[17px]" />
            <label for="Chapter Name" class="font-medium text-xl ml-[20px] mt-[20px]">Chapter Name</label>
            <input type="text" class="bg-white border-0 mt-[17px]" />
            <label for="Upload Documentation" class="font-medium text-xl ml-[20px]  mt-[17px]">Upload Documentation</label>
            <input type="file" name="files[]" class="bg-white border-0 mt-[19px]">
            <button class="bg-[#E4E4E4] font-base text-xl text-[#898989] py-3 mt-[22px]">add section or chapter+</button>
            <button class="ml-auto bg-[#50CFAB] rounded-lg font-semibold text-lg items-center w-[174px] flex flex-row justify-center text-center py-3 text-white hover:bg-[#4ABA9A] transition-all ease-in-out duration-300 mt-[92px]">Publish
        </div>
    </form>

@endsection