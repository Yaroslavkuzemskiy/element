<?php get_header('services');?>

    <main class="main">
        <?php $image = get_field('image_contacts');?>
        <div class="page-heading" style="background-image: url(<?php echo $image['sizes']['large'];?>)">
            <h1><?php the_title(); ?></h1>
        </div>
        <!--page-heading section-->
        
<?php get_template_part( 'contacts/map' ); ?> 

<?php get_template_part( 'contacts/contacts' ); ?> 


       

    </main>

  <?php get_footer();?>