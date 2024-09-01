<div class="drawer w-0 md:w-64 md:drawer-open">
    <input id="my-drawer" type="checkbox" class="drawer-toggle" />
    <div class="">

    </div>
    <div class="z-40 drawer-side">
        <label for="my-drawer" class="drawer-overlay"></label>

        <div
            class="menu overflow-clip p-4 bg-custom-black w-64 h-full text-base-content gap-3 flex flex-col justify-start items-start">

            <div class="flex items-center mb-4 justify-between w-full">
                <a href="{{ route('welcome') }}#top" class="flex items-center font-semibold gap-2">
                    <x-application-logo class="w-32 h-auto fill-current text-orange-500" />
                </a>
            </div>

            <!-- Sidebar content here -->
            <a class="side {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                <i class="fa-solid text-green-500 fa-feather"></i>
                <div class="">
                    Dashboard
                </div>
            </a>

            <a href="{{ route('inbox') }} " class="side {{ request()->routeIs('inbox') ? 'active' : '' }}">
                <i class="fa-regular text-blue-600 fa-envelope"></i>
                <div class="">
                    Inbox
                </div>
            </a>

            <a href="{{ route('profile.edit') }}"
                class="side {{ request()->routeIs('profile.edit') ? 'active' : '' }}">
                <i class="fa-regular text-orange-500 fa-circle-user"></i>
                <div class="">
                    Account
                </div>
            </a>

        </div>
    </div>
</div>
