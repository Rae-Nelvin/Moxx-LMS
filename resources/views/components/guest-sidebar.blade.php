<aside class="w-64 border-r-[#7C7C7C]/30 border-[1px]" aria-label="Sidebar">
    <div class="overflow-y-hidden bg-white h-screen py-6 px-4">
        <img
            src="{{ asset('images/logo-item.png') }}"
            class="w-[170px]"
            alt="Moxx Logo"
        />
        <ul class="mt-11 space-y-[20px]">
            @if(Auth::user()->roleID == 1)
            <li>
                <a
                    href="{{ route('admin.dashboard') }}"
                    class="{{ request()->is('admin/dashboard') ? 'flex items-center rounded-md bg-[#3CCAA1] py-2 px-4 w-full text-white' : 'flex items-center rounded-md hover:bg-[#3CCAA1] py-2 px-4 w-full text-[#7C7C7C] transition-colors ease-in-out duration-300 hover:text-white' }}"
                >
                    <h1 class="font-medium text-base">Dashboard</h1>
                </a>
            </li>
            <li>
                <a
                    href="{{ route('admin.renderCourse') }}"
                    class="{{ request()->is('admin/course') ? 'flex items-center rounded-md bg-[#3CCAA1] py-2 px-4 w-full text-white' : 'flex items-center rounded-md hover:bg-[#3CCAA1] py-2 px-4 w-full text-[#7C7C7C] transition-colors ease-in-out duration-300 hover:text-white' }}"
                >
                    <h1 class="font-medium text-base">Course</h1>
                </a>
            </li>
            <li>
                <a
                    href="{{ route('admin.renderPayment') }}"
                    class="{{ request()->is('admin/payment') ? 'flex items-center rounded-md bg-[#3CCAA1] py-2 px-4 w-full text-white' : 'flex items-center rounded-md hover:bg-[#3CCAA1] py-2 px-4 w-full text-[#7C7C7C] transition-colors ease-in-out duration-300 hover:text-white' }}"
                >
                    <h1 class="font-medium text-base">Payment</h1>
                </a>
            </li>
            <li>
                <a
                    href="{{ route('admin.renderUserList') }}"
                    class="{{ request()->is('admin/userList') ? 'flex items-center rounded-md bg-[#3CCAA1] py-2 px-4 w-full text-white' : 'flex items-center rounded-md hover:bg-[#3CCAA1] py-2 px-4 w-full text-[#7C7C7C] transition-colors ease-in-out duration-300 hover:text-white' }}"
                >
                    <h1 class="font-medium text-base">List User</h1>
                </a>
            </li>
            <li>
                <a
                    href="{{ route('admin.renderCreateCourse') }}"
                    class="{{ request()->is('admin/renderCreatecourse') ? 'flex items-center rounded-md bg-[#3CCAA1] py-2 px-4 w-full text-white' : 'flex items-center rounded-md hover:bg-[#3CCAA1] py-2 px-4 w-full text-[#7C7C7C] transition-colors ease-in-out duration-300 hover:text-white' }}"
                >
                    <h1 class="font-medium text-base">Create Course</h1>
                </a>
            </li>
            <li>
                <a
                    href="{{ route('admin.renderPlans') }}"
                    class="{{ request()->is('admin/renderPlans') ? 'flex items-center rounded-md bg-[#3CCAA1] py-2 px-4 w-full text-white' : 'flex items-center rounded-md hover:bg-[#3CCAA1] py-2 px-4 w-full text-[#7C7C7C] transition-colors ease-in-out duration-300 hover:text-white' }}"
                >
                    <h1 class="font-medium text-base">Landing Page</h1>
                </a>
            </li>
            @endif @if (Auth::user()->roleID == 2)
            <li>
                <a
                    href="{{ route('tutor.dashboard') }}"
                    class="{{ request()->is('tutor/dashboard') ? 'flex items-center rounded-md bg-[#3CCAA1] py-2 px-4 w-full text-white' : 'flex items-center rounded-md hover:bg-[#3CCAA1] py-2 px-4 w-full text-[#7C7C7C] transition-colors ease-in-out duration-300 hover:text-white' }}"
                >
                    <h1 class="font-medium text-base">Dashboard</h1>
                </a>
            </li>
            @elseif (Auth::user()->roleID == 3)
            <li>
                <a
                    href="{{ route('user.dashboard') }}"
                    class="{{ request()->is('user/dashboard') ? 'flex items-center rounded-md bg-[#3CCAA1] py-2 px-4 w-full text-white' : 'flex items-center rounded-md hover:bg-[#3CCAA1] py-2 px-4 w-full text-[#7C7C7C] transition-colors ease-in-out duration-300 hover:text-white' }}"
                >
                    <h1 class="font-medium text-base">Dashboard</h1>
                </a>
            </li>
            <li>
                <a
                    href="{{ route('user.myCourse') }}"
                    class="{{ request()->is('user/myCourse') ? 'flex items-center rounded-md bg-[#3CCAA1] py-2 px-4 w-full text-white' : 'flex items-center rounded-md hover:bg-[#3CCAA1] py-2 px-4 w-full text-[#7C7C7C] transition-colors ease-in-out duration-300 hover:text-white' }}"
                >
                    <h1 class="font-medium text-base">Kelas Saya</h1>
                </a>
            </li>
            <li>
                <a
                    href="{{ route('user.transaction') }}"
                    class="{{ request()->is('user/transaction') ? 'flex items-center rounded-md bg-[#3CCAA1] py-2 px-4 w-full text-white' : 'flex items-center rounded-md hover:bg-[#3CCAA1] py-2 px-4 w-full text-[#7C7C7C] transition-colors ease-in-out duration-300 hover:text-white' }}"
                >
                    <h1 class="font-medium text-base">Transactions</h1>
                </a>
            </li>
            @endif
        </ul>
        <ul class="mt-14 space-y-[20px]">
            <li>
                <a
                    href="#"
                    class="{{ request()->is('user/setting') ? 'flex items-center rounded-md bg-[#3CCAA1] py-2 px-4 w-full text-white' : 'flex items-center rounded-md hover:bg-[#3CCAA1] py-2 px-4 w-full text-[#7C7C7C] transition-colors ease-in-out duration-300 hover:text-white' }}"
                >
                    <h1 class="font-medium text-base">Settings</h1>
                </a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button
                        class="py-2 px-4 font-medium text-base w-full text-left text-[#7C7C7C] hover:bg-red-500 hover:text-white transition-colors duration-300 ease-in-out rounded-md"
                    >
                        Sign out
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>
