<?php 
get_header();
?>

<main id="main-content" class="student-post">
		<div class="container">
			<img loading="lazy"  src="<?php the_post_thumbnail_url('imgthumbnailstudentLinked'); ?>" alt="<?php the_field('student_name'); ?>" class="student-post-img">
			<h1 class="student-post-title"><?php the_field('student_name'); ?></h1>



            <?php

				// Check rows exists.
				if( have_rows('all_details') ):

					// Loop through rows.
					while( have_rows('all_details') ) : the_row(); 

					?>


                         <div class="field">
                            <div class="field-title"><?php the_sub_field('hobbies'); ?></div>
                            <div class="field-content"><?php the_sub_field('hobbies_description'); ?></div>
                        </div>
					
					<?php
					// End loop.
					endwhile;

				// No value.
				else :
					// Do something...
				endif;
				?>
	
		</div>
	</main>




<?php
get_footer();
?>