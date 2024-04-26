<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="/styles.css" rel="stylesheet" type="text/css">
        <title>Фотогалерея</title>
    </head>
    <body>
        <h1>Фотогалерея</h1>
        <section id="gallery">
            <?php
                $cnt = \Models\Image::get_count();
                for ($i = 0; $i < $cnt; $i++) {
            ?>
            <a href="/<?php echo $i ?>/">
                <img src="/images/<?php echo \Models\Image::get_image($i)['src'] ?>"
                title="<?php echo \Models\Image::get_image($i)['desc'] ?>">
            </a>
            <?php } ?>
        </section>
    </body>
</html>