<div x-data="{ open: false }">
    <!-- View Button -->
    <button
        @click="open = true"
        class="px-3 py-1 bg-blue-100 text-white rounded-md text-sm  transition flex items-center"
    >
        <svg xmlns="http://www.w3.org/2000/svg" width="14px"  class="fill-current text-[var(--color-accent-hover)] hover:text-[var(--color-accent)]/90" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z"/></svg>
    </button>

    <!-- Modal Background -->
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-white/40 backdrop-blur-sm flex items-center justify-center z-50"
        style="display: none;"
    >
        <!-- Modal Content -->
        <div
            @click.away="open = false"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            class="bg-white rounded-lg shadow-xl p-6 w-full max-w-md"
        >
            <!-- Title -->
            <h2 class="text-lg font-semibold mb-4 text-blue-600">Employee Details</h2>

            <!-- Content (Replace with dynamic data as needed) -->
            <div class="space-y-2 text-sm text-gray-700">
                <p><strong>Name:</strong> {{ $employee->name ?? 'John Doe' }}</p>
                <p><strong>Email:</strong> {{ $employee->email ?? 'john@example.com' }}</p>
                <p><strong>Position:</strong> {{ $employee->position ?? 'Developer' }}</p>
                <p><strong>Hired On:</strong> {{ $employee->hired_at ?? '2023-01-01' }}</p>
            </div>

            <!-- Close Button -->
            <div class="mt-4 text-right">
                <button
                    @click="open = false"
                    class="px-4 py-2 bg-gray-300 hover:bg-gray-400 text-sm rounded"
                >
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
