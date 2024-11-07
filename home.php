<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Store || Home</title>
    <link rel="icon" href="resource/app-store logo.png" />
    <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="css/home.css">
  
</head>

<body>
    <?php include "header2.php"; ?>

    <div class="slider-container">
        <div class="slider">

            <img src="images/app store image.jpg" alt="Slide 1" class="slide">
            <img src="sliderImages/12-App-Store-apps-1920x702.jpg" alt="Slide 2" class="slide">
            <img src="sliderImages/pexels-rccbtn-15406295.jpg" alt="Slide 3" class="slide">
            <img src="sliderImages/pexels-sanketgraphy-16229746.jpg" alt="Slide 4" class="slide">
        </div>
        <a href="#" class="prev-btn" aria-label="Previous slide">&lt;</a>
        <a href="#" class="next-btn" aria-label="Next slide">&gt;</a>
    </div>

    

    <main class="container">
        <section>
            <h1>Featured Apps</h1>
            <br>
            <div class="grid grid-3">
                <div class="card">
                    <img src="images/f3.jpg " width="500px" height="250px">
                    <div class="card-content">
                        <h3>Vedio Editor</h3>
                        <p>Discover the power of productivity</p>
                        <a href="#" class="buton">Download Now</a>
                    </div>
                </div>
                
                <div class="card">
                    <img src="images/edit.jpg" width="500px" height="250px">
                    <div class="card-content">
                        <h3>Photo Editor</h3>
                        <p>Discover the power of productivity</p>
                        <a href="#" class="buton">Download Now</a>
                    </div>
                </div>
                <div class="card">
                    <img src="images/record.jpg" width="500px" height="250px">
                    <div class="card-content">
                        <h3>Voice Editor</h3>
                        <p>Discover the power of productivity</p>
                        <a href="#" class="buton">Download Now</a>
                    </div>
                </div>

            </div>
        </section>
        <br><br>
        </section>
            <h1>Featured Games</h1>
            <br>
            <div class="grid grid-3">
                <div class="card">
                    <img src="images/pubg.jpg" width="500px" height="250px">
                    <div class="card-content">
                        <h3>PUBG</h3>
                        <p>Discover the power of productivity</p>
                        <a href="#" class="buton">Download Now</a>
                    </div>
                </div>
                
                <div class="card">
                    <img src="images/cod.jpg" width="500px" height="250px">
                    <div class="card-content">
                        <h3>Call Of Duty</h3>
                        <p>Discover the power of productivity</p>
                        <a href="#" class="buton">Download Now</a>
                    </div>
                </div>
                <div class="card">
                    <img src="images/coc.jpg" width="500px" height="250px">
                    <div class="card-content">
                        <h3>Clash of Clans</h3>
                        <p>Discover the power of productivity</p>
                        <a href="#" class="buton">Download Now</a>
                    </div>
                </div>

            </div>
        </section>







    </main>
    <br><br><br><br><br>

    <?php include "footer.php"; ?>

    <script src="bootstrap.js"></script>
    <script src="homescript.js"></script>
</body>

</html>
