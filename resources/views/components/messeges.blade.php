    @if (session()->has('message'))
        <div class="text-green-500 bg-green-100 p-4 rounded">
            {{ session('message') }}
        </div>
 @endif
    @if (session()->has('logout'))
        <div class="text-red-500 bg-red-100 p-4 rounded">
            {{ session('logout') }}
        </div>

    @endif