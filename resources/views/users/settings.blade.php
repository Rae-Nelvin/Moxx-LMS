@extends('layouts.guest')

@section('content')
    <div class="flex flex-col justify-center items-center">
        @if ($user->avatar == null)
            <img src="{{ asset('images/guest-icon/dummy-icon') }}" alt="dummy-icon" class="w-60 rounded-full">
        @elseif(str_contains($user->avatar, 'avatar'))
            <img src="{{ asset('storage/' . $user->avatar) }}" alt="user-avatar" class="w-60 rounded-full">
        @else
            <img src="{{ $user->avatar }}" alt="user-avatar" class="w-60 rounded-full">
        @endif
        <form action="{{ route('settingUpdate') }}" method="POST" enctype="multipart/form-data"
            class="flex flex-col w-2/3 space-y-4 mt-10">
            @csrf
            <input type="hidden" name="id" value="{{ $user->id }}">
            <label for="Name" class="text-3xl font-semibold">User Name</label>
            <input type="text" name="name" value="{{ $user->name }}">
            <label for="Email" class="text-3xl font-semibold">User Email</label>
            <input type="email" name="email" value="{{ $user->email }}" class="disabled" disabled>
            <label for="Avatar" class="text-3xl font-semibold">New User Avatar</label>
            <input type="file" name="avatar" value="{{ $user->avatar }}" onchange="loadFile(event)">
            <div class="flex flex-row justify-center">
                <img id="output" class="w-60 rounded-full">
            </div>
            <button
                class="text-[#FDF9F7] bg-[#50CFAB] hover:bg-[#46b495] focus:ring-2 focus:outline-none focus:ring-[#14F6B5] font-medium rounded-md text-xl sm:w-full px-5 py-2.5 text-center transition-all ease-in-out duration-300">Update</button>
        </form>
    </div>
@endsection
<script>
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    }
</script>
