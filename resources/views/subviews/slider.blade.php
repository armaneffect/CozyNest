<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }



        swiper-container {
            width: 100%;
            height: 100%;
        }

        swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #444;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <swiper-container class="mySwiper shadow-lg mt-10" pagination="true" pagination-clickable="true" space-between="30"
        centered-slides="true" autoplay-delay="2500" autoplay-disable-on-interaction="false">
        <swiper-slide class="bg-transparent">
            <div class="w-full bg-[#F0FDF4]">
                <div class="max-w-6xl mx-auto ">
                    <div class="container mx-auto  flex  items-center justify-between h-80 rounded-lg px-6">

                        <!-- Image Circle -->
                        <div class="h-72 w-72 flex items-center justify-center bg-[#D0FAE5] rounded-full">
                            <img src="/girl.png" alt="Slide Image" class="w-48 h-48 object-cover rounded-full">
                        </div>

                        <!-- Text Content -->
                        <div class="max-w-md">
                            <h2 class="md:text-4xl text-2xl font-bold text-gray-800">Welcome to Cozy Nest</h2>
                            <p class="text-sm text-gray-600 mt-2">
                                Whether you're finding a room or offering one, we've got the perfect match for your vibe.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </swiper-slide>
        <swiper-slide class="bg-transparent">
            <div class="w-full bg-[#F0FDF4]">
                <div class="max-w-6xl mx-auto ">
                    <div class="container mx-auto  flex flex-row-reverse items-center justify-between h-80 rounded-lg px-6">

                        <!-- Image Circle -->
                        <div class="h-72 w-72 flex items-center justify-center bg-[#D0FAE5] rounded-full">
                            <img src="/munshi.png" alt="Slide Image" class="w-48 h-48 object-cover rounded-full ">
                        </div>

                        <!-- Text Content -->
                        <div class="max-w-md">
                            <h2 class="md:text-4xl text-2xl font-bold text-gray-800">Welcome to Cozy Nest</h2>
                            <p class="text-sm text-gray-600 mt-2">
                                Whether you're finding a room or offering one, we've got the perfect match for your vibe.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </swiper-slide>
        <swiper-slide class="bg-transparent">
            <div class="w-full bg-[#FEF2F2]">
                <div class="max-w-6xl mx-auto ">
                    <div class="container mx-auto  flex items-center justify-between h-80 rounded-lg px-6">

                        <!-- Image Circle -->
                        <div class="h-72 w-72 flex items-center justify-center bg-[#FFE2E2] rounded-full">
                            <img src="/girl2.png" alt="Slide Image" class="w-48 h-48 object-cover rounded-full">
                        </div>

                        <!-- Text Content -->
                        <div class="max-w-md">
                            <h2 class="mdtext-4xl text-2xl font-bold text-gray-800">Welcome to Cozy Nest</h2>
                            <p class="text-sm text-gray-600 mt-2">
                               Whether you're finding a room or offering one, we've got the perfect match for your vibe.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </swiper-slide>
       


    </swiper-container>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

</body>

</html>
