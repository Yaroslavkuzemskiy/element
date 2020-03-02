<?php get_header('services');
the_post();?>
	<main class="main">
		<div class="breadcrumbs">
			<a href="<?php echo get_post_type_archive_link('team'); ?>" class="left-link">
				<span data-text="Back to The Team">Back to The Team</span>
			</a>
		</div>
		
		<!--person article-->
		<article class="person-article is-visible">
			<div class="wrapp">
				<div class="description">
					<h1 class="h2"><?php the_title();?></h1>
					<h2 class="position"><?php echo(get_field('position'));?></h2>
					<div class="about">
                    <?php $content = the_content();
                     if($content):?>
                         <?php the_content(); 
                         endif;?>
					</div>
                    <?php $text = get_field('text_team');
                    ?>
					<p><?php echo($text);?></p>
				</div>
				<div class="photo">
                <?php the_post_thumbnail(); ?>
				</div>
			</div>
		</article>
		<!-- end person-article -->
	</main>
	<?php get_footer();?>