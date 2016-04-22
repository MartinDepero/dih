<?php

/**

 * The main theme functions file loads styles/scripts, allows some theme functionality and provides some helper functions.

 */

/**

 * This theme only works in WordPress 4.2 or later.

 */



if ( version_compare( $GLOBALS['wp_version'], '4.2', '<' ) ) {

    require get_template_directory() . '/inc/back-compat.php';

}



if ( ! isset( $content_width ) ) $content_width = 1140;





function getAssetsPath($path) {

    return get_template_directory_uri() . '/assets/' . $path;

}



function image($name) {

    return getAssetsPath('img/'.$name);

}



	/**

	 * Enqueue scripts and styles.

	 *

	 */

	function thewest_scripts() {

		global $wp_styles;



		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )

			wp_enqueue_script( 'comment-reply' );



		// Loads our bootstrap.

		wp_enqueue_style( 'thewest-bootstrap-style', getAssetsPath('bootstrap/css/bootstrap.min.css') );



		// Adds bootstrap JavaScript.

		wp_enqueue_script( 'thewest-bootstrap-js',getAssetsPath('bootstrap/js/bootstrap.min.js'), array( 'jquery' ) );



		// Loads our main stylesheet.

		wp_enqueue_style( 'thewest-style', get_stylesheet_uri() );



		// Loads our main stylesheet.

		wp_enqueue_style( 'thewest-simple-sidebar', getAssetsPath('custom/css/simple-sidebar.css') );



		//Load Font CSS

		wp_enqueue_style('thewest-font-awesome.min', getAssetsPath('custom/css/font-awesome.min.css'));



		/* OWL */

		// Loads stylesheets.

			wp_enqueue_style( 'thewest-owl-style', getAssetsPath('owl-carousel/owl.carousel.css'));

			wp_enqueue_style( 'thewest-owl-theme', getAssetsPath('owl-carousel/owl.theme.css'));

			// OWL JS

			wp_enqueue_script( 'thewest-owl',  getAssetsPath('owl-carousel/owl.carousel.js'));



		// Custom JS

		wp_enqueue_script( 'thewest-custom',  getAssetsPath('custom/js/custom.min.js'));

	}



	add_action( 'wp_enqueue_scripts', 'thewest_scripts' );



/** -------------------------

	 Google Fonts

----------------------------*/



if ( ! function_exists( 'thewest_fonts_url' ) ) :



function thewest_fonts_url() {

    $fonts_url = '';



    /* Translators: If there are characters in your language that are not

    * supported by Lora, translate this to 'off'. Do not translate

    * into your own language.

    */

    $Montserrat = _x( 'on', 'Montserrat font: on or off', 'thewest' );



    /* Translators: If there are characters in your language that are not

    * supported by Open Sans, translate this to 'off'. Do not translate

    * into your own language.

    */

    $open_sans = _x( 'on', 'Open Sans font: on or off', 'thewest' );



    if ( 'off' !== $Montserrat || 'off' !== $open_sans ) {

        $font_families = array();



        if ( 'off' !== $Montserrat ) {

            $font_families[] = 'Montserrat:400,700';

        }



        if ( 'off' !== $open_sans ) {

            $font_families[] = 'Open Sans:700italic,400,600';

        }



        $query_args = array(

            'family' => urlencode( implode( '|', $font_families ) ),

           // 'subset' => urlencode( 'latin,latin-ext' ),

        );



        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );

    }



    return esc_url_raw( $fonts_url );

}



endif;



function thewest_scripts_styles() {

    wp_enqueue_style( 'thewest-fonts', thewest_fonts_url(), array(), null );

}

add_action( 'wp_enqueue_scripts', 'thewest_scripts_styles' );





    //Navigation Menus

    register_nav_menus(array(

        'primary' => __('Primary Menu', 'thewest')

    ));



    //Add featured image support

    add_theme_support('post-thumbnails');



    //This feature enables plugins and themes to manage the document title tag.

    add_theme_support('title-tag');

    //This feature adds RSS feed links to HTML <head>.

    add_theme_support( 'automatic-feed-links' );





	add_theme_support('post-thumbnails');

	set_post_thumbnail_size( 1100, 450, true );



	//Customize excerpt word count

	function custom_excerpt_length() {

		return 25; //25 words

	}



	add_filter('excerpt_length', 'custom_excerpt_length');



//Add our Widget Locations

function thewest_WidgetsInit() {



    register_sidebar(array(

        'name' => __('Footer Area 1', 'thewest'),

        'id' => 'footer_area_1',

        'before_widget' => '<div class="footer_widget col-md-5 col-sm-5">',

        'after_widget' => '</div>'

    ));



    register_sidebar(array(

        'name' => __('Footer Area 2', 'thewest'),

        'id' => 'footer_area_2',

        'before_widget' => '<div class="footer_widget col-md-7 col-sm-7">',

        'after_widget' => '</div>'

    ));



}

	/* Add image sizes */

	add_image_size ( 'slider_image', 1100, 611, true);

	add_image_size ( 'aboutus_image', 295, 350, true);

	add_image_size ( 'services_image', 300, 200, true);



add_action('widgets_init', 'thewest_WidgetsInit');

/* CUSTOM */
function register_my_menu() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );

/* shortcode google map de la page contact */
function contact_map_shortcode() {
    $retour = '';
    $retour .= '<div class="col-md-12 col-sm-12 custom-gmap-container">';
    $retour .= '<script src=\'https://maps.googleapis.com/maps/api/js?v=3.exp\'></script>';
    $retour .= '<div style=\'overflow:hidden;height:440px;width:100%;\'>';
    $retour .= '<div id=\'gmap_canvas\' style=\'height:440px;width:100%;\'>';
    $retour .= '</div>';
    $retour .= '<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>';
    $retour .= '<style>#gmap_canvas .gm-style .gm-style-cc {display:none;} img[src="https://maps.gstatic.com/mapfiles/api-3/images/google4.png"] {display: none;}</style>';
    $retour .= '</div>';
    $retour .= '</div>';
    $retour .= '<script type=\'text/javascript\'>';
    $retour .= 'function init_map(){';
    $retour .= 'var myOptions = {';
    $retour .= 'streetViewControl:false,';
    $retour .= 'mapTypeControl:false,';
    $retour .= 'scrollwheel: false,';
    $retour .= 'zoom:13,';
    $retour .= 'center:new google.maps.LatLng(45.18821699999999,5.725365199999942),';
    $retour .= 'mapTypeId: google.maps.MapTypeId.ROADMAP';
    $retour .= '};';
    $retour .= 'map = new google.maps.Map(document.getElementById(\'gmap_canvas\'), myOptions);';
    $retour .= 'marker = new google.maps.Marker({';
    $retour .= 'map: map,';
    $retour .= 'position: new google.maps.LatLng(45.18821699999999,5.725365199999942),';
    $retour .= 'icon: \'http://preprod-dih.esy.es/wp-content/themes/thewest/images/logo-gmap.png\'';
    $retour .= '});';
    $retour .= 'google.maps.event.addListener(marker, \'click\', function(){infowindow.open(map,marker);});';
    $retour .= 'infowindow.open(map,marker);';
    $retour .= '}';
    $retour .= 'google.maps.event.addDomListener(window, \'load\', init_map);';
    $retour .= '</script>';

    return $retour;
}

/* shortcode pour les icons de la page contact */
function contact_iconset_shortcode($atts) {

    $retour = '';
    $retour .= '<div class="col-md-12 col-sm-12">';
    $retour .= '<div class="col-md-4 col-sm-4 text-center">';
    $retour .= '<img class="alignnone size-full wp-image-37" src="http://preprod-dih.esy.es/wp-content/uploads/2016/04/pin.png" alt="pin" width="128" height="128" />';
    $retour .= '<h4>ADRESSE</h4>';
    $retour .= $atts['adress'];//'6 Rue Paul Bert, 38000 Grenoble';
    $retour .= '</div>';
    $retour .= '<div class="col-md-4 col-sm-4 text-center">';
    $retour .= '<img class="alignnone size-full wp-image-36" src="http://preprod-dih.esy.es/wp-content/uploads/2016/04/phone.png" alt="phone" width="128" height="128" />';
    $retour .= '<h4>TELEPHONE</h4>';
    $retour .= $atts['phone'];
    $retour .= '</div>';
    $retour .= '<div class="col-md-4 col-sm-4 text-center">';
    $retour .= '<img class="alignnone size-full wp-image-39" src="http://preprod-dih.esy.es/wp-content/uploads/2016/04/mail.png" alt="mail" width="128" height="128" />';
    $retour .= '<h4>MAIL</h4>';
    $retour .= $atts['mail'];
    $retour .= '</div>';
    $retour .= '</div>';

    return $retour;
}

add_shortcode('contactinfo', 'contact_iconset_shortcode');
add_shortcode('contactmap', 'contact_map_shortcode');

/* END CUSTOM */

include_once( dirname( __FILE__ ) . '/theme-options.php' );



include('navthemes_fuctions.php');
