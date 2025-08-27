<div class="container mx-auto my-20">
    <div class="rounded-lg p-2 pt-0 md:p-5 md:pt-0 space-y-5">
    <h1 class="text-2xl lg:text-3xl pri-font font-bold drop-shadow-lg text-center sm:w-max pri-font mx-auto py-6">
        How It Works
    </h1>

    <div class=" grid mt-10 md:grid-cols-3 gap-0 md:gap-8">
        {{-- Step 1 --}}
        <div class="text-black bg-[var(--color-banner1)] border-secondary/50 rounded-4xl shadow hover:shadow-lg hover:scale-1 overflow-hidden h-full flex flex-col items-center transition-all group duration-300 scale-95 group hover:scale-105 p-5 lg:p-6">
            <div class="bg-secondary/10 p-4 rounded-full mb-4 group-hover:bg-white transition-all duration-300">
                <i class="fas fa-search text-4xl md:text-5xl group-hover:text-accent transition-all duration-300"></i>
            </div>
            <h1 class="pri-font text-base md:text-xl font-bold transition-all duration-300 mb-3 text-center">
                Search & Filter
            </h1>
            <p class="w-full transition-all duration-300 sec-font text-sm text-center font-medium leading-relaxed">
                Browse through verified roommate profiles and available rooms. Use our smart filters to 
                find matches based on location, budget, lifestyle preferences, and compatibility factors.
            </p>
        </div>

        {{-- Step 2 --}}
        <div class="text-black bg-[var(--color-banner1)] border-secondary/50 rounded-4xl shadow hover:shadow-lg hover:scale-1 overflow-hidden h-full flex flex-col items-center transition-all group duration-300 scale-95 group hover:scale-105 p-5 lg:p-6">
            <div class="bg-secondary/10 p-4 rounded-full mb-4 group-hover:bg-white transition-all duration-300">
                <i class="fas fa-user-friends text-4xl md:text-5xl group-hover:text-accent transition-all duration-300"></i>
            </div>
            <h1 class="pri-font text-base md:text-xl font-bold transition-all duration-300 mb-3 text-center">
                Connect & Chat
            </h1>
            <p class="w-full transition-all duration-300 sec-font text-sm text-center font-medium leading-relaxed">
                Reach out to potential roommates through our secure messaging system. Share interests, 
                discuss living arrangements, and get to know each other before making any commitments.
            </p>
        </div>

        {{-- Step 3 --}}
        <div class="text-black bg-[var(--color-banner1)] border-secondary/50 rounded-4xl shadow hover:shadow-lg hover:scale-1 overflow-hidden h-full flex flex-col items-center transition-all group duration-300 scale-95 group hover:scale-105 p-5 lg:p-6">
            <div class="bg-secondary/10 p-4 rounded-full mb-4 group-hover:bg-white transition-all duration-300">
                <i class="fas fa-home text-4xl md:text-5xl group-hover:text-primary-focus transition-all duration-300"></i>
            </div>
            <h1 class="pri-font text-base md:text-xl font-bold transition-all duration-300 mb-3 text-center">
                Move In Together
            </h1>
            <p class="w-full sec-font text-sm text-center font-medium transition-all duration-300 leading-relaxed">
                Found your perfect match? Schedule meetups, view properties together, and start your 
                new chapter as roommates. Build lasting friendships while sharing your ideal living space.
            </p>
        </div>
    </div>

    {{-- Action Button --}}
    <div class="text-center">
        <a href="#"
            class="relative inline-flex items-center justify-center p-2 md:px-3 md:py-2 overflow-hidden font-medium text-indigo-600 transition duration-300 ease-out border-2 border-rose-500 rounded-2xl w-max shadow-md group/button">
            
            <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-rose-500 group-hover/button:translate-x-0 ease">
                <i class="fas fa-arrow-right w-6 h-6"></i>
            </span>
            <span class="absolute flex items-center justify-center w-full h-full text-rose-500 transition-all duration-300 transform group-hover/button:translate-x-full ease text-xs">
                Start Finding Roommates
            </span>
            <span class="relative invisible text-xs">
                Start Finding Roommates
            </span>
        </a>
    </div>
</div>
</div>
