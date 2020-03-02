<?php $title = get_field('title_specs');
if($title):?>  
    <section class="specs is-visible">
                    <div class="heading">
                        <h3 class="h4"><?php echo $title;?></h3>
                        <a href="http://www.pdf995.com/samples/pdf.pdf" target="_blank" class="green-link">
                            <span data-text="Download Full Specs">Download Full Specs</span>
                        </a>
                    </div>
                    <div class="wrapp">
                    <?php $count = 1;?>
                    <?php while(have_rows('specs')): the_row();
                    $title_specs = get_sub_field('title');
                    
                   ?>

                        
                        <div class="item <?php if($count == 1) echo ('active');?>">
                            <h4 class="h6"><?php echo $title_specs;?>
                                <span></span>
                            </h4>
                            <ul>
                            <?php while(have_rows('subspecs')): the_row();
                            $subtext = get_sub_field('subtext');?>
                                <li><?php echo $subtext;?></li>
                            <?php endwhile;?>
                            </ul>
                        </div>
                   
                    <?php $count++ ?>
                    <?php endwhile;?>
                  
                    </div>
                </section>
<?php endif;?>
                <!--specs-->
            </div>