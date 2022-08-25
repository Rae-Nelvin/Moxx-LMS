<nav class="bg-white border-gray-200 px-2 sm:px-4 py-6 rounded shadow-md">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="#" class="flex items-center">
        <img src="{{ asset('images/logo-item.png') }}" class="mr-3 h-10 w-30 sm:h-9" alt="Moxx Logo">
    </a>
    <div class="flex items-center md:order-2">
        <button type="button" class="flex mr-3 text-sm rounded-full md:mr-0 items-center" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
          <img class="w-[34px] h-[34px] rounded-full" src="{{ asset('images/jungkook.jpg') }}" alt="user photo">
          <p class="ml-[14px] font-normal text-lg mr-[29px]">Hi, {{ Auth::user()->name }}</p>
          <img src="{{ asset('images/guest-icon/dropdown.svg') }}" alt="dropdown icon">
        </button>
        <!-- Dropdown menu -->
        <div class="z-50 my-4 text-base list-none bg-[#3CCAA1]/30 rounded divide-y divide-gray-100 shadow hidden" id="user-dropdown" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(644px, 82px);">
            <ul class="py-1" aria-labelledby="user-menu-button">
                <li>
                <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-[#3CCAA1]/50 transition-all ease-in-out duration-300">Dashboard</a>
                </li>
                <li>
                <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-[#3CCAA1]/50 transition-all ease-in-out duration-300">Settings</a>
                </li>
                <li>
                <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-[#3CCAA1]/50 transition-all ease-in-out duration-300">Earnings</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" class="block py-2 px-4 text-sm text-gray-700 hover:bg-[#3CCAA1]/50 transition-all ease-in-out duration-300">
                    @csrf
                        <button>Sign out</button>
                    </form>
                </li>
            </ul>
            </div>
            <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
    </div>
  </nav>
  