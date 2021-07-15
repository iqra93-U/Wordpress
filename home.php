<?php 
get_header();
?>
 
 <main id="main-content" class="last-news">
		<div class="container">
			<h1 class="section-title"> <?php echo get_the_title(get_option('page_for_posts')); ?> </h1>
			
			<?php
				if (have_posts()):
					while(have_posts()):
						the_post();?>
						<article class="card .card-module">
						<img loading="lazy"  src="<?php the_post_thumbnail_url('imgthumbnailActuality'); ?>" alt="<?php the_field('card_title'); ?>" class="card-img">
							
							
							<div class="card-content">
								<p class="card-date">
								<?php 
									$image = get_field('date_calender', 'option');
									if( !empty( $image ) ):
									?>
										<img loading="lazy" src="<?php echo esc_url($image['sizes']['flashIcon']); ?>"  alt="<?php echo esc_attr($image['alt']) ; ?>" aria-hidden="true"/>
									<?php endif; ?> 
									<?php echo get_the_date(); ?>
								</p>
								<h2 class="card-title"> <?php the_field('card_title'); ?> </h2>
								<p class="card-excerpt"> <?php the_field('card_description'); ?> </p>
							</div>
							<a href="<?php the_permalink() ?>" class="card-link"><?php the_field('button_text'); ?> 
							<?php 
									$image = get_field('flash_icon', 'option');
									if( !empty( $image ) ):
									?>
										<img loading="lazy" src="<?php echo esc_url($image['sizes']['flashIcon']); ?>"  alt="<?php echo esc_attr($image['alt']) ; ?>" aria-hidden="true"/>
									<?php endif; ?>
						</a>
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