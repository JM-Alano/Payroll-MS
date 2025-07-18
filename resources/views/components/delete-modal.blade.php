<div x-data="{ open: false }">
    <!-- Delete Button -->
    <button
        @click="open = true"
        class="px-3 py-1 bg-red-100 text-white rounded-sm text-sm  transition flex items-center"
    >
        <svg xmlns="http://www.w3.org/2000/svg"
         class="fill-current text-red-700 hover:text-red-800"
         width="20px" viewBox="0 0 640 512">
      <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3zM472 200l144 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-144 0c-13.3 0-24-10.7-24-24s10.7-24 24-24z"/>
    </svg> 
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
            class="bg-white rounded-lg shadow-xl p-6 w-full max-w-sm"
        >
            <!-- Title -->
            <h2 class="text-lg font-semibold text-red-600 mb-3">Confirm Deletion</h2>

            <!-- Body -->
            <p class="text-gray-700 mb-4">
                Are you sure you want to delete this item? This action cannot be undone.
            </p>

            <!-- Actions -->
            <div class="flex justify-end gap-2">
                <button
                    @click="open = false"
                    class="px-4 py-2 bg-gray-300 hover:bg-gray-400 text-sm rounded"
                >
                    Cancel
                </button>

                <!-- Delete Form Button -->
                 {{-- <form action="{{ route('employees.destroy', $employee->id ?? 1) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button
                        type="submit"
                        class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white text-sm rounded"
                    >
                        Yes, Delete
                    </button>
                </form>  --}}
            </div>
        </div>
    </div>
</div>
