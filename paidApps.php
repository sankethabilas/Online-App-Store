<!DOCTYPE html>
<html>
<head>
    
  <title>Paid App Cards</title>
  <link rel="stylesheet" href="css/paidApps.css">
  <link rel="icon" href="resource/app-store logo.png" />
       
</head>
<body>

<a href="payment_read.php" class="top-right-button">More</a>

<?php
include "header2.php"

?>

<br><br><br>
<center>
    <div class="search-container">
        <input type="text" class="search-input" placeholder="Search" aria-label="Search">
        <button type="button" class="search-button">Search</button><br>
    </div>
    <br>
  
    <div class="app-container">
        <div class="app-card">
            <img src="images/THREEMA.png" alt="PhotoPro App" class="app-image">
            <div class="app-info">
                <h2 class="app-name">Threema</h2>
                <p class="app-category">Communication</p>
                <p class="app-price">LKR 2050.00</p>
                <a href="payment.php" class="buy-button">Buy</a>
            </div>
        </div>

        <div class="app-card">
            <img src="images/gamebooster-removebg-preview.png" alt="FitTrack App" class="app-image">
            <div class="app-info">
                <h2 class="app-name">Game Booster Pro</h2>
                <p class="app-category">Tools</p>
                <p class="app-price">LKR 60.00</p>
                <a href="payment.php" class="buy-button">Buy</a>
            </div>
        </div>
        <div class="app-card">
            <img src="images/mobilesheets.png" alt="FitTrack App" class="app-image">
            <div class="app-info">
                <h2 class="app-name">MobileSheets</h2>
                <p class="app-category">Music & Audio</p>
                <p class="app-price">LKR 5075.00</p>
                <a href="payment.php" class="buy-button">Buy</a>
            </div>
        </div>
       
        <div class="app-card">
            <img src="images/unnamed.webp" alt="MindMaster App" class="app-image">
            <div class="app-info">
                <h2 class="app-name">Simple Gallery Pro</h2>
                <p class="app-category">Photography</p>
                <p class="app-price">LKR 151.00</p>
                <a href="payment.php" class="buy-button">Buy</a>
            </div>
        </div>
        

        <div class="app-card">
            <img src="images/unnamed (3).png" alt="FitTrack App" class="app-image">
            <div class="app-info">
                <h2 class="app-name">Penly</h2>
                <p class="app-category">Productivity</p>
                <p class="app-price">LKR 1850.00</p>
                <a href="payment.php" class="buy-button">Buy</a>
            </div>
        </div>
       
       
        <div class="app-card">
            <img src="images/era.png" alt="FitTrack App" class="app-image">
            <div class="app-info">
                <h2 class="app-name">ReadEra Premium</h2>
                <p class="app-category">Books & Reference</p>
                <p class="app-price">LKR 3500.00</p>
                <a href="payment.php" class="buy-button">Buy</a>
            </div>
        </div>
    </div>
    <br>

    <?php
    
    include "footer.php"
    
    ?>
</body>
</html>