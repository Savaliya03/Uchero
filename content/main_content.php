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
            <?php include('content/carousel.php'); ?>
        </div>

        <!-- Image with Links -->
        <?php include('content/img_with_link.php'); ?>

        <!-- Main Content Sections -->

        <!-- Flower Section -->
        <div id="flower" class="p-10">
            <h1 class="text-[40px] mt-24">Flower Section</h1>
            <?php include('header/flower.php'); ?>
        </div>

        <!-- Pot Section -->
        <div id="pot" class="p-10">
            <h1 class="text-[40px] mt-24">Pot Section</h1>
            <?php include('header/pot.php'); ?>
        </div>

        <!-- Fertilizer Section -->
        <div id="fertilizer" class="p-10">
            <h1 class="text-[40px] mt-24">Fertilizer Section</h1>
            <?php include('header/fertilizer.php'); ?>
        </div>

        <!-- Garden Tools Section -->
        <div id="garden-tools" class="p-10">
            <h1 class="text-[40px] mt-24">Garden Tools Section</h1>
            <?php include('header/garden_tools.php'); ?>
        </div>

        <!-- Blog Section  -->
        <div id="blog" class="p-10">
            <h1 class="text-[40px] mt-24">Blog Section</h1>
            <?php include('header/blog.php'); ?>
        </div>

    </div>

</body>

</html>