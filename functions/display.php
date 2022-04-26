<?php
include("database.php");

// output menu items to the screen
function display_menu() {
    database_connect();

    echo "
    <h2 class='font-brand'>menu</h3>
    <div class='row'>
        <div class='col-lg-6'>
            <h3 class='font-display'>food</h3>
    ";

    $results = database_grabMenuItems("food");

    while ($food_items = mysqli_fetch_assoc($results)) {
        echo "
        <div class='menu-item'>
            <p class='menu-item-name'>{$food_items['item_name']}</p>
            <p class='menu-item-ingredients'>{$food_items['ingredients']}</p>
            <p class='menu-item-price'>{$food_items['price']}</p>
        </div>
        ";
    }

    echo "
    </div>
    <div class='col-lg-6'>
        <h3 class='font-display'>drinks</h3>
    ";

    $results = database_grabMenuItems("drinks");

    while ($food_items = mysqli_fetch_assoc($results)) {
        echo "
        <div class='menu-item'>
            <p class='menu-item-name'>{$food_items['item_name']}</p>
            <p class='menu-item-ingredients'>{$food_items['ingredients']}</p>
            <p class='menu-item-price'>{$food_items['price']}</p>
        </div>
        ";
    }

    echo "</div></div>";
    database_close();
}

function displayBoxes() {
    return;
}

// output events to the screen
function display_events() {
    database_connect();

    $results = database_grabEvents();

    echo "<div class='row'>";

    while ($events = mysqli_fetch_assoc($results)) {
        echo "
        <div class='col-lg-4 col-md-6 col-sm-12 my-3 text-center'>
            <img src='{$events['event_img']}' class='event-img'>
            <h3 class='font-brand'>{$events['event_name']}</h3>
            <p class='font-display'>{$events['event_day']} @ {$events['event_time']}</p>
        </div>
        ";
    }

    echo "</div>";

    database_close();
}