<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>在庫管理システム</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            @vite('resources/css/app.css')
    </head>


<body class="bg-slate-50 dark:bg-slate-900">
  <header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full text-sm">
    <nav class="relative max-w-[85rem] w-full mx-auto bg-white border-b border-gray-200 py-3 px-4 sm:py-0 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8 xl:border-x dark:bg-gray-800 dark:border-gray-700" aria-label="Global">
    
    
    
        <div class="flex items-center justify-between">
            <a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Brand">在庫管理システム</a>
            
        </div>
      <div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
        <div class="flex flex-col gap-y-4 gap-x-0 mt-5 sm:flex-row sm:items-center sm:justify-end sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:ps-7">
          @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
                <a a href="{{ route('login') }}" class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 sm:border-s sm:border-gray-300 sm:my-6 sm:ps-6 dark:border-gray-700 dark:text-gray-400 dark:hover:text-blue-500" >
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                </svg>
                    Log in
                </a>
            @endauth
          @endif
        </div>
      </div>
    </nav>
  </header>

  <main id="content" role="main">
    <div class="max-w-[85rem] mx-auto min-h-screen bg-white border-x-gray-200 py-10 px-4 sm:px-6 lg:px-8 xl:border-x dark:bg-gray-800 dark:border-x-gray-700">
      <!-- Page Heading -->
      <header class="max-w-3xl">
        <a href="{{ route('article.index') }}">
            <p class="mb-2 text-sm font-semibold text-blue-600">システムを使用する</p>
        </a>
        <h1 class="block text-2xl font-bold text-gray-800 sm:text-3xl dark:text-white">在庫管理システムへようこそ</h1>
        <p class="mt-2 text-lg text-gray-800 dark:text-gray-400">システムを使用するためには、ログインをしてください</p>
      </header>
      <!-- End Page Heading -->
    </div>
  </main>
</body>

</html>