<?php
     $title = get_field('title_get_started');
     $image = get_field('image_get_started');
     $description = get_field('description_get_started');
     $button = get_field('button_get_started');
     $phone = get_field('phone_description');
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