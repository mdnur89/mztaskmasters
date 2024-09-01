<x-client-layout>
    <div class="bg-[#252424] text-gray-200 p-4">
        <div class="message flex flex-col">
            <span>
                Hello, {{ Auth::user()->name }}
            </span>
            <span class="text-xs text-gray-400">
                Welcome to your taskmaster dashboard
            </span>
        </div>

        <!-- Page Content -->
        <!-- All projects container removed -->

        <!-- All freelancers -->
        <div class="py-4">
            <h3 class="text-lg py-2 center font-semibold text-gray-100">All Taskmasters</h3>
            <livewire:all-freelancers />
        </div>
    </div>
</x-client-layout>
