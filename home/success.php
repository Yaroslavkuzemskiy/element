<section class="success-story is-visible">
            <div class="container">

                <?php $title = get_field('title_success');
                    if($title):?>
                            <div class="h1"><?php echo($title); ?></div>
                    <?php endif; ?>
                            <div class="wrapp">

                                <?php $image = get_field('placeholder');
                                if($image): ?>
                                
                                        <div class="video-wrapper" style="background-image: url(<?php echo $image['sizes']['large']; ?>)">
                                            <a href="javascript:void(0)" class="play-btn">
                                                <span></span>
                                            </a>
                                <?php endif; ?>
                                            <video controls>
                                            <?php
                                                $file = get_field('video');
                                                
                                                if( $file ):

                                                    // Extract variables.
                                                    $url = $file['url'];
                                                    
                                                    
                                                    if( $url ): ?>
                                                        <source src="<?php echo $url; ?>" type="video/mp4">
                                                     <?php endif; ?>
                                                <?php endif; ?>

                                                        Your browser does not support the video tag.
                                            </video>
                                        </div>
                                        <div class="description">
                                        <?php $subtitle = get_field('description_success');
                                        if($subtitile): ?>  <p>
                                    
                                         <?php endif; ?>
                                                <?php echo($subtitle); ?></p>

                                             <?php $logotype = get_field('logo_success');
                                             
                                             if($logotype): ?>           
                                                    <img src="<?php echo $logotype['sizes']['large']; ?>" alt="Logo">
                                            <?php endif; ?>
                                        </div>
                            </div>
            </div>
        </section>
        <!-- end success-story -->