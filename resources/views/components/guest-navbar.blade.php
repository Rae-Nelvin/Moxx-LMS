<nav class="bg-white border-b-[#D1D1D1] border-b-[1px] px-8 sm:px-4 py-6">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
    <div class="flex flex-col justify-between space-y-1">
        <h1 class="font-bold text-xl">Welcome, {{ Auth::user()->name }}</h1>
        <h2 class="font-normal text-sm">{{ now()->format('d F Y') }} | {{ now()->format('H:i') }} WIB</h2>
    </div>
    <div class="flex items-center md:order-2">
    </div>
  </nav>
  