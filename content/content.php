<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Cards</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-green-100">

    <div class="container mx-auto p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Product 1 -->
            <div class="bg-white rounded-lg shadow-lg p-4 flex flex-col h-full">
                <img src="/Uchhero/Project/pics/1.jpg" alt="Potash Meal" class="rounded-lg w-full h-64 object-cover">
                <h2 class="text-lg font-bold mt-4 min-h-[4rem]">Potash Meal - Bio Potash Fertilizer</h2>
                <p class="text-green-500 mt-2 min-h-[3rem]">Overall Plant Health Enhancement</p>
                <div class="mt-4 text-xl font-bold text-green-500">Rs. 349 <span class="text-gray-500 line-through">Rs. 440</span></div>
                <div class="mt-auto">
                    <button class="w-full bg-green-500 text-white font-bold py-2 rounded hover:bg-green-600 mt-4">View Product</button>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="bg-white rounded-lg shadow-lg p-4 flex flex-col h-full">
                <img src="/Uchhero/Project/pics/2.jpg" alt="Doctor Neem" class="rounded-lg w-full h-64 object-cover">
                <h2 class="text-lg font-bold mt-4 min-h-[4rem]">Doctor Neem+ - Neem Oil</h2>
                <p class="text-green-500 mt-2 min-h-[3rem]">Protection from Plant Pests</p>
                <div class="mt-4 text-xl font-bold text-green-500">Rs. 499 <span class="text-gray-500 line-through">Rs. 600</span></div>
                <div class="mt-auto">
                    <button class="w-full bg-green-500 text-white font-bold py-2 rounded hover:bg-green-600 mt-4">View Product</button>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="bg-white rounded-lg shadow-lg p-4 flex flex-col h-full">
                <img src="/Uchhero/Project/pics/3.jpg" alt="Magic Soil" class="rounded-lg w-full h-64 object-cover">
                <h2 class="text-lg font-bold mt-4 min-h-[4rem]">Magic Soil - All Purpose Potting Mix</h2>
                <p class="text-green-500 mt-2 min-h-[3rem]">Balanced Mix for Indoor & Outdoor Plants</p>
                <div class="mt-4 text-xl font-bold text-green-500">Rs. 1,199 <span class="text-gray-500 line-through">Rs. 1,500</span></div>
                <div class="mt-auto">
                    <button class="w-full bg-green-500 text-white font-bold py-2 rounded hover:bg-green-600 mt-4">View Product</button>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="bg-white rounded-lg shadow-lg p-4 flex flex-col h-full">
                <img src="/Uchhero/Project/pics/4.jpg" alt="Nutri-Rich" class="rounded-lg w-full h-64 object-cover">
                <h2 class="text-lg font-bold mt-4 min-h-[4rem]">Nutri-Rich - Seaweed Fortified Vermicompost</h2>
                <p class="text-green-500 mt-2 min-h-[3rem]">Soil Conditioner, Nutrition, Microbes</p>
                <div class="mt-4 text-xl font-bold text-green-500">Rs. 1,099 <span class="text-gray-500 line-through">Rs. 1,400</span></div>
                <div class="mt-auto">
                    <button class="w-full bg-green-500 text-white font-bold py-2 rounded hover:bg-green-600 mt-4">View Product</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>