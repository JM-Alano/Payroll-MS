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
    @vite('resources/js/app.js')

</head>



<body class="bg-[var(--color-background)]">

    {{-- NAVIGATION BAR --}}

   
    
    {{-- SIDE BAR ADMIN --}}
    <aside class="sidebar fixed inset-y-0 left-1 top-1  bottom-1 w-64 transition-all duration-500 ease-out">
             @include('partial.sidebar')
    </aside>

    {{-- BURGER MENU --}}


    <header class="w-[calc(100%-17rem)] bg-[var(--color-primary)] pl-4 pr-4 pt-1 pb-1 ml-66 mt-1 rounded-sm flex justify-between items-center transition-all duration-300 ease-in-out">
            @include('partial.header')
    </header>

    
    <main class="w-[calc(100%-17rem)]  p-1  ml-66 mt-2 transition-all duration-300 ease-in-out">
            @yield('main-content')

    </main>

    <footer>
             @include('partial.footer')
    </footer>

    
     @vite('resources/js/components/burger_menu.js')
        
</body>
</html>