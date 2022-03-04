<?php include "templates/header.php" ?>

<!-- CONTENT -->
<div class="container-h">
<div class="bg-img"></div>
<div class="content">
    <div class="row">
        <div class="col-lg-8 col-sm-12">
            <h1>Welcome to <span class="brand-font">NAVBAR</span></h1>
            <p>Get ready for the newest bar on the block. Be the first to learn about our <strong>GRAND OPENING</strong> by signing up to join our newsletter, The NAVBAR Journal. You won't want to miss out!</p>
            <h2 class="neon-sign">COMING SOON</h2>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="flex justify-content-center my-2">
                <form action="signup.php" method="POST">
                    <h3 class="brand-font form-header">The NAVBAR Journal</h3>
                    <label for="first_name">First Name</label><br>
                    <input type="text" id="first_name" name="user_fname" required><br><br>
                    <label for="last_name">Last Name</label><br>
                    <input type="text" id="last_name" name="user_lname" required><br><br>
                    <label for="email">Email</label><br>
                    <input type="text" id="email" name="user_email" required><br><br>
                    <input type="submit" name="submit" value="Sign Up!">
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?php include "templates/footer.php" ?>
