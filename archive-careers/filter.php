

    <div class="filter multiple">
                <div class="container">
                    <div class="wrapp">
                        <form action="" method="get" id="careers-filter">
                            <div class="form-group">
                                <label for="search-input">Keywords</label>
                                <input name="s" class="search-input" id="search-input" type="text" placeholder="Search" value="<?php echo get_search_query(); ?>">
                                <button class="search-submit" type="submit"></button>
                            </div>
                            <div class="form-group">
                                <label for="location-select">
                                    Location
                                </label>
                                <select id="location-select" name="location">
                                <option value="all">View All</option>
                                    <?php $terms = get_terms( [
                                                'taxonomy' => 'location', // тут укажите правильное название вашей таксономии
                                                'hide_empty' => false,
                                                'pad_counts'  => true,
                                            ] ); 
                                            
                                            if (is_array($terms)):
                                                foreach ($terms as $term):

                                                
                                                    if (isset($_GET['location']) && $term->slug == $_GET['location']):
                                                     echo '<option value="' . $term->slug . '" selected>' . $term->name . '</option>';
                                                        else:
                                                         echo '<option value="' . $term->slug . '">' . $term->name . '</option>';
                                                     endif;
                                               
                                                 endforeach;
                                                endif;
                                                wp_reset_postdata();?>
                                </select>
                            </div>
                            <button class="search-submit" type="submit"></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end filter multiple -->