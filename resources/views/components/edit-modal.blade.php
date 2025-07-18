<div x-data="{ open: false }">
    <!-- Update Button -->
    <button
        @click="open = true"
        class="px-3 py-1 bg-blue-100  text-white rounded-md text-sm  transition flex items-center"
    >
      <svg xmlns="http://www.w3.org/2000/svg"
         class="fill-current text-[var(--color-accent-hover)] hover:text-[var(--color-accent)]/90"
         width="20px" viewBox="0 0 640 512">
      <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l293.1 0c-3.1-8.8-3.7-18.4-1.4-27.8l15-60.1c2.8-11.3 8.6-21.5 16.8-29.7l40.3-40.3c-32.1-31-75.7-50.1-123.9-50.1l-91.4 0zm435.5-68.3c-15.6-15.6-40.9-15.6-56.6 0l-29.4 29.4 71 71 29.4-29.4c15.6-15.6 15.6-40.9 0-56.6l-14.4-14.4zM375.9 417c-4.1 4.1-7 9.2-8.4 14.9l-15 60.1c-1.4 5.5 .2 11.2 4.2 15.2s9.7 5.6 15.2 4.2l60.1-15c5.6-1.4 10.8-4.3 14.9-8.4L576.1 358.7l-71-71L375.9 417z"/>
    </svg>
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
        class="fixed inset-0 bg-white/40 backdrop-blur-sm flex items-center justify-center z-50"
        style="display: none;"
    >
        <!-- Modal Content with animation -->
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
            <!-- Modal Title -->
            <h2 class="text-xl font-semibold mb-4">Update Employee</h2>

            <!-- Update form slot (or insert form here) -->
            {{ $slot }}

            <!-- Modal Actions -->
            <div class="mt-4 flex justify-end space-x-2">
                <button
                    @click="open = false"
                    class="px-4 py-2 bg-gray-300 hover:bg-gray-400 rounded"
                >
                    Cancel
                </button>
                <button
                    type="submit"
                    class="px-4 py-2 bg-yellow-500 text-white hover:bg-yellow-600 rounded"
                >
                    Update
                </button>
            </div>
        </div>
    </div>
</div>
