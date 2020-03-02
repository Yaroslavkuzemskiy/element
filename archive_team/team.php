<?php if (have_posts()):?>
           
    <div class="container">
                <section class="team">
                <?php while (have_posts()):
                the_post(); 
                $position = get_field('position')?>
                    <div class="person-card">
                        <div class="photo" style="background-image: url('<?php echo get_the_post_thumbnail_url( $post, 'full');?>')">
                            <a href="<?php the_permalink();?>">"></a>
                        </div>
                        <h3 class="h4">
                            <a href="<?php the_permalink();?>"><?php the_title();?></a>
                        </h3>
                        <div class="position"><?php echo $position;?></div>
                    </div>
                    <?php endwhile;?>
                </section>
                
                <? endif; ?>   
			<!-- end team -->