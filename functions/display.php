<?php

function saveNewSignup($fname, $lname, $email) {
    $file = fopen("signups.txt", "a");
    fwrite($file, $fname . " " . $lname . " " . $email . "\n");

    fclose($file);
}

function displayMenu() {
    return;
}

function displayBoxes() {
    return;
}