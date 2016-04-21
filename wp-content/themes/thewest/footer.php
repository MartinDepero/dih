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

                  <?php if(is_active_sidebar('footer_area_1')) { ?>

                        <?php dynamic_sidebar('footer_area_1'); ?>

                    <?php } ?>



                    <?php if(is_active_sidebar('footer_area_2')) { ?>

                        <?php dynamic_sidebar('footer_area_2'); ?>

                  <?php } ?>

             </div>

        </footer>

       <!--Footer Wrapper End Here-->



       <div class="copyright">

         <div class="container">

          <div class="clearboth"></div>
            &copy; DEAD IS HYPE BICYCLES
        </div>

       </div>

                        </div>

                     </div>

                   </div>



                 <!--Right Content Wrapper End Here-->



    <?php wp_footer(); ?>



</body>

</html>
