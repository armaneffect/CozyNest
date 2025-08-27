    <div class="mb-5 md:mb-10 max-w-2xl text-center my-20 mx-auto">
                <h2 class="text-2xl sm:text-3xl font-bold pri-font drop-shadow-lg">
                    Trusted by Thousands
                </h2>
                <p class="mt-3 text-gray-600 sec-font text-sm sm:text-base">
                    Our growing community speaks for itself. Here's a quick look
                    at what we've achieved together.
                </p>
            </div>
@php
    $statistics = [
        [
            'label' => 'Listings',
            'value' => 4800,
            'suffix' => '+',
            'icon' => 'fa-solid fa-house', // শুধু নাম/ক্লাস রাখুন
        ],
        [
            'label' => 'Subscribers',
            'value' => 10000,
            'suffix' => '+',
            'icon' => 'fa-solid fa-user',
        ],
        [
            'label' => 'Cities Covered',
            'value' => 60,
            'suffix' => '+',
            'icon' => 'fa-solid fa-map-pin',
        ],
        [
            'label' => 'Happy Roommates',
            'value' => 3800,
            'suffix' => '+',
            'icon' => 'fa-solid fa-face-smile',
        ],
    ];
@endphp

<div class="container mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 gap-3 md:gap-6">
                   @foreach ($statistics as $stat)
                       <div
                          
                           class="bg-[#F0FDFA] group text-center rounded-xl shadow-md px-4 py-6 space-y-2 transition-all duration-300 hover:scale-105"
                       >
                           <div class=""><i class="{{ $stat['icon'] }} text-2xl"></i></div>
                           <h3 class="text-2xl font-bold text-black">
                               {{ $stat['value'] }}{{ $stat['suffix'] }}
                           </h3>
                           <p class="text-sm sm:text-base sec-font text-gray-600">
                               {{ $stat['label'] }}
                           </p>
                       </div>
                   @endforeach
                </div>
                </div>
