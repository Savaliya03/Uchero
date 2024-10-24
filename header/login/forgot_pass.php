<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.tailwindcss.com"></script>

  <title>Sign In</title>
  <script>
    function validateForm(event) {
      event.preventDefault(); // Prevent the default form submission

      // Get the form elements
      const email = document.getElementById('email').value;

      // If the email field is filled, go to the login page
      if (email) {
        // Redirect to the login page if all fields are filled
        // window.location.href = 'http://localhost/Uchhero/Project/header/login/login_page.php';  
      } else {
        alert('Please fill in all fields.');
      }
    }
  </script>

  <style>
    /* Background image styling */
    body {
      background-image: url('http://localhost/Uchhero/Project/pics/b_5.jpg');
      /* Set your background image here */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
  </style>
</head>

<body>



  <div class="flex min-h-screen items-center justify-center px-6 py-12 relative z-10"> <!-- Added relative and z-index -->
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">

      <!-- Logo -->
      <div class="text-center">
        <img class="mx-auto h-48 w-48 object-contain" src="http://localhost/Uchhero/Project/pics/Uchhero.png" alt="Uchhero Logo">

        <h2 class="mt-4 text-2xl font-bold text-gray-900">Login to your account</h2>
      </div>

      <form id="loginForm" class="mt-8 space-y-6" action="#" method="POST" onsubmit="validateForm(event)">

        <!-- Email -->
        <div>
          <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
          <input id="email" name="email" type="email" autocomplete="email" required class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
        </div>

        <!-- Search Button -->
        <div>
          <button type="submit" class="w-full flex justify-center rounded-md bg-[#25523B] px-3 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-[#62BD69] focus:outline-none focus:ring-2 focus:ring-indigo-600">
            Search
          </button>
        </div>

      </form>

    </div>

  </div>
  </div>

</body>

</html>