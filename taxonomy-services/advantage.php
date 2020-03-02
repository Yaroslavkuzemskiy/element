<?php $term = get_queried_object();?>
<?php $text = get_field('description_advantage', $term);
if($text):
?>

    <div class="page-description">
                <div class="wrapp">

                    <p><?php echo($text);?></p>
                </div>
            </div>
<?php endif;?>
            <!-- end page-description -->
            <?php if( have_rows('advantage_fields', $term) ): ?>
                    <section class="advantages">
                        <div class="container">
                            <ul class="checkmark-list">

                            <?php while( have_rows('advantage_fields', $term) ): the_row(); 

                                // vars
                                $title = get_sub_field('title');
                                $subtitle = get_sub_field('subtitle');
                      
                                ?>
                                        <li>
                                            <p><?php echo($title);?></p>
                                            <?php echo($subtitle);?>
                                        </li>
                                       
                            <?php endwhile; ?>
                            </ul>
                        </div>
                    </section>
            <?php endif; ?>
                    <!-- end advantages -->