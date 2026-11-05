<?php 
    function makeDots($images, $slide) {
        foreach ($images as $index => $image) {
            ?>
            <a href="?slide=<?= $index + 1 ?>"
            class="dot <?= ($slide == $index + 1) ? 'active' : '' ?>">
            </a>
            <?php
        }
    }

?>
