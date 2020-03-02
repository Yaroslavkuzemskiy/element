<?php $queried_object = get_queried_object();?>

<?php get_header('services');?>

    <main class="main">
  
    
    <?php $page_title = get_the_title( get_option('page_for_posts', true) );?>

    <?php $image = get_field('image_resources', 'option');?>
        <div class="page-heading" style="background-image: url('<?php echo $image['sizes']['large'];?>')">

           
            <?php if( $queried_object->post_title == $page_title):?>
           <h1><?php single_post_title();?></h1>;
        <?php else:?>
           
             <h1><?php single_term_title();?></h1>
        <?php endif;?>
        </div>
        <!-- end page-heading -->

        <?php get_template_part( 'index/filters' ); ?> 
        <?php if (have_posts()):?>
        <section class="posts-list">
            <div class="container">
                <div class="posts-wrapper">
                <?php while (have_posts()):
                the_post(); 
                $thumbnail_src = get_the_post_thumbnail_url($post, 'large');?>
                    <div class="list-item">
                        <div class="image" style="background-image:url(<?php echo $thumbnail_src;?>)">
                            <a href="<?php the_permalink(); ?>" class="post-link"></a>
                        </div>

                        <div class="article-info">
                            <div class="article-info-item">
                            <?php $terms = get_the_terms( $post->ID, 'category' );
                        
                                if( $terms ):
                                $term = array_shift( $terms );?>
                                <a href="<?php echo get_term_link($term, 'category'); ?>" class="second-link"><?php echo $term->name; ?></a>
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

                        <h3 class="h4">
                            <a class="title-link" href="<?php the_permalink(); ?>"
                               data-text="<?php the_title();?>">
                                <span><?php the_title();?></span>
                            </a>
                        </h3>

                        <div class="excerpt">
                            <p>
                            <?php the_excerpt(); ?>
                            </p>
                        </div>
                    </div>

                    <?php endwhile;?>
                    </div>
                  
                </div>
                
            </div>
            
            <? endif; ?>  
           
             
        </section>
        <!--posts-list

         Class "filtered" for "posts-list" hides the post type name in block below post image.
         Is used in case if the user has applied a filter other than "All"

        -->
        <div class="pagination">
        <?php wp_pagenavi(); ?>
    </div>
            <!-- end pagination -->
    </main>

    <footer class="footer">
        <div class="navigation">
            <div class="grid">
                <div class="col_xs-24_sm-8_md-4">
                    <h6>
                        <a href="#">Services</a>
                    </h6>
                    <ul>
                        <li>
                            <a href="#">Data Center Services</a>
                        </li>
                        <li>
                            <a href="#">Connectivity Services</a>
                        </li>
                        <li>
                            <a href="#">Managed Services</a>
                        </li>
                    </ul>
                </div>
                <div class="col_xs-24_sm-8_md-4">
                    <h6>
                        <a href="#">Industry Solutions</a>
                    </h6>
                    <ul>
                        <li>
                            <a href="#">Enterprise</a>
                        </li>
                        <li>
                            <a href="#">Network Providers/ Carriers</a>
                        </li>
                        <li>
                            <a href="#">Artificial Intelligence</a>
                        </li>
                        <li>
                            <a href="#">Internet of Things</a>
                        </li>
                        <li>
                            <a href="#">Goverment</a>
                        </li>
                    </ul>
                </div>
                <div class="col_xs-24_sm-8_md-4">
                    <h6>
                        <a href="#">Data Centers</a>
                    </h6>
                    <ul>
                        <li>
                            <a href="#">Silicon Valley</a>
                        </li>
                        <li>
                            <a href="#">Northern Virginia</a>
                        </li>
                        <li>
                            <a href="#">Chicago</a>
                        </li>
                    </ul>
                </div>
                <div class="col_xs-24_sm-8_md-4">
                    <h6>
                        <a href="#">Resource Center</a>
                    </h6>
                    <ul>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#">Press Releases</a>
                        </li>
                        <li>
                            <a href="#">Industry Insights</a>
                        </li>
                        <li>
                            <a href="#">Videos</a>
                        </li>
                    </ul>
                </div>
                <div class="col_xs-24_sm-8_md-4">
                    <h6>
                        <a href="#">Channel Partners</a>
                    </h6>
                    <ul>
                        <li>
                            <a href="#">About the Program</a>
                        </li>
                        <li>
                            <a href="#">Become a Partner</a>
                        </li>
                    </ul>
                </div>
                <div class="col_xs-24_sm-8_md-4">
                    <h6>
                        <a href="#">About</a>
                    </h6>
                    <ul>
                        <li>
                            <a href="#">Our History</a>
                        </li>
                        <li>
                            <a href="#">The Team</a>
                        </li>
                        <li>
                            <a href="#">Partners</a>
                        </li>
                        <li>
                            <a href="#">Investors</a>
                        </li>
                        <li>
                            <a href="#">Careers</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="socials">
                <p>Follow Us</p>
                <ul>
                    <li>
                        <a href="#">
                            <span style="background-image: url('../images/facebook.svg')">
                                <img src="../images/facebook.svg" alt="img">
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span style="background-image: url('../images/twitter.svg')">
                                <img src="../images/twitter.svg" alt="img">
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span style="background-image: url('../images/linkedin.svg')">
                                <img src="../images/linkedin.svg" alt="img">
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span style="background-image: url('../images/youtube.svg')">
                                <img src="../images/youtube.svg" alt="img">
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <button class="to-top">
                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 56 50.41">
                    <path fill="none" stroke-linecap="round" stroke="#4c4c4c" stroke-width="2" d="M44.19 49.61a27 27 0 1 0-32.43 0"/>
                    <path fill="#fff" d="M28 23.5l-4.5 6h9l-4.5-6z"/>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 56 50.41">
                    <path class="border" stroke-linecap="round" d="M44.19 49.61a27 27 0 1 0-32.43 0"/>
                    <path fill="#fff" d="M28 23.5l-4.5 6h9l-4.5-6z"/>
                </svg>
            </button>

            <div class="info">
                <ul>
                    <li>
                        <a href="#">Terms & Conditions</a>
                    </li>
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>
                </ul>
                <div class="copy">
                    <p>&copy; 2019 Element Critical. All rights reserved.</p>
                </div>
            </div>

        </div>
    </footer>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--only for locations pages-->
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyD83vRYSa60_3o7eJdkuF2R3UsPCyfhm70"></script>
<!--only for locations pages-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.2/lottie.min.js"></script>
<script src="../js/global.js"></script>




</body>
</html>