<!--
    TODO: – Add title
    – Add keywords & description
    - Run https://realfavicongenerator.net/ for favicons, tile & touchicons
    – Run https://realfavicongenerator.net/social for og image & info
    - Edit privacy info
    - Create E-mail-address datenschutz@
    – Host fonts locally with https://google-webfonts-helper.herokuapp.com/fonts
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Ben bakes</title>
        
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#2e2e2e">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#2e2e2e">

        <?php wp_head(); ?>
    </head>
    
    <body>
    <?php wp_body_open(); ?>

        <div class="hide-overflow-x">
            <header>
                <nav>
                    <button id="hamburger" class="closed">
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                        <span class="line-3"></span>
                    </button>


                    <?php wp_nav_menu( array( 
                        'theme_location' => 'mainnavigaton',
                        'container_class' => 'transition'
                        ) ); ?> 
                </nav>
                <div class="hero-container">
                    <p class="hero-lines">Welcome to</p>
                    <h1>Ben bakes</h1>
                    <p>Where fresh cakes, bread and coffee<br>are made daily<br>with love</p>
                </div>
            </header>