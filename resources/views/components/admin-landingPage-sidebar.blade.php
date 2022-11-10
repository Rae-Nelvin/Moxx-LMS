<aside class="w-64 mt-[3px]" aria-label="Sidebar">
    <div class="overflow-y-auto bg-white h-screen py-6 px-4">
      <img src="{{ asset('images/logo-item.png') }}" class="w-[170px]" alt="Moxx Logo">
        <ul class="mt-11 space-y-[20px]">
            <li>
                <a
                    href="{{ route('admin.renderPlans') }}"
                    class="{{ request()->is('admin/landing-page/plans') ? 'flex items-center rounded-md bg-[#3CCAA1] py-2 px-4 w-full text-white' : 'flex items-center rounded-md hover:bg-[#3CCAA1] py-2 px-4 w-full text-[#7C7C7C] transition-colors ease-in-out duration-300 hover:text-white' }}"
                >
                    <h1 class="font-medium text-base">Plans</h1>
                </a>
            </li>
            <li>
                <a
                    href="{{ route('admin.renderCourses') }}"
                    class="{{ request()->is('admin/landing-page/courses') ? 'flex items-center rounded-md bg-[#3CCAA1] py-2 px-4 w-full text-white' : 'flex items-center rounded-md hover:bg-[#3CCAA1] py-2 px-4 w-full text-[#7C7C7C] transition-colors ease-in-out duration-300 hover:text-white' }}"
                >
                    <h1 class="font-medium text-base">Courses</h1>
                </a>
            </li>
            <li>
                <a
                    href="{{ route('admin.renderMentors') }}"
                    class="{{ request()->is('admin/landing-page/mentors') ? 'flex items-center rounded-md bg-[#3CCAA1] py-2 px-4 w-full text-white' : 'flex items-center rounded-md hover:bg-[#3CCAA1] py-2 px-4 w-full text-[#7C7C7C] transition-colors ease-in-out duration-300 hover:text-white' }}"
                >
                    <h1 class="font-medium text-base">Mentors</h1>
                </a>
            </li>
            <li>
                <a
                    href="{{ route('admin.renderTestimonies') }}"
                    class="{{ request()->is('admin/landing-page/testimonies') ? 'flex items-center rounded-md bg-[#3CCAA1] py-2 px-4 w-full text-white' : 'flex items-center rounded-md hover:bg-[#3CCAA1] py-2 px-4 w-full text-[#7C7C7C] transition-colors ease-in-out duration-300 hover:text-white' }}"
                >
                    <h1 class="font-medium text-base">Testimonies</h1>
                </a>
            </li>
            <li>
                <a
                    href="{{ route('admin.dashboard') }}"
                    class="{{ request()->is('admin/dashboard') ? 'flex items-center rounded-md bg-[#3CCAA1] py-2 px-4 w-full text-white' : 'flex items-center py-[18px] text-base font-normal text-center justify-center text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]' }}"
                >
                    <h1 class="font-medium text-base">Dashboard</h1>
                </a>
            </li>
        </ul>
    </div>
</aside>
