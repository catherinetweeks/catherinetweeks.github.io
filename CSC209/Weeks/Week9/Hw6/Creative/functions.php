<?php 
    function makeDots($images, $slide, $folder) {

        $totalSpreads = ceil(count($images) / 2);

        for ($i = 1; $i <= $totalSpreads; $i++) {
            ?>
            <a href="?folder=<?= $folder ?>&slide=<?= $i ?>"
            class="dot <?= ($slide == $i) ? 'active' : '' ?>">
            </a>
            <?php
        }
    }

?>
