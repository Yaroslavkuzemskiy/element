<?php get_header('services');
$image = get_field('image_team', 'option');?>
    <main class="main">

        <div class="page-heading" style="background-image: url('<?php echo $image['sizes']['large'];?>')">
            <h1 class="h2"><?php post_type_archive_title();?></h1>
        </div>
        <!-- end page-heading -->

<?php $text = get_field('text_careers', 'option');
      $link = get_field('button_careers', 'option');  
      $link_url = $link['url'];
      $link_title = $link['title'];
        if ($text):
?>
                <div class="container">
                    <div class="small-description">
                        <p>
                           <?php echo ($text);?>
                        </p>

                        <a href="<?php echo esc_url( $link_url ); ?>" class="button linkedin" data-text="<?php echo esc_html( $link_title ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <h2><?php echo(get_field('title_careers', 'option'));?></h2>
                        <p><?php echo(get_field('description_careers', 'option'));?></p>
                    </div>
                    <!-- end small-description -->
                </div>
        <?php endif;?>

<?php get_template_part( 'archive-careers/filter' ); ?> 

        <section class="result-list">
            <div class="wrapp">
            <?php if(have_posts()):
                  while(have_posts()): the_post();?>
                <div class="item">
                    <h3 class="h4">
                        <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                    </h3>

                    <?php $termin = get_the_terms( $post->ID, 'location' );
                        
                        if( $termin ):?>
                    <h4 class="category"><?php echo $termin[0]->name; ?></h4>
                        <?php endif;?>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="green-link">
                        <span data-text="Job Details">Job Details</span>
                    </a>
                </div>
            <?php endwhile;?>
            <?php endif ;?>
                <!-- end item -->

               

            </div>
        </section>
        <!-- end result-list -->



    <div class="pagination">
        <?php wp_pagenavi(); ?>
    </div>

        <!-- end pagination -->
    </main>
    <script>
        jQuery(document).ready(function() {
            "use strict";
            jQuery("#careers-filter").submit(function() {
                if(jQuery("#search-input").val() == "") {
                    jQuery("#search-input").remove();
                }
                if(jQuery("#location-select").val() == "" || jQuery("#location-select").val() == "all") {
                    jQuery("#location-select").remove();
                }
            });
        });
    </script>
  <?php get_footer();?>