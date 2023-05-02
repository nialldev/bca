<?php 

/**
 * The template for the front page header
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
            <div class="mobile-header">
            
                <div class="mobile-header-fp-bg">
                
                    <div class="mobile-logo-container-fp">

                        <?php 

                            if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                            }; 
                            
                        ?>

                    </div>

                    <div class="mobile-site-title-container-fp">

                        <h1 class="mobile-site-title">

                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

                                <?php bloginfo( 'name' ); ?>

                            </a>

                        </h1>  

                    </div>
                    
                </div> <!-- .mobile-header-bg -->
                
                <!-- Primary Navigation -->

                <div class="mobile-primary-nav-container navBtn">

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
                                    'container'       => 'nav',
                                    'container_class' => 'mobile-primary-nav',
                                    'menu_class'      => 'mobile-primary-navbar',
                                    'menu_id'         => 'mobile-primary-navbar',
                                )

                            ); ?>    

                        </div> <!-- .modal-content -->

                    </div> <!-- .modal -->

                </div> <!-- .mobile-primary-nav-container -->
                    
            </div><!-- .mobile-header -->
            
        <!-- Header for desktop -->

        <div class="desktop-header-fp">

            <div class="desktop-header-fp-bg">
            
                <div class="desktop-logo-container">

                    <?php 

                        if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                        }; 
                    ?>

                </div>

                <div class="desktop-site-title-container-fp">

                    <h1 class="desktop-site-title-fp">

                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

                            <?php bloginfo( 'name' ); ?>

                        </a>

                    </h1>  

                </div>

                <div class="desktop-top-right">

                    <?php get_sidebar( 'site-top-right' ); ?>

                </div>
                
                <div class="desktop-main-nav-fp">
                
                    <?php wp_nav_menu(

                        array(
                            'theme_location'  => 'primary',
                            'container'       => 'nav',
                            'container_class' => 'desktop-primary-nav',
                            'menu_class'      => 'desktop-navbar',
                            'menu_id'         => 'desktop-navbar',
                        )

                    ); ?>   
                
                </div>

                
                
                            
            </div><!-- .desktop-header-fp-bg -->
        
            <div class="desktop-header-image-fp">

                <?php if ( get_header_image() ) : ?>

                    <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" 
                    height="<?php echo absint( get_custom_header()->height ); ?>" 
                    alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">

                <!-- </a> -->

                <?php endif; ?> 

            </div>
            
        </div><!-- .desktop-header-fp -->

    </header>
