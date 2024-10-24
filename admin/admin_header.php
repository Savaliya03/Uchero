<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navigation Example</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- <style>
    /* Simple carousel styling */
    .carousel {
      display: flex;
      overflow-x: auto;
      scroll-snap-type: x mandatory;
      height: 900px;
      margin-top: 20px;
    }

    .carousel img {
      scroll-snap-align: center;
      width: 100%;
      height: 900px;
      object-fit: cover;
    }

    .carousel::-webkit-scrollbar {
      display: none;
    }

    /* Sticky header styling */
    .sticky-header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      /* Ensure it's above other content */
    }

    .content {
      margin-top: 80px;
      /* Space for the fixed header */
    }

    /* Active link underline */
    .active {
      text-decoration: underline;
      text-decoration-color: #62BD69;
      /* Color of the underline */
    }
  </style> -->
</head>

<body class="bg-[#91d096]">

  <!-- Navbar -->
  <nav class="bg-gray-100 shadow-lg p-4 sticky-header">
    <div class="container mx-auto flex justify-between items-center">
      <!-- Logo -->
      <div class="flex items-center justify-center">
        <a href="#home">
          <img src="/Uchhero/Project/pics/Uchhero.png" alt="Uchhero Logo" class="h-20 w-auto object-contain">
        </a>
      </div>

      <!-- Menubar -->
      <div class="hidden md:flex space-x-8">
        <a href="/Uchhero/Project/header/login/login_page.php" class="text-[#25523B] hover:text-[#62BD69] text-[30px]" id="home-link">Home</a>
        <a href="#flower" class="text-[#25523B] hover:text-[#62BD69] text-[30px]" id="flower-link">Flower</a>
        <a href="#pot" class="text-[#25523B] hover:text-[#62BD69] text-[30px]" id="pot-link">Pot</a>
        <a href="#fertilizer" class="text-[#25523B] hover:text-[#62BD69] text-[30px]" id="fertilizer-link">Fertilizer</a>
        <a href="#garden-tools" class="text-[#25523B] hover:text-[#62BD69] text-[30px]" id="garden-tools-link">Garden Tools</a>
        <a href="#blog" class="text-[#25523B] hover:text-[#62BD69] text-[30px]" id="blog-link">Blog</a>
      </div>

      <!-- User login logo with dropdown -->
      <div class="relative group">
        <button id="userDropdown" class="flex items-center focus:outline-none">
          <img src="/Uchhero/Project/pics/login_logo.png" alt="Login logo" class="w-8 h-8">
        </button>

        <!-- Dropdown list -->
        <div id="dropdownMenu" class="hidden group-hover:block absolute right-0 w-48 bg-white rounded-md shadow-lg py-2 z-50 border border-gray-300">
          <a href="/Uchhero/Project/header/login/profile.php" class="block px-4 py-2 text-sm text-green-700 hover:bg-[#25523B] hover:text-white">Profile</a>
          <a href="/Uchhero/Project/index.php" class="block px-4 py-2 text-sm text-green-700 hover:bg-[#25523B] hover:text-white">Logout</a>
        </div>
      </div>
    </div>
  </nav>



</body>

</html>