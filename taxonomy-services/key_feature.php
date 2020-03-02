<section class="key-feautures">
            <div class="container">
                <div class="holder is-visible">
                <?php $term = get_queried_object(); ?>
                    <div class="h4"><?php echo(get_field('title_key_services', $term));?></div>
                    <?php if( have_rows('key_feature_services', $term) ): ?>
                    <ul>
                    <?php while( have_rows('key_feature_services', $term) ): the_row(); 

                        // vars
                        $image = get_sub_field('icon');
                        $title = get_sub_field('text');
                        $subtitle = get_sub_field('subtext');

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
                <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- end key-feautures -->