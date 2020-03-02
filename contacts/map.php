<?php
$title = get_field('title_contacts');
 if( have_rows('adress') ):
    while ( have_rows('adress') ) : the_row();
$map = get_sub_field('adress');
var_dump($map);

$marker = get_field('point_contacts');
if (is_array($marker)):
    $marker_src = $marker['sizes']['medium'];
else:
    $marker_src = '';
endif;?>
<div class="container">
<?php if ($map_lat && $map_lng):?>
            <div class="contacts-map">
                <div class="map-block">
                    <div class="ratio"></div>
                    <div id="google-map" class="google-map" data-lat="<?php echo esc_attr($map['lat']); ?>" data-lng="<?php echo esc_attr($map['lng']); ?>" data-zoom="8" data-logo="<?php echo $marker_src; ?>" data-title="<?php echo $title; ?>"></div>
                </div>
 <?php endif;?>
 <?php endwhile; ?>
                <div class="text">
                    <h4 class="h4"><?php echo $title; ?></h4>

                    <address>
                        <p>1 Sansome St #1500</p>
                        <p>San Francisco, CA 94104</p>
                    </address>

                    <a class="right-link" href="#">
                        <span data-text="Get Directions">Get Directions</span>
                    </a>

                    <p>For immediate assistance, you can also call us at</p>

                    <a class="phone-green-link" href="tel:8552346493">855-234-6493</a>
                </div>
            </div>
            <!-- end contacts-map -->
        </div>
        <?php endif; ?>