<?php 
// Template Name: My student page
get_header();
?>
        
	<main id="main-content" class="students">
		<div class="container">
		<h1 class="section-title"><?php the_field('main_title', 'option'); ?></h1>
        <?php
				if (have_posts()):
					while(have_posts()):
						the_post();?>

	            <article class="student">
                    <img loading="lazy"  src="<?php the_post_thumbnail_url('imgthumbnailStudent'); ?>" alt="Francine Auhi" class="student-img">
                    <h2 class="student-name"><?php the_field('student_name'); ?></h2>
                    <a href="<?php the_permalink() ?>" class="student-link"><?php the_field('student_link'); ?></a>
                </article>

                <?php endwhile;
                    endif;
                ?>

			<nav class="pagination">
				<?php 
                    $args = [
                        'prev_text' => '&laquo;',
                        'next_text' => '&raquo;',
                        'type' => 'list'
                    ];
                    echo paginate_links( $args );
                ?>
					
			<nav>



		</div>
	</main>

<?php
get_footer();
?>