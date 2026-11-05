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

    function getCaption($images, $slide) {
        $rawPath = $images[$slide-1];
        $fileName = basename($rawPath);
        $captionText = ucfirst(str_replace(".jpeg", "", $fileName));
        return "<p>" . $captionText . "</p>";
    }
?>
