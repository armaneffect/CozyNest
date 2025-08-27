@extends('user.userdeshboard')

@section('content')
    <div class="max-w-[1515px] w-11/12 mx-auto my-5 sec-font overflow-scroll">
        <div class="rounded-lg">
            <h1 class="text-2xl lg:text-3xl font-bold drop-shadow-lg text-center sm:w-max pri-font mx-auto">
                New Post
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




            <div>
                <form action="{{ route('posts.store') }}" method="POST" class="pt-2 md:pt-5 pb-0"
                    enctype="multipart/form-data">
                    @csrf

                    {{-- Username and email --}}
                    <div class="flex flex-col sm:flex-row gap-2 sm:gap-4 mb-2 md:mb-6">
                        <input type="text" name="name"
                            class="mt-1 block w-full sm:w-1/2 rounded-md border border-slate-300 bg-gray-50 px-3 py-4 shadow-sm placeholder:font-semibold text-black focus:border-black focus:outline-none focus:ring-1 focus:ring-black sm:text-sm"
                            value="{{ Auth::user()->name }}" readonly />

                        <input type="text" name="email"
                            class="mt-1 block w-full sm:w-1/2 rounded-md border border-slate-300 bg-gray-50 px-3 py-4 shadow-sm placeholder:font-semibold text-black focus:border-black focus:outline-none focus:ring-1 focus:ring-black sm:text-sm"
                            value="{{ Auth::user()->email }}" readonly />
                    </div>

                    {{-- Title and Location --}}
                    <div class="flex flex-col sm:flex-row gap-2 sm:gap-4">
                        <input type="text" name="title" value="{{ old('title') }}"
                            class="mt-1 block w-full sm:w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 shadow-sm placeholder:font-semibold text-black focus:border-black focus:outline-none focus:ring-1 focus:ring-black sm:text-sm"
                            placeholder="Title" />

                        <input type="text" name="location" value="{{ old('location') }}"
                            class="mt-1 block w-full sm:w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 shadow-sm placeholder:font-semibold text-black focus:border-black focus:outline-none focus:ring-1 focus:ring-black sm:text-sm"
                            placeholder="Location" />
                    </div>
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

                    {{-- Rent and Room Type --}}
                    <div class="flex flex-col sm:flex-row gap-2 sm:gap-4 my-2 md:my-6">
                        <input type="number" name="rentAmount" value="{{ old('rentAmount') }}"
                            class="mt-1 block w-full sm:w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 shadow-sm placeholder:font-semibold text-black focus:border-black focus:outline-none focus:ring-1 focus:ring-black sm:text-sm"
                            placeholder="Rent" />

                        <select name="roomType" id="roomType"
                            class="mt-1 block w-full sm:w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 shadow-sm placeholder:font-semibold text-black focus:border-black focus:outline-none focus:ring-1 focus:ring-black sm:text-sm">
                            <option value="" disabled selected>Select Room Type</option>
                            @foreach ($roomTypes as $type)
                                <option selected={{ old('roomType') == $type }} value="{{ $type }}">{{ $type }}</option>
                            @endforeach

                        </select>
                    </div>

                    {{-- Preferences and Contact --}}
                    <div class="flex flex-col sm:flex-row gap-2 sm:gap-4 my-2 md:my-6">
                        <input type="text" name="preferences" value="{{ old('preferences') }}"
                            class="mt-1 block w-full sm:w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 shadow-sm placeholder:font-semibold text-black focus:border-black focus:outline-none focus:ring-1 focus:ring-black sm:text-sm"
                            placeholder="Preferences" />

                        <input type="text" name="contactInfo" value="{{ old('contactInfo') }}"
                            class="mt-1 block w-full sm:w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 shadow-sm placeholder:font-semibold text-black focus:border-black focus:outline-none focus:ring-1 focus:ring-black sm:text-sm"
                            placeholder="Contact" />
                    </div>

                    {{-- Availability and Photo --}}
                    <div class="flex flex-col sm:flex-row gap-2 sm:gap-4 my-2 md:my-6 relative">
                        <div class="relative w-full sm:w-1/2">
                            <select name="availability"
                                class="cursor-pointer appearance-none mt-1 block w-full rounded-md border border-slate-300 bg-white px-3 py-4 shadow-sm placeholder:font-semibold text-black focus:border-black focus:outline-none focus:ring-1 focus:ring-black sm:text-sm">
                                <option value="" disabled selected>Select Availability :</option>
                                <option value="Available">Available</option>
                                <option value="Booked">Booked</option>
                            </select>
                            <span class="absolute right-2 top-6">
                                <i class="fa fa-chevron-down text-gray-500"></i>
                            </span>
                        </div>

                        <input type="file" name="image"
                            class="mt-1 block w-full  sm:w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 shadow-sm placeholder:font-semibold text-black focus:border-black focus:outline-none focus:ring-1 focus:ring-black sm:text-sm"
                            accept="image/*" />
                    </div>

                    {{-- Details --}}
                    <div>
                        <textarea name="details" cols="30" rows="10" placeholder="Details"
                            class="border-2 border-slate-300 h-40 w-full resize-none rounded-md p-5 font-semibold text-gray-500 focus:outline-black"></textarea>
                    </div>

                    {{-- Submit --}}
                    <div class="text-center">
                        <button type="submit"
                            class="btn btn-md w-full sm:w-auto px-12 md:text-lg mt-2 bg-accent bg-pink-500 text-black hover:scale-110 rounded-full transition-all duration-300">
                            Add
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
