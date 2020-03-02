<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.png" >

	<?php wp_head();?>
	
</head>
<body>
<?php $image = get_field('image_error', 'option');?>
<section class="error-page" style="background-image: url('<?php echo $image['sizes']['large'];?>')">
	<strong class="main-logo">
		<a href="<?php echo get_home_url();?>">
		<?php 
                 $logo = get_field('option_header_logo', 'option');
                 $logo_white = get_field('option_white_logo', 'option');
                
                 if( !empty($logo) && !empty($logo_white)): ?>

                    <img class="white-logo" src="<?php echo $logo_white['sizes']['large']; ?>" alt="Logo">
                    <img class="gray-logo" src="<?php echo $logo['sizes']['large']; ?>" alt="Logo">

                <?php endif; ?>
		</a>
	</strong>
	<div class="wrapp">
	<?php $title = get_field('title_error', 'option');
	      $subtitle = get_field('subtitle_error', 'option');?>
		<div class="title"><?php echo $title;?></div>
		<div><?php echo $subtitle;?></div>
		<a href="<?php echo get_home_url();?>" class="button reverse" data-text="Back Home">Back Home</a>
	</div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--only for locations pages-->
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyD83vRYSa60_3o7eJdkuF2R3UsPCyfhm70"></script>
<!--only for locations pages-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.2/lottie.min.js"></script>
<script src="../js/global.js"></script>




</body>
</html>