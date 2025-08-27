@extends('admin.admindashboard')

@section('content')
   <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                <h1 class="text-3xl font-semibold text-gray-800">Welcome back, Abir!</h1>
                <p class="text-gray-600 mt-1">Here's what's happening with your projects today.</p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
                    <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Total Post</p>
                            <p class="text-3xl font-bold text-gray-800">{{$postCount}}</p>
                            <p class="text-xs text-green-500 mt-1">+5.2% from last month</p>
                        </div>
                        <div class="bg-indigo-100 p-3 rounded-full">
                            <svg class="w-6 h-6 text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v.01" />
                            </svg>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Total Users</p>
                            <p class="text-3xl font-bold text-gray-800">{{$userCount}}</p>
                            <p class="text-xs text-green-500 mt-1">+12% from last month</p>
                        </div>
                        <div class="bg-green-100 p-3 rounded-full">
                            <svg class="w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Open Tickets</p>
                            <p class="text-3xl font-bold text-gray-800">32</p>
                            <p class="text-xs text-red-500 mt-1">-2 since yesterday</p>
                        </div>
                        <div class="bg-yellow-100 p-3 rounded-full">
                            <svg class="w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 002 2h3m10 0h3a2 2 0 002-2v-3a2 2 0 00-2-2h-3m-3.5 6.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">
                    <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow-md">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Sales Analytics</h2>
                        <div class="bg-gray-200 h-64 flex items-center justify-center rounded">
                            <p class="text-gray-500">Chart will be rendered here.</p>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Recent Activity</h2>
                        <ul class="space-y-4">
                            <li class="flex items-center">
                                <div
                                    class="w-10 h-10 rounded-full bg-green-100 flex-shrink-0 flex items-center justify-center">
                                    <span class="text-green-600 font-bold">✓</span>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm text-gray-700">Order #12345 completed</p>
                                    <p class="text-xs text-gray-500">5 mins ago</p>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div
                                    class="w-10 h-10 rounded-full bg-blue-100 flex-shrink-0 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm text-gray-700">New user 'Kamal' registered</p>
                                    <p class="text-xs text-gray-500">1 hour ago</p>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div
                                    class="w-10 h-10 rounded-full bg-red-100 flex-shrink-0 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-red-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm text-gray-700">Server payment failed</p>
                                    <p class="text-xs text-gray-500">3 hours ago</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </main>
@endsection