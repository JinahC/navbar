<?php 
include "functions.php";

if (isset($_POST["user_fname"]) && isset($_POST["user_lname"]) && isset($_POST["user_email"])) {
    $fname = $_POST["user_fname"];
    $lname = $_POST["user_lname"];
    $email = $_POST["user_email"];

    saveNewSignup($fname, $lname, $email);
}
else {
    header("Location: index.php");
    die;
}


include "templates/header.php"; 
?>

<!-- CONTENT -->
<div class="row">
    <div class="col-lg-8 col-sm-12">
        <h1>Welcome to NAVBAR</h1>
        <p>Get ready for the newest bar on the block. Be the first to learn about our <strong>GRAND OPENING</strong> by signing up to join our newsletter, The NAVBAR Journal. You won't want to miss out!</p>
        <h2 class="neon-sign">COMING SOON</h2>
    </div>
    <div class="col-lg-4 col-sm-12">
        <div class="box">
            <h3>You have successfully signed up for</h3>
            <h2>The NAVBAR Journal</h2>
        </div>
    </div>
</div>

<?php include "templates/footer.php"; ?>