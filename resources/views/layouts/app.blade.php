<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/css/app.css')
    @vite('resources/css/components/humber_menu.css')
</head>



<body>

   
    
    {{-- SIDE BAR ADMIN --}}
    <div class="sidebar fixed inset-y-0 left-1 top-1  bottom-1 w-64 transition-all duration-500 ease-out">
             @include('partial.sidebar')
    </div>


    <header class="w-[calc(100%-17rem)] bg-[var(--color-accent)] p-4 ml-66 mt-1 rounded-xl flex justify-between items-center transition-all duration-300 ease-in-out">
            @include('partial.header')
    </header>
    <main class="w-[calc(100%-17rem)] bg-sky-100 p-5 ml-66 mt-5 transition-all duration-300 ease-in-out">
            @yield('main-content')

    </main>

    <footer>
             @include('partial.footer')
    </footer>

    
     @vite('resources/js/components/burger_menu.js')
</body>



</html>