<aside class="w-64 mt-[3px]" aria-label="Sidebar">
  <div class="overflow-y-auto bg-white h-screen">
     <ul>
      @if(Auth::user()->roleID == 1)
        <li>
           <a href="{{ route('admin.dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'bg-[#FDF9F7] flex items-center py-[18px] text-base font-normal text-center justify-start text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 border-r-[#3CCAA1] focus:border-r-[#3CCAA1]' : 'flex items-center py-[18px] text-base font-normal  text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]' }}">
              <h1 class="font-light text-lg ml-10">Dashboard</h1>
           </a>
        </li>
        <li>
          <a href="{{ route('admin.renderCourse') }}" class="{{ request()->is('admin/course') ? 'bg-[#FDF9F7] flex items-center py-[18px] text-base font-normal text-center justify-start text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 border-r-[#3CCAA1] focus:border-r-[#3CCAA1]' : 'flex items-center py-[18px] text-base font-normal  text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]' }}">
             <h1 class="font-light text-lg ml-10">Course</h1>
          </a>
       </li>
       <li>
        <a href="{{ route('admin.renderPayment') }}" class="{{ request()->is('admin/payment') ? 'bg-[#FDF9F7] flex items-center py-[18px] text-base font-normal text-center justify-start text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 border-r-[#3CCAA1] focus:border-r-[#3CCAA1]' : 'flex items-center py-[18px] text-base font-normal  text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]' }}">
           <h1 class="font-light text-lg ml-10">Payment</h1>
        </a>
     </li>
     <li>
         <a href="{{ route('admin.renderUserList') }}" class="{{ request()->is('admin/userList') ? 'bg-[#FDF9F7] flex items-center py-[18px] text-base font-normal text-center justify-start text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 border-r-[#3CCAA1] focus:border-r-[#3CCAA1]' : 'flex items-center py-[18px] text-base font-normal  text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]' }}">
            <h1 class="font-light text-lg ml-10">List User</h1>
         </a>
      </li> 
     <li>
         <a href="{{ route('admin.renderCreateCourse') }}" class="{{ request()->is('admin/renderCreatecourse') ? 'bg-[#FDF9F7] flex items-center py-[18px] text-base font-normal text-center justify-start text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 border-r-[#3CCAA1] focus:border-r-[#3CCAA1]' : 'flex items-center py-[18px] text-base font-normal  text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]' }}">
            <h1 class="font-light text-lg ml-10">Create Course</h1>
         </a>
      </li>
      <li>
         <a href="{{ route('admin.renderPlans') }}" class="{{ request()->is('admin/renderPlans') ? 'bg-[#FDF9F7] flex items-center py-[18px] text-base font-normal text-center justify-start text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 border-r-[#3CCAA1] focus:border-r-[#3CCAA1]' : 'flex items-center py-[18px] text-base font-normal  text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]' }}">
            <h1 class="font-light text-lg ml-10">Landing Page</h1>
         </a>
      </li>
      @endif
      @if (Auth::user()->roleID == 2)
         <li>
            <a href="{{ route('tutor.dashboard') }}" class="{{ request()->is('tutor/dashboard') ? 'bg-[#FDF9F7] flex items-center py-[18px] text-base font-normal text-center justify-start text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 border-r-[#3CCAA1] focus:border-r-[#3CCAA1]' : 'flex items-center py-[18px] text-base font-normal  text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]' }}">
               <h1 class="font-light text-lg ml-10">Dashboard</h1>
            </a>
         </li>
      @elseif (Auth::user()->roleID == 3)
         <li>
            <a href="{{ route('user.dashboard') }}" class="{{ request()->is('user/dashboard') ? 'bg-[#FDF9F7] flex items-center py-[18px] text-base font-normal text-center justify-start text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 border-r-[#3CCAA1] focus:border-r-[#3CCAA1]' : 'flex items-center py-[18px] text-base font-normal  text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]' }}">
               <h1 class="font-light text-lg ml-10">Dashboard</h1>
            </a>
         </li>
         <li>
            <a href="{{ route('user.myCourse') }}" class="{{ request()->is('user/myCourse') ? 'bg-[#FDF9F7] flex items-center py-[18px] text-base font-normal text-center justify-start text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 border-r-[#3CCAA1] focus:border-r-[#3CCAA1]' : 'flex items-center py-[18px] text-base font-normal  text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]' }}">
               <h1 class="font-light text-lg ml-10">Kelas Saya</h1>
            </a>
         </li>
         <li>
            <a href="{{ route('user.transaction') }}" class="{{ request()->is('user/transaction') ? 'bg-[#FDF9F7] flex items-center py-[18px] text-base font-normal text-center justify-start text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 border-r-[#3CCAA1] focus:border-r-[#3CCAA1]' : 'flex items-center py-[18px] text-base font-normal  text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]' }}">
               <h1 class="font-light text-lg ml-10">Transactions</h1>
            </a>
         </li>
         <li>
            <a href="{{ route('user.setting') }}" class="{{ request()->is('user/setting') ? 'bg-[#FDF9F7] flex items-center py-[18px] text-base font-normal text-center justify-start text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 border-r-[#3CCAA1] focus:border-r-[#3CCAA1]' : 'flex items-center py-[18px] text-base font-normal  text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]' }}">
               <h1 class="font-light text-lg ml-10">Settings</h1>
            </a>
         </li>
      @endif
     </ul>
  </div>
</aside>
