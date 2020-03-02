<?php get_header(); ?>
   
    <?php get_template_part( 'home/banner' ); ?> 

    <?php get_template_part( 'home/different' ); ?> 

    <?php get_template_part( 'home/logos' ); ?> 

    <?php get_template_part( 'home/data' ); ?> 

    <?php get_template_part( 'home/success' ); ?>
               

    <?php get_template_part( 'home/solution' ); ?>

           

      

        

     

        <?php get_template_part( 'home/whitepaper' ); ?>

        <?php
        $resource_center_home = get_field('centers');
        if (is_array($resource_center_home)): ?>
            <section class="posts-section">
                <div class="container">
                    <h5 class="h3">Resource Center</h5>
                    <div class="post-slider">
                    <?php foreach($resource_center_home as $post):
                         $post_terms = get_the_terms($post->ID, 'category');
                         $time = strtotime($post->post_date);
                        
                             $date_time = date('Y-m-d', $time);
                             $post_date = date('M j, Y', $time);
                         
                         $thumbnail_src = get_the_post_thumbnail_url($post->ID, 'large');?>
                        
                            <div>
                                <div class="slider-item"
                                    style="background: url(<?php echo $thumbnail_src;?>)no-repeat 50% 50% / cover;">
                                    <a href="<?php echo get_permalink($post->ID); ?>" class="post-link"></a>
                                    
                                    <span class="type"><?php echo $post_terms[0]->name; ?></span>
                                    
                                    <div class="title">
                                        <h3 class="h5"><?php the_title(); ?></h3>
                                        <span class="user-name"><?php echo get_author_full_name_by_id($post->post_author); ?></span>
                                    </div>
                                    
                                    <time class="date" datetime="<?php echo $date_time; ?>"><?php echo $post_date; ?></time>
                                </div>
                            </div>
                       
                            <?php endforeach;?>
                    </div>
                    
                </div>
            </section>
            <!-- end posts-section -->
        <?php endif; ?>
    </main>

<?php get_footer(); ?>   