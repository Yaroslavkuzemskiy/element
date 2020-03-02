
<?php if( have_rows('features_key') ): ?>
    
        <section class="key-feautures">
                    <div class="container">
                        <div class="holder is-visible">
                            <div class="h4">Key Features</div>
                            <ul>

                            <?php while( have_rows('features_key') ): the_row(); 

                                    // vars
                                    $image = get_sub_field('icon_feature');
                                    $title = get_sub_field('title');
                                    $subtitle = get_sub_field('subtitle');

                                    ?>
                                         <li>
                                                <span class="icon">
                                                    <img src="<?php echo $image['sizes']['large']; ?>" alt="Icon">
                                                </span>
                                            <div class="name"><?php echo $title; ?></div>
                                            <div class="desciption"><?php echo $subtitle; ?></div>
                                        </li>
                            <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                </section>
                <!-- end key-feautures -->
<?php endif; ?>
</main>