<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>

    <title>Your Profile</title>
</head>

<body class="bg-[#91d096]">

    <div class="flex min-h-screen items-center justify-center px-6 py-12">
        <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">

            <!-- Your profile -->
            <div class="text-center">
                <h2 class="mt-4 text-2xl font-bold text-gray-900">Your Profile</h2>
            </div>

            <form id="loginForm" class="mt-8 space-y-6" action="#" method="POST" >

                <!-- Your Email -->
                <div>
                    <label for="email address" class="block text-sm font-medium text-gray-900">Your email address</label>
                    <input id="text" name="text" type="text" class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                </div>

                <!-- Contact no -->
                <div>
                    <label for="contact" class="block text-sm font-medium text-gray-900">Contact no.</label>
                    <input id="contact" name="contact" type="text" class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                </div>

                <!-- Save changes Button -->
                <div>
                    <button type="submit"
                        class="w-full flex justify-center rounded-md bg-[#25523B] px-3 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-[#62BD69] focus:outline-none focus:ring-2 focus:ring-indigo-600">
                        Save changes
                    </button>
                </div>

            </form>

        </div>
    </div>
</body>

</html>
