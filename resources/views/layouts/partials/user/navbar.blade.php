<div id="navbar" class="nav relative min-h-14 text-white border-b border-gray-100 bg-gray-100 bg-opacity-10 backdrop-blur-[1px]">
    <div class="px-4 w-full flex justify-between items-center">
        <div class="logo mx-2 flex items-center">
            <a href="{{ url('/') }}" class="flex items-center">
                <x-application-logo class="w-auto h-8 fill-current text-white" />
            </a>
        </div>
        <div class="h-full min-h-12 my-1"></div>
        <!-- Three Dots Icon for small screens -->
        <div class="md:hidden absolute top-3 right-1 flex items-center">
            <button id="menu-btn" class="mobile-menu-button">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="5" r="2" />
                    <circle cx="12" cy="12" r="2" />
                    <circle cx="12" cy="19" r="2" />
                </svg>
            </button>
        </div>
        <!-- Menu -->
        <div id="menu" class="hidden md:flex flex-col md:flex-row items-start md:items-center my-2 gap-3 text-md">
            <ul class="flex flex-col md:flex-row gap-4">
                <li>
                   <a href="{{ url('/about') }}" class="text-white hover:text-gray-700">
                        Features
                    </a>
                </li>
                <li>
                    <a href="{{ url('/') }}#pricing" class="text-white hover:text-gray-700">
                        Pricing
                    </a>
                </li>
                <li>
                    <a href="{{ url('/') }}#contact" class="text-white hover:text-gray-700">
                        Contact
                    </a>
                </li>
                <li>
                    <a href="{{ url('/') }}#faq" class="text-white hover:text-gray-700">
                        FAQ
                    </a>
                </li>
            </ul>
        </div>
        <!-- Authentication Links and Hamburger Menu -->
        <div class="flex items-center">
            @if (Route::has('login'))
                <div class="md:p-1 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="hidden md:inline-block">
                            <button
                                class="animated-button btn btn-outline btn-sm rounded-md ring-1 ring-inset ring-gray-400 btn-secondary text-white normal-case hover:bg-white hover:text-gray-800">
                                Dashboard
                            </button>
                        </a>
                    @else
                        <div class="hidden md:flex flex-row gap-4">
                            <a href="{{ route('login') }}">
                                <button
                                    class="animated-button btn btn-outline btn-sm rounded-md ring-1 ring-inset ring-gray-50 btn-secondary text-white normal-case hover:bg-white hover:text-gray-800">
                                    Login
                                </button>
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">
                                    <button
                                        class="animated-button btn btn-outline btn-sm rounded-md ring-1 ring-inset ring-gray-100 btn-ghost text-white normal-case hover:bg-white hover:text-gray-800">
                                        Register
                                    </button>
                                </a>
                            @endif
                        </div>
                    @endauth
                </div>
            @endif
            <!-- Hamburger menu button for small screens -->
            <div class="md:hidden ml-4">
                <button id="menu-btn" class="mobile-menu-button glow-effect">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile menu (hidden by default) -->
    <div id="mobile-menu" class="hidden md:hidden">
        <ul class="flex flex-col items-center py-4">
            <li class="py-2"><a href="{{ url('/about') }}" class="text-white hover:text-gray-700">Features</a></li>
            <li class="py-2"><a href="{{ url('/') }}#pricing" class="text-white hover:text-gray-700">Pricing</a></li>
            <li class="py-2"><a href="{{ url('/') }}#contact" class="text-white hover:text-gray-700">Contact</a></li>
            <li class="py-2"><a href="{{ url('/') }}#faq" class="text-white hover:text-gray-700">FAQ</a></li>
            @guest
                <li class="py-2"><a href="{{ route('login') }}" class="text-white hover:text-gray-700">Login</a></li>
                @if (Route::has('register'))
                    <li class="py-2"><a href="{{ route('register') }}" class="text-white hover:text-gray-700">Register</a></li>
                @endif
            @else
                <li class="py-2"><a href="{{ url('/dashboard') }}" class="text-white hover:text-gray-700">Dashboard</a></li>
            @endguest
        </ul>
    </div>
</div>

<script>
    // Mobile menu button script
    document.getElementById('menu-btn').addEventListener('click', function() {
        let mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });

    // Navbar fixed on scroll
    window.addEventListener('scroll', function() {
        var navbar = document.getElementById('navbar');
        var sticky = navbar.offsetTop;

        if (window.pageYOffset > sticky) {
            navbar.classList.add('navbar-fixed');
        } else {
            navbar.classList.remove('navbar-fixed');
        }
    });

    // Ripple effect for buttons
    document.querySelectorAll('.animated-button').forEach(button => {
        button.addEventListener('click', function(e) {
            let x = e.clientX - e.target.offsetLeft;
            let y = e.clientY - e.target.offsetTop;

            let ripples = document.createElement('span');
            ripples.style.left = x + 'px';
            ripples.style.top = y + 'px';
            this.appendChild(ripples);

            setTimeout(() => {
                ripples.remove()
            }, 1000);
        });
    });
</script>

