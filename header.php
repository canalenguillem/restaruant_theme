<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <?php
    wp_head();
    ?>
</head>

<body>
    <header class="site-header">
        <div class="logo">
            <a href="<?=esc_url(home_url('/'))?>">
                <img class="logo-image" src="<?= get_template_directory_uri() ?>/images/logo.png" alt="logo">
            </a>
        </div>
    </header>