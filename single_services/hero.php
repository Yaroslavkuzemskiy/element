<main class="main">

<div class="page-heading" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/data-center-services-bg.svg')">
    <div class="breadcrumbs">
        <a href="<?php echo get_post_type_archive_link('services'); ?>" class="left-link">
            <span data-text="Back to Data Center Services">Back to Data Center Services</span>
        </a>
    </div>
    <h1><?php the_title(); ?></h1>
</div>
<!-- end page-heading -->

<div class="page-description">
    <div class="wrapp">
        <?php $text = get_field('description_single_services');
        
        if($text): ?>
    
            <p><?php echo($text); ?></p>
        <?php endif;?>
    </div>
</div>
<!-- end page-description -->