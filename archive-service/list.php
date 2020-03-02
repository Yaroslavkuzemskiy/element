<div class="container">
            <section class="services-list">
                <?php $service_terms = get_terms('services_category'); 
                if(is_array($service_terms)):
                    foreach($service_terms as $term):
                        $term_image = get_field('image_main_taxonomy', $term);
                        $term_icon = get_field('icon_main_taxonomy', $term);?>
                                <div class="services-card">
                                        <?php $image_default = get_field( 'image_default', 'option');?>

                                        <?php if (!empty($term_image)):?>
                                            <div class="thumbnail" style="background-image: url('<?php echo $term_image['sizes']['large'];?>')"> </div>
                                        <?php else:?> <div class="thumbnail" style="background-image: url('<?php echo($image_default['sizes']['large']);?>)')">  </div>
                                        
                                  
                                    <?php endif;?>  
                                    <div class="description">
                                        <div class="icon-parent">
                                            <span class="lottie-icon" data-json="../js/animated-images/single_tanant_00.json"></span>
                                            <?php if (!empty($term_icon)):?>
                                            <img src="<?php echo $term_icon['sizes']['large'];?>" alt="Icon">
                                            <?php endif;?> 
                                            <h3>
                                                <a href="<?php echo get_term_link($term, 'services_category'); ?>" data-text="<?php echo $term -> name; ?>"><?php echo $term -> name; ?> </a>
                                            </h3>
                                        </div>
                                        <p><?php echo $term -> description; ?></p>
                                        <?php
                                        $query = new WP_Query(array(
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'services_category',
                                                    'field' => 'slug',
                                                    'terms' => $term
                                                )
                                            )
                                        ));?>
                                         <?php if ($query->have_posts()): ?>
                                            <ul>
                                                <?php while ($query->have_posts()):
                                                 $query->the_post();?>
                                                        <li class="icon-parent">
                                                            <span class="lottie-icon" data-json="../js/animated-images/cloud_connect_00.json"></span>
                                                            <?php $icon = the_post_thumbnail( 'thumbnail ' );
                                                            if($icon):?>
                                                            <?php $icon; ?>
                                                           
                                                            <?php endif;?>
                                                            <h4 class="h6">
                                                                <a href="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>"><?php the_title(); ?></a>
                                                            </h4>
                                                        </li>
                                            
                                                <?php endwhile; ?>
                                            </ul>
                                        <?php endif;
                            wp_reset_postdata(); ?>
                                    </div>
                                </div>
               
                
                <?php endforeach;
            endif; ?>
            </section>
            <!-- end services-list -->
        </div>