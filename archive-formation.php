<?php 
get_header();
?>
        
        <main id="main-content" class="modules">
		<div class="container container-narrow">
			<h1 class="modules-title"><?php the_field('formation_title', 'option'); ?></h1>
			<div class="module-desc">
				<p><?php the_field('formation_description_', 'option'); ?> </p>
			</div>
		</div>
		<div class="container">
			           	
        <?php
				if (have_posts()):
					while(have_posts()):
						the_post();?>
						
						<article class="card card-module">
							<img loading="lazy"  src="<?php the_post_thumbnail_url( 'imgthumbnailFormation' ); ?>" alt="<?php the_field('sub_title_formation'); ?>" class="card-img" >
							<div class="card-content">
								<h2 class="card-title"><?php the_field('sub_title_formation'); ?></h2>
								<p class="card-excerpt"><?php the_field('description_formation_'); ?></p>
							</div>
							<a href="<?php the_permalink() ?>" class="card-link"><?php the_field('button_text_'); ?>
							<?php 
									$image = get_field('flash_icon', 'option');
									if( !empty( $image ) ):
									?>
										<img loading="lazy" src="<?php echo esc_url($image['sizes']['flashIcon']); ?>"  alt="<?php echo esc_attr($image['alt']) ; ?>" aria-hidden="true"/>
									<?php endif; ?>
						</a>
						</article>
		<?php
                    endwhile;
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