<?php 

/**
 * The template for the main header
 * Theme: bca
 * Author: Niall Tuohy
 */

?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <meta name="description" content="<?php bloginfo('description'); ?>" />
        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>
        
        <header>

            <!-- Header for mobile -->

            <div class="mobile-header-bg">
            
                <div class="mobile-logo-container">

                    <?php 

                        if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                        }; 
                        
                    ?>

                </div>

                <div class="mobile-site-title-container">

                    <h1 class="mobile-site-title">

                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

                            <?php bloginfo( 'name' ); ?>

                        </a>

                    </h1>  

                </div>
                
            </div> <!-- .mobile-header-bg -->
            
            <!-- Primary Navigation -->

            <div class="mobile-primary-nav-container" id="navBtn">

                    <a href="javascript:void(0)">

                            <div class="nav-icon">

                                <div class="burger-icon"></div>
                                <div class="burger-icon"></div>
                                <div class="burger-icon"></div>

                            </div>

                    </a>
                
                    <div class="modal" id="modal">
                        
                        <div class="modal-content">

                            <span id="close">&times;</span>
                            
                            <?php wp_nav_menu(

                                array(
                                    'theme_location'  => 'primary',
                                    'container'       => 'mobile-nav',
                                    'container_class' => 'mobile-primary-nav',
                                    'menu_class'      => 'mobile-navbar',
                                    'menu_id'         => 'mobile-navbar',
                                )

                            ); ?>    

                        </div> <!-- .modal-content -->

                    </div> <!-- .modal -->

                </div> <!-- .primary-nav-container -->
                
                
            <!-- Header for desktop -->

            <div class="desktop-header">

                <div class="desktop-logo-container">

                    <?php 

                        if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                        }; 
                    ?>

                </div>

                <div class="desktop-site-title-container">

                    <h1 class="desktop-site-title">

                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

                            <?php bloginfo( 'name' ); ?>

                        </a>

                    </h1>  

                </div>

                <div class="desktop-main-nav">
                
                    <?php wp_nav_menu(

                        array(
                            'theme_location'  => 'primary',
                            'container'       => 'desktop-nav',
                            'container_class' => 'desktop-primary-nav',
                            'menu_class'      => 'desktop-navbar',
                            'menu_id'         => 'desktop-navbar',
                        )

                    ); ?>   
                
                </div>
            
            </div><!-- .desktop-header -->

        </header>
