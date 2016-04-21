<?php

/**

 * This file is responsible for the display of pages.

 */

get_header();

?>

	<?php if(is_front_page()):

		  thewest_home_slider();

 	else:

	?>
 <h1 class="page-title"><?php the_title(); ?></h1>

	<?php endif; ?>



 <div class="middle_wrapper">

   <div class="col-md-12">

        <?php

        if(have_posts()) {

            while(have_posts()) {

                the_post();

                get_template_part('content-page');

            }

        }

        ?>

    </div>

</div>



<?php

get_footer();
