<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Inter', sans-serif;
      }


  @keyframes fadeInUp {
    0% {
      opacity: 0;
      transform: translateY(30px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate-spin-bg {
    animation: floatSpin 60s linear infinite;
    transform-origin: center;
  }

  .animate-fade-in {
    animation: fadeInUp 1s ease-out forwards;
  }


    </style>
  </head>

  <body class="relative flex min-h-screen items-center justify-center overflow-hidden bg-white">

    <!-- 🔵 Full-screen SVG Background -->
    <div class="absolute inset-0 z-0">
      <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1600 800" preserveAspectRatio="xMidYMid slice">
        <rect fill="#F9FAFB" width="1600" height="800"/>
      
          <circle fill="#F9FAFB" cx="800" cy="0" r="1800"/>
          <circle fill="#eff4f8" cx="0" cy="0" r="1700"/>
          <circle fill="#e6edf5" cx="800" cy="0" r="1600"/>
          <circle fill="#dce7f2" cx="0" cy="0" r="1500"/>
          <circle fill="#d3e1ef" cx="800" cy="0" r="1400"/>
          <circle fill="#c9dbed" cx="0" cy="0" r="1300"/>
          <circle fill="#c0d4ea" cx="800" cy="0" r="1200"/>
          <circle fill="#b6cee7" cx="0" cy="0" r="1100"/>
          <circle fill="#adc8e4" cx="800" cy="0" r="1000"/>
          <circle fill="#a3c1e1" cx="0" cy="0" r="900"/>
          <circle fill="#9abbde" cx="800" cy="0" r="800"/>
          <circle fill="#90b5db" cx="0" cy="0" r="700"/>
          <circle fill="#87aed8" cx="200" cy="0" r="600"/>
          <circle fill="#7da8d6" cx="0" cy="0" r="500"/>
          <circle fill="#74a2d3" cx="200" cy="0" r="400"/>
          <circle fill="#6a9cd0" cx="0" cy="0" r="300"/>
          <circle fill="#6195cd" cx="200" cy="0" r="200"/>
          <circle fill="#6195cd" cx="0" cy="0" r="100"/>
        </g>
      </svg>
    </div>

    <!-- 🔵 Floating Background Animation -->
    <header class="absolute top-0 left-0 p-6 z-10">
      <img src="{{ asset('images/logo/logo.png') }}" alt="Payroll Logo" class="w-90 h-auto animate-fade-in" style="animation-delay: 0.5s;">
       
    </header>

    
         
    <!-- 🔵 Main Content -->
    <main class="relative z-20 flex items-center justify-center w-full p-6">
     <div class="max-w-md w-full bg-white p-10 rounded-lg shadow-2xl animate-fade-in">

        <h2 class="mb-6 text-center text-3xl font-bold font-[var(--font-Inter)] text-[var(--color-primary)]">Login to your account</h2>

        <form action="/loginProcess" method="POST" class="space-y-6">
          @csrf
          <!-- Email -->
          <div>
            <label for="email" class="block text-sm font-medium">Email address</label>
            <input
              type="email"
              id="email"
              name="email"
              autocomplete="email"
              required
              class="mt-2 w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-[var(--color-secondary)] placeholder:text-[var(--color-secondary)] p-2 focus:ring-2 bg-white text-[var(--color-text)]"
            />
          
          </div>

          <!-- Password -->
          <div>
            <div class="flex items-center justify-between">
              <label for="password" class="block text-sm font-medium">Password</label>
              <a href="#" class="text-sm font-semibold text-[var(--color-primary)] hover:text-[var(--color-secondary)]">Forgot password?</a>
            </div>
            <input
              type="password"
              id="password"
              name="password"
              autocomplete="current-password"
              required
              class="mt-2 w-full rounded-md border-0 py-1.5 p-2 shadow-sm ring-1 ring-inset ring-[var(--color-secondary)] placeholder:text-[var(--color-secondary)] focus:ring-2 bg-white text-[var(--color-text)]"
            />
          </div>
           @error('email')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
          <!-- Submit Button -->
          <button
            type="submit"
            class="w-full flex justify-center bg-[var(--color-primary)] hover:bg-[var(--color-accent-hover)] cursor-pointer text-white font-semibold py-2 rounded-md focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-[var(--color-primary)]"
          >
            Login
          </button>
        </form>
      </div>
    </main>

  </body>
</html>
