<?php 
get_header();
?>
 
 <main id="main-content" class="post">
        <?php
			if (have_posts()):
				while(have_posts()):
						the_post();?>
                    <div class="container container-narrow">
                        <img loading="lazy"  src="<?php the_post_thumbnail_url('imgthumbnailAcutalitesLinked'); ?>" alt="Some code" class="featured-img">
                        <h1> <?php the_field('card_title'); ?></h1>
                        <p class="post-date"><?php the_date(); ?></p>
                        <p> <?php the_field('details_para'); ?></p>
                    </div>
                <?php endwhile;
            endif;
        ?>
	</main>

<?php
get_footer();
?>