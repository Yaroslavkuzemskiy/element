<section class="whitepaper">
            <div class="container">
                <?php $pdf = get_field('pdf_file');
                      $image = get_field('image_file');
                      $description = get_field('description_file');
                      $button = get_field('button_file');
                      if($pdf): ?>
                            <div class="holder is-visible">
                                <a href="<?php echo $pdf['url']; ?>" target="_blank" class="image">
                                    <img src="<?php echo $image['sizes']['large']; ?>" alt="PDF">
                                </a>
                                <div>
                                    <h4 class="h4">AI for Data Centers 101</h4>
                                    <div class="description">
                                        <p><?php echo $description;?></p>
                                    </div>
                                    <a href="<?php echo $pdf['url']; ?>" target="_blank" class="button"
                                    data-text="<?php echo $button;?>"><?php echo $button;?></a>
                                </div>
                            </div>
                        <?php endif; ?>
            </div>
        </section>
        <!-- end whitepaper -->