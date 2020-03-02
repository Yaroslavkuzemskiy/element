<?php the_post();?>
<?php get_header('services');?>

    <main class="main">
        <div class="breadcrumbs">
            <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="left-link">
                <span data-text="Back to Blog">Back to Blog</span>
            </a>
        </div>

        <div class="content-holder">
            <article class="content">
                <h1 class="h2"><?php the_title();?></h1>
            <?php $thumb = the_post_thumbnail();
            if($thumb): echo $thumb['large'];
            endif;?>
               

                    <div class="article-info">
                        <div class="article-info-item">
                        <?php $terms = get_the_terms( $post->ID, 'category' );
                        
                        if( $terms ):
                        $term = array_shift( $terms );?>
                       
                        
                
                        <a href="<?php echo get_term_link($term, 'category'); ?>"
                        class="second-link"><?php echo $term->name; ?></a>
                             
                    <?php endif;?>
                        </div>
                   
                        <div class="article-info-item">
                        
                            <span class="name"><?php echo get_author_full_name_by_id($post->post_author); ?></span>
                        </div>
                        <div class="article-info-item">
                        <?php $time = strtotime($post->post_date);
                            $date_time = date('Y-M-d', $time);
                            $post_date = date('M j, Y', $time); ?>
                            <time datetime="<?php echo $date_time; ?>"><?php echo $post_date; ?></time>
                        </div>
                    </div>
                <!-- end article-info -->

                <p><?php the_content();?></p>
                <?php if( have_rows('flexible_content_single') ): ?>
                    <?php while( have_rows('flexible_content_single') ): the_row(); ?>
                        <?php if( get_row_layout() == 'video_single' ): ?>
                            <?php $video = get_sub_field('file');
                                  $placeholder = get_sub_field('placeholder');?>

                        <div class="video-wrapper" style="background-image: url(<?php echo $placeholder['sizes']['large'];?>)">
                            <a href="javascript:void(0)" class="play-btn">
                                <span></span>
                            </a>
                            <video controls>
                                <source src="<?php echo $video['url'];?>" type="<?php echo $video['mime_type'];?>">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        
                        <!-- end video-wrapper -->

                        <?php  elseif (get_row_layout() == 'text_single'):
                            $text = get_sub_field('content_single');?>
                        <p>
                            <?php echo $text;?>
                        </p>

                        <?php  elseif (get_row_layout() == 'author_single'):
                            $title = get_sub_field('title_author');
                            $block = get_sub_field('text_author');
                            ?>
                        <div class="author-description">
                            <h6 class="heading"><?php echo $title;?></h6>

                            <p><?php echo $block;?></p>
                        </div>
                        <!-- end author-description -->
                    </article>
                    <?php endif;?>
                    <!--end content-->
                <?php endwhile; ?>
            <?php endif; ?>

            <div class="share">
                <span>Share</span>
                <ul class="share-social">
                <li>
                        <a class="prettySocial icon-facebook" data-type="facebook" data-url="<?php the_permalink(); ?>"
                        href="javascript:void(0)"></a>
                    </li>
                    <li>
                        <a class="prettySocial icon-twitter" data-type="twitter" data-url="<?php the_permalink(); ?>"
                        data-description="<?php the_title(); ?>" href="javascript:void(0)"></a>
                    </li>
                    <li>
                        <a class="icon-email" href="mailto:"></a>
                    </li>
                    <li>
                        <a class="icon-print" href="javascript:void(0)" onclick="window.print()"
                        aria-label="Print page"></a>
                    </li>
                </ul>
            </div>
            <!-- end share -->
        </div>
    </main>
    <?php $image_start = get_field('image_started_single');
          $get_started_title = get_field('title_started_single');
          $get_started_text = get_field('text_started_single');
    ?>
    <?php if($image_start):?>
    <section class="contacts-section" style="background-image:url(<?php echo $image_start['sizes']['large']; ?>)">
    <?php endif; ?>
    <?php if($get_started_title):?>
        <div class="holder">
            <h4><?php echo $get_started_title; ?></h4>
            
            <div class="contacts-section-description">
                <p><?php echo $get_started_text;?></p>
            </div>
            
            <div class="links-block">
                <a class="button reverse-white" data-text="Get a Quote" href="contacts.html">Get a Quote</a>
                
                <div class="call-block">
                        <span>
                            For immediate assistance,
                            you can also call us at
                        </span>
                    <a class="phone-green-link" href="tel:8552346493">855-234-6493</a>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </section>
    <!-- end contacts-section -->
    <?php
        $resource_center = get_field('posts_single');
        if (is_array($resource_center)): ?>
            <section class="posts-section">
                <div class="container">
                    <h5 class="h3">Resource Center</h5>
                    <div class="post-slider">
                    <?php foreach($resource_center as $post):
                         $post_terms = get_the_terms($post->ID, 'category');
                         $time = strtotime($post->post_date);
                        
                             $date_time = date('Y-m-d', $time);
                             $post_date = date('M j, Y', $time);
                         
                         $thumbnail_src = get_the_post_thumbnail_url($post->ID, 'large');?>
                        
                            <div>
                                <div class="slider-item"
                                    style="background: url(<?php echo $thumbnail_src;?>)no-repeat 50% 50% / cover;">
                                    <a href="<?php echo get_permalink($post->ID); ?>" class="post-link"></a>
                                    
                                    <span class="type"><?php echo $post_terms[0]->name; ?></span>
                                    
                                    <div class="title">
                                        <h3 class="h5"><?php the_title(); ?></h3>
                                        <span class="user-name"><?php echo get_author_full_name_by_id($post->post_author); ?></span>
                                    </div>
                                    
                                    <time class="date" datetime="<?php echo $date_time; ?>"><?php echo $post_date; ?></time>
                                </div>
                            </div>
                       
                            <?php endforeach;?>
                    </div>
                    
                </div>
            </section>
            <!-- end posts-section -->
        <?php endif; ?>
    <?php get_footer();?>