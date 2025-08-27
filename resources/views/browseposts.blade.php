@extends('main')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl py-5 font-bold mb-4 text-center text-rose-500 uppercase">Browse Posts</h1>


        <form action="{{ route('browseposts') }}" method="GET">
            <div class="mb-6 flex justify-center">
                <input type="text" placeholder="Search posts..." name="search" value="{{ request('search') }}"
                    class="border  border-gray-300 flex-1 rounded-md p-2" />
                @php
                    $roomTypes = [
                        'Cozy room',
                        'Family room',
                        'Master',
                        'Nice room',
                        'Quiet room',
                        'Spare room',
                        'Budget room',
                        'Shared',
                        'Private',
                        'Furnished',
                        'Own room',
                        'Single',
                        'Awesome',
                        'Double',
                        
                    ];

                @endphp
                <select name="category" id="category" class="border flex-1 border-gray-300 rounded-md p-2 ml-2">
                    <option value="" {{ request('category') == '' ? 'selected' : '' }}>All Room Types</option>
                    @foreach ($roomTypes as $type)
                        <option value="{{ $type }}" {{ request('category') == $type ? 'selected' : '' }}>{{ $type }}</option>
                    @endforeach


                </select>
                <select name="sort" id="sort" class="border flex-1 border-gray-300 rounded-md p-2 ml-2">
                    <option value="">Sort by Rent</option>
                    <option value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>Low to High</option>
                    <option value="desc" {{ request('sort') == 'desc' ? 'selected' : '' }}>High to Low</option>
                </select>
                <button class="bg-rose-500 text-white rounded-md px-4 ml-2">Search</button>
            </div>
        </form>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($posts as $post)
                <div
                    class="pri-font font-medium bg-[var(--card-bg)] rounded-xl shadow-md hover:shadow-lg transition-all duration-300 hover:scale-[1.02] overflow-hidden h-full flex flex-col">

                    {{-- Image --}}
                    <div class="relative">
                        <img class="w-full mx-auto h-44 object-cover"
                            src="{{ asset('storage/' . $post->image?->image_path ?? 'default-image.png') }}"
                            alt="{{ $post->title }}" />
                        <div
                            class="absolute top-3 right-3 bg-base-100/90 backdrop-blur-sm px-2 py-1 rounded-full text-xs font-semibold">
                            {{ $post->availability }}
                        </div>
                    </div>

                    {{-- Content --}}
                    <div class="p-4 flex-1 flex flex-col gap-3">
                        {{-- User Info and Rent --}}
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-user-circle text-lg"></i>
                                <span class="text-base font-semibold">{{ $post->name }}</span>
                            </div>

                            @if ($post->rentAmount)
                                <div class="text-right">
                                    <span class="text-sm font-bold">${{ $post->rentAmount }}</span>
                                    <span class="text-xs ml-1">/month</span>
                                </div>
                            @endif
                        </div>

                        <h3 class="text-sm leading-snug line-clamp-2">{{ $post->title }}</h3>

                        {{-- Location --}}
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fas fa-location-dot text-rose-500 text-base"></i>
                            <span>{{ $post->location }}</span>
                        </div>

                        {{-- Preferences - only on larger screens --}}
                        <div class="hidden lg:flex items-start gap-2 text-sm">
                            <i class="fas fa-home mt-0.5 text-base"></i>
                            <span>{{ $post->preferences }}</span>
                        </div>

                        {{-- Action Button --}}
                        <div class="pt-2 flex mt-auto">
                            <a href="{{ route('posts.show', $post->id) }}"
                                class="relative inline-flex items-center justify-center px-2 py-1 overflow-hidden font-medium text-indigo-600 transition duration-300 ease-out border-2 border-rose-500 rounded-xl shadow-sm group/button text-sm mx-auto">

                                <span
                                    class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-rose-500 group-hover/button:translate-x-0 ease">
                                    <i class="fas fa-chevron-right w-4 h-4"></i>
                                </span>
                                <span
                                    class="absolute flex items-center justify-center w-full hover:text-white h-full text-rose-500 transition-all duration-300 transform group-hover/button:translate-x-full ease">
                                    See more
                                </span>
                                <span class="relative invisible">See more</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4 flex justify-center">
            {{ $posts->links() }}
        </div>

    </div>
@endsection

@section('footer')
    @include('subviews.footer')
@endsection
