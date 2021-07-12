<?php 
get_header();
?>

<main id="main-content" class="post">
    <?php
                if (have_posts()):
                    while(have_posts()):
                            the_post();?>
                        <section class="module-hero"style="background-image: url('<?php the_post_thumbnail_url('1366x400') ?>');">
                            <div class="container">
                                <h1><?php the_field('sub_title_formation'); ?></h1>
                            </div>
                        </section>
                        <section class="module-desc">
                            <div class="container container-narrow">
                                <p> <?php the_field('detail_descryption'); ?></p>
                            </div>
                        </section>
                    <?php endwhile;
                 endif;
        ?>
</main>




<?php
get_footer();
?>