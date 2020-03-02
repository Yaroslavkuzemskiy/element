
<?php if ( have_posts() ) : ?>
    
        <section class="services">
                    <div class="container">
                        <div class="h2"><?php single_term_title('Explore Our '); ?></div>
                       
                        <div class="wrapp">

                            <?php
                                /* Start the Loop */
                                while (have_posts() ) :
                                the_post(); ?>

                            <div class="services-item icon-parent">
                                <a class="post-link" href="<?php the_permalink() ?>"></a>
                                    <span>
                                        <?php the_post_thumbnail( 'thumbnail ' ); ?>
                                    </span>
                                
                                    <h2 class="h4"><?php  the_title(); ?></h2>
                                    <div class="description">
                                    <?php if ( ! has_excerpt() ): ?>
                                            <?php echo '<p></p>'; ?>
                                            <?php  else:  ?>
                                            <p><?php  the_excerpt(); ?> </p>
                                    <?php endif;?>
                                </div>
                                <a href="<?php the_permalink() ?>" class="green-link">
                                    <span data-text="Learn More">Learn More</span>
                                </a>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        
                    </div>
                </section>
                <!-- end services -->
    
<?php endif; 
wp_reset_postdata();
?>