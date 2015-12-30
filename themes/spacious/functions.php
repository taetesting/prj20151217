<?php
/**
 * Spacious functions related to defining constants, adding files and WordPress core functionality.
 *
 * Defining some constants, loading all the required files and Adding some core functionality.
 * @uses add_theme_support() To add support for post thumbnails and automatic feed links.
 * @uses register_nav_menu() To add support for navigation menu.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
    $content_width = 700;

add_action( 'after_setup_theme', 'spacious_setup' );
/**
 * All setup functionalities.
 *
 * @since 1.0
 */
if( !function_exists( 'spacious_setup' ) ) :
function spacious_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_theme_textdomain( 'spacious', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // This theme uses Featured Images (also known as post thumbnails) for per-post/per-page.
    add_theme_support( 'post-thumbnails' );

   // Supporting title tag via add_theme_support (since WordPress 4.1)
   add_theme_support( 'title-tag' );

    // Registering navigation menus.
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu','spacious' ),
        'footer'    => __( 'Footer Menu','spacious' )
    ) );

    // Cropping the images to different sizes to be used in the theme
    add_image_size( 'featured-blog-large', 750, 350, true );
    add_image_size( 'featured-blog-medium', 270, 270, true );
    add_image_size( 'featured', 642, 300, true );
    add_image_size( 'featured-blog-medium-small', 230, 230, true );

    // Setup the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'spacious_custom_background_args', array(
        'default-color' => 'eaeaea'
    ) ) );

    // Adding excerpt option box for pages as well
    add_post_type_support( 'page', 'excerpt' );

   /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
   add_theme_support('html5', array(
       'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
   ));
}
endif;

/**
 * Define Directory Location Constants
 */
define( 'SPACIOUS_PARENT_DIR', get_template_directory() );
define( 'SPACIOUS_CHILD_DIR', get_stylesheet_directory() );

define( 'SPACIOUS_INCLUDES_DIR', SPACIOUS_PARENT_DIR. '/inc' );
define( 'SPACIOUS_CSS_DIR', SPACIOUS_PARENT_DIR . '/css' );
define( 'SPACIOUS_JS_DIR', SPACIOUS_PARENT_DIR . '/js' );
define( 'SPACIOUS_LANGUAGES_DIR', SPACIOUS_PARENT_DIR . '/languages' );

define( 'SPACIOUS_ADMIN_DIR', SPACIOUS_INCLUDES_DIR . '/admin' );
define( 'SPACIOUS_WIDGETS_DIR', SPACIOUS_INCLUDES_DIR . '/widgets' );

define( 'SPACIOUS_ADMIN_IMAGES_DIR', SPACIOUS_ADMIN_DIR . '/images' );
define( 'SPACIOUS_ADMIN_CSS_DIR', SPACIOUS_ADMIN_DIR . '/css' );


/**
 * Define URL Location Constants
 */
define( 'SPACIOUS_PARENT_URL', get_template_directory_uri() );
define( 'SPACIOUS_CHILD_URL', get_stylesheet_directory_uri() );

define( 'SPACIOUS_INCLUDES_URL', SPACIOUS_PARENT_URL. '/inc' );
define( 'SPACIOUS_CSS_URL', SPACIOUS_PARENT_URL . '/css' );
define( 'SPACIOUS_JS_URL', SPACIOUS_PARENT_URL . '/js' );
define( 'SPACIOUS_LANGUAGES_URL', SPACIOUS_PARENT_URL . '/languages' );

define( 'SPACIOUS_ADMIN_URL', SPACIOUS_INCLUDES_URL . '/admin' );
define( 'SPACIOUS_WIDGETS_URL', SPACIOUS_INCLUDES_URL . '/widgets' );

define( 'SPACIOUS_ADMIN_IMAGES_URL', SPACIOUS_ADMIN_URL . '/images' );
define( 'SPACIOUS_ADMIN_CSS_URL', SPACIOUS_ADMIN_URL . '/css' );

/** Load functions */
require_once( SPACIOUS_INCLUDES_DIR . '/custom-header.php' );
require_once( SPACIOUS_INCLUDES_DIR . '/functions.php' );
require_once( SPACIOUS_INCLUDES_DIR . '/customizer.php' );
require_once( SPACIOUS_INCLUDES_DIR . '/header-functions.php' );

require_once( SPACIOUS_ADMIN_DIR . '/meta-boxes.php' );

/** Load Widgets and Widgetized Area */
require_once( SPACIOUS_WIDGETS_DIR . '/widgets.php' );

/*
 * Adding Admin Menu for theme options
 */
add_action( 'admin_menu', 'spacious_theme_options_menu' );
function spacious_theme_options_menu() {
   add_theme_page( 'Theme Options', 'Theme Options', 'manage_options', 'spacious-theme-options', 'spacious_theme_options' );
}

function spacious_theme_options() {
   if ( !current_user_can( 'manage_options' ) )  {
      wp_die( __( 'You do not have sufficient permissions to access this page.', 'spacious' ) );
   } ?>
   <h1 class="spacious-theme-options"><?php _e( 'Theme Options', 'spacious' ); ?></h1>
   <?php
   printf( __('<p style="font-size: 16px; max-width: 800px";>As our themes are hosted on WordPress repository, we need to follow the WordPress theme guidelines and as per the new guiedlines we have migrated all our Theme Options to Customizer.</p><p style="font-size: 16px; max-width: 800px";>We too think this is a better move in the long run. All the options are unchanged, it is just that they are moved to customizer. So, please use this <a href="%1$s">link</a> to customize your site. If you have any issues then do let us know via our <a href="%2$s">Contact form</a></p>', 'spacious'),
      esc_url(admin_url( 'customize.php' ) ),
      esc_url('http://themegrill.com/contact/')
   );
}

/**
 * Proper way to enqueue scripts and styles
 */
function spacious_swipper_script() {
    wp_enqueue_style( 'style-swipper', get_template_directory_uri() . '/css/swiper.min.css' );
    wp_enqueue_script( 'script-swipper', get_template_directory_uri() . '/js/swiper.min.js' );
}

add_action( 'wp_enqueue_scripts', 'spacious_swipper_script' );

function spacious_fancybox_script() {
    //source/jquery.fancybox.js?v=2.1.5
    //source/jquery.fancybox-buttons.css
    wp_enqueue_script( 'script-fancybox-js', get_template_directory_uri() . '/js/jquery.fancybox.js' );
    wp_enqueue_style( 'style-fancybox-css', get_template_directory_uri() . '/css/jquery.fancybox.css' );

}
add_action( 'wp_enqueue_scripts', 'spacious_fancybox_script' );

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
    echo    '<style>
                .post-type-gallery table.media .column-dimensions {
                    width: 10% !important;
                }
            </style>';
}

// == SHORTCODE FOR GALLERY
add_shortcode( 'print_gllr', 'x_get_gallery_photo_list' );

if ( ! function_exists ( 'x_get_gallery_photo_list' ) ) {
    function x_get_gallery_photo_list( $attr ) {
        global $gllr_options;
        extract( shortcode_atts( array(
                'id'        =>  '',
                'display'   =>  'full',
                'cat_id'    =>  ''
            ), $attr ) 
        );
        ob_start();
        if ( empty( $gllr_options ) )
            $gllr_options = get_option( 'gllr_options' );
        require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
        
        if ( ! empty( $cat_id ) && ( is_plugin_active( 'gallery-categories/gallery-categories.php' ) || is_plugin_active( 'gallery-categories-pro/gallery-categories-pro.php' ) ) ) {
            global $first_query;
            $term = get_term( $cat_id, 'gallery_categories' );
            if ( !empty ( $term ) ) {
                $args = array(
                    'post_type'         =>  'gallery',
                    'post_status'       =>  'publish',
                    'posts_per_page'    =>  -1,
                    'gallery_categories'=>  $term->slug,
                    'orderby'           => $gllr_options['album_order_by'],
                    'order'             => $gllr_options['album_order']
                );
                $first_query = new WP_Query( $args ); ?>
                <div class="gallery_box">
                    <ul>
                        <?php global $post, $wpdb, $wp_query;
                        if ( $first_query->have_posts() ) {
                            while ( $first_query->have_posts() ) {
                                $first_query->the_post();
                                $attachments = get_post_thumbnail_id( $post->ID );
                                if ( empty ( $attachments ) ) {
                                    $images_id = get_post_meta( $post->ID, '_gallery_images', true );
                                    $attachments = get_posts( array(                                
                                        "showposts"         =>  1,
                                        "what_to_show"      =>  "posts",
                                        "post_status"       =>  "inherit",
                                        "post_type"         =>  "attachment",
                                        "orderby"           =>  $gllr_options['order_by'],
                                        "order"             =>  $gllr_options['order'],
                                        "post_mime_type"    =>  "image/jpeg,image/gif,image/jpg,image/png",
                                        'post__in'          => explode( ',', $images_id ),
                                        'meta_key'          => '_gallery_order_' . $post->ID
                                    )); 
                                    if ( ! empty( $attachments[0] ) ) {
                                        $first_attachment = $attachments[0];
                                        $image_attributes = wp_get_attachment_image_src( $first_attachment->ID, "album-thumb" );
                                    } else
                                        $image_attributes = array( '' );
                                } else {
                                    $image_attributes = wp_get_attachment_image_src( $attachments, 'album-thumb' );
                                } ?>
                                <!-- <li>
                                    <a rel="bookmark" href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
                                        <img width="<?php echo $gllr_options['gllr_custom_size_px'][0][0]; ?>" height="<?php echo $gllr_options['gllr_custom_size_px'][0][1]; ?>" style="width:<?php echo $gllr_options['gllr_custom_size_px'][0][0]; ?>px; height:<?php echo $gllr_options['gllr_custom_size_px'][0][1]; ?>px;" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" src="<?php echo $image_attributes[0]; ?>" />
                                    </a>
                                    <div class="gallery_detail_box">
                                        <div><?php the_title(); ?></div>
                                        <div><?php echo gllr_the_excerpt_max_charlength( 100 ); ?></div>
                                        <a href="<?php echo get_permalink( $post->ID ); ?>"><?php echo $gllr_options["read_more_link_text"]; ?></a>
                                    </div>
                                    <div class="gllr_clear"></div>
                                </li> -->
                            <?php }
                        } ?>
                    </ul>
                </div><!-- .gallery_box -->
                <?php wp_reset_query();
            }
        } else {
            $args = array(
                'post_type'         =>  'gallery',
                'post_status'       =>  'publish',
                'p'                 =>  $id,
                'posts_per_page'    =>  1
            );
            $second_query = new WP_Query( $args );
            if ( $display == 'short' ) { ?>
                <div class="gallery_box">
                    <ul>
                        <?php global $post, $wpdb, $wp_query;
                        if ( $second_query->have_posts() ) : 
                            $second_query->the_post();
                            $attachments = get_post_thumbnail_id( $post->ID );
                            
                            if ( empty ( $attachments ) ) {                     
                                $images_id = get_post_meta( $post->ID, '_gallery_images', true );
                                $attachments = get_posts( array(                                
                                    "showposts"         =>  1,
                                    "what_to_show"      =>  "posts",
                                    "post_status"       =>  "inherit",
                                    "post_type"         =>  "attachment",
                                    "orderby"           =>  $gllr_options['order_by'],
                                    "order"             =>  $gllr_options['order'],
                                    "post_mime_type"    =>  "image/jpeg,image/gif,image/jpg,image/png",
                                    'post__in'          => explode( ',', $images_id ),
                                    'meta_key'          => '_gallery_order_' . $post->ID
                                )); 
                                if ( ! empty( $attachments[0] ) ) {
                                    $first_attachment = $attachments[0];
                                    $image_attributes = wp_get_attachment_image_src( $first_attachment->ID, "album-thumb" );
                                } else
                                    $image_attributes = array( '' );
                            } else {
                                $image_attributes = wp_get_attachment_image_src( $attachments, 'album-thumb' );
                            } 
                            if ( 1 == $gllr_options['border_images'] ) {
                                $gllr_border = 'border-width: ' . $gllr_options['border_images_width'] . 'px; border-color:' . $gllr_options['border_images_color'] . ';border: ' . $gllr_options['border_images_width'] . 'px solid ' . $gllr_options['border_images_color'];
                            } else {
                                $gllr_border = '';
                            } ?>



                            <!-- <li>
                                <a rel="bookmark" href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
                                    <img width="<?php echo $gllr_options['gllr_custom_size_px'][0][0]; ?>" height="<?php echo $gllr_options['gllr_custom_size_px'][0][1]; ?>" style="width:<?php echo $gllr_options['gllr_custom_size_px'][0][0]; ?>px; height:<?php echo $gllr_options['gllr_custom_size_px'][0][1]; ?>px; <?php echo $gllr_border; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" src="<?php echo $image_attributes[0]; ?>" />
                                </a>
                                <div class="gallery_detail_box">
                                    <div><?php the_title(); ?></div>
                                    <div><?php echo gllr_the_excerpt_max_charlength( 100 ); ?></div>
                                    <a href="<?php echo get_permalink( $post->ID ); ?>"><?php echo $gllr_options["read_more_link_text"]; ?></a>
                                </div>
                                <div class="gllr_clear"></div>
                            </li> -->
                        <?php endif; ?>
                    </ul>
                </div><!-- .gallery_box -->
            <?php } else { 
                if ( $second_query->have_posts() ) : 
                    while ( $second_query->have_posts() ) : 
                        global $post;
                        $second_query->the_post(); ?>
                        <div class="swiper-container">
                            <?php echo do_shortcode( get_the_content() );

                            $images_id = get_post_meta( $post->ID, '_gallery_images', true );

                            $posts = get_posts( array(                              
                                "showposts"         =>  -1,
                                "what_to_show"      =>  "posts",
                                "post_status"       =>  "inherit",
                                "post_type"         =>  "attachment",
                                "orderby"           =>  $gllr_options['order_by'],
                                "order"             =>  $gllr_options['order'],
                                "post_mime_type"    =>  "image/jpeg,image/gif,image/jpg,image/png",
                                'post__in'          => explode( ',', $images_id ),
                                'meta_key'          => '_gallery_order_' . $post->ID
                            ));         

                            if ( 0 < count( $posts ) ) {
                                $count_image_block = 0; ?>
                                <div class="swiper-wrapper clearfix">
                                    <?php foreach ( $posts as $attachment ) { 
                                        $key            =   "gllr_image_text";
                                        $link_key       =   "gllr_link_url";
                                        $alt_tag_key    =   "gllr_image_alt_tag";
                                        $image_attributes       =   wp_get_attachment_image_src( $attachment->ID, 'photo-thumb' );
                                        $image_attributes_large =   wp_get_attachment_image_src( $attachment->ID, 'large' );
                                        $image_attributes_full  =   wp_get_attachment_image_src( $attachment->ID, 'full' );
                                        if ( 1 == $gllr_options['border_images'] ) {
                                            $gllr_border = 'border-width: ' . $gllr_options['border_images_width'] . 'px; border-color:' . $gllr_options['border_images_color'] . ';border: ' . $gllr_options['border_images_width'] . 'px solid ' . $gllr_options['border_images_color'];
                                            $gllr_border_images = $gllr_options['border_images_width'] * 2;
                                        } else {
                                            $gllr_border = '';
                                            $gllr_border_images = 0;
                                        }
                                    ?>
                                            <div class="swiper-slide">
                                                    <?php if ( ( $url_for_link = get_post_meta( $attachment->ID, $link_key, true ) ) != "" ) { ?>
                                                        <a href="<?php echo $url_for_link; ?>" title="<?php echo get_post_meta( $attachment->ID, $key, true ); ?>" target="_blank">
                                                            <img class="gallery-photo-item"> width="<?php echo $gllr_options['gllr_custom_size_px'][1][0]; ?>" height="<?php echo $gllr_options['gllr_custom_size_px'][1][1]; ?>"  alt="<?php echo get_post_meta( $attachment->ID, $alt_tag_key, true ); ?>" title="<?php echo get_post_meta( $attachment->ID, $key, true ); ?>" src="<?php echo $image_attributes[0]; ?>" />
                                                        </a>
                                                    <?php } else { ?>
                                                        <a rel="gallery_fancybox<?php if ( 0 == $gllr_options['single_lightbox_for_multiple_galleries'] ) echo '_' . $post->ID; ?>" href="<?php echo $image_attributes_large[0]; ?>" title="<?php echo get_post_meta( $attachment->ID, $key, true ); ?>">
                                                            <img class="gallery-photo-item" alt="<?php echo get_post_meta( $attachment->ID, $alt_tag_key, true ); ?>" title="<?php echo get_post_meta( $attachment->ID, $key, true ); ?>" src="<?php echo $image_attributes[0]; ?>" rel="<?php echo $image_attributes_full[0]; ?>" />
                                                        </a>
                                                    <?php } ?>
                                                <?php if ( 1 == $gllr_options["image_text"] ) { ?>
                                                    <div style="width:<?php echo $gllr_options['gllr_custom_size_px'][1][0] + $gllr_border_images; ?>px;" class="gllr_single_image_text"><?php echo get_post_meta( $attachment->ID, $key, true ); ?>&nbsp;</div>
                                                <?php } ?>
                                            </div><!-- .swiper-slide -->
                                        <?php
                                        $count_image_block++; 
                                    } 
                                    ?>
                                </div><!-- .swiper-wrapper.clearfix -->
                            <?php } ?>
                            <div class="swiper-pagination"></div>
                        </div><!-- .swiper-container -->
                        <div class="gllr_clear"></div>
                    <?php endwhile; 
                else: ?>
                    <div class="swiper-container">
                        <p class="not_found"><?php _e( 'Sorry, nothing found.', 'gallery-plugin' ); ?></p>
                    </div><!-- .swiper-container -->
                <?php endif;
                if ( 1 == $gllr_options['return_link_shortcode'] ) {
                    if ( 'gallery_template_url' == $gllr_options["return_link_page"] ) {
                        global $wpdb;
                        $parent = $wpdb->get_var( "SELECT $wpdb->posts.ID FROM $wpdb->posts, $wpdb->postmeta WHERE meta_key = '_wp_page_template' AND meta_value = 'gallery-template.php' AND (post_status = 'publish' OR post_status = 'private') AND $wpdb->posts.ID = $wpdb->postmeta.post_id" ); ?>
                        <div class="return_link"><a href="<?php echo ( ! empty( $parent ) ? get_permalink( $parent ) : '' ); ?>"><?php echo $gllr_options['return_link_text']; ?></a></div>
                    <?php } else { ?>
                        <div class="return_link"><a href="<?php echo $gllr_options["return_link_url"]; ?>"><?php echo $gllr_options['return_link_text']; ?></a></div>
                    <?php }
                } ?>
            <?php }
            wp_reset_query();
        }
        $gllr_output = ob_get_clean();
        return $gllr_output;
    }
}
?>