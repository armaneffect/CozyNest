@extends('user.userdeshboard')

@section('content')
    <div class="max-w-[1515px] w-11/12 mx-auto my-5 sec-font overflow-scroll">
        <div class="rounded-lg">
            <h1 class="text-2xl lg:text-3xl font-bold drop-shadow-lg text-center sm:w-max pri-font mx-auto">
                Edit Post
            </h1>

            {{-- Form --}}
            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-3 mb-4 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


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

            <div>
                <form action="{{ route('posts.update', $post->id) }}" method="POST" class="pt-2 md:pt-5 pb-0"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    {{-- Username and Email --}}
                    <div class="flex flex-col sm:flex-row gap-2 sm:gap-4 mb-2 md:mb-6">
                        <input type="text"
                         value="{{ Auth::user()->name }}" readonly name="name"
                            class="w-full sm:w-1/2 rounded-md border border-slate-300 bg-gray-100 px-3 py-4 shadow-sm font-semibold text-gray-700 sm:text-sm" />

                        <input type="text" 
                        value="{{ Auth::user()->email }}" readonly name="email"
                            class="w-full sm:w-1/2 rounded-md border border-slate-300 bg-gray-100 px-3 py-4 shadow-sm font-semibold text-gray-700 sm:text-sm" />
                    </div>

                    {{-- Title and Location --}}
                    <div class="flex flex-col sm:flex-row gap-2 sm:gap-4">
                        <input type="text" name="title" value="{{ $post->title }}" placeholder="Title"
                            class="w-full sm:w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 shadow-sm text-black focus:ring-black sm:text-sm" />

                        <input type="text" name="location" value="{{ $post->location }}" placeholder="Location"
                            class="w-full sm:w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 shadow-sm text-black focus:ring-black sm:text-sm" />
                    </div>

                    {{-- Rent and Room Type --}}
                    <div class="flex flex-col sm:flex-row gap-2 sm:gap-4 my-4">
                        <input type="number" name="rentAmount" value="{{ $post->rentAmount }}" placeholder="Rent"
                            class="w-full sm:w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 shadow-sm text-black focus:ring-black sm:text-sm" />

                        <select name="roomType"
                            class="w-full sm:w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 shadow-sm text-black focus:ring-black sm:text-sm">
                            <option value="" disabled>Select Room Type</option>
                            @foreach ($roomTypes as $type)
                                <option value="{{ $type }}" {{ $post->roomType == $type ? 'selected' : '' }}>
                                    {{ $type }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Preferences and Contact --}}
                    <div class="flex flex-col sm:flex-row gap-2 sm:gap-4 my-4">
                        <input type="text" name="preferences" value="{{ $post->preferences }}" placeholder="Preferences"
                            class="w-full sm:w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 shadow-sm text-black focus:ring-black sm:text-sm" />

                        <input type="number" name="contactInfo" value="{{ $post->contactInfo }}"
                            placeholder="Enter Phone Number"
                            class="w-full sm:w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 shadow-sm text-black focus:ring-black sm:text-sm" />
                    </div>

                    {{-- Availability and Image --}}
                    <div class="flex flex-col sm:flex-row gap-4 my-4">
                        <select name="availability"
                            class="cursor-pointer w-full sm:w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 shadow-sm text-black focus:ring-black sm:text-sm">
                            <option value="" disabled>Select Availability :</option>
                            <option value="Available" {{ $post->availability == 'Available' ? 'selected' : '' }}>Available
                            </option>
                            <option value="Booked" {{ $post->availability == 'Booked' ? 'selected' : '' }}>Booked</option>
                        </select>
                       @if (!$post->image)
                            <input type="file" name="image" accept="image/*"
                            class="w-full sm:w-auto rounded-md border border-slate-300 bg-white px-3 py-3 shadow-sm text-black focus:ring-black sm:text-sm" />


                       @else
                          <input type="file" disabled name="image" accept="image/*"
                             class="w-full sm:w-auto rounded-md border border-slate-300 bg-gray-100 px-3 py-3 shadow-sm text-gray-700 focus:ring-black sm:text-sm" />

                       @endif
                    </div>

                    {{-- Details --}}
                    <textarea name="details" rows="5" placeholder="Details"
                        class="w-full rounded-md border border-slate-300 bg-white p-4 shadow-sm text-black focus:ring-black sm:text-sm">{{ $post->details }}</textarea>

                    {{-- Submit --}}
                    <div class="text-center mt-5">
                        <button type="submit"
                            class="w-full sm:w-auto px-12 py-3 bg-pink-500 text-white font-semibold rounded-full shadow-md hover:bg-pink-600 hover:scale-105 transition duration-300">
                            Update Post
                        </button>
                    </div>
                </form>
                <div class="flex items-center gap-3">
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image->image_path) }}"
                            class="w-32 h-24 object-cover rounded-md shadow" alt="">
                        <form action="{{ route('posts.imagedelete', $post->image->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">
                                <i class="fa-solid fa-xmark text-xl"></i>
                            </button>
                        </form>
                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection
