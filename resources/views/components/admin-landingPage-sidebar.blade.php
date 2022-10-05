<aside class="w-64 mt-[3px]" aria-label="Sidebar">
    <div class="overflow-y-auto bg-white h-screen">
       <ul>
          <li>
             <a href="{{ route('admin.renderPlans') }}" class="{{ request()->is('admin/landing-page/plans') ? 'bg-[#FDF9F7] flex items-center py-[18px] text-base font-normal text-center justify-center text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 border-r-[#3CCAA1] focus:border-r-[#3CCAA1]' : 'flex items-center py-[18px] text-base font-normal text-center justify-center text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]' }}">
                <h1 class="font-light text-lg">Plans</h1>
             </a>
          </li>
          <li>
            <a href="{{ route('admin.renderCourse') }}" class="{{ request()->is('admin/course') ? 'bg-[#FDF9F7] flex items-center py-[18px] text-base font-normal text-center justify-center text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 border-r-[#3CCAA1] focus:border-r-[#3CCAA1]' : 'flex items-center py-[18px] text-base font-normal text-center justify-center text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]' }}">
               <h1 class="font-light text-lg">Courses</h1>
            </a>
         </li>
         <li>
          <a href="{{ route('admin.renderMentors') }}" class="{{ request()->is('admin/renderMentors') ? 'bg-[#FDF9F7] flex items-center py-[18px] text-base font-normal text-center justify-center text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 border-r-[#3CCAA1] focus:border-r-[#3CCAA1]' : 'flex items-center py-[18px] text-base font-normal text-center justify-center text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]' }}">
             <h1 class="font-light text-lg">Mentors</h1>
          </a>
       </li>
       <li>
           <a href="{{ route('admin.renderUserList') }}" class="{{ request()->is('admin/userList') ? 'bg-[#FDF9F7] flex items-center py-[18px] text-base font-normal text-center justify-center text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 border-r-[#3CCAA1] focus:border-r-[#3CCAA1]' : 'flex items-center py-[18px] text-base font-normal text-center justify-center text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]' }}">
              <h1 class="font-light text-lg">Testimonies</h1>
           </a>
        </li> 
        <li>
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'bg-[#FDF9F7] flex items-center py-[18px] text-base font-normal text-center justify-center text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 border-r-[#3CCAA1] focus:border-r-[#3CCAA1]' : 'flex items-center py-[18px] text-base font-normal text-center justify-center text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]' }}">
               <h1 class="font-light text-lg">Dashboard</h1>
            </a>
         </li>
       </ul>
    </div>
  </aside>
  