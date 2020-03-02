 <?php $title = get_field('title_service_different', 'option');
 if($title): ?>
    <section class="makes-different is-visible">
                <div class="container">
                    <div class="h2"><?php echo $title;?></div>
                    <div class="wrapp">
                    <?php if (have_rows('different', 'option')): ?>
                                <ul class="checkmark-list">
                                    <?php
                                    
                                       while (have_rows('different', 'option')) : the_row(); 
                                       $text = get_sub_field('title');
                                       $subtetx = get_sub_field('text');
                                       ?>
                                        <li>
                                            <p><?php echo $text; ?></p>
                                            <?php echo $subtext; ?>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                        <?php endif;?>
                        <a href="<?php echo get_home_url();?>" class="button reverse" data-text="Get a Quote">Get a Quote</a>
                    </div>
                </div>
            </section>
 <?php endif;?>
            <!-- end makes-different -->