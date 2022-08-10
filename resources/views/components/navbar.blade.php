<header>
    <nav class="bg-white shadow-md fixed-top ">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <!-- Website Logo -->
                        <a href="{{ url ('/')}}" class="flex items-center py-4 px-2">
                            <img src="{{ asset ('images/logo-item.png')}}" alt="Logo" class="h-10 w-30 mr-2">
                            <!-- <span class="font-semibold text-gray-500 text-lg">Navigation</span> -->
                        </a>
                    </div>
                    <!-- Primary Navbar items -->
                    <div class="hidden md:flex items-center lg:space-x-10">
                        <a href=""
                            class="no-underline py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Services</a>
                        <a href=""
                            class="no-underline py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Services</a>
                        <a href=""
                            class="no-underline py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">About</a>
                        <a href=""
                            class="no-underline py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Contact
                            Us</a>
                    </div>
                </div>
                <!-- Secondary Navbar items -->
                @auth
                <div class="nama my-auto">
                    Halo, {{ Auth::user()->name }}
                </div>
                @else
                <div class="hidden md:flex items-center md:space-x-8 ">
                    <a href="{{ url ('login')}}"
                        class="no-underline py-2 px-2 font-medium text-gray-500 rounded-full hover:bg-green-500 hover:text-white transition duration-300">Log
                        In</a>
                    <a href="{{ url ('register')}}"
                        class="no-underline py-2 px-2 font-medium text-gray-500 rounded-full hover:bg-green-500 hover:text-white transition duration-300">Sign
                        up</a>

                </div>
                @endauth
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 " x-show="!showMenu" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div class="hidden mobile-menu">
            <ul class="px-0">

                <li><a href="#services"
                        class="text-black no-underline block text-sm px-2 py-4 hover:bg-green-500 hover:text-white transition duration-300">Home</a>
                </li>
                <li><a href="#services"
                        class="text-black no-underline block text-sm px-2 py-4 hover:bg-green-500 hover:text-white transition duration-300">Services</a>
                </li>
                <li><a href="#about"
                        class="text-black no-underline block text-sm px-2 py-4 hover:bg-green-500 hover:text-white transition duration-300">About</a>
                </li>
                <li><a href="#contact"
                        class="text-black no-underline block text-sm px-2 py-4 hover:bg-green-500 hover:text-white transition duration-300">Contact
                        Us</a></li>
                @auth
                @else
                <li><a href="{{ url ('login')}}"
                        class="text-black no-underline block text-sm px-2 py-4 hover:bg-green-500 hover:text-white transition duration-300">Login</a>
                </li>
                <li><a href="{{ url ('register')}}"
                        class="text-black no-underline block text-sm px-2 py-4 hover:bg-green-500 hover:text-white transition duration-300">Sign
                        up</a></li>
                @endauth
            </ul>
        </div>
        <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
        </script>
    </nav>
</header>