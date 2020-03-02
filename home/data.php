<?php if(have_rows('services')): ?>
        <section class="services">
                    <div class="container">
                        <div class="wrapp">
                            <?php while(have_rows('services')): the_row();
                                        $logo = get_sub_field('image');
                                        $title = get_sub_field('title');
                                        $description = get_sub_field('description');
                                        $link = get_sub_field('link');
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                    <div class="services-item icon-parent">
                                        <a class="post-link" href="<?php echo esc_url( $link_url ); ?>"></a>
                                        <span class="lottie-icon" data-json="../js/animated-images/cloud_connect_00.json">
                                            <img src="<?php echo $logo['sizes']['large']; ?>" alt="Icon">
                                        </span>
                                        <h2 class="h4"><?php echo $title; ?></h2>
                                        <div class="description">
                                            <p><?php echo $description; ?> </p>
                                        </div>
                                        <a href="<?php echo esc_url( $link_url ); ?>" class="green-link">
                                            <span data-text="<?php echo esc_html( $link_title ); ?>"><?php echo esc_html( $link_title ); ?></span>
                                        </a>
                                    </div>
                            
                            <?php endwhile; ?> 
                        </div>
                    </div>
                </section>
<?php endif; ?>
                <!-- end services -->