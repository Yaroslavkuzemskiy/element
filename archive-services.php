<?php
/* Template Name: Archive Page Custom */
?>
<?php get_header('services'); ?>

    <main class="main">
    <?php $image = get_field('image_service_option', 'option');?>
        <div class="page-heading" style="background-image: url('<?php echo $image['sizes']['large']; ?>')">
        <?php $current_category = get_field('service_title_option', 'option') ?>
        <?php $current_subtitle = get_field('service_subtitle_option', 'option') ?>
            <h1><?php echo $current_category; ?></h1>
        </div>
        <!-- end page-heading -->

        <div class="page-description">
            <div class="wrapp">
                <p><?php echo $current_subtitle; ?></p>
            </div>
        </div>
        <!-- end page-description -->

<?php get_template_part( 'archive-service/list' ); ?> 

<?php get_template_part( 'archive-service/different' ); ?> 

       

        

    </main>
 <?php get_footer();?>