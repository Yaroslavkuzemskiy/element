<?php 

$posts = get_field('team');

if( $posts ): ?>
    <section class="solutions">
   
                <div class="container">
                    <div class="h1">Industry Solutions</div>
                    <div class="cards">
                    <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
                        <div class="solutions-card"
                            style="background-image: url('<?php echo get_the_post_thumbnail_url( $p->ID, 'full');?>')">
                            <h4 class="h4">
                            
                                <a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a>
                            </h4>
                            <div class="holder">
                                <h4 class="h4">
                                    <a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a>
                                </h4>
                                <div class="description">
                                <?php echo $p->post_excerpt; ?>
                                </div>
                                <a href="<?php echo get_permalink( $p->ID ); ?>" class="green-link">
                                    <span data-text="Learn More">Learn More</span>
                                </a>
                                
                            </div>
                        </div>
                    
                    
                        
                        <?php endforeach; ?>
                    </div>
                </div>
                
                
            </section>
            <?php endif; ?>
            <!-- end solutions -->