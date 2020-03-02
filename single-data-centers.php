<?php the_post();?>
<?php get_header('services');?>
	<main class="main">
		<div class="page-heading" style="background-image: url('../images/data-center-details.svg')">
			
			<h1><?php the_title();?></h1>
		</div>
		<!--page-heading-->
		
		<div class="container">
			<div class="small-description data-center-details">
				<p>
					<?php the_content();?>
				</p>
				<?php
                $file = get_field('file_data');
                if( $file ): ?>
                        <a href="<?php echo $file['url']; ?>" class="button" download data-text="<?php echo(get_field('button_data'));?>">
                            <?php echo(get_field('button_data'));?>
                        </a>
                <?php endif; ?>
			</div>
		</div>
		<!--Silicon Valley, class data-center-details add margin-bottom-->
		
		<?php get_template_part( 'single-data/checkmark' ); ?> 
		<div><table><p> </p></table>
        </div>
		
        <?php get_template_part( 'single-data/specs' ); ?> 
		
		
		<section class="contacts-section" style="background-image:url(../images/get-started-bg.jpg)">
			<div class="holder">
				<h4>It’s Easy to Get Started</h4>
				<div class="contacts-section-description">
					<p>Always know what you’ll pay with simple, predictable pricing for bandwidth and storage across all
						global data centers.</p>
					<p>We are excited for the opportunity to meet your data center needs.</p>
				</div>
				<div class="links-block">
					<a class="button reverse-white" data-text="Get a Quote" href="contacts.html">Get a Quote</a>
					
					<div class="call-block">
                        <span>
                            For immediate assistance,
                            you can also call us at
                        </span>
						<a href="tel:8552346493" class="phone-green-link">855-234-6493</a>
					</div>
				</div>
			</div>
		</section>
		<!--contacts-section-->
	
	</main>
<?php get_footer();?>