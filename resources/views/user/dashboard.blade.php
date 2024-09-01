<x-app-layout>
    <div class="bg-[#252424] text-gray-200 p-4">
        <div class="message flex flex-col">
            <span>
                Hello, {{ Auth::user()->name }}
            </span>
            <span class="text-xs text-gray-400">
                Welcome to your dashboard
            </span>
        </div>
        <!-- Page Modals -->

        <!-- Page Content -->
        <div class="flex flex-col sm:flex-row md:flex-row gap-4">
            <livewire:all_clients />
        </div>
    </div>
</x-app-layout>
