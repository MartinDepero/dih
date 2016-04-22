<?php

/**

 * This file is responsible for the rendering of the header of the theme.

 */

?>

<!doctype html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php

    if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

    wp_head();

    ?>

</head>

<body <?php body_class(); ?>>

    <!--main_container-->

<div id="main_container" class="main_container">



        	<!-- Sidebar -->

      			  <div id="sidebar-wrapper" class="side_menu_wrapper">

                    <ul id="primary_menu" class="sidebar-nav">

                        <li class="sidebar-brand">

                             <a href="<?php echo home_url(); ?>" class="logo">

                            	<?php if(is_home() || is_front_page()) { ?>

                                    <h1 class="site-title">

									<?php if(get_theme_mod('logo', get_template_directory_uri() . '/images/logo.png')) echo '<img class="logo" src="'. get_theme_mod('logo' , get_template_directory_uri() . '/images/logo.png') .'">'; else

									 bloginfo('name', 'thewest'); ?></h1>

                                <?php }

                                   else {

                                 ?>

                                    <p class="site-title"><?php if(get_theme_mod('logo' , get_template_directory_uri() . '/images/logo.png')) echo '<img class="logo" src="'. get_theme_mod('logo', get_template_directory_uri() . '/images/logo.png') .'">'; else

									 bloginfo('name', 'thewest'); ?></p>

                                <?php } ?>

                                </a>

                            <div class="menu">

                             <?php if ( has_nav_menu( 'primary' ) ) { ?>

                                   <?php wp_nav_menu(

                                            array(

                                                    'theme_location' => 'primary',

                                                    'items_wrap'=> '<ul itemscope itemtype="https://schema.org/SiteNavigationElement" id="%1$s" class="%2$s">%3$s</ul>',

                                                    'container' => 'none',

                                            ) );

                                  ?>

                                  <?php } else { ?>

                                    <ul class="menu clearfix">

                                            <?php wp_list_categories('title_li='); ?>

                                        </ul>

                                     <?php

                                        }

                                      ?>



                       			</div>

                                <div style="height:50px;"></div>

                                <?php if (esc_url(get_theme_mod('social_facebook' , '#'), 'thewest') != '') { ?>
                                    <a href="<?php echo esc_url(get_theme_mod('social_facebook' , '#'), 'thewest'); ?>" class="social_icon first" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/icon_facebook_white.png'?>"></a>
                                <?php } ?>

                                <?php if (esc_url(get_theme_mod('social_twitter' , '#'), 'thewest') != '') { ?>
                                    <a href="<?php echo esc_url(get_theme_mod('social_twitter' , '#'), 'thewest'); ?>" class="social_icon" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/icon_twitter_white.png'?>"></a>
                                <?php } ?>

                                <?php if (esc_url(get_theme_mod('social_instagram' , '#'), 'thewest') != '') { ?>
                                    <a href="<?php echo esc_url(get_theme_mod('social_instagram' , '#'), 'thewest'); ?>" class="social_icon" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/icon_instagram_white.png'?>"></a>
                                <?php } ?>

                                <div style="height:50px;"></div>

                        </ul>

                    </div>

     		<!-- /#sidebar-wrapper -->



            <div id="page-content-wrapper">

                   <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">

                 	  <i class="fa fa-bars"></i>

                   </a>

                    <div class="container-fluid">

                            <div class="row">

              				 <div class="right_content_wrapper">
