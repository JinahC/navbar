<?php 
include "templates/header.php"; 
include "functions/display.php";
?>

<!-- billboard -->
<div class=" billboard billboard-half" id="billboard-events">
    <div class="billboard-text">
        <h1 class="font-brand">events</h1>
    </div>
</div>

<!-- events -->
<div class="container my-4">
    <?php display_events(); ?>
</div>

<?php include "templates/footer.php";