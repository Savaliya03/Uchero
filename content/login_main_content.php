<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- Main Content -->
    <div class="content">

        <!-- Carousel -->
        <div class="carousel">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/Uchhero/Project/content/carousel.php'); ?>
        </div>

        <!-- Image with Links -->
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/Uchhero/Project/content/img_with_link.php'); ?>

        <!-- Login Main Content Sections -->

        <!-- Flower Section -->
        <div id="flower" class="p-10 ">
            <h1 class="text-[40px] mt-24">Flower Section</h1>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/Uchhero/Project/header/login/login_flower.php'); ?>
        </div>

        <!-- Pot Section -->
        <div id="pot" class="p-10">
            <h1 class="text-[40px] mt-24">Pot Section</h1>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/Uchhero/Project/header/login/login_pot.php'); ?>
        </div>

        <!-- Fertilizer Section -->
        <div id="fertilizer" class="p-10">
            <h1 class="text-[40px] mt-24">Fertilizer Section</h1>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/Uchhero/Project/header/login/login_fertilizer.php'); ?>
        </div>

        <!-- Garden Tools Section -->
        <div id="garden-tools" class="p-10">
            <h1 class="text-[40px] mt-24">Garden Tools Section</h1>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/Uchhero/Project/header/login/login_garden_tools.php'); ?>
        </div>

        <!-- Blog Section  -->
        <div id="blog" class="p-10">
            <h1 class="text-[40px] mt-24">Blog Section</h1>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/Uchhero/Project/header/login/login_blog.php'); ?>
        </div>

    </div>

</body>

</html>