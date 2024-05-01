<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #3d68ff; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #1947ee; }
        .account-link:hover { background: #3d68ff; }
    </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="flex bg-gray-100 ">
      
        <livewire:layout.sidebar />
        <div class="relative flex flex-col w-full h-screen overflow-y-hidden">
          <livewire:layout.navigation/>
            <div class="flex flex-col w-full h-screen overflow-x-hidden border-t">
                <main class="flex-grow w-full p-6">
                    {{$slot}}
                </main>
        
                <footer class="w-full p-4 text-right bg-white">
                    Built by <a target="_blank" href="https://davidgrzyb.com" class="underline">David Grzyb</a>.
                </footer>
            </div>
            
        </div>
    </body>
</html>
