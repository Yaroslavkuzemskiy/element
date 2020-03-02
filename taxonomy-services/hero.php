<main class="main">
<?php 
$term = get_queried_object(); 
    $image_bg = get_field('bg_image_services', $term);   ?>

        <div class="page-heading" style="background-image: url('<?php echo($image_bg['sizes']['large']); ?>')">
            <div class="breadcrumbs">
                <a href="<?php echo get_post_type_archive_link('services'); ?>" class="left-link">
                    <span data-text="Back to Services">Back to Services</span>
                </a>
            </div>
            
            <h1><?php single_term_title(); ?></h1>
        </div>
        <!-- end page-heading -->
        <?php $title  = get_field('title_services_taxonomy', $term);
        if($title):?>
        <div class="page-description">
            <div class="wrapp">
                <p><?php echo $title; ?></p>
            </div>
        </div>
<?php endif;?>
        <!-- end page-description -->