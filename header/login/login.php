<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Background image styling */
    body {
      background-image: url('http://localhost/Uchhero/Project/pics/b_5.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
  </style>
</head>

<body>

  <div class="flex min-h-screen items-center justify-center px-6 py-12">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">

      <!-- Logo -->
      <div class="text-center">
        <img class="mx-auto h-48 w-48 object-contain" src="http://localhost/Uchhero/Project/pics/Uchhero.png" alt="Uchhero Logo">
        <h2 class="mt-4 text-2xl font-bold text-gray-900">Login to your account</h2>
      </div>

      <form id="loginForm" class="mt-8 space-y-6" method="POST" action="login_page.php">

        <!-- Email -->
        <div>
          <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
          <input id="email" name="email" type="email" required
            class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
        </div>

        <!-- Password -->
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
            <a href="http://localhost/Uchhero/Project/header/login/forgot_pass.php"
              class="text-sm font-semibold text-blue-400 hover:text-indigo-500">Forgot password?</a>
          </div>
          <input id="password" name="password" type="password" required
            class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
        </div>

        <!-- User/Admin Radio Buttons -->
        <div class="flex space-x-4 items-center">
          <label class="block text-sm font-medium text-gray-900">Login as:</label>
          <div class="flex items-center">
            <input id="user" name="role" type="radio" value="user" checked
              class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
            <label for="user" class="ml-2 block text-sm font-medium text-gray-900">User</label>
          </div>
          <div class="flex items-center">
            <input id="admin" name="role" type="radio" value="admin"
              class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
            <label for="admin" class="ml-2 block text-sm font-medium text-gray-900">Admin</label>
          </div>
        </div>

        <!-- Login Button -->
        <div>
          <button type="submit"
            class="w-full flex justify-center rounded-md bg-[#25523B] px-3 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-[#62BD69] focus:outline-none focus:ring-2 focus:ring-indigo-600">
            Login
          </button>
        </div>

      </form>

      <!-- Create New Account -->
      <div class="mt-6 flex justify-center space-x-4">
        <button onclick="location.href='new_account.php'"
          class="bg-[#62BD69] hover:bg-[#25523B] text-white font-bold py-2 px-4 rounded">
          Create an Account
        </button>
      </div>

    </div>
  </div>

</body>

</html>







