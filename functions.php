<?php

// Create a reusable function for the page banner across all pages
function pagesBanner($args = null)
{
    //php logic will live here
    if(!$args['photo']){
       if(get_field('page_banner_background_image')){
        $args['photo'] = get_field('page_banner_background_image');

       } else{
        $args['photo'] = get_theme_file_uri('/assests/img/raw/adobephotos/bag-banner2DT.jpg');
       }
    }

    ?>
     <!--HTML Code lives here-->
     <!--Site Banner-->
    <div class="banner-wrapper">
        <img class="banner_img"
        src="<?php echo $args['photo']?>"
        srcset="<?php echo $args['photo']?> 1050w, 
        <?php echo $args['photo']?> 3000w" 
        sizes="(min-width: 1024px) 1050w, 3000w" 
        alt="Banner Image"
        > 
    </div>
    <?php
 }

// end of reusable function....

// This code defers all other Javascript
function add_defer_to_jquery( $tag, $handle, $src ) {

    if (is_admin())
      return $tag;

    if ( strpos($handle, 'jquery-core') === false ) {
        return str_replace( ' src=', ' defer="defer" src=', $tag );
    }

    return $tag;
}


/*this is how to add style.css stylesheet and we can also add javascript files inside this function
First we create a function and name it whatever we want but its relevant to the website we are making
secondly inside the function, we call a wordpress function that points to the css file we want to load
Third, we use the wordpress add_action function to call the function i created.
The add_action() function accepts 2 arguments (1st argument 'wp_enqueue_scripts', 2nd argument 'function right above it')
 */

 //This function tells wordpress to add all additional stylesheets and scripts to my website
add_action('wp_enqueue_scripts', 'alettaFiles');

function alettaFiles()
{
    //avoiding caching in css & js in the first statement
    wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array(), null, false); 
    wp_enqueue_script('jquery');
    // added lax.js animate on scroll functionality to website
    wp_enqueue_script('AnimateOnScroll', 'https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js', null, false);
    wp_enqueue_script('main-js-file', get_theme_file_uri('/assests/js/custom/main.js'), null, microtime(), true);
    wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.8.1/css/all.css');
    wp_enqueue_style('mailchimp', '//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css');
    wp_enqueue_style('site_main_styles', get_stylesheet_uri());
    $custom_css = theme_get_customizer_css();
    wp_add_inline_style( 'site_main_styles', $custom_css );
    // by using the 2nd argument of "univData" can be used in the search.js -> getResults ()
    //To make url more flexible and relative
    wp_localize_script('main-js-file', 'alettaData', array(
        'root_url' => get_site_url(),
        'nonce' => wp_create_nonce('wp_rest')
      ));


}



//This function tells Wordpress to add dynamic menus and menu locations

function aletta_features() {
    //This WP function allows us to add dynamic navigational menus through WP admin menu panel
    // register_nav_menu('headerMenuLocation', 'Header Menu Location');
    // register_nav_menu('footerLocationOne', 'Footer Location One');
    // register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag');
    //this function will enable featured images for blog posts
    add_theme_support('post-thumbnails');
    //this function will add a custom banner landscape image size to uploads /image folder
    add_image_size('bannerLandscape', 3000, 1275, true);
    //this function will add a custom banner portrait image size to uploads /image folder
    add_image_size('bannerPortrait', 1050, 840, true);
    // Custom logo Variables
	  $logo_width  = 200;
    $logo_height = 90;
    // Custom Logo Attributes
     $defaults = array(
        'height'      => $logo_width,
        'width'       => $logo_height,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
        );
    add_theme_support( 'custom-logo', $defaults );
    
}

add_action('after_setup_theme', 'aletta_features');



/** Declaring the Customizer settings for colors */
function theme_customize_register( $wp_customize ) {

    // Theme color
    $wp_customize->add_setting( 'theme_color', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Theme Site color', 'theme' ),
    ) ) );

    // Logo Text color
    $wp_customize->add_setting( 'logo_text_color', array(
        'default'   => '',
        'transport' => 'refresh',
      ) );
  
      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'logo_text_color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Logo Title color', 'theme' ),
      ) ) );

    // Headings Text color
    $wp_customize->add_setting( 'heading_text_color', array(
        'default'   => '',
        'transport' => 'refresh',
      ) );
  
      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'heading_text_color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Heading Title color', 'theme' ),
      ) ) );

    // Feature Title & Text color
    $wp_customize->add_setting( 'feature_text_color', array(
        'default'   => '',
        'transport' => 'refresh',
      ) );
  
      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'feature_text_color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Feature Text color', 'theme' ),
      ) ) );

    // Footer Title color
    $wp_customize->add_setting( 'footer_heading_color', array(
        'default'   => '',
        'transport' => 'refresh',
      ) );
  
      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_heading_color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Footer Title color', 'theme' ),
      ) ) );
  
      // Link color
      $wp_customize->add_setting( 'link_color', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
      ) );
  
      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Link color', 'theme' ),
      ) ) );
  
      // Accent color
      $wp_customize->add_setting( 'accent_color', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
      ) );
  
      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Accent_color', 'theme' ),
      ) ) );
 }
 
 add_action( 'customize_register', 'theme_customize_register' );

//Wordpress will call this function and will pass the query object into this function so we can manipulate it
//This function is designed to manipulate a particualr default query in our site
add_action('pre_get_posts', 'aletta_adjust_queries');

function aletta_adjust_queries($query)
{
    if (!is_admin() and is_post_type_archive('page') and $query->is_main_query()) {
        $query->set('posts_per_page', -1);
    }  
}

// allow users to edit and customize menus in the Menus admin panel, 
//giving users a drag-and-drop interface to edit the various menus in their theme.
// register_nav_menus( array(
//     'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
//     'footer' => __( 'Footer Menu', 'myfootertheme' )
// ) );


?>