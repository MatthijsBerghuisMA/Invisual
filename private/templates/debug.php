<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Work in progress</title>
    <link rel="stylesheet" href="<?=$file_uri?>css/debug.css">
</head>
<body>

    <?php
        $gifs = [
            'https://media.giphy.com/media/6xDZeclUcTli8/giphy.gif',
            'https://media.giphy.com/media/m6F03GjeRPSCY/giphy.gif',
            'https://media.giphy.com/media/nA3sUBbGVAOME/giphy.gif',
            'https://media.giphy.com/media/DM8wv4Ro50O6Q/giphy.gif',
            'https://media.giphy.com/media/TDl5LnnFyZrlC/giphy.gif',
            'https://media.giphy.com/media/aIiqFwRnN8n1S/giphy.gif'
        ];
    ?>

    <form class="login--form" action="<?=$nav_uri?>" method="POST">
        <h2>Work in progress</h2>
        <p>Please login by using force or just a normal password.</p>
        <input name="debug_passw" type="password" class="login__passw"><br>
        <button type="submit" name="debug_submit" class="login__submit">login</button>
    </form>

    <div class="gifs">
        <?php

            foreach ($gifs as $gif) {
                ?>
                    <img class="gifs__img" src="<?=$gif?>" alt="">
                <?php
            }

        ?>
    </div>
</body>
</html>