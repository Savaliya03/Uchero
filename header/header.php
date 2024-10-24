<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navigation Example</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
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
  </style>
</head>

<body class="bg-[#91d096]">

  <!-- Navbar -->
  <nav class="bg-gray-100 shadow-lg p-4 sticky-header">
    <div class="container mx-auto flex justify-between items-center">
      <!-- Logo -->
      <div class="flex items-center justify-center">
        <a href="#home">
          <img src="http://localhost/Uchhero/Project/pics/Uchhero.png" alt="Uchhero Logo" class="h-20 w-auto object-contain">
        </a>
      </div>

      <!-- Menubar -->
      <div class="hidden md:flex space-x-8">
        <a href="http://localhost/Uchhero/Project/index.php" class="text-[#25523B] hover:text-[#62BD69] text-[30px]" id="home-link">Home</a>
        <a href="#flower" class="text-[#25523B] hover:text-[#62BD69] text-[30px]" id="flower-link">Flower</a>
        <a href="#pot" class="text-[#25523B] hover:text-[#62BD69] text-[30px]" id="pot-link">Pot</a>
        <a href="#fertilizer" class="text-[#25523B] hover:text-[#62BD69] text-[30px]" id="fertilizer-link">Fertilizer</a>
        <a href="#garden-tools" class="text-[#25523B] hover:text-[#62BD69] text-[30px]" id="garden-tools-link">Garden Tools</a>
        <a href="#blog" class="text-[#25523B] hover:text-[#62BD69] text-[30px]" id="blog-link">Blog</a>
      </div>

      <!-- Log In Button -->
      <div>
        <a href="http://localhost/Uchhero/Project/header/login/login.php" class="text-[#25523B] hover:text-[#62BD69] text-[30px]">Log in &rarr;</a>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="content">
    <?php include('content/main_content.php'); ?>
  </div>

  <!-- Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const sections = document.querySelectorAll('div[id]');
      const navLinks = document.querySelectorAll('nav a');

      function changeNavOnScroll() {
        let index = sections.length;

        while (--index && window.scrollY + 50 < sections[index].offsetTop) {}

        navLinks.forEach((link) => link.classList.remove('active'));

        if (index >= 0) {
          const activeLink = document.querySelector(`nav a[href="#${sections[index].id}"]`);
          if (activeLink) {
            activeLink.classList.add('active');
          }
        }
      }

      changeNavOnScroll();
      window.addEventListener('scroll', changeNavOnScroll);
    });
  </script>

</body>

</html>