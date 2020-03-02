<main class="main">


        <div class="page-heading" style="background-image: url('<?php echo($image_bg['sizes']['large']); ?>')">
            
            
            <h1><?php post_type_archive_title(); ?></h1>
        </div>
        <!-- end page-heading -->
        <?php $title  = get_field('title_solution', 'option');
        if($title):?>
        <div class="page-description">
            <div class="wrapp">
                <p><?php echo $title; ?></p>
            </div>
        </div>
<?php endif;?>
        <!-- end page-description -->