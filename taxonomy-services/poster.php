<?php 
    $term = get_queried_object();
    $image = get_field('image_services_taxonomy', $term);
    $title = get_field('title_for_post_services_taxonomy', $term);
    $description = get_field('description_for_post_services_taxonomy', $term);
    $url = get_field('quote_services_taxonomy', $term);
    if($image):
    ?>
                    <section class="page-poster" style="background-image: url('<?php echo $image['sizes']['large']; ?>')">
                    <?php if($title):?>
                        <div class="container">
                            <div class="wrapp">
                            <?php if($description):?>
                                    <div class="description">
                                        <div class="h4"><?php echo $title; ?></div>
                                        <p><?php echo '<p>' . $description . '</p>'; ?></p>
                                        <?php endif; ?> 
                                        <a href="<?php echo esc_url( $url['url'] ); ?>" class="button reverse" data-text="<?php echo esc_html( $url['title'] ); ?>"><?php echo esc_html( $url['title'] ); ?></a>
                                    </div>
                                    
                            </div>
                        </div>
                        <?php endif; ?> 
                    </section>
                    <!-- end page-poster -->
                    <?php endif; ?>