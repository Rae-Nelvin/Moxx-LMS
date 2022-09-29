<aside class="w-64 mt-[3px]" aria-label="Sidebar">
  <div class="overflow-y-auto bg-white h-screen">
     <ul>
      @if(Auth::user()->roleID == 1)
        <li>
           <a href="{{ route('admin.dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'bg-[#FDF9F7] flex items-center py-[18px] text-base font-normal text-center justify-center text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 border-r-[#3CCAA1] focus:border-r-[#3CCAA1]' : 'flex items-center py-[18px] text-base font-normal text-center justify-center text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]' }}">
              <h1 class="font-light text-lg">Dashboard</h1>
           </a>
        </li>
        <li>
          <a href="#" class="flex items-center py-[18px] text-base font-normal text-center justify-center text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]">
             <h1 class="font-light text-lg">Course</h1>
          </a>
       </li>
       <li>
        <a href="#" class="{{ request()->is('admin/payment') ? 'bg-[#FDF9F7] flex items-center py-[18px] text-base font-normal text-center justify-center text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 border-r-[#3CCAA1] focus:border-r-[#3CCAA1]' : 'flex items-center py-[18px] text-base font-normal text-center justify-center text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]' }}">
           <h1 class="font-light text-lg">Payment</h1>
        </a>
     </li>
     <li>
         <a href="#" class="flex items-center py-[18px] text-base font-normal text-center justify-center text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]">
            <h1 class="font-light text-lg">List User</h1>
         </a>
      </li> 
     <li>
         <a href="{{ route('tutor.dashboard') }}" class="{{ request()->is('tutor/dashboard') ? 'bg-[#FDF9F7] flex items-center py-[18px] text-base font-normal text-center justify-center text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 border-r-[#3CCAA1] focus:border-r-[#3CCAA1]' : 'flex items-center py-[18px] text-base font-normal text-center justify-center text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]' }}">
            <h1 class="font-light text-lg">Create Course</h1>
         </a>
      </li>
      @endif
      @if (Auth::user()->roleID == 2)
         <li>
            <a href="{{ route('tutor.dashboard') }}" class="{{ request()->is('tutor/dashboard') ? 'bg-[#FDF9F7] flex items-center py-[18px] text-base font-normal text-center justify-center text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 border-r-[#3CCAA1] focus:border-r-[#3CCAA1]' : 'flex items-center py-[18px] text-base font-normal text-center justify-center text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]' }}">
               <h1 class="font-light text-lg">Dashboard</h1>
            </a>
         </li>
      @elseif (Auth::user()->roleID == 3)
         <li>
            <a href="{{ route('user.dashboard') }}" class="{{ request()->is('user/dashboard') ? 'bg-[#FDF9F7] flex items-center py-[18px] text-base font-normal text-center justify-center text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 border-r-[#3CCAA1] focus:border-r-[#3CCAA1]' : 'flex items-center py-[18px] text-base font-normal text-center justify-center text-gray-900 hover:bg-[#FDF9F7] focus:bg-[#FDF9F7] border-4 border-t-0 border-b-0 border-l-0 focus:border-r-[#3CCAA1]' }}">
               <h1 class="font-light text-lg">Dashboard</h1>
            </a>
         </li>
      @endif
     </ul>
  </div>
</aside>
