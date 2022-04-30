<?php 
include "templates/header.php"; 
include "functions/display.php";
?>

<!-- CONTENT -->
<div class=" billboard billboard-full" id="billboard-home">
    <div class="billboard-text">
        <h1 class="font-display">welcome to the</h1>
        <h1 class="font-brand">navbar</h1>
    </div>
</div>

<!-- about snippet -->
<div class="container my-4">
    <div class="row align-items-center">
        <hr class="col">
        <div class="col-lg-6 col-md-9 col-sm-12 my-4">  
            <p class="font-display filler-text text-left">explore the</p>
            <p class="font-display filler-text text-right">unknown</p>
        </div>
        <hr class="col">
    </div>
    <p class="text-center">We’re the newest and bluest bar on the scene. Discover the mysteries of a hidden gem on the eastern seaboard. You can enjoy a night under the stars on the roof or party until the break of dawn below deck. Either way, you’re bound to make waves at the <span class="font-brand">NAVBAR</span>.</p>
    <a class="btn d-block my-3" href="about.php">learn more</a>
</div>
<div class="banner">
    <img class="banner-img" style="width: 100%;" src="img/bar-bg.jpg">
</div>

<!-- menu -->
<div class="bg-ocean py-4" id="menu">
    <div class="container text-center">
        <?php display_menu(); ?>
    </div>
</div>

<!-- boxes -->
<div class="container p-4">
    <div class="row">
        <!-- book a table -->
        <div class="col-lg-4 col-sm-12 px-0 pb-4">
            <div class="box">
                <div class="box-img-border">
                    <img class="box-img d-lg-none d-sm-block" src="img/boxes-book.jpg">
                </div>
                <div class="box-text">
                    <h3 class="box-title font-brand">book a table</h3>
                    <hr class="box-hr">
                    <p class="box-desc">reserve a seat for your trip to the bar</p>
                    <a href="#" class="btn d-block">reserve</a>
                </div>
            </div>
        </div>

        <div class="col-lg-8 col-sm-12 d-lg-block d-none p-0">
            <img class="box-img-adj" src="img/boxes-book.jpg">
        </div>
        <!-- plan a party -->
        <div class="col-lg-8 col-sm-12 d-lg-block d-none p-0">
            <img class="box-img-adj" src="img/boxes-party.jpg">
        </div>

        <div class="col-lg-4 col-sm-12 px-0 pb-4">
            <div class="box">
                <div class="box-img-border">
                    <img class="box-img d-lg-none d-sm-block" src="img/boxes-party.jpg">
                </div>
                <div class="box-text">
                    <h3 class="box-title font-brand">plan a party</h3>
                    <hr class="box-hr">
                    <p class="box-desc">have a stellar party at our bar</p>
                    <a href="#" class="btn d-block">plan</a>
                </div>
            </div>
        </div>
        <!-- events -->
        <div class="col-lg-4 col-sm-12 px-0 pb-4">
            <div class="box">
                <div class="box-img-border">
                    <img class="box-img d-lg-none d-sm-block" src="img/boxes-events.jpg">
                </div>
                <div class="box-text">
                    <h3 class="box-title font-brand">events</h3>
                    <hr class="box-hr">
                    <p class="box-desc">bottoms up to a good time</p>
                    <a href="events.php" class="btn d-block">socialize</a>
                </div>
            </div>
        </div>

        <div class="col-lg-8 col-sm-12 d-lg-block d-none p-0">
            <img class="box-img-adj" src="img/boxes-events.jpg">
        </div>
        <!-- store -->
        <div class="col-lg-8 col-sm-12 d-lg-block d-none p-0">
            <img class="box-img-adj" src="img/boxes-store.jpg">
        </div>

        <div class="col-lg-4 col-sm-12 px-0 pb-4">
            <div class="box">
                <div class="box-img-border">
                    <img class="box-img d-lg-none d-sm-block" src="img/boxes-store.jpg">
                </div>
                <div class="box-text">
                    <h3 class="box-title font-brand">store</h3>
                    <hr class="box-hr">
                    <p class="box-desc">bring a piece of the <span class="font-brand">navbar</span> home</p>
                    <a href="store.php" class="btn d-block">shop</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
<!-- newsletter -->
<div class="bg-ocean" id="newsletter">
    <form action="newsletter-signup.php" method="POST" class="pt-4">
        <h3 class="text-center">subscribe to our newsletter</h3>
        <h3 class="font-brand text-center text-capitalize">the <span class="text-uppercase">navbar</span> journal</h3>
        
        <label for="fname">first name</label><br>
        <input type="text" name="fname" id="fname"><br>
        <span class="input-warning" id="input-0"></span><br><br>
        
        <label for="lname">last name</label><br>
        <input type="text" name="lname" id="lname"><br>
        <span class="input-warning" id="input-1"></span><br><br>
        
        <label for="email">email</label><br>
        <input type="text" name="email" id="email"><br>
        <span class="input-warning" id="input-2"></span><br><br>

        <input class="btn" type="submit" name="submit" id="newsletter-submit" value="subscribe" disabled>
    </form>
</div>

<div class="bg-ocean">
    <?php include "templates/footer.php" ?>
</div>
