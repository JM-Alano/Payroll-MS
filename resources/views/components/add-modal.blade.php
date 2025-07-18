<div x-data="{ open: false }">
    <!-- Add Button -->
    <button
        @click="open = true"
        class="px-3 py-1 bg-[var(--color-accent)] text-white rounded-md text-sm hover:bg-[var(--color-accent)]/90 transition flex items-center"
    >
        + Add Employee
    </button>

    <!-- Modal Background with white blur -->
<div
    x-show="open"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 bg-black/40 backdrop-blur-sm flex items-center justify-center z-50"
    style="display: none;"
        >

        <!-- Modal Content with scale and fade -->
        <div
            @click.away="open = false"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            class="bg-white rounded-sm shadow-xl p-6 w-full max-w-md"
        >
            <!-- Slot content goes here -->
            {{ $slot }}

            <!-- Close Button -->
            <div class="mt-4 text-right">
                <button
                    @click="open = false"
                    class="px-4 py-2 bg-gray-300 hover:bg-gray-400 rounded"
                >
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
