<?php if(have_rows('logo')): ?>
    
        <section class="logos">
                        <div class="container">
                            <div class="slider-arrow slider-arrow-left white"></div>
                            <div class="slider">

                                <?php while(have_rows('logo')): the_row();
                                    $logo = get_sub_field('image');
                                    ?>
                                    <div class="slide">
                                        <div class="image">

                                        <?php if($logo): ?>
                                            <img src="<?php echo $logo['sizes']['large']; ?>" alt="Logo">
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>   
                            </div>
                            <div class="slider-arrow slider-arrow-right white"></div>
                        </div>
                    </section>
                    <!-- end logos -->
 <?php endif; ?>
                </div>
                <!-- end top-screen -->