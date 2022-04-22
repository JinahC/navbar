<?php include "templates/header.php" ?>

<!-- CONTENT -->
<div class=" billboard billboard-full" id="billboard-home">
    <div class="billboard-text">
        <h1 class="font-display">welcome to the</h1>
        <h1 class="font-brand">navbar</h1>
    </div>
</div>
<div class="container my-4">
    <div class="row align-items-center">
        <hr class="col">
        <div class="col-lg-6 col-sm-12 my-4">  
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
<div class="container"></div>
    
<div class="bg-ocean" id="newsletter">
    <form action="" method="POST" class="pt-4">
        <h3 class="text-center">subscribe to our newsletter</h3>
        <h3 class="font-brand text-center text-capitalize">the <span class="text-uppercase">navbar</span> journal</h3>
        <label for="fname">first name</label><br>
        <input type="text" name="fname" id="fname"><br><br>
        <label for="lname">last name</label><br>
        <input type="text" name="lname" id="lname"><br><br>
        <label for="email">email</label><br>
        <input type="text" name="email" id="email"><br><br>
        <input class="btn" type="submit" name="submit" value="subscribe">
    </form>
</div>




<?php include "templates/footer.php" ?>
