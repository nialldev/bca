<?php 

/**
 * The template for the home page
 * Theme: bca
 * Author: Niall Tuohy
 
 */

if(is_front_page() || is_home()) {

    get_header('front-page');
 
 }
 
 else {
 
    get_header();
 
 }
 

?>

<main>

    <div class="desktop-header-image-fp">

        <?php if ( get_header_image() ) : ?>

            <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" 
            height="<?php echo absint( get_custom_header()->height ); ?>" 
            alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">

        <?php endif; ?> 

    </div>
    
    <section>
        
        <?php get_sidebar( 'home-top' ); ?>

    </section>

    <section class="home-1-3">

        <div class="home-1">
            
            <?php get_sidebar( 'home-1' ); ?>
        
        </div>
        
        <div class="home-2-3">
            
            <div class="home-2">
            
                <?php get_sidebar( 'home-2' ); ?>
            
            </div>
            
            <div class="home-3">
            
                <?php get_sidebar( 'home-3' ); ?>
            
            </div>
        
        </div>
    
    </section>

    <section class="home-4-5-6">
        
        <div class="home-4">
            
            <?php get_sidebar( 'home-4' ); ?>

        </div>

        <div class="home-5">
            
            <?php get_sidebar( 'home-5' ); ?>

        </div>

        <div class="home-6">
            
            <?php get_sidebar( 'home-6' ); ?>

        </div>
    
    </section>

    <section class="home-7">
        
        <?php get_sidebar( 'home-7' ); ?>

    </section>

    <section class="home-8">
        
        <?php get_sidebar( 'home-8' ); ?>

    </section>

    <?php 
    
        get_footer();

    ?>