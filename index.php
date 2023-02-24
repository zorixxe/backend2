<?php include "handy_methods.php" ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dennis Dejtar</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div id="container">
        <?php include "header.php" ?>
        <section>

            <article>
                <h2>Välkommen till dennis dejtar!</h2>
                <?php include "./view_profiles.php" ?>
            </article>

            <article>
                <h2>Login includas nedan</h2>
                <?php include "./view_login.php" ?>
            </article>

        </section>

        <!-- Footern innehåller t.ex. somelänkar och kontaktuppg -->
        <footer>
            Made by Dennis<sup>&#169;</sup>
        </footer>

    </div>
</body>

</html>