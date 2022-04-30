<?php 
include "templates/header.php"; 
include "functions/display.php"
?>

<!-- billboard -->
<div class=" billboard billboard-half" id="billboard-store">
    <div class="billboard-text">
        <h1 class="font-brand">store</h1>
    </div>
</div>

<!-- store items -->
<div class="container py-3">
    <?php display_store(); ?>
</div>


<?php include "templates/footer.php";