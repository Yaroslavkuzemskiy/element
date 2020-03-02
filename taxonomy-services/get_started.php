<?php
      $term = get_queried_object();
     $title = get_field('title_started_services', $term);
     $image = get_field('image_started_services', $term);
     $description = get_field('description_started_services', $term);
     $button = get_field('button_started_services', $term);
     $phone = get_field('phone_started_section', $term);
     if($title):?>

        <section class="contacts-section" style="background-image:url(<?php echo($image['sizes']['large']); ?>)">
                    <div class="holder">
                        <h4><?php echo($title);?></h4>

                        <div class="contacts-section-description">
                            <p><?php echo($description);?></p>
                        </div>
                        <?php if($button): ?>
                                <div class="links-block">
                                    <a class="button reverse-white" data-text="<?php echo($button);?>" href="contacts.html"><?php echo($button);?></a>
                       
                                    <div class="call-block">
                                        <span>
                                        <?php echo($phone);?>
                                        </span>
                                        <a href="tel:8552346493" class="phone-green-link">855-234-6493</a>
                                    </div>
                                </div>
                            <?php endif;?>
                    </div>
                </section>
    <?php endif;?>
                <!-- end contacts-section -->
</main>