<html>
    <body>

        <?php
            $subject = htmlspecialchars($_GET['subject']);
            $web = htmlspecialchars($_GET['web']);
            echo "Study $subject at $web.";
        ?>

    </body>
</html>