<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="header-container">
        <?php echo do_blocks( '<!-- wp:pattern {"slug":"esaa/main-header"} /-->' ); ?>
        <?php
        if ( has_nav_menu( 'main-menu' ) ) { 
            wp_nav_menu( array( 
                'theme_location' => 'main-menu', 
                'container'      => 'nav', 
                'container_id'   => 'main-navigation', 
                'menu_class'     => 'main-menu-list', 
            ) ); 
        } 
        ?>
    </div>
</header>
