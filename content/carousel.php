<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Carousel with Left Text Overlay</title>
    <!-- Tailwind CSS (with Flowbite) -->
    <link href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" rel="stylesheet">
    <style>
        #carouselExampleIndicators {
            position: relative;
            width: 100%;
            z-index: 1;
            margin: 0 auto;
            max-width: 100%;
            /* Prevent overflow */
        }

        .carousel-caption {
            top: 30%;
            left: 0;
            transform: translateY(-50%);
            bottom: auto;
            text-align: left;
            padding-left: 20px;
        }

        .carousel-caption h1 {
            color: white;
            padding: 10px;
            padding-left: 20px;
            padding-right: 20px;
            border-radius: 10px;
            background-color: rgba(0, 128, 0, 0.8);
            display: inline-block;
            font-size: 3rem;
        }

        .carousel-indicators {
            bottom: 20px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 10%;
        }

        /* Additional styles to manage carousel container */
        .carousel-container {
            position: relative;
            width: 100%;
            z-index: 1;
            margin: 0 auto;
            max-width: 100%;
        }

        .carousel-container img {
            object-fit: contain;
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body class="bg-gray-100">

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="relative w-full carousel-container" data-carousel="slide">
        <!-- Carousel wrapper -->





        <div class="relative overflow-hidden rounded-lg h-full">
            <!-- Item 1 (Active) -->
            <div class="duration-700 ease-in-out active" data-carousel-item>
                <img src="http://localhost/Uchhero/Project/pics/1.jpg"
                    class="absolute block w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="1">
                <div class="carousel-caption absolute h-full flex items-center">
                    <h1>Feel the nature with Uchhero</h1>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="http://localhost/Uchhero/Project/pics/2.jpg"
                    class="absolute block w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="2">
                <div class="carousel-caption absolute h-full flex items-center">
                    <h1>Decorate with the nature touches</h1>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="http://localhost/Uchhero/Project/pics/3.jpg"
                    class="absolute block w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="3">
                <div class="carousel-caption absolute h-full flex items-center">
                    <h1>Nature's boost for your daily routine</h1>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="http://localhost/Uchhero/Project/pics/4.jpg"
                    class="absolute block w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="4">
                <div class="carousel-caption absolute h-full flex items-center">
                    <h1>Grow memories with every bloom</h1>
                </div>
            </div>
        </div>

        <!-- Slider indicators -->
        <div class="carousel-indicators absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="carousel-control-prev absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="carousel-control-next absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <!-- Include Flowbite JS (necessary for the carousel functionality) -->
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>

</body>

</html>