<?php
    $title = get_field('title_different');
    if($title):?>
        <section class="different">
                <div class="container">

                    <?php
                    $title = get_field('title_different');
                    if($title):?>
                            <div class="h1"><?php echo($title); ?></div>
                    <?php endif; ?>

                    <?php if( have_rows('tabs') ): ?>
                            <ul class="checkmark-list">
                        <?php while (have_rows('tabs')): the_row();
                        
                                $title = get_sub_field('title');
                                $subtitle = get_sub_field('subtitle');
                                ?>
                                <li>
                                    <p><?php echo $title; ?></p>
                                    <?php echo $subtitle; ?>
                                </li>
                               
                        <?php endwhile; ?>
                            </ul>
                    <?php endif; ?>

                    <?php 
                        $link = get_field('button_different');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                            <a href="<?php echo esc_url( $link_url ); ?>" class="button reverse-white" data-text="<?php echo esc_html( $link_title ); ?>"><?php echo esc_html( $link_title ); ?></a>
                         <?php endif; ?>
                </div>
            </section>
            <?php endif; ?>
            <!-- end different -->