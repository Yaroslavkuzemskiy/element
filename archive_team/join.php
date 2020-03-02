 <?php $image  = get_field('image_team_join', 'option');
       $title  = get_field('title_team_join', 'option');
       $text  = get_field('description_team_join', 'option');
       $button  = get_field('button_team_join', 'option');
       if( $button ): 
        $link_url = $button['url'];
        $link_title = $button['title'];
       if($image):?>
    <section class="page-poster team-poster" style="background-image: url('<?php echo $image['sizes']['large']; ?>')">
                    <div class="wrapp">
                        <div class="description">
                            <div class="h4"><?php echo $title; ?></div>
                            <p><?php echo $text; ?></p>
                            <a href="<?php echo esc_url( $link_url ); ?>" class="button reverse" data-text="<?php echo esc_html( $link_title ); ?>"><?php echo esc_html( $link_title ); ?></a>
       <?php endif;?>
                        </div>
                    </div>
                </section>
       <?php endif;?>
                <!-- end page-poster team-poster -->

                </div>
	</main>