<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Store||Home</title>
    <link rel="icon" href="resource/app-store logo.png" />
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="css/home.css">
</head>

<body>

    <?php include "header2.php"; ?>


    <div class="slider-container">
        <div class="slider">
            <img src="sliderImages/image1.jpg" alt="Slide 1" class="slide">
            <img src="sliderImages/app-store-logo.webp" alt="Slide 2" class="slide">
            <img src="sliderImages/image3.png" alt="Slide 3" class="slide">
            <img src="sliderImages/image4.webp" alt="Slide 4" class="slide">
        </div>
        <a href="#" class="prev-btn" aria-label="Previous slide">&lt;</a>
        <a href="#" class="next-btn" aria-label="Next slide">&gt;</a>
        <div class="slider-nav">
            <span class="slider-nav-item active" data-slide="0" aria-label="Go to slide 1"></span>
            <span class="slider-nav-item" data-slide="1" aria-label="Go to slide 2"></span>
            <span class="slider-nav-item" data-slide="2" aria-label="Go to slide 3"></span>
            <span class="slider-nav-item" data-slide="3" aria-label="Go to slide 4"></span>
        </div>
    </div>



    

    <?php include "footer.php"; ?>



    <script src="bootstrap.js"></script>
    <script src="homescript.js"></script>
</body>

</html>