@extends('main')

@section('slider')
@include('subviews.slider')
@endsection

@section('content')
   <div class="featured-posts container mx-auto p-4 rounded-lg">
    <h1 class="text-2xl lg:text-3xl font-bold drop-shadow-lg text-center sm:w-max pri-font mx-auto mt-8">
        Featured Posts
    </h1>

    <div class="md:mt-7 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach($posts as $post)
        <div class="pri-font font-medium bg-[var(--card-bg)] rounded-xl shadow-md hover:shadow-lg transition-all duration-300 hover:scale-[1.02] overflow-hidden h-full flex flex-col">
            
            {{-- Image --}}
            <div class="relative">
                <img
                    class="w-full mx-auto h-44 object-cover"
                    src="{{ asset('storage/'.$post->image?->image_path ?? '') }}"
                    alt="{{ $post->title }}"
                />
                <div class="absolute top-3 right-3 bg-base-100/90 backdrop-blur-sm px-2 py-1 rounded-full text-xs font-semibold">
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

                    @if($post->rentAmount)
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
                    <a  href="{{ route('posts.show', $post->id) }}"
                        class="relative inline-flex items-center justify-center px-2 py-1 overflow-hidden font-medium text-indigo-600 transition duration-300 ease-out border-2 border-rose-500 rounded-xl shadow-sm group/button text-sm mx-auto">
                        
                        <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-rose-500 group-hover/button:translate-x-0 ease">
                            <i class="fas fa-chevron-right w-4 h-4"></i>
                        </span>
                        <span class="absolute flex items-center justify-center w-full hover:text-white h-full text-rose-500 transition-all duration-300 transform group-hover/button:translate-x-full ease">
                            See more
                        </span>
                        <span class="relative invisible">See more</span>
                    </a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection

@section('statistics')
    @include('subviews.statistics')
@endsection

@section('howtowork')
    @include('subviews.howtowork')
    
@endsection
@section('newsletter')
    @include('subviews.newsletter')
    
@endsection

@section('footer')
    @include('subviews.footer')
    
@endsection