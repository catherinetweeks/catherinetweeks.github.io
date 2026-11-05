<?php
    function extractFolderNumber($path) {
        $folders = explode("/", $path);
        $secondToLast = $folders[count($folders)-2];
        $weekNo = substr($secondToLast, -1);

        if (is_numeric($weekNo) == "true") {
            return $weekNo;
        } else {
            return "Week number not found!";
        }
    }
?>