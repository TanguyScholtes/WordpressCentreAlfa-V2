<?php //header.php ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="<?php bloginfo("language"); ?>" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="<?php bloginfo("language"); ?>" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="<?php bloginfo("language"); ?>" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="<?php bloginfo("language"); ?>" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo("charset"); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon.png" />
        <title><?php wp_title(' - ', true, right); ?><?php bloginfo("title"); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        
        <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
        
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div class="wrapper header__wrapper">
            <header class="header">
                <p class="title site__header">
                    <a class="site__header__link" href="<?php echo home_url( '/' ); ?>">
                        <img class="site__logo" src="<?php bloginfo('template_url'); ?>/img/AlfaLogo.svg" title="Logo Centre Alfa" alt="Logo Centre Alfa">
                        <span class="site__title"><?php bloginfo("title"); ?> <span class="site__subtitle">ASBL</span></span>
                    </a>
                </p>
                <?php wp_nav_menu( ['theme_location' => 'header-menu',
                                    'container'      => 'nav',
                                    'container_class' => 'top__menu menu',
                                    'menu_class'      => 'top__menu__list',
                                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                                   ] ); ?>
            </header><!-- .header -->
        </div><!-- .wrapper .header__wrapper -->

        <div class="wrapper main__wrapper">
            
    <?php get_sidebar(); ?>