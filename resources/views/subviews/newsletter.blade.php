{{--
    Blade component for a "Stay in the Loop" newsletter subscription section.
    Requires Tailwind CSS.
    Icons are from Heroicons (https://heroicons.com).
--}}

<div >
    <div class="container mx-auto px-4 pt-8 pb-16 sm:px-6 lg:px-8">
        
        <div class="max-w-3xl mx-auto text-center">
            <div class="inline-block p-4 mb-4 bg-yellow-100 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>
            <h1 class="text-3xl font-bold text-gray-900 sm:text-4xl">
                Stay in the Loop
            </h1>
            <p class="mt-4 text-gray-600">
                Get the latest room listings, housing market insights, and exclusive tips delivered straight to your inbox. Join thousands of renters and hosts in our community.
            </p>
        </div>

        <div class="mt-12 max-w-7xl mx-auto bg-white p-8 sm:p-12 rounded-2xl shadow-lg">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-2 lg:gap-16">
                
                <div class="flex flex-col">
                    <h2 class="text-2xl font-bold text-gray-900">
                        What you'll get
                    </h2>
                    
                    <div class="mt-8 space-y-6">
                        <div class="flex items-start">
                            <span class="flex-shrink-0 p-2 bg-green-100 text-green-600 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-800">New Listings First</h3>
                                <p class="mt-1 text-gray-600">Be the first to know about premium rooms in your preferred locations.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <span class="flex-shrink-0 p-2 bg-blue-100 text-blue-600 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-800">Market Insights</h3>
                                <p class="mt-1 text-gray-600">Weekly reports on rental trends and pricing in major cities.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <span class="flex-shrink-0 p-2 bg-purple-100 text-purple-600 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-800">Expert Tips</h3>
                                <p class="mt-1 text-gray-600">Roommate compatibility advice and housing search strategies.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <span class="flex-shrink-0 p-2 bg-orange-100 text-orange-600 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-800">Exclusive Deals</h3>
                                <p class="mt-1 text-gray-600">Special offers and discounts from our partner services.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-8">
                    <div class="bg-emerald-50 p-8 rounded-lg">
                        <h3 class="text-xl font-bold text-center text-gray-800">
                            Join 10,000+ subscribers
                        </h3>
                        <form action="#" method="POST" class="mt-6">
                            @csrf
                            <div class="flex flex-col space-y-4">
                                <input type="email" name="email" id="email" class="w-full px-4 py-3 text-gray-700 bg-white border border-gray-300 rounded-md focus:ring-pink-500 focus:border-pink-500" placeholder="Enter your email address" required>
                                
                                <button type="submit" class="w-full flex items-center justify-center px-4 py-3 font-bold text-white bg-pink-500 rounded-md hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 transition-colors duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                      <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                                    </svg>
                                    Subscribe Now
                                </button>
                            </div>
                        </form>
                        <p class="mt-4 text-xs text-center text-gray-500">
                            We respect your privacy. Unsubscribe at any time.
                        </p>
                    </div>

                    <div class="bg-yellow-100 p-8 rounded-lg text-center">
                        <div class="flex justify-center text-yellow-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        </div>
                        <blockquote class="mt-4 text-lg font-medium text-gray-700">
                           "Professional service with great customer support."
                        </blockquote>
                        <p class="mt-2 text-sm text-gray-600">- Emma K.</p>
                        <div class="mt-6 flex items-center justify-center space-x-4">
                            <button class="p-2 text-white bg-pink-500 rounded-full hover:bg-pink-600 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div class="flex space-x-1.5">
                                <span class="w-2 h-2 bg-pink-500 rounded-full"></span>
                                <span class="w-2 h-2 bg-pink-200 rounded-full"></span>
                                <span class="w-2 h-2 bg-pink-200 rounded-full"></span>
                                <span class="w-2 h-2 bg-pink-200 rounded-full"></span>
                            </div>
                            <button class="p-2 text-white bg-pink-500 rounded-full hover:bg-pink-600 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>