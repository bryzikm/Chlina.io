<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Chlina | <?php the_title(); ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;500;600&display=swap" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/style/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/style/grid.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<header class="header section" id="header-id">
    <div class="container">
        <a class="logo" href="https://chlina.io">Chlina</a>
        <nav class="nav">
            <button class="hamburger" onclick="toggleMobileMenu()"></button>
            <ul class="nav-list" id="mobile-menu">
                <li class="nav-item">
                    <a class="nav-link" href="/o-chlinie">O Chline</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/historia">Historia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/Moja-Chlina-103193468648825" target="_blank">Moja Chlina</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#map">Zapraszamy!</a>
                </li>
            </ul>
        </nav>
    </div>
</header>