<?php
/* Template Name: Archive Page Custom */
?>
<?php get_header('services');?>
	<main class="main">
		
		<!--page-heading section-->
        <?php $image = get_field('image_team', 'option');
              $text = get_field('description_team', 'option');
        ?>
		<div class="page-heading" style="background-image: url('<?php echo $image['sizes']['large'];?>')">
        
			<h1><?php post_type_archive_title(); ?></h1>
		</div>
		<!-- end page-heading -->
		
		<!--page-description-->
		<div class="page-description">
			<div class="wrapp">
                <?php if($text):?>
				<p><?php echo $text;?></p>
                <?endif;?>
			</div>
		</div>
		<!-- end page-description -->
		
<?php get_template_part( 'archive_team/team' ); ?> 
<?php get_template_part( 'archive_team/join' ); ?> 
			
			
		
<?php get_footer();?>