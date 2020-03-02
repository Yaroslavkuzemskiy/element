<?php $queried_object = get_queried_object();?>


<?php $page_title = get_the_title( get_option('page_for_posts', true) );?>

    <div class="filter">
                <div class="container">
                    <div class="wrapp">
                        <ul class="filters-list">
                        <?php if (isset($queried_object->post_name) && $queried_object->post_title == $page_title): ?>
                            <li class="active">
                                <a href="#">All</a>
                            </li>
                            <?php else: ?>
                                <li>
                                    <a href="<?php echo get_permalink(get_page_by_path('resource-center' ));?>">All</a>
                            </li>
                        <?php endif; ?>
                            <?php $terms = get_terms( [
                                                'taxonomy' => 'category', // тут укажите правильное название вашей таксономии
                                                'hide_empty' => false,
                                                'pad_counts'  => true,
                                            ] ); 
                                            if (is_array($terms)):
                                                foreach ($terms as $term):?>
                                <?php if($queried_object->slug == $term->slug):
                                    echo '<li class="active"><a href="' . get_term_link($term, "category") . '">' . $term->name. -($term->count). '</a></li>';
                                    else:
                                     echo '<li><a href="' . get_term_link($term, "category") . '">' . $term->name . -$term->count.'</a></li>';
                                 endif;?>
                        <?php endforeach;
                        endif;?>
                        </ul>

                        <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
                            <div class="form-group">
                                <input class="search-input" type="text" placeholder="Search" name="s">
                                <button class="search-submit" type="submit"></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <!-- end filter -->