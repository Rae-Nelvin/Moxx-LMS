<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>MOXX LMS</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body id="adminLogin" class="flex flex-col justify-center items-center mx-auto h-screen">
        <img src="{{ asset('images/logo-item.png') }}" class="w-1/3 ml-20">
        <h1 class="font-bold text-[48px] my-6">Admin Login Page</h1>
        <div class="flex flex-col w-[400px] p-8 rounded-2xl">
            @if ($errors->any())
                <div class="w-full bg-[#EB5656] my-5 py-[18px] px-[11px] rounded-md">
                    <h2 class="font-base text-base text-white">You're credentials are incorrect</h2>
                </div>
            @endif
            <form action="{{ route('admin.login') }}" method="POST" class="w-full">
                @csrf
                <div class="mb-[18px]">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                    <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-[#14F6B5] focus:border-[#14F6B5] block w-full p-2.5 " placeholder="email@email.com" required>
                </div>
                <div class="mb-[18px]">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
                    <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-[#14F6B5] focus:border-[#14F6B5] block w-full p-2.5 " required>
                </div>
                <div class="flex items-start mb-[18px]">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" name="remember" value="1" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300">
                    </div>
                    <label for="remember" class="ml-2 text-sm font-medium text-gray-900">Remember me</label>
                </div>
                <button class="text-[#FDF9F7] bg-[#50CFAB] hover:bg-[#46b495] focus:ring-2 focus:outline-none focus:ring-[#14F6B5] font-medium rounded-md text-xl sm:w-full px-5 py-2.5 text-center transition-all ease-in-out duration-300">Login</button>
            </form>
        </div>
    </body>
</html>