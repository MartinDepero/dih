<?php

/**

 * This file is responsible for the theme footer.

 */

?>

   <script>

    jQuery("#menu-toggle").click(function(e) {

        e.preventDefault();

        jQuery("#main_container").toggleClass("toggled");

    });

    </script>



        <div class="clearfix"></div>

     <!--Footer Wrapper Start Here-->

         <footer class="footer_wrapper">

             <div class="container">



                <?php if(get_theme_mod('top_top')) :?>

                    <div class="top_btn">

                      <a class="cd-top" href="#0"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_btn.jpg"></a>

                    </div>

                  <?php endif; ?>

                  <div class="col-md-4 col-sm-4 text-center">
                    <img src="<?php echo get_template_directory_uri() . '/images/logoDH.png'?>" class="logoFooter">
                  </div>

                  <div class="col-md-4 col-sm-4">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
                  </div>

                  <div class="col-md-4 col-sm-4 text-center">
                     <?php if (esc_url(get_theme_mod('social_facebook' , '#'), 'thewest') != '') { ?>
                        <a href="<?php echo esc_url(get_theme_mod('social_facebook' , '#'), 'thewest'); ?>" class="social_icon first" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/icon_facebook_black.png'?>"></a>
                    <?php } ?>

                    <?php if (esc_url(get_theme_mod('social_twitter' , '#'), 'thewest') != '') { ?>
                        <a href="<?php echo esc_url(get_theme_mod('social_twitter' , '#'), 'thewest'); ?>" class="social_icon" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/icon_twitter_black.png'?>"></a>
                    <?php } ?>

                    <?php if (esc_url(get_theme_mod('social_instagram' , '#'), 'thewest') != '') { ?>
                        <a href="<?php echo esc_url(get_theme_mod('social_instagram' , '#'), 'thewest'); ?>" class="social_icon" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/icon_instagram_black.png'?>"></a>
                    <?php } ?>
                  </div>

                  <div class="custom-copyright">
                    &copy; DEAD IS HYPE BICYCLES
                  </div>

             </div>

        </footer>

       <!--Footer Wrapper End Here-->

                        </div>

                     </div>

                   </div>



                 <!--Right Content Wrapper End Here-->



    <?php wp_footer(); ?>



</body>

</html>
