<?php the_post();?>
<?php get_header('services');
$image = get_field('image_team', 'option');?>
<main class="main">
<div class="page-heading" style="background-image: url(<?php echo $image['sizes']['large'];?>)">
    <h1><?php the_title(); ?></h1>
</div>
<div class="content-holder">
    <div class="small-description">
        <p><?php the_content();?>
    </div>
    <!-- end small-description -->

    
    <div class="share">
    <span>Share</span>
    <ul class="share-social">
        <li>
            <a class="prettySocial icon-facebook" data-type="facebook" data-url="http://elementcritical-dev.bigdropinc.net/careers/senior-account-executive/" href="javascript:void(0)"></a>
        </li>
        <li>
            <a class="prettySocial icon-twitter" data-type="twitter" data-url="http://elementcritical-dev.bigdropinc.net/careers/senior-account-executive/" data-description="Senior Account Executive" href="javascript:void(0)"></a>
        </li>
        <li>
            <a class="icon-email" href="mailto:"></a>
        </li>
        <li>
            <a class="icon-print" href="javascript:void(0)" onclick="window.print()" aria-label="Print page"></a>
        </li>
    </ul>
</div>

<script type="text/javascript" class="source">
    $('.prettySocial').prettySocial();
</script>
</div>
</main>
<?php get_footer();?>