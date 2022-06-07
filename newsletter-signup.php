<?php
include "functions/database.php";

if (isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["email"])) {
    $first_name = htmlspecialchars($_POST["fname"]);
    $last_name = htmlspecialchars($_POST["lname"]);
    $email = htmlspecialchars($_POST["email"]);

    database_connect();
    
    if (database_addSignUp($first_name, $last_name, $email)) {
        include "templates/header.php"; ?>
        <div class="container py-4 my-3 overlap-container">
            <div class="bg-ocean overlap-text-box p-5">
                <h2 class="overlap-text">Thank you for subscribing to the <span class="font-brand text-center text-capitalize">the <span class="text-uppercase">navbar</span> journal</span>, <?php echo $first_name; ?>!</h2>
            </div>
            <div class="overlap-img-box">
                <img src="img/newsletter-img.jpg" class="overlap-img">
            </div>
        </div>
        <?php include "templates/footer.php";
    }
    else {
        include "templates/header.php"; ?>
        <div class="container py-4">
            <h3 class='text-center'>Something went wrong. Please <a href="../navbar/index.php#newsletter">try again</a>.</h3>
        </div>
        <?php include "templates/footer.php";
    }

    database_close();
}


