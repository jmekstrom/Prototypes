<?php
$image = glob("images/*.jpg");
?>

<div id="image_container">
    <?php
    for ($i = 0; $i < count($image); $i++) {
        echo "<img src=\"$image[$i]\">";
    }
    ?>
</div>
