<?php 

if ( ! function_exists( 'bca_setup' ) ) :
/**
* Sets up theme defaults and registers support for various WordPress features
*
*  It is important to set up these functions before the init hook so that none of these
*  features are lost.
*
*  @since bca 1.0
*/
function bca_setup() {

    add_theme_support( 'automatic-feed-links' );
    
    register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'bca' ),
    'secondary' => __( 'Secondary Menu', 'bca' )
    ) );
        
    // add_theme_support( 'post-thumbnails' );
    // set_post_thumbnail_size( 200, 200);

    add_theme_support( 'custom-background' );

    $defaults = array(
        
        'width'                  => 1920,
        'height'                 => 585,
    //    'flex-width'             => true,
    //    'flex-height'            => true,
        'uploads'                => true,
        'admin-head-callback'    => 'adminhead_cb',
        'admin-preview-callback'    => 'adminpreview_cb',
        'video'                  => false,
    );
    add_theme_support( 'custom-header', $defaults );
        
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width' => true )
    );

    add_filter( 'get_custom_logo', 'change_logo_class' );


    function change_logo_class( $html ) {

        $html = str_replace( 'custom-logo', 'logo', $html );

        return $html;
    }
        

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

    register_sidebar( array(
            'name'          => __( 'Home Top', 'bca' ),
            'id'            => 'widget-area-1',
            'description'   => __('The content area below the home banner', 'bca'),
            'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-1">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
    ) );

    register_sidebar( array(
        'name'          => __( 'Home 1', 'bca' ),
        'id'            => 'widget-area-2',
        'description'   => __('The content area on the left beneath Home Top on desktop', 'bca'),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ) );  
    register_sidebar( array(
        'name'          => __( 'Home 2', 'bca' ),
        'id'            => 'widget-area-3',
        'description'   => __('The content area to the right of Home 1', 'bca'),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-3">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ) ); 
    register_sidebar( array(
        'name'          => __( 'Home 3', 'bca' ),
        'id'            => 'widget-area-4',
        'description'   => __('The centre content area beneath Home 2', 'mscc'),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ) ); 
    register_sidebar( array(
        'name'          => __( 'Home 4', 'bca' ),
        'id'            => 'widget-area-5',
        'description'   => __('The left content area in centre blue section on homepage', 'mscc'),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-5">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ) ); 
    register_sidebar( array(
        'name'          => __( 'Home 5', 'bca' ),
        'id'            => 'widget-area-6',
        'description'   => __('The centre content area bebeside Home 4', 'bca'),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-6">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ) ); 
    // register_sidebar( array(
    //     'name'          => __( 'Footer Left', 'bca' ),
    //     'id'            => 'widget-area-7',
    //     'description'   => __('The left content area in the footer', 'bca'),
    //     'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-7">',
    //     'after_widget'  => '</div>',
    //     'before_title'  => '<h2>',
    //     'after_title'   => '</h2>',
    // ) ); 
    register_sidebar( array(
        'name'          => __( 'Home 6', 'bca' ),
        'id'            => 'widget-area-7',
        'description'   => __('The right content area beside Home 5', 'bca'),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-7">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ) );
    register_sidebar( array(
        'name'          => __( 'Home 7', 'bca' ),
        'id'            => 'widget-area-8',
        'description'   => __('The centre gallery beneath home blue section', 'bca'),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-8">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ) );     
    register_sidebar( array(
        'name'          => __( 'Home 8', 'bca' ),
        'id'            => 'widget-area-9',
        'description'   => __('The green centre area beneath home gallery', 'bca'),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-9">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ) );     

    register_sidebar( array(
        'name'          => __( 'Footer Left', 'bca' ),
        'id'            => 'widget-area-10',
        'description'   => __('The left content area in the footer', 'bca'),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-10">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ) ); 
    register_sidebar( array(
        'name'          => __( 'Footer Right', 'bca' ),
        'id'            => 'widget-area-11',
        'description'   => __('The right content area in the footer', 'bca'),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-11">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ) ); 
    register_sidebar( array(
        'name'          => __( 'Blog Right Sidebar', 'bca' ),
        'id'            => 'widget-area-12',
        'description'   => __('The right content area beside posts', 'bca'),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-13">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ) ); 
    register_sidebar( array(
        'name'          => __( 'Site Top Right', 'bca' ),
        'id'            => 'widget-area-14',
        'description'   => __('The content at the top right of the website', 'bca'),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-14">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
) );
};

endif;

add_action( 'after_setup_theme', 'bca_setup' );


function my_theme_scripts(){
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );

// wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/functions.js', array(), '1.1', true );
};

add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );


//allow html in excerpts

function new_wp_trim_excerpt($text) {
    $raw_excerpt = $text;
    if ( '' == $text ) {
        $text = get_the_content('');

        $text = strip_shortcodes( $text );

        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]>', $text);

        $text = strip_tags($text, '<p><table><tbody><tr><th><td><blockquote><q> 
    <cite><a><strong><em><br><ol><ul><li><img><figure><figcaption>');  
        
        $excerpt_length = apply_filters('excerpt_length', 55);
        
        $excerpt_more = apply_filters('excerpt_more', '');
        
        $words = preg_split('/[\n|\r|\t|\s]/', $text, $excerpt_length 
    + 1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE );
        if ( count($words) > $excerpt_length ) {
            array_pop($words);
            $text = implode(' ', $words);
            $text = force_balance_tags( $text );
            $text = $text . $excerpt_more;
        } else {
            $text = implode(' ', $words);
        }
    }
    
    return apply_filters('new_wp_trim_excerpt', $text, $raw_excerpt);

}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'new_wp_trim_excerpt');

if ( ! function_exists( 'custom_add_excerpts_get_more_link' ) ) {

function custom_add_excerpts_get_more_link( $post_excerpt ) {
    if ( ! is_admin() ) {
        $dots = '...';
        $post_excerpt = $post_excerpt . $dots . '<p><a class="btn btn-secondary" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">Read More</a></p>';
    }
    return $post_excerpt;
}
}
add_filter( 'excerpt_more', 'custom_add_excerpts_get_more_link' );

?>