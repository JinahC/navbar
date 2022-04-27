<?php
include "database.php";

if (isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["email"])) {
    $first_name = htmlspecialchars($_POST["fname"]);
    $last_name = htmlspecialchars($_POST["lname"]);
    $email = htmlspecialchars($_POST["email"]);

    database_connect();
    
    if (database_addSignUp($first_name, $last_name, $email))
        echo "<h3 class='text-center'>Thank you for subscribing to the <span class='font-brand'>navbar</span></h3>";
    else
        echo "<h3 class='text-center'>Something went wrong. Please try again.</h3>";

    database_close();
}