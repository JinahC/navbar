<?php
include("database.php");

// output menu items to the screen
function display_menu() {
    return;
}

function displayBoxes() {
    return;
}

// output events to the screen
function display_events() {
    database_connect();

    $results = database_grabEvents();

    echo "<div class='row'>";

    while ($events=mysqli_fetch_assoc($results)) {
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