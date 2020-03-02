   <?php if(have_rows('points')):?>
    <section class="data-center-options">
                <div class="container">
                    <div class="wrapp">
                        <ul class="checkmark-list">
                            <?php while(have_rows('points')):the_row();
                               $title = get_sub_field('title');
                               $text = get_sub_field('subtitle');?>
                                <li>
                                    <p><?php echo $title;?></p>
                                    <?php echo $text;?>
                                </li>
                            <?php endwhile;?>
                        </ul>
                    </div>
                </div>
            </section>
                            <?php endif;?>
            <!--checkmark-list in data-center-options-->