@extends('main')

@section('content')

<div class="max-w-[1515px] w-11/12 mx-auto my-5 md:my-10">
    <div class="rounded-lg p-2 pt-0 md:p-5 md:pt-0">
        <h1 class="text-2xl lg:text-3xl font-bold drop-shadow-lg text-center sm:w-max pri-font mx-auto">
            {{ $post->title }}
        </h1>
        <div class="mt-3 md:mt-6">
            <img
                src="{{ $post->image ? asset('storage/' . $post->image->image_path) : asset('storage/default-image.png') }}"
                class="w-[900px] mx-auto rounded-sm border border-slate-300 justify-between"
                alt="Post Image"
            />

            {{-- headings section (if needed later) --}}
            
            <section class="md:flex justify-between items-center mt-5 md:w-4/5 mx-auto px-5">
                {{-- User info and title --}}
                <div class="space-y-1">
                    <h1 class="pri-font font-bold text-sm md:text-xl lg:text-2xl flex gap-1 items-center">
                       <i class="fas fa-user"></i> {{ $post->name }}
                    </h1>
                    <p class="sec-font font-medium text-xs md:text-lg">
                        {{ $post->title }}
                    </p>
                </div>
             <div>
                <p><i class="fas fa-map-marker-alt"></i> Location: {{ $post->location }}</p>
             </div>
            </section>
           

            <h1 class="text-center text-base md:text-2xl pri-font font-extrabold mt-5 md:mt-10 md:w-1/2 mx-auto border-b-2 text-rose-400 border-dashed">
                Room Information
            </h1>

            {{-- details section --}}
            <section class="mt-3 md:w-4/5 mx-auto grid grid-cols-1 lg:grid-cols-2 gap-1">
                <div class="flex gap-5 px-5 py-2 rounded-sm border border-slate-300 justify-between">
                    <h1 class="text-sm md:text-xl font-semibold sec-font">Email:</h1>
                    <p class="pri-font font-bold text-xs md:text-base">{{ $post->email }}</p>
                </div>
                <div class="flex gap-5 px-5 py-2 rounded-sm border border-slate-300 justify-between">
                    <h1 class="text-sm md:text-xl font-semibold sec-font">Rent:</h1>
                    <p class="pri-font font-bold text-xs md:text-base">{{ $post->rentAmount }}$</p>
                </div>
               
                <div class="flex gap-5 px-5 py-2 rounded-sm border border-slate-300 justify-between">
                    <h1 class="text-sm md:text-xl font-semibold sec-font">Room Type:</h1>
                    <p class="pri-font font-bold text-xs md:text-base">{{ $post->roomType }}</p>
                </div>
                <div class="flex gap-5 px-5 py-2 rounded-sm border border-slate-300 justify-between">
                    <h1 class="text-sm md:text-xl font-semibold sec-font">Preferences:</h1>
                    <p class="pri-font font-bold text-xs md:text-base">{{ $post->preferences }}</p>
                </div>
                <div class="flex gap-5 px-5 py-2 rounded-sm border border-slate-300 justify-between">
                    <h1 class="text-sm md:text-xl font-semibold sec-font">Availability:</h1>
                    <p class="pri-font font-bold text-xs md:text-base">{{ $post->availability }}</p>
                </div>
                <div class="flex gap-5 px-5 py-2 rounded-sm border border-slate-300 justify-between">
                    <h1 class="text-sm md:text-xl font-semibold sec-font">Contract:</h1>
                    <p class="pri-font font-bold text-xs md:text-base">{{ $post->contactInfo }}</p>
                </div>
            </section>

            <h1 class="text-center text-base md:text-2xl pri-font font-extrabold mt-6 md:w-1/2 mx-auto border-b-2 text-rose-400 border-dashed">
                Details
            </h1>
            <p class="text-center text-sm md:text-base mt-2 sec-font">
                {{ $post->details }}
            </p>
        </div>
    </div>
</div>

@endsection
