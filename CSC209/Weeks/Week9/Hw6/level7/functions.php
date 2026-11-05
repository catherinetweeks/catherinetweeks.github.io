<?php 
function makeDots($images, $slide, $folder) {
    foreach ($images as $index => $image) {
        $number = $index + 1;
        ?>
            <a href="?folder=<?= urlencode($folder) ?>&slide=<?= $number ?>"
            class="dot <?= ($slide == $number) ? 'active' : '' ?>">
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
