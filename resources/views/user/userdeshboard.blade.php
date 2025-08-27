<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom scrollbar for a cleaner look (optional) */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-100 font-sans">

    <div class="flex h-screen bg-gray-200">
        <aside id="sidebar" class="w-64 hidden z-10  md:flex flex-col bg-gray-800 text-white">
            <div class="h-16 flex items-center justify-center text-2xl font-bold border-b border-gray-700">
                User Dashboard
            </div>
            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="{{ route('user.dashboard') }}" class="flex items-center px-4 py-2.5 text-gray-300 {{ request()->is('admin/dashboard') ? 'bg-gray-900' : 'hover:bg-gray-700' }} rounded-lg">
                    <svg class="w-6 h-6 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                    Dashboard
                </a>
                <a href="{{ route('posts.create') }}"
                    class="flex items-center px-4 py-2.5 text-gray-400 {{ request()->is('admin/posts/create') ? 'bg-gray-900' : 'hover:bg-gray-700' }} rounded-lg">
                    <svg class="w-6 h-6 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                    </svg>
                    Create Post
                </a>
          
           
             
                <a href="{{url('/profile')}}"
                    class="flex items-center px-4 py-2.5 text-gray-400 {{ request()->is('admin/posts/create') ? 'bg-gray-900' : 'hover:bg-gray-700' }} hover:bg-gray-700 hover:text-white rounded-lg">
                    <svg class="w-6 h-6 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.096 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Settings
                </a>
                   <a href="{{url('/')}}"
                    class="flex items-center px-4 py-2.5 text-gray-400 hover:bg-gray-700 hover:text-white rounded-lg">
                   <img src="/home.svg" class="w-6 h-6 mr-3" alt="">
                    Home
                </a>
              
            </nav>
            <form action="{{ route('logout') }}" method="POST"
               >
                @csrf

                <button class="flex items-center px-4 py-2.5 text-gray-400 hover:bg-gray-700 hover:text-white rounded-lg">
                    <img src="/logout.svg" class="w-6 h-6 mr-3" alt="">
                    Logout
                </button>

            </form>
        </aside>

        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="h-16 bg-white shadow-md flex items-center justify-between px-6">
                <button id="toggleSidebar" class="md:hidden  text-gray-600 focus:outline-none ">
                    <svg id="toggleSidebar" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path  stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
                <div class="relative">
                    <input type="text"
                        class="border border-gray-300 rounded-full py-2 pl-10 pr-4 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        placeholder="Search...">
                    <span class="absolute left-3 top-2.5 text-gray-400">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </span>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <button class="text-gray-600">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                        <span class="absolute top-0 right-0 h-2 w-2 bg-red-500 rounded-full"></span>
                    </div>
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full object-cover"
                            src="https://i.pravatar.cc/150?u=a042581f4e29026704d" alt="User Avatar">
                        <div class="ml-3 hidden sm:block">
                            <p class="text-sm font-medium text-gray-700">
                                @auth
                                    {{ Auth::user()->name }}
                                @else
                                    Guest
                                @endauth
                            </p>
                            <p class="text-xs text-gray-500">
                                @auth
                                    {{ Auth::user()->role ?? 'User' }} {{-- role কলাম থেকে আসবে --}}
                                @else
                                    Visitor
                                @endauth
                            </p>
                        </div>

                    </div>
                </div>
            </header>

            {{-- Main Content --}}

            @yield('content')

           
        </div>
    </div>
  <script>
    const sidebar = document.querySelector('aside');
    const toggleButton = document.getElementById('toggleSidebar');

    toggleButton.addEventListener('click', () => {
        sidebar.classList.toggle('hidden');
 
    });
</script>
    
</body>

</html>
